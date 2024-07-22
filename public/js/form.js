$(document).ready(function() {
    $('.select2').select2();

    $('#customer').on('change', function() {
        var selectedOption = $(this).find(':selected');

        $('#telp').val(selectedOption.data('telp'));
        $('#kode').val(selectedOption.data('kode'));
    });

    function calculateSubTotal() {
        let subTotal = 0;
        $('input[name^="sales_dets"][name$="[total]"]').each(function() {
            let total = parseFloat($(this).val()) || 0;
            subTotal += total;
        });
        $('#sub_total').val(subTotal.toFixed(2));

        var diskon = parseFloat($('input[name="diskon"]').val()) || 0;
        var ongkir = parseFloat($('input[name="ongkir"]').val()) || 0;

        total_bayar = subTotal - diskon + ongkir;

        $('#total_bayar').val(total_bayar.toFixed(2));
    }

    $(document).on('change', 'select[name^="sales_dets"]', function() {
        var selectElement = $(this);

        var selectedOption = selectElement.find(':selected');

        var salesDetDiv = selectElement.closest('.flex');
        var namaInput = salesDetDiv.find('input[name$="[nama]"]');
        var hargaBandrolInput = salesDetDiv.find('input[name$="[harga_bandrol]"]');

        namaInput.val(selectedOption.data('nama'));
        hargaBandrolInput.val(selectedOption.data('harga'));
    });

    $(document).on('input', 'input[name^="sales_dets"][name$="[diskon_pct]"]', function() {
        var diskonPctInput = $(this);
        var salesDetDiv = diskonPctInput.closest('.flex');
        var hargaBandrolInput = salesDetDiv.find('input[name$="[harga_bandrol]"]');
        var diskonNilaiInput = salesDetDiv.find('input[name$="[diskon_nilai]"]');
        var hargaDiskonInput = salesDetDiv.find('input[name$="[harga_diskon]"]');
        var qtyInput = salesDetDiv.find('input[name$="[qty]"]');
        var totalInput = salesDetDiv.find('input[name$="[total]"]');

        var hargaBandrol = parseFloat(hargaBandrolInput.val()) || 0;
        var diskonPct = parseFloat(diskonPctInput.val()) || 0;

        var diskonNilai = (hargaBandrol * diskonPct) / 100;
        var hargaDiskon = hargaBandrol - diskonNilai;
        diskonNilaiInput.val(diskonNilai.toFixed(2));
        hargaDiskonInput.val(hargaDiskon.toFixed(2));

        if (qtyInput.val() !== "") {
            var qty = parseFloat(qtyInput.val()) || 0;
            var total = qty * hargaDiskon;
            totalInput.val(total.toFixed(2));
            calculateSubTotal();
        }
    });

    $(document).on('input', 'input[name^="sales_dets"][name$="[qty]"]', function() {
        var qtyInput = $(this);
        var salesDetDiv = qtyInput.closest('.flex');
        var hargaBandrolInput = salesDetDiv.find('input[name$="[harga_bandrol]"]');
        var hargaDiskonInput = salesDetDiv.find('input[name$="[harga_diskon]"]');
        var diskonPctInput = salesDetDiv.find('input[name$="[diskon_pct]"]');
        var totalInput = salesDetDiv.find('input[name$="[total]"]');

        if (diskonPctInput.val() === "") {
            totalInput.val("");
            calculateSubTotal();
            return;
        }

        var qty = parseFloat(qtyInput.val()) || 0;
        var hargaBandrol = parseFloat(hargaBandrolInput.val()) || 0;
        var hargaDiskon = parseFloat(hargaDiskonInput.val());

        var total;
        if (isNaN(hargaDiskon)) {
            total = qty * hargaBandrol;
        } else {
            total = qty * hargaDiskon;
        }

        totalInput.val(total.toFixed(2));
        calculateSubTotal();
    });

    $(document).on('input', 'input[name="diskon"], input[name="ongkir"]', function() {
        calculateSubTotal();
    });

    $(document).on('input', 'input[name^="sales_dets"]', function() {
        calculateSubTotal();
    });

});
