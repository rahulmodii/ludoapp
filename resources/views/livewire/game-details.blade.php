<div>
    @include('components.header', ['title' => 'Game Details'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body pt-15">

                    <div class="m-0">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-sm-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px me-4">
                                <span class="symbol-label bg-primary">
                                    <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Playing For</a>
                                    <span class="text-gray-800 fw-bold d-block fs-4"><img class="mx-1"
                                            src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/global-rupeeIcon.png"
                                            width="21px" alt="">{{ $data->game_amount }}</span>
                                </div>
                                <span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">On Going</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-7">
                                <!--begin::Timeline line-->
                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                <!--end::Timeline line-->
                                <!--begin::Timeline icon-->
                                <div class="timeline-icon">
                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Timeline icon-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-500 fw-semibold d-block">You</span>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fs-6 fw-bold text-gray-800">{{ optional($data->creator)->name }}</span>
                                    <!--end::Title-->
                                </div>
                                <!--end::Timeline content-->
                            </div>
                            <!--end::Timeline item-->
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center">
                                <!--begin::Timeline line-->
                                <div class="timeline-line"></div>
                                <!--end::Timeline line-->
                                <!--begin::Timeline icon-->
                                <div class="timeline-icon">
                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Timeline icon-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Opponent</span>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fs-6 fw-bold text-gray-800">{{ $data->joinee->name }}</span>
                                    <!--end::Title-->
                                </div>
                                <!--end::Timeline content-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <div class="card card-flush py-4 mb-5">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Play ludo game in Ludo King App</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <div style="display: flex;flex-direction:column;align-items: center;">
                            <label class="form-label">Important Notification</label>
                            <label class="form-label">रूम कोड केवल क्लासिक मोड में ही स्वीकार किया जाएगा।</label>
                            <label class="form-label">लुडोकिंग पे जा के रूम कोड क्रिएट कर के निचे दिए ऑप्शन में
                                डाले।</label>
                        </div>

                        <!--end::Label-->
                        <!--begin::Input-->
                        <div style="text-align: center">
                            <input type="text" class="form-control mb-2" wire:model="room_code" placeholder="Room Code" maxlength="8">
                            @if ($data->creator_id == auth()->user()->id)
                            <a class="btn btn-danger fw-semibold" wire:click="saveCode">Save Code</a>

                            @endif
                        </div>
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7"></div>
                        <!--end::Description-->
                    </div>

                </div>
                <!--end::Card header-->
            </div>
            <div class="card bg-light ">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Top-->
                    <div class="mb-7">
                        <!--begin::Title-->
                        <h2 class="fs-1 text-gray-800 w-bolder mb-6">Game Rules</h2>
                        <!--end::Title-->
                        <!--begin::Text-->
                        {{-- <p class="fw-semibold fs-6 text-gray-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p> --}}
                        <!--end::Text-->
                    </div>
                    <!--end::Top-->
                    <!--begin::Item-->
                    <div class="mb-8">
                        <!--begin::Title-->
                        <h4 class="text-gray-700 w-bolder mb-0">Rules</h4>
                        <!--end::Title-->
                        <!--begin::Section-->
                        <div class="my-2">
                            <!--begin::Row-->
                            <div class="d-flex align-items-center mb-3">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-600 fw-semibold fs-6">Room codes will accepted in classic mode
                                    only.</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="d-flex align-items-center mb-3">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-600 fw-semibold fs-6">Record every game while playing.</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="d-flex align-items-center mb-3">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-600 fw-semibold fs-6">For cancellation of game, video proof is
                                    necessary.</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="d-flex align-items-center">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6" style="color:red;">Popular Room code के गेम play नही करने ह
                                    यदि कोई popular room code का game play के loss ho jata h तो वो उसकी अपनी गलती होगी
                                    उस game me हम कोई मदद नहीं कर सकते है।</div>
                                <!--end::Label-->
                            </div>

                            <div class="d-flex align-items-center">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6" style="color:red;">Important:- popular Room code देने वाले
                                    usar की id 00 कर दी जाएगी।</div>
                                <!--end::Label-->
                            </div>

                            <div class="d-flex align-items-center">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6" style="color:red;">कोई भी गेम में रिजल्ट सावधानी से डाले गलत
                                    रिजल्ट डालने पर गेम किलिर हो जायेगा तो उसकी जिमेदारी हमारी नही होगी।</div>
                                <!--end::Label-->
                            </div>

                            <div class="d-flex align-items-center">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-600 fw-semibold fs-6"><img class="mx-1"
                                        src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/global-rupeeIcon.png"
                                        width="21px" alt=""> 50 Penality will be charged for updating wrong
                                    result.</div>
                                <!--end::Label-->
                            </div>
                            <div class="d-flex align-items-center">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-600 fw-semibold fs-6"><img class="mx-1"
                                        src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/global-rupeeIcon.png"
                                        width="21px" alt=""> 25 Penality will be charged for not updating
                                    result.</div>
                                <!--end::Label-->
                            </div>
                            <div class="d-flex align-items-center">
                                <!--begin::Bullet-->
                                <span class="bullet me-3"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6" style="color:red;">कृपया कैंसिल करने से पहले रूम से गेम
                                    लेफ्ट जरूर हो जाये अन्थया ऑटो प्ले होकर, आप गेम लोस्स हो सकते है। उसमे एडमिन की कोई
                                    जिम्मेदारी नही होगी।</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Section-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <div>
                            <h2>Match Status</h2>
                            <p class="fw-semibold fs-6 text-gray-600">After completion of your game, select the status
                                of the game and post your screenshot below.</p>

                        </div>

                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <form wire:submit.prevent="onSubmit">
                        <label class="fs-6 fw-semibold form-label">Match Status</label>
                        <select class="form-select form-select-solid form-select-sm" wire:model.live="matchstatus">
                            <option value="">--select option--</option>
                            <option value="1">I Won</option>
                            <option value="2">I Lost</option>
                            <option value="3">Cancel</option>
                        </select>
                        <div class="separator my-7"></div>
                        @if ($matchstatus == '3')
                            <label class="fs-6 fw-semibold form-label">Cancel Reason</label>
                            <select class="form-select form-select-solid form-select-sm"
                                wire:model.live="match_cancel_reason">
                                <option value="">Please Select Any Reason</option>
                                <option value="No Room Code">No Room Code</option>
                                <option value="Room Code in Popular Mode">Room Code in Popular Mode</option>
                                <option value="Game Not Started">Game Not Started</option>
                                <option value="Not Joined">Not Joined</option>
                                <option value="Not Playing">Not Playing</option>
                                <option value="Others">Others</option>
                            </select>
                        @elseif ($matchstatus == '1')
                        <label class="fs-6 fw-semibold form-label">Upload Proof</label>
                        <input type="file" wire:model="image" class="form-control form-control-lg form-control-solid" value="044 3276 454 935">
                        @endif

                        <!--end::Add contact group-->
                        <!--begin::Separator-->
                        <div class="separator my-7"></div>
                        <!--begin::Separator-->
                        <!--begin::Add new contact-->
                        <button class="btn btn-primary w-100" type="submit">
                            Submit</button>
                    </form>
                    <!--end::Add new contact-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
</div>
