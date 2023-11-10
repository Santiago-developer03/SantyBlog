@extends('dashboard.layouts.app')
@section('content')
<div class="flex-1 p-3 md:py-[35]">
    <div class="space-y-2 md:space-y-6">
        <div class="card shadow-xl flex items-center justify-center">
            <div class="w-full p-6 rounded-lg shadow-lg">
              <h1 class="text-2xl font-semibold text-center text-gray-300 mt-8 mb-6">Agregar Noticia:</h1>
              <form action="{{ route('news.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf   @method('PUT')
                <div class="mb-4">
                  <label for="image" class="block mb-2 text-md text-gray-300 font-bold">Imagen de Cabecera:</label>
                  <img src="{{ asset('storage/images/' . $post->image) }}" class="w-32 mb-3">
                  <input type="file" id="image" name="image" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" autocomplete="off">
                  @error('image')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="mb-4">
                  <label for="title" class="block mb-2 text-md text-gray-300 font-bold">Título de la Noticia:</label>
                  <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                  @error('title')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>
                
                <div class="mb-4">
                  <label for="category" class="block mb-2 text-md text-gray-300 font-bold">Categoría de la Noticia: "{{ $post->category }}"</label>
                  <select id="category" name="category" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                    <option value="{{ old('category', $post->category) }}" class="text-gray-600 font-bold" selected>Elegido: {{ old('category', $post->category) }}</option>
                    <option value="Nacional" class="text-gray-600 font-bold">Nacional</option>
                    <option value="Internacional" class="text-gray-600 font-bold">Internacional</option>
                  </select>
                  @error('category')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="mb-4">
                  <label for="body" class="block mb-2 text-md text-gray-300 font-bold">Cuerpo de la Noticia:</label>
                  <textarea id="body" name="body" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>{{ old('body', $post->body) }}</textarea>
                  @error('body')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="flex justify-end gap-2 ">
                  <a href="{{ route('news.index') }}" class="w-32 bg-gradient-to-r bg-gray-400 to-cyan-600 text-white font-bold text-center py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
                    Cancelar
                  </a>
                  <button type="submit" class="w-32 bg-gradient-to-r bg-green-400 to-cyan-600 text-white font-bold py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
                    Actualizar
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