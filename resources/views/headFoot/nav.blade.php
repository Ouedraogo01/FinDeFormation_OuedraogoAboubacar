<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/solid.min.css">
    <title>Nav bar</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            list-style-type: none;
            text-decoration: none;
            box-sizing: border-box;
        }

        nav{
            background: #10182F;
            height: 80px;
            width: 100%;
        }

        label.logo{
            color: white;
            font-size: 25px;
            line-height: 80px;
            padding: 0 100px;
            font-weight: bold;
        }

        nav ul{
            float: right;
            margin-right: 20px;
        }

        nav ul li{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }

        nav ul li a{
            color: white;
            font-size: 17px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
            text-decoration: none;
        }

        a.active, a:hover{
            background: #273a72;
            transition: .5s;
        }

        .checkbtn{
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }

        #check{
            display: none;
        }
        .chercher{
            cursor: pointer;
        }

        .chercher:hover{
            color: blue;
        }

        .search-bar-container{
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            padding: 1.5rem 2rem;
            background: #10182F;
            border-top: .1rem solid rgba(255, 255, 255, .2);
            display: flex;
            align-items: center;
            z-index: 1001;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        }

        .search-bar-container #search-bar{
            width: 100%;
            padding: 1rem;
            text-transform: none;
            color: #10182F;
            font-size: 1.2rem;
            border-radius: .5rem;
        }

        .cherche{
            color: #fff;
            cursor: pointer;
            font-size: 2rem;
            margin-left: 1.5rem;
        }
        .cherche:hover{
            color: blue;
        }

        .search-bar-container.active{
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }

        @media screen and (max-width: 952px){
            label.logo{
                font-size: 30px;
                padding-left: 50px;
            }
            nav ul li a{
                font-size: 16px;
            }
        }

        @media screen and (max-width: 858px){
            .checkbtn{
                display: block;
            }
            ul{
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #2c3e50;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }
            nav ul li{
                display: block;
            }
            nav ul li a{
                font-size: 20px;
            }
            
            #check:checked ~ ul{
                left: 0;
            }
        }

        @media screen and (max-width: 395px){
            label.logo{
                display: none;
            }
        }

    </style>
</head>
<body>
    <nav class="fixed-top">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">RÊVE <span class="text-primary">HÔTEL</span></label>
        <ul>
            <li><a class="active" href="/" style="font-size: 15px;">Home</a></li>
            <li><a href="/service" style="font-size: 15px;">Service</a></li>
            <li><a href="/contact" style="font-size: 15px;">Contact</a></li>
            <li class="icons">
                @include('partials.search')
            </li>
            <!-- Authentication Links -->
            @guest
                <li>
                    <a href="{{ route('login') }}">
                        <i class="fas fa-user"  style="font-size: 20px; color: #fff"></i>
                    </a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item bg-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item bg-primary" href="{{ route('MesReservations') }}">
                            Mes Réservations
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul> 
    </nav>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/recherche.js') }}" defer></script>
    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/fontawesome.min.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/solid.min.js"></script>
</body>
</html>