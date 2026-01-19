<x-app-layouts class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-6" title="Protectora | Registro de Mascotas">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">
        Registro de Mascotas
    </h1>
    
    <form method="POST" action="{{ route('register.animal') }}"
          class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md flex flex-col gap-5">
        @csrf
    
        <div class="flex flex-col">
            <label for="nombre" class="font-semibold text-gray-700">Nombre</label>
            <input type="text" id="nombre" name="nombre" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>
    
        <div class="flex flex-col">
            <label for="raza" class="font-semibold text-gray-700">Raza</label>
            <input type="text" id="raza" name="raza" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>
    
        <div class="flex flex-col">
            <label for="fechaNacimiento" class="font-semibold text-gray-700">Fecha de Nacimiento</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>
    
        <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
            Registrar Mascota
        </button>
    </form>
    
    <a href="{{ route('root') }}" class="mt-6">
        <button type="button"
                class="bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-900 transition">
            Volver
        </button>
    </a>
</x-app-layouts>

