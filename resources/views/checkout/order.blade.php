<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Order</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- Styles -->

</head>

<body>
    @livewire('navigation-menu')
    <div class="px-32 py-10 dark:text-white bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full">
            <img class="h-auto w-full rounded-lg" src="{{ url('images/header.png') }}" alt="header_image">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full mt-4">
            <div class="col-span-1 md:col-span-1">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="my-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <img class="w-auto motion-safe:hover:scale-[1.01] max-h-24 transition-all duration-300 rounded-lg cursor-pointer filter hover:backdrop-grayscale-0" src="{{ url('images/item/item1.png') }}" alt="item1">
                        </div>
                        <div class="col-span-1">
                            <p class="text-left self-start">Mobile Legends</p>
                        </div>
                    </div>
                    <hr>
                    <p class="mt-4 text-sm">Top Up Diamond Mobile Legends Hanya Dalam Hitungan Detik!</p>

                    <div class="text-sm my-4">
                        <p>1. Cukup Masukan User ID dan Zone ID MLBB Anda.</p>
                        <p>2. Pilih Jumlah Diamond Yang Anda inginkan.</p>
                        <p>3. Pilih Pembayaran Yang Anda Gunakan Dan Selesaikan Pembayaran.</p>
                        <p>4. Dan Diamond Akan Secara Langsung Ditambahkan Ke Akun Mobile Legends Anda.</p>
                    </div>

                    <p class="text-sm">Unduh Aplikasi Zayratshop Sekarang Juga Agar Top Up Semakin Mudah!</p>
                </div>
            </div>

            <div class="col-span-1 md:col-span-2">
                <div class="grid grid-rows-1 gap-4">
                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Masukkan User ID</h4>
                            <hr>
                            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="col-span-1">
                                    <input type="text" id="user_id" name="user_id" class="mt-1 p-2 border rounded-3xl w-full" placeholder="User ID">
                                </div>

                                <div class="col-span-1">
                                    <input type="text" id="server_id" name="server_id" class="mt-1 p-2 border rounded-3xl w-full" placeholder="Server ID">
                                </div>
                            </div>
                            <p class="mt-4 text-sm text-gray-300">Silahkan Masukkan User ID & Server Anda Dan Pastikan Benar.</p>
                        </div>
                    </div>

                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Pilih Nominal Top Up</h4>
                            <hr>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full mt-4">
                                <div class="row-span-1">
                                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-600 dark:border-gray-700">
                                        <p>Weekly Diamond Pass</p>
                                        <p>Rp 23.300,-</p>
                                    </div>
                                </div>
                                <div class="row-span-1">
                                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-600 dark:border-gray-700">
                                        <p>Weekly Diamond Pass</p>
                                        <p>Rp 23.300,-</p>
                                    </div>
                                </div>
                                <div class="row-span-1">
                                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-600 dark:border-gray-700">
                                        <p>Weekly Diamond Pass</p>
                                        <p>Rp 23.300,-</p>
                                    </div>
                                </div>
                                <div class="row-span-1">
                                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-600 dark:border-gray-700">
                                        <p>Weekly Diamond Pass</p>
                                        <p>Rp 23.300,-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-span-1">
                        <div class="grid grid-rows-1 gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Pilih Pembayaran</h4>
                            <hr>
                            <div class="mt-2 px-4 grid grid-rows-1 gap-2">
                                <div class="dark:bg-gray-600 rounded-t-md">
                                    <p class="py-2 px-4">QRIS</p>
                                    <div class="dark:bg-white rounded-b-md flex items-end justify-end grid-cols-1 md:grid-cols-2 gap-4">
                                        <img src="{{ url('images/payment/payol.png') }}" class="h-10 mr-3" alt="Logo" />
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 px-4 grid grid-rows-1 gap-2">
                                <div class="dark:bg-gray-600 rounded-t-md">
                                    <p class="py-2 px-4">E-Wallet</p>
                                    <div class="dark:bg-white rounded-b-md flex items-end justify-end grid-cols-1 md:grid-cols-2 gap-4">
                                        <img src="{{ url('images/payment/payol.png') }}" class="h-10 mr-3" alt="Logo" />
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 px-4 grid grid-rows-1 gap-2">
                                <div class="dark:bg-gray-600 rounded-t-md">
                                    <p class="py-2 px-4">Convenience Store</p>
                                    <div class="dark:bg-white rounded-b-md flex items-end justify-end grid-cols-1 md:grid-cols-2 gap-4">
                                        <img src="{{ url('images/payment/payol.png') }}" class="h-10 mr-3" alt="Logo" />
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 px-4 grid grid-rows-1 gap-2">
                                <div class="dark:bg-gray-600 rounded-t-md">
                                    <p class="py-2 px-4">Virtual Account</p>
                                    <div class="dark:bg-white rounded-b-md flex items-end justify-end grid-cols-1 md:grid-cols-2 gap-4">
                                        <img src="{{ url('images/payment/payol.png') }}" class="h-10 mr-3" alt="Logo" />
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Nomor Whatsapp</h4>
                            <hr>
                            <div class="mt-4">
                                <input type="number" id="whatsapp" name="whatsapp" class="mt-1 p-2 border rounded-3xl w-full" placeholder="08xxxxxxxxxxxx">
                            </div>
                            <p class="mt-4 text-sm text-gray-300">Bukti pembelianmu akan kami kirimkan ke WhatsApp.</p>
                            <a href="">
                                <div class="dark:hover:bg-blue-500 bg-blue-400 w-48 text-center mt-1 p-2 rounded-3xl ">
                                    <h4>Konfirmasi Topup</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @include('partials.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
