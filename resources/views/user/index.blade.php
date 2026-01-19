<x-app-layouts class="bg-gray-100 min-h-screen p-8" title="Protectora | Usuarios">
    <h1 class="text-4xl font-bold text-gray-800 text-center mb-10">
        Usuarios
    </h1>

    <div class="overflow-x-auto max-w-6xl mx-auto">
        <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-3 text-left">Usuario</th>
                    <th class="px-4 py-3 text-left">Email</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($usuarios as $user)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="px-4 py-3">{{ $user->username }}</td>
                        <td class="px-4 py-3">{{ $user->email }}</td>
                        <td class="flex">
                            <a href="{{ route('user.edit', $user) }}"><button>EDITAR</button></a>
                            <form action="{{ route('user.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="'submit">
                                    ELIMINAR
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{ $usuarios->links() }}

    <a href="{{ route('root') }}" class="flex justify-center mt-8">
        <button type="button"
                class="flex items-center gap-2 bg-gray-800 text-white py-2 px-5 rounded-lg shadow-md hover:bg-gray-900 transition">
            Volver
        </button>
    </a>

    <a href="{{ route('register.user') }}" class="flex justify-center mt-4">
        <button type="button"
                class="flex items-center gap-2 bg-blue-600 text-white py-2 px-5 rounded-lg shadow-md hover:bg-blue-700 transition">
            Registrar Usuario
        </button>
    </a>

</x-app-layouts>
