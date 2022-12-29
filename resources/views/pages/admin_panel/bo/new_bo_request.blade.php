@extends('../layout/' . $layout)

@section('subhead')
    <title>New B.O Request - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-0">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-3">
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5 text-center">
                            <div class="text-3xl font-medium leading-8 mt-6 text-[red]">132</div>
                            <div class="text-base text-slate-500 mt-1">TOTAL USER</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5 text-center">
                            <div class="text-3xl font-medium leading-8 mt-6">111</div>
                            <div class="text-base text-slate-500 mt-1">FREE USER</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5 text-center">
                            <div class="text-3xl font-medium leading-8 mt-6">11</div>
                            <div class="text-base text-slate-500 mt-1">PRIMIUM USER</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5 text-center">
                            <div class="text-3xl font-medium leading-8 mt-6">5</div>
                            <div class="text-base text-slate-500 mt-1">ADMIN USER</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: General Report -->
        <!-- BEGIN: HTML Table Data -->
        <div class="intro-y col-span-12 2xl:col-span-6 box p-5 mt-5">
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                    <div class="sm:flex items-center sm:mr-4">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2 font-semibold">From</label>
                            <div class="relative w-56 mx-auto">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                </div>
                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                            </div>
                    </div>
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2 font-semibold">To</label>
                            <div class="relative w-56 mx-auto">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                </div>
                                <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                            </div>
                    </div>
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2 font-semibold">Client Code</label>
                        <input id="client_code" name="client_code" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Client Code">
                    </div>
                    <div class="mt-2 xl:mt-0">
                        <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Submit</button>
                        <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
                    </div>
                </form>
                <div class="flex mt-5 sm:mt-0">
                    <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2">
                        <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                    </button>
                    <div class="dropdown w-1/2 sm:w-auto">
                        <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
                        </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item">
                                        <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV
                                    </a>
                                </li>
                                <li>
                                    <a id="tabulator-export-json" href="javascript:;" class="dropdown-item">
                                        <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON
                                    </a>
                                </li>
                                <li>
                                    <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item">
                                        <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                                    </a>
                                </li>
                                <li>
                                    <a id="tabulator-export-html" href="javascript:;" class="dropdown-item">
                                        <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto scrollbar-hidden mt-8">
                <div class="mt-5 table-report table-report--tabulator tabulator" role="grid" tabulator-layout="fitColumns">
                    <div class="" style="padding-right: 0px; margin-left: 0px;">
                        <div class="" style="margin-left: 0px;">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">SI</th>
                                            <th class="text-left !px-[0.5rem] !py-[0.75rem]">User Name</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Client Code</th>
                                            <th class="text-left !px-[0.5rem] !py-[0.75rem]">Email Address</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">B.O Type</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Client Limit</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">IPO Applied</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Sex</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Created Date</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Status</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                        <tr>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">1</td>
                                            <td class="text-left !px-[0.5rem] !py-[0.75rem]">FAYSAL JAHANGIR </td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">7770</td>
                                            <td class="text-left !px-[0.5rem] !py-[0.75rem]">ksaifulalam2@yahoo.com</td>
                                            <td class="text-left !px-[0.5rem] !py-[0.75rem]">Individual</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">154231</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">NO</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">Male</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">26th December 2022</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]"><label class="bg-[#dd4b39] label label-danger">Pending</label></td>
                                            <td class="text-left !px-[0.5rem] !py-[0.75rem]">
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center mr-1" href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-user">
                                                            <button class="btn btn-dark w-20 text-white">
                                                                <i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add
                                                            </button>
                                                    </a>
                                                    <a class="flex items-center mr-1" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit">
                                                            <button class="btn btn-primary w-20">
                                                                <i data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit
                                                            </button>
                                                    </a>
                                                    <a class="flex items-center mr-1" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete">
                                                            <button class="btn btn-danger w-20">
                                                                <i data-lucide="trash" class="w-4 h-4 mr-1"></i> Trash
                                                            </button>
                                                    </a>
                                                </div>
                                                <div class="flex justify-center items-center mt-2">
                                                    <a class="flex items-center mr-1" href="javascript:;">
                                                        <button class="btn btn-success w-20 text-white">
                                                            <i data-lucide="eye" class="w-4 h-4 mr-1"></i> View
                                                        </button>
                                                    </a>
                                                    <a class="flex items-center mr-1" href="javascript:;">
                                                            <button class="btn btn-warning w-20 text-white">
                                                                <i data-lucide="download" class="w-5 h-5 mr-1"></i> Export
                                                            </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END: HTML Table Data -->
        <!-- BEGIN: delete modal Content -->
        <div id="delete" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="delete" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">Do you really want to be delete B.O request? <br>This process cannot be undone.</div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" class="btn btn-danger w-24">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Modal Content -->

        <!-- BEGIN: edit modal Content -->
        <div id="edit" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="check-square" class="w-16 h-16 text-success mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">Do you really want to Edit this B.O request Info? <br>This process cannot be undone.</div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" class="btn btn-success text-white w-24">Yes, I Want</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Modal Content -->
        <!-- BEGIN: add user Modal Content -->
        <div id="add-user" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- BEGIN: Modal Body -->
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-base font-semibold">User Name</label>

                            <select id="user_id" class="form-control">
                                <option value="">-- Select User --</option>
                                  <option value="41">QUASER HAMID (maimun216@hotmail.com)</option>
                                  <option value="601">AZAM MAHMUD (azammahmud@gmail.com)</option>
                                  <option value="609">MD TANZIL AHAMMED (tuhin.mia@gmail.com)</option>
                                  <option value="611">MD. SHAFIQUL ISLAM (moni_ais@yahoo.com)</option>
                                  <option value="612">NABIL HUDA (nabilhuda@gmail.com)</option>
                                  <option value="613">A M M SALAH UDDIN (shawon.salahuddin@gmail.com)</option>
                                  <option value="615">MUHAMMED KABIR HUSSAIN  (sohag@cygnusinnovation.com)</option>
                                  <option value="616">Arif Khan (arif.entertech19@gmail.com)</option>
                                  <option value="636">FAYSAL JAHANGIR  (moinulmithu@gmail.com)</option>
                                  <option value="637">HASANUR RAHAMAN SIKDER (bappy2409@gmail.com)</option>
                                  <option value="638">SABRINA JALIL  (sabrinajalil24@gmail.com)</option>
                                  <option value="639">TOWHIDUR RAHMAN (towhid90@gmail.com)</option>
                                  <option value="644">ROZINA AKHTER (sabrina.jalil@northsouth.edu)</option>
                                  <option value="645">MD. AZIZUL ISLAM  (mdazizulislam50@gmail.com)</option>
                                  <option value="646">S.K. ISMAIL AHAMED HIRA  (yaad.hassan2000@gmail.com)</option>
                                  <option value="647">MD. SHARIFUZZAMAN  (rochibba@gmail.com)</option>
                                  <option value="648">MUKTA RAHMAN (radiotufun@gmail.com)</option>
                                  <option value="649">UZZAL KUMAR SARKAR  (uzzwal73@gmail.com)</option>
                              </select>
                            </select>
                        </div>
                    </div>
                    <!-- END: Modal Body -->
                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                        <button type="button" class="btn btn-primary w-30">Add User</button>
                    </div>
                    <!-- END: Modal Footer -->
                </div>
            </div>
        </div>
        <!-- END: Modal Content -->
    </div>
@endsection
