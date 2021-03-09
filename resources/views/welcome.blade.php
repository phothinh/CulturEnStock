<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    @extends('head')

    <body>
         @if (Route::has('login'))
            @extends('nav')
         @endif

         @section('content')
         <div class="container">
            <h3>Bienvenue!</h3>

        </div>
         @endsection
    </body>
</html>
