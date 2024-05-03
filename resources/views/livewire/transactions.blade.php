<div>

    @include('components.header', ['title' => 'Transactions'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Transaction History</span>
                        {{-- <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span> --}}
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar"></div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Items-->
                    <div class="">
                        @foreach ($data as $value)
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px"
                                        style="border-radius: 4px" alt="">
                                    <!--end::Flag-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <span
                                            class="text-gray-700 fw-bold text-hover-primary fs-4">{{ $value->type == 1 ? 'Deposit' : 'Withdrawl' }}
                                            Request For RS{{ $value->amount ?? '' }}</span>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <a href="{{ asset('/storage/' . $value->proof) }}"
                                            class="text-gray-500 text-primary fw-semibold fs-7 d-block text-start ps-0"
                                            target="_blank">Proof</a>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">Raised On
                                        {{ $value->created_at ?? '' }}</span>
                                    <!--end::Number-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        @switch((Int)$value->status)
                                            @case(0)
                                            <span class="badge badge-light-warning fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-warning ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                Pending
                                            </span>
                                            @break
                                            @case(1)
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-down-left fs-5 text-success ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                Success
                                            </span>
                                            @break

                                            @case(3)
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                Denied
                                            </span>
                                            @break

                                            @default
                                        @endswitch

                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                        @endforeach


                    </div>
                    <!--end::Items-->
                </div>
                <!--end: Card Body-->
            </div>
        </div>
    </div>
</div>
