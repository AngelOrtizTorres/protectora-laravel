<x-app-layouts class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-6" title="Protectora | Editar Usuario">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">
        Editar Usuario
    </h1>

    <form method="post" action="{{ route('user.update', $user) }}"
          class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md flex flex-col gap-5">
        @csrf

        @method('PUT')

        <div class="flex flex-col">
            <label for="username" class="font-semibold text-gray-700">Nombre de Usuario</label>
            <input type="text" id="username" name="username" value="{{ $user->username }}" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="email" class="font-semibold text-gray-700">Correo Electrónico</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="telefono" class="font-semibold text-gray-700">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="{{ $user->telefono }}" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="nombre" class="font-semibold text-gray-700">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $user->nombre }}" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="apellido" class="font-semibold text-gray-700">Apellido</label>
            <input type="text" id="apellido" name="apellido" value="{{ $user->apellido }}" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="direccion" class="font-semibold text-gray-700">Dirección</label>
            <input type="text" id="direccion" name="direccion" value="{{ $user->direccion }}" required
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="rol" class="font-semibold text-gray-700">Rol</label>
            <select name="rol" id="rol"
                    class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                <option value="empleado">Empleado</option>
                <option value="administrador">Administrador</option>
                <option value="voluntario">Voluntario</option>
                <option value="usuario" selected>Usuario</option>
            </select>
        </div>

        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Modificar Usuario
        </button>
    </form>

    <div class="mt-6 flex flex-col items-center gap-3">
        <a href="{{ route('root') }}">
            <button type="button"
                    class="bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-900 transition">
                Volver
            </button>
        </a>
    </div>

</x-app-layouts>