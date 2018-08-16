<!DOCTYPE html>
<html lang="en">
    @include('partials._head')
    <body>
        @include('partials._navbar')
        <h1>Hello, world!</h1>
        <div class="container">
            @yield('content')
        </div>

        @yield('scripts')
    </body>

</html>