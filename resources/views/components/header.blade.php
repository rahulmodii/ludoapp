<div>
    <div id="kt_header" class="header">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 pb-5 pb-lg-0 pt-7 pt-lg-0"
                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <!--begin::Heading-->
                <h1 class="d-flex flex-column text-gray-900 fw-bold my-0 fs-1">{{ $title ?? '' }}
                    <small class="text-muted fs-6 fw-semibold ms-1 pt-1">Section for {{ $title ?? '' }} management</small>
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
                    <img alt="Logo" src="{{ logo() }}" class="h-30px" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-shrink-0">
                <!--begin::Search-->
    
                <!--end::Search-->
                <!--begin::Activities-->
                <div class="d-flex align-items-center ms-3 ms-lg-4">
                    <!--begin::Drawer toggle-->
                    <div class="d-flex flex-stack" style="border: 0.5px solid grey;">
                        <!--begin::Title-->
                        @if (auth()->user()->role != 5)
                            <a href="{{ route('wallet') }}" class="text-primary opacity-75-hover fs-6 fw-semibold">Rs
                                {{ auth()->user()->wallet_balance ?? '' }}</a>
                       
    
                        <!--end::Title-->
                        <!--begin::Action-->
                        <a href="{{ route('wallet') }}"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary">
                            <i class="ki-duotone ki-bank text-danger">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                        @endif
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
    <div class="container-fluid d-flex">
        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  flex-shrink-0 p-6" style="width: 100%">
            <!--begin::Icon-->
            <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>
            <!--end::Icon-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                <!--begin::Content-->
                <div class="mb-3 mb-md-0 fw-semibold">
                    <h4 class="text-gray-900 fw-bold">{{ supportData()->message_title }}</h4>
                    <div class="fs-6 text-gray-700 pe-7">{{ supportData()->message_description }}</div>
                </div>
                <!--end::Content-->
                <!--begin::Action-->
                {{-- <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a> --}}
                <!--end::Action-->
            </div>
            <!--end::Wrapper-->
        </div>
    </div>

</div>

