@extends('../layout/' . $layout)

@section('subhead')
    <title>Market Data - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-3 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <div class="ml-4 mr-auto">
                        <div class="font-lg font-semibold text-lg text-[--theme-color]">Market Data</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-[16px] font-medium" href="{{ route('market-news-data')}}">
                        <i data-lucide="newspaper" class="w-4 h-4 mr-2"></i>News
                    </a>
                    <a class="flex items-center font-medium text-[16px] font-medium mt-5" href="{{ route('market-events-data')}}">
                        <i data-lucide="boxes" class="w-4 h-4 mr-2"></i> Events
                    </a>
                    <a class="flex items-center text-[16px] font-medium mt-5" href="{{ route('market-category-data')}}">
                        <i data-lucide="file-type-2" class="w-4 h-4 mr-2"></i> Category
                    </a>
                    <a class="flex items-center text-[16px] font-medium mt-5" href="{{ route('market-industry-data')}}">
                        <i data-lucide="factory" class="w-4 h-4 mr-2"></i> Industry Data
                    </a>
                    <a class="flex items-center text-[16px] text-primary  font-medium mt-5" href="{{ route('market-company-data')}}">
                        <i data-lucide="building-2" class="w-4 h-4 mr-2"></i> Company Data
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
                            <button class="btn btn-primary shadow-md mr-2 uppercase">Add More</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table mt-2">
                            <thead class="table-light">
                                <tr>
                                    <th class="whitespace-nowrap text-center">INDUSTRY NAME</th>
                                    <th class="whitespace-nowrap uppercase text-center">COMPANY CODE</th>
                                    <th class="whitespace-nowrap uppercase text-center">COMPANY NAME</th>
                                    <th class="whitespace-nowrap uppercase text-center">CATEGORY</th>
                                    <th class="whitespace-nowrap uppercase text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">PharmaChem</td>
                                    <td class="text-center">ACI</td>
                                    <td class="text-center">Advanced Chemical Industries Limited</td>
                                    <td class="text-center">A</td>
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
                                    <td class="text-center">Insurance</td>
                                    <td class="text-primary text-center">AGRANINS</td>
                                    <td class="text-center">Agrani Insurance Company Limited</td>
                                    <td class="text-center">B</td>
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
                                <div class="text-slate-500 mt-2">Do you really want to delete these company data request? <br>This process cannot be undone.</div>
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
                                <label for="modal-form-5" class="form-label text-lg font-semibold">INDUSTRY NAME</label>
                                <select class="form-select form-select-lg sm:mr-2" id="modal-form-5" class="form-control" aria-label="select">
                                    <option>PharmaChem</option>
                                    <option>IT</option>
                                    <option>Bank</option>
                                    <option>Textile</option>
                                </select>

                            </div>
                        </div>
                        <div class="px-5 pt-2 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-12">
                                <label for="modal-form-5" class="form-label text-lg font-semibold">CATEGORY NAME</label>
                                <select class="form-select form-select-lg sm:mr-2" id="modal-form-5" class="form-control" aria-label="select">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>F</option>
                                    <option>G</option>
                                    <option>K</option>
                                </select>
                            </div>
                        </div>
                        <div class="px-5 pt-2 pb-2 grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-12">
                                <label for="modal-form-5" class="form-label text-lg font-semibold">COMPANY CODE</label>
                                <input id="modal-form-5" type="password" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="px-5 pt-2 pb-5 grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-12">
                                <label for="modal-form-5" class="form-label text-lg font-semibold">COMPANY NAME</label>
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
