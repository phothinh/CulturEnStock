<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('head')

    <body>
         @if (Route::has('login'))
            @extends('nav')
         @endif

         @section('content')
             CulturEnStock
         @endsection
    </body>
</html>
