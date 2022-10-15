<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог о парфюмерии</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand d-inline-flex align-items-center" href="{{route('main.index')}}">
                <img class="mr-2" width="50" src="{{asset('assets/images/aromatic.png')}}"
                     alt="Edica">
                Блог о женской парфюмерии
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('main.index')}}">Статьи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.index')}}">Категории</a>
                    </li>
                    <li class="nav-item d-flex">
                        @auth()
                            <a class="nav-link" href="{{route('personal.main.index')}}">Личный кабинет</a>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <input class=" nav-link border-0 bg-transparent" type="submit" value="Выйти">
                            </form>
                        @endauth
                        @guest()
                            <a class="nav-link" href="{{route('personal.main.index')}}">Войти</a>
                        @endguest
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section>@yield('content')</section>


{{--<section class="edica-footer-banner-section">--}}
{{--    <div class="container">--}}
{{--        <div class="footer-banner" data-aos="fade-up">--}}
{{--            <h1 class="banner-title">Download it now.</h1>--}}
{{--            <div class="banner-btns-wrapper">--}}
{{--                <button class="btn btn-success"><img src="assets/images/apple@1x.svg" alt="ios" class="mr-2"> App Store--}}
{{--                </button>--}}
{{--                <button class="btn btn-success"><img src="assets/images/android@1x.svg" alt="android" class="mr-2">--}}
{{--                    Google Play--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or--}}
{{--                service.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<footer class="edica-footer " data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="index.html" class="footer-brand-wrapper d-inline-flex">
                    <img width="50" src="{{asset('assets/images/aromatic.png')}}" alt="footer-logo">
                </a>
                <p class="contact-details">parfum@mail.com</p>
                <p class="contact-details">+23 3000 000 00</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">О блоге</a>
                    <a href="{{route('main.index')}}" class="nav-link">Статьи</a>
                    <a href="{{route('category.index')}}" class="nav-link">Категории</a>
                    <a href="#!" class="nav-link">Обратная связь</a>
                </nav>
            </div>

            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img width="20" src="{{asset('assets/images/russia.png')}}" alt="edica logo">> Russia <i
                            class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> USA


                        </button>
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-au flag-icon-squared"></span> Russia
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
{{--            <nav class="nav footer-bottom-nav">--}}
{{--                <a href="#!">Privacy & Policy</a>--}}
{{--                <a href="#!">Terms</a>--}}
{{--                <a href="#!">Site Map</a>--}}
{{--            </nav>--}}
            <p class="mb-0">© Блог  <?php echo date('Y'); ?> . Все права защищены.</p>
        </div>
    </div>
</footer>
<script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>

</body>

</html>
