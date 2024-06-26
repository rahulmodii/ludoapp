<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title></title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by ludogamesclub" />
    <meta property="og:url" content="https://ludogamesclub.com/metronic" />
    <meta property="og:site_name" content="Metronic by ludogamesclub" />
    <link rel="canonical" href="https://preview.ludogamesclub.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center">
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
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('/bgimage.jpeg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg10-dark.jpeg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-lg-row-fluid">
                

            </div>


            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">

                <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">

                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">

                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">

                            <form class="form w-100 mb-13" method="POST" action="{{ route('verifyhandel') }}">
                                @csrf
                                <div class="text-center mb-10">
                                    <img alt="Logo" class="mh-125px" src="assets/media/svg/misc/smartphone-2.svg" />
                                </div>


                                <div class="text-center mb-10">

                                    <h1 class="text-gray-900 mb-3">Verify Otp</h1>


                                    <div class="text-muted fw-semibold fs-5 mb-5">Enter the verification code we sent to
                                    </div>

                                    @php
                                        $hiddenDigits = '****' . substr(request()->phone, 6, 4);
                                    @endphp
                                    <div class="fw-bold text-gray-900 fs-3">{{ $hiddenDigits ?? '' }}</div>

                                </div>


                                <div class="mb-10">
                                    @if (session()->has('message'))
                                    <div class="fw-bold text-start t fs-6 mb-1 ms-1" style="color:red !important;">Wrong Otp Try Again</div>
                                    @endif

                                    <div class="fw-bold text-start text-gray-900 fs-6 mb-1 ms-1">Type your 6 digit
                                        security code</div>


                                    <div class="d-flex flex-wrap flex-stack">
                                        <input type="text" name="code_1" class="form-control" value="" />
                                    </div>

                                </div>


                                <div class="d-flex flex-center">
                                    <button type="submit" class="btn btn-lg btn-primary fw-bold">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>

                            </form>


                            <div class="text-center fw-semibold fs-5">
                                {{-- <span class="text-muted me-1">Didn’t get the code ?</span> --}}
                                {{-- <a href="#" class="link-primary fs-5 me-1">Resend</a> --}}
                                {{-- <span class="text-muted me-1">or</span> --}}
                                {{-- <a href="#" class="link-primary fs-5">Call Us</a> --}}
                            </div>

                        </div>


                        <div class="w-lg-500px d-flex flex-stack">

                            <div class="me-10">



                            </div>


                            <div class="d-flex fw-semibold text-primary fs-base gap-5">
                                {{-- <a href="pages/team.html" target="_blank">Terms</a> --}}
                                {{-- <a href="pages/pricing/column.html" target="_blank">Plans</a> --}}
                                {{-- <a href="pages/contact.html" target="_blank">Contact Us</a> --}}
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
