<div>
    <div id="kt_header" class="header">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 pb-5 pb-lg-0 pt-7 pt-lg-0"
                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <!--begin::Heading-->
                <h1 class="d-flex flex-column text-gray-900 fw-bold my-0 fs-1">Our Games
                    <small class="text-muted fs-6 fw-semibold ms-1 pt-1">Commission Rates:
                        10% commission will be charged on battle amount.बैटल राशि पर 10% कमीशन लिया जाएगा।</small>
                        <br/>
                    <small class="text-muted fs-6 fw-semibold ms-1 pt-1" style="color: red !important">रेफर करें और अपनी रेफ़रल जीत का 1% कमाएँ।
                        यदि आपका रेफ़रल 10000/- जीतता है, तो आपको 100/- मिलेंगे। हमारे साथ खूब कमाएँ।</small>
                        <br/>
                    <small class="text-muted fs-6 fw-semibold ms-1 pt-1" style="color: red !important">Refer And Earn 1% Of Your Refferal Win.
                        If Your Referral Win 10000/-, You Will Get 100/- . Earn Big With Us.</small>
                </h1>
                <!--end::Heading-->
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
                <a href="/" class="d-flex align-items-center">
                    <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-shrink-0">

                <div class="d-flex align-items-center ms-3 ms-lg-4">
                    <!--begin::Drawer toggle-->
                    <div class="d-flex flex-stack" style="border: 0.5px solid grey;">
                        <!--begin::Title-->
                        <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Rs
                            {{ auth()->user()->wallet_balance ?? '' }}</a>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <button type="button"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary">
                            <i class="ki-duotone ki-bank text-danger">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Drawer toggle-->
                </div>
                <!--end::Activities-->
                <!--begin::Chat-->
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
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-fluid" id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 g-lg-10">
                <!--begin::Col-->
                <div class="col-xxl-6 col-md-6 mb-xxl-10">
                    <a href="{{ route('battels', ['id' => encrypt(1), 'tabId' => 1]) }}">
                        <div class="card card-flush h-xl-100">
                            <!--begin::Body-->
                            <div class="card-body text-center pb-5">
                                <!--begin::Overlay-->
                                <div class="d-flex align-items-end flex-stack mb-1">
                                    <!--begin::Title-->
                                    <div class="text-start">
                                        <span
                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Ludo
                                            Classic Only</span>
                                        <span class="text-gray-500 mt-1 fw-bold fs-6 animate__bounce">LIVE</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Total-->
                                    <span class="text-gray-600 text-end fw-bold fs-6">Rs 100 - 500</span>
                                    <!--end::Total-->
                                </div>
                                <img class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;" src="/some.jpeg" />
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer d-flex flex-stack pt-0">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary flex-shrink-0 me-2"
                                    href="{{ route('battels', ['id' => encrypt(1), 'tabId' => 1]) }}">Play Now</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                {{-- <a class="btn btn-sm btn-light flex-shrink-0"
                                href="apps/ecommerce/sales/listing.html">View Item</a> --}}
                                <!--end::Link-->
                            </div>
                            <!--end::Footer-->
                        </div>
                    </a>
                </div>
                <div class="col-xxl-6 col-md-6 mb-xxl-10">
                    <a href="{{ route('battels', ['id' => encrypt(2), 'tabId' => 1]) }}">
                        <div class="card card-flush h-xl-100">
                            <!--begin::Body-->
                            <div class="card-body text-center pb-5">
                                <!--begin::Overlay-->
                                <div class="d-flex align-items-end flex-stack mb-1">
                                    <!--begin::Title-->
                                    <div class="text-start">
                                        <span
                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Ludo
                                            Classic Only</span>
                                        <span class="text-gray-500 mt-1 fw-bold fs-6">LIVE</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Total-->
                                    <span class="text-gray-600 text-end fw-bold fs-6">Rs 500 - 25000</span>
                                    <!--end::Total-->
                                </div>
                                <img class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                                    style="height: 266px;" src="/assets/ludo-rich-mode-1.jpeg" />


                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer d-flex flex-stack pt-0">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary flex-shrink-0 me-2"
                                    href="{{ route('battels', ['id' => encrypt(2), 'tabId' => 1]) }}">Play Now</a>
                            </div>
                            <!--end::Footer-->
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!--end::Container-->
    </div>

</div>
