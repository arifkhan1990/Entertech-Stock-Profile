@extends('../layout/' . $layout)

@section('subhead')
    <title>Application Setup - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-3 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <div class="ml-4 mr-auto">
                        <div class="font-lg font-semibold text-lg text-[--theme-color]">Application Setup</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-[16px]" href="{{ route('menus') }}">
                        <i data-lucide="newspaper" class="w-4 h-4 mr-2"></i>Menus
                    </a>
                    <a class="flex items-center text-[16px] mt-5 text-primary font-medium" href="{{ route('sub-menus')}}">
                        <i data-lucide="boxes" class="w-4 h-4 mr-2"></i> Sub Menus
                    </a>
                    <a class="flex items-center text-[16px] mt-5" href="{{ route('app-master-data')}}">
                        <i data-lucide="file-type-2" class="w-4 h-4 mr-2"></i> Master Data
                    </a>
                    <a class="flex items-center text-[16px] mt-5" href="{{ route('footer-data')}}">
                        <i data-lucide="factory" class="w-4 h-4 mr-2"></i> Footer Data
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-9 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex flex-col sm:flex-row items-center p-5">
                        <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-more-modal">
                                <button class="btn btn-primary shadow-md mr-2 uppercase">Add More</button>
                            </a>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table mt-2">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center whitespace-nowrap">#</th>
                                    <th class="text-center whitespace-nowrap">MENU TITEL</th>
                                    <th class="text-center whitespace-nowrap">SUB MENU TITEL</th>
                                    <th class="text-center whitespace-nowrap">ROUTE NAME</th>
                                    <th class="text-center whitespace-nowrap">ICON</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">User</td>
                                    <td class="text-center">User Analytics</td>
                                    <td class="text-center">user-analytics</td>
                                    <td class="flex items-center justify-center"><i data-lucide="" class="w-5 h-5"></i></td>
                                    <td class="w-25 text-center">
                                        <div class="flex items-center justify-center {{ $fakers[0]['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $fakers[0]['true_false'][0] ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    <td class="table-report__action w-56 align-middle">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#editUserData-confirmation-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">User</td>
                                    <td class="text-center">User Accounts</td>
                                    <td class="text-center">user-accounts</td>
                                    <td class="flex items-center justify-center"><i data-lucide="" class="w-5 h-5"></i></td>
                                    <td class="w-25 text-center">
                                        <div class="flex items-center justify-center {{ $fakers[1]['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $fakers[1]['true_false'][0] ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    <td class="table-report__action w-56 align-middle">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#editUserData-confirmation-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">User</td>
                                    <td class="text-center">Group Account</td>
                                    <td class="text-center">group-account</td>
                                    <td class="flex items-center justify-center"><i data-lucide="banknote" class="w-5 h-5"></i></td>
                                    <td class="w-25 text-center">
                                        <div class="flex items-center justify-center {{ $fakers[2]['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $fakers[2]['true_false'][0] ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    <td class="table-report__action w-56 align-middle">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#editUserData-confirmation-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Daily Sales -->

            </div>
        </div>
        <!-- BEGIN: delete user confirmation modal Content -->
        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
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

        <!-- BEGIN: ban user confirmation modal Content -->
        <div id="editUserData-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="check-square" class="w-16 h-16 text-success mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">Do you really want to Edit this menu Info? <br>This process cannot be undone.</div>
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
        <!-- BEGIN: status change Modal Content -->
        <div id="add-more-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- BEGIN: Modal Body -->
                    <div class="px-5 pt-5 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">MENU TITEL</label>
                                <select class="form-select form-select-lg sm:mr-2" id="modal-form-5" class="form-control" aria-label="select">
                                    <option>Dashboard</option>
                                    <option>User</option>
                                    <option>Trade</option>
                                    <option>Transaction</option>
                                </select>
                        </div>
                    </div>
                    <div class="px-5 pt-2 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">SUB MENU NAME</label>
                            <input id="modal-form-5" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="px-5 pt-2 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">SUB MENU TITEL</label>
                            <input id="modal-form-5" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="px-5 pt-2 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">ROUTE NAME</label>
                            <input id="modal-form-5" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="px-5 pt-2 pb-5 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold">ICON</label>
                            <input id="modal-form-5" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="px-5 pt-2 pb-5 grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label for="modal-form-5" class="form-label text-lg font-semibold mr-2">STATUS</label>
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
