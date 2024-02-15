@extends('blog.layouts.app')
@section('content')
      <div class="flex-1 p-3 md:py-[35]">
        <div class="space-y-2 md:space-y-6">

          @foreach ($blogs as $blog)
            <div class="card card-side bg-base-200 shadow-xl">
              <figure>
                <a href="{{ route('blog.show', $blog) }}"
                  class="flex w-56 items-center">
                  <img
                    src="{{ asset('storage/images/' . $blog->image) }}"
                    alt="{{ $blog->title }}"
                    class="rounded-lg"
                  />
                </a>
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
        <p class="text-sm pl-4">Copyright © {{ date('Y') }} {{ config('app.name') }}</p>
      </div>
    </div>
  </div>
@endsection