<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>LudoKing - The World's #1 Selling Bootstrap Admin Template by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="LudoKing, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="LudoKing - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/LudoKing" />
    <meta property="og:site_name" content="LudoKing by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/LudoKing8" />
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//assets/animate.css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside pt-7 pb-4 pb-lg-7 pt-lg-17" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-17 mx-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="/">
                        <img alt="Logo" src="/assets/media/logos/default.svg" class="h-30px logo theme-light-show" />
                        <img alt="Logo" src="/assets/media/logos/default-dark.svg"
                            class="h-30px logo theme-dark-show" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside user-->
                <div class="aside-user mb-5 mb-lg-10" id="kt_aside_user">
                    <!--begin::User-->
                    <div class="d-flex align-items-center flex-column">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-75px mb-4">
                            <img src="/assets/media/avatars/300-1.jpg" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Info-->
                        <div class="text-center">
                            <!--begin::Username-->
                            <a href="pages/user-profile/overview.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bolder animate__bounce">Rahul Modi</a>
                            <!--end::Username-->
                            <!--begin::Description-->
                            <span class="text-gray-600 fw-semibold d-block fs-7 mb-1">Cash 0.00</span>
                            <!--end::Description-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Aside user-->
                <!--begin::Aside menu-->
				@include('components.sidebar')
                <!--end::Aside menu-->
                <!--begin::Footer-->
                
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div id="kt_header" class="header">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 pb-5 pb-lg-0 pt-7 pt-lg-0"
                            data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                            <!--begin::Heading-->
                            <h1 class="d-flex flex-column text-gray-900 fw-bold my-0 fs-1">Battles
                                <small class="text-muted fs-6 fw-semibold ms-1 pt-1">Play a lot of games</small>
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
                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px"
                                data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                                data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                                data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle"
                                    class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                    <div
                                        class="d-flex btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px">
                                        <i class="ki-duotone ki-magnifier fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <div data-kt-search-element="content"
                                    class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                        <!--begin::Recently viewed-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-350px">
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users
                                                </h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-6.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Karina Clark</span>
                                                        <span class="fs-7 fw-semibold text-muted">Marketing
                                                            Manager</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-2.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                        <span class="fs-7 fw-semibold text-muted">Software
                                                            Engineer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-9.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Ana Clark</span>
                                                        <span class="fs-7 fw-semibold text-muted">UI/UX
                                                            Designer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-14.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                        <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-11.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                        <span class="fs-7 fw-semibold text-muted">System
                                                            Administrator</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                                                    Customers</h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                        <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                        <span class="fs-7 fw-semibold text-muted">Web
                                                            Development</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                        <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                        <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="assets/media/svg/brand-logos/tower.svg" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                        <span class="fs-7 fw-semibold text-muted">Google
                                                            Adwords</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                                                    Projects</h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-notepad fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Si-Fi Project by AU
                                                            Themes</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-frame fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Shopix Mobile App
                                                            Planning</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-message-text-2 fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                            Discussion</span>
                                                        <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-profile-circle fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Dashboard Analitics
                                                            Launch</span>
                                                        <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Recently viewed-->
                                        <div class="" data-kt-search-element="main">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-stack fw-semibold mb-4">
                                                <!--begin::Label-->
                                                <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                <!--end::Label-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex" data-kt-search-element="toolbar">
                                                    <!--begin::Preferences toggle-->
                                                    <div data-kt-search-element="preferences-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                                                        title="Show search preferences">
                                                        <i class="ki-duotone ki-setting-2 fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </div>
                                                    <!--end::Preferences toggle-->
                                                    <!--begin::Advanced search toggle-->
                                                    <div data-kt-search-element="advanced-options-form-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                                        data-bs-toggle="tooltip" title="Show more search options">
                                                        <i class="ki-duotone ki-down fs-2"></i>
                                                    </div>
                                                    <!--end::Advanced search toggle-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-325px">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-laptop fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                            by Keenthemes</a>
                                                        <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-simple fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                            API Project Meeting</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                            Monitoring App Launch</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                            Reference FAQ</a>
                                                        <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-sms fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                            App Development</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-bank fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                            Mobile App</a>
                                                        <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                            UI Design" Launch</a>
                                                        <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Icon-->
                                            <div class="pt-10 pb-10">
                                                <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Message-->
                                            <div class="pb-15 fw-semibold">
                                                <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                <div class="text-muted fs-7">Please try again with a different query
                                                </div>
                                            </div>
                                            <!--end::Message-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-sm form-control-solid"
                                                placeholder="Contains the word" name="query" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::Radio group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="has"
                                                        checked="checked" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="users" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="orders" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="projects" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Radio group-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="assignedto"
                                                class="form-control form-control-sm form-control-solid" placeholder="Assigned to"
                                                value="" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="collaborators"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Collaborators" value="" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::Radio group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment" value="has"
                                                        checked="checked" />
                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has
                                                        attachment</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment" value="any" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Radio group-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <select name="timezone" aria-label="Select a Timezone" data-control="select2"
                                                data-dropdown-parent="#kt_header_search" data-placeholder="date_period"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="next">Within the next</option>
                                                <option value="last">Within the last</option>
                                                <option value="between">Between</option>
                                                <option value="on">On</option>
                                            </select>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-8">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <input type="number" name="date_number"
                                                    class="form-control form-control-sm form-control-solid" placeholder="Lenght"
                                                    value="" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="date_typer" aria-label="Select a Timezone" data-control="select2"
                                                    data-dropdown-parent="#kt_header_search" data-placeholder="Period"
                                                    class="form-select form-select-sm form-select-solid">
                                                    <option value="days">Days</option>
                                                    <option value="weeks">Weeks</option>
                                                    <option value="months">Months</option>
                                                    <option value="years">Years</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                            <a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary"
                                                data-kt-search-element="advanced-options-form-search">Search</a>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Preferences-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="pb-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate
                                                    Programs</span>
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end pt-7">
                                            <button type="reset"
                                                class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                data-kt-search-element="preferences-dismiss">Cancel</button>
                                            <button type="submit" class="btn btn-sm fw-bold btn-primary">Save
                                                Changes</button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Preferences-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Search-->
                            <!--begin::Activities-->
                            <div class="d-flex align-items-center ms-3 ms-lg-4">
                                <!--begin::Drawer toggle-->
                                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px"
                                    id="kt_activities_toggle">
                                    <i class="ki-duotone ki-notification-bing fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
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
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
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
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
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
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
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
				@yield('content')

                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-column flex-md-row flex-stack">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-gray-500 fw-semibold me-1">Created by</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-muted text-hover-primary fw-semibold me-2 fs-6">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank"
                                    class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://1.envato.market/EA4JP" target="_blank"
                                    class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
      
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
                    <i class="ki-duotone ki-arrow-right fs-3 text-primary">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i></a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->
 
    <!--end::Chat drawer-->
    <!--begin::Chat drawer-->

    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--end::Main-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    
    <script>
        var hostUrl = "/assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    {{-- <script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/index.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/xy.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/percent.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/radar.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/map.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script> --}}
    {{-- <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script> --}}
    {{-- <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script> --}}
    {{-- <script src="/assets/js/widgets.bundle.js"></script> --}}
    {{-- <script src="/assets/js/custom/widgets.js"></script> --}}
    {{-- <script src="/assets/js/custom/apps/chat/chat.js"></script> --}}
    {{-- <script src="/assets/js/custom/utilities/modals/users-search.js"></script> --}}
</body>

</html>
