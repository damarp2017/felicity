<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backoffice | Felicity</title>
    @include('backoffice.layout._styles')
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('backoffice.layout._navbar')

        @include('backoffice.layout._sidebar')

        @yield('main')

        @include('backoffice.layout._footer')
    </div>

    @include('backoffice.layout._scripts')
    @stack('scripts')
</body>

</html>