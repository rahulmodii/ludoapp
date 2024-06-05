<div>
    @include('components.header', ['title' => 'Support'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Support</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 pb-5">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        wire:submit.prevent="store">
                        @csrf
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">Mobile1</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" wire:model="mobile1">
                        </div>

                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">Mobile2</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" wire:model="mobile2">
                        </div>

                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">Mobile3</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" wire:model="mobile3">
                        </div>


                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" class="form-control form-control-solid" wire:model="email">
                        </div>


                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">UPI ID</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" wire:model="upi_id">
                        </div>

                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">Commission</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" wire:model="commission">
                        </div>

                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">Message Title</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" wire:model="message_title">
                        </div>

                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">Message Description</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" wire:model="message_description">
                        </div>


                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <img src="{{ asset('/storage/' . $data->login_image) }}" height="100px" width="100px" />
                            <label class="fs-6 fw-semibold mb-2 required">Login Image</label>

                            <input type="file" class="form-control form-control-solid" wire:model="login_image" style="margin:10px">
                        </div>

                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <img src="{{ asset('/storage/' . $data->logo) }}" height="100px" width="100px" style="margin:10px" />
                            <label class="fs-6 fw-semibold mb-2 required">Logo</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" wire:model="logo">
                        </div>

                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_customer_profile_submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
</div>
