<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <meta name="description" content="Panel de administración">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.layout.partials.styles')
</head>

<body>

    @include('admin.components.modal_delete')

    @include('admin.layout.partials.header')

    @include('admin.components.filter')

    <main>
        @yield('content')
    </main>

    @include('admin.layout.partials.footer')

    @include('admin.layout.partials.js')
    
</body>

</html>

