@extends('../layout/' . $layout)

@section('subhead')
    <title>Stock Order - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y box col-span-12 2xl:col-span-6 bg-primary">
            <div class="flex flex-row items-start p-5">
                <h2 class="text-xl font-medium items-start font-semibold text-white">All Stock Order</h2>
            </div>
        </div>
        <div class="intro-y box col-span-12 2xl:col-span-6">
            <div class="overflow-x-auto">
                <table class="table mt-1">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">SI</th>
                            <th class="text-left !px-[0.5rem] !py-[0.75rem]">User Name</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Order Type</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Market</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Secutiry Code</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Client Code</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Current Rate</th>

                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Order Rate</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">B.O Account</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Number of Share</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Total Amount</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Request Date</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Status</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">From</th>
                            <th class="text-center !px-[0.5rem] !py-[0.75rem]">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">1</td>
                            <td class="text-left !px-[0.5rem] !py-[0.75rem]">FAYSAL JAHANGIR </td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]"><label class="bg-[#f39c12] label label-warning">sell</label></td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem] !px-[0.5rem] !py-[0.75rem]">DSE</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">AGNISYSL</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">7770</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">18.8000</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">19.0000</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">1205590069570705</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">10</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">190</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]">26th December 2022</td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]"><label class="bg-[#dd4b39] label label-danger">Pending</label></td>
                            <td class="text-center !px-[0.5rem] !py-[0.75rem]"><label class="bg-[#00a65a] label label-success">WEB</label></td>
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
        <!-- BEGIN: password change Modal Content -->
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
