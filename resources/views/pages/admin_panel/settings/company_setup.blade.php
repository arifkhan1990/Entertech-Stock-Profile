@extends('../layout/' . $layout)

@section('subhead')
    <title>Company Information Setup - Entertech</title>
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
                            <label class="form-label uppercase font-semibold">COMPANY TITLE</label>
                            <input type="text" class="form-control h-[50px]" name="company_headiing" required="">
                          </div>
                          <div class="form-group mt-5">
                            <label class="form-label uppercase font-semibold">PHONE</label>
                            <input type="text" class="form-control h-[50px]" name="phone" required="">
                          </div>
                          <div class="form-group mt-5">
                            <label class="form-label uppercase font-semibold">MOBILE</label>
                            <input type="text" class="form-control h-[50px]" name="mobile" required="">
                          </div>
                          <div class="form-group mt-5">
                            <label class="form-label uppercase font-semibold">FAX</label>
                            <input type="text" class="form-control h-[50px]" name="fax">
                          </div>
                          <div class="form-group mt-5">
                            <label class="form-label uppercase font-semibold">EMAIL</label>
                            <input type="text" class="form-control h-[50px]" name="Email">
                          </div>
                          <div class="form-group mt-5">
                            <label class="form-label uppercase font-semibold">WEB</label>
                            <input type="text" class="form-control h-[50px]" name="web">
                          </div>
                          <div class="form-group mt-5">
                            <label class="form-label uppercase font-semibold">LOGO</label>
                            <input type="FILE" class="form-control h-[50px]" name="logo">
                          </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-6">
                      <div class="form-group">
                        <label class="form-label uppercase font-semibold">ORDER SUBMISSION TIME (FROM)</label>
                              <div class="flex">
                                <select name="hours" class="bg-transparent text-xl appearance-none outline-none">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">10</option>
                                  <option value="12">12</option>
                                </select>
                                <span class="text-xl mr-3 ml-3 mt-2">:</span>
                                <select name="minutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                  <option value="0">00</option>
                                  <option value="10">10</option>
                                  <option value="20">20</option>
                                  <option value="30">30</option>
                                  <option value="40">40</option>
                                  <option value="50">50</option>
                                </select>
                                <select name="ampm" class="bg-transparent text-xl appearance-none outline-none">
                                  <option value="am">AM</option>
                                  <option value="pm">PM</option>
                                </select>
                              </div>
                        {{-- <input type="text" class="form-control h-[50px]" name="order_submission_from"> --}}
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">ORDER SUBMISSION TIME (TO)</label>
                          <div class="flex">
                              <select name="hours" class="bg-transparent text-xl appearance-none outline-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">10</option>
                                <option value="12">12</option>
                              </select>
                              <span class="text-xl mr-3 ml-3 mt-2">:</span>
                              <select name="minutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                <option value="0">00</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                              </select>
                              <select name="ampm" class="bg-transparent text-xl appearance-none outline-none">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                              </select>
                          </div>
                        {{-- <input type="text" class="form-control h-[50px]" name="order_submission_to"> --}}
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">MARKET OPEN TIME</label>
                        <div class="flex form-control">
                              <select name="hours" class="bg-transparent text-xl appearance-none outline-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">10</option>
                                <option value="12">12</option>
                              </select>
                              <span class="text-xl mr-3 ml-3 mt-2">:</span>
                              <select name="minutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                <option value="0">00</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                              </select>
                              <select name="ampm" class="bg-transparent text-xl appearance-none outline-none">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                              </select>
                          </div>
                        {{-- <input type="text" class="form-control h-[50px]" name="market_open_time" required=""> --}}
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">MARKET CLOSE TIME</label>
                        <div class="flex form-control">
                              <select name="hours" class="bg-transparent text-xl appearance-none outline-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">10</option>
                                <option value="12">12</option>
                              </select>
                              <span class="text-xl mr-3 ml-3 mt-2">:</span>
                              <select name="minutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                <option value="0">00</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                              </select>
                              <select name="ampm" class="bg-transparent text-xl appearance-none outline-none">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                              </select>
                          </div>
                        {{-- <input type="text" class="form-control h-[50px]" name="market_close_time"> --}}
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">CRONE START TIME</label>
                        <div class="flex">
                              <select name="hours" class="bg-transparent text-xl appearance-none outline-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">10</option>
                                <option value="12">12</option>
                              </select>
                              <span class="text-xl mr-3 ml-3 mt-2">:</span>
                              <select name="minutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                <option value="0">00</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                              </select>
                              <select name="ampm" class="bg-transparent text-xl appearance-none outline-none">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                              </select>
                          </div>
                        {{-- <input type="text" class="form-control h-[50px]" name="crone_start"> --}}
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">ADDRESS</label>
                        <textarea class="form-control" name="address" id="" cols="10" rows="5"></textarea>
                      </div>
                <!-- </div> -->

                        <div class="text-right mt-5">
                            <button type="button" class="btn btn-outline-secondary w-[150px] h-[50px] mr-1 uppercase font-semibold font-medium">Cancel</button>
                            <button type="button" class="btn btn-primary w-[150px] h-[50px] uppercase font-medium">Save Info</button>
                        </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
            </div>
        </div>
    </div>
@endsection
