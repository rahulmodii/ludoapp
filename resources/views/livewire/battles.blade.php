<div>
    <div class="row gy-5 g-xl-10">
        <div class="col-xl-1"></div>
        <div class="col-10">
            <div class="card card-flush">
                <div class="card-body pt-5">
                    <div class="d-flex flex-column gap-5">
                        <label class="fs-6 fw-semibold form-label">Start New Game</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-solid" placeholder="Amount"
                                wire:model="amount">
                        </div>
                        <div class="separator my-7"></div>
                        <button type="button" class="btn btn-primary w-100" wire:click="setAmount">Set</button>

                    </div>

                </div>
            </div>
            <div class="col-xl-1"></div>
        </div>
        <div class="row gy-5 g-xl-10">
            <div class="col-xl-1"></div>
            <div class="col-xl-10 mb-xl-10">

                <div class="card card-flush h-lg-100">

                    <div class="card-header pt-7">

                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Battles</span>
                            {{-- <span class="text-gray-500 mt-1 fw-semibold fs-6">59 Active Shipments</span> --}}
                        </h3>


                        <div class="card-toolbar">
                        </div>

                    </div>


                    <div class="card-body">

                        <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9" role="tablist">

                            <li class="nav-item col-6 mx-0 p-0" role="presentation">

                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100 active"
                                    data-bs-toggle="pill" href="#kt_list_widget_10_tab_1" aria-selected="false"
                                    role="tab" tabindex="-1">

                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Open Battles</span>


                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>

                                </a>

                            </li>


                            <li class="nav-item col-6 mx-0 px-0" role="presentation">

                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                    data-bs-toggle="pill" href="#kt_list_widget_10_tab_2" aria-selected="false"
                                    role="tab" tabindex="-1">

                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Running Battles</span>


                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>

                                </a>

                            </li>




                            <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>

                        </ul>


                        <div class="tab-content">

                            <div class="tab-pane fade active show" id="kt_list_widget_10_tab_1" role="tabpanel">
                                <div class="card h-md-100">

                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Open Battles</span>
                                            <span class="text-muted mt-1 fw-semibold fs-7"></span>
                                        </h3>

                                        <div class="card-toolbar">
                                            <a class="btn btn-danger fw-semibold" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_invite_friends">Rules</a>
                                        </div>

                                    </div>


                                    <div class="card-body pt-7 px-0">

                                        <div class="tab-content mb-2 px-9">

                                            <div class="tab-pane fade show active"
                                                id="kt_timeline_widget_3_tab_content_4" role="tabpanel">

                                                <div wire:poll>
                                                    @foreach ($preData as $value)
                                                        <div class="d-flex align-items-center mb-6">

                                                            <span data-kt-element="bullet"
                                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>


                                                            <div class="flex-grow-1 me-5">

                                                                <div class="text-gray-800 fw-semibold fs-2">CHALLENGE
                                                                    FROM {{ optional($value->creator)->name ?? '' }}
                                                                </div>


                                                                <div class="text-gray-700 fw-semibold fs-6">Entry
                                                                    Fees:{{ $value->amount ?? '' }}
                                                                </div>


                                                                <div class="text-gray-700 fw-semibold fs-6">Prize Fees

                                                                    <a href="#"
                                                                        class="text-primary opacity-75-hover fw-semibold">{{ $value->game_amount ?? '' }}</a>
                                                                </div>
                                                            </div>

                                                            @if ($value->joining_id == auth()->user()->id)
                                                            <a class="btn btn-sm btn-primary"
                                                                    href="{{ route('gamedetails',['id'=>$value->id]) }}">Start</a>
                                                            @else
                                                            @if ($value->is_request == 0)
                                                                <a class="btn btn-sm btn-danger"
                                                                    wire:click="onDelete('{{ $value->id }}')">Delete</a>
                                                            @else
                                                                <div style="display: flex;flex-direction:column">
                                                                    <div style="display: flex;gap:10px">
                                                                        <a class="btn btn-sm btn-success"
                                                                            wire:click="onAccept('{{ $value->id }}')">Accept</a>
                                                                        <a class="btn btn-sm btn-danger"
                                                                            wire:click="onReject('{{ $value->id }}')">Reject</a>
                                                                    </div>
                                                                    <span
                                                                        class="text-gray-500 pt-1 fw-semibold fs-6">Request
                                                                        from {{ $value->requestie->name }}</span>
                                                                </div>
                                                            @endif
                                                            @endif
                                                            


                                                        </div>
                                                    @endforeach

                                                    @foreach ($data as $value)
                                                        <div class="d-flex align-items-center mb-6">

                                                            <span data-kt-element="bullet"
                                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>


                                                            <div class="flex-grow-1 me-5">

                                                                <div class="text-gray-800 fw-semibold fs-2">CHALLENGE
                                                                    FROM {{ optional($value->creator)->name ?? '' }}
                                                                </div>


                                                                <div class="text-gray-700 fw-semibold fs-6">Entry
                                                                    Fees:{{ $value->game_amount ?? '' }}
                                                                </div>


                                                                <div class="text-gray-700 fw-semibold fs-6">Prize Fees

                                                                    <a href="#"
                                                                        class="text-primary opacity-75-hover fw-semibold">{{ $value->game_amount ?? '' }}</a>
                                                                </div>
                                                            </div>


                                                            @if ($value->is_request == 0)
                                                                <a class="btn btn-sm btn-danger"
                                                                    wire:click="onDelete('{{ $value->id }}')">Delete</a>
                                                            @else
                                                                <div style="display: flex;flex-direction:column">
                                                                    <div style="display: flex;gap:10px">
                                                                        <a class="btn btn-sm btn-success"
                                                                            wire:click="onAccept('{{ $value->id }}')">Accept</a>
                                                                        <a class="btn btn-sm btn-danger"
                                                                            wire:click="onReject('{{ $value->id }}')">Reject</a>
                                                                    </div>
                                                                    <span
                                                                        class="text-gray-500 pt-1 fw-semibold fs-6">Request
                                                                        from {{ $value->requestie->name }}</span>
                                                                </div>
                                                            @endif


                                                        </div>
                                                    @endforeach

                                                    @foreach ($newData as $values)
                                                        <div class="d-flex align-items-center mb-6">

                                                            <span data-kt-element="bullet"
                                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>


                                                            <div class="flex-grow-1 me-5">

                                                                <div class="text-gray-800 fw-semibold fs-2">CHALLENGE
                                                                    FROM {{ optional($values->creator)->name ?? '' }}
                                                                </div>


                                                                <div class="text-gray-700 fw-semibold fs-6">Entry
                                                                    Fees:{{ $values->amount ?? '' }}
                                                                </div>


                                                                <div class="text-gray-700 fw-semibold fs-6">Prize Fees

                                                                    <a href="#"
                                                                        class="text-primary opacity-75-hover fw-semibold">{{ $values->game_amount ?? '' }}</a>
                                                                </div>
                                                            </div>


                                                            @if ($values->request_id == auth()->user()->id)
                                                                <a class="btn btn-sm btn-secondary"
                                                                    wire:click="onPlay('{{ $values->id }}')">Requested</a>
                                                            @else
                                                                <a class="btn btn-sm btn-primary"
                                                                    wire:click="onPlay('{{ $values->id }}')">Play</a>
                                                            @endif



                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>



                                        </div>

                                    </div>

                                </div>




                            </div>
                            <div class="tab-pane fade" id="kt_list_widget_10_tab_2" role="tabpanel">
                                <div class="card card-flush h-xl-100">

                                    <div class="card-header pt-7">

                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Product Delivery</span>
                                            {{-- <span class="text-gray-500 mt-1 fw-semibold fs-6">1M Products Shipped so far</span> --}}
                                        </h3>


                                        <div class="card-toolbar">
                                            <a href="apps/ecommerce/sales/details.html"
                                                class="btn btn-sm btn-light">Order Details</a>
                                        </div>

                                    </div>


                                    <div class="card-body">

                                        <div class=" pe-6 me-n6">

                                            <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">

                                                <div class="d-flex flex-stack mb-3">

                                                    <div class="me-3">

                                                        <img src="assets/media/stock/ecommerce/210.png"
                                                            class="w-50px ms-n1 me-1" alt="">


                                                        <a href="apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 text-hover-primary fw-bold">Elephant
                                                            1802</a>

                                                    </div>
                                                    <span class="badge badge-light-success">V/S</span>
                                                    <div class="me-3">

                                                        <img src="assets/media/stock/ecommerce/210.png"
                                                            class="w-50px ms-n1 me-1" alt="">


                                                        <a href="apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 text-hover-primary fw-bold">Elephant
                                                            1802</a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>




                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="col-xl-1"></div>
        </div>
    </div>
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true" wire:ignore.self>

        <div class="modal-dialog mw-650px">

            <div class="modal-content">

                <div class="modal-header pb-0 border-0 justify-content-end">

                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>

                </div>


                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">

                    <div class="text-center mb-13">

                        <h1 class="mb-3">Rules</h1>
                    </div>


                    <ol class="rules-list">
                        <li>Game will be conducted between 2 players.</li>
                        <li>No bonus move on finish token as there is no finishing track in "ApnaLudo Ludo".</li>
                        <li>You will get "SIX" on dice roll, if your dice roll not got "SIX" for consecutive 10 turns.
                        </li>
                        <li>For every turn in game, user have 30 seconds to play move, else your token will get moved
                            automatically.</li>
                        <li>On disconnect/leaving from game, your turn will be automatically played for max 5 times.
                        </li>
                        <li>On sixth (6th) miss/timeout move, player will be considered as looser.</li>
                        <li>If all your tokens are at home and your opponent get disconnected, game will be considered
                            as "cancelled".</li>
                        <li>If your opponent leaves/disconnect from game at starting or middle of game, result will be
                            declared as 100% win.</li>
                        <li>A player must have to record every game, and if any player is hacking or cheating in a game,
                            please contact support with video proof.</li>
                        <li>If you don't have any proof against player cheating and error in the game, then you will be
                            considered as lost for a particular battle.</li>
                        <li><b>Automatic exit or left गेम में गोटी ओपन होने पर एडमिन अपने विवेक से गेम celer करेगा।
                                धन्यवाद।🙏🏼</b></li>
                        <li><b>OTP किसी को ना दे ॥ हमारी टीम किसी से किसी भी काम के लिये OTP नहीं लेती है । यदि आप किसी
                                को OTP देते है तो उसके ज़िम्मेदार आप स्वयं होंगे।</b></li>
                    </ol>

                </div>

            </div>

        </div>

    </div>
</div>
