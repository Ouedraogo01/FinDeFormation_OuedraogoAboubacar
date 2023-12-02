<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Service</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="image/css/owl.carousel.min.css">

    <style>
        .tout{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .deuxieme{
            margin-top: 80px;
        }
        .toutsavoir{
            border-bottom: 1px solid black;
        }
        .conseil{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .carousel-item{
            height: 100vh;
            min-height: 300px;
        }

        .carousel-caption{
            bottom: 220px;
            z-index: 2;
            margin-bottom: 150px;
        }

        .carousel-caption h5{
            font-size: 50px;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-top: 50px;
        }

        .carousel-caption p{
            width: 60%;
            margin: auto;
            font-size: 25px;
            line-height: 2;
        }

        .carousel-caption a{
            text-transform: uppercase;
            text-decoration: none;
            padding: 5px 20px;
            display: inline-block;
            color: #fff;
            margin-top: 15px;
            border-radius: 15px;
            font-size: 20px;
            margin: 20px
        }

        .carousel-caption a:hover{
            opacity: 0.5;
            text-decoration: solid;
        }

        .carousel-inner{
            position: absolute;
        }

        .carousel-inner::before{
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        @media (max-width: 767px){

            .carousel-caption{
                bottom: 165px;
            }

            .carousel-caption h5{
                font-size: 17px;
            }

            .carousel-caption a{
                padding: 10px 15px;
                font-size: 15px;
            }
            .w-100{
                width: 100%;
                height: 100vh;
            }
        }

        @media (max-width: 375px){
            .carousel-caption{
                bottom: 150px;
            }

            .d-md-block{
                display: none;
            }

            .carousel-caption h5{
                font-size: 25px;
            }

            .carousel-caption a{
                padding: 5px 20px;
                font-size: 15px;
            }

            .w-100{
                width: 100%;
                height: 100vh;
            }

            .carousel-caption a:hover{
                opacity: 0.5;
                text-decoration: solid;
            }
        }
    </style>
</head>
<body>
    @include('headFoot.nav')

    <div id="carouselExempleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="{{asset('image/hotel1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Rêve hôtel service</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Découvrez nos services proposés.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/hotel3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Rêve hôtel service</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Découvrez nos services proposés.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/im8.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Rêve hôtel service</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Découvrez nos services proposés.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/im4.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Rêve hôtel service</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Découvrez nos services proposés.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/im6.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Rêve hôtel service</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Découvrez nos services proposés.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/cascade5.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Rêve hôtel service</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Découvrez nos services proposés.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="toutsavoir">
        <div class="tout">
            <div class="premier">
                <h1 class="m-5">Idées pour votre prochain voyage</h1>
                <img src="{{asset('image/cascade5.jpg')}}" class="d-block w-100 m-3" alt="...">
            </div>
            <div class="deuxieme">
                <div class="card mb-3 m-5 mt-5">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/hotel3.jpg')}}" class="d-block w-100" alt="..." style="height: 200px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h5 class="card-title text-black">Lorsque vous serez prêt voyager, nous serons là pour vous</h5>
                                <p class="card-text">Idées de voyage et inspiration</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 m-5 mt-5">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('image/im1.jpg')}}" class="d-block w-100" alt="..." style="height: 200px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center">
                                <h5 class="card-title text-black">Annulation gratuite sur la plupart des hôtels</h5>
                                <p class="card-text">Parce que la flexibilité, c'est important</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>
    <section>
        <div class="conseil">
            <div class="part1">
                <div>
                    <h2 class="text-black m-5">Conseils pour réserver un hôtel</h2>
                    <p class="m-5" style="font-size: 20px;">Réserver le bon hôtel est l'un des principaux facteurs qui vous garantiront
                        de profiter au mieux de vos séjours et vacances.
                        Découvrez comment dénicher la perle et quels critère privilegier.
                    </p>
                </div>
                <div>
                    <h2 class="text-black m-5">Comment réserver un hôtel ?</h2>
                    <p class="m-5" style="font-size: 20px;">Avec Rêve Hôtel, l'ensemble du processus de réservation est un jeu d'enfant.
                        Vous avez le choix parmi un large évantail d'options d'hébergement et de destination,
                        et de nombreux filtres vous aides à trouver ce que vous recherchez.
                    </p>
                </div>
                <div>
                    <h2 class="text-black m-5">Quels sont les principaux critères ?</h2>
                    <p class="m-5" style="font-size: 20px;">Trouver le bon hôtel signifie opter pour un établissement qui répond à vos bésoins.
                        Un séjour à l'hôtel est tributaire d'un certain nombre de facteurs, dont vous devrez tenir
                        compte lors de la réservation.
                        Réflechissez au type de services et d'équipements dont vous souhaitez disposer.
                    </p>
                </div>
            </div>
            <div class="part2">
                <div>
                    <h2 class="text-black m-5">Comment trouver les hôtels les moins chers ?</h2>
                    <p class="m-5" style="font-size: 20px;">Pour trouver les chambrs d'hôtels les moins chères, vous devrez tenir compte de plusieurs
                        facteurs qui influent sur le prix.
                        La période de l'année peut avoir une influence majeure sur les tarifs, la basse saison 
                        tendant a être moins chère dans l'ensemble. En outre, moins les hôtels ont d'étoils, plus 
                        ils seront abordables. Vous trouverez également des alternatives moins chères dans les 
                        quartiers moins populaires.
                    </p>
                </div>
                <div>
                    <h2 class="text-black m-5">Comment trouver les meilleurs offres d'hôtels?</h2>
                    <p class="m-5" style="font-size: 20px;">Pour rechercher les meilleures offres d'hôtel, appliquez des filtres de recherche.
                        Vous pouvez trier les résultats de recherche selon le prix, pour que les options les 
                        moins chères apparaissent automatiquement en premier lieu.
                        Ajustez ensuite vos filtres en fonction de votre budget et indiquez si vous souhaiotez ou non
                        vous limiter aux hébergements entièrement remboursables.
                        Si vous devener membre, vous bénéficierez d'encore plus de réduction sur les hôtels.
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center mb-5">
            <h3 class="text-black">Explorez un monde de voyage avec <strong>Rêve Hôtel</strong></h3>
            <p class="text-primary">#VoyagerAuBurkina</p>
        </div>
    </section>
	
	@include('headFoot.foot')

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>