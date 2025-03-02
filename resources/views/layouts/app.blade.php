<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.components.head')

<body class="font-sans antialiased">

    @include('layouts.components.navbar')
    @yield('content')

    @if (!isset($noFooter) || !$noFooter)
        @include('layouts.components.footer')
    @endif


    @include('layouts.components.js')

</body>

</html>
