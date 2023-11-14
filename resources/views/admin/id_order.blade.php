@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h4>Change Id Order</h4>
        <hr class="my-2">
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Product</p>
            </div>
            <a href="">
                <div class="w-3/2 py-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                        <input type="email" id="email" name="email" class="dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Email Pelanggan">
                        <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Pesan</p>
            </div>
            <a href="">
                <div class="w-3/2 py-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                        <input type="number" id="item_id" name="item_id" class="dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Item ID">
                        <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>ID Game</p>
            </div>
            <a href="">
                <div class="w-3/2 py-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                        <input type="number" id="game_id" name="game_id" class="dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Game ID">
                        <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Server Game</p>
            </div>
            <a href="">
                <div class="w-5/2 py-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                        <input type="number" id="game_id" name="game_id" class="dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Server Game">
                        <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex justify-between mt-4">
            <a href="">
                <div class="dark:hover:bg-red-500 dark:bg-red-600 w-32 text-center mt-1 p-2 rounded-lg ">
                    <h4>Delete</h4>
                </div>
            </a>
            <div class="flex justify-end">
                <a href="">
                    <div class="mx-1 dark:hover:bg-gray-500 dark:bg-gray-600 w-auto text-center mt-1 p-2 rounded-lg ">
                        <h4>Save and Add Another</h4>
                    </div>
                </a>
                <a href="">
                    <div class="mx-1 dark:hover:bg-gray-500 dark:bg-gray-600 w-auto text-center mt-1 p-2 rounded-lg ">
                        <h4>Save and Continue Editing</h4>
                    </div>
                </a>
                <a href="">
                    <div class="mx-1 dark:hover:bg-blue-500 dark:bg-blue-600 w-28 text-center mt-1 p-2 rounded-lg ">
                        <h4>Save</h4>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

@stop
