@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row mt-4">
        <div class="col-4 text-center">
            <img src="https://moodle2.iut-acy.univ-savoie.fr/pluginfile.php/46267/user/icon/iut_annecy/f1?rev=1206261" class="rounded-circle">
        </div>

        <div class="col-8">

            <div class="d-flex">
                <div class="h4 mr-3 pt-2">{{ $user->username }}</div>
            </div>

            <div class="d-flex mt-3">
                <div class="mr-3"><strong>3</strong> publications</div>
            </div>

            <div class="mt-3">
                <div>{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
            </div>

        </div>
    </div>

    <div class="row mt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-3">
            <a href="{{ route('posts.show', ['post' => $post->id]) }}"><img src="{{ asset('storage') . '/' . $post->image }}" class="w-100"></a>
        </div>
        @endforeach
    </div>

</div>
@endsection
