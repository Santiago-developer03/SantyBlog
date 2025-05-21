@extends('dashboard.layouts.app')
@section('content')
<div class="flex-1 p-3 md:py-[35]">
    <div class="space-y-2 md:space-y-6">
        <div class="card shadow-xl flex items-center justify-center">
            <div class="w-full p-6 rounded-lg shadow-lg">
              <h1 class="text-2xl font-semibold text-center text-gray-300 mt-8 mb-6">Actualizar Categoría:</h1>
              <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf   @method('PUT')
                <div class="mb-4">   
                    <label for="category" class="block mb-2 text-md text-gray-300 font-bold">Categoría:</label>
                    <input type="text" id="category" name="category" value="{{ old('category', $category->category) }}" class="w-full text-gray-600 font-bold px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                    @error('category')
                      <small class="text-red-500 font-bold">{{ $message }}</small>
                    @enderror
                  </div>
                <div class="flex justify-end gap-2 ">
                  <a href="{{ route('categories.index') }}" class="w-32 bg-gradient-to-r bg-gray-400 to-cyan-600 text-white font-bold text-center py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
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
    <p class="text-sm pl-4">Copyright © {{ date('Y') }} {{ config('app.name') }}</p>
  </div>
</div>
@endsection