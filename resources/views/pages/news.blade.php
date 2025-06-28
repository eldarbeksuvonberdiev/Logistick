@extends('layouts.frontlayouts.base')

@section('title', 'News')

@section('content')

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-140 tw-pt-206-px mb-0 bg-img"
        data-background-image="assets/images/thumbs/breadcrumb-bg.png">
        <div class="container">
            <div class="text-center">
                <span
                    class="splitTextStyleTwo text-main-600 border-bottom border-main-600 fst-italic fw-bold tw-text-lg cursor-small">Blog
                    Page</span>
                <h1 class="splitTextStyleOne text-white tw-mt-1 cursor-big"> Blog Page</h1>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- =============================== Blog Page section start =============================== -->
    <section class="py-140">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="d-flex flex-column tw-gap-70-px">
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="position-relative">
                                <a href="{{ route('project-details') }}" class="w-100 h-100 overflow-hidden">
                                    <img src="assets/images/thumbs/blog-page-img1.png" alt=""
                                        class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500">
                                </a>
                                <h6
                                    class="blog-date cursor-big tw-duration-300 tw-py-4 text-white d-flex justify-content-center align-items-center max-w-82-px w-100 tw-px-4 text-center tw-rounded-md fw-medium position-absolute top-0 tw-start-0 tw-mt-2 tw-ms-2 bg-main-600 fw-bold font-body">
                                    24 Feb
                                </h6>
                            </div>
                            <div class="tw-mt-10">
                                <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph ph-user"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                    </div>
                                    <span class="tw-w-205 border border-neutral-200"></span>
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph-bold ph-chats-circle"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                    </div>
                                    <span class="tw-w-205 border border-neutral-200"></span>
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph ph-clock"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                    </div>
                                </div>
                                <h3 class="tw-mb-4 cursor-big">
                                    <a href="{{ route('project-details') }}" class="splitTextStyleOne">The whimsically named Egg Canvas
                                        brainch </a>
                                </h3>
                                <p class="tw-text-lg text-neutral-1000 cursor-small">There are many variations of passages
                                    of Lorem Ipsum available, but majority have suffered teration in some form, by injected
                                    humour, or randomised words which don't look even slight believable. If you are going to
                                    use a passage of Lorem Ipsum.</p>
                                <a href="{{ route('project-details') }}"
                                    class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 cursor-small tw-mt-11 tw-tracking-wider">
                                    Read More
                                    <span class=""><img src="assets/images/icons/arrow-long.svg" alt=""
                                            class=""></span>
                                </a>

                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="position-relative">
                                <a href="{{ route('project-details') }}" class="w-100 h-100 overflow-hidden">
                                    <img src="assets/images/thumbs/blog-page-img2.png" alt=""
                                        class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500">
                                </a>
                                <h6
                                    class="blog-date cursor-big tw-duration-300 tw-py-4 text-white d-flex justify-content-center align-items-center max-w-82-px w-100 tw-px-4 text-center tw-rounded-md fw-medium position-absolute top-0 tw-start-0 tw-mt-2 tw-ms-2 bg-main-600 fw-bold font-body">
                                    24 Feb
                                </h6>
                            </div>
                            <div class="tw-mt-10">
                                <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph ph-user"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                    </div>
                                    <span class="tw-w-205 border border-neutral-200"></span>
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph-bold ph-chats-circle"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                    </div>
                                    <span class="tw-w-205 border border-neutral-200"></span>
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph ph-clock"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                    </div>
                                </div>
                                <h3 class="tw-mb-4 cursor-big">
                                    <a href="{{ route('project-details') }}" class="splitTextStyleOne">The whimsically named Egg Canvas
                                        brainch </a>
                                </h3>
                                <p class="tw-text-lg text-neutral-1000 cursor-small">There are many variations of passages
                                    of Lorem Ipsum available, but majority have suffered teration in some form, by injected
                                    humour, or randomised words which don't look even slight believable. If you are going to
                                    use a passage of Lorem Ipsum.</p>
                                <a href="{{ route('project-details') }}"
                                    class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 cursor-small tw-mt-11 tw-tracking-wider">
                                    Read More
                                    <span class=""><img src="assets/images/icons/arrow-long.svg" alt=""
                                            class=""></span>
                                </a>

                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="position-relative">
                                <a href="{{ route('project-details') }}" class="w-100 h-100 overflow-hidden">
                                    <img src="assets/images/thumbs/blog-page-img3.png" alt=""
                                        class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500">
                                </a>
                                <h6
                                    class="blog-date cursor-big tw-duration-300 tw-py-4 text-white d-flex justify-content-center align-items-center max-w-82-px w-100 tw-px-4 text-center tw-rounded-md fw-medium position-absolute top-0 tw-start-0 tw-mt-2 tw-ms-2 bg-main-600 fw-bold font-body">
                                    24 Feb
                                </h6>
                            </div>
                            <div class="tw-mt-10">
                                <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph ph-user"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                    </div>
                                    <span class="tw-w-205 border border-neutral-200"></span>
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph-bold ph-chats-circle"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                    </div>
                                    <span class="tw-w-205 border border-neutral-200"></span>
                                    <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                        <span class="text-main-600 tw-text-lg">
                                            <i class="ph ph-clock"></i>
                                        </span>
                                        <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                    </div>
                                </div>
                                <h3 class="tw-mb-4 cursor-big">
                                    <a href="{{ route('project-details') }}" class="splitTextStyleOne">The whimsically named Egg Canvas
                                        brainch </a>
                                </h3>
                                <p class="tw-text-lg text-neutral-1000 cursor-small">There are many variations of passages
                                    of Lorem Ipsum available, but majority have suffered teration in some form, by injected
                                    humour, or randomised words which don't look even slight believable. If you are going to
                                    use a passage of Lorem Ipsum.</p>
                                <a href="{{ route('project-details') }}"
                                    class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 cursor-small tw-mt-11 tw-tracking-wider">
                                    Read More
                                    <span class=""><img src="assets/images/icons/arrow-long.svg" alt=""
                                            class=""></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ps-xl-5 ps-lg-4">
                    <div class="d-flex flex-column tw-gap-8">

                        <div class="bg-neutral-50 tw-px-8 text-center tw-py-17" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="300">
                            <div class="tw-w-95-px tw-h-95-px rounded-circle d-inline-flex">
                                <img src="assets/images/thumbs/blogger.png" alt=""
                                    class="w-100 h-100 object-fit-cover">
                            </div>
                            <h6 class="tw-text-base tw-mb-1 tw-mt-4 splitTextStyleOne cursor-big">Rosalina D. Willaim</h6>
                            <span
                                class="text-neutral-1000 tw-text-sm splitTextStyleTwo cursor-small">Blogger/Photographer</span>
                            <p class="tw-mt-5 text-neutral-1000 cursor-small">he whimsically named Egg Canvas is the design
                                director and photographer in New York. Why the nam</p>
                            <ul class="cursor-small d-flex align-items-center tw-gap-3 justify-content-center tw-mt-6">
                                <li>
                                    <a href="https://www.facebook.com"
                                        class="tw-w-11 tw-h-11 border border-neutral-200 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                        <i class="ph ph-facebook-logo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com"
                                        class="tw-w-11 tw-h-11 border border-neutral-200 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                        <i class="ph ph-x-logo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com"
                                        class="tw-w-11 tw-h-11 border border-neutral-200 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                        <i class="ph ph-instagram-logo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com"
                                        class="tw-w-11 tw-h-11 border border-neutral-200 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                        <i class="ph ph-youtube-logo"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-neutral-50 tw-px-8 tw-py-8" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <h5
                                class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 cursor-small splitTextStyleOne tw-mb-6">
                                Search Here</h5>
                            <form action="#" class="position-relative">
                                <input type="text"
                                    class="cursor-small tw-ps-4 tw-pe-12 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none flex-grow-1 border border-white focus-border-main-600 tw-duration-300"
                                    placeholder="Search here...">
                                <button type="submit"
                                    class="position-absolute top-50 tw--translate-y-50 tw-end-0 text-main-two-600 tw-text-lg d-flex tw-me-5 cursor-big">
                                    <i class="ph-bold ph-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>

                        <div class="bg-neutral-50 tw-px-8 tw-py-8" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <h5
                                class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 cursor-small splitTextStyleOne tw-mb-6">
                                Recent News</h5>
                            <div class="d-flex flex-column tw-gap-8">
                                <div class="d-flex align-items-center tw-gap-6">
                                    <a href="{{ route('project-details') }}" class="tw-rounded-md overflow-hidden flex-shrink-0">
                                        <img src="assets/images/thumbs/recent-post-img1.png" alt=""
                                            class="w-100 h-100 object-fit-cover hover-scale-2 tw-duration-500">
                                    </a>
                                    <div class="">
                                        <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                            <span class="text-main-600 tw-text-lg">
                                                <i class="ph-bold ph-calendar-dots"></i>
                                            </span>
                                            <span class="text-main-two-600 fw-medium tw-text-sm tw-text-sm">Jan
                                                23,2022</span>
                                        </div>
                                        <h6 class="tw-mt-2">
                                            <a href="{{ route('project-details') }}"
                                                class="tw-text-base line-clamp-2 text-main-two-600 hover-text-main-600 cursor-big splitTextStyleOne">Budget
                                                Issues Force The Our To Become</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center tw-gap-6">
                                    <a href="{{ route('project-details') }}" class="tw-rounded-md overflow-hidden flex-shrink-0">
                                        <img src="assets/images/thumbs/recent-post-img2.png" alt=""
                                            class="w-100 h-100 object-fit-cover hover-scale-2 tw-duration-500">
                                    </a>
                                    <div class="">
                                        <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                            <span class="text-main-600 tw-text-lg">
                                                <i class="ph-bold ph-calendar-dots"></i>
                                            </span>
                                            <span class="text-main-two-600 fw-medium tw-text-sm tw-text-sm">Jan
                                                23,2022</span>
                                        </div>
                                        <h6 class="tw-mt-2">
                                            <a href="{{ route('project-details') }}"
                                                class="tw-text-base line-clamp-2 text-main-two-600 hover-text-main-600 cursor-big splitTextStyleOne">The
                                                Best Products That Shape Fashion</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center tw-gap-6">
                                    <a href="{{ route('project-details') }}" class="tw-rounded-md overflow-hidden flex-shrink-0">
                                        <img src="assets/images/thumbs/recent-post-img3.png" alt=""
                                            class="w-100 h-100 object-fit-cover hover-scale-2 tw-duration-500">
                                    </a>
                                    <div class="">
                                        <div class="d-flex align-items-center tw-gap-2 cursor-small">
                                            <span class="text-main-600 tw-text-lg">
                                                <i class="ph-bold ph-calendar-dots"></i>
                                            </span>
                                            <span class="text-main-two-600 fw-medium tw-text-sm tw-text-sm">Jan
                                                23,2022</span>
                                        </div>
                                        <h6 class="tw-mt-2">
                                            <a href="{{ route('project-details') }}"
                                                class="tw-text-base line-clamp-2 text-main-two-600 hover-text-main-600 cursor-big splitTextStyleOne">The
                                                Best Products That Shape Fashion</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-neutral-50 tw-px-8 tw-py-8" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <h5
                                class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 cursor-small splitTextStyleOne tw-mb-6">
                                Catagories</h5>
                            <div class="d-flex flex-column tw-gap-5">
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between">
                                    Mobile Set
                                    <span class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex">
                                        03
                                    </span>
                                </a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between">
                                    Mobile Set
                                    <span class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex">
                                        03
                                    </span>
                                </a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between">
                                    Mobile Set
                                    <span class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex">
                                        03
                                    </span>
                                </a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between">
                                    Mobile Set
                                    <span class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex">
                                        03
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="bg-neutral-50 tw-px-8 tw-py-8" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <h5
                                class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 cursor-small splitTextStyleOne tw-mb-6">
                                Populer Tags</h5>
                            <div class="d-flex tw-gap-3 flex-wrap">
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block">Tourist</a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block">Traveling</a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block">Cave</a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block">Sky
                                    Dive</a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block">hill
                                    Climb</a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block">Oppos</a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block">landing
                                </a>
                                <a href="blog.html"
                                    class="cursor-big bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block">Oppos</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Blog Page section End =============================== -->
@endsection
