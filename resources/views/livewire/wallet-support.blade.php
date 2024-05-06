<div>
    @include('components.header', ['title' => 'Wallet'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header border-0 pt-6">

                    <div class="card-title">
                    </div>
                    <div class="card-toolbar">

                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                            <i class="ki-duotone ki-plus fs-2"></i>Add User</button> --}}
                        </div>
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-user-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-user-table-select="delete_selected">Delete Selected</button>
                        </div>
                    </div>
                </div>


                <div class="card-body py-4" style="overflow: auto">

                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Name</th>
                                <th class="min-w-125px">Mobile</th>
                                <th class="min-w-125px">Request Type</th>
                                <th class="min-w-125px">Amount</th>
                                <th class="min-w-125px">Proof</th>
                                <th class="min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach ($data as $value)
                                <tr>
                                    <td>{{ $value->user->name ?? '' }}</td>
                                    <td>{{ $value->user->mobile ?? '' }}</td>
                                    <td>{{ $value->type == 1 ? 'Deposit' : 'Withdrawl' }}</td>
                                    <td>{{ $value->amount ?? '' }}</td>
                                    <td><a href="{{ asset('/storage/' . $value->proof) ?? '' }}" target="_blank">Proof</a>
                                    </td>
                                    <td>
                                        <div>
                                            <a class="btn btn-sm btn-success"
                                                wire:click="onAccept('{{ $value->id }}')">Accept</a>
                                            <a class="btn btn-sm btn-danger"
                                                wire:click="onReject('{{ $value->id }}')">Reject</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>
</div>
