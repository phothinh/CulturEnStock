@extends('layouts.app')
@extends('head')

@section('content')
@if (Route::has('login'))
    @extends('nav')
@else
    @extends('navlogout')
@endif
<div class="container">
    <div class="row">
        <p>blablablabal</p>
    </div>
</div>
@endsection
