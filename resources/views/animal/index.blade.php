<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animales</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">

    <h1 class="text-4xl font-bold text-gray-800 text-center mb-10">
        Animales
    </h1>

    <div class="overflow-x-auto max-w-4xl mx-auto">
        <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-green-700 text-white">
                <tr>
                    <th class="px-4 py-3 text-left">ID</th>
                    <th class="px-4 py-3 text-left">Nombre</th>
                    <th class="px-4 py-3 text-left">Raza</th>
                    <th class="px-4 py-3 text-left">Fecha de Nacimiento</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($animales as $animal)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="px-4 py-3">{{ $animal->id }}</td>
                        <td class="px-4 py-3">{{ $animal->nombre }}</td>
                        <td class="px-4 py-3">{{ $animal->raza }}</td>
                        <td class="px-4 py-3">{{ $animal->fechaNacimiento }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ url('/') }}" class="flex justify-center mt-8">
        <button type="button"
                class="flex items-center gap-2 bg-gray-800 text-white py-2 px-5 rounded-lg shadow-md hover:bg-gray-900 transition">
            Volver
        </button>
    </a>
    <a href="{{ route('register.animal') }}" class="flex justify-center">
        <button type="button"
                class="flex items-center gap-2 bg-blue-600 text-white py-2 px-5 rounded-lg shadow-md hover:bg-blue-700 transition mt-4">
            Registrar Animal
        </button>
    </a>

</body>
</html>
