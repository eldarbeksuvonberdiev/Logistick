<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="  Transport & Logistics HTML Template">
    <meta name="keywords" content="  Transport & Logistics HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Stoshi font -->
    <link rel="stylesheet" href="{{ asset('assets/css/satoshi.css') }}">
    <!-- swiper Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!-- Circle Progress -->
    <link rel="stylesheet" href="{{ asset('assets/css/animated-radial-progress.css') }}">
    <!-- magnific -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <!--==================== Preloader Start ====================-->

    {{-- <div
        class="preloader bg-white tw-h-screen justify-content-center align-items-center tw-z-999 position-fixed top-0 tw-start-0 w-100 h-100">
        <div class="car-road">
            <div class="car">
                <div class="car-top">
                    <div class="window">
                    </div>
                </div>
                <div class="car-base">
                </div>
                <div class="wheel-left wheel">
                    <div class="wheel-spike">
                    </div>
                    <div class="wheel-center">
                    </div>
                </div>
                <div class="wheel-right wheel">
                    <div class="wheel-spike">
                    </div>
                    <div class="wheel-center">
                    </div>
                </div>
                <div class="head-light"></div>
            </div>
            <div class="road">
            </div>
        </div>
    </div> --}}
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap cursor-big">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- Custom Cursor Start -->
    <div class="cursor"></div>
    <span class="dot"></span>
    <!-- Custom Cursor End -->

    <!-- ======================= Offcanvas sidebar popup start ================================= -->
    <div
        class="offcanvas-sidebar tw-p-8 bg-white position-fixed top-0 end-0 tw-max-h-screen tw-z-999 max-w-400-px w-100 tw-translate-x-full overflow-y-auto">
        <button type="button"
            class="cursor-small offcanvas-sidebar__close border border-main-600 tw-w-10 tw-h-10 text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-text-xl hover-bg-main-600 hover-text-white position-absolute tw-mt-8 top-0 tw-end-0 tw-me-8 z-1">
            <i class="ph-bold ph-x"></i>
        </button>

        <div class="d-flex flex-column tw-gap-8 overflow-hidden">
            <div class="animate-item">
                <a href="index.html" class="cursor-big">
                    <img src="assets/images/logo/logo2.png" alt="Logo" class="max-w-200-px">
                </a>
            </div>
            <div>
                <h4 class="cursor-big tw-mb-5 animate-item">About Us </h4>
                <p class="cursor-small text-neutral-950 animate-item">Temperate ocean-bass sea chub unicorn fish
                    treefish eulachon tidewater goby. Flier, bighe carp Devario shortnose sucker platy smalleye</p>
            </div>
            <div>
                <h4 class="cursor-big tw-mb-5 animate-item">Contact Us </h4>
                <div class="d-flex flex-column tw-gap-6">
                    <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                        <span
                            class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                            <i class="ph ph-phone"></i>
                        </span>
                        <a href="tel:+880(123)45688"
                            class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">+880
                            (123) 456 88</a>
                    </div>
                    <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                        <span
                            class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                            <i class="ph ph-map-pin"></i>
                        </span>
                        <a href="mailto:support@gmail.com"
                            class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">support@gmail.com</a>
                    </div>
                    <div class="cursor-small animate-item d-flex align-items-start tw-gap-5">
                        <span
                            class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                            <i class="ph ph-phone"></i>
                        </span>
                        <p class="text-main-two-600 fw-medium tw-text-lg">55 Main Street, 2nd block
                            Malborne, Australia</p>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class="cursor-big tw-mb-5 animate-item">Contact Us </h4>
                <ul class="cursor-small d-flex align-items-center tw-gap-3 animate-item">
                    <li>
                        <a href="https://www.facebook.com"
                            class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                            <i class="ph ph-facebook-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com"
                            class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                            <i class="ph ph-x-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com"
                            class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                            <i class="ph ph-instagram-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com"
                            class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                            <i class="ph ph-youtube-logo"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- ======================= Offcanvas sidebar popup End ================================= -->

    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div
        class="mobile-menu d-lg-none d-block scroll-sm position-fixed bg-white tw-w-300-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">

        <button type="button"
            class="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-main-two-600 bg-neutral-200 hover-bg-main-two-600 hover-text-white">
            <i class="ph ph-x"></i>
        </button>

        <div class="mobile-menu__inner">
            <a href="index.html" class="mobile-menu__logo">
                <img src="assets/images/logo/logo2.png" alt="Logo">
            </a>
            <div class="mobile-menu__menu">
                <!-- Nav menu Start -->
                <ul class="nav-menu cursor-small d-lg-flex align-items-center nav-menu--mobile d-block tw-mt-8">
                    <li class="nav-menu__item has-submenu position-relative activePage">
                        <a href="javascript:void(0)"
                            class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Home</a>
                        <ul
                            class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                            <li class="nav-menu__item activePage">
                                <a href="index.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Home One</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="index-2.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Home Two</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="index-3.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Home Three</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="index-4.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Home Four</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="index-5.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Home Five</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu position-relative">
                        <a href="javascript:void(0)"
                            class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Pages</a>
                        <ul
                            class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="project.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Project</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="project-details.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Project Details</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="team.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Team</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="team-details.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Team Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu position-relative">
                        <a href="javascript:void(0)"
                            class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Services</a>
                        <ul
                            class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="service.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Service </a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="service-details.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">Service
                                    Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="about.html"
                            class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100">About</a>
                    </li>
                    <li class="nav-menu__item has-submenu position-relative">
                        <a href="javascript:void(0)"
                            class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">News</a>
                        <ul
                            class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="blog.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    News</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="blog-details.html"
                                    class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    News Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.html"
                            class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100">Contact</a>
                    </li>
                </ul>
                <!-- Nav menu End  -->

            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ============================ Header Top Start ==================================== -->
    <div class="bg-neutral-50 position-relative z-1 d-sm-block d-none header-top-bg">
        <div class="container tw-container-1554-px">
            <div class="d-flex align-items-center justify-content-between tw-gap-6">

                <div class="d-flex align-items-center tw-gap-6">
                    <div class="cursor-small d-flex align-items-center tw-gap-2 tw-py-205">
                        <span class="text-main-600 d-flex"><i class="ph-bold ph-map-pin"></i></span>
                        <span class="text-black xl-tw-text-sm tw-text-xs fw-medium">55 Main Street, 2nd block,
                            Malborne, Australia</span>
                    </div>
                    <div class="cursor-small d-flex align-items-center tw-gap-2 tw-py-205">
                        <span class="text-main-600 d-flex"><i class="ph-bold ph-phone"></i></span>
                        <a href="mailto:support@example.com"
                            class="text-black xl-tw-text-sm tw-text-xs fw-medium hover--translate-x-05 hover-text-main-600 tw-transition-all">support@example.com</a>
                    </div>
                </div>
                <div class="d-md-flex d-none align-items-center tw-gap-6">
                    <div class="cursor-small d-flex align-items-center tw-gap-2 tw-py-205">
                        <span class="text-main-600 d-flex"><i class="ph-bold ph-envelope"></i></span>
                        <a href="mailto:contact@gmail.com"
                            class="text-black xl-tw-text-sm tw-text-xs fw-medium hover--translate-x-05 hover-text-main-600 tw-transition-all">contact@gmail.com</a>
                    </div>
                    <div
                        class="cursor-small d-lg-flex d-none align-items-center tw-py-205 tw-gap-6 tw-ps-10 clip-path position-relative">
                        <span class="text-white d-flex"><i class="ph-bold ph-map-trifold"></i></span>
                        <span class="text-white xl-tw-text-sm tw-text-xs fw-medium">734 H, Bryan Burlington, NC 27215
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================ Header Top End ==================================== -->





    <!-- ==================== Header Start Here ==================== -->
    @include('components.front.header')
    <!-- ==================== Header End Here ==================== -->


    @yield('content')


    <!-- ==================== Footer Start Here ==================== -->
    @include('components.front.footer')
    <!-- ==================== Footer End Here ==================== -->





    <!-- Jquery js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- phosphor Js -->
    <script src="{{ asset('assets/js/phosphor-icon.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets/js/boostrap.bundle.min.js') }}"></script>
    <!-- swiper slider Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Split Text -->
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <!-- Scroll Trigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- Gsap js -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!-- custom gsap -->
    <script src="{{ asset('assets/js/custom-gsap.js') }}"></script>
    <!-- aos -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- Circle Progress bar -->
    <script src="{{ asset('assets/js/animated-radial-progress.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- marquee -->
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>



</body>

</html>
