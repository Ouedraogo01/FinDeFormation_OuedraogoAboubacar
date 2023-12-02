<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ouagadougou</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="image/css/owl.carousel.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="cssIba/style.css" />

    <style>
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
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Bienvenue à Ouagadougou</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Touvez ici l'hôtel de vos rêves.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/hotel3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Bienvenue à Ouagadougou</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Touvez ici l'hôtel de vos rêves.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">
                        
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/im8.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Bienvenue à Ouagadougou</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Touvez ici l'hôtel de vos rêves.
                    </p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">
                        
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/im4.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Bienvenue à Ouagadougou</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Touvez ici l'hôtel de vos rêves.
                    </p>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/im6.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Bienvenue à Ouagadougou</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Touvez ici l'hôtel de vos rêves.
                    </p>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/cascade5.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Bienvenue à Ouagadougou</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Touvez ici l'hôtel de vos rêves.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>

    <section id="explore">
        <div class="container text-center mt-2 p-3">
            <h1 class="heading">
                <span>h</span>
                <span>ô</span>
                <span>t</span>
                <span>e</span>
                <span>l</span>
                <span>s</span>
            </h1>
            <div class="row m-2">
                @foreach ($hoteles as $hotele)
                    @if($hotele['ville_id'] == "2")
                        <div class="col-md-4 p-3">
                            <div class="card">
                                <img src="{{ asset('storage/images/' . $hotele->photo) }}" class="d-block w-100" style="filter: brightness(1); height: 250px;" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title text-primary" style="font-size: 20px;">{{ $hotele->nom }}</h2>
                                    <p class="card-text" style="font-size: 15px;">
                                        <strong class="text-success" style="font-size: 14px;">{{ $hotele->small }}</strong>
                                        {{ $hotele->localisation }}
                                    </p>
                                    <a href="{{ $hotele->bouton }}" class="btn btn-lg btn-outline-primary">En Savoir Plus</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center mt-5">
            <h1>DECOUVREZ PLUS AVEC DE MEILLEURES IMAGES</h1>
            <h5 class="text-primary">#OUAGAHOTEL</h5>
            <div class="row mt-4">
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/hotel1.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/hotel2.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/hotel3.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/hotel4.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/hotel5.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/iba1.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/iba3.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/iba4.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/iba5.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/im1.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/im2.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/im3.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/im4.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/im5.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/im6.jpg')}}" alt="" class="img-fluid" style="height: 30vh; width: 300px;">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{asset('image/im7.jpg')}}" alt="" style="height: 30vh; width: 300px;" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
	
	@include('headFoot.foot')

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="image/js/owl.carousel.min.js"></script>
    <script src="OwlCarousel2-2.3.4/src/js/owl.animate.js"></script>
</body>
</html>