@extends('blog.layouts.app')
@section('content')
    <div class="flex-1 p-3 md:py-[35]">
      <div class="space-y-2 md:space-y-6">
        <div class="card bg-base-200 shadow-xl">
          <div class="card-body text-center">
            <h1 class="md:text-3xl font-extrabold">
              {{ $blog->title }}
            </h1>
            <div class="badge badge-secondary badge-lg mx-auto">{{ $blog->category }}</div>
          </div>
        </div>
        <div class="card bg-base-200 shadow-xl">
          <div class="card-body">
            <figure>
              <img
                src="{{ asset('storage/images/' . $blog->image) }}"
                class="rounded-lg"
              />
            </figure>
            <div class="card-body">
              <p class="text-justify">
                {{ $blog->body }}
              </p>
            </div>
            <p class="flex items-end">
              Publicado por: {{ $blog->author }} <br> ({{ $blog->created_at->locale('es_eS')->isoFormat('DD MMM Y') }})
            </p>
          </div>
        </div>
        <div class="flex justify-start">
          <a href="{{ route('blog.index') }}" class="w-32 bg-gradient-to-r bg-gray-400 hover:bg-gray-500 to-cyan-600 text-white font-bold text-center py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
            Volver
          </a>
        </div>
      </div>
      <div class="divider"></div>
      <p class="text-sm pl-4">Copyright © {{ date('Y') }} {{ config('app.name') }}</p>
    </div>
  </div>
</div>
@endsection
