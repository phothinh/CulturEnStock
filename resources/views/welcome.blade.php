<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('head')

    <body>
         @if (Route::has('login'))
            @extends('nav')
         @endif

         @section('content')
         {{ __('CulturEnStock') }}
         @endsection
    </body>
</html>
