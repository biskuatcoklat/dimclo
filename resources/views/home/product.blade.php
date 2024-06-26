<div class="my-20">
        <div class="flex flex-row justify-between mb-4">
          <h2 class="text-3xl text-gray-600">New Product</h2>
          <a
            href="/allproduct"
            class="text-xl flex flex-row hover:text-red-600 text-gray-600"
            >Selengkapnya
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-7 h-7 ml-1"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              width="256"
              height="256"
              viewBox="0 0 256 256"
              xml:space="preserve"
            >
              <g transform="translate(128 128) scale(0.72 0.72)" style="">
                <g
                  style="
                    stroke: none;
                    stroke-width: 0;
                    stroke-dasharray: none;
                    stroke-linecap: butt;
                    stroke-linejoin: miter;
                    stroke-miterlimit: 10;
                    fill: none;
                    fill-rule: nonzero;
                    opacity: 1;
                  "
                  transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)"
                >
                  <path
                    d="M 59.51 10.921 c -0.63 0.537 -0.708 1.483 -0.171 2.114 L 85.255 43.5 H 1.5 C 0.671 43.5 0 44.171 0 45 s 0.671 1.5 1.5 1.5 h 83.755 L 59.339 76.965 c -0.536 0.63 -0.461 1.577 0.171 2.114 c 0.631 0.537 1.577 0.46 2.114 -0.17 l 28.019 -32.938 c 0.014 -0.016 0.019 -0.038 0.032 -0.054 c 0.07 -0.09 0.138 -0.182 0.187 -0.288 c 0.012 -0.026 0.016 -0.053 0.026 -0.079 c 0.013 -0.032 0.022 -0.063 0.032 -0.095 C 89.968 45.306 90 45.153 90 45 c 0 0 0 0 0 0 s 0 0 0 0 c 0 -0.153 -0.032 -0.306 -0.08 -0.455 c -0.01 -0.032 -0.019 -0.063 -0.032 -0.094 c -0.01 -0.026 -0.015 -0.053 -0.027 -0.079 c -0.049 -0.106 -0.117 -0.198 -0.187 -0.288 c -0.013 -0.017 -0.018 -0.038 -0.032 -0.054 L 61.624 11.092 C 61.087 10.461 60.141 10.384 59.51 10.921 z"
                    style="
                      stroke: none;
                      stroke-width: 1;
                      stroke-dasharray: none;
                      stroke-linecap: butt;
                      stroke-linejoin: miter;
                      stroke-miterlimit: 10;
                      fill: rgb(0, 0, 0);
                      fill-rule: nonzero;
                      opacity: 1;
                    "
                    transform=" matrix(1 0 0 1 0 0) "
                    stroke-linecap="round"
                  />
                </g>
              </g>
            </svg>
          </a>
        </div>
        <div
          class="grid grid-flow-row md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10"
        >
        @foreach ($product as $products)
          <div class="shadow-lg rounded-lg">
            <a href="/productdetail/{{ $products->id }}">
              <img
                src="product/{{ $products->image }}"
                class="w-full rounded-tl-lg rounded-tr-lg"
                alt=""
              />
            </a>
            <div class="p-5">
              <h3 class="text-gray-600"><a href="/productdetail/{{$products->id}}">{{ $products->title }}</a></h3>
              <div class="flex flex-row my-3"></div>
              <div class="flex flex-row my-3">
                <div
                  class="text-gray-400 rounded-md text-xs px-1 py-1 mr-1"
                ></div>
              </div>
              <h6>Harga</h6>
              @if($products->discount_price!=null)
              <div class="flex flex-row justify-between my-3">

                <p class="text-gray-600 py-4  rounded-full shadow-md">
                  Rp.{{ $products->discount_price }}
                </p><br>
                <p class="text-gray-600 py-4 line-through rounded-full shadow-md">
                  Rp.{{ $products->price }}
                </p>
                @else
                <p class="text-gray-600 py-4 line-through rounded-full shadow-md">
                  Rp.{{ $products->price }}
                </p>
                @endif
                <a
                  href="/productdetail/{{$products->id}}"
                  class="bg-gradient-to-r from-red-500 to-red-700 rounded-full py-2 px-4 text-gray-50 text-sm"
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
          @endforeach
        </div>
      </div>
