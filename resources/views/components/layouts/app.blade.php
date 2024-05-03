<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>LudoKing</title>
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
    <link rel="stylesheet" href="/assets/animate.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!--end::Global Stylesheets Bundle-->
    @livewireScripts()
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
                        <img alt="Logo" src="/assets/media/logos/default.svg"
                            class="h-30px logo theme-light-show" />
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
                            <span class="text-gray-600 fw-semibold d-block fs-7 mb-1">Cash
                                {{ auth()->user()->wallet_balance ?? '' }}.00</span>
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
                                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
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
    @livewireScripts()
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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

    <script>
        // $wire.on('message', () => {
        //     console.log("here")

        // });

        Livewire.on('message', (event) => {
            Toastify({
                text: event,
                duration: 2000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                callback: function() {
                    window.location.reload()
                }
            }).showToast();

            // $("#kt_add_cash").modal('close')
        });

        Livewire.on('messageNew', (event) => {
            Toastify({
                text: event,
                duration: 2000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        })
    </script>
</body>

</html>
