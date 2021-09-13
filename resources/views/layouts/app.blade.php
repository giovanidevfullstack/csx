<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('partials.header')

    <body class="antialiased">
        
        @yield('content')

        <!-- Scripts -->
        @include('partials.footer')
    </body>
</html>
