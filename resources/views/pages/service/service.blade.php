@extends('layouts.pages.base')

@section('title', 'Service')

@section('content')

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-140 tw-pt-206-px mb-0 bg-img"
        data-background-image="assets/images/thumbs/breadcrumb-bg.png">
        <div class="container">
            <div class="text-center">
                <span
                    class="splitTextStyleTwo text-main-600 border-bottom border-main-600 fst-italic fw-bold tw-text-lg cursor-small">Services</span>
                <h1 class="splitTextStyleOne text-white tw-mt-1 cursor-big"> Services</h1>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ============================== service Section Start ================================= -->
    <section class="service py-140 position-relative half-bg-white bg-neutral">
        <img src="assets/images/shapes/pattern-bg.png" alt="" class="position-absolute bottom-0 tw-start-0 w-100 h-50">

        <div class="container">
            <div class="max-w-856-px mx-auto text-center tw-pb-16 tw-mb-6">
                <span
                    class="splitTextStyleTwo cursor-small tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Safe
                    Transportation & Logistics</span>
                <h1 class="splitTextStyleOne cursor-big">Fastest & Secured Logistics Solution & services</h1>
            </div>
        </div>
        <div class="tw-container-1540-px mx-auto tw-px-4">
            <div class="bg-main-two-600 tw-rounded-2xl position-relative z-1">
                <img src="assets/images/thumbs/service-bg-img.png" alt=""
                    class="position-absolute tw-end-0 bottom-0 z-n1">

                <div class="container">
                    <div class="row gy-4 align-items-end">
                        <div class="col-xl-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                            <div class="pt-120">
                                <div class="bg-neutral-50 px-lg-5 tw-px-6 tw-pt-76-px tw-pb-15 rectangle-shape">
                                    <ul class="common-tab nav nav-pills d-flex flex-column tw-gap-8" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link cursor-big tw-text-xl animation-item text-main-two-600 hover-text-main-600 active-scale-094 tw-duration-300 fw-semibold tw-px-8 tw-py-4 tw-rounded-lg bg-white w-100 active"
                                                id="pills-air-transportation-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-air-transportation" type="button" role="tab"
                                                aria-controls="pills-air-transportation" aria-selected="true">
                                                <span class="d-flex align-items-center gap-xxl-5 tw-gap-6 text-start">
                                                    <img src="assets/images/icons/service-icon1.svg" alt=""
                                                        class="d-sm-flex d-none animate__swing">
                                                    <span>Air Transportation</span>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link cursor-big tw-text-xl animation-item text-main-two-600 hover-text-main-600 active-scale-094 tw-duration-300 fw-semibold tw-px-8 tw-py-4 tw-rounded-lg bg-white w-100"
                                                id="pills-traini-transport-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-traini-transport" type="button" role="tab"
                                                aria-controls="pills-traini-transport" aria-selected="false">
                                                <span class="d-flex align-items-center gap-xxl-5 tw-gap-6 text-start">
                                                    <img src="assets/images/icons/service-icon5.svg" alt=""
                                                        class="d-sm-flex d-none animate__swing">
                                                    <span>Train Transportation</span>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link cursor-big tw-text-xl animation-item text-main-two-600 hover-text-main-600 active-scale-094 tw-duration-300 fw-semibold tw-px-8 tw-py-4 tw-rounded-lg bg-white w-100"
                                                id="pills-cargoShipFrieght-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-cargoShipFrieght" type="button" role="tab"
                                                aria-controls="pills-cargoShipFrieght" aria-selected="false">
                                                <span class="d-flex align-items-center gap-xxl-5 tw-gap-6 text-start">
                                                    <img src="assets/images/icons/service-icon3.svg" alt=""
                                                        class="d-sm-flex d-none animate__swing">
                                                    <span>Cargo Ship Frieght</span>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link cursor-big tw-text-xl animation-item text-main-two-600 hover-text-main-600 active-scale-094 tw-duration-300 fw-semibold tw-px-8 tw-py-4 tw-rounded-lg bg-white w-100"
                                                id="pills-Maritime-transportation-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Maritime-transportation" type="button"
                                                role="tab" aria-controls="pills-Maritime-transportation"
                                                aria-selected="false">
                                                <span class="d-flex align-items-center gap-xxl-5 tw-gap-6 text-start">
                                                    <img src="assets/images/icons/service-icon4.svg" alt=""
                                                        class="d-sm-flex d-none animate__swing">
                                                    <span>Maritime Transportation</span>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link cursor-big tw-text-xl animation-item text-main-two-600 hover-text-main-600 active-scale-094 tw-duration-300 fw-semibold tw-px-8 tw-py-4 tw-rounded-lg bg-white w-100"
                                                id="pills-flightTrans-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-flightTrans" type="button" role="tab"
                                                aria-controls="pills-flightTrans" aria-selected="false">
                                                <span class="d-flex align-items-center gap-xxl-5 tw-gap-6 text-start">
                                                    <img src="assets/images/icons/service-icon5.svg" alt=""
                                                        class="d-sm-flex d-none animate__swing">
                                                    <span>Flight Transportation</span>
                                                </span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 ps-xl-5">
                            <div class="tab-content py-120" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-air-transportation" role="tabpanel"
                                    aria-labelledby="pills-air-transportation-tab" tabindex="0">
                                    <div class="">
                                        <p class="bg-main-two-900 tw-py-8 tw-pe-8 tw-ps-14 tw-text-lg text-white fw-semibold border-start border-main-600 border-5 tw-mb-11 cursor-small"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">For each
                                            project we establish relationships with partners who we know will help us create
                                            added value for</p>
                                        <div class="d-flex align-items-center position-relative max-w-620-px"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                            <span
                                                class="tw-w-90-px tw-h-90-px bg-white rounded-circle d-flex justify-content-center align-items-center position-absolute top-50 tw--translate-y-50 z-2 tw-start-48">
                                                <img src="assets/images/icons/service-icon5.svg" alt="">
                                            </span>
                                            <div class="tw--me-32-px d-sm-flex d-none position-relative">
                                                <img src="assets/images/thumbs/service-img.png" alt="">
                                            </div>
                                            <div
                                                class="bg-main-600 tw-h-280-px d-flex justify-content-center align-items-center tw-pe-6 tw-ps-8 position-relative z-1 rectangle-shape-two max-w-286-px w-100">
                                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Fast Delivery</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Safety</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Good Package</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Privacy</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="cursor-small d-flex flex-row flex-wrap tw-gap-8 tw-mt-14">
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="200">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Dedicated Transport wise</span>
                                            </li>
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="400">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Domestics & Logistics</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-traini-transport" role="tabpanel"
                                    aria-labelledby="pills-traini-transport-tab" tabindex="0">
                                    <div class="">
                                        <p class="bg-main-two-900 tw-py-8 tw-pe-8 tw-ps-14 tw-text-lg text-white fw-semibold border-start border-main-600 border-5 tw-mb-11 cursor-small"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">For each
                                            project we establish relationships with partners who we know will help us create
                                            added value for</p>
                                        <div class="d-flex align-items-center position-relative max-w-620-px"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                            <span
                                                class="tw-w-90-px tw-h-90-px bg-white rounded-circle d-flex justify-content-center align-items-center position-absolute top-50 tw--translate-y-50 z-2 tw-start-48">
                                                <img src="assets/images/icons/service-icon5.svg" alt="">
                                            </span>
                                            <div class="tw--me-32-px position-relative">
                                                <img src="assets/images/thumbs/service-img.png" alt="">
                                            </div>
                                            <div
                                                class="bg-main-600 tw-h-280-px d-flex justify-content-center align-items-center tw-pe-6 tw-ps-8 position-relative z-1 rectangle-shape-two max-w-286-px w-100">
                                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Fast Delivery</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Safety</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Good Package</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Privacy</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="cursor-small d-flex flex-row flex-wrap tw-gap-8 tw-mt-14">
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="200">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Dedicated Transport wise</span>
                                            </li>
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="400">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Domestics & Logistics</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-cargoShipFrieght" role="tabpanel"
                                    aria-labelledby="pills-cargoShipFrieght-tab" tabindex="0">
                                    <div class="">
                                        <p class="bg-main-two-900 tw-py-8 tw-pe-8 tw-ps-14 tw-text-lg text-white fw-semibold border-start border-main-600 border-5 tw-mb-11 cursor-small"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">For each
                                            project we establish relationships with partners who we know will help us create
                                            added value for</p>
                                        <div class="d-flex align-items-center position-relative max-w-620-px"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                            <span
                                                class="tw-w-90-px tw-h-90-px bg-white rounded-circle d-flex justify-content-center align-items-center position-absolute top-50 tw--translate-y-50 z-2 tw-start-48">
                                                <img src="assets/images/icons/service-icon5.svg" alt="">
                                            </span>
                                            <div class="tw--me-32-px position-relative">
                                                <img src="assets/images/thumbs/service-img.png" alt="">
                                            </div>
                                            <div
                                                class="bg-main-600 tw-h-280-px d-flex justify-content-center align-items-center tw-pe-6 tw-ps-8 position-relative z-1 rectangle-shape-two max-w-286-px w-100">
                                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Fast Delivery</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Safety</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Good Package</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Privacy</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="cursor-small d-flex flex-row flex-wrap tw-gap-8 tw-mt-14">
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="200">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Dedicated Transport wise</span>
                                            </li>
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="400">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Domestics & Logistics</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-Maritime-transportation" role="tabpanel"
                                    aria-labelledby="pills-Maritime-transportation-tab" tabindex="0">
                                    <div class="">
                                        <p class="bg-main-two-900 tw-py-8 tw-pe-8 tw-ps-14 tw-text-lg text-white fw-semibold border-start border-main-600 border-5 tw-mb-11 cursor-small"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">For each
                                            project we establish relationships with partners who we know will help us create
                                            added value for</p>
                                        <div class="d-flex align-items-center position-relative max-w-620-px"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                            <span
                                                class="tw-w-90-px tw-h-90-px bg-white rounded-circle d-flex justify-content-center align-items-center position-absolute top-50 tw--translate-y-50 z-2 tw-start-48">
                                                <img src="assets/images/icons/service-icon5.svg" alt="">
                                            </span>
                                            <div class="tw--me-32-px position-relative">
                                                <img src="assets/images/thumbs/service-img.png" alt="">
                                            </div>
                                            <div
                                                class="bg-main-600 tw-h-280-px d-flex justify-content-center align-items-center tw-pe-6 tw-ps-8 position-relative z-1 rectangle-shape-two max-w-286-px w-100">
                                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Fast Delivery</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Safety</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Good Package</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Privacy</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="cursor-small d-flex flex-row flex-wrap tw-gap-8 tw-mt-14">
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="200">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Dedicated Transport wise</span>
                                            </li>
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="400">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Domestics & Logistics</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-flightTrans" role="tabpanel"
                                    aria-labelledby="pills-flightTrans-tab" tabindex="0">
                                    <div class="">
                                        <p class="bg-main-two-900 tw-py-8 tw-pe-8 tw-ps-14 tw-text-lg text-white fw-semibold border-start border-main-600 border-5 tw-mb-11 cursor-small"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">For each
                                            project we establish relationships with partners who we know will help us create
                                            added value for</p>
                                        <div class="d-flex align-items-center position-relative max-w-620-px"
                                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                            <span
                                                class="tw-w-90-px tw-h-90-px bg-white rounded-circle d-flex justify-content-center align-items-center position-absolute top-50 tw--translate-y-50 z-2 tw-start-48">
                                                <img src="assets/images/icons/service-icon5.svg" alt="">
                                            </span>
                                            <div class="tw--me-32-px position-relative">
                                                <img src="assets/images/thumbs/service-img.png" alt="">
                                            </div>
                                            <div
                                                class="bg-main-600 tw-h-280-px d-flex justify-content-center align-items-center tw-pe-6 tw-ps-8 position-relative z-1 rectangle-shape-two max-w-286-px w-100">
                                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Fast Delivery</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Safety</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Good Package</span>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate"
                                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                                        <span class="text-white d-flex"><i
                                                                class="ph-bold ph-check"></i></span>
                                                        <span class="text-white fw-medium">Privacy</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="cursor-small d-flex flex-row flex-wrap tw-gap-8 tw-mt-14">
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="200">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Dedicated Transport wise</span>
                                            </li>
                                            <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                                data-aos-duration="1000" data-aos-delay="400">
                                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                                <span class="text-white fw-medium">Domestics & Logistics</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== service Section End ================================= -->

    <!-- ================================= Services Two section start ==================================== -->
    <section class="py-140">
        <div class="container">
            <div class="d-flex align-items-center flex-wrap tw-gap-6 justify-content-between tw-mb-15">
                <div class="max-w-856-px text-start">
                    <span
                        class="splitTextStyleTwo cursor-small tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Safe
                        Transportation & Logistics</span>
                    <h1 class="splitTextStyleOne cursor-big tw-mb-8 tw-text-56-px">We Provide Full Assistance Freight &
                        Warehousing</h1>
                    <p class="text-neutral-1000 cursor-small tw-mt-9 max-w-610-px tw-text-xl">A full administration
                        printing background. Print shirts for yourself or your online business Beautiful, customizable
                        template,</p>
                </div>
                <a href="service.html"
                    class="cursor-small btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0 tw-px-13 tw-py-505"
                    data-block="button">
                    <span class="button__flair"></span>
                    <span class="button__label">View services</span>
                </a>
            </div>

            <div class="row gy-4">
                <div class="col-xl-6">
                    <div class="bg-white tw-p-60-px position-relative animation-item common-shadow-five"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span class=" rectangle-shape-three d-sm-flex d-none  bg-neutral-100"></span>
                        <span
                            class="tw-w-108-px tw-h-108-px bg-white rounded-circle common-shadow-four position-absolute top-50 tw--translate-y-50 tw-end-0 tw-me-23-percent d-sm-flex d-none justify-content-center align-items-center">
                            <img src="assets/images/icons/service-icon4.svg" alt="" class="animate__swing">
                        </span>
                        <div class="max-w-310-px">
                            <h4 class="tw-mb-6 cursor-big splitTextStyleOne line-clamp-1">Cargo Ship Frieght</h4>
                            <p class="text-neutral-1000 cursor-small">Sed ut perspiciatis unde is voluptatem accusant</p>
                            <div class="tw-mt-8">
                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                    <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="200">
                                        <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                        <span class="text-neutral-1000 fw-medium">Fast Delivery & secure package</span>
                                    </li>
                                    <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="400">
                                        <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                        <span class="text-neutral-1000 fw-medium">Safety & Privacy Security</span>
                                    </li>
                                </ul>
                            </div>

                            <a href="{{ route('service-details') }}"
                                class="cursor-small tw-mt-6 btn btn-neutral-100 hover-style-three button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-pill tw-py-305 tw-px-8"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label"><i class="ph-bold ph-arrow-up-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white tw-p-60-px position-relative animation-item common-shadow-five"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span class=" rectangle-shape-three d-sm-flex d-none  bg-neutral-100">
                            <img src="assets/images/thumbs/rect-img.png" alt=""
                                class="w-100 h-100 object-fit-cover">
                        </span>
                        <span
                            class="tw-w-108-px tw-h-108-px bg-white rounded-circle common-shadow-four position-absolute top-50 tw--translate-y-50 tw-end-0 tw-me-23-percent d-sm-flex d-none justify-content-center align-items-center">
                            <img src="assets/images/icons/service-icon5.svg" alt="" class="animate__swing">
                        </span>

                        <div class="max-w-310-px">
                            <h4 class="tw-mb-6 cursor-big splitTextStyleOne line-clamp-1">Train Transportation</h4>
                            <p class="text-neutral-1000 cursor-small">Sed ut perspiciatis unde is voluptatem accusant</p>
                            <div class="tw-mt-8">
                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                    <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="200">
                                        <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                        <span class="text-neutral-1000 fw-medium">Fast Delivery & secure package</span>
                                    </li>
                                    <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="400">
                                        <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                        <span class="text-neutral-1000 fw-medium">Safety & Privacy Security</span>
                                    </li>
                                </ul>
                            </div>

                            <a href="{{ route('service-details') }}"
                                class="cursor-small tw-mt-6 btn btn-neutral-100 hover-style-three button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-pill tw-py-305 tw-px-8"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label"><i class="ph-bold ph-arrow-up-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white tw-p-60-px position-relative animation-item common-shadow-five"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span class=" rectangle-shape-three d-sm-flex d-none  bg-neutral-100"></span>
                        <span
                            class="tw-w-108-px tw-h-108-px bg-white rounded-circle common-shadow-four position-absolute top-50 tw--translate-y-50 tw-end-0 tw-me-23-percent d-sm-flex d-none justify-content-center align-items-center">
                            <img src="assets/images/icons/service-icon6.svg" alt="" class="animate__swing">
                        </span>

                        <div class="max-w-310-px">
                            <h4 class="tw-mb-6 cursor-big splitTextStyleOne line-clamp-1">Flight Transportation</h4>
                            <p class="text-neutral-1000 cursor-small">Sed ut perspiciatis unde is voluptatem accusant</p>
                            <div class="tw-mt-8">
                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                    <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="200">
                                        <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                        <span class="text-neutral-1000 fw-medium">Fast Delivery & secure package</span>
                                    </li>
                                    <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="400">
                                        <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                        <span class="text-neutral-1000 fw-medium">Safety & Privacy Security</span>
                                    </li>
                                </ul>
                            </div>

                            <a href="{{ route('service-details') }}"
                                class="cursor-small tw-mt-6 btn btn-neutral-100 hover-style-three button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-pill tw-py-305 tw-px-8"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label"><i class="ph-bold ph-arrow-up-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white tw-p-60-px position-relative animation-item common-shadow-five"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span class=" rectangle-shape-three d-sm-flex d-none  bg-neutral-100"></span>
                        <span
                            class="tw-w-108-px tw-h-108-px bg-white rounded-circle common-shadow-four position-absolute top-50 tw--translate-y-50 tw-end-0 tw-me-23-percent d-sm-flex d-none justify-content-center align-items-center">
                            <img src="assets/images/icons/service-icon7.svg" alt="" class="animate__swing">
                        </span>

                        <div class="max-w-310-px">
                            <h4 class="tw-mb-6 cursor-big splitTextStyleOne line-clamp-1">Maritime transportation</h4>
                            <p class="text-neutral-1000 cursor-small">Sed ut perspiciatis unde is voluptatem accusant</p>
                            <div class="tw-mt-8">
                                <ul class="cursor-small d-flex flex-column tw-gap-2">
                                    <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="200">
                                        <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                        <span class="text-neutral-1000 fw-medium">Fast Delivery & secure package</span>
                                    </li>
                                    <li class="d-flex align-items-center tw-gap-4 aos-init" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="400">
                                        <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                        <span class="text-neutral-1000 fw-medium">Safety & Privacy Security</span>
                                    </li>
                                </ul>
                            </div>

                            <a href="{{ route('service-details') }}"
                                class="cursor-small tw-mt-6 btn btn-neutral-100 hover-style-three button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-pill tw-py-305 tw-px-8"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label"><i class="ph-bold ph-arrow-up-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= Services Two section End ==================================== -->

    @include('components.pages.map')
@endsection
