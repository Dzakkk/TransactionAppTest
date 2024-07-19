@extends('layouts.main')

@section('transaksi')
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
                    <td class="px-6 py-3">{{ $c->tanggal }}</td>
                    <td class="px-6 py-3">{{ $c->customer->name }}</td>
                    <td class="px-6 py-3">QTY</td>
                    <td class="px-6 py-3">{{ $c->sub_total }}</td>
                    <td class="px-6 py-3">{{ $c->diskon }}</td>
                    <td class="px-6 py-3">{{ $c->ongkir }}</td>
                    <td class="px-6 py-3">{{ $c->total }}</td>
                    <td class="px-2 py-4 text-right inline-flex">
                        <button data-modal-target="edit-modal-{{ $c->id }}" data-modal-toggle="edit-modal-{{ $c->id }}"
                        class="block text-white mx-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Edit
                    </button>                         
                        <button data-modal-target="popup-modal-{{ $c->id }}"
                            data-modal-toggle="popup-modal-{{ $c->id }}"
                            class="block text-white mx-1 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                            type="button">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4"></th>
                <th colspan="4">Grand Total</th>
                <th class="px-6 py-3">Total</th>
            </tr>
        </tfoot>
    </table>
    {{-- <div class="m-2">
        {{ $cus->onEachSide(3)->links() }}
    </div> --}}
</div>
@endsection