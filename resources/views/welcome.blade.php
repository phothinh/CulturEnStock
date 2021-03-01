<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('head')

    <body>
         @if (Route::has('login'))
            @extends('nav')
         @endif

         @section('content')
             <h1>CulturEnStock</h1
         @endsection
    </body>
</html>
