<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZayratsShop</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...">
    <!--Replace with your tailwind.css once created-->


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- Styles -->
    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>

</head>

<body>
    @livewire('navigation-menu')

    <div class="px-32 py-10 dark:text-white bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full">
            <img class="h-auto w-full rounded-lg" src="{{ url('images/images3.png') }}" alt="header_image">
        </div>
        <div class="w-full block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <h4 class="text-left">History Transaksi</h4>

            <hr class="my-2">
            <!--Container-->
            <div class="container ">

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white text-gray-800">

                    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">no Trx</th>
                                <th data-priority="3">Waktu Beli</th>
                                <th data-priority="4">Game</th>
                                <th data-priority="5">Item</th>
                                <th data-priority="6">Price</th>
                                <th data-priority="7">Status</th>
                                <th data-priority="8">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <center>1</center>
                                </td>
                                <td>11000121212</td>
                                <td>12 Nov 2023 08.30</td>
                                <td>Mobile Legends</td>
                                <td>20 Diamond</td>
                                <td>Rp 30.000</td>
                                <td>
                                    <p class="text-blue-800">Di Proses</p>
                                </td>
                                <td>
                                    <center>
                                        <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDetailModal()">
                                            <i class="fas fa-eye text-xl dark:text-blue-500"></i>
                                        </a>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>1</center>
                                </td>
                                <td>11000121212</td>
                                <td>12 Nov 2023 08.30</td>
                                <td>Free Fire</td>
                                <td>20 Diamond</td>
                                <td>Rp 30.000</td>
                                <td>
                                    <p class="text-blue-800">Di Proses</p>
                                </td>
                                <td>
                                    <center>
                                        <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDetailModal()">
                                            <i class="fas fa-eye text-xl dark:text-blue-500"></i>
                                        </a>
                                    </center>
                                </td>
                            </tr>
                            <div id="deleteModal-1" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                                <div class="flex justify-center items-center min-h-screen">
                                    <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-xl">
                                        <!-- Modal Content -->
                                        <center>
                                            <h3 class="text-xl font-bold mb-4">Apakah Anda yakin ingin menghapus order ini?</h3>
                                        </center>
                                        <div class="flex-shrink-0 mt-4 text-center">
                                            <div class="inline-flex items-center justify-center">
                                                <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeDeleteModal()">Tidak</button>
                                                <form action="{{ route('deleteOrder') }}" method="POST">
                                                    <input type="hidden" name="id_order" value="">
                                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md ml-2">Yakin</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                </div>
                <!--/Card-->
            </div>
            <!--/container-->
        </div>
    </div>

    <!-- Detail Modal -->
    <div id="detailModal-1" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
        <div class="flex justify-center items-center min-h-screen">
            <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-3xl">
                <!-- Modal Content -->
                <h2 class="text-2xl font-bold mb-4">Detail Histori Transaksi </h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border rounded-md">
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b">No Transaksi</td>
                                <td class="py-2 px-4 border-b"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">User ID</td>
                                <td class="py-2 px-4 border-b"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Server ID</td>
                                <td class="py-2 px-4 border-b"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Nominal</td>
                                <td class="py-2 px-4 border-b"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Metode Pembayaran</td>
                                <td class="py-2 px-4 border-b"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Akun Atas Nama</td>
                                <td class="py-2 px-4 border-b"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">WhatsApp</td>
                                <td class="py-2 px-4 border-b"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Tanggal Transaksi</td>
                                <td class="py-2 px-4 border-b"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 flex justify-between">
                    <!-- Tombol Keluar Modal -->
                    <div class="flex-shrink-0">
                        <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeDetailModal()">Tutup Modal</button>
                    </div>
                    <!-- Tombol Simpan -->
                    <div class="flex-shrink-0">
                        <form action="{{ route('updateOrder') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_order" value="">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">ACC</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('partials.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

    <!-- Modal JavaScript -->
    <script>
        function openDetailModal() {
            var modalId = 'detailModal-' + orderId;
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeDetailModal() {
            var modalId = 'detailModal-' + orderId;
            document.getElementById(modalId).classList.add('hidden');
        }

        function openDeleteModal() {
            var modalId = 'deleteModal-' + orderId;
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeDeleteModal() {
            var modalId = 'deleteModal-' + orderId;
            document.getElementById(modalId).classList.add('hidden');
        }
    </script>

</body>

</html>
