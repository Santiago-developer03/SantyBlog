@extends('dashboard.layouts.app')
@section('content')
<div class="flex-1 p-3 md:py-[35]">
    <div class="space-y-2 md:space-y-6">
        <div class="card shadow-xl flex items-center justify-center">
            <div class="w-full p-6 rounded-lg shadow-lg">
              <h1 class="text-2xl font-semibold text-center text-gray-300 mt-8 mb-6">Agregar Noticia:</h1>
              <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                  <label for="image" class="block mb-2 text-md text-gray-300 font-bold">Imagen de Cabecera:</label>
                  <input type="file" id="image" name="image" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" autocomplete="off">
                  @error('image')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="mb-4">
                  <label for="title" class="block mb-2 text-md text-gray-300 font-bold">Título de la Noticia:</label>
                  <input type="text" id="title" name="title" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                  @error('title')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>
                
                <input type="text" name="author" value="{{ Auth::user()->name }}" class="hidden">
                
                <div class="mb-4">
                  <label for="category" class="block mb-2 text-md text-gray-300 font-bold">Categoría de la Noticia:</label>
                  <select id="category" name="category" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                    <option value="" class="text-gray-600 font-bold">Elegir Categoría...</option>
                    <option value="Nacional" class="text-gray-600 font-bold">Nacional</option>
                    <option value="Internacional" class="text-gray-600 font-bold">Internacional</option>
                  </select>
                  @error('category')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="mb-4">
                  <label for="body" class="block mb-2 text-md text-gray-300 font-bold">Cuerpo de la Noticia:</label>
                  <textarea id="body" name="body" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"></textarea>
                  @error('body')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="flex justify-end gap-2 ">
                  <a href="{{ route('news.index') }}" class="w-32 bg-gradient-to-r bg-gray-400 to-cyan-600 text-white font-bold text-center py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
                    Cancelar
                  </a>
                  <button type="submit" class="w-32 bg-gradient-to-r bg-green-400 to-cyan-600 text-white font-bold py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
                    Guardar
                  </button>
                </div>
              </form>
            </div>
          </div>
    </div>
    <div class="divider"></div>
    <p class="text-sm pl-4">Copyright © {{ date('Y') }} Noticias Puerto Plata</p>
  </div>
</div>
@endsection