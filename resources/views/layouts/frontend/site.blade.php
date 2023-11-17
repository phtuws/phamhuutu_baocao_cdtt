<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Google Font: Source Sans Pro -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">


    @yield('header')
</head>


<body>
    <header>

        <div class="header-wrapper   ">
            <div class="header-top row text-center ">
                <x-site-header />
            </div>

            <div class="navbar  " id="navbar">
                <div class="header-main  d-md-block d-none container ">
                    <div class="header-inner  d-flex  justify-content-between align-items-center">
                        <div class="logo mr-5">
                            <img src="{{ asset('images/user/logoyamaha.jpg') }}" alt="logoyamaha.jpg"
                                style="width:250px; height:200px">
                        </div>
                        <div class="search align-self-center mr-3 ">
                            <form class="search-form" action="">
                                <input type="text" name="q" placeholder="">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                        <div class="infor d-md-none d-block  p-2">
                            <a href="">
                                <i class="fa-solid fa-cart-shopping me-1"></i>
                            </a>
                        </div>
                        <div class="infor align-self-center">
                            <ul class="d-flex align-items-center m-0 heart-far">
                                @if (Auth::guard('users')->check())
                                    {{-- <li class="infor-item heart-icon-box heart-far">
                                        <a href="{{ route('account.wishlist') }}">
                                            Xem sau<i class="fa-solid fa-heart fs-2"></i>
                                            <span class="badge fa-bounce" id="badge"></span>
                                        </a>
                                        <ul class="heart-sub">
                                            <li class="text-end text-decoration-underline fw-light">
                                                <a href="{{ route('account.wishlist') }}">Xem</a>
                                            </li>
                                            <li>
                                                <div id="row_wishlist"></div>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="infor-item heart-far" style="margin-left: 30px;">
                                        <a href="{{ route('site.cart') }}">Giỏ hàng<i
                                                class="fa-solid fa-cart-shopping fs-3 me-1"></i></a>
                                    </li>
                                    <li class="infor-item heart-far" style="margin-left: 30px;">
                                        <a href="{{ route('site.myaccount') }}">Tài khoản<i
                                                class="fa-solid fa-user fs-3"></i></a>
                                        @php
                                            $user_ls = Auth::guard('users')->user()->id;
                                        @endphp
                                        <input type="hidden" id="get_user_ls" value="{{ $user_ls }}">
                                    </li>
                                @else
                                    {{-- <li class="infor-item heart-icon-box heart-far">
                                    <a href="{{ route('temp.wishlist') }}">
                                        Xem sau<i class="fa-solid fa-heart fs-2"></i>
                                        <span class="badge fa-bounce" id="badge"></span>
                                    </a>
                                    <ul class="heart-sub">
                                        <li class="text-end text-decoration-underline fw-light">
                                            <a href="{{ route('temp.wishlist') }}">Xem</a>
                                        </li>
                                        <li>
                                            <div id="row_wishlist"></div>
                                        </li>
                                    </ul>
                                </li> --}}
                                    <li class="infor-item heart-far" style="margin-left: 50px;">
                                        <a href="{{ route('site.cart') }}">
                                            <i class="fa-solid fa-cart-shopping fa-xs me-1"></i>
                                        </a>
                                    </li>
                                    <li class="infor-item heart-far" style="margin-left: 50px;">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <i class="fa fa-user fa-xs"></i>
                                        </a>
                                        <input type="hidden" id="get_user_ls" value="_temporary">
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        @includeIf('frontend.modal-login')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  container">
                    <div class="header-inner">
                        <x-main-menu />
                    </div>
                </div>
            </div>
            <div class="menu-wrapper" id="menu-wrapper">
                <div class="header-main  d-md-block d-none">
                    <div class="header-inner d-flex  justify-content-between align-items-center">
                        <div class="logo ">
                            <img src="{{ asset('images/user/logoyamaha.jpg') }}" alt="logoyamaha.jpg"
                                style="width:200px; height:150px">
                        </div>
                        <div class="search align-self-center ">
                            <form class="search-form">
                                <input type="text" placeholder="">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                        <div class="infor d-md-none d-block  p-2">
                            <a href="">
                                <i class="fa-solid fa-cart-shopping me-1"></i>
                            </a>
                        </div>
                        <div class="infor align-self-center">
                            <ul class="m-0 d-flex align-items-center heart-far">
                                @if (Auth::guard('users')->check())
                                    <li class="infor-item like-icon-box heart-far">
                                        <a href="{{ route('account.wishlist') }}">
                                            Xem sau<i class="fa-solid fa-thumbs-up fs-2"></i>
                                            <span class="badge fa-bounce" id="badge"></span>
                                        </a>
                                        <ul class="heart-sub">
                                            <li class="text-end text-decoration-underline fw-light">
                                                <a href="{{ route('account.wishlist') }}"></a>
                                            </li>
                                            <li>
                                                <div id="row_wishlist"></div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="infor-item heart-far">
                                        <a href="{{ route('site.cart') }}"><i
                                                class="fa-solid fa-cart-shopping fs-3 me-1"></i></a>
                                    </li>
                                    <li class="infor-item heart-far">
                                        <a href="{{ route('site.myaccount') }}"><i
                                                class="fa-solid fa-user fs-3"></i></a>
                                        @php
                                            $user_ls = Auth::guard('users')->user()->id;
                                        @endphp
                                        <input type="hidden" id="get_user_ls" value="{{ $user_ls }}">
                                    </li>
                                @else
                                    <li class="infor-item heart-icon-box heart-far" style="margin-left: 100px;">
                                        <a href="{{ route('temp.wishlist') }}"><i
                                                class="fa-solid fa-thumbs-up fa-xs"></i>
                                            <span class="badge fa-bounce" id="badge"></span>
                                        </a>
                                        <ul class="heart-sub">
                                            <li class="text-end text-decoration-underline fw-light">
                                                <a href="{{ route('temp.wishlist') }}">Xem</a>
                                            </li>
                                            <li>
                                                <div id="row_wishlist"></div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="infor-item heart-far" style="margin-left: 100px;">
                                        <a href="{{ route('site.cart') }}"><i
                                                class="fa-solid fa-cart-shopping fa-xs me-1"></i>
                                        </a>
                                    </li>
                                    <<li class="infor-item heart-far" style="margin-left: 100px;">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <i class="fa-solid fa-user fa-xs"></i></a>
                                        <input type="hidden" id="get_user_ls" value="_temporary">
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        @includeIf('frontend.modal-login')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  ">

                    <div class="header-inner">
                        <x-main-menu />
                    </div>
                </div>
            </div>
        </div>
    </header>




    @includeIf('backend.message_alert')
    @yield('content')

    <footer class="footer-section mt-3">
        <x-site-footer />
    </footer>




    <script>
        var navbar = document.getElementById("navbar");
        var menuWrapper = document.getElementById("menu-wrapper");
        var lastScrollTop = 0;
        window.onscroll = function() {
            var currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (currentScrollTop > lastScrollTop) {
                // Cuộn xuống
                if (currentScrollTop >= navbar.offsetTop + navbar.offsetHeight + 100) {
                    menuWrapper.classList.add("sticky");
                }
            } else {
                // Cuộn lên
                menuWrapper.classList.remove("sticky");
            }
            lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"
        integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('alert'))
        <script>
            swal("Thành công!!", "{{ session('alert') }}", "success", {
                timer: 10000
            });
        </script>
    @endif
    @if (session('status'))
        <script>
            swal("{{ session('status') }}", {
                timer: 10000
            });
        </script>
    @endif
    <script src="{{ asset('js/site.js') }}"></script>
    <script type="text/javascript">
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : '?' + name + '=' + decodeURIComponent(results[1].replace(/\+/g, " "));
        }
        $(document).ready(function() {
            var active = getParameterByName('ten') || getParameterByName('gia');

            $('#select-sort option[value="' + active + '"]').attr('selected', 'selected');
        });
        $('.select-sort').change(function(e) {
            e.preventDefault();
            var value = $(this).find(':selected').val();
            // alert(value);
            if (value != 0) {
                var url = value;
                window.location.replace(url);
            } else {
                window.location.replace("#");
            }
        });
    </script>
    @yield('footer')
</body>

</html>
