@extends('layouts.main')

@section('transaksi')


<form class="flex items-center max-w-sm mx-auto" action="{{ route('search') }}" method="GET">   
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        </div>
        <input type="search" name="query" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
    </div>
    <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
    </button>
</form>


<div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">No Transaksi</th>
                <th scope="col" class="px-6 py-3">Tanggal</th>
                <th scope="col" class="px-6 py-3">Customer</th>
                <th scope="col" class="px-6 py-3">QTY</th>
                <th scope="col" class="px-6 py-3">Sub Total</th>
                <th scope="col" class="px-6 py-3">diskon</th>
                <th scope="col" class="px-6 py-3">ongkir</th>
                <th scope="col" class="px-6 py-3">total</th>
                <th scope="col" class="px-2 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody class="">
            @if ($sales->isEmpty())
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td colspan="5" class="px-6 py-3 text-center">
                        <h1 class="text-3xl">DATA KOSONG</h1>
                    </td>
                </tr>
            @endif
            @foreach ($sales as $c)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-3">{{ $loop->iteration }}</th>
                    <td class="px-6 py-3">{{ $c->kode }}</td>
                    <td class="px-6 py-3">{{ date('d-M-Y', strtotime($c->tgl)) }}</td>
                    <td class="px-6 py-3">{{ $c->customer->name }}</td>
                    <td class="px-6 py-3">{{ $c->salesDets->sum('qty') }}</td>
                    <td class="px-6 py-3">{{ number_format($c->subtotal, 2) }}</td>
                    <td class="px-6 py-3">{{ number_format($c->diskon, 2) }}</td>
                    <td class="px-6 py-3">{{ number_format($c->ongkir, 2) }}</td>
                    <td class="px-6 py-3">{{ number_format($c->total_bayar, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4"></th>
                <th colspan="4">Grand Total</th>
                <th class="px-6 py-3">{{ number_format($total, 2) }}</th>
            </tr>
        </tfoot>
    </table>
   
</div>

<div class="my-2 flex gap4">
    <button onclick="show('history')"
        class="block text-white mx-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">History Transaksi</button>
        <a href="/transaksi"
        class="block text-white mx-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">Buat Transaksi</a>
</div>

<script>
    function show(id) {
        var x = document.getElementById(id);

        if (x.style.display == "none") {
            x.style.display = "block"
        } else {
            x.style.display = "none"
        }
    }
</script>

<div id="history" class="relative overflow-x-auto shadow-lg sm:rounded-lg mt-6" style="display: none">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">No Transaksi</th>
                <th scope="col" class="px-6 py-3">Barang</th>
                <th scope="col" class="px-6 py-3">harga</th>
                <th scope="col" class="px-6 py-3">QTY</th>
                <th scope="col" class="px-6 py-3">Diskon(%)</th>
                <th scope="col" class="px-6 py-3">Diskon Nilai</th>
                <th scope="col" class="px-6 py-3">Harga Diskon</th>
                <th scope="col" class="px-6 py-3">total</th>
            </tr>
        </thead>
        <tbody class="">
            @if ($det->isEmpty())
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td colspan="5" class="px-6 py-3 text-center">
                        <h1 class="text-3xl">DATA KOSONG</h1>
                    </td>
                </tr>
            @endif
            @foreach ($det as $c)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-3">{{ $loop->iteration }}</th>
                    <td class="px-6 py-3">{{ $c->transaksi }}</td>
                    <td class="px-6 py-3">{{ $c->barang_id }}</td>
                    <td class="px-6 py-3">{{ $c->harga_bandrol }}</td>
                    <td class="px-6 py-3">{{ $c->qty }}</td>
                    <td class="px-6 py-3">{{ $c->diskon_pct }}</td>
                    <td class="px-6 py-3">{{ number_format($c->diskon_nilai, 2) }}</td>
                    <td class="px-6 py-3">{{ number_format($c->harga_diskon, 2) }}</td>
                    <td class="px-6 py-3">{{ number_format($c->total, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection