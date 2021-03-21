@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">S'abonner</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <h1>Bonjour {{ Auth::user()->name }}</h1><hr>
                        <p><strong>Pass'Culturel individuelle Adulte</strong><br>
					            12 €<br>
                        </p>
                        <p><strong>Pass' Culturel couple</strong><br>
                                        (même adresse)<br>
                                        20 €<br>
                        </p>
                        <p><strong>Pass' Culturel jeune</strong><br>
                                        (- 18 ans et étudiant - 26 ans - adhésion offerte à partir du 2e enfant - demandeur d'emploi)<br>
                                        5 €<br>
                        </p>
                        <p><strong>Adhésion parrainée</strong><br>
                                        (réservée aux détenteurs des cartes Cézam et Loisirs et aux personnes dont l'entreprise est adhérente à la salle CulturEnStock, sur
                                        présentation d'un justificatif)<br>
                                        5 €<br>
                        </p>

                        <hr>

                        <div class="form-group">
                            <label for="abo">Choisissez un abonnement</label>
                            <select id="abo" type="text" class="form-control @error('abo') is-invalid @enderror" name="abo" autocomplete="abo" autofocus>
                                <option>Pass'Culturel individuelle Adulte</option>
                                <option>Pass' Culturel couple</option>
                                <option>Pass' Culturel jeune</option>
                                <option>Adhésion parrainée</option>
                            </select>

                             @error('abo')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="num">Numéro de carte bancaire</label>
                            <input id="num" type="text" class="form-control @error('num') is-invalid @enderror" name="num" value="{{ old('num')}}" autocomplete="num" autofocus>

                             @error('num')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="date">Date d'expiration</label>
                            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date')}}" autocomplete="date" autofocus></date>

                             @error('date')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="code">Code de sécurité</label>
                            <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code')}}" autocomplete="code" autofocus>

                             @error('code')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <hr>

                        <button type="submit" class="btn btn-primary  btn-lg btn-block">
                            M'ABONNER
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
