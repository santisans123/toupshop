@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h4>Change Id Order</h4>
        <hr class="my-2">

        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Jenis Game</p>
            </div>

            <div class="relative">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-96 dark:bg-gray-800 dark:text-gray-200 mt-1 border rounded-3xl flex items-center justify-between px-4 py-2" onclick="toggleDropdown(event)">
                    Pilih Game
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <input type="hidden" name="selectedItem" id="selectedItem" value="{{ old('selectedItem') }}">
                <input type="hidden" name="selectedItemName" id="selectedItemName" value="{{ old('selectedItemName') }}">
                <!-- Dropdown menu -->
                <div id="dropdown" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">

                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectItem()">Ml</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Email User</p>
            </div>
            <div class="py-2">
                <input style="color:black" type="email" id="email" name="email" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Email">
            </div>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Whatsapp User (Tanpa 0 awal)</p>
            </div>
            <div class="py-2">
                <input style="color:black" type="number" id="wa" name="wa" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="815423xxxx">
            </div>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Jenis Game</p>
            </div>

            <div class="relative">
                <button id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2" class="w-96 dark:bg-gray-800 dark:text-gray-200 mt-1 border rounded-3xl flex items-center justify-between px-4 py-2" onclick="toggleDropdown(event)">
                    Pilih Payment
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <input type="hidden" name="selectPayemnt" id="selectPayemnt" value="">
                <input type="hidden" name="selectedPayemntName" id="selectedPayemntName" value="">
                <!-- Dropdown menu -->
                <div id="dropdown2" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">

                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">QRIS</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Dana</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Ovo</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Link Aja</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">SPay</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Alfamart</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Indomaret</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Bank BCA</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Bank BNI</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Bank BRI</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt()">Bank Mandiri</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>ID Game</p>
            </div>
            <div class="py-2">
                <input style="color:black" type="id_game" id="id_game" name="id_game" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="ID Game">
            </div>
        </div>
        <div class="flex justify-between">
            <div class="w-1/2 py-2">
                <p>Server Game</p>
            </div>
            <div class="py-2">
                <input style="color:black" type="server_game" id="server_game" name="server_game" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Server Game">
            </div>
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
                    <div class="mx-1 dark:hover:bg-blue-500 dark:bg-blue-600 w-28 text-center mt-1 p-2 rounded-lg ">
                        <h4>Save</h4>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

@stop
