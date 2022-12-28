@extends('../layout/' . $layout)

@section('subhead')
    <title>Withdraw Request - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y box col-span-12 2xl:col-span-6 bg-primary">
            <div class="flex flex-row items-start p-5">
                <h2 class="text-xl font-medium items-start font-semibold text-white">All Withdraw Request</h2>
            </div>
        </div>
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
            <div class="overflow-x-auto scrollbar-hidden">
                <div class="mt-5 table-report table-report--tabulator tabulator" role="grid" tabulator-layout="fitColumns">
                    <div class="" style="padding-right: 0px; margin-left: 0px;">
                        <div class="" style="margin-left: 0px;">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">SI</th>
                                            <th class="text-left !px-[0.5rem] !py-[0.75rem]">User Name</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Client Code</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Mobile</th>
                                            <th class="text-left !px-[0.5rem] !py-[0.75rem]">Bank Name</th>
                                            <th class="text-left !px-[0.5rem] !py-[0.75rem]">Branch Name</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Account No</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Amount</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Request Date</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Status</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                        <tr>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">1</td>
                                            <td class="text-left !px-[0.5rem] !py-[0.75rem]">FAYSAL JAHANGIR </td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">7770</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">+8801341237212</td>
                                            <td class="text-left !px-[0.5rem] !py-[0.75rem]">SHAHJALAL ISLAMI BANK LTD</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">MOHAKHALI</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">0013100000061</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">100000 TK</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">26th December 2022</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]"><label class="bg-[#dd4b39] label label-danger">Pending</label></td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">
                                                <a class="flex items-center mr-3 text-[#367fa9]" href="javascript:;" data-tw-toggle="modal" data-tw-target="#change-status">
                                                    Change Status <i data-lucide="power" class="w-6 h-6"></i>
                                                </a>
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

    </div>
@endsection
