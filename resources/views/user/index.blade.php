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
                <li class="nav__item nav__item--is-active"> <a href="{{route('home')}}"> STRONA GŁÓWNA </a></li>
                <li class="nav__item"> <a href="/#uslugi"> USŁUGI </a></li>
                <li class="nav__item"> <a href="/#o-nas"> O NAS </a></li>
                <li class="nav__item"> <a href="/#kontakt"> KONTAKT </a></li>
            </ul>
            <div class="nav__cta">
                <a href="" class="btn btn--link"> <img src="{{ asset ('images/phone.svg')}}" alt="Telefon"> +48 660 787 207</a>
            </div>
            <div class="nav__hamburger">
                
            </div>
        </div>
    </nav>
    <div class="hero">
        <div class="swiper-container swiper-container-hero">
            <div class="swiper-wrapper">
              <!-- Slides -->
                <div class="swiper-slide hero__slide" style="background-image: url({{asset ('images/naglowek1.jpg')}})">
                    <div class="container">
                        <div class="hero__content">
                            <h2>Kancelaria Prawa Sportowego</h2>
                            <h4>Środowisko sportowe, jego potrzeby i problemy znamy od środka, zarówno z perspektywy zawodnika jak i organizatorów.</h4>
                            <a href="#uslugi" class="btn btn-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero__slide" style="background-image: url({{asset ('images/naglowek2.jpg')}})">
                    <div class="container">
                        <div class="hero__content">
                            <h2>Kancelaria Prawa Sportowego</h2>
                            <h4>Sport jest naszą pasją, a prawo naszą profesją. Dlatego zaufało nam wielu zawodowych sportowców i organizatorów największych imprez sportowych.</h4>
                            <a href="#faq" class="btn btn-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button swiper-button-prev"><img src="{{asset('images/up-arrow.svg')}}" alt=""></div>
            <div class="swiper-button swiper-button-next"><img src="{{asset('images/up-arrow.svg')}}" alt=""></div>
          
          </div>
    </div>
    <div class="service" id="uslugi">
        <div class="container">
            <div class="section__name">
                <h2 class="section__title">Usługi prawne dla rynku sportowego</h2>
                <p class="section__desc">Reprezentujemy klientów w wielu obszarach branży
                    sportowej, w tym doradzamy zawodowym i amatorskim
                    sportowcom, managerom i agencjom sportowym,
                    trenerom, kierownictwu drużyn, agencjom
                    marketingowym i organom zarządzającym sportem.</p>
            </div>
            
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service__item" style="background-image: url({{asset('images/sportowcy1.jpg')}})">
                        <div class="service__content">
                            <a href="{{route('sportowcy')}}">
                                <h5>Sportowcy</h5>
                                <div>
                                    <p>Wiemy, jak ważne dla sportowców jest poczucie komfortu i bezpieczeństwa, dzięki czemu zawodnicy mogą w pełni skupić się na treningach i przygotowaniach do najważniejszych  imprez w ich życiu. Zapewniamy kompleksową opiekę prawną zawodnikom na każdym etapie kariery.</p>
                                    <div class="link-arrow">dowiedz się więcej</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service__item" style="background-image: url({{asset('images/trenerzy.jpg')}})">
                        <div class="service__content">
                            <a href="{{route('trenerzy')}}">
                                <h5>Trenerzy | Managerowie</h5>
                                <div>
                                    <p>Praca ze sportowcami wymaga wielu lat wyrzeczeń, a często autorskich i pionierskich planów treningowych. Nasze usługi adresowane do trenerów i managerów mają na celu ochronę ich interesów prawnych tak w kontakcie z klubami i związkami sportowymi.</p>
                                    <div class="link-arrow">dowiedz się więcej</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service__item" style="background-image: url({{asset('images/organizatorzy.jpg')}})">
                        <div class="service__content">
                            <a href="{{route('organizatorzy')}}">
                                <h5>Organizatorzy</h5>
                                <div>
                                    <p>Za każdą imprezą sportową stoi sztab ludzi odpowiedzialnych za dopięcie najdrobniejszego szczegółu. Wśród tych szczegółów bardzo ważnym jest dopilnowanie wszelkich wymogów prawnych i formalnych, tak dotyczących organizacji imprez masowych. </p>
                                    <div class="link-arrow">dowiedz się więcej</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service__item" style="background-image: url({{asset('images/sponsorzy.jpg')}})">
                        <div class="service__content">
                            <a href="{{route('sponsorzy')}}">
                                <h5>Sponsorzy</h5>
                                <div>
                                    <p> Za sportem profesjonalnym stoi potężny rynek reklamowy i sponsorski. Relacje sportowe przeplatają się z biznesowymi. Nasze usługi prawne adresujemy do podmiotów i osób, które decydują się na finansowe wsparcie czołowych zawodników i klubów.</p>
                                    <div class="link-arrow">dowiedz się więcej</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service__item" style="background-image: url({{asset('images/kluby.jpg')}})">
                        <div class="service__content">
                            <a href="{{route('zwiazki')}}">
                                <h5>Związki i kluby</h5>
                                <div>
                                    <p>Sport wyczynowy nie istniałby, gdyby nie organizacje rynku sportowego prowadzące zawodników, regulujące zasady współzawodnictwa i dbające o bezpieczeństwo w sporcie. Wspieramy związki sportowe, kluby i inne podmioty rynku sportowego w ich bieżącej działalności.</p>
                                    <div class="link-arrow">dowiedz się więcej</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service__item" style="background-image: url({{asset('images/fitness.jpg')}})">
                        <div class="service__content">
                            <a href="{{route('fitness')}}">
                                <h5>Fitness</h5>
                                <div>
                                    <p>Branża Fitness jest jedną z najbardziej rozwijających się branż sportowych. Jest to wynikiem nie tylko mody na aktywność, ale i coraz większej świadomości społeczeństwa na temat korzyści zdrowotnych płynących z uprawiania sportu.</p>
                                    <div class="link-arrow">dowiedz się więcej</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq" id="faq">
        <div class="container">
            <div class="section__name">
                <h2 class="section__title">Potrzebujesz pomocy prawnej?</h2>
                <p class="section__desc">Mamy doświadczenie w złożonym charakterze relacji
                    między sportem, trenowaniem, rozrywką, zatrudnieniem,
                    reklamą i doradztwem dla klientów.</p>
            </div>
            <div class="faq__item">
                <div class="faq__title">Rozwiązujemy problemy</div>
                <div class="faq__description">Reprezentujemy klientów we wszelkich kwestiach
                    spornych wynikłych na tle prawa sportowego lub
                    działalności uczestników rynku sportowego. Wspieramy w
                    
                    negocjacjach i doradzamy przy zawieraniu umów</div>
            </div>
            <div class="faq__item">
                <div class="faq__title">Dbamy o Twoje bezpieczeństwo i przyszłość</div>
                <div class="faq__description">Dbamy o przyszłość naszych klientów. Doradzamy w jaki
                    sposób zabezpieczyć interesy majątkowe. Dążymy do
                    tego, aby sport był bezpieczny i fair play</div>
            </div>
            <div class="faq__item">
                <div class="faq__title">Pomagamy w Twoim rozwoju</div>
                <div class="faq__description">Zapewniamy kompleksową opiekę prawną uczestnikom
                    rynku sportowego – od zawodników, agentów,
                    managerów, trenerów, organów zarządzających sportem
                    aż po właścicieli klubów i ośrodków sportowych</div>
            </div>
        </div>
    </div>
    <div class="about" id="o-nas">
        <div class="container">
            <div class="about__wrapper">

            
                <div class="row">
                    <div class="col-12 col-lg-6 about__text">
                        <h3 class="about__title"><img src="{{asset('images/logo-emblemat.svg')}}" alt=""> Butikowa Kancelaria Prawa Sportowego</h3>
                        <p class="about__description">Radca prawny i doktor nauk prawnych.
                            Ze światem sportu związany ponad 20 lat - jako zawodnik
                            (biegacz narciarski, maratończyk, triathlonista) a także
                            osoba uczestnicząca w organizacji imprez sportowych
                            (m.in. Mistrzostw Świata w Biegach Górskich, Festiwalu
                            Biegowego Forum Ekonomicznego). </p>
                        <p class="about__description">Sumienność i
                            wytrwałość wyniesioną z wytrzymałościowych dyscyplin
                            sportowych wykorzystuje w codziennej pracy prawnika.
                            Zachowuje prostotę w komunikacji, nie kryjąc się za
                            niezrozumiałym żargonem prawniczym.</p>
                    </div>
                    <div class="col-12 col-lg-6 d-none d-lg-block">
                        <div class="wrapper">
                            <div class="about__image"><img src="{{asset('images/kk.svg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sponsors">
        <div class="container" style="position: relative;">
            <div class="swiper-container swiper-container-sponsor">
                <div class="swiper-wrapper">
                  <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{asset('images/ps_.png')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('images/sedlak.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('images/ism.png')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('images/blog_s.png')}}" alt="">

                    </div>
                </div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button swiper-button-prev"><img src="{{asset('images/up-arrow.svg')}}" alt=""></div>
                <div class="swiper-button swiper-button-next"><img src="{{asset('images/up-arrow.svg')}}" alt=""></div>
              
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