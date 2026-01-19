<x-app-layouts class="bg-gray-100 min-h-screen flex flex-col items-center justify-center gap-6">
    <h1 class="text-4xl font-bold text-gray-800 mb-6">
        Welcome to Protectora
    </h1>
    <div class="flex flex-col gap-4 w-full max-w-xs">
        <a href="{{ route('users') }}">
            <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Ver Usuarios
            </button>
        </a>
        <a href="{{ route('animals') }}">
            <button class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                Ver Mascotas
            </button>
        </a>
        <a href="{{ route('register.user') }}">
            <button class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                Registrar Usuario
            </button>
        </a>
        <a href="{{ route('register.animal') }}">
            <button class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition">
                Registrar Mascota
            </button>
        </a>
        <a href="{{ route('login') }}">
            <button class="w-full bg-gray-800 text-white py-2 rounded-lg hover:bg-gray-900 transition">
                Iniciar Sesión
            </button>
        </a>
    </div>
</x-app-layouts>
