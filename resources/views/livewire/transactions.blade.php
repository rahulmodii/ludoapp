<div>

    @include('components.header', ['title' => 'Transactions'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="col-xl-12 mb-5 mb-xl-10">
                <!--begin::Table widget 9-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Transaction Activity</span>
                            {{-- <span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span> --}}
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fs-7 fw-bold border-0 text-gray-500">
                                        <th class="min-w-150px">Amount</th>
                                        <th class="min-w-150px">Proof</th>
                                        <th class="min-w-150px">Type</th>
                                        <th class="min-w-150px">Status</th>
                                        <th class="min-w-150px">Date Time</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($data as $value)
                                        <tr>
                                            <td class="" colspan="1">
                                                @if ($value->type == 1)
                                                <span class="fw-bold mb-1 fs-6 text-success">
                                                    {{ $value->amount }}
                                                    (<i class="ki-duotone ki-plus fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>)
                                                </span>
                                                @else
                                                <span class="fw-bold mb-1 fs-6 text-danger">
                                                    
                                                    {{ $value->amount }}
                                                    (<i class="ki-duotone ki-minus fs-5 text-danger ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>)
                                                </span>
                                                @endif
                                            </td>
                                            <td class="" colspan="1">
                                                @if ($value->type == 1)
                                                    <a href="{{ asset('/storage/' . $value->proof) }}"
                                                        class="text-gray-800 text-primary fw-semibold fs-7 d-block text-start ps-0"
                                                        target="_blank">Proof</a>
                                                @else
                                                   {{$value->upi_id ?? ''}}
                                                @endif

                                            </td>
                                            <td class="" colspan="1">
                                                <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                                    {{ $value->type == 1 ? 'Deposit' : 'Withdrawl' }}
                                                </span>
                                            </td>
                                            <td class="" colspan="1">
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
                                            </td>
                                            <td class="" colspan="1">
                                                <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                                    {{ $value->created_at->format('d-m-Y h:i:s') ?? '' }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Table Widget 9-->
            </div>
        </div>
    </div>
</div>
