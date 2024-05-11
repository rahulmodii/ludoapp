<!DOCTYPE html>
<html lang="en">


<head>
    <title>ludogameclub</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="ludogameclub, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="ludogameclub - The World's #1 Selling Bootstrap Admin Template by ludogamesclub" />
    <meta property="og:url" content="https://ludogamesclub.com/ludogameclub" />
    <meta property="og:site_name" content="ludogameclub by ludogamesclub" />
    <link rel="canonical" href="https://preview.ludogamesclub.com/ludogameclub8" />
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />


    <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />


    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/animate.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    {{-- @livewireScripts() --}}
    @livewireStyles()
</head>



<body id="kt_body">

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



    <div class="d-flex flex-column flex-root">

        <div class="page d-flex flex-row flex-column-fluid">

            <div id="kt_aside" class="aside pt-7 pb-4 pb-lg-7 pt-lg-17" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">

                <div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-17 mx-auto" id="kt_aside_logo">

                    <a href="/">

                        <img alt="Logo" src="{{ logo() }}" class="h-30px logo theme-light-show" />
                        <img alt="Logo" src="{{ logo() }}" class="h-30px logo theme-dark-show" />
                    </a>

                </div>


                <div class="aside-user mb-5 mb-lg-10" id="kt_aside_user">

                    <div class="d-flex align-items-center flex-column">

                        <div class="symbol symbol-75px mb-4">
                            <img src="{{ auth()->user()->profile }}" alt="" />
                        </div>

                        <div class="text-center">

                            <a href="#"
                                class="text-gray-800 text-hover-primary fs-4 fw-bolder animate__bounce">{{ auth()->user()->name ?? '' }}</a>


                            <span class="text-gray-600 fw-semibold d-block fs-7 mb-1">Cash
                                {{ auth()->user()->wallet_balance ?? '' }}.00</span>

                        </div>

                    </div>

                </div>
                @include('components.sidebar')
            </div>


            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                @yield('content')

                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">

                    <div class="container-fluid d-flex flex-column flex-md-row flex-stack">

                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-gray-500 fw-semibold me-1">Created by</span>
                            <a href="https://ludogamesclub.com" target="_blank"
                                class="text-muted text-hover-primary fw-semibold me-2 fs-6">ludogamesclub</a>
                        </div>


                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="{{ route('terms') }}" class="menu-link px-2">Terms & Condition</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('privacy') }}" class="menu-link px-2">Privacy</a>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>



    @livewireScripts()

    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
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

        Livewire.on('refreshPage', (event) => {
            window.location.reload()
        })
    </script>
</body>

</html>
