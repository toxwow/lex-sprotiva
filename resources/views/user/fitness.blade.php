<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lex Sportiva - Kancelaria Prawa Sportu</title>
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    
    <meta name="description" 
    content="Kancelaria Prawa Sportu - Środiwsko sportowe, jego potrzeby i problmy znamy od środka, zarówno z perspektywy zawodników jak i organizatorów"></head>
</head>
<body>
    <nav class="nav">
        <div class="container nav__container">
            <div class="nav__brand">
                <img src="{{ asset ('images/logo.svg')}}" alt="Logo Lex Sportiva">
            </div>
            <ul class="nav__menu">
                <li class="nav__item"> <a href="{{route('home')}}"> STRONA GŁÓWNA </a></li>
                <li class="nav__item  nav__item--is-active"> <a > USŁUGI </a></li>
                <li class="nav__item"> <a href="{{route('home')}}/#o-nas"> O NAS </a></li>
                <li class="nav__item"> <a href="{{route('home')}}/#kontakt"> KONTAKT </a></li>
            </ul>
            <div class="nav__cta">
                <a href="" class="btn btn--link"> <img src="{{ asset ('images/phone.svg')}}" alt="Telefon"> +48 660 787 207</a>
            </div>
            <div class="nav__hamburger">
                
            </div>
        </div>
    </nav>
    <div class="hero hero--single">
        <div class="swiper-container swiper-container-hero-single">
            <div class="swiper-wrapper">
              <!-- Slides -->
                <div class="swiper-slide hero__slide" style="background-image: url({{asset ('images/naglowek1.jpg')}})">
                    <div class="container">
                        <div class="hero__content hero__content--single">
                            <h1>Usługi</h1>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, id.</h4>
                        </div>
                    </div>
                </div>
            </div>
          
          </div>
    </div>
    <div class="service-s">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 order-2 order-md-1 my-4">
                    <div class="service-s__left">
                        <h4>Nasze usługi</h4>
                        <ul>
                            <li><a href="{{route('sportowcy')}}">Sportowcy</a></li>
                            <li><a href="{{route('trenerzy')}}">Trenerzy i Managerowie</a></li>
                            <li><a href="{{route('organizatorzy')}}">Organizatorzy</a></li>
                            <li><a href="{{route('zwiazki')}}">Związki i Kluby </a></li>
                            <li><a href="{{route('sponsorzy')}}">Sponsorzy</a></li>
                            <li><a href="{{route('fitness')}}"  class="active">Fitness</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-9 order-1 order-md-2 my-4">
                    <div class="service-s__right">
                        <h1>Fitness</h1>
                        <p>Branża Fitness jest jedną z najbardziej rozwijających się branż związanych ze sportem
                            zarówno w Polsce jak i na świecie. Jest to wynikiem nie tylko mody na aktywność, ale i coraz
                            większej świadomości społeczeństwa na temat korzyści zdrowotnych płynących z uprawiania
                            sportu.<br>
                            Zarówno sport jak i zdrowie są dla nas ważne. Dlatego oferujemy kompleksową
                            obsługę prawną podmiotom z branży fitness.</p>
                        <p class="strong">Wybrane usługi dla Branży fitness:</p>
                        <ol>
                            <li>Tworzenie podmiotów branży fitness</li>
                            <li>Doradztwo przy negocjowaniu i zawieraniu umów</li>
                            <li>Sporządzanie regulaminów, statutów</li>
                            <li>Ochrona danych osobowych klubowiczów</li>
                            <li>Umowy klubowe oraz lojalnościowe</li>
                            <li>Prawo pracy i HR</li>
                            <li>Ochrona własności intelektualnej</li>
                            <li>Pomoc prawna w bieżącej działalności</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="footer__brand">
                        <img src="{{asset('images/logo.svg')}}" alt="Logo Lex Sportiva">
                    </div>
                    <div class="footer__text">W sporcie wyczynowym liczy się wytrwałość i konsekwencja. Wiemy to, bo świat sportu znamy zarówno z perspektywy zawodnika jak i organizatora imprez sportowych. Sport jest naszą pasją, a prawo naszą profesją. Dlatego zaufało nam wielu zawodowych sportowców i organizatorów największych imprez sportowych. Zapewniamy specjalistyczne wsparcie prawne dla uczestników rynku sportowego, tak zawodowego jak i amatorskiego.</div>
                    <div class="footer__social">
                        <a href=""><img src="{{asset('images/facebook.svg')}}" alt=""></a>
                        <a href=""><img src="{{asset('images/linkedin.svg')}}" alt=""></a>
                        <a href=""><img src="{{asset('images/youtube.svg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="footer__title">Skontaktuj się z nami</h3>
                    <p class="footer__description">Lorem ipsum dolor sit amet.</p>
                    <div class="footer__item"> <img src="{{asset('images/phone.svg')}}" alt=""> tel: + 48 660 787 207</div>
                    <div class="footer__item"> <img src="{{asset('images/email.svg')}}" alt=""> kontakt@lexsportiva.pl</div>
                    <div class="footer__item"> <img src="{{asset('images/pin.svg')}}" alt=""> ul. Królowej Jadwigi 207, Kraków</div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <div class="copyright__wrapper">
                <div class="copyright__item">2021 K.Kulig & Współpracownicy. Kancelria Prawnicza</div>
                <div class="copyright__item"><a href="">Polityka prywatności</a></div>    
            </div>
        </div>
    </div>
</body>
</html>