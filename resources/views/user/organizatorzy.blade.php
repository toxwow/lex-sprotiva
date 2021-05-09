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
                            <li><a href="{{route('organizatorzy')}}"  class="active">Organizatorzy</a></li>
                            <li><a href="{{route('zwiazki')}}">Związki i Kluby </a></li>
                            <li><a href="{{route('sponsorzy')}}">Sponsorzy</a></li>
                            <li><a href="{{route('fitness')}}">Fitness</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-9 order-1 order-md-2 my-4">
                    <div class="service-s__right">
                        <h1>Organizatorzy</h1>
                        <p>Za każdą imprezą sportową stoi sztab ludzi odpowiedzialnych za dopięcie najdrobniejszego
                            szczegółu. Wśród tych szczegółów bardzo ważnym jest dopilnowanie wszelkich wymogów
                            prawnych i formalnych, tak dotyczących organizacji imprez masowych, jak i regulacji
                            prawnych dotyczących poszczególnych dyscyplin sportowych. Obsługa prawna imprez
                            sportowych i organizatorów ma na celu zapewnienie takich warunków rywalizacji, by były one
                            fair play oraz gwarantowały bezpieczeństwo dla zawodników i kibiców</p>
                        <p class="strong">Wybrane usługi dla Organizatorów:</p>
                        <ol>
                            <li> Doradztwo prawne przy organizacji imprez sportowych</li>
                            <li> Bezpieczeństwo imprez sportowych</li>
                            <li> Umowy na organizację zawodów i eventów</li>
                            <li> Tworzenie regulaminów i dokumentacji zawodów</li>
                            <li> Prawne aspekty ryzyka związanego z organizacją zawodów i eventów</li>
                            <li> Ochrona danych osobowych uczestników</li>
                            <li> Korzystanie z wizerunku uczestników</li>
                            <li> Reprezentacja w zakresie roszczeń uczestników</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer" id="kontakt">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="footer__brand">
                        <img src="{{asset('images/logo.svg')}}" alt="Logo Lex Sportiva">
                    </div>
                    <div class="footer__text">Lex Sportiva powstała jako połączenie sportowych pasji
                        oraz prawniczej profesji. Wartości, jakimi się kierujemy, to
                        zapewnienie profesjonalnego wsparcia prawnego
                        uczestnikom rynku sportowego. Żebyś mógł poczuć
                        się bezpiecznie i skupić się na tym, co dla Ciebie
                        najważniejsze.</div>
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
                    <div class="footer__item"> <img src="{{asset('images/pin.svg')}}" alt=""> Kraków, Królowej Jadwigi 189B</div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <div class="copyright__wrapper">
                <div class="copyright__item">2021 Lex Sportiva | Kancelaria Prawa Sportowego</div>
                <div class="copyright__item"><a href="">Polityka prywatności</a></div>    
            </div>
        </div>
    </div>
</body>
</html>