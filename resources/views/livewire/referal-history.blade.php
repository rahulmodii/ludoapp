<div>
    @include('components.header', ['title' => 'Referal History'])
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
                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                        <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </button>


                   
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-6">
                <!--begin::Timeline-->
                @foreach ($data as $value)
                    <div class="timeline-label">
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">
                                {{ $value->created_at->format('d-M-Y') }}</div>
                            <!--end::Label-->

                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Badge-->

                            <!--begin::Text-->
                            <div class="fw-semibold text-gray-700 ps-3 fs-7">
                                User {{ $value->name }} joined from your code.
                            </div>
                            <!--end::Text-->
                        </div>

                    </div>
                @endforeach

                <!--end::Timeline-->
            </div>
            <!--end: Card Body-->
        </div>
    </div>
</div>
