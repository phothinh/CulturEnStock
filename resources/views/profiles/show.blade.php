@extends('layouts.app')
@extends('head')
@extends('navlogout')
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
                <div>Owen Guimar</div>
                <div>Chef de projet</div>
            </div>

        </div>

    </div>

</div>
@endsection
