<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('front_components.head')

<body>

    @include('front_components.header')

    @yield('content')

    @include('front_components.footer')

    @include('front_components.js')


</body>

</html>
