<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protectora</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center gap-6">
    <h1 class="text-4xl font-bold text-gray-800 mb-6">
        Welcome to Protectora
    </h1>
    <div class="flex flex-col gap-4 w-full max-w-xs">
        <a href="{{ url('/usuarios') }}">
            <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Ver Usuarios
            </button>
        </a>
        <a href="{{ url('/animales') }}">
            <button class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                Ver Mascotas
            </button>
        </a>
        <a href="{{ url('/registro/usuarios') }}">
            <button class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                Registrar Usuario
            </button>
        </a>
        <a href="{{ url('/registro/animales') }}">
            <button class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition">
                Registrar Mascota
            </button>
        </a>
        <a href="{{ url('/login') }}">
            <button class="w-full bg-gray-800 text-white py-2 rounded-lg hover:bg-gray-900 transition">
                Iniciar Sesión
            </button>
        </a>
    </div>
</body>
</html>
