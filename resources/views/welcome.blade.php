<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')

    <body class="black">
         @section('content')
         <div class="banner">
			<div class="banner-text">
				<h2>
					<strong>CULTURENSTOCK</strong>
				</h2>
                <h4>SALLES DE SPECTACLES</h4>
			</div>
		</div>

        <div class="container">
            <div class="about">
                <p><strong>Bienvenue chez CulturEnStock !</strong><br><br>
						        La salle de spectacles, amphithéâtre CutlurEnStock disposant de 450 places est ravi de vous acceuilir.<br>
						        Nous nous situons dans la commune d'Annecy.<br>
						        Retrouvez nos événements dans l'onglet <br><a href="{{ url('/posts') }}">ÉVÉNEMENTS !</a><br><br>
                </p>
            </div>
        </div>

        <div class="banner3">
			<div class="slider-wrapper2">
				/
				<div class="sliderr2">
					<div class="slider-text21">CULTURENSTOCK</div>
					<div class="slider-text22">SALLE DE SPECTACLES</div>
					<div class="slider-text23">AMPHITHÉÂTRE</div>
				</div>
				/
			</div>
		</div>

        <h3 class="tariftitle"><strong>ABONNEMENTS</strong></h3>
        <div class="container">
            <div class="tarif">
                <p><strong>Pass'Culturel individuelle Adulte</strong><br>
					            12 €<br><br>

                </p>
                <p><strong>Pass' Culturel couple</strong><br><br>
                                (même adresse)<br>
						        20 €<br><br>
                </p>
                <p><strong>Pass' Culturel jeune</strong><br><br>
                                (- 18 ans et étudiant - 26 ans - adhésion offerte à partir du 2e enfant - demandeur d'emploi)<br>
						        5 €<br><br>
                </p>
                <p><strong>Adhésion parrainée</strong><br><br>
                                (réservée aux détenteurs des cartes Cézam et Loisirs et aux personnes dont l'entreprise est adhérente à la salle CulturEnStock, sur
                                présentation d'un justificatif)<br>
						        5 €<br><br>
                </p>
                <a href ="{{ url('/abonnements') }}"><input class="download" type="button" value="S'ABONNER"></a>
            </div>
        </div>

        <footer>
            ©CULTURENSTOCK
        </footer>
         @endsection

         <style type="text/css">
            .banner{
                margin-top: -1.5rem;
                position: relative;
                display: flex;
                width: 100%;
                height: 94vh;
                background: linear-gradient(rgba(0, 0, 0, 0.45),
                    rgba(0, 0, 0, 0.45)),url('https://images8.alphacoders.com/897/thumb-1920-897104.jpg');
                background-attachment: fixed;
                background-size: cover;
            }

            .banner-text{
                display: block;
                text-align: center;
                margin: auto;
                color : white;
            }

            .banner-text>h2{
                font-size: 5vw;
            }

            .banner-text>h4{
                font-size: 1.5vw;
            }

            .container{
                min-height: 0vh;
	            width: 100%;
	            display: flex;
	            align-items: center;
	            justify-content: center;
	            padding: 100px 0;
            }

            .about{
	            display: flex;
	            align-items: center;
	            justify-content: center;

            }

            .about p{
                width: 800px;
	            text-align: center;
                font-size: 1.2vw;
            }

            .about p strong{
                font-size: 2vw;
            }

            .tarif{
	            display: block;
	            align-items: center;
	            justify-content: center;

            }

            .tariftitle{
                font-size:3vw;
                text-align: center;
                margin-top:6vw;
            }

            .tarif p{
                width: 18vw;
	            text-align: center;
	            margin-right : 1.5vw;
                margin-left : 1.5vw;
                font-size: 1vw;
            }

            .download{
                display: block;
                margin : 0 auto;
                background-color: #775966;
                color: white;
                border: 2px solid #555555;
                padding: 16px 32px;
                text-align: center;
                font-size: 16px;
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .download:hover {
                background-color: white;
                color: black;
            }

            .banner3{
	            position: relative;
	            display: flex;
                width: 100%;
                height: 20vh;
                background: linear-gradient(rgba(0, 0, 0, 0.45),
                    rgba(0, 0, 0, 0.45)),url('https://www.sortiraparis.com/images/80/66131/576710-coronavirus-le-masque-desormais-systematique-dans-les-cinemas-et-salles-de-spect.jpg');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                filter: grayscale(40%);
                align-items: center;
                justify-content: center;
            }

            .slider-wrapper2 {
                font-size: 2vw;
                color:#fff;
                font-weight: bold;
                text-transform: uppercase;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .sliderr2{
                height: 60px;
                overflow: hidden;
            }
            .sliderr2 div {
                height: 50px;
                margin-bottom: 50px;
                padding: 2px 15px;
                text-align: center;
                box-sizing: border-box;
            }

            .slider-text21 {
                animation: slidee 5s linear infinite;
            }

            @keyframes slidee {
                0% {margin-top:-300px;}
                5% {margin-top:-200px;}
                33% {margin-top:-200px;}
                38% {margin-top:-100px;}
                66% {margin-top:-100px;}
                71% {margin-top:0px;}
                100% {margin-top:0px;}
            }

            footer{
                margin-top: auto;
                padding : 30px;
                letter-spacing: 2px;
                transition: 0.6s;
                text-align: center;
                box-shadow: 4px 1px 4px 4px lightgrey;
                margin-bottom: -1.5rem;
            }
         </style>
    </body>
</html>
