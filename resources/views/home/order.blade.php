<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dimclo</title>
    {{-- <link rel="stylesheet" href="./dist/output.css" /> --}}
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="container h-8 mx-auto p-5">
      <!--Navigation section awal-->
        <div class="md:flex md:flex-row md:justify-between text-center">
            <div class="flex flex-row justify-center">
                <a href="/"
                ><img src="../images/logo3.png" alt="Logo"
                /></a>
            </div>
            <div class="mt-2">
                <a
                href="/"
                class="text-black-600  font-medium hover:text-red-600 p-1.5 md:p-4"
                >Home</a
                >

                <div class="relative inline-block">
                <a href="#" class="text-black-600 font-medium hover:text-red-600 p-1.5 md:p-4" onclick="toggleDropdown1()">Product</a>
                    <div id="dropdown" class="absolute bg-white text-gray-700 pt-2 hidden">
                        <a href="/allproduct" class="hover:bg-gray-100">All Product</a>
                        <a href="/male_style" class="hover:bg-gray-100">Male Style</a>
                        <a href="/female_style" class="hover:bg-gray-100">Female Style</a>
                    </div>
                </div>


                <script>
                function toggleDropdown1() {
                    var dropdown = document.getElementById("dropdown");
                    dropdown.classList.toggle("hidden");
                }
                </script>

                <a href="/showcart" class="text-black-600 font-medium  hover:text-red-600 p-1.5 md:p-4"
                >Cart</a
                >
                <a href="/showorder" class="text-black-600 active-nav-link font-bold text-red-600 hover:text-red-600 p-1.5 md:p-4"
                >Order</a
                >
                <a href="/contact" class="text-black-600 hover:text-red-600 p-1.5 md:p-4 font-medium"
                >Contact</a
                >
                @if (Route::has('login'))

                @auth

                    <div class="relative inline-block">
                        <a href="#" class="text-white hover:text-red-600 p-1.5 md:p-4 font-medium bg-red-500 rounded-md" onclick="toggleDropdown()">{{ Auth::user()->name }}
                        </a>
                        <div id="dropdown1" class="absolute bg-white text-gray-700 pt-2 hidden">
                            <a href="/user/profile" class="block px-4 py-2 hover:bg-gray-100">Profile </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" id="logincss" class="bg-red-500  text-gray-50 hover:bg-red-700 p-2 rounded-md" onclick="return confirm('anda yakin ingin Logout?')">
                                        {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>


                    <script>
                    function toggleDropdown() {
                        var dropdown = document.getElementById("dropdown1");
                        dropdown.classList.toggle("hidden");
                    }
                    </script>

                @else
                    <a
                    href="{{ route('login') }}"
                    class="bg-red-500 text-white hover:bg-red-700 p-2 rounded-md"
                    >
                    Login
                    </a>
                @endauth
                @endif

            </div>
        </div>
      <!--Navigation section end-->

      <!--start Hero Section-->

      <!--End Hero Section-->
        <div class="container">
            <h2 class="text-3xl text-center text-gray-600">Hi {{ Auth::user()->name }}, This Your Order</h2>
            <div class="bg-white overflow-auto mt-4">
                @if(session()->has('message'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">{{ session()->get('message'); }}</span>
                    </div>
                    @endif
                <table class="text-left w-full border-collapse">

                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">No</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Product</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Quantity</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Price</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Payment status</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Delivery status</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Image</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($order as $orders)
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">{{ $no++ }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $orders->product_title }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $orders->quantity }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $orders->price }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $orders->payment_status }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $orders->delivery_status }}</td>
                            <td class="py-4 px-6 border-b border-grey-light"><img src='product/{{ $orders->image }}'style="width: 30%; height: 30px"></td>

                            <td>
                                @if ($orders->delivery_status='Sedang Proses')
                                    <a onclick="return confirm('anda yakin ingin membatalkan pesanan ini?')" href="/cancelorder/{{ $orders->id }}" class="bg-red-500  text-gray-50 hover:bg-red-700 p-2 rounded-m">cancel</a>
                                @else
                                <p style="color: blue">Not Allowed</p>
                                @endif
                                <a href="/downloadpdf/{{ $orders->id }}" class="bg-yellow-500  text-gray-50 hover:bg-yellow-700 p-2 rounded-m">Invoice</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

      <div class="my-20 mt-96">



      </div>

      <!--Food Items Section-->


        @include('home.footer')
      <!-- Footer end -->
    </div>


</body>
</html>
