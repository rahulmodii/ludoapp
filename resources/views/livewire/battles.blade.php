<div>
    <div class="row gy-5 g-xl-10">
        <div class="col-xl-1"></div>
        <div class="col-10">
            <div class="card card-flush">
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Contact groups-->
                    <div class="d-flex flex-column gap-5">
                        <!--begin::Contact group-->
                        <!--begin::Separator-->
                        <!--begin::Add contact group-->
                        <label class="fs-6 fw-semibold form-label">Start New Game</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-solid" placeholder="Amount"
                                wire:model="amount">
                        </div>
                        <!--end::Add contact group-->
                        <!--begin::Separator-->
                        <div class="separator my-7"></div>
                        <!--begin::Separator-->
                        <!--begin::Add new contact-->
                        <button type="button" class="btn btn-primary w-100" wire:click="setAmount">Set</button>
                        <!--end::Add new contact-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <div class="col-xl-1"></div>
        </div>
        <div class="row gy-5 g-xl-10">
            <div class="col-xl-1"></div>
            <div class="col-xl-10 mb-xl-10">
                <!--begin::List widget 10-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Battles</span>
                            {{-- <span class="text-gray-500 mt-1 fw-semibold fs-6">59 Active Shipments</span> --}}
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="tooltip"
                                data-bs-dismiss="click" data-bs-custom-class="tooltip-inverse"
                                data-bs-original-title="Logistics App is coming soon" data-kt-initialized="1">Ludo
                                Rules</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9" role="tablist">
                            <!--begin::Item-->
                            <li class="nav-item col-6 mx-0 p-0" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100 active"
                                    data-bs-toggle="pill" href="#kt_list_widget_10_tab_1" aria-selected="false"
                                    role="tab" tabindex="-1">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Open Battles</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item col-6 mx-0 px-0" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                    data-bs-toggle="pill" href="#kt_list_widget_10_tab_2" aria-selected="false"
                                    role="tab" tabindex="-1">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Running Battles</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <!--end::Item-->
                            <!--begin::Bullet-->
                            <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                            <!--end::Bullet-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_list_widget_10_tab_1" role="tabpanel">
                                <div class="card h-md-100">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Open Battles</span>
                                            <span class="text-muted mt-1 fw-semibold fs-7"></span>
                                        </h3>
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-sm btn-light">Rules</a>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-7 px-0">

                                        <div class="tab-content mb-2 px-9">

                                            <div class="tab-pane fade show active"
                                                id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
                                                <!--begin::Wrapper-->
                                                <div wire:poll>
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::Bullet-->
                                                        <span data-kt-element="bullet"
                                                            class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Info-->
                                                        <div class="flex-grow-1 me-5">
                                                            <!--begin::Time-->
                                                            <div class="text-gray-800 fw-semibold fs-2">CHALLENGE FROM
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Description-->
                                                            <div class="text-gray-700 fw-semibold fs-6">Entry Fees:100
                                                            </div>
                                                            <!--end::Description-->
                                                            <!--begin::Link-->
                                                            <div class="text-gray-700 fw-semibold fs-6">Prize Fees
                                                                <!--begin::Name-->
                                                                <a href="#"
                                                                    class="text-primary opacity-75-hover fw-semibold">200</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Action-->
                                                        <a href="#" class="btn btn-sm btn-primary">Play</a>
                                                        <!--end::Action-->
                                                    </div>

                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::Bullet-->
                                                        <span data-kt-element="bullet"
                                                            class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Info-->
                                                        <div class="flex-grow-1 me-5">
                                                            <!--begin::Time-->
                                                            <div class="text-gray-800 fw-semibold fs-2">CHALLENGE FROM
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Description-->
                                                            <div class="text-gray-700 fw-semibold fs-6">Entry Fees:100
                                                            </div>
                                                            <!--end::Description-->
                                                            <!--begin::Link-->
                                                            <div class="text-gray-700 fw-semibold fs-6">Prize Fees
                                                                <!--begin::Name-->
                                                                <a href="#"
                                                                    class="text-primary opacity-75-hover fw-semibold">200</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Action-->
                                                        <a href="#" class="btn btn-sm btn-primary">Play</a>
                                                        <!--end::Action-->
                                                    </div>

                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::Bullet-->
                                                        <span data-kt-element="bullet"
                                                            class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Info-->
                                                        <div class="flex-grow-1 me-5">
                                                            <!--begin::Time-->
                                                            <div class="text-gray-800 fw-semibold fs-2">CHALLENGE FROM
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Description-->
                                                            <div class="text-gray-700 fw-semibold fs-6">Entry Fees:100
                                                            </div>
                                                            <!--end::Description-->
                                                            <!--begin::Link-->
                                                            <div class="text-gray-700 fw-semibold fs-6">Prize Fees
                                                                <!--begin::Name-->
                                                                <a href="#"
                                                                    class="text-primary opacity-75-hover fw-semibold">200</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Action-->
                                                        <a href="#" class="btn btn-sm btn-primary">Play</a>
                                                        <!--end::Action-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Tap pane-->

                                            <!--end::Tap pane-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end: Card Body-->
                                </div>




                            </div>
                            <div class="tab-pane fade" id="kt_list_widget_10_tab_2" role="tabpanel">
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Product Delivery</span>
                                            {{-- <span class="text-gray-500 mt-1 fw-semibold fs-6">1M Products Shipped so far</span> --}}
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <a href="apps/ecommerce/sales/details.html"
                                                class="btn btn-sm btn-light">Order Details</a>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Scroll-->
                                        <div class=" pe-6 me-n6">
                                            <!--begin::Item-->
                                            <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/stock/ecommerce/210.png"
                                                            class="w-50px ms-n1 me-1" alt="">
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 text-hover-primary fw-bold">Elephant
                                                            1802</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <span class="badge badge-light-success">V/S</span>
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/stock/ecommerce/210.png"
                                                            class="w-50px ms-n1 me-1" alt="">
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 text-hover-primary fw-bold">Elephant
                                                            1802</a>
                                                        <!--end::Title-->
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                    <!--end::Body-->
                                </div>




                            </div>

                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::List widget 10-->
            </div>
            <div class="col-xl-1"></div>
        </div>
    </div>
