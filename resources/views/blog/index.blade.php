@extends('blog.layouts.app')
@section('content')
      <div class="flex-1 p-3 md:py-[35]">
        <div class="space-y-2 md:space-y-6">

          @foreach ($blogs as $blog)
            <div class="card card-side bg-base-200 shadow-xl">
              <figure>
                <img
                  src="{{ asset('storage/images/' . $blog->image) }}"
                  alt="Movie"
                  class="w-56"
                />
              </figure>
              <div class="card-body">
                <a href="{{ route('blog.show', $blog) }}" class="hover:text-white">
                  <h2 class="card-title">{{ $blog->title }}</h2>
                </a>
                <div class="justify-start">
                  <button class="btn btn-xs btn-primary">{{ $blog->category }}</button>
                </div>
                <div class="mb-4">
                  <p class="text-justify w-[50rem] truncate">
                    {{ $blog->body }} 
                  </p>
                  <a href="{{ route('blog.show', $blog) }}" class="hover:text-white font-bold"><u>Leer más...</u></a>
                </div>
                <p class="flex items-end">
                  Publicado por: {{ $blog->author }} <br> ({{ $blog->created_at->locale('es_eS')->isoFormat('DD MMM Y') }})
                </p>
              </div>
            </div> 
          @endforeach
          {{ $blogs->links(); }}
        </div>
        <div class="divider"></div>
        <p class="text-sm pl-4">Copyright © {{ date('Y') }} Noticias Puerto Plata</p>
      </div>
    </div>
  </div>
@endsection