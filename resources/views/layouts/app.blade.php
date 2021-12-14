<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials.header')
<body>
        @yield('content')
    @livewireScripts

    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>
</html>
