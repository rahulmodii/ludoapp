<div>
    @include('components.header', ['title' => 'Game History'])
    <div class="container-fluid" id="kt_content_container">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <!--begin::Table widget 9-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Game History</span>
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
                                    <th class="min-w-150px" colspan="1">Id</th>
                                    <th class="min-w-150px" colspan="1">Game Amount</th>
                                    <th class="min-w-150px" colspan="1">Date Time</th>
                                    {{-- <th class="min-w-150px text-end pe-0" colspan="2">SESSIONS</th> --}}
                                    {{-- <th class="text-end min-w-150px" colspan="2">CONVERSION RATE</th> --}}
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($data as $value)
                                    <tr>
                                        <td>
                                            OrderId#{{ $value->id ?? '' }}
                                        </td>
                                        <td>
                                            @if ($value->winning_id)
                                                @if ($value->winning_id == auth()->user()->id)
                                                    {{ $value->game_amount }}
                                                    (<i class="ki-duotone ki-plus fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>)
                                                @else
                                                {{ $value->amount }}
                                                    (<i class="ki-duotone ki-minus fs-5 text-danger ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>)
                                                @endif
                                            @else
                                                Cancelled
                                            @endif
                                        </td>
                                        <td class="">
                                            <a
                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $value->created_at->format('d-m-y h:i:s') }}</a>
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
