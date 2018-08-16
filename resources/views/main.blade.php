<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._navbar')
        <h1>Hello, world!</h1>
        <div class="container">
            @yield('content')
        </div>
        @include('partials._javascript')
        @yield('scripts')
    </body>
</html>