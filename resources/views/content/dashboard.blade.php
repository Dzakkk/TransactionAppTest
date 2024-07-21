@extends('layouts.main')

@section('dashboard')
<div class="flex items-center justify-center h-auto mb-4 rounded bg-gray-100 dark:bg-gray-800">

    <div
        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Let's Start</h5>
        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, illo.</p>
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
            <a href="/transaksi"
                class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                <div class="text-left rtl:text-right">
                    <div class="mb-1 text-xs">Make a new</div>
                    <div class="-mt-1 font-sans text-sm font-semibold">Transaction</div>
                </div>
                
            </a>
        </div>
    </div>

</div>
    <div class="md:grid grid-cols-3 gap-4 md:mb-2">
        <div class="flex items-center justify-center mb-2 h-auto rounded bg-gray-100 dark:bg-gray-800">

            <a href="/barang"
                class="block w-full h-full max-w-sm md:p-6 p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-lg font-semibold lg:text-2xl md:font-bold tracking-tight text-gray-900 dark:text-white">
                    Most Sold items
                </h5>
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($brg as $b)
                    <li class="pb-1.5 sm:pb-1">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                           <div class="flex-1 min-w-0">
                              <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                 {{ $b->nama }}
                              </p>
                           </div>
                           <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                              {{ $b->total }} items
                           </div>
                        </div>
                     </li>
                    @endforeach
                    
                 </ul>
            </a>

        </div>
        <div class="flex items-center justify-center mb-2 h-auto rounded bg-gray-100 dark:bg-gray-800">
            <a href="/customer"
                class="block w-full h-full max-w-sm md:p-6 p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-lg font-semibold lg:text-2xl md:font-bold tracking-tight text-gray-900 dark:text-white">
                    Most Buyers
                </h5>
                    
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($cust as $c)

                    <li class="pb-1.5 sm:pb-2">
                       <div class="flex items-center space-x-4 rtl:space-x-reverse">
                          <div class="flex-1 min-w-0">
                             <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                               {{ $c->name }}
                             </p>
                          </div>
                          <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                             {{ $c->total }} purchases
                          </div>
                       </div>
                    </li>
                    @endforeach

                 </ul>
            </a>
        </div>
        <div class="flex items-center justify-center mb-2 h-auto rounded bg-gray-100 dark:bg-gray-800">
            <a href="/daftar/transaksi"
                class="block w-full h-full max-w-sm md:p-6 p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-lg font-semibold lg:text-2xl md:font-bold tracking-tight text-gray-900 dark:text-white">
                    Grand Total
                </h5>
                <h5 class="mb-2 md:text-4xl text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Rp{{ number_format($total, 2) }}
                </h5>
                <h5 class="mb-2 text-md font-semibold tracking-tight text-gray-900 dark:text-white">
                    from {{ $transaction }} Transaction
                </h5>
            </a>
        </div>
    </div>
    
@endsection
