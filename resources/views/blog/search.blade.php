@extends('blog.layouts.app')
@section('content')
    <div class="flex-1 p-3 md:py-[35]">
      <div class="space-y-2 md:space-y-6">
        <div class="card bg-base-200 shadow-xl">
          <div class="card-body">
            <h1 class="md:text-3xl font-extrabold">Search</h1>
          </div>
        </div>
        <div class="card bg-base-200 shadow-xl">
          <div class="card-body">
            <div class="form-control">
              <div class="input-group">
                <input
                  type="text"
                  placeholder="Search…"
                  class="input input-bordered w-full"
                />
                <button class="btn btn-square">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                  </svg>
                </button>
              </div>
            </div>
            <div class="divider"></div>
            <p class="text-right">4 result found in 0.2 seconds</p>
            <div class="overflow-x-auto w-full">
              <table class="table-normal w-full">
                <tbody>
                  <!-- row 1 -->
                  <tr>
                    <td>
                      <div class="flex items-center space-x-3">
                        <div class="avatar">
                          <div class="mask mask-squircle w-12 h-12">
                            <img
                              src="https://api.lorem.space/image/face?hash=92310"
                              alt="Avatar Tailwind CSS Component"
                            />
                          </div>
                        </div>
                        <div>
                          <div class="font-bold">Result with image</div>
                          <div class="text-sm opacity-50">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <!-- row 2 -->
                  <tr>
                    <td>
                      <div class="flex items-center space-x-3">
                        <div class="avatar">
                          <div class="mask mask-squircle w-12 h-12">
                            <img
                              src="https://api.lorem.space/image/face?hash=92310"
                              alt="Avatar Tailwind CSS Component"
                            />
                          </div>
                        </div>
                        <div>
                          <div class="font-bold">Brice Swyre</div>
                          <div class="text-sm opacity-50 break-words">
                            Sagittis id consectetur purus ut faucibus
                            pulvinar elementum integer. Massa sed
                            elementum tempus egestas sed. Proin sagittis
                            nisl rhoncus mattis rhoncus urna. Amet
                            volutpat consequat mauris nunc congue nisi
                            vitae suscipit tellus. Posuere urna nec
                            tincidunt praesent semper. Elementum pulvinar
                            etiam non quam lacus suspendisse.
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <!-- row 3 -->
                  <tr>
                    <td>
                      <div class="flex items-center space-x-3">
                        <div>
                          <div class="font-bold">Marjy Ferencz</div>
                          <div class="text-sm opacity-50">
                            Sodales ut etiam sit amet nisl purus in mollis
                            nunc. Suspendisse potenti nullam ac tortor
                            vitae purus. Eu mi bibendum neque egestas
                            congue quisque egestas diam.
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <!-- row 4 -->
                  <tr>
                    <td>
                      <div class="flex items-center space-x-3">
                        <div class="avatar">
                          <div class="mask mask-squircle w-12 h-12">
                            <img
                              src="https://api.lorem.space/image/face?hash=92310"
                              alt="Avatar Tailwind CSS Component"
                            />
                          </div>
                        </div>
                        <div>
                          <div class="font-bold">Yancy Tear</div>
                          <div class="text-sm opacity-50">
                            Sagittis id consectetur purus ut faucibus
                            pulvinar elementum integer. Massa sed
                            elementum tempus egestas sed. Proin sagittis
                            nisl rhoncus mattis rhoncus urna. Amet
                            volutpat consequat mauris nunc congue nisi
                            vitae suscipit tellus. Posuere urna nec
                            tincidunt praesent semper. Elementum pulvinar
                            etiam non quam lacus suspendisse.
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="flex justify-center">
          <div class="btn-group">
            <button class="btn">1</button>
            <button class="btn">2</button>
            <button class="btn btn-disabled">...</button>
            <button class="btn">99</button>
            <button class="btn">100</button>
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <p class="text-sm pl-4">Copyright © {{ date('Y') }} Noticias Puerto Plata</p>
    </div>
  </div>
</div>
@endsection
