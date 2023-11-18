@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <h4 class="text-left">Item Order Games</h4>
            <button class="mx-1 dark:hover:bg-green-500 dark:bg-green-600 w-28 text-center mt-1 p-2 rounded-lg ">List Item</button>
        </div>

        <hr class="my-2">

        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Name</p>
            </div>
            <div class=" py-2">
                <input type="text" id="name" name="name" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Email Pelanggan">
            </div>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Keterangan</p>
            </div>
            <div class="py-2">
                <textarea id="description" name="description" class=" w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl " placeholder="Item Description" rows="4"></textarea>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Upload Gambar</p>
            </div>
            <div class="py-2">
                <input type="file" id="photo" name="photo" class="w-96 mt-1 p-2 border rounded-3xl" accept="image/*">
            </div>
        </div>
        <div class="mt-4">
            <div class="flex justify-end">
                <a href="">
                    <div class="mx-1 dark:hover:bg-blue-500 dark:bg-blue-600 w-28 text-center mt-1 p-2 rounded-lg ">
                        <h4>Save</h4>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>


</div>

@stop