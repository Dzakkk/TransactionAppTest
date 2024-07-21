@extends('layouts.main')

@section('form_transaksi')
    <form action="/transaksi/new/" method="post">
        @csrf
        <div class="md:grid md:grid-cols-2 gap-4">
            <div class="items-center justify-center rounded mb-2 bg-gray-100 h-32 p-3 dark:bg-gray-800">
                <div class="col-span-2">
                    <label for="Transaksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                        Transaksi</label>
                    <input type="text" name="kode" id="Transaksi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="2024XX-XXXX" required="" value="{{ $transactionNumber }}">
                </div>
                <div class="col-span-2 mt-1">
                    <label for="Tanggal"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type customer name" required="" value="">
                </div>
            </div>
            <div class="items-center justify-center rounded mb-2 bg-gray-100 h-32 p-3 dark:bg-gray-800">
                <div class="col-span-2">
                    <label for="customer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a
                        Customer</label>
                    <select id="customer" name="customer_name" style="width: 100%"
                        class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Choose Customer</option>
                        @foreach ($cust as $c)
                            <option value="{{ $c->name }}" data-telp="{{ $c->telp }}"
                                data-kode="{{ $c->kode }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex w-full mt-1">
                    <div class="w-1/2 mr-1">
                        <label for="telp"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone</label>
                        <input type="tel" name="telp" id="telp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="0877..." required="" value="" maxlength="13">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label for="kode"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kode</label>
                        <input type="text" name="customer_kode" id="kode"
                            oninput="this.value = this.value.toUpperCase()"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required="" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="h-auto mt-4 mb-3 rounded bg-gray-100 dark:bg-gray-800 overflow-x-auto">
            <div id="sales-details">
                <div class="flex px-3 space-x-2 text-sm py-1">
                    <div>
                        <label for="kode_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                            Barang</label>
                        <select name="sales_dets[0][kode_barang]" id="kode_barang" style="width: 105px;"
                            class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required>
                            <option value="">Choose Barang</option>
                            @foreach ($brg as $c)
                                <option value="{{ $c->kode }}" data-nama="{{ $c->nama }}"
                                    data-harga="{{ $c->harga }}">{{ $c->kode }} - {{ $c->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="sales_dets[0][nama]" id="nama" style="width: 105px"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required>
                    </div>
                    <div>
                        <label for="qty"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty</label>
                        <input type="text" name="sales_dets[0][qty]" id="qty" style="width: 50px"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required>
                    </div>
                    <div>
                        <label for="harga_bandrol"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Bandrol</label>
                        <input type="text" name="sales_dets[0][harga_bandrol]" id="harga_bandrol" style="width: 105px"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required>
                    </div>
                    <div>
                        <label for="diskon_pct" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon
                            (%)</label>
                        <input type="text" name="sales_dets[0][diskon_pct]" id="diskon_pct" style="width: 75px"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required>
                    </div>
                    <div>
                        <label for="diskon_nilai"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon (Nilai)</label>
                        <input type="text" name="sales_dets[0][diskon_nilai]" id="diskon_nilai" style="width: 105px"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required>
                    </div>
                    <div>
                        <label for="harga_diskon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Diskon</label>
                        <input type="text" name="sales_dets[0][harga_diskon]" id="harga_diskon" style="width: 105px"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required>
                    </div>
                    <div>
                        <label for="total"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total</label>
                        <input type="text" name="sales_dets[0][total]" id="total" style="width: 105px"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="flex m-1 p-3">
                <button type="button" onclick="addSalesDet()"
                    class="inline-flex mr-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>Add Input</button>
                <div>
                    <p class="italic text-sm text-red-700">*isi semua diskon dengan 0 jika tidak ada diskon</p>
                    <p class="italic text-sm text-blue-700"><- Button untuk menambah input barang</p>
                </div>

            </div>
        </div>

        <div class="w-full flex justify-end">
            {{-- <div class="items-center justify-center rounded bg-gray-100 h-32 p-3 dark:bg-gray-800">
                <p class="italic text-red-700">*isi semua diskon atau ongkir dengan 0 jika tidak ada diskon atau ongkir</p>
            </div> --}}
            <div class="items-center justify-center md:items-end md:w-1/2 rounded bg-gray-100 h-32 p-3 dark:bg-gray-800">
                <div class="col-span-2">
                    <label for="sub_total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub
                        Total</label>
                    <input type="text" name="sub_total" id="sub_total"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="2024XX-XXXX" required="" value="">
                </div>
                <div class="flex w-full mt-1">
                    <div class="w-1/2 mr-1">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon</label>
                        <input type="text" name="diskon" id="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="2000" required value="">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label for="ongkir"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ongkir</label>
                        <input type="text" name="ongkir" id="ongkir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="2000" required value="">
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="total_bayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        total bayar</label>
                    <input type="text" name="total_bayar" id="total_bayar"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="20000000" required="" value="">
                </div>
            </div>
        </div>
        <div class="flex justify-end p-3">
            <button type="submit"
                class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm m-4 px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Submit
            </button>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script>
        let count = 1;

        function addSalesDet() {
            const salesDetDiv = document.createElement('div');
            salesDetDiv.classList.add('flex', 'px-3', 'space-x-2', 'text-sm', 'py-1');
            salesDetDiv.innerHTML = `
    <div>
        <select name="sales_dets[${count}][kode_barang]" id="kode_barang_${count}" 
            class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="width: 105px" required>
            <option value="">Choose Barang</option>
            @foreach ($brg as $c)
            <option value="{{ $c->kode }}" data-nama="{{ $c->nama }}" data-harga="{{ $c->harga }}">{{ $c->kode }} - {{ $c->nama }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <input type="text" name="sales_dets[${count}][nama]" id="nama_${count}" style="width: 105px"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="" required>
    </div>
    <div>
        <input type="text" name="sales_dets[${count}][qty]" id="qty_${count}" style="width: 50px"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="" required>
    </div>
    <div>
        <input type="text" name="sales_dets[${count}][harga_bandrol]" id="harga_bandrol_${count}" style="width: 105px"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="" required>
    </div>
    <div>
        <input type="text" name="sales_dets[${count}][diskon_pct]" id="diskon_pct_${count}" style="width: 75px"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="" required>
    </div>
    <div>
        <input type="text" name="sales_dets[${count}][diskon_nilai]" id="diskon_nilai_${count}" style="width: 105px"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="" required>
    </div>
    <div>
        <input type="text" name="sales_dets[${count}][harga_diskon]" id="harga_diskon_${count}" style="width: 105px"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="" required>
    </div>
    <div>
        <input type="text" name="sales_dets[${count}][total]" id="total_${count}" style="width: 105px"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="" required>
    </div>
`;
            document.getElementById('sales-details').appendChild(salesDetDiv);
            $('.select2').select2();
            count++;
        }
    </script>
@endsection
