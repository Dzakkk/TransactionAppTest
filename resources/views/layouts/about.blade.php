@extends('layouts.main')

@section('about')
    <div class="max-w-[500px]">
        <div class="w-full m-2 pb-4 space-y-4 bg-gray-400 rounded-xl">
            <div class="flex bg-gray-900 gap-4 p-3 rounded-t-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="h-8 w-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <h1 class="text-white mt-1">Eunha</h1>
            </div>
            <div class="flex justify-start mx-2 mr-4">
                <div class="flex items-start gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-green-800 bg-green-800 rounded-es-xl rounded-e-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Eunha</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:46</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Bisakah kamu jelaskan bagaimana cara penggunaan aplikasi ini?
                        </p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:47</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Kamu bisa membuat data barang baru pada menu Products.
                            <br>
                            Jika ingin menambahkan data pelanggan, kamu dapat melakukannya pada menu customers.
                        </p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:47</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Dan jika kamu ingin membuat transaksi, kamu dapat membuatnya pada halaman Transaction dan
                            melihat transaksi yang telah kamu buat pada halaman Transaction list.
                        </p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-start mx-2 mr-4">
                <div class="flex items-start gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-green-800 bg-green-800 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Eunha</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:48</span>
                        </div>

                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Ada banyak input yang harus diisi pada transaksi. Apakah kamu bisa jelaskan?
                        </p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:49</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Tentu, akan aku jelaskan </p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:51</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Pertama ini adalah input no transaksi dan tanggal. Kamu hanya perlu mengisi tanggal karena no
                            transaksi akan secara otomatis dibuat :)</p>
                        <div class="group relative my-2">
                            <img src="{{ asset('images/transaksi.PNG') }}" class="rounded-lg" alt="transaki-tgl">
                        </div>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:54</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            selanjutnya adalah input customer. Kamu hanya perlu memilih customer lalu kolom telepon dan kode
                            akan secara otomatis muncul.</p>
                        <div class="group relative my-2">
                            <img src="{{ asset('images/cust.PNG') }}" class="rounded-lg" alt="transaki-cust">
                        </div>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:55</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Kita masuk pada pengisian barang. Disini kamu dapat memilih serta mencari barang yang kamu mau.
                            Lalu akan muncul nama dan harga bandrol pada barang tersebut.</p>
                        <div class="group relative my-2">
                            <img src="{{ asset('images/add.PNG') }}" class="rounded-lg" alt="transaki-add">
                        </div>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:58</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Kamu hanya tinggal mengisi quantity dan diskon (%) dan data data lainnya akan secara otomatis
                            terisi. Jadi kamu tidak harus menghitung lagi :)</p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">12:00</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Jika kamu ingin memasukkan lebih dari 1 jenis barang, tekan tombol "add input" dan input baru
                            pun muncul.</p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">12:02</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Jika kamu ingin menghapus input yang telah kamu tambahkan, cukup dengan menekan tanda <b
                                class="text-red-700">X</b> pada kanan input yang akan kamu hapus</p>
                        <div class="group relative my-2">
                            <img src="{{ asset('images/del.PNG') }}" class="rounded-lg" alt="transaki-add">
                        </div>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">12:03</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Jika kamu telah mengisi semua data barang, maka kamu akan melihat subtotal yang terisi sesuai
                            total barang yang kamu pilih.
                            <br>Disini kamu cukup mengisi diskon dan ongkir maka total bayar pun akan menampilkan jumlah
                            yang telah kamu input pada inputan sebelumnya.
                            <br>Terakhir tekan submit dan transaksimu selesai.
                        </p>
                        <div class="group relative my-2">
                            <img src="{{ asset('images/total.PNG') }}" class="rounded-lg" alt="transaki-total">
                        </div>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">12:03</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Bagimana mudah bukan? </p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-start mx-2 mr-4">
                <div class="flex items-start gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-green-800 bg-green-800 rounded-es-xl rounded-e-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Eunha</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">12:05</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Jika dijelaskan terasa mudah. Terima kasih, aku akan klangsung mencobanya!
                        </p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mx-2 ml-4">
                <div class="flex items-start gap-2.5">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-800 bg-gray-800 rounded-b-xl rounded-tl-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-white dark:text-white">Akang Admin</span>
                            <span class="text-sm font-normal text-gray-300 dark:text-gray-400">12:05</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-white dark:text-white">
                            Tentu, jangan ragu jika kamu masih memiliki pertanyaan. kau bisa menghubungiku di <a
                                href="https://wa.me/62882001508401" class="text-blue-400 underline">Sini</a> </p>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">Delivered</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-8 w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
