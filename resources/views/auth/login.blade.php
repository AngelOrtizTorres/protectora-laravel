<x-app-layouts class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-6" title="Protectora | Login">

    <h1 class="text-4xl font-bold text-gray-800 mb-8">
        Iniciar Sesión
    </h1>

    <form method="POST" action="{{ route('login') }}"
          class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md flex flex-col gap-5">
        @csrf

        <div class="flex flex-col">
            <label for="username" class="font-semibold text-gray-700">Usuario</label>
            <input type="text" id="username" name="username" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="password" class="font-semibold text-gray-700">Contraseña</label>
            <input type="password" id="password" name="password" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Iniciar Sesión
        </button>
    </form>

    <a href="{{ route('root') }}" class="mt-6">
        <button type="button"
                class="bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-900 transition">
            Volver
        </button>
    </a>
</x-app-layouts>
