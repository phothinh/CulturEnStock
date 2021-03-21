@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Réserver</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <h1>Bonjour {{ Auth::user()->name }}</h1><hr>
                            <label for="seance">Sélectionnez une séance*</label>
                            <select id="seance" type="text" class="form-control @error('seance') is-invalid @enderror" name="seance" autocomplete="seance" autofocus>
                                <option>Séance 1</option>
                                <option>Séance 2</option>
                                <option>Séance 3</option>
                                <option>Séance 4</option>
                            </select>

                             @error('seance')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="siege">Sélectionnez un siège*</label>
                            <select id="siege" type="text" class="form-control @error('siege') is-invalid @enderror" name="siege" autocomplete="siege" autofocus>
                                <option>Siège 1</option>
                                <option>Siège 2</option>
                                <option>Siège 3</option>
                                <option>Siège 4</option>
                            </select>

                             @error('siege')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="place">Nombre de places*</label>
                            <select id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" autocomplete="place" autofocus>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>

                             @error('place')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="paie">Type de paiement*</label>
                            <select id="paie" type="text" class="form-control @error('paie') is-invalid @enderror" name="paie" autocomplete="paie" autofocus>
                                <option>Carte bancaire</option>
                                <option>Téléphone</option>
                                <option>Guichet</option>
                            </select>

                             @error('paie')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <hr>
                        <p><strong>Payement par carte bancaire</strong></p>
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

                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            RÉSERVER
                        </button>

                        <hr>

                        <p><strong>Tarifs Cinéma</strong><br>
                        Plein tarif 6,50 €<br>
                        Réduit adulte 6 € (adhérent Auditorium, cartes Cezam et carte Loisirs, sur présentation d'un justificatif)<br>
                        Tarif jeune 4,50 € (-18 ans et étudiant - 26 ans, demandeur d'emploi sur présentation d'un justificatif de - 6 mois)<br>
                        Matinée adulte : 5 €<br>
                        Matinée jeune : 3,80 €<br>
                        Carte Pass’Région : 1 € de participation par place. Présentation obligatoire d'une pièce d'identité<br>
                        Séances en 3D, supplément 1,50 € pour les lunettes.</p><br>
                        <p><strong>Tarif Conférences (Connaissance du Monde ou autres conférences et/ou débats)</strong><br>
                        Plein tarif 9,50 €<br>
                        Tarif réduit 8€ (retraité, adhérent, carte Cezam, carte Loisirs, sur présentation d'un justificatif)<br>
                        Tarif réduit 4 € (- 18 ans et étudiant - de 26 ans, demandeur d'emploi sur présentation d'un justificatif de - 6 mois)<br>
                        Abonnement 7 conférences connaissance du monde : 45,50 €<br>
                        Chéquier famille (10 chèques) : 75 € (soit 7,50 € la place)<br>
                        (les chèques ne pourront pas être rachetés en fin de saison, ni réutilisés sur la saison suivante, il n’inclut pas la réservation d’une conférence précise)</p><br>
                        <p><strong>Tarif Spectacles Vivants</strong><br>
                        Tarifs spectacle à l'unité - spectacle à tarif unique<br>
                        Plein tarif Adulte 20 €<br>
                        Tarif réduit Adulte 16 € (adhérent, groupe à partir de 10 personnes, détenteur de l'adhésion parrainée)<br>
                        Plein tarif Jeune 10 € (- 18 ans et étudiant - de 26 ans, demandeur d'emploi sur présentation d'un justificatif de - 6 mois)<br>
                        Tarif réduit Jeune 7 € (adhérent, détenteurs de l'adhésion parrainée)<br>
                        Tarif scolaire, établissement adhérent 7€<br>
                        Tarif scolaire, établissement non adhérent 9€<br>
                        Tarifs spectacle à l'unité - spectacle à tarif diversifié<br>
                        place centrale : +3 euros sur le tarif précédent<br>
                        place latérale : -2 euros sur le tarif unique<br>
                        place haute : tarifs ci-dessus<br>
                        Tarifs Abonnement spectacles vivants<br>
                        - Adulte<br>
                        Découverte (de 3 à 6 spectacles) : 13 € la place<br>
                        Envie (de 7 à 11 spectacles) : 11 € la place<br>
                        Passion (de 12 et plus) : 10 € la place<br>
                        - Jeune<br>
                        Découverte (de 3 à 6 spectacles) : 6,50 € la place<br>
                        Envie (de 7 à 11 spectacles) : 5,50 € la place<br>
                        Passion (de 12 et plus) : 5 € la place<br>
                        En cours de saison, vous pouvez ajouter des spectacles au tarif de l'abonnement choisi.<br>
                        Avec votre abonnement, vous bénéficiez d'une place "Avantage Ami" : faites plaisir à l'un de vos proches en lui faisant bénéficier du tarif adhérent pour qu'il
                        vous accompagne sur l'un de vos spectacles, une fois dans la saison.<br>
                        Séance scolaire : 3 € la place – Gratuité pour les accompagnateurs dans la limite de 2 par classe (payé de façon groupé par l’école), 5 € par personne
                        supplémentaire</p><br>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
