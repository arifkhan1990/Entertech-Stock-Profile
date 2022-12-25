@extends('../layout/' . $layout)

@section('subhead')
    <title>Circuit Breaker - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: sub Menu -->
        <div class="col-span-12 lg:col-span-3 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <div class="ml-4 mr-auto">
                        <div class="font-lg font-semibold text-lg text-[--theme-color]">Circuit Breaker</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-[16px] text-primary font-medium" href="{{ route('dse')}}">
                        <i data-lucide="newspaper" class="w-4 h-4 mr-2"></i>DSE
                    </a>
                    <a class="flex items-center text-[16px] font-medium mt-5" href="{{ route('cse')}}">
                        <i data-lucide="boxes" class="w-4 h-4 mr-2"></i> CSE
                    </a>
                </div>
            </div>
        </div>
        <!-- END: sub Menu -->
        <div class="col-span-12 lg:col-span-9 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">

                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex flex-col sm:flex-row items-center p-5">
                        <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn btn-primary shadow-md mr-2 uppercase">Add More</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table mt-2">
                            <thead class="table-light">
                                <tr>
                                    <th class="whitespace-nowrap text-center">#</th>
                                    <th class="whitespace-nowrap uppercase text-center">CIRCUI BREAKER RANGE</th>
                                    <th class="whitespace-nowrap uppercase text-center">CIRCUIT BREAKER VALUE</th>
                                    <th class="whitespace-nowrap uppercase text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">0 - 200</td>
                                    <td class="text-center">11.00%</td>
                                    <td class="table-report__action w-56 items-center">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">201 - 500</td>
                                    <td class="text-center">8.80%</td>
                                    <td class="table-report__action w-56 items-center">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">501 - 1000</td>
                                    <td class="text-center">7.80%</td>
                                    <td class="table-report__action w-56 items-center">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">1001 - 2000</td>
                                    <td class="text-center">17.80%</td>
                                    <td class="table-report__action w-56 items-center">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Daily Sales -->

            </div>
                        <!-- BEGIN: delete group account confirmation modal Content -->
            <div id="delete-modal" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-slate-500 mt-2">Do you really want to delete these dse data request? <br>This process cannot be undone.</div>
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

            <!-- BEGIN: status change Modal Content -->
            <div id="edit-modal" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- BEGIN: Modal Body -->
                        <div class="px-5 pt-5 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-12">
                                <label for="modal-form-5" class="form-label text-lg font-semibold">RANGE START</label>
                                <input id="modal-form-5" type="password" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="px-5 pt-2 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-12">
                                <label for="modal-form-5" class="form-label text-lg font-semibold">RANGE END</label>
                                <input id="modal-form-5" type="password" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="px-5 pt-2 pb-5 grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-12">
                                <label for="modal-form-5" class="form-label text-lg font-semibold">CIRCUIT BREAKER VALUE (%)</label>
                                <input id="modal-form-5" type="password" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!-- END: Modal Body -->
                        <!-- BEGIN: Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                            <button type="button" class="btn btn-primary w-30">Save Change</button>
                        </div>
                        <!-- END: Modal Footer -->
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->
        </div>
    </div>
@endsection
