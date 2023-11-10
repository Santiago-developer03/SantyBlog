@extends('blog.layouts.app')
@section('content')
    <div class="flex-1 p-3 md:py-[35]">
      <div class="space-y-2 md:space-y-6">
        <div class="card bg-base-200 shadow-xl">
          <div class="card-body">
            <h1 class="md:text-3xl font-extrabold">Categories</h1>
          </div>
        </div>
        <div class="card bg-base-200 shadow-xl">
          <div class="card-body">
            <div class="flex flex-wrap justify-center gap-8">
              <a href="{{ url('categorysingle') }}">
                <div
                  class="card w-80 h-40 bg-base-100 shadow-xl image-full"
                >
                  <figure>
                    <img
                      src="https://api.lorem.space/image/movie?w=400&h=225"
                      alt="Movies"
                    />
                  </figure>
                  <div class="card-body">
                    <h2 class="card-title">Movies</h2>
                  </div>
                </div></a
              >
              <a href="{{ url('categorysingle') }}"
                ><div
                  class="card w-80 h-40 bg-base-100 shadow-xl image-full"
                >
                  <figure>
                    <img
                      src="https://api.lorem.space/image/game?w=400&h=225"
                      alt="Games"
                    />
                  </figure>
                  <div class="card-body">
                    <h2 class="card-title">Games</h2>
                  </div>
                </div></a
              >
              <a href="{{ url('categorysingle') }}"
                ><div
                  class="card w-80 h-40 bg-base-100 shadow-xl image-full"
                >
                  <figure>
                    <img
                      src="https://api.lorem.space/image/book?w=400&h=225"
                      alt="Books"
                    />
                  </figure>
                  <div class="card-body">
                    <h2 class="card-title">Books</h2>
                  </div>
                </div></a
              >
              <a href="{{ url('categorysingle') }}"
                ><div
                  class="card w-80 h-40 bg-base-100 shadow-xl image-full"
                >
                  <figure>
                    <img
                      src="https://api.lorem.space/image/watch?w=400&h=225"
                      alt="Watches"
                    />
                  </figure>
                  <div class="card-body">
                    <h2 class="card-title">Watches</h2>
                  </div>
                </div></a
              >
              <a href="{{ url('categorysingle') }}"
                ><div
                  class="card w-80 h-40 bg-base-100 shadow-xl image-full"
                >
                  <figure>
                    <img
                      src="https://api.lorem.space/image/shoes?w=400&h=225"
                      alt="Shoes"
                    />
                  </figure>
                  <div class="card-body">
                    <h2 class="card-title">Shoes</h2>
                  </div>
                </div></a
              >
              <a href="{{ url('categorysingle') }}"
                ><div
                  class="card w-80 h-40 bg-base-100 shadow-xl image-full"
                >
                  <figure>
                    <img
                      src="https://api.lorem.space/image/drink?w=400&h=225"
                      alt="Drinks"
                    />
                  </figure>
                  <div class="card-body">
                    <h2 class="card-title">Drinks</h2>
                  </div>
                </div></a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <p class="text-sm pl-4">© 1967 - 2022 Sarissa Blog</p>
      <p class="text-xs pl-4">
        Sarissa theme desing by
        <a class="link" href="https://github.com/iozcelik">iozcelik</a>
      </p>
    </div>

  </div>
</div>
@endsection