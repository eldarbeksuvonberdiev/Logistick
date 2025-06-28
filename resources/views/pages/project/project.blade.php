@extends('layouts.pages.base')

@section('title', 'Project')

@section('content')

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-140 tw-pt-206-px mb-0 bg-img"
        data-background-image="{{ asset('assets/images/thumbs/blog-details-img1.png') }}">
        <div class="container">
            <div class="text-center">
                <span
                    class="splitTextStyleTwo text-main-600 border-bottom border-main-600 fst-italic fw-bold tw-text-lg cursor-small">Projects</span>
                <h1 class="splitTextStyleOne text-white tw-mt-1 cursor-big"> Projects</h1>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- =============================== Project Two Section start =========================== -->
    <section class="py-140">
        <div class="container">
            <div class="masonry-layout d-flex flex-wrap gap-4">
                <div class="position-relative hover-overlay overlay-main-600 group-item">
                    <a href="{{ route('project-details') }}" class="w-100 h-100">
                        <img src="{{ asset('assets/images/thumbs/project-two-img1.png') }}"
                            class="w-100 h-100 object-fit-cover" alt="">
                    </a>
                    <a href="{{ asset('assets/images/thumbs/project-two-img1.png') }}"
                        class="cursor-big project-gallery-link position-absolute top-50 tw-start-50 tw--translate-middle  tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300 text--white tw-text-14 hover-bg-white hover-text-main-600 tw-w-114-px tw-h-114-px d-flex justify-content-center align-items-center rounded-circle  tw-delay-200">
                        <i class="ph ph-plus"></i>
                    </a>

                    <div
                        class="tw-p-54-px position-absolute bottom-0 tw-start-0 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300">
                        <h4 class="text-white tw-mb-4">
                            <a href="{{ route('project-details') }}"
                                class="text-white hover--translate-y-1 hover-text-white cursor-big splitTextStyleOne">Professional
                                Website Design</a>
                        </h4>
                        <span class="text-white cursor-small">Web Design & Development</span>
                    </div>
                </div>
                <div class="position-relative hover-overlay overlay-main-600 group-item">
                    <a href="{{ route('project-details') }}" class="w-100 h-100">
                        <img src="assets/images/thumbs/project-two-img2.png" class="w-100 h-100 object-fit-cover"
                            alt="">
                    </a>
                    <a href="assets/images/thumbs/project-two-img2.png"
                        class="cursor-big project-gallery-link position-absolute top-50 tw-start-50 tw--translate-middle  tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300 text--white tw-text-14 hover-bg-white hover-text-main-600 tw-w-114-px tw-h-114-px d-flex justify-content-center align-items-center rounded-circle  tw-delay-200">
                        <i class="ph ph-plus"></i>
                    </a>

                    <div
                        class="tw-p-54-px position-absolute bottom-0 tw-start-0 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300">
                        <h4 class="text-white tw-mb-4">
                            <a href="{{ route('project-details') }}"
                                class="text-white hover--translate-y-1 hover-text-white cursor-big splitTextStyleOne">Professional
                                Website Design</a>
                        </h4>
                        <span class="text-white cursor-small">Web Design & Development</span>
                    </div>
                </div>
                <div class="position-relative hover-overlay overlay-main-600 group-item">
                    <a href="{{ route('project-details') }}" class="w-100 h-100">
                        <img src="assets/images/thumbs/project-two-img3.png" class="w-100 h-100 object-fit-cover"
                            alt="">
                    </a>
                    <a href="assets/images/thumbs/project-two-img3.png"
                        class="cursor-big project-gallery-link position-absolute top-50 tw-start-50 tw--translate-middle  tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300 text--white tw-text-14 hover-bg-white hover-text-main-600 tw-w-114-px tw-h-114-px d-flex justify-content-center align-items-center rounded-circle  tw-delay-200">
                        <i class="ph ph-plus"></i>
                    </a>

                    <div
                        class="tw-p-54-px position-absolute bottom-0 tw-start-0 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300">
                        <h4 class="text-white tw-mb-4">
                            <a href="{{ route('project-details') }}"
                                class="text-white hover--translate-y-1 hover-text-white cursor-big splitTextStyleOne">Professional
                                Website Design</a>
                        </h4>
                        <span class="text-white cursor-small">Web Design & Development</span>
                    </div>
                </div>
                <div class="position-relative hover-overlay overlay-main-600 group-item">
                    <a href="{{ route('project-details') }}" class="w-100 h-100">
                        <img src="assets/images/thumbs/project-two-img4.png" class="w-100 h-100 object-fit-cover"
                            alt="">
                    </a>
                    <a href="assets/images/thumbs/project-two-img4.png"
                        class="cursor-big project-gallery-link position-absolute top-50 tw-start-50 tw--translate-middle  tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300 text--white tw-text-14 hover-bg-white hover-text-main-600 tw-w-114-px tw-h-114-px d-flex justify-content-center align-items-center rounded-circle  tw-delay-200">
                        <i class="ph ph-plus"></i>
                    </a>

                    <div
                        class="tw-p-54-px position-absolute bottom-0 tw-start-0 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300">
                        <h4 class="text-white tw-mb-4">
                            <a href="{{ route('project-details') }}"
                                class="text-white hover--translate-y-1 hover-text-white cursor-big splitTextStyleOne">Professional
                                Website Design</a>
                        </h4>
                        <span class="text-white cursor-small">Web Design & Development</span>
                    </div>
                </div>
                <div class="position-relative hover-overlay overlay-main-600 group-item">
                    <a href="{{ route('project-details') }}" class="w-100 h-100">
                        <img src="assets/images/thumbs/project-two-img5.png" class="w-100 h-100 object-fit-cover"
                            alt="">
                    </a>
                    <a href="assets/images/thumbs/project-two-img5.png"
                        class="cursor-big project-gallery-link position-absolute top-50 tw-start-50 tw--translate-middle  tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300 text--white tw-text-14 hover-bg-white hover-text-main-600 tw-w-114-px tw-h-114-px d-flex justify-content-center align-items-center rounded-circle  tw-delay-200">
                        <i class="ph ph-plus"></i>
                    </a>

                    <div
                        class="tw-p-54-px position-absolute bottom-0 tw-start-0 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300">
                        <h4 class="text-white tw-mb-4">
                            <a href="{{ route('project-details') }}"
                                class="text-white hover--translate-y-1 hover-text-white cursor-big splitTextStyleOne">Professional
                                Website Design</a>
                        </h4>
                        <span class="text-white cursor-small">Web Design & Development</span>
                    </div>
                </div>
                <div class="position-relative hover-overlay overlay-main-600 group-item">
                    <a href="{{ route('project-details') }}" class="w-100 h-100">
                        <img src="assets/images/thumbs/project-two-img6.png" class="w-100 h-100 object-fit-cover"
                            alt="">
                    </a>
                    <a href="assets/images/thumbs/project-two-img6.png"
                        class="cursor-big project-gallery-link position-absolute top-50 tw-start-50 tw--translate-middle  tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300 text--white tw-text-14 hover-bg-white hover-text-main-600 tw-w-114-px tw-h-114-px d-flex justify-content-center align-items-center rounded-circle  tw-delay-200">
                        <i class="ph ph-plus"></i>
                    </a>

                    <div
                        class="tw-p-54-px position-absolute bottom-0 tw-start-0 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-duration-300">
                        <h4 class="text-white tw-mb-4">
                            <a href="{{ route('project-details') }}"
                                class="text-white hover--translate-y-1 hover-text-white cursor-big splitTextStyleOne">Professional
                                Website Design</a>
                        </h4>
                        <span class="text-white cursor-small">Web Design & Development</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Project Two Section End =========================== -->

    @include('components.pages.map')

@endsection
