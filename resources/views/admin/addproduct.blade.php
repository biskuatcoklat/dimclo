<!DOCTYPE html>
<html lang="en">
@include('admin.head')
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="/home" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Dimclo</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="/home" class="flex items-center text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="/viewcategory" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Category
            </a>
            <a href="/tampilproduct" class="flex items-center active-nav-link text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Product
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Forms
            </a>
            <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Tabbed Content
            </a>
            <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Calendar
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
                <h1 class="text-3xl text-black pb-6">Tambah Product</h1>


                <div class="leading-loose">
                    @if(session()->has('message'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">{{ session()->get('message'); }}</span>
                    </div>
                    @endif
                    <form class="p-10 bg-white rounded shadow-xl" action="/addlogicproduct" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <label class="block text-sm text-gray-600" for="name">Product</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required placeholder="Product">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="name">Deskripsi</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="description" name="description" type="text" required placeholder="Deskripsi">
                        </div>

                        <div class="mt-2">
                            <label class="block text-sm text-gray-600">Category</label>
                            <select name="category" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected hidden>Category</option>
                                @foreach ($category as $categorys)

                                <option value="{{ $categorys->nama_category }}">{{ $categorys->nama_category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="name">Quantity</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="quantity" name="quantity" type="number" required placeholder="Quantity">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="name">Price</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="price" name="price" type="number" required placeholder="price">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="name">Discount</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="discount_price" name="discount_price" type="number" required placeholder="discount">
                        </div>
                        <div class="mt-4">
                            <label for="image">Image Upload</label>
                            <input type="file" name="image">
                        </div>
                        <div class="mt-6">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </main>

        </div>

    </div>

    @include('admin.js')
</body>
</html>
