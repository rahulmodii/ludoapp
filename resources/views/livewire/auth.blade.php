<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <div class="d-flex flex-lg-row-fluid">
        <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
            <div class="text-gray-600 fs-base text-center fw-semibold">

            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
        <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
            <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                    <form class="form w-100" wire:submit="save" method="POST">
                        @csrf
                        <div class="text-center mb-11">
                            <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                                src="{{ loginImage() }}" alt="" />
                            <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                                src="{{ loginImage() }}" alt="" />
                            <h1 class="text-gray-900 fw-bolder mb-3">Welcome to App</h1>
                            <h1 class="text-gray-900 fw-bolder mb-3">Login In</h1>
                            <div class="text-gray-500 fw-semibold fs-6"> By proceeding, you agree to our Terms
                                of Use, Privacy Policy and that you are 18 years or older.
                                You are not playing from Assam, Odisha, Nagaland, Sikkim, Meghalaya, Andhra
                                Pradesh, or
                                Telangana.</div>
                        </div>

                        <div class="fv-row mb-8" style="display: flex;flex-direction: column;gap: 10px;">
                            <input type="hidden" placeholder="" name="referral"
                                value="{{ request()->get('referral') }}" autocomplete="off"
                                class="form-control bg-transparent" />
                            <input type="text" placeholder="Mobile" name="mobile" autocomplete="off"
                                class="form-control bg-transparent" wire:model.live="mobile" required />
                            @if ($this->showOtp)
                                <input type="text" placeholder="Otp" name="otp" autocomplete="off"
                                    class="form-control bg-transparent" wire:model.live="otp" maxlength="6" required />
                                @if ($this->wrongOtp)
                                    <h5 class="text text-danger" style="text-align: center">Wrong Otp Try Again</h5>
                                @endif
                            @endif
                            <hr />
                            <label>Referal Code</label>
                            <input type="text" placeholder="Referal" name="referal" autocomplete="off"
                                class="form-control bg-transparent" wire:model="referral" />
                        </div>
                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Sign In</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="d-flex flex-stack">
                    <div class="me-10">

                    </div>
                    <div class="d-flex fw-semibold text-primary fs-base gap-5">
                        <a href="{{ route('terms') }}" target="_blank">Terms</a>
                        <a href="{{ route('privacy') }}" target="_blank">Privacy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
