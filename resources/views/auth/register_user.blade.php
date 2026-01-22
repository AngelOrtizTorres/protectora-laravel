<x-app-layouts title="Protectora | Registro de Usuarios">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">
        Registro de Usuarios
    </h1>

    <form method="POST" action="{{ route('register.user') }}"
          class="bg-white shadow-lg rounded-lg w-full max-w-md flex flex-col gap-5 align-self-center p-8">
        @csrf

        <div class="flex flex-col">
            <label for="username" class="font-semibold text-gray-700 flex mr-2">Nombre de Usuario<p class="text-red-500">*</p></label>
            <input type="text" id="username" name="username" value="{{ old('username', $user->username ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">

            @error('username')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="email" class="font-semibold text-gray-700 flex mr-2">Correo Electrónico<p class="text-red-500">*</p></label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
            
            @error('email')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="telefono" class="font-semibold text-gray-700 flex mr-2">Teléfono<p class="text-red-500">*</p></label>
            <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $user->telefono ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
            
            @error('telefono')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="password" class="font-semibold text-gray-700 flex mr-2">Contraseña<p class="text-red-500">*</p></label>
            <input type="password" id="password" name="password"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">

            @error('password') 
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="nombre" class="font-semibold text-gray-700 flex mr-2">Nombre<p class="text-red-500">*</p></label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $user->nombre ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                
            @error('nombre')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="apellido" class="font-semibold text-gray-700 flex mr-2">Apellido<p class="text-red-500">*</p></label>
            <input type="text" id="apellido" name="apellido" value="{{ old('apellido', $user->apellido ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">

            @error('apellido')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="direccion" class="font-semibold text-gray-700 flex mr-2">Dirección<p class="text-red-500">*</p></label>
            <input type="text" id="direccion" name="direccion" value="{{ old('direccion', $user->direccion ?? '') }}"
                   class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">

            @error('direccion')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
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
            Registrar Usuario
        </button>
    </form><br>

    <div class="mt-6 flex flex-col items-center gap-3">
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
            ¿Ya tienes una cuenta? Inicia sesión
        </a>

        <a href="{{ route('users') }}">
            <button type="button"
                    class="bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-900 transition">
                Volver
            </button>
        </a>
    </div>
</x-app-layouts>
