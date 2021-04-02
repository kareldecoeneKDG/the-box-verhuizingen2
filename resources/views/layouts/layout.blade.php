<!doctype html>

@foreach ($errors->all() as $error)
    {{ $error }}<br/>
@endforeach

<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The Box Verhuizingen is een verhuisbedrijf dat gespecialiseerd is in het afvoeren van puin. Maak een afspraak via onze website.">
    <!--<link rel="shortcut icon" href="../../public/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon"> -->

    <link rel="icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>The Box Verhuizingen</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <div class="container">
        <nav>
            <div id="logo">
                <a href="home">
                    <!-- <img src="images-icons/images/icon_white.png" class="nav__image" alt="icon TheBox as link to homepage"> -->
                    <img src="{{url('../../public/images/icon_white.png')}}" class="nav__image" alt="icon TheBox as link to homepage">
                </a>
            </div>
        
            <ul class="nav-links">
                <a href="home" class="{{ Request::path() === 'home' ? 'active' : '' }}">
                    <li class="nav__list__item">Home</li>
                </a>
                <a href="projects" class="{{ Request::path() === 'projects' ? 'active' : '' }}">
                    <li class="nav__list__item" class="{{ Request::is('projects') ? 'active' : '' }}">Projecten</li>
                </a>
                <a href="contact" id="buttonNav">
                    Contact
                </a>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

        @yield('content')

        <footer>
            <div class="pageUp" id="arrow">
                <a href="#" class="pageUpIcon"><i id="arrowUp" class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></a>
            </div>
                        
            <div id="footerLinks" class="footerLinks">
                <div id="footerlink1">
                    <h3 id="contactTitle">Contact</h3>
                    <p>
                        <a href="tel:0468248896">0468 24 88 96</a><br>
                        <a href="mailto:thebox.info2020@gmail.com">thebox.info2020@gmail.com</a><br>
                        BE0763 979 423
                    </p>
                </div>

                <div id="footerlink2">
                    <h3>Social media</h3>
                    <p>
                        <a href="https://www.facebook.com/theboxverhuizingen"><i class="fa fa-facebook-official social" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/the_box_verhuizingen/"><i id="insta" class="fa fa-instagram social" aria-hidden="true"></i></a>
                    </p>
                </div>

                <div id="footerlink3">
                    <h3>Sitemap</h3>
                    <p id="p3">
                        <a href="home">Home</a><br>
                        <a href="projects">Projecten</a><br>
                        <a href="contact">Contact</a><br><br>

                        <!-- Powered by <a href="https://www.linkedin.com/in/karel-decoene-395478187/" id="linkedIn">Karel Decoene</a> -->
                    </p>
                </div>
            </div>

            <div id="imageDivFooter">
                <img src="{{url('../../public/images/full_white_1000.png')}}" class="footer__image" alt="white image of logo The Box Verhuizingen">
            </div>
        </footer>
    </div>

    <script src="js/app.js"></script>
</body>
</html>