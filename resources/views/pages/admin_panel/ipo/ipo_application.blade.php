@extends('../layout/' . $layout)

@section('subhead')
    <title>IPO Application - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y box col-span-12 2xl:col-span-6 bg-primary">
            <div class="flex flex-row items-start p-5">
                <h2 class="text-xl font-medium items-start font-semibold text-white">All IPO Application Request</h2>
            </div>
        </div>
        <!-- BEGIN: HTML Table Data -->
        <div class="intro-y col-span-12 2xl:col-span-6 box p-5 mt-5">
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-15 flex-none xl:w-auto xl:flex-initial mr-2 font-semibold uppercase">Script</label>
                        <select id="tabulator-html-filter-field" class="form-control w-80 sm:w-50 2xl:w-full mt-2 sm:mt-0">
                                <option value="name">Name</option>
                                <option value="category">Category</option>
                                <option value="remaining_stock">Remaining Stock</option>
                        </select>
                    </div>
                    <div class="mt-2 xl:mt-0">
                        <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Submit</button>
                        <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
                    </div>
                </form>
            </div>
            <div class="overflow-x-auto scrollbar-hidden mt-8">
                <div class="mt-5 table-report table-report--tabulator tabulator" role="grid" tabulator-layout="fitColumns">
                    <div class="" style="padding-right: 0px; margin-left: 0px;">
                        <div class="" style="margin-left: 0px;">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">SI</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Client Code</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Script Name</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Client Balance</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">IPO Amount</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Amount After Application</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Request Date</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Status</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                        <tr>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">1</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">2984</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">BPML</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">-2470.19</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">10000</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">-12470.19</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">26th December 2022</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]"><label class="bg-[#dd4b39] label label-danger">Pending</label></td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3 text-[#367fa9]" href="javascript:;" data-tw-toggle="modal" data-tw-target="#change-status">
                                                Change Status <i data-lucide="power" class="w-6 h-6"></i>
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
        <!-- BEGIN: status change Modal Content -->
        <div id="change-status" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- BEGIN: Modal Body -->
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-base font-semibold">Change Status</label>
                            <select class="form-control" id="order_status">
                                <option value="1" selected="selected">Pending</option>
                                <option value="2">Submitted</option>
                                <option value="3">Rejected</option>
                                <option value="4">Cancel</option>
                                <option value="5">Executed</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: Modal Body -->
                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                        <button type="button" class="btn btn-primary w-30">Change Status</button>
                    </div>
                    <!-- END: Modal Footer -->
                </div>
            </div>
        </div>
        <!-- END: Modal Content -->
    </div>
@endsection
