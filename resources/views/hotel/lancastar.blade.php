<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lancastar hotel</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="image/css/owl.carousel.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="cssIba/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="cssIba/style.css" />
    <link rel="stylesheet" href="cssIba/reservation.css" />

    <style>
        .centrer-icone{
            text-align: center;
            display: flex;
            background: #fff;
        }
        .centrer-prestation{
            text-align: center;
            background: #fff;
        }
        figure{
            margin: 0 auto;
            text-align: center;
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
        iframe{
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 50px;
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
                <img src="{{asset('lancastar/lan1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Lancastar Hôtel</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Pour vos meilleurs séjours</p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('lancastar/lan3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Lancastar Hôtel</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Pour vos meilleurs séjours</p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('lancastar/lan4.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Lancastar Hôtel</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Pour vos meilleurs séjours</p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('lancastar/lan6.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Lancastar Hôtel</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Pour vos meilleurs séjours</p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('lancastar/lan8.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Lancastar Hôtel</h5>
                    <p class="animated fadeInUp d-done d-md-block text-warning">Pour vos meilleurs séjours</p>
                    <p class="animated fadeInUp" style="animation-delay: 2s">

                    </p>
                </div>
            </div>
        </div>
    </div>

    @if (session('alert'))
        <script>
            alert("{{ session('alert.title') }}: {{ session('alet.text') }}");
        </script>
    @endif

    <div class="container" style="text-align: center;">
        <div>
            <h1 class="mt-5">Lancastar Hôtel</h1>
            <i class="fas fa-star" style="color: blue"></i>
            <i class="fas fa-star" style="color: blue"></i>
            <i class="fas fa-star" style="color: blue"></i>
            <i class="fas fa-star" style="color: blue"></i>
            <i class="far fa-star" style="color: blue"></i>
            <p class="text-primary"><i class="far fa-compass"></i>Ouagadougou, Burkina Faso</p>
        </div>
    </div>

    <section class="packages" id="packages">
        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <!-- Modal -->
        <div class="reservation-form" id="reservationForm">
            
            <form action="{{ route('reservation') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="Nom" style="font-size: 20px; color: black;">Nom du client</label>
                <input class="form-control" type="text"  name="nom" id="nom" style="border-radius: 10px;">

                <label for="Prenom" style="font-size: 20px; color: black;">Prenom du client</label>
                <input class="form-control" type="text"  name="prenom" id="prenom" style="border-radius: 10px;">

                <label for="Date" style="font-size: 20px; color: black;">Date d'arrivé</label>
                <input class="form-control" type="date"  name="date" id="date" style="border-radius: 10px;">

                <label for="Date" style="font-size: 20px; color: black;">Date de départ</label>
                <input class="form-control" type="date" name="dates" id="dates">
                <br>
                <label for="" style="font-size: 20px; color: black;">ville Associée</label>
                <br>
                <select name="ville_id" id="ville_id">
                    <option value="selected">Choisissez la ville ici !</option>
                    @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}">
                            {{ $ville->nom }}
                        </option>
                    @endforeach
                </select>
                <br>
                <br>
                <label for="" style="font-size: 20px; color: black;">Hôtel Associée</label>
                <br>
                <select name="hotele_id" id="hotele_id">
                    <option value="selected">Choisissez l'hôtel ici !</option>
                    @foreach ($hoteles as $hotele)
                        <option value="{{ $hotele->id }}">
                            {{ $hotele->nom }}
                        </option>
                    @endforeach
                </select>
                <br>
                <br>
                <label for="" style="font-size: 20px; color: black;">Chambre</label>
                <br>
                <select name="chambre_id" id="chambre_id">
                    <option value="selected">Choisissez votre chambre :</option>
                    @foreach ($chambres as $chambre)
                        @if($chambre->ville_id == '1')
                            <option value="{{ $chambre->id }}">
                                {{ $chambre->type }}
                            </option>
                        @endif
                    @endforeach
                </select>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Réserver</button>
            </form>
        </div>

        <div class="container">
            <div class="box-container m-3">
                @foreach ($chambres as $chambre)
                    @if($chambre['hotele_id'] == "3")
                        <div class="box">
                            <img src="{{ asset('storage/images/' . $chambre->image) }}" alt="...">
                            <div class="content">
                                <h3><i class="fas fa-map-marker-alt" style="color: blue;"></i>{{ $chambre->type }}</h3>
                                <p>{{ $chambre->description }}</p>
                                <div class="stars">
                                    <i class="fas fa-star" style="color: blue;"></i>
                                    <i class="fas fa-star" style="color: blue;"></i>
                                    <i class="fas fa-star" style="color: blue;"></i>
                                    <i class="fas fa-star" style="color: blue;"></i>
                                    <i class="far fa-star" style="color: blue;"></i>
                                </div>
                                <div class="price"> {{ $chambre->prix }}</div>
                                <a class="btn btn-primary reservation-button">Réserver</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="container">
            <div class="box-container">
                <div class="box">
                    <i class="service fas fa-hotel"></i>
                    <h3>meilleure hôtel</h3>
                    <p>meilleur hôtel pour vous</p>
                </div>
                <div class="box">
                    <i class="service fas fa-utensils"></i>
                    <h3>restauration</h3>
                    <p>restauration gratuite pour tou les clients ( pétit-déjeuner, déjeuner et dîner )</p>
                </div>
                <div class="box">
                    <i class="service fas fa-concierge-bell"></i>
                    <h3>service traiteur</h3>
                    <p>bénéficiez d'un service traiteur pour tout vos bésoins</p>
                </div>
                <div class="box">
                    <i class="service fas fa-swimmer"></i>
                    <h3>piscine</h3>
                    <p>piscine disponible et gratuite pour vous détendre</p>
                </div>
                <div class="box">
                    <i class="service fas fa-globe-asia"></i>
                    <h3>belle vue</h3>
                    <p>bénéficiez égalemennt d'une belle vue de la ville</p>
                </div>
                <div class="box">
                    <i class="service fas fa-plane"></i>
                    <h3>voyage</h3>
                    <p>merci de voyager au burkina faso</p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="container">
            <div class="box-container">
                <div class="box">
                    <img src="{{asset('lancastar/lan1.jpg')}}" alt="...">
                    <div class="content">
                        <h3>vip famille</h3>
                        <p>Trouver ici tout ce qui est succeptible d'être dans une chambre</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('lancastar/lan2.jpg')}}" alt="...">
                    <div class="content">
                        <h3>chambre spacieuse</h3>
                        <p>la solution pour un meiileur sommeil</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('lancastar/lan3.jpg')}}" alt="...">
                    <div class="content">
                        <h3>chambre vip</h3>
                        <p>chambre équipée d'un mini frigo</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('lancastar/lan4.jpg')}}" alt="...">
                    <div class="content">
                        <h3>chambre climatisée</h3>
                        <p>chambre climatisée pour vous</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('lancastar/lan5.jpg')}}" alt="...">
                    <div class="content">
                        <h3>famille</h3>
                        <p>meilleur pour un séjour familiale</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('lancastar/lan6.jpg')}}" alt="...">
                    <div class="content">
                        <h3>chambre + salon</h3>
                        <p>Trouver ici tout ce qui est succeptible d'être dans une chambre</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('lancastar/lan7.jpg')}}" alt="...">
                    <div class="content">
                        <h3>burreau pour affaire</h3>
                        <p>pour vos affaires chap chap</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('lancastar/lan8.jpg')}}" alt="...">
                    <div class="content">
                        <h3>bar</h3>
                        <p>un bar pour vos rdv amicales et amoureux</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('lancastar/lan9.jpg')}}" alt="...">
                    <div class="content">
                        <h3>chambre + burreau</h3>
                        <p>chambre bien équipée muni d'un burreau</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	
	@include('headFoot.foot')

    
    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
    <script src="jsIba/swiper-bundle.min.js"></script>
    <script src="jsIba/script.js"></script>
    <script src="jsIba/reservation.js"></script>
</body>
</html>