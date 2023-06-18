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
                ><img src="images/logo3.png" alt="Logo"
                /></a>
            </div>
            <div class="mt-2">
                <a
                href="/"
                class="text-black-600  font-normal hover:text-red-600 p-1.5 md:p-4"
                >Home</a
                >

                <div class="relative inline-block">
                <a href="/allproduct" class="text-black-600 active-nav-link text-red-600 hover:text-red-600 p-1.5 md:p-4 font-bold" onclick="toggleDropdown1()">Product</a>
                    <div id="dropdown" class="absolute bg-white text-gray-700 pt-2 hidden">
                        <a href="/allproduct" class="hover:bg-gray-100 active-nav-link">All Product</a>
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

                <a href="/showcart" class="text-black-600 hover:text-red-600 p-1.5 md:p-4 font-medium"
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
            <h2 class="text-3xl text-center text-gray-600">All Product</h2>
        </div>

      <div class="my-20">
        <div
          class="grid grid-flow-row md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10"
        >
          <div class="shadow-lg rounded-lg">
            <a href="#">
              <img
                src="images/p1.png"
                class="w-full rounded-tl-lg rounded-tr-lg"
                alt=""
              />
            </a>
            <div class="p-5">
              <h3 class="text-gray-600"><a href="#">Mix Vegetable</a></h3>
              <div class="flex flex-row my-3"></div>
              <div class="flex flex-row my-3">
                <div
                  class="text-gray-400 rounded-md text-xs px-1 py-1 mr-1"
                ></div>
              </div>
              <div class="flex flex-row justify-between my-3">
                <p class="text-gray-600 py-2 rounded-full shadow-md px-2">
                  Rp. 450.000
                </p>
                <a
                  href="#"
                  class="bg-gradient-to-r from-green-500 to-green-700 rounded-full py-2 px-4 text-gray-50 text-sm"
                >
                  <svg
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    class="h-5 w-5 inline-block"
                    viewBox="0 0 122.9 107.5"
                    style="enable-background: new 0 0 122.9 107.5"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        class="fill-white"
                        d="M3.9,7.9C1.8,7.9,0,6.1,0,3.9C0,1.8,1.8,0,3.9,0h10.2c0.1,0,0.3,0,0.4,0c3.6,0.1,6.8,0.8,9.5,2.5c3,1.9,5.2,4.8,6.4,9.1 c0,0.1,0,0.2,0.1,0.3l1,4H119c2.2,0,3.9,1.8,3.9,3.9c0,0.4-0.1,0.8-0.2,1.2l-10.2,41.1c-0.4,1.8-2,3-3.8,3v0H44.7 c1.4,5.2,2.8,8,4.7,9.3c2.3,1.5,6.3,1.6,13,1.5h0.1v0h45.2c2.2,0,3.9,1.8,3.9,3.9c0,2.2-1.8,3.9-3.9,3.9H62.5v0 c-8.3,0.1-13.4-0.1-17.5-2.8c-4.2-2.8-6.4-7.6-8.6-16.3l0,0L23,13.9c0-0.1,0-0.1-0.1-0.2c-0.6-2.2-1.6-3.7-3-4.5 c-1.4-0.9-3.3-1.3-5.5-1.3c-0.1,0-0.2,0-0.3,0H3.9L3.9,7.9z M96,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C86.4,92.6,90.7,88.3,96,88.3L96,88.3z M53.9,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C44.3,92.6,48.6,88.3,53.9,88.3L53.9,88.3z M33.7,23.7l8.9,33.5h63.1l8.3-33.5H33.7L33.7,23.7z"
                      />
                    </g>
                  </svg>
                  Add to cart
                </a>
              </div>
            </div>
          </div>
          <div class="shadow-lg rounded-lg">
            <a href="#">
              <img
                src="images/p2.png"
                class="w-full rounded-tl-lg rounded-tr-lg"
                alt=""
              />
            </a>
            <div class="p-5">
              <h3 class="text-gray-600"><a href="#">Testy Brinjal</a></h3>
              <div class="flex flex-row my-3"></div>
              <div class="flex flex-row my-3"></div>
              <div class="flex flex-row justify-between my-3">
                <p class="text-gray-600 py-2 rounded-full shadow-md px-2">
                  550BDT
                </p>
                <a
                  href="#"
                  class="bg-gradient-to-r from-green-500 to-green-700 rounded-full py-2 px-4 text-gray-50 text-sm"
                >
                  <svg
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    class="h-5 w-5 inline-block"
                    viewBox="0 0 122.9 107.5"
                    style="enable-background: new 0 0 122.9 107.5"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        class="fill-white"
                        d="M3.9,7.9C1.8,7.9,0,6.1,0,3.9C0,1.8,1.8,0,3.9,0h10.2c0.1,0,0.3,0,0.4,0c3.6,0.1,6.8,0.8,9.5,2.5c3,1.9,5.2,4.8,6.4,9.1 c0,0.1,0,0.2,0.1,0.3l1,4H119c2.2,0,3.9,1.8,3.9,3.9c0,0.4-0.1,0.8-0.2,1.2l-10.2,41.1c-0.4,1.8-2,3-3.8,3v0H44.7 c1.4,5.2,2.8,8,4.7,9.3c2.3,1.5,6.3,1.6,13,1.5h0.1v0h45.2c2.2,0,3.9,1.8,3.9,3.9c0,2.2-1.8,3.9-3.9,3.9H62.5v0 c-8.3,0.1-13.4-0.1-17.5-2.8c-4.2-2.8-6.4-7.6-8.6-16.3l0,0L23,13.9c0-0.1,0-0.1-0.1-0.2c-0.6-2.2-1.6-3.7-3-4.5 c-1.4-0.9-3.3-1.3-5.5-1.3c-0.1,0-0.2,0-0.3,0H3.9L3.9,7.9z M96,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C86.4,92.6,90.7,88.3,96,88.3L96,88.3z M53.9,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C44.3,92.6,48.6,88.3,53.9,88.3L53.9,88.3z M33.7,23.7l8.9,33.5h63.1l8.3-33.5H33.7L33.7,23.7z"
                      />
                    </g>
                  </svg>
                  Add to cart
                </a>
              </div>
            </div>
          </div>
          <div class="shadow-lg rounded-lg">
            <a href="#">
              <img
                src="images/bean.jpg"
                class="w-full rounded-tl-lg rounded-tr-lg"
                alt=""
              />
            </a>
            <div class="p-5">
              <h3 class="text-gray-600"><a href="#">Energetic Bean</a></h3>
              <div class="flex flex-row my-3">

              </div>
              <div class="flex flex-row my-3">

              </div>
              <div class="flex flex-row justify-between my-3">
                <p class="text-gray-600 py-2 rounded-full shadow-md px-2">
                  855BDT
                </p>
                <a
                  href="#"
                  class="bg-gradient-to-r from-green-500 to-green-700 rounded-full py-2 px-4 text-gray-50 text-sm"
                >
                  <svg
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    class="h-5 w-5 inline-block"
                    viewBox="0 0 122.9 107.5"
                    style="enable-background: new 0 0 122.9 107.5"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        class="fill-white"
                        d="M3.9,7.9C1.8,7.9,0,6.1,0,3.9C0,1.8,1.8,0,3.9,0h10.2c0.1,0,0.3,0,0.4,0c3.6,0.1,6.8,0.8,9.5,2.5c3,1.9,5.2,4.8,6.4,9.1 c0,0.1,0,0.2,0.1,0.3l1,4H119c2.2,0,3.9,1.8,3.9,3.9c0,0.4-0.1,0.8-0.2,1.2l-10.2,41.1c-0.4,1.8-2,3-3.8,3v0H44.7 c1.4,5.2,2.8,8,4.7,9.3c2.3,1.5,6.3,1.6,13,1.5h0.1v0h45.2c2.2,0,3.9,1.8,3.9,3.9c0,2.2-1.8,3.9-3.9,3.9H62.5v0 c-8.3,0.1-13.4-0.1-17.5-2.8c-4.2-2.8-6.4-7.6-8.6-16.3l0,0L23,13.9c0-0.1,0-0.1-0.1-0.2c-0.6-2.2-1.6-3.7-3-4.5 c-1.4-0.9-3.3-1.3-5.5-1.3c-0.1,0-0.2,0-0.3,0H3.9L3.9,7.9z M96,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C86.4,92.6,90.7,88.3,96,88.3L96,88.3z M53.9,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C44.3,92.6,48.6,88.3,53.9,88.3L53.9,88.3z M33.7,23.7l8.9,33.5h63.1l8.3-33.5H33.7L33.7,23.7z"
                      />
                    </g>
                  </svg>
                  Add to cart
                </a>
              </div>
            </div>
          </div>
          <div class="shadow-lg rounded-lg">
            <a href="#">
              <img
                src="images/radish.jpg"
                class="w-full rounded-tl-lg rounded-tr-lg"
                alt=""
              />
            </a>
            <div class="p-5">
              <h3 class="text-gray-600"><a href="#">Natural Radish</a></h3>
              <div class="flex flex-row my-3">

              </div>
              <div class="flex flex-row my-3">

              </div>
              <div class="flex flex-row justify-between my-3">
                <p class="text-gray-600 py-2 rounded-full shadow-md px-2">
                  950BDT
                </p>
                <a
                  href="#"
                  class="bg-gradient-to-r from-green-500 to-green-700 rounded-full py-2 px-4 text-gray-50 text-sm"
                >
                  <svg
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    class="h-5 w-5 inline-block"
                    viewBox="0 0 122.9 107.5"
                    style="enable-background: new 0 0 122.9 107.5"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        class="fill-white"
                        d="M3.9,7.9C1.8,7.9,0,6.1,0,3.9C0,1.8,1.8,0,3.9,0h10.2c0.1,0,0.3,0,0.4,0c3.6,0.1,6.8,0.8,9.5,2.5c3,1.9,5.2,4.8,6.4,9.1 c0,0.1,0,0.2,0.1,0.3l1,4H119c2.2,0,3.9,1.8,3.9,3.9c0,0.4-0.1,0.8-0.2,1.2l-10.2,41.1c-0.4,1.8-2,3-3.8,3v0H44.7 c1.4,5.2,2.8,8,4.7,9.3c2.3,1.5,6.3,1.6,13,1.5h0.1v0h45.2c2.2,0,3.9,1.8,3.9,3.9c0,2.2-1.8,3.9-3.9,3.9H62.5v0 c-8.3,0.1-13.4-0.1-17.5-2.8c-4.2-2.8-6.4-7.6-8.6-16.3l0,0L23,13.9c0-0.1,0-0.1-0.1-0.2c-0.6-2.2-1.6-3.7-3-4.5 c-1.4-0.9-3.3-1.3-5.5-1.3c-0.1,0-0.2,0-0.3,0H3.9L3.9,7.9z M96,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C86.4,92.6,90.7,88.3,96,88.3L96,88.3z M53.9,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C44.3,92.6,48.6,88.3,53.9,88.3L53.9,88.3z M33.7,23.7l8.9,33.5h63.1l8.3-33.5H33.7L33.7,23.7z"
                      />
                    </g>
                  </svg>
                  Add to cart
                </a>
              </div>
            </div>
          </div>
          <div class="shadow-lg rounded-lg">
            <a href="#">
              <img
                src="images/radish.jpg"
                class="w-full rounded-tl-lg rounded-tr-lg"
                alt=""
              />
            </a>
            <div class="p-5">
              <h3 class="text-gray-600"><a href="#">Natural Radish</a></h3>

              <div class="flex flex-row my-3">

              </div>
              <div class="flex flex-row justify-between my-3">
                <p class="text-gray-600 py-2 rounded-full shadow-md px-2">
                  950BDT
                </p>
                <a
                  href="#"
                  class="bg-gradient-to-r from-green-500 to-green-700 rounded-full py-2 px-4 text-gray-50 text-sm"
                >
                  <svg
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    class="h-5 w-5 inline-block"
                    viewBox="0 0 122.9 107.5"
                    style="enable-background: new 0 0 122.9 107.5"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        class="fill-white"
                        d="M3.9,7.9C1.8,7.9,0,6.1,0,3.9C0,1.8,1.8,0,3.9,0h10.2c0.1,0,0.3,0,0.4,0c3.6,0.1,6.8,0.8,9.5,2.5c3,1.9,5.2,4.8,6.4,9.1 c0,0.1,0,0.2,0.1,0.3l1,4H119c2.2,0,3.9,1.8,3.9,3.9c0,0.4-0.1,0.8-0.2,1.2l-10.2,41.1c-0.4,1.8-2,3-3.8,3v0H44.7 c1.4,5.2,2.8,8,4.7,9.3c2.3,1.5,6.3,1.6,13,1.5h0.1v0h45.2c2.2,0,3.9,1.8,3.9,3.9c0,2.2-1.8,3.9-3.9,3.9H62.5v0 c-8.3,0.1-13.4-0.1-17.5-2.8c-4.2-2.8-6.4-7.6-8.6-16.3l0,0L23,13.9c0-0.1,0-0.1-0.1-0.2c-0.6-2.2-1.6-3.7-3-4.5 c-1.4-0.9-3.3-1.3-5.5-1.3c-0.1,0-0.2,0-0.3,0H3.9L3.9,7.9z M96,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C86.4,92.6,90.7,88.3,96,88.3L96,88.3z M53.9,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C44.3,92.6,48.6,88.3,53.9,88.3L53.9,88.3z M33.7,23.7l8.9,33.5h63.1l8.3-33.5H33.7L33.7,23.7z"
                      />
                    </g>
                  </svg>
                  Add to cart
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Food Items Section-->







      <!-- Footer start -->
        @include('home.footer')
      <!-- Footer end -->
    </div>


</body>
</html>
