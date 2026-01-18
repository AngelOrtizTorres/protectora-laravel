<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">

    <h1 class="text-4xl font-bold text-gray-800 text-center mb-10">
        Usuarios
    </h1>

    <div class="overflow-x-auto max-w-6xl mx-auto">
        <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-3 text-left">ID</th>
                    <th class="px-4 py-3 text-left">Usuario</th>
                    <th class="px-4 py-3 text-left">Email</th>
                    <th class="px-4 py-3 text-left">Teléfono</th>
                    <th class="px-4 py-3 text-left">Nombre</th>
                    <th class="px-4 py-3 text-left">Apellido</th>
                    <th class="px-4 py-3 text-left">Dirección</th>
                    <th class="px-4 py-3 text-left">Rol</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($usuarios as $user)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="px-4 py-3">{{ $user->id }}</td>
                        <td class="px-4 py-3">{{ $user->username }}</td>
                        <td class="px-4 py-3">{{ $user->email }}</td>
                        <td class="px-4 py-3">{{ $user->telefono }}</td>
                        <td class="px-4 py-3">{{ $user->nombre }}</td>
                        <td class="px-4 py-3">{{ $user->apellido }}</td>
                        <td class="px-4 py-3">{{ $user->direccion }}</td>
                        <td class="px-4 py-3">{{ $user->rol }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Botón Volver -->
    <a href="{{ url('/') }}" class="flex justify-center mt-8">
        <button type="button"
                class="flex items-center gap-2 bg-gray-800 text-white py-2 px-5 rounded-lg shadow-md hover:bg-gray-900 transition">
            Volver
        </button>
    </a>

    <!-- Botón Registrar Usuario -->
    <a href="{{ route('register.user') }}" class="flex justify-center mt-4">
        <button type="button"
                class="flex items-center gap-2 bg-blue-600 text-white py-2 px-5 rounded-lg shadow-md hover:bg-blue-700 transition">
            Registrar Usuario
        </button>
    </a>

</body>
</html>
