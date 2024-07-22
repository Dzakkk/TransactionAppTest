<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Sales;
use App\Models\Sales_det;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function transaksi()
    {
        $sales = Sales::with('customer', 'salesDets')->get();
        $det = Sales_det::with('barang', 'sales1')->get();
        $total = Sales::all()->sum('total_bayar');

        return view('transaksi.data', compact('sales', 'det', 'total'));
    }

    public function search(Request $request)
    {
        $term = $request->get('query');

        $salesResults = Sales::search($term)->get();
        $customerResults = Customer::search($term)->get();

        $salesFromCustomers = Sales::whereIn('cust_id', $customerResults->pluck('id'))->get();

        $sales = $salesResults->merge($salesFromCustomers);

        $total = $sales->sum('total_bayar');

        $det = Sales_det::with('barang', 'sales1')->whereIn('transaksi', $sales->pluck('kode'))->get();

        return view('transaksi.data', compact('sales', 'det', 'total'));
    }

    
    public function dashboard()
    {
        $total = Sales::all()->sum('total_bayar');

        $transaction = Sales::count();

        $cust = DB::table('sales')
            ->select('customers.id', 'customers.name', DB::raw('count(sales.id) as total'))
            ->join('customers', 'sales.cust_id', '=', 'customers.id')
            ->groupBy('customers.id', 'customers.name')
            ->orderBy('total', 'desc')
            ->take(3)
            ->get();



        $brg = DB::table('sales_dets')
            ->select('barangs.id', 'barangs.nama', DB::raw('SUM(sales_dets.qty) as total'))
            ->join('barangs', 'sales_dets.barang_id', '=', 'barangs.id')
            ->groupBy('barangs.id', 'barangs.nama')
            ->orderBy('total', 'desc')
            ->take(3)
            ->get();


        return view('content.dashboard', compact('total', 'transaction', 'cust', 'brg'));
    }

    public function about() {
        return view('layouts.about');
    }
}
