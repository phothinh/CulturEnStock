<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('head')

    <body>
        <div>
            @if (Route::has('login'))
                @extends('nav')
            @endif

            <div class="content">
                <div>
                    CulturEnStock
                </div>
            </div>
        </div>
    </body>
</html>
