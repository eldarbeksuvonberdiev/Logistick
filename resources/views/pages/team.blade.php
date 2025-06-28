@extends('layouts.frontlayouts.base')

@section('title', 'About')

@section('content')

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-140 tw-pt-206-px mb-0 bg-img"
        data-background-image="assets/images/thumbs/breadcrumb-bg.png">
        <div class="container">
            <div class="text-center">
                <span
                    class="splitTextStyleTwo text-main-600 border-bottom border-main-600 fst-italic fw-bold tw-text-lg cursor-small">Team
                    Details</span>
                <h1 class="splitTextStyleOne text-white tw-mt-1 cursor-big"> Team Details</h1>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- =============================== Team Details section start =============================== -->
    <section class="py-140">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="h-100 w-100">
                        <img src="assets/images/thumbs/team-details-img.jpg" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <div class="col-md-6 ps-lg-5">
                    <div class="ps-xl-5">
                        <div class="d-flex align-items-center tw-gap-2 cursor-small">
                            <ul class="d-flex align-items-center tw-gap-2">
                                <li class="text-star tw-text-base d-flex"><i class="ph-fill ph-star"></i></li>
                                <li class="text-star tw-text-base d-flex"><i class="ph-fill ph-star"></i></li>
                                <li class="text-star tw-text-base d-flex"><i class="ph-fill ph-star"></i></li>
                                <li class="text-star tw-text-base d-flex"><i class="ph-fill ph-star"></i></li>
                                <li class="text-star tw-text-base d-flex"><i class="ph-fill ph-star"></i></li>
                            </ul>
                            <span class="text-neutral-1000">(5k)</span>
                        </div>
                        <h2 class="tw-mt-4 tw-mb-1 cursor-big">Alextina Ditarson</h2>
                        <span class="text-neutral-1000 cursor-big">General Manager</span>
                        <p class="text-neutral-1000 tw-mt-4 cursor-big">On the other hand, we denounce with righteous
                            indignation dislike men are so beguiled and demoralized by the charms of pleasure of the mom
                            blinded by desire that they cannot foresee the pain and trouble that are</p>
                        <ul class="cursor-small d-flex align-items-center tw-gap-3 tw-mt-10">
                            <li>
                                <a href="https://www.facebook.com"
                                    class="tw-w-11 tw-h-11 rounded-circle bg-neutral-100 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white  active-scale-09 tw-duration-200">
                                    <i class="ph-bold ph-facebook-logo"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com"
                                    class="tw-w-11 tw-h-11 rounded-circle bg-neutral-100 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white 0 active-scale-09 tw-duration-200">
                                    <i class="ph-bold ph-x-logo"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com"
                                    class="tw-w-11 tw-h-11 rounded-circle bg-neutral-100 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white active-scale-09 tw-duration-200">
                                    <i class="ph-bold ph-instagram-logo"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com"
                                    class="tw-w-11 tw-h-11 rounded-circle bg-neutral-100 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white 0 active-scale-09 tw-duration-200">
                                    <i class="ph-bold ph-youtube-logo"></i>
                                </a>
                            </li>
                        </ul>

                        <a href="https://themeforest.net/user/wowtheme7"
                            class="cursor-small btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 group active--translate-y-2 rounded-0 tw-px-13 tw-py-505 tw-mt-11"
                            data-block="button">
                            <span class="button__flair"></span>
                            <span class="button__label">Visit Website</span>
                            <span class="text-white tw-text-lg position-relative group-hover-text-white tw-duration-500">
                                <i class="ph ph-caret-right"></i>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Team Details section End =============================== -->

    <!-- =============================== Team Progress section Start =============================== -->
    <div class="bg-main-two-600 tw-pt-80-px tw-pb-80-px">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-7">
                    <div class="max-w-660-px">
                        <h2 class="text-white splitTextStyleOne tw-text-44-px cursor-big">Welcome to our culinary haven
                            where each dish is a symphony of flavors meticulously</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column tw-gap-9">
                        <div class="">
                            <span class="text-lg fw-medium tw-mb-3 d-block text-white text-capitalize cursor-small">business
                                managment</span>
                            <div class="progress-container" data-percentage='88'>
                                <div class="progress active"></div>
                                <div class="percentage active cursor-small">0%</div>
                            </div>
                        </div>
                        <div class="">
                            <span
                                class="text-lg fw-medium tw-mb-3 d-block text-white text-capitalize cursor-small">technology
                                solution</span>
                            <div class="progress-container" data-percentage='96'>
                                <div class="progress active"></div>
                                <div class="percentage active cursor-small">0%</div>
                            </div>
                        </div>
                        <div class="">
                            <span class="text-lg fw-medium tw-mb-3 d-block text-white text-capitalize cursor-small">Human
                                Interacation</span>
                            <div class="progress-container" data-percentage='91'>
                                <div class="progress active"></div>
                                <div class="percentage active cursor-small">0%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============================== Team Progress section End =============================== -->



    @include('components.pages.get-in-touch')



@endsection
