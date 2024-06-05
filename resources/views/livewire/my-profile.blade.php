<div>
    @include('components.header', ['title' => 'My Profile'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Summary-->
                    <!--begin::User Info-->
                    <div class="d-flex flex-center flex-column py-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            <img src="/assets/media/avatars/300-1.jpg" alt="image">
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">
                          <input type="text" class="form-control" wire:model.live="name"  /> 
                        </a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="mb-9">
                            <!--begin::Badge-->
                            <div class="badge badge-lg badge-light-primary d-inline">{{ auth()->user()->mobile ?? '' }}
                            </div>
                            <!--begin::Badge-->
                        </div>
                        <!--end::Position-->
                        <!--begin::Info-->
                        <!--begin::Info heading-->

                        <!--end::Info heading-->
                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded  px-7 py-3 mb-5" style="justify-content: space-between">
                            <!--begin::Title-->
                            <a href="{{ route('wallet') }}" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">My Wallet</a>
                    
                            <!--end::Progress-->
                            <!--begin::Action-->
                            <a href="{{ route('wallet') }}" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Update KYC</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed gy-5">
                                    <!--begin::Table body-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>Email</td>
                                            <td><input type="text" class="form-control" wire:model="email" /></td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                    wire:click="saveEmail">
                                                    <i class="ki-duotone ki-save-2 fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Aadhaar</td>
                                            <td>
                                                <input type="text" class="form-control" wire:model="aadhar_number"
                                                     />
                                            </td>
                                            <td class="text-end">
                                                <button type="button"
                                                    class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                    data-bs-toggle="modal" wire:click="saveAadhaar">
                                                    <i class="ki-duotone ki-save-2 fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
</div>
