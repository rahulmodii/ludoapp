<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by ludogamesclub" />
    <meta property="og:url" content="https://ludogamesclub.com/metronic" />
    <meta property="og:site_name" content="Metronic by ludogamesclub" />
    <link rel="canonical" href="https://preview.ludogamesclub.com/metronic8" />
    <link rel="shortcut icon" href="/favicon_io/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center">
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
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <!--begin::Image-->

                    <!--end::Image-->
                    <!--begin::Title-->
                    {{-- <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7"></h1> --}}
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="text-gray-600 fs-base text-center fw-semibold">

                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <!--begin::Wrapper-->
                <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                            <!--begin::Form-->
                            <form class="form w-100" action="{{ route('sendotp') }}" method="POST">
                                @csrf
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                                        src="{{ loginImage() }}" alt="" />
                                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                                        src="{{ loginImage() }}" alt="" />
                                    <h1 class="text-gray-900 fw-bolder mb-3">Welcome to App</h1>
                                    <h1 class="text-gray-900 fw-bolder mb-3">Login In</h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6"> By proceeding, you agree to our Terms
                                        of Use, Privacy Policy and that you are 18 years or older.
                                        You are not playing from Assam, Odisha, Nagaland, Sikkim, Meghalaya, Andhra
                                        Pradesh, or
                                        Telangana.</div>
                                    <!--end::Subtitle=-->
                                </div>

                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="hidden" placeholder="" name="referral"
                                        value="{{ request()->get('referral') }}" autocomplete="off"
                                        class="form-control bg-transparent" />
                                    <input type="text" placeholder="Mobile" name="mobile" autocomplete="off"
                                        class="form-control bg-transparent" />
                                    <!--end::Email-->
                                </div>
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Sign In</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Sign up-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Footer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Languages-->
                            <div class="me-10">

                            </div>
                            <!--end::Languages-->
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold text-primary fs-base gap-5">
                                <a href="{{ route('terms') }}" target="_blank">Terms</a>
                                <a href="{{ route('privacy') }}" target="_blank">Privacy</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    {{-- <script>
        var hostUrl = "assets/";
    </script> --}}
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
</body>
<!--end::Body-->

</html>
