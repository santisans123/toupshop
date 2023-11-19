@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <h4 class="text-left">List User</h4>

        </div>

        <hr class="my-2">
        <!--Container-->
        <div class="container ">

            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white text-gray-800">


                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th data-priority="2">Name</th>
                            <th data-priority="3">Email</th>
                            <th data-priority="3">Transaksi Terakhir</th>
                            <th data-priority="4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Santi</td>
                            <td>santitok@gmail.com</td>
                            <td>10-11-2023 11.07</td>
                            <td>
                                <div>
                                    <a href="#" class="mx-1 p-2 rounded-lg" onclick="openModal()">
                                        <i class="fas fa-eye text-xl text-blue-500"></i>
                                    </a>

                                    <a href="#" class="mx-1 p-2 rounded-lg">
                                        <i class="dark:text-red-600 fas fa-trash text-xl"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->

                        <tr>
                            <td>1</td>
                            <td>Fidisa</td>
                            <td>fids@gmail.com</td>
                            <td>12-11-2023 <br> 11.07</td>
                            <td>
                                <a href="#" class="mx-1 p-2 rounded-lg" onclick="openModal()">
                                    <i class="fas fa-eye text-xl text-blue-500"></i>
                                </a>

                                <a href="#" class="mx-1 p-2 rounded-lg">
                                    <i class="dark:text-red-600 fas fa-trash text-xl"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <!--/Card-->
        </div>
        <!-- Modal -->
        <div id="modal" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
            <div class="flex justify-center items-center min-h-screen">
                <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-3xl">
                    <!-- Modal Content -->
                    <h2 class="text-2xl font-bold mb-4">User Detail</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border rounded-md">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b">Name</td>
                                    <td class="py-2 px-4 border-b">Santi</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">email</td>
                                    <td class="py-2 px-4 border-b">Santitok21@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Transaksi Terakhir</td>
                                    <td class="py-2 px-4 border-b">12-11-2023 11.07</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Item Terakhir</td>
                                    <td class="py-2 px-4 border-b">Mobile Legends</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Banyaknya Transaksi</td>
                                    <td class="py-2 px-4 border-b">16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 flex justify-between">
                        <!-- Tombol Keluar Modal -->
                        <div class="flex-shrink-0">
                            <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md"
                                onclick="closeModal()">Tutup Modal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/container-->

        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
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

    </div>
</div>

<!-- Modal JavaScript -->
<script>
    function openModal() {
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }
</script>

<script src="../path/to/datatables.min.js"></script>

@stop
