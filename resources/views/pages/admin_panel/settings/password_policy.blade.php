@extends('../layout/' . $layout)

@section('subhead')
    <title>Password Policy Setup - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y box col-span-12 2xl:col-span-6">
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-5">
                          <!-- text input -->
                          <div class="form-group">
                            <label class="form-label uppercase font-semibold">PASSWORD POLICY NAME</label>
                            <input type="text" class="form-control h-[50px]" name="policy_name" required="">
                          </div>
                          <div class="form-group mt-5">
                            <label class="form-label uppercase font-semibold">PASSWORD VALID DAYS</label>
                            <input type="number" class="form-control h-[50px]" name="phone" required="">
                          </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-6">
                      <div class="form-group">
                        <label class="form-label uppercase font-semibold">PASSWORD MINIMUM LENGTH</label>
                        <input type="number" class="form-control h-[50px]" name="order_submission_from">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">SPECIAL CHARACTER</label>
                          <div class="flex flex-col sm:flex-row mt-2">
                              <div class="form-check mr-2">
                                  <input id="checkbox-switch-4" class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label" for="checkbox-switch-4">DIGIT</label>
                              </div>
                              <div class="form-check mr-2 mt-2 sm:mt-0">
                                  <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label" for="checkbox-switch-5">SPECIAL CHARACTER</label>
                              </div>
                              <div class="form-check mr-2 mt-2 sm:mt-0">
                                  <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label" for="checkbox-switch-5">LOWERCASE</label>
                              </div>
                              <div class="form-check mr-2 mt-2 sm:mt-0">
                                  <input id="checkbox-switch-6" class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label" for="checkbox-switch-6">UPPERCASE</label>
                              </div>
                          </div>
                       </div>

                      <div class="text-right mt-5">
                          <button type="button" class="btn btn-outline-secondary w-[150px] h-[50px] mr-1 uppercase font-semibold font-medium">Cancel</button>
                          <button type="button" class="btn btn-primary w-[150px] h-[50px] uppercase font-medium">Save Policy</button>
                      </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
            </div>
        </div>
    </div>
@endsection
