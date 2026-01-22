<x-app-layouts title="Protectora | Registro de Mascotas">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">
        Registro de Mascotas
    </h1>
    
    <form method="POST" action="{{ route('register.animal') }}"
          class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md flex flex-col gap-5">
        @csrf
    
        <div class="flex flex-col">
            <label for="nombre" class="font-semibold text-gray-700 flex mr-2">Nombre<p class="text-red-500">*</p></label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $animal->nombre ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">

            @error('nombre')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="flex flex-col">
            <label for="raza" class="font-semibold text-gray-700 flex mr-2">Raza<p class="text-red-500">*</p></label>
            <input type="text" id="raza" name="raza" value="{{ old('raza', $animal->raza ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
            
            @error('raza')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="flex flex-col">
            <label for="fechaNacimiento" class="font-semibold text-gray-700 flex mr-2">Fecha de Nacimiento<p class="text-red-500">*</p></label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="{{ old('fechaNacimiento', $animal->fechaNacimiento ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                
            @error('fechaNacimiento')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
    
        <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
            Registrar Mascota
        </button>
    </form><br>
    
    <a href="{{ route('animals') }}" class="mt-6">
        <button type="button"
                class="bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-900 transition align-content-center">
            Volver
        </button>
    </a>
</x-app-layouts>

