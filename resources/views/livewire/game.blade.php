<div>
    @include('components.header', ['title' => 'Games'])
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
                                <th class="min-w-125px">Actions</th>
                                <th class="min-w-125px">Creator Name</th>
                                <th class="min-w-125px">Creator Mobile</th>
                                <th class="min-w-125px">Joinee Name</th>
                                <th class="min-w-125px">Joinee Mobile</th>
                                <th class="min-w-125px">Room Code</th>
                                <th class="min-w-125px">Game Amount</th>
                                <th class="min-w-125px">Creator Response</th>
                                <th class="min-w-125px">Creator Proof</th>
                                <th class="min-w-125px">Joinee Response</th>
                                <th class="min-w-125px">Joinee Proof</th>
                             
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach ($data as $value)
                                <tr>
                                    <td>
                                        @if ($value->winning_id)
                                       Winner is {{ $value->winner->name ?? '' }}
                                        @else    
                                        <div style="display:flex;gap: 10px;flex-direction:column">
                                            <a class="btn btn-sm btn-success"
                                                wire:click="makeWinner('{{ $value->id }}','{{ $value->creator_id }}')">Make Creator Winner</a>
                                            <a class="btn btn-sm btn-danger"
                                                wire:click="makeWinner('{{ $value->id }}','{{ $value->joining_id }}')">Make Joinee Winner</a>
                                        </div>
                                        @endif
                                    </td>
                                    <td>{{ $value->creator->name ?? '' }}</td>
                                    <td>{{ $value->creator->mobile ?? '' }}</td>
                                    <td>{{ $value->joinee->name ?? '' }}</td>
                                    <td>{{ $value->joinee->mobile ?? '' }}</td>
                                    <td>{{ $value->room_code ?? '' }}</td>
                                    <td>{{ $value->game_amount ?? '' }}</td>
                                    <td>
                                        @switch($value->creator_id_match_status)
                                            @case(1)
                                                I Won
                                            @break

                                            @case(2)
                                                I Lost
                                            @break

                                            @case(3)
                                                Cancel
                                                {{ $value->creator_id_cancel_status ?? '' }}
                                            @break

                                            Not Started

                                            @default
                                        @endswitch
                                    </td>
                                    <td>
                                        <a href="{{ asset('/storage/' . $value->creator_id_winning_proof) }}"
                                            target="_blank">Proof</a>
                                    </td>
                                    <td>
                                        @switch($value->joining_id_match_status)
                                            @case(1)
                                                I Won
                                            @break

                                            @case(2)
                                                I Lost
                                            @break

                                            @case(3)
                                                Cancel
                                                {{ $value->joining_id_cancel_status ?? '' }}

                                            @break

                                            Not Started

                                            @default
                                        @endswitch
                                    </td>
                                    <td>
                                        <a href="{{ asset('/storage/' . $value->joining_id_winning_proof) }}"
                                            target="_blank">Proof</a>
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
