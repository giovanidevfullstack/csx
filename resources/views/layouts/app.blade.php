<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('partials.header')

    <!-- get dark by session? -->
    <body class="antialiased">
        
        @yield('content')

        <!-- Scripts -->
        @include('partials.footer')
    </body>
</html>
