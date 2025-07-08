<!DOCTYPE html>
<html lang="es" class="h-full">

@include('layouts.head')

<body class="min-h-full flex flex-col">
    @include('layouts.navbar')

    <div class="container my-5 flex-grow">
        @yield('contenido')
    </div>

    @include('layouts.footer')

    @include('layouts.scripts')
</body>
</html>