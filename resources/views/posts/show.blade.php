@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="{{ asset('storage') . '/' . $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <p>Événement proposé par <strong>{{ $post->user->username }}</strong><p>
            <strong><h3>{{ $post->caption}}</h3></strong><br>
            <p><strong>Description :</strong> <br>{{ $post->description }}</p><br>
            <p><strong>Horaire :</strong> <br>{{ $post->horaire}}</p><br>
            <a href ="{{ url('/reserver') }}"><button type="button" class="btn btn-primary btn-lg btn-block">RÉSERVER</button></a>
        </div>
    </div>
</div>
@endsection
