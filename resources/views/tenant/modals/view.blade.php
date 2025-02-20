{{-- VIEW --}}

<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View</h5>
                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="first_name">{{ __('First Name') }}</label>
                            <div class="input-group">
                                <input name="first_name" type="text" id="view_first_name"
                                    @class(['form-control']) placeholder="{{ __('First Name') }}"
                                    value="{{ old('first_name') }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="middle_name">{{ __('Middle Name') }}</label>
                            <div class="input-group">
                                <input name="middle_name" type="text" id="view_middle_name"
                                    @class(['form-control']) placeholder="{{ __('Middle Name') }}"
                                    value="{{ old('middle_name') }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="last_name">{{ __('Last Name') }}</label>
                            <div class="input-group">
                                <input name="last_name" type="text" id="view_last_name" @class(['form-control'])
                                    placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="form-group mt-3">
                            <label for="gender">{{ __('Gender') }}</label>
                            <div class="input-group">
                                <input name="gender" type="text" id="view_gender" @class(['form-control'])
                                    placeholder="{{ __('Gender') }}" value="{{ old('gender') }}" readonly>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 mt-3">
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <div class="input-group">
                                <input name="email" type="text" id="view_email" @class(['form-control'])
                                    placeholder="{{ __('Email') }}" value="{{ old('email') }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 mt-3">
                        <div class="form-group">
                            <label for="mobile_number">{{ __('Mobile Number') }}</label>
                            <div class="input-group">
                                <input name="mobile_number" type="text" id="view_mobile_number"
                                    @class(['form-control']) placeholder="{{ __('Mobile Number') }}"
                                    value="{{ old('mobile_number') }}" readonly>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
