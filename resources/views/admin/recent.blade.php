@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h4>Recent Actions</h4>
        <hr class="my-2">
        <div class="my-2 flex justify-start">
            <a href="">
                <div class="flex justify-start grid-cols-1 md:grid-cols-2 gap-1">
                    <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <div class="grid-cols-1">
                        <p class="space-x-7">1000 Diamond - Hago</p>
                        <p class="text-md dark:text-gray-400">Product</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="my-2 flex justify-start">
            <a href="">
                <div class="flex justify-start grid-cols-1 md:grid-cols-2 gap-1">
                    <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <div class="grid-cols-1">
                        <p class="space-x-7">1000 Diamond - Mobile Legends</p>
                        <p class="text-md dark:text-gray-400">Product</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="my-2 flex justify-start">
            <a href="">
                <div class="flex justify-start grid-cols-1 md:grid-cols-2 gap-1">
                    <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <div class="grid-cols-1">
                        <p class="space-x-7">1000 UC - PUBGM</p>
                        <p class="text-md dark:text-gray-400">Product</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="flex justify-end">
            <a href="">
                <div class="mx-1 dark:hover:bg-blue-500 dark:bg-blue-600 w-28 text-center mt-1 p-2 rounded-lg ">
                    <h4>More</h4>
                </div>
            </a>
        </div>

    </div>
</div>

@stop
