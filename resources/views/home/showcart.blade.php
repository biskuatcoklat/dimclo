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
                class="text-black-600  font-normal hover:text-red-600 p-1.5 md:p-4"
                >Home</a
                >

                <div class="relative inline-block">
                <a href="/allproduct" class="text-black-600 active-nav-link hover:text-red-600 p-1.5 md:p-4" onclick="toggleDropdown1()">Product</a>
                    <div id="dropdown" class="absolute bg-white text-gray-700 pt-2 hidden">
                        <a href="/allproduct" class="hover:bg-gray-100">All Product</a>
                        <a href="#" class="hover:bg-gray-100">Category 2</a>
                        <a href="#" class="hover:bg-gray-100">Category 3</a>
                    </div>
                </div>


                <script>
                function toggleDropdown1() {
                    var dropdown = document.getElementById("dropdown");
                    dropdown.classList.toggle("hidden");
                }
                </script>

                <a href="/showcart" class="text-black-600 active-nav-link font-bold text-red-600 hover:text-red-600 p-1.5 md:p-4"
                >Cart</a
                >
                <a href="#" class="text-black-600 hover:text-red-600 p-1.5 md:p-4 font-medium"
                >Order</a
                >
                <a href="#" class="text-black-600 hover:text-red-600 p-1.5 md:p-4 font-medium"
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
            <h2 class="text-3xl text-center text-gray-600">Your Cart</h2>
        </div>

      <div class="my-20">



      </div>

      <!--Food Items Section-->







      <!-- Footer start -->
        @include('home.footer')
      <!-- Footer end -->
    </div>


</body>
</html>
