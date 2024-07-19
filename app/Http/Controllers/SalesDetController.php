<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use App\Models\Sales;
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
}
