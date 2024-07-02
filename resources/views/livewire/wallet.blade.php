<div>
    @include('components.header', ['title' => 'Wallet'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-fluid" id="kt_content_container">
            <!--begin::Card-->
            <div style="display: flex;flex-direction:column;gap:20px">
                <div class="card border-0 h-md-100" data-theme="light"
                    style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row align-items-center h-100">
                            <!--begin::Col-->
                            <div class="col-7 ps-xl-13">
                                <!--begin::Title-->
                                <div class="text-white mb-6 pt-6">
                                    <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">DEPOSIT CASH</span>
                                    <span class="fs-2qx fw-bold"><img height="26px" width="26px"
                                            src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/global-rupeeIcon.png"
                                            alt="">
                                        0.00</span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">Can be used to play
                                    Tournaments & Battles.
                                    Cannot be withdrawn to Paytm or Bank.</span>
                                <!--end::Text-->
                                <!--begin::Items-->

                                <!--end::Items-->
                                <!--begin::Action-->
                                <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                                    <a href="#" class="btn btn-success flex-shrink-0 me-lg-2"
                                        data-bs-toggle="modal" data-bs-target="#kt_add_cash">Add Cash</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-5 pt-10">
                                <!--begin::Illustration-->
                                <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
                                    style="background-image:url('assets/media/svg/illustrations/easy/5.svg"></div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Body-->
                </div>
                <div class="card border-0 h-md-100" data-theme="light"
                    style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row align-items-center h-100">
                            <!--begin::Col-->
                            <div class="col-7 ps-xl-13">
                                <!--begin::Title-->
                                <div class="text-white mb-6 pt-6">
                                    <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">WINNINGS
                                        CASH</span>
                                    <span class="fs-2qx fw-bold"><img height="26px" width="26px"
                                            src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/global-rupeeIcon.png"
                                            alt="">
                                        {{ auth()->user()->wallet_balance ?? '' }}</span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">Can be withdrawn to
                                    Paytm
                                    or Bank. Can be used to play Tournaments & Battles.</span>

                                <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                                    <a href="#" class="btn btn-success flex-shrink-0 me-lg-2"
                                        data-bs-toggle="modal" data-bs-target="#kt_withdraw">WITHDRAW</a>
                                    {{-- <a href="#" class="btn btn-primary flex-shrink-0"
                                    style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_app">Read Guides</a> --}}
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-5 pt-10">
                                <!--begin::Illustration-->
                                <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
                                    style="background-image:url('assets/media/svg/illustrations/easy/5.svg"></div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Body-->
                </div>

            </div>
            <!--end::Card-->
        </div>
    </div>
    <div class="modal fade" id="kt_add_cash" tabindex="-1" aria-hidden="true" wire:ignore.self>

        <div class="modal-dialog modal-dialog-centered mw-650px">

            <div class="modal-content rounded">

                <div class="modal-header pb-0 border-0 justify-content-end">

                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">

                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>

                    </div>

                </div>


                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">

                    <form id="kt_modal_new_target_form" class="form" wire:submit.prevent="deposit">

                        <div class="mb-13 text-center">

                            <h1 class="mb-3">Deposit</h1>
                            @if ($upiId != '')
                                <h4 class="mb-3">
                                    <span>Deposit amount in upi {{ $upiId ?? '' }}</span>
                                    <br />
                                    <br />
                                    <span>
                                        <input hidden="text" value="{{ $upiId ?? '' }}" id="upiid" />
                                        <button type="button" class="btn btn-primary"
                                            onclick="copyUpiId('{{ $upiId ?? '' }}')">Copy UPI</button>
                                    </span>
                                    {{-- <a href="upi://pay?pa={{ $upiId ?? '' }}&cu=INR">{{ $upiId ?? '' }}</a> --}}

                                </h4>
                            @endif
                            @if ($qrCode)
                                <span>Scan Qr Below and upload proof</span><br/>

                                <img src="{{ $qrCode }}" height="200px"  width="200px"/>
                            @endif

                        </div>


                        <div class="d-flex flex-column mb-8 fv-row">

                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Amount</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>

                            <input type="text" class="form-control form-control-solid" placeholder="Amount"
                                wire:model='amount' required />
                            <div style="color: red;margin-top:5px">
                                @error('amount')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">

                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Proof</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>

                            <input type="file" class="form-control form-control-solid" placeholder="Name"
                                wire:model='proof' required />
                            <div style="color: red;margin-top:5px">
                                @error('proof')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div wire:loading.remove wire:target="proof">
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_target_cancel"
                                    class="btn btn-light me-3">Cancel</button>

                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </div>
                        <div wire:loading wire:target="proof">
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3"
                                    disabled>Cancel</button>

                                <button type="submit" class="btn btn-primary" disabled>
                                    <span class="indicator-label">Uploading Proof</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
    <div class="modal fade" id="kt_withdraw" tabindex="-1" aria-hidden="true" wire:ignore.self>

        <div class="modal-dialog modal-dialog-centered mw-650px">

            <div class="modal-content rounded">

                <div class="modal-header pb-0 border-0 justify-content-end">

                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">

                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>

                    </div>

                </div>


                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">

                    <form id="kt_modal_new_target_form" class="form" wire:submit.prevent="withdraw">

                        <div class="mb-13 text-center">

                            <h1 class="mb-3">Withdraw</h1>
                        </div>


                        <div class="d-flex flex-column mb-8 fv-row">

                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Withdraw Amount</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>

                            <input type="text" class="form-control form-control-solid"
                                placeholder="Withdraw Amount" wire:model='withdraw_amount'
                                @if (!$isKYC) disabled="disabled" @endif />
                            <div style="color: red;margin-top:5px">
                                @error('withdraw_amount')
                                    {{ $message }}
                                @enderror
                            </div>
                            @if (!$isKYC)
                                <div style="color: red;margin-top:5px">
                                    Please Complete KYC for Withdrawl.
                                </div>
                            @endif
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">

                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Upi Id</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>

                            <input type="text" class="form-control form-control-solid" placeholder="Upi Id"
                                wire:model='upi_id' @if (!$isKYC) disabled="disabled" @endif />
                            <div style="color: red;margin-top:5px">
                                @error('upi_id')
                                    {{ $message }}
                                @enderror
                            </div>
                            @if (!$isKYC)
                                <div style="color: red;margin-top:5px">
                                    Please Complete KYC for Withdrawl.
                                </div>
                            @endif
                        </div>



                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel"
                                class="btn btn-light me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</div>
