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
            <a href="/viewcategory" class="flex items-center active-nav-link text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Category
            </a>
            <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Tables
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
            @include('admin.main')
        </div>

    </div>

    @include('admin.js')
</body>
</html>
