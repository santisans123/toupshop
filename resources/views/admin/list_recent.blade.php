@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <a href="{{ route('recentOrder') }}" class="mx-1 dark:hover:bg-gray-500 dark:bg-gray-600 w-28 text-center mt-1 p-2 rounded-lg">
                <button>Back</button>
            </a>
            <h4 class="text-left">List Recent Actions</h4>
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
                            <th data-priority="3">Tanggal</th>
                            <th data-priority="4">Customer</th>
                            <th data-priority="5">Game</th>
                            <th data-priority="6">Harga</th>
                            <th data-priority="7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center>1</center>
                            </td>
                            <td>12 Nov 2023 08.30</td>
                            <td>santi</td>
                            <td>Mobile Legends</td>
                            <td>20 Diamond</td>
                            <td>
                                <center>
                                    <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDetailModal()">
                                        <i class="fas fa-eye text-xl dark:text-blue-500"></i>
                                    </a>
                                    <a target="_blank" href="https://wa.me/+6281916451566" class="mx-1 p-2 rounded-lg">
                                        <i class="fab fa-whatsapp text-xl dark:text-blue-500"></i>
                                    </a>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>1</center>
                            </td>
                            <td>12 Nov 2023 08.30</td>
                            <td>Free Fire</td>
                            <td>20 Diamond</td>
                            <td>Rp 30.000</td>
                            <td>
                                <center>
                                    <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDetailModal()">
                                        <i class="fas fa-eye text-xl dark:text-blue-500"></i>
                                    </a>
                                    <!-- ini wa customer -->
                                    <a target="_blank" href="https://wa.me/+6282131781704" class="mx-1 p-2 rounded-lg">
                                        <i class="fab fa-whatsapp text-xl dark:text-blue-500"></i>
                                    </a>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <!--/Card-->
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
                                    <td class="py-2 px-4 border-b">Waktu Transaksi</td>
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

<script src="../path/to/datatables.min.js"></script>

@stop
