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
                <h1 class="d-flex flex-column text-gray-900 fw-bold my-0 fs-1">Notifications</h1>
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
                    <img alt="Logo" src="{{ logo() }}" class="h-30px" />
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
        <div class="card card-flush ">
            <!--begin::Header-->
            <div class="card-header pt-5">        
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-900">Latest activities</span>
                    <span class="text-gray-500 pt-2 fw-semibold fs-6"></span>
                </h3>
                <!--end::Title-->
        
                <!--begin::Toolbar-->
                <div class="card-toolbar">            
                    <!--begin::Menu-->
                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">                
                        <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                             
                    </button>
        
                    
        <!--begin::Menu 2-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
            </div>
            <!--end::Menu item-->
        
            <!--begin::Menu separator-->
            <div class="separator mb-3 opacity-75"></div>
            <!--end::Menu separator-->
        
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    New Ticket
                </a>
            </div>
            <!--end::Menu item-->
            
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    New Customer
                </a>
            </div>
            <!--end::Menu item-->
        
            <!--begin::Menu item-->
            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                <!--begin::Menu item-->
                <a href="#" class="menu-link px-3">
                    <span class="menu-title">New Group</span>
                    <span class="menu-arrow"></span>
                </a>
                <!--end::Menu item-->
        
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            Admin Group
                        </a>
                    </div>
                    <!--end::Menu item-->
        
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            Staff Group
                        </a>
                    </div>
                    <!--end::Menu item-->
        
                    <!--begin::Menu item-->            
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            Member Group
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
            </div>
            <!--end::Menu item-->
        
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    New Contact
                </a>
            </div>
            <!--end::Menu item-->
        
            <!--begin::Menu separator-->
            <div class="separator mt-3 opacity-75"></div>
            <!--end::Menu separator-->
        
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content px-3 py-3">
                    <a class="btn btn-primary  btn-sm px-4" href="#">
                        Generate Reports
                    </a>
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu 2-->
         
                    <!--end::Menu-->             
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
        
            <!--begin::Body-->
            <div class="card-body pt-6">
                <!--begin::Timeline-->
                <div class="timeline-label">
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                        <!--end::Label-->
        
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3"><span class="path1"></span><span class="path2"></span></i>  
                        </div>
                        <!--end::Badge-->
        
                        <!--begin::Text-->
                        <div class="fw-semibold text-gray-700 ps-3 fs-7">
                            Outlines keep you honest. Indulging in poorly driving and keep structure
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
        
                    <!--begin::Item-->
                    <div class="timeline-item d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                        <!--end::Label-->
        
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3"><span class="path1"></span><span class="path2"></span></i> 
                        </div>
                        <!--end::Badge-->
        
                        <!--begin::Content-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 px-3">AEOL meeting with</span>
        
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px me-3">
                                <img src="/metronic8/demo15/assets/media/avatars/300-1.jpg" alt="">     
                            </div>
                            <!--end::Avatar-->
        
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="/metronic8/demo15/assets/media/avatars/300-2.jpg" alt="">     
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
        
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                        <!--end::Label-->
        
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3"><span class="path1"></span><span class="path2"></span></i> 
                        </div>
                        <!--end::Badge-->
        
                        <!--begin::Desc-->
                        <div class="timeline-content fw-bold text-gray-800 ps-3">
                            Make deposit
                            <a href="#" class="text-primary">USD 700</a>.
                            to ESL
                        </div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->
        
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                        <!--end::Label-->
        
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3"><span class="path1"></span><span class="path2"></span></i> 
                        </div>
                        <!--end::Badge-->
        
                        <!--begin::Text-->
                        <div class="fw-semibold text-gray-700 ps-3 fs-7">
                            Outlines keep you honest. Indulging in poorly driving and keep structure keep you honest great
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
        
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                        <!--end::Label-->
        
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3"><span class="path1"></span><span class="path2"></span></i> 
                        </div>
                        <!--end::Badge-->
        
                        <!--begin::Desc-->
                        <div class="timeline-content fw-semibold text-gray-800 ps-3">
                            New order placed <a href="#" class="text-primary">#XF-2356</a>.
                        </div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->
        
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                        <!--end::Label-->
        
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3"><span class="path1"></span><span class="path2"></span></i> 
                        </div>
                        <!--end::Badge-->
        
                        <!--begin::Text-->
                        <div class="fw-semibold text-gray-700 ps-3 fs-7">
                            Outlines keep you honest. Indulging in poorly driving and keep structure
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->    
                    
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                        <!--end::Label-->
        
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3"><span class="path1"></span><span class="path2"></span></i> 
                        </div>
                        <!--end::Badge-->
        
                        <!--begin::Desc-->
                        <div class="timeline-content fw-bold text-gray-800 ps-3">
                            Make deposit
                            <a href="#" class="text-primary">USD 700</a>.
                            to ESL
                        </div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Timeline-->
            </div>
            <!--end: Card Body-->
        </div>
    </div>
@endsection
