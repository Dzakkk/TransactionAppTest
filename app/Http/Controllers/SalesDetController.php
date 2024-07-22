<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use App\Models\Sales;
use App\Models\Sales_det;
use Illuminate\Http\Request;

class SalesDetController extends Controller
{
    public function transaksi_new() {

        $brg = Barang::all();
        $cust = Customer::all();

        $currentYearMonth = date('Ym');
        $lastTransaction = Sales::where('kode', 'like', $currentYearMonth . '%')
                                ->orderBy('kode', 'desc')
                                ->first();

        if ($lastTransaction) {
            $lastTransactionNumber = intval(substr($lastTransaction->kode, -4));
            $newTransactionNumber = str_pad($lastTransactionNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newTransactionNumber = '0001';
        }

        $transactionNumber = $currentYearMonth . '-' . $newTransactionNumber;

        return view('transaksi.form', compact('transactionNumber', 'brg', 'cust'));
    }

    public function transaction(Request $request) {

        $request->validate([
            'kode' => 'required',
            'tanggal' => 'required',
            'customer_name' => 'required',
            'telp' => 'required',
            'customer_kode' => 'required',
            'sub_total' => 'required',
            'diskon' => 'required',
            'ongkir' => 'required',
            'total_bayar' => 'required',
        ]);

        $customer = Customer::where('kode', $request->customer_kode)->first();
        if (!$customer) {
            return redirect('transaksi')->withErrors(['customer_kode' => 'Customer not found.']);
        }
        
        $cust_id = $customer->id;
        $salesDetsData = [];
        foreach ($request->sales_dets as $det) {
            $brg = Barang::where('kode', $det['kode_barang'])->first();
            $salesDetsData[] = [
                'transaksi' => $request->kode,
                'barang_id' => $brg->id,
                'qty' => $det['qty'],
                'harga_bandrol' => $det['harga_bandrol'],
                'diskon_pct' => $det['diskon_pct'],
                'diskon_nilai' => $det['diskon_nilai'],
                'harga_diskon' => $det['harga_diskon'],
                'total' => $det['total'],
            ];
        }

        Sales_det::insert($salesDetsData);

        Sales::create([
            'kode' => $request->kode,
            'tgl' => $request->tanggal,
            'cust_id' => $cust_id,
            'subtotal' => $request->sub_total,
            'diskon' => $request->diskon,
            'ongkir' => $request->ongkir,
            'total_bayar' => $request->total_bayar,
        ]);

        return redirect('/daftar/transaksi')->with('success', 'berhasil mass');
    }
}
