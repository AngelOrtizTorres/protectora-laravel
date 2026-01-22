<!DOCTYPE html>
<html lang="es">
<head>

    @include('app.header')
    @include('app.style')
    
</head>
<body class="grid-areas-layout gap-6 p-6">
    <header class="area-header flex justify-between">
        <h2 class="text-xl font-semibold">Protectora de Animales</h2>
        <div class="flex gap-4 mw-8 ">
            <a href="{{ route('login') }}"><span class="material-symbols-outlined">person</span></a>
            <a href="{{ route('root') }}"><span class="material-symbols-outlined">home</span></a>
        </div>
    </header>
    <main class="area-main items-center justify-center flex flex-col ">

        {{ $slot }}

    </main>
    <aside class="area-aside items-center">
        
        @include('app.aside')

    </aside>
</body>
</html>
