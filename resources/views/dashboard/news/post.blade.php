@extends('dashboard.layouts.app')
@section('content')
<div class="flex-1 p-3 md:py-[35]">
    <div class="space-y-2 md:space-y-6">

        @if($message = Session::get('danger'))
          <div class="relative block w-full rounded-lg bg-red-400 p-4 text-lg leading-5 text-white font-bold opacity-100" x-show="open" data-dismissible="alert">
            <div class="mr-12">{{ $message }}</div>
              <div class="absolute top-2.5 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20" data-dismissible-target="alert">
                <button role="button" class="w-max rounded-lg p-1" x-on:click="open = !open">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
          </div>
        @endif

        @if($message = Session::get('success'))
          <div class="relative block w-full rounded-lg bg-green-400 p-4 text-lg leading-5 text-white font-bold opacity-100" x-show="open" data-dismissible="alert">
            <div class="mr-12">{{ $message }}</div>
              <div class="absolute top-2.5 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20" data-dismissible-target="alert">
                <button role="button" class="w-max rounded-lg p-1" x-on:click="open = !open">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
          </div>
        @endif

        <div class="card shadow-xl">
            <div class="card-body">
              <div class="flex justify-end">
                <a href="{{ route('news.create') }}">
                  <button class="w-36 bg-gradient-to-r bg-green-500 hover:bg-green-600 to-cyan-600 text-white text-sm font-bold text-center uppercase py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
                    Crear Noticia
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                </a>
              </div>
                <table class="text-sm text-center text-gray-300">
                    <thead class="text-md text-gray-300 uppercase bg-gray-700 mx-auto">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Imagen
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Título
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Categoría
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-md text-gray-300 border-b border-gray-500">
                      @foreach ($posts as $post)
                        <tr>
                            <td class="flex justify-center px-6 py-4">
                              <img 
                                src="{{ asset('storage/images/' . $post->image) }}" 
                                class="w-32 rounded-lg">
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->category }}
                            </td>
                            <td class="px-6 py-4">
                              <form action="{{ route('news.destroy', $post) }}" method="POST">
                                @csrf @method('DELETE')
                                <div class="flex justify-center gap-2 ">
                                  <a href="{{ route('news.edit', $post) }}" class="w-12 bg-gradient-to-r bg-yellow-500 hover:bg-yellow-600 to-cyan-600 text-white text-lg font-bold text-center py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </a>
                                  <button type="submit" class="w-12 bg-gradient-to-r bg-red-500 hover:bg-red-600 to-cyan-600 text-white text-lg font-bold py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                  </button>
                                </div>
                              </form>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
          </div>
          {{ $posts->links(); }}
      {{-- <div class="flex justify-center">
        <div class="btn-group">
          <button class="btn">1</button>
          <button class="btn">2</button>
          <button class="btn btn-disabled">...</button>
          <button class="btn">99</button>
          <button class="btn">100</button>
        </div>
      </div> --}}
    </div>
    <div class="divider"></div>
    <p class="text-sm pl-4">Copyright © {{ date('Y') }} Noticias Puerto Plata</p>
  </div>
</div>
@endsection