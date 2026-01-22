<x-app-layouts title="Protectora | Mascotas">
    <h1 class="text-4xl font-bold text-gray-800 text-center mb-10">
        Mascotas
    </h1>
    
    <div class="overflow-x-auto max-w-5xl w-full mx-auto">
        <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-green-700 text-white">
                <tr>
                    <th class="px-4 py-3 text-left">Nombre</th>
                    <th class="px-4 py-3 text-left">Raza</th>
                    <th class="px-4 py-3 text-left">Fecha de Nacimiento</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($animales as $animal)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="px-4 py-3">{{ $animal->nombre }}</td>
                        <td class="px-4 py-3">{{ $animal->raza }}</td>
                        <td class="px-4 py-3">{{ $animal->fechaNacimiento }}</td>
                        <td class="flex px-4 py-3">
                            <a href="{{ route('animal.edit', $animal) }}"><span class="material-symbols-outlined">edit</span></a>
                            <form action="{{ route('animal.destroy', $animal) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div><br>

    {{ $animales->links() }}
    
    <a href="{{ route('root') }}" class="flex justify-center mt-8">
        <button type="button"
                class="flex items-center gap-2 bg-gray-800 text-white py-2 px-5 rounded-lg shadow-md hover:bg-gray-900 transition">
            Volver
        </button>
    </a>
    <a href="{{ route('register.animal') }}" class="flex justify-center">
        <button type="button"
                class="flex items-center gap-2 bg-blue-600 text-white py-2 px-5 rounded-lg shadow-md hover:bg-blue-700 transition mt-4">
            Registrar Mascota
        </button>
    </a>
</x-app-layouts>

