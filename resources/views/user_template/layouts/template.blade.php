@php
    $categories = App\Models\Category::latest()->get();
    $productos = App\Models\Product::latest()->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mitiendita | Inicio</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('home/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('home/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('home/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('home/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href=href="{{ route('Home') }}><img src="{{ asset('home/img/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('home/img/language.png') }}" alt="">
                <div>Español</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Español</a></li>
                    <li><a href="#">Inglés</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
          
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Ininioz</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="{{ route('newrelease') }}">Novedades</a></li>
                {{-- <li><a href=" {{ route('todaysdeal') }} ">Ofertas</a></li> --}}
                <li><a href="{{ route('customerservice') }}">Servicios</a></li>
                <li><a href="#">Otros</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Detalles</a></li>
                        <li><a href="./shoping-cart.html">Carrito</a></li>
                        <li><a href="./checkout.html">Verificación</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> tiendita@gmail.com</li>
                <li>Descuentos a partir de 100$ </li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> tiendita@gmail.com</li>
                                <li>Descuentos a partir de 100$ </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a> --}}
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('home/img/language.png') }}" alt="">
                                <div>Español</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Español</a></li>
                                    <li><a href="#">Inglés</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i>Login</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{ route('register') }}"><i class="fa fa-user"></i>Registro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('Home') }}"><img src="{{ asset('home/img/logo.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('Home') }}">Inicio</a></li>
                            <li><a href="#">Tienda</a>
                                <ul class="header__menu__dropdown">
                                    @foreach ($categories as $category)
                                        <li><a href="./shop-details.html">{{ $category->category_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('newrelease') }}">Novedades</a></li>
                            {{-- <li><a href=" {{ route('todaysdeal') }} ">Ofertas</a></li> --}}
                            <li><a href="{{ route('customerservice') }}">Servicios</a></li>
                            <li><a href="#">Otros</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Detalles</a></li>
                                    <li><a href="./shoping-cart.html">Carrito</a></li>
                                    <li><a href="./checkout.html">Verificación</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        {{-- <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul> 
                        <div class="header__cart__price">item: <span>$150.00</span></div> --}}
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Categorías</span>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('category', [$category->id, $category->slug]) }}">{{ $category->category_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Todas las categorias
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                {{-- <form action="{{ route('search') }}" method="GET">
                                    <input type="text" name="q" placeholder="Buscar...">
                                    <button type="submit">Buscar</button>
                                </form> --}}
                                {{-- <input name="buscarpor"  type="search" placeholder="Buscar" aria-label="Search">
                                <button type="submit" class="site-btn">BUSCAR</button> --}}
                            </form>

                            <form class="form-inline my-2 my-lg-0 float-righ">
                                <input name="buscarpor" class="" type="search" placeholder="Buscar" aria-label="Search" value="">
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0987654321</h5>
                                <span>Horario de 06:00 a 21:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <div class="container py-5">
        @yield('main-content')
    </div>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{ asset('home/img/logo.png') }}" alt=""></a>
                        </div>
                        <ul>
                            <li>Dirección : Ladron de Guervara y Patria - Quito</li>
                            <li>Teléfono: 0987654321</li>
                            <li>Email: tiendita@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Enlaces de utilidad</h6>
                        <ul>
                            <li><a href="#">Acerca de nosotros</a></li>
                            {{-- <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li> --}}
                            <li><a href="#">Política de Privacidad </a></li>
                            <li><a href="#">Nuestra ubicación</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Quienes somos </a></li>
                            {{-- <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li> --}}
                            <li><a href="#">Contactanos </a></li>
                            {{-- <li><a href="#">Innovation</a></li> --}}
                            <li><a href="#">Testimonios</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Conoce las ultimas novedades</h6>
                        <p>Suscribete y adquiere cupones de descuento</p>
                        <form action="#">
                            <input type="text" placeholder="Ingresa tu email">
                            <button type="submit" class="site-btn">Suscribete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Todos los derechos reservados | Esta plantilla fue creada con
                                <i class="fa fa-heart" aria-hidden="true"></i> por <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('home/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('home/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/main.js') }}"></script>



</body>

</html>
