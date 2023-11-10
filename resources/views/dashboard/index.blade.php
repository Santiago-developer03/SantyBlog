@extends('dashboard.layouts.app')
@section('content')
<div class="flex-1 p-3 md:py-[35]">
    <div class="space-y-2 md:space-y-6">
      <h1 class="text-2xl text-gray-300 text-center font-bold"><u>¡{{ Auth::user()->name }}, bienvenido/a a Noticias Puerto Plata!</u></h1>
        <div class="card shadow-xl">
            <div class="card-body">
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
                                Autor del Contenido
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
                            <td class="px-4 py-4">
                              {{ $post->author }}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
          </div>
          {{ $posts->links(); }}
    </div>
    <div class="divider"></div>
    <p class="text-sm pl-4">Copyright © {{ date('Y') }} Noticias Puerto Plata</p>
  </div>
</div>
@endsection