<div>
    @include('components.header', ['title' => 'Refer And Earn'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-fluid" id="kt_content_container">
        <!--begin::Card-->
        <div class="card" style="margin-bottom:10px">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Heading-->
                <div class="card-px text-center ">
                    <!--begin::Title-->
                    <div class="d-flex" style="justify-content: space-between;flex-direction:column;gap:20px">
                        <div class="text-center">
                            <img src="assets/media/illustrations/dozzy-1/4.png" alt=""
                                class="mw-100 h-200px h-sm-325px" />
                        </div>
                        <div style="display: flex;flex-direction:column;gap:10px">
                            <h2 class="fs-2x fw-bold mb-0">Earn now unlimited 🥳</h2>
                            <h4 class=" fw-bold mb-0">Refer your friends now!</h4>
                        </div>
                        <div style="display: flex;flex-direction:column;gap:10px;margin-bottom:2rem;">
                            <h2 class="fw-bold mb-0">Your Refer Code: {{ auth()->user()->userid }}</h2>
                            <h4 class=" fw-bold mb-0">Total Refers: {{ $totalRefer ?? '' }}</h4>
                            <h4 class=" fw-bold mb-0">Total Earnings: {{ $totalCount ?? '' }}</h4>
                        </div>
                    </div>
                    <a href="whatsapp://send?text={{ url('/') }}?referral={{ auth()->user()->userid }}" data-action="share/whatsapp/share" class="btn btn-primary er fs-6 px-8 py-4">Share via Whatsapp</a>
                </div>
                <!--end::Heading-->
                <!--begin::Illustration-->
                <!--end::Illustration-->
            </div>
            <!--end::Card body-->
        </div>
        <div class="card card-flush">
            <!--begin::Header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">Refer & Earn Rules</span>
                    <span class="text-gray-500 mt-1 fw-semibold fs-6">win more</span>
                </h3>
                <!--end::Title-->

                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <ul class="nav me-n1" id="kt_chart_widget_11_tabs" role="tablist">

                    </ul>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-4">
                <!--begin::Tab Content-->
                <div class="tab-content">

                    <!--begin::Tap pane-->
                    <div class="tab-pane fade active show" id="kt_list_widget_18_tab_content_1" role="tabpanel"
                        aria-labelledby="kt_list_widget_18_tab_1">

                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                <img src="/assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="">
                                <!--end::Flag-->

                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">When your
                                        friend signs up on ApnaLudo from your referral link,</a>
                                    <!--end::Title-->

                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">You get 1%
                                        Commission on your referral's winnings.</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->


                        </div>
                        <!--end::Item-->

                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->


                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                <img src="/assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="">
                                <!--end::Flag-->

                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Suppose your
                                        referral plays a battle for ₹10000 Cash,</a>
                                    <!--end::Title-->

                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">You get ₹100
                                        Cash</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Wrapper-->

                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->



                    </div>
                    <!--end::Tap pane-->


                </div>
                <!--end::Tab Content-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end::Card-->
    </div>
    </div>
</div>
