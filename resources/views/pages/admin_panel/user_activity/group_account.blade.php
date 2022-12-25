@extends('../layout/' . $layout)

@section('subhead')
    <title>Group Accounts - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9 mt-10">
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report table-hover -mt-2">
                    <thead>
                        <tr>
                            <th class="text-center whitespace-nowrap">SI</th>
                            <th class="text-left whitespace-nowrap">GROUP NAME</th>
                            <th class="text-center whitespace-nowrap">B.O ID'S</th>
                            <th class="text-center whitespace-nowrap">CLIENT CODE</th>
                            <th class="text-center whitespace-nowrap">STATUS</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (array_slice($fakers, 0, 9)  as $key => $faker)
                            <tr class="intro-x">
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td class="text-left">{{ $faker['users'][0]['name'] }}</td>
                                <td class="text-center text-[#17a0e0]">{{ $faker['phoneNumber'][0] }}</td>
                                <td class="text-center">{{ $faker['clientCode'][0] }}</td>
                                <td class="w-25">
                                    <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Approve' : 'Reject' }}
                                    </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3 text-primary" href="javascript:;" data-tw-toggle="modal" data-tw-target="#change-status">
                                            <i data-lucide="shrink" class="w-5 h-5 mr-1"></i> Change Status
                                        </a>
                                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-group-account">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="w-4 h-4" data-lucide="chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="w-4 h-4" data-lucide="chevron-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
            <!-- END: Pagination -->

            <!-- BEGIN: delete group account confirmation modal Content -->
            <div id="delete-group-account" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-slate-500 mt-2">Do you really want to delete these group account request? <br>This process cannot be undone.</div>
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
            <div id="change-status" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- BEGIN: Modal Body -->
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-12">
                                <div class="overflow-x-auto">
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">#</th>
                                                <th class="whitespace-nowrap uppercase">User Name</th>
                                                <th class="whitespace-nowrap uppercase">B.O ID's</th>
                                                <th class="whitespace-nowrap uppercase">Client Code</th>
                                                <th class="whitespace-nowrap uppercase">Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (array_slice($fakers, 0, 3)  as $key => $faker)
                                                <tr class="intro-x">
                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                    <td class="text-left">{{ $faker['users'][0]['name'] }}</td>
                                                    <td class="text-center text-[#17a0e0]">{{ $faker['phoneNumber'][0] }}</td>
                                                    <td class="text-center">{{ $faker['clientCode'][0] }}</td>
                                                    <td class="text-center">{{ $faker['numberAc'][0] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Body -->
                        <!-- BEGIN: Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                            <button type="button" class="btn btn-success text-white w-20">Approve</button>
                            <button type="button" class="btn btn-danger text-white w-20">Reject</button>
                        </div>
                        <!-- END: Modal Footer -->
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->
        </div>
    </div>
@endsection
