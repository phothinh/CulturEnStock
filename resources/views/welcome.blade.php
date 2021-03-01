<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('head')

    <body>
         @if (Route::has('login'))
            @extends('nav')
         @endif

         @section('content')
         <div class="container">
            <h3>Right Aligned Navbar</h3>
            <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
        </div>
         @endsection
    </body>
</html>
