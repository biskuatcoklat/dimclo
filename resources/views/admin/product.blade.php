<!DOCTYPE html>
<html lang="en">
@include('admin.head')
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="/home" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Dimclo</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="/home" class="flex items-center text-white opacity-75 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="/viewcategory" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Category
            </a>
            <a href="/tampilproduct" class="flex items-center active-nav-link text-white  hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Product
            </a>
            <a href="/order" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Order
            </a>
        </nav>

    </aside>


    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        @include('admin.dekstopheader')

        <!-- Mobile Header & Nav -->
        @include('admin.mobileheadernav')

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Product</h1>
                <div class="w-full mt-12">
                    @if(session()->has('message'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">{{ session()->get('message'); }}</span>
                    </div>
                    @endif
                    <a href="/addproduct" class="bg-blue-600 text-white hover:bg-blue-700 p-2 rounded-md">Tambah</a>
                    <div class="bg-white overflow-auto mt-4">
                        <table class="text-left w-full border-collapse">

                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">No</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Product</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Deskripsi</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Category</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Quantity</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Price</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Discount</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Image</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($product as $products)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $no++ }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $products->title }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $products->description }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $products->category }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $products->quantity }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $products->price }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $products->discount_price }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $products->image }}</td>
                                    <td>
                                        <a onclick="return confirm('anda yakin ingin menghapus product?')" href="/deleteproduct/{{ $products->id }}" data-id="{{ $products->id }}"  class="bg-red-500 text-white hover:bg-red-700 p-2 rounded-md">Delete</a>
                                        <a href="/editproduct/{{ $products->id }}" data-id="{{ $products->id }}"  class="bg-yellow-500 text-white hover:bg-yellow-700 p-2 rounded-md">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



            </main>

        </div>

    </div>

    @include('admin.js')
</body>
</html>
