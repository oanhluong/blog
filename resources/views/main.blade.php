<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._navbar')
        <div class="container">
            @yield('content')
        </div>
        @include('partials._javascript')
        @yield('scripts')
    </body>
</html>