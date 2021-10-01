<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('partials.header')

    <body class="antialiased flex w-screen h-screen">

        @yield('content')

        <!-- Scripts -->
        @include('partials.footer')
    </body>
</html>
