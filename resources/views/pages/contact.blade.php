@extends('layouts.frontlayouts.base')

@section('title', 'Contact')

@section('content')
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-140 tw-pt-206-px mb-0 bg-img"
        data-background-image="assets/images/thumbs/breadcrumb-bg.png">
        <div class="container">
            <div class="text-center">
                <span
                    class="splitTextStyleTwo text-main-600 border-bottom border-main-600 fst-italic fw-bold tw-text-lg cursor-small">Contact</span>
                <h1 class="splitTextStyleOne text-white tw-mt-1 cursor-big"> Contact Us</h1>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- =============================== Contact Page section start =============================== -->
    <section class="py-140">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="">
                        <div class="">
                            <span
                                class="splitTextStyleTwo cursor-small tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Get
                                In Touch</span>
                            <h1 class="splitTextStyleOne cursor-big tw-mb-4">Contact Us</h1>
                            <p class="cursor-small text-neutral-900">Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque inventore</p>
                        </div>
                        <div class="xs-grid-cols-2 d-grid tw-mt-16 tw-gap-74-px">
                            <div class="d-flex align-items-start tw-gap-6">
                                <span class="tw-text-3xl text-main-600 d-flex cursor-small">
                                    <i class="ph-bold ph-map-pin"></i>
                                </span>
                                <div class="">
                                    <h6 class="tw-mb-4 cursor-big">Location</h6>
                                    <p class="text-neutral-1000 cursor-small">55 Main street, 2nd block, Melbourne,
                                        Australia</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start tw-gap-6">
                                <span class="tw-text-3xl text-main-600 d-flex cursor-small">
                                    <i class="ph-bold ph-phone"></i>
                                </span>
                                <div class="">
                                    <h6 class="tw-mb-4 cursor-big">Phone</h6>
                                    <a href="tel:+1(368)5678954" class="text-neutral-1000 hover-text-main-600 cursor-big">+1
                                        (368) 567 89 54</a>
                                    <a href="tel:+236(456)89622"
                                        class="text-neutral-1000 hover-text-main-600 cursor-big tw-mt-1">+236 (456) 896
                                        22</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-start tw-gap-6">
                                <span class="tw-text-3xl text-main-600 d-flex cursor-small">
                                    <i class="ph-bold ph-envelope-simple"></i>
                                </span>
                                <div class="">
                                    <h6 class="tw-mb-4 cursor-big">Location</h6>
                                    <a href="mailto:wiatechinfo@gmail.com"
                                        class="text-neutral-1000 hover-text-main-600 cursor-big">wiatechinfo@gmail.com</a>
                                    <a href="mailto:www.wiatech.com"
                                        class="text-neutral-1000 hover-text-main-600 cursor-big">www.wiatech.com</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-start tw-gap-6">
                                <span class="tw-text-3xl text-main-600 d-flex cursor-small">
                                    <i class="ph-bold ph-share-network"></i>
                                </span>
                                <div class="">
                                    <h6 class="tw-mb-4 cursor-big">Social</h6>
                                    <ul
                                        class="cursor-small d-flex align-items-center tw-gap-3 justify-content-center tw-mt-6">
                                        <li>
                                            <a href="https://www.facebook.com"
                                                class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                                <i class="ph ph-facebook-logo"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com"
                                                class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                                <i class="ph ph-x-logo"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com"
                                                class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                                <i class="ph ph-instagram-logo"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com"
                                                class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                                <i class="ph ph-youtube-logo"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-neutral-50 py-60 tw-px-54-px">
                        <h3 class="tw-mb-4 cursor-big">Fill Up The Form</h3>
                        <p class="text-neutral-1000 cursor-small max-w-444-px">Your email address will not be published.
                            Required fields are marked *</p>
                        <form action="#" class="tw-mt-70-px d-flex flex-column tw-gap-64-px">
                            <div class="position-relative">
                                <input type="text"
                                    class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600"
                                    placeholder="Your Name*" required>
                                <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-user"></i>
                                </span>
                            </div>
                            <div class="position-relative">
                                <input type="email"
                                    class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600"
                                    placeholder="Email Address*" required>
                                <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-envelope"></i>
                                </span>
                            </div>
                            <div class="position-relative">
                                <textarea
                                    class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600 tw-h-108-px"
                                    placeholder="Enter Your Message here"></textarea>
                                <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-note-pencil"></i>
                                </span>
                            </div>
                            <div class="">
                                <button type="submit"
                                    class="cursor-small btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span
                                        class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                                        <i class="ph-bold ph-paper-plane-tilt"></i>
                                    </span>
                                    <span class="button__label">Get In Touch</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Contact Page section End =============================== -->

    @include('components.pages.map')
@endsection
