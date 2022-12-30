@extends('../layout/' . $layout)

@section('subhead')
    <title>IPO Settings - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: HTML Table Data -->
        <div class="intro-y col-span-12 2xl:col-span-6 box p-5 mt-5">
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <div class="flex items-end mt-5 sm:mt-0">
                    <button id="tabulator-print" class="btn btn-primary w-1/2 sm:w-auto mr-2" data-tw-toggle="modal" data-tw-target="#ipo_setting-modal">
                        <i data-lucide="settings" class="w-4 h-4 mr-2"></i> IPO Setting
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto scrollbar-hidden mt-5">
                <div class="mt-5 table-report table-report--tabulator tabulator" role="grid" tabulator-layout="fitColumns">
                    <div class="" style="padding-right: 0px; margin-left: 0px;">
                        <div class="" style="margin-left: 0px;">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">SI</th>
                                            <th class="text-left !px-[0.5rem] !py-[0.75rem]">Script Name</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Amount</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Application Start Date</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Application End Date</th>
                                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                        <tr>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">1</td>
                                            <td class="text-left !px-[0.5rem] !py-[0.75rem]">BPML</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">17770</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">26th December 2022</td>
                                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">26th December 2023</td>
                                            <td class="w-25">
                                                <div class="cursor-pointer flex items-center justify-center {{ $fakers[0]['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $fakers[0]['true_false'][0] ? 'Active' : 'Inactive' }}
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
        <div id="ipo_setting-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- BEGIN: Modal Body -->
                    <div class="px-5 pt-5 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">SCRIPT NAME</label>
                            <input id="modal-form-5" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="px-5 pt-2 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">AMOUNT</label>
                            <input id="modal-form-5" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="px-5 pt-2 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">START DATE</label>
                            <input id="modal-form-5" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="px-5 pt-2 pb-5 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">END DATE</label>
                            <input id="modal-form-5" type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="px-5 pt-2 pb-5 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold mr-2">Status</label>
                            <input id="checkbox-switch-4" class="form-check-input border-solid border border-indigo-700" type="checkbox" value="">
                            <label class="form-check-label" for="checkbox-switch-4">ACTIVE</label>
                        </div>
                    </div>
                    <!-- END: Modal Body -->
                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                        <button type="button" class="btn btn-primary w-30">Submit</button>
                    </div>
                    <!-- END: Modal Footer -->
                </div>
            </div>
        </div>
        <!-- END: Modal Content -->
    </div>
@endsection
