<div>
    @include('components.header', ['title' => 'Users'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="container-fluid">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                    </div>
                </div>
                <div class="card-body py-4" style="overflow: auto">

                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">User Id</th>
                                <th class="min-w-125px">Name</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Phone</th>
                                <th class="min-w-125px">Aadhaar</th>
                                <th class="min-w-125px">Wallet Balance</th>
                                <th class="min-w-125px">Referal id</th>
                                <th class="min-w-125px">Deposit</th>
                                <th class="min-w-125px">Withdrawl</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach ($data as $value)
                                <tr>
                                    <td>{{ $value->id ?? '' }}</td>
                                    <td>{{ $value->name ?? '' }}</td>
                                    <td>{{ $value->email ?? '' }}</td>
                                    <td>{{ $value->mobile ?? '' }}</td>
                                    <td>{{ $value->aadhar_number ?? '' }}</td>
                                    <td>{{ $value->wallet_balance ?? '' }}</td>
                                    <td>{{ $value->userid ?? '' }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_add_cash" wire:click="newFunction('{{ $value->id }}')">
                                            Deposit
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_withdraw" wire:click="newFunction('{{ $value->id }}')">
                                            Withdrawl
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>

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
                    <form  class="form" wire:submit.prevent="deposit">
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Admin Deposit</h1>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Amount</span>
                            </label>

                            <input type="text" class="form-control form-control-solid" placeholder="Amount"
                                wire:model='amount' required />
                            <div style="color: red;margin-top:5px">
                                @error('amount')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div wire:loading.remove wire:target="amount">
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_target_cancel"
                                    class="btn btn-light me-3">Cancel</button>

                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div wire:loading wire:target="amount">
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3"
                                    disabled>Cancel</button>

                                <button type="submit" class="btn btn-primary" disabled>
                                    <span class="indicator-label">Please Wait</span>
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
                                placeholder="Withdraw Amount" wire:model='amount' />
                            <div style="color: red;margin-top:5px">
                                @error('amount')
                                    {{ $message }}
                                @enderror
                            </div>

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
