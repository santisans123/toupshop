<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Order</title>

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
        <div class="w-full text-lg">
            <p>Admin - Order</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full mt-4">

            <div class="col-span-1">
                <div class="grid grid-rows-1 gap-4">
                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Authentication and Authorization</h4>
                            <hr class="my-2">
                            <div class="flex justify-between">
                                <div class="w-1/2 py-2">
                                    <p>User</p>
                                </div>
                                <a href="">
                                    <div class="w-2/2 py-2">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <p>Add</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Shop</h4>
                            <hr class="my-2">

                            <div class="flex justify-between">
                                <div class="w-1/2 py-2">
                                    <p>Customer</p>
                                </div>
                                <a href="{{ route('recentOrder') }}">
                                    <div class="w-2/2 py-2">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <p>Add</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="flex justify-between">
                                <div class="w-1/2 py-2">
                                    <p>Id Order</p>
                                </div>
                                <a href="{{ route('orderAdmin') }}">
                                    <div class="w-2/2 py-2">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <p>Add</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="flex justify-between">
                                <div class="w-1/2 py-2">
                                    <p>Item Order</p>
                                </div>
                                <a href="{{ route('itemOrder') }}">
                                    <div class="w-2/2 py-2">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <p>Add</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="flex justify-between">
                                <div class="w-1/2 py-2">
                                    <p>Order</p>
                                </div>
                                <a href="">
                                    <div class="w-2/2 py-2">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <p>Add</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="flex justify-between">
                                <div class="w-1/2 py-2">
                                    <p>Product</p>
                                </div>
                                <a href="">
                                    <div class="w-2/2 py-2">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <p>Add</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>
    </div>

    @include('partials.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
