<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function transaksi() {
        $sales = Sales::with('customer')->get();

        return view('transaksi.data', compact('sales'));
    }
}
