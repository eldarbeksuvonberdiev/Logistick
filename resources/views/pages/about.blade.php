@extends('layouts.pages.base')

@section('title', 'About')

@section('content')

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-140 tw-pt-206-px mb-0 bg-img"
        data-background-image="assets/images/thumbs/breadcrumb-bg.png">
        <div class="container">
            <div class="text-center">
                <span
                    class="splitTextStyleTwo text-main-600 border-bottom border-main-600 fst-italic fw-bold tw-text-lg cursor-small">About
                    Us</span>
                <h1 class="splitTextStyleOne text-white tw-mt-1 cursor-big"> About Us</h1>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ================================== About Section Start ======================================= -->
    <section class="about py-140 position-relative max-lg-overflow-hidden">
        <img src="assets/images/shapes/about-plane.png" alt=""
            class="cursor-big about-plane position-absolute tw-start-0 top-50">
        <img src="assets/images/thumbs/truck-head.png" alt=""
            class="truck-head cursor-big position-absolute tw-end-0 d-xxl-block d-none">

        <div class="container">
            <div class="row gy-5 flex-wrap-reverse">
                <div class="col-lg-5 pe-xl-5">
                    <div class="position-relative tw-pb-11 h-100">
                        <div class="position-relative" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                            <img src="assets/images/thumbs/about-img.png" alt=""
                                class="w-100 h-100 object-fit-cover">
                            <span
                                class="cursor-big tw-w-75-px tw-h-75-px bg-main-600 d-flex justify-content-center align-items-center rounded-circle position-absolute tw-end-0 bottom-0 tw-me-305 tw-mb-305 d-lg-flex d-none">
                                <img src="assets/images/icons/play-bar.svg" alt="">
                            </span>
                        </div>

                        <div class="positioned-image bg-white cursor-big common-shadow-four rounded-circle d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-p-9"
                            data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                            <img src="assets/images/thumbs/glob-track.png" alt="">
                        </div>

                        <div class="tw-p-10 tw-pe-130-px tw--translate-x-30-px bg-main-600 position-absolute tw-start-0 bottom-0 tw--ms-30-px"
                            data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                            <h1 class="text-white tw-mb-4 cursor-big">25+</h1>
                            <div class="d-flex flex-column tw-gap-1 align-items-start">
                                <span class="text-white fw-medium cursor-small">Years Of Experience</span>
                                <img src="assets/images/shapes/line-shape.png" alt="">
                            </div>
                            <div
                                class="cursor-small before-border position-relative tw-p-205 bg-white d-inline-flex align-items-start tw-gap-1 position-absolute top-0 tw-end-0 tw-mt-205 tw-me-205 z-1">
                                <span class="tw-text-xl fw-semibold text-main-600">4.9</span>
                                <span class="tw-text-xl fw-semibold text-main-600 d-flex tw--translate-y-4-px"><i
                                        class="ph-fill ph-star"></i></span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <div class="">
                        <span
                            class="splitTextStyleTwo cursor-small tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Safe
                            Transportation & Logistics</span>
                        <h1 class="splitTextStyleOne cursor-big tw-mb-8">Modern transport system & secure packaging</h1>
                        <p class="cursor-small text-neutral-900 tw-ps-205 border-start border-main-600 border-2">Temperate
                            ocean-bass sea chub unicorn fish treefish eulachon tidewater goby. Flier, bighe carp Devario
                            shortnose sucker platy smalleye</p>

                        <div class="tw-mt-9">
                            <div class="row gy-4">
                                <div class="col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="animation-item d-flex align-items-center tw-gap-6">
                                        <span class="cursor-big animate__heartBeat">
                                            <img src="assets/images/icons/about-icon1.svg" alt="">
                                        </span>
                                        <h6 class="cursor-big">Air Freight <br> Transportation</h6>
                                    </div>
                                    <p class="cursor-small text-neutral-1000 tw-mt-605 line-clamp-2">Temperate ocean-bass
                                        sea chub bass sea chub treefish eulachon tidewater goby.</p>
                                </div>
                                <div class="col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                    <div class="animation-item d-flex align-items-center tw-gap-6">
                                        <span class="cursor-big animate__heartBeat">
                                            <img src="assets/images/icons/about-icon2.svg" alt="">
                                        </span>
                                        <h6 class="cursor-big">Ocean Freight
                                            Transportation</h6>
                                    </div>
                                    <p class="cursor-small text-neutral-1000 tw-mt-605 line-clamp-2">Temperate ocean-bass
                                        sea chub bass sea chub
                                        treefish eulachon tidewater goby.</p>
                                </div>
                            </div>
                        </div>

                        <span class="tw-my-7 border-bottom border-neutral-100 d-block"></span>

                        <ul class="cursor-small d-flex flex-column tw-gap-2">
                            <li class="d-flex align-items-center tw-gap-4" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                <span class="text-neutral-1000 fw-medium">We approached WiaTech with complex project
                                    deliver</span>
                            </li>
                            <li class="d-flex align-items-center tw-gap-4" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="400">
                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                <span class="text-neutral-1000 fw-medium">Awards Winning IT Solutions Company</span>
                            </li>
                        </ul>

                        <div class="d-flex align-items-center tw-gap-56-px tw-mt-10 flex-wrap">
                            <a href="service.html"
                                class="cursor-small btn btn-main-two hover-style-three button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group rounded-0"
                                data-block="button" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <span class="button__flair"></span>
                                <span class="button__label">View services</span>
                                <span
                                    class="tw-w-7 tw-h-7 bg-white text-main-600 tw-text-sm tw-rounded d-flex justify-content-center align-items-center position-relative tw-duration-500">
                                    <i class="ph-bold ph-check"></i>
                                </span>
                            </a>

                            <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="400">
                                <span
                                    class="tw-w-15 tw-h-15 rounded-circle tw-p-2 bg-white common-shadow-three flex-shrink-0">
                                    <img src="assets/images/thumbs/user-img.png" alt="">
                                </span>
                                <div class="d-flex flex-column tw-gap-1 cursor-small">
                                    <img src="assets/images/thumbs/signature.png" alt="">
                                    <span class="fw-semibold tw-text-sm text-main-600">Ceo & Founder</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================== About Section End ======================================= -->

    <!-- ======================================== Section Features section start ===================================== -->
    <section class="features bg-neutral-50 bg-img" data-background-image="assets/images/shapes/features-bg.png">
        <div class="row g-0 features-item-wrapper">
            <div class="col-lg-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="features-item animation-item p-80-px tw-duration-300 position-relative h-100">
                    <span
                        class="fw-bold tw-text-xl text-main-two-600 position-absolute top-0 tw-end-0 tw-mt-12 tw-me-12 font-heading cursor-small">01</span>
                    <span class="pb-60-px cursor-big animate__wobble">
                        <img src="assets/images/icons/features-icon1.svg" alt="">
                    </span>
                    <h5 class="tw-mb-7 cursor-big splitTextStyleTwo">Warehouse Facility</h5>
                    <p class="text-neutral-1000 cursor-small">Temperate ocean-bass sea chub unicorn treefish eulachon
                        tidewater goby.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div
                    class="features-item animation-item p-80-px tw-duration-300 position-relative h-100 bg-white common-shadow-two">
                    <span
                        class="fw-bold tw-text-xl text-main-two-600 position-absolute top-0 tw-end-0 tw-mt-12 tw-me-12 font-heading cursor-small">02</span>
                    <span class="pb-60-px cursor-big animate__wobble">
                        <img src="assets/images/icons/features-icon2.svg" alt="">
                    </span>
                    <h5 class="tw-mb-7 cursor-big splitTextStyleTwo">Cost Effective Pricing</h5>
                    <p class="text-neutral-1000 cursor-small">Temperate ocean-bass sea chub unicorn treefish eulachon
                        tidewater goby.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="features-item animation-item p-80-px tw-duration-300 position-relative h-100">
                    <span
                        class="fw-bold tw-text-xl text-main-two-600 position-absolute top-0 tw-end-0 tw-mt-12 tw-me-12 font-heading cursor-small">03</span>
                    <span class="pb-60-px cursor-big animate__wobble">
                        <img src="assets/images/icons/features-icon3.svg" alt="">
                    </span>
                    <h5 class="tw-mb-7 cursor-big splitTextStyleTwo">Air Freight Facility</h5>
                    <p class="text-neutral-1000 cursor-small">Temperate ocean-bass sea chub unicorn treefish eulachon
                        tidewater goby.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="features-item animation-item p-80-px tw-duration-300 position-relative h-100">
                    <span
                        class="fw-bold tw-text-xl text-main-two-600 position-absolute top-0 tw-end-0 tw-mt-12 tw-me-12 font-heading cursor-small">04</span>
                    <span class="pb-60-px cursor-big animate__wobble">
                        <img src="assets/images/icons/features-icon4.svg" alt="">
                    </span>
                    <h5 class="tw-mb-7 cursor-big splitTextStyleTwo">Container Delivery</h5>
                    <p class="text-neutral-1000 cursor-small">Temperate ocean-bass sea chub unicorn treefish eulachon
                        tidewater goby.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================== Section Features section End ===================================== -->

    <!-- ========================= Video section start ============================== -->
    <div class="overflow-hidden pt-140">
        <div class="container">
            <div class="position-relative">
                <img src="assets/images/thumbs/video_bg.png" alt=""
                    class="w-100 h-100 object-fit-cover tw-rounded-xl tw-min-h-300-px">
                <div class="position-absolute top-50 tw-start-50 translate-middle z-1 text-center w-100">
                    <a href="https://www.youtube.com/watch?v=MFLVmAE4cqg"
                        class="play-button bg-light-animation cursor-big tw-w-75-px tw-h-75-px position-relative d-inline-flex justify-content-center align-items-center bg-main-600 text-white hover-text-main-two-700 active-scale-094 rounded-circle tw-text-xl">
                        <i class="ph-fill ph-play"></i>
                    </a>
                    <h2 class="font-pacifico h1 text-white cursor-big tw-mt-12 fw-medium">Watch Video</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= Video section End ============================== -->

    <!-- ============================== Team section start ============================== -->
    <section class="team py-140 overflow-hidden">
        <div class="container">
            <div class="d-flex align-items-center flex-wrap tw-gap-6 justify-content-between tw-mb-15">
                <div class="max-w-632-px text-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <span
                        class="splitTextStyleTwo cursor-small tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Safe
                        Transportation & Logistics</span>
                    <h2 class="splitTextStyleOne cursor-big tw-mb-8 h1">Behind the scene who help us lot of</h2>
                </div>
                <a href="service.html"
                    class="cursor-small btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0 tw-px-13 tw-py-505"
                    data-block="button" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <span class="button__flair"></span>
                    <span class="button__label">View services</span>
                </a>
            </div>

            <div class="view-w-100 position-relative z-1">
                <div class="team-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="team-item group group-item">
                                <div class="position-relative tw-rounded-32-px tw-rounded-bl-0 overflow-hidden">
                                    <a href="{{ route('team') }}" class="w-100 tw-h-400-px">
                                        <img src="assets/images/thumbs/team-img1.png" alt=""
                                            class="w-100 h-100 object-fit-cover">
                                    </a>
                                    <div class="socails-share position-absolute bottom-0 tw-start-0 d-inline-block ">
                                        <button
                                            class="tw-h-17 tw-w-17 bg-main-600 text-white tw-text-2xl group-hover-bg-main-two-600 tw-duration-300 cursor-big tw-rounded-lg tw-rounded-bl-0 tw-rounded-br-0  tw-rounded-tl-0 ">
                                            <i class="ph-fill ph-share-network"></i>
                                        </button>
                                        <ul
                                            class="bg-white tw-py-205 tw-px-5 d-flex align-items-center tw-gap-5 position-absolute bottom-0 tw-start-full tw-invisible group-hover-item-visible tw-duration-300 clip-w-0 group-hover-clip-w-full">
                                            <li>
                                                <a href="https://wwww.twitter.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-twitter-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.facebook.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-facebook-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.instagram.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-bold ph-instagram-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.youtube.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-youtube-logo"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center tw-mt-6">
                                    <h5 class="tw-mb-1 cursor-big">
                                        <a href="{{ route('team') }}" class="hover-text-main-600 line-clamp-1">Leslie
                                            Alexander</a>
                                    </h5>
                                    <span class="tw-text-sm text-main-600 text-uppercase cursor-small">GRAPHIC
                                        DESIGNER</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="team-item group group-item">
                                <div class="position-relative tw-rounded-32-px tw-rounded-bl-0 overflow-hidden">
                                    <a href="{{ route('team') }}" class="w-100 tw-h-400-px">
                                        <img src="assets/images/thumbs/team-img2.png" alt=""
                                            class="w-100 h-100 object-fit-cover">
                                    </a>
                                    <div class="socails-share position-absolute bottom-0 tw-start-0 d-inline-block ">
                                        <button
                                            class="tw-h-17 tw-w-17 bg-main-600 text-white tw-text-2xl group-hover-bg-main-two-600 tw-duration-300 cursor-big tw-rounded-lg tw-rounded-bl-0 tw-rounded-br-0  tw-rounded-tl-0 ">
                                            <i class="ph-fill ph-share-network"></i>
                                        </button>
                                        <ul
                                            class="bg-white tw-py-205 tw-px-5 d-flex align-items-center tw-gap-5 position-absolute bottom-0 tw-start-full tw-invisible group-hover-item-visible tw-duration-300 clip-w-0 group-hover-clip-w-full">
                                            <li>
                                                <a href="https://wwww.twitter.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-twitter-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.facebook.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-facebook-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.instagram.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-bold ph-instagram-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.youtube.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-youtube-logo"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center tw-mt-6">
                                    <h5 class="tw-mb-1 cursor-big">
                                        <a href="{{ route('team') }}" class="hover-text-main-600 line-clamp-1">Mehedi
                                            Hasan</a>
                                    </h5>
                                    <span class="tw-text-sm text-main-600 text-uppercase cursor-small">UX/UI
                                        designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="team-item group group-item">
                                <div class="position-relative tw-rounded-32-px tw-rounded-bl-0 overflow-hidden">
                                    <a href="{{ route('team') }}" class="w-100 tw-h-400-px">
                                        <img src="assets/images/thumbs/team-img3.png" alt=""
                                            class="w-100 h-100 object-fit-cover">
                                    </a>
                                    <div class="socails-share position-absolute bottom-0 tw-start-0 d-inline-block ">
                                        <button
                                            class="tw-h-17 tw-w-17 bg-main-600 text-white tw-text-2xl group-hover-bg-main-two-600 tw-duration-300 cursor-big tw-rounded-lg tw-rounded-bl-0 tw-rounded-br-0  tw-rounded-tl-0 ">
                                            <i class="ph-fill ph-share-network"></i>
                                        </button>
                                        <ul
                                            class="bg-white tw-py-205 tw-px-5 d-flex align-items-center tw-gap-5 position-absolute bottom-0 tw-start-full tw-invisible group-hover-item-visible tw-duration-300 clip-w-0 group-hover-clip-w-full">
                                            <li>
                                                <a href="https://wwww.twitter.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-twitter-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.facebook.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-facebook-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.instagram.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-bold ph-instagram-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.youtube.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-youtube-logo"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center tw-mt-6">
                                    <h5 class="tw-mb-1 cursor-big">
                                        <a href="{{ route('team') }}" class="hover-text-main-600 line-clamp-1">Robiul
                                            Hasan</a>
                                    </h5>
                                    <span class="tw-text-sm text-main-600 text-uppercase cursor-small">Front-end
                                        developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <div class="team-item group group-item">
                                <div class="position-relative tw-rounded-32-px tw-rounded-bl-0 overflow-hidden">
                                    <a href="{{ route('team') }}" class="w-100 tw-h-400-px">
                                        <img src="assets/images/thumbs/team-img1.png" alt=""
                                            class="w-100 h-100 object-fit-cover">
                                    </a>
                                    <div class="socails-share position-absolute bottom-0 tw-start-0 d-inline-block ">
                                        <button
                                            class="tw-h-17 tw-w-17 bg-main-600 text-white tw-text-2xl group-hover-bg-main-two-600 tw-duration-300 cursor-big tw-rounded-lg tw-rounded-bl-0 tw-rounded-br-0  tw-rounded-tl-0 ">
                                            <i class="ph-fill ph-share-network"></i>
                                        </button>
                                        <ul
                                            class="bg-white tw-py-205 tw-px-5 d-flex align-items-center tw-gap-5 position-absolute bottom-0 tw-start-full tw-invisible group-hover-item-visible tw-duration-300 clip-w-0 group-hover-clip-w-full">
                                            <li>
                                                <a href="https://wwww.twitter.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-twitter-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.facebook.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-facebook-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.instagram.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-bold ph-instagram-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wwww.youtube.com"
                                                    class="tw-text-base text-neutral-1000 hover-text-main-two-600 hover-scale-20 cursor-small"><i
                                                        class="ph-fill ph-youtube-logo"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center tw-mt-6">
                                    <h5 class="tw-mb-1 cursor-big">
                                        <a href="{{ route('team') }}" class="hover-text-main-600 line-clamp-1">Riad
                                            Hasan</a>
                                    </h5>
                                    <span class="tw-text-sm text-main-600 text-uppercase cursor-small">UX/Ui
                                        designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== Team section end ============================== -->

    <!-- =========================== Transport way Start ============================== -->
    <section class="transport-way py-140 position-relative overflow-hidden bg-img"
        data-background-image="assets/images/shapes/how-it-work-bg.png">
        <img src="assets/images/shapes/about-plane.png" alt=""
            class="cursor-big about-plane position-absolute tw-start-0 bottom-0 tw-mb-705">

        <div class="container">
            <div class="max-w-856-px mx-auto text-center tw-pb-16 tw-mb-6">
                <span
                    class="splitTextStyleTwo cursor-small tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Safe
                    Transportation & Logistics</span>
                <h2 class="splitTextStyleOne cursor-big h1">Introducing The most Modern way of Transportation</h2>
            </div>

            <div class="row gy-5">

                <div class="col-lg-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="transport-way-item text-center">
                        <span
                            class="transport-way-item__icon cursor-big tw-w-95-px tw-h-95-px bg-main-600 rounded-circle tw-rounded-bl-0 d-inline-flex justify-content-center align-items-center tw-transition-all tw-duration-300">
                            <img src="assets/images/icons/transport-way-icon1.svg" alt="">
                        </span>
                        <h3 class="cursor-big tw-py-6 w-100 tw-px-4 rounded-pill text-center bg-main-100-gradient-one">560
                        </h3>
                        <h6 class="cursor-small tw-mt-10">Main Warehouses</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <div class="transport-way-item text-center">
                        <span
                            class="transport-way-item__icon cursor-big tw-w-95-px tw-h-95-px bg-main-600 rounded-circle tw-rounded-bl-0 d-inline-flex justify-content-center align-items-center bg-main-two-600">
                            <img src="assets/images/icons/transport-way-icon2.svg" alt="">
                        </span>
                        <h3 class="cursor-big tw-py-6 w-100 tw-px-4 rounded-pill text-center bg-main-100-gradient-two">100%
                        </h3>
                        <h6 class="cursor-small tw-mt-10">Supply Engineers</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="400">
                    <div class="transport-way-item text-center">
                        <span
                            class="transport-way-item__icon cursor-big tw-w-95-px tw-h-95-px bg-main-600 rounded-circle tw-rounded-bl-0 d-inline-flex justify-content-center align-items-center">
                            <img src="assets/images/icons/transport-way-icon3.svg" alt="">
                        </span>
                        <h3 class="cursor-big tw-py-6 w-100 tw-px-4 rounded-pill text-center bg-main-100-gradient-three">
                            3m+</h3>
                        <h6 class="cursor-small tw-mt-10">Countries Covered</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="500">
                    <div class="transport-way-item text-center">
                        <span
                            class="transport-way-item__icon cursor-big tw-w-95-px tw-h-95-px bg-main-600 rounded-circle tw-rounded-bl-0 d-inline-flex justify-content-center align-items-center">
                            <img src="assets/images/icons/transport-way-icon4.svg" alt="">
                        </span>
                        <h3 class="cursor-big tw-py-6 w-100 tw-px-4 rounded-pill text-center bg-main-100-gradient-four">30+
                        </h3>
                        <h6 class="cursor-small tw-mt-10">Total Services</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =========================== Transport way End ============================== -->

    <!-- ========================== Contact us section start =============================== -->
    <section class="d-xl-flex">
        <div class="w-100 xl-w-50 position-relative">
            <div class="d-flex h-100">
                <img src="assets/images/thumbs/contact-us-img1.png" alt="" class="d-sm-block d-none">
                <div class="text-center animation-item bg-main-two-600 tw-py-12 tw-px-6 flex-grow-1">
                    <span class="cursor-big">
                        <img src="assets/images/icons/conact-us-icon1.svg" alt="" class="animate__wobble">
                    </span>
                    <h2 class="splitTextStyleOne text-white tw-mb-8 tw-mt-6 cursor-big">Need Our Services?</h2>
                    <a href="#"
                        class="cursor-small fw-bold text-white d-inline-flex align-items-center tw-gap-5 hover-text-main-600">
                        Contact With us
                        <img src="assets/images/icons/arrow-right.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="w-100 xl-w-50 position-relative">
            <div class="d-sm-flex">
                <div class="position-relative">
                    <img src="assets/images/thumbs/contact-us-img2.png" alt=""
                        class="w-100 h-100 object-fit-cover">
                    <a href="https://www.youtube.com/watch?v=MFLVmAE4cqg"
                        class="play-button circle-border bg-inherit-animation cursor-big tw-w-75-px tw-h-75-px d-flex justify-content-center align-items-center bg-main-three-600 text-main-two-600 hover-text-main-two-700 active-scale-094 rounded-circle tw-text-xl position-absolute top-50 tw-start-50 translate-middle">
                        <i class="ph-fill ph-play"></i>
                    </a>
                </div>
                <div class="text-center animation-item bg-main-600 tw-py-12 tw-px-6 flex-grow-1">
                    <span class="cursor-big">
                        <img src="assets/images/icons/conact-us-icon2.svg" alt="" class="animate__wobble">
                    </span>
                    <h2 class="splitTextStyleOne text-white tw-mb-8 tw-mt-6 cursor-big">Discuss With Agents</h2>
                    <a href="#"
                        class="cursor-small fw-bold text-white d-inline-flex align-items-center tw-gap-5 hover-text-main-two-600">
                        Contact With us
                        <img src="assets/images/icons/arrow-right.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Contact us section End =============================== -->

    

    @include('components.pages.get-in-touch')



    <!-- =================================== Brand One Start ===================================== -->
    <div class="py-140 tw-mt-9 position-relative z-1">
        <img src="assets/images/shapes/testimonials-brand-bg.png" alt=""
            class="position-absolute bottom-0 tw-start-0 tw-end-0 z-n1 w-100 h-100">
        <!-- Brand Start -->
        <div class="container">
            <div class="">
                <div class="left-right-line text-center position-relative z-1">
                    <p class="d-inline-block tw-text-xl fw-bold text-main-two-600 tw-px-10 bg-bg-color cursor-small">
                        Trusted and funded by more then <span class="text-main-600">900</span> companies</p>
                </div>

                <div class="tw-mt-12">
                    <div class="brand-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide me-0" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="100">
                                <div class="text-center cursor-big">
                                    <img src="assets/images/thumbs/brand-img1.png" alt="" class="max-w-175-px">
                                </div>
                            </div>
                            <div class="swiper-slide me-0" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <div class="text-center cursor-big">
                                    <img src="assets/images/thumbs/brand-img2.png" alt="" class="max-w-175-px">
                                </div>
                            </div>
                            <div class="swiper-slide me-0" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="300">
                                <div class="text-center cursor-big">
                                    <img src="assets/images/thumbs/brand-img3.png" alt="" class="max-w-175-px">
                                </div>
                            </div>
                            <div class="swiper-slide me-0" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="400">
                                <div class="text-center cursor-big">
                                    <img src="assets/images/thumbs/brand-img4.png" alt="" class="max-w-175-px">
                                </div>
                            </div>
                            <div class="swiper-slide me-0" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="500">
                                <div class="text-center cursor-big">
                                    <img src="assets/images/thumbs/brand-img5.png" alt="" class="max-w-175-px">
                                </div>
                            </div>
                            <div class="swiper-slide me-0" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="500">
                                <div class="text-center cursor-big">
                                    <img src="assets/images/thumbs/brand-img2.png" alt="" class="max-w-175-px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
    </div>
    <!-- =================================== Brand One End ===================================== -->


@endsection
