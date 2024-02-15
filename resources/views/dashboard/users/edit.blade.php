@extends('dashboard.layouts.app')
@section('content')
<div class="flex-1 p-3 md:py-[35]">
    <div class="space-y-2 md:space-y-6">
        <div class="card shadow-xl flex items-center justify-center">
            <div class="w-full p-6 rounded-lg shadow-lg">
              <h1 class="text-2xl font-semibold text-center text-gray-300 mt-8 mb-6">Editar Usuario:</h1>
              <form action="{{ route('profile.update', $user) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="mb-4">
                  <label for="avatar" class="block mb-2 text-md text-gray-300 font-bold">Foto de Perfil:</label>
                  <img src="{{ asset('storage/profiles/' . $user->avatar) }}"
                  class="w-32 rounded-lg mb-3">
                  <input type="file" id="avatar" name="avatar" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                  @error('avatar')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="mb-4">
                  <label for="name" class="block mb-2 text-md text-gray-300 font-bold">Nombre Completo:</label>
                  <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="text-gray-600 font-bold w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" autocomplete="off">
                  @error('name')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="mb-4">
                  <label for="email" class="block mb-2 text-md text-gray-300 font-bold">Correo Electrónico:</label>
                  <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="text-gray-600 font-bold w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" autocomplete="off">
                  @error('email')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="mb-4">
                  <label for="role" class="block mb-2 text-md text-gray-300 font-bold">Rol del Usuario: "{{ $user->role }}"</label>
                  <select id="role" name="role" class="text-gray-600 font-bold w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" autocomplete="off">
                    <option value="{{ old('role', $user->role) }}" selected>Elegido: {{ old('role', $user->role) }}</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Editor">Editor</option>
                    @error('role')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                  </select>
                </div> 

                <div class="mb-4">
                  <label for="password" class="block mb-2 text-md text-gray-300 font-bold">Contraseña:</label>
                  <input type="password" id="password" name="password" class="text-gray-600 font-bold w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" autocomplete="off">
                  @error('password')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                  @enderror
                </div>

                <div class="flex justify-end gap-2 ">
                  <a href="{{ route('profile.index') }}" class="w-32 bg-gradient-to-r bg-gray-400 to-cyan-600 text-white font-bold text-center py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
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