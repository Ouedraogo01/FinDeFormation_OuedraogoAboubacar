<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Iba hotel</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="image/css/owl.carousel.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="cssIba/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="cssIba/style.css" />

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

    {{-- @if(request()->input())
        <h5>{{ $resultats->total() }} résultat(s) pour la recherche "{{ $request()->q }}</h5>
    @endif --}}

    <div class="container text-center p-3" style="margin-top: 130px; margin-bottom: 100px;">
        <div class="row m-2">
            @foreach ($hoteles as $hotele)
                @if($hotele['nom'] == request()->q )
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
	
	@include('headFoot.foot')

    
    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
    <script src="jsIba/swiper-bundle.min.js"></script>
    <script src="jsIba/script.js"></script>
</body>
</html>