@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <a href="{{ route('itemOrder') }}" class="mx-1 dark:hover:bg-gray-500 dark:bg-gray-600 w-28 text-center mt-1 p-2 rounded-lg">
                <button>Back</button>
            </a>
            <h4 class="text-left">List Item</h4>

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
                            <th data-priority="3">Images</th>
                            <th data-priority="4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mobile Legends</td>
                            <td>Images</td>
                            <td>
                                <div>
                                    <a href="#" class="mx-1 p-2 rounded-lg" onclick="openModal()">
                                        <i class="fas fa-edit text-xl text-blue-500"></i>
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
                            <td>Mobile Legends</td>
                            <td>Images</td>
                            <td>
                                <a href="#" class="mx-1 p-2 rounded-lg" onclick="openModal()">
                                    <i class="fas fa-edit text-xl text-blue-500"></i>
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
                <div class="bg-white text-gray-800 p-8 rounded-lg w-96">
                    <!-- Modal Content -->
                    <h2 class="text-2xl font-bold mb-4">Edit Item Game</h2>
                    <form>
                        <!-- Nama Input -->
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" id="nama" name="nama" class="mt-1 p-2 border rounded-md w-full" placeholder="Masukkan nama">
                        </div>

                        <!-- Keterangan Input -->
                        <div class="mb-4">
                            <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="mt-1 p-2 border rounded-md w-full" placeholder="Masukkan keterangan"></textarea>
                        </div>

                        <!-- Upload Gambar Input -->
                        <div class="mb-4">
                            <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
                            <input type="file" id="gambar" name="gambar" class="mt-1 p-2 border rounded-md w-full">
                        </div>

                        <div class="flex justify-between">
                            <!-- Tombol Keluar Modal -->
                            <div class="flex-shrink-0">
                                <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeModal()">Tutup Modal</button>
                            </div>
                            <!-- Tombol Simpan -->
                            <div class="flex-shrink-0">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
                            </div>
                        </div>
                    </form>
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
