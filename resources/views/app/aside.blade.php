<div class="flex flex-col gap-4 w-full max-w-xs align-self-center">
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
</div>