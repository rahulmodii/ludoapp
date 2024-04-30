@extends('components.layouts.app')
@section('content')
    <div id="kt_header" class="header">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 pb-5 pb-lg-0 pt-7 pt-lg-0"
                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <!--begin::Heading-->
                <h1 class="d-flex flex-column text-gray-900 fw-bold my-0 fs-1">Wallet</h1>
                <!--end::Heading-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
                    <li class="breadcrumb-item text-muted">Utilities</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title=-->
            <!--begin::Wrapper-->
            <div class="d-flex d-lg-none align-items-center ms-n4 me-2">
                <!--begin::Aside mobile toggle-->
                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-1 mt-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Aside mobile toggle-->
                <!--begin::Logo-->
                <a href="index.html" class="d-flex align-items-center">
                    <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-shrink-0">

                <div class="d-flex d-none align-items-center ms-3 ms-lg-4">
                    <!--begin::Drawer wrapper-->
                    <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px position-relative"
                        id="kt_drawer_chat_toggle">
                        <i class="ki-duotone ki-message-text-2 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <!--begin::Bullet-->
                        <span
                            class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                        <!--end::Bullet-->
                    </div>
                    <!--end::Drawer wrapper-->
                </div>
                <!--end::Chat-->
                <!--begin::Theme mode-->
                <div class="d-flex align-items-center ms-3 ms-lg-4">
                    <!--begin::Menu toggle-->
                    <a href="#"
                        class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px"
                        data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                            <span class="path9"></span>
                            <span class="path10"></span>
                        </i>
                        <i class="ki-duotone ki-moon theme-dark-show fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                    <!--begin::Menu toggle-->
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-night-day fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Light</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-moon fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Dark</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-screen fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">System</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Theme mode-->
                <!--begin::Sidebar Toggler-->
                <!--end::Sidebar Toggler-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <div class="container-fluid" id="kt_content_container">
        <!--begin::Card-->
        <div style="display: flex;flex-direction:column;gap:20px">
            <div class="card border-0 h-md-100" data-theme="light"
                style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row align-items-center h-100">
                        <!--begin::Col-->
                        <div class="col-7 ps-xl-13">
                            <!--begin::Title-->
                            <div class="text-white mb-6 pt-6">
                                <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">DEPOSIT CASH</span>
                                <span class="fs-2qx fw-bold"><img height="26px" width="26px" src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/global-rupeeIcon.png" alt="">
                                    0.00</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">Can be used to play Tournaments & Battles.
                                Cannot be withdrawn to Paytm or Bank.</span>
                            <!--end::Text-->
                            <!--begin::Items-->
                           
                            <!--end::Items-->
                            <!--begin::Action-->
                            <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                                <a href="#" class="btn btn-success flex-shrink-0 me-lg-2" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_upgrade_plan">Add Cash</a>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-5 pt-10">
                            <!--begin::Illustration-->
                            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
                                style="background-image:url('assets/media/svg/illustrations/easy/5.svg"></div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            <div class="card border-0 h-md-100" data-theme="light"
                style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row align-items-center h-100">
                        <!--begin::Col-->
                        <div class="col-7 ps-xl-13">
                            <!--begin::Title-->
                            <div class="text-white mb-6 pt-6">
                                <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">WINNINGS CASH</span>
                                <span class="fs-2qx fw-bold"><img height="26px" width="26px" src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/global-rupeeIcon.png" alt="">
                                    0.00</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">Can be withdrawn to Paytm or Bank. Can be used to play Tournaments & Battles.</span>
                           
                            <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                                <a href="#" class="btn btn-success flex-shrink-0 me-lg-2" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_upgrade_plan">WITHDRAW</a>
                                {{-- <a href="#" class="btn btn-primary flex-shrink-0"
                                    style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_app">Read Guides</a> --}}
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-5 pt-10">
                            <!--begin::Illustration-->
                            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
                                style="background-image:url('assets/media/svg/illustrations/easy/5.svg"></div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            
        </div>
        <!--end::Card-->
    </div>
@endsection
