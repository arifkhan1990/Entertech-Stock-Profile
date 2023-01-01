@extends('../layout/' . $layout)

@section('subhead')
    <title>User Analytics - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-3">
                    <div class="intro-y flex items-center h-10 float-right">

                        <button class="dropdown-toggle btn px-2 box mr-2" aria-expanded="false" data-tw-toggle="dropdown">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i class="w-4 h-4" data-lucide="plus"></i>
                            </span>
                        </button>
                        <button class="btn btn-primary shadow-md mr-2">Add New User</button>
                    </div>
                </div>

                <div class="col-span-12 mt-3">
                    <div class="grid grid-cols-12 gap-6 mt-0">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 mt-6 text-primary">{{ $card_data->TOT_USER}}</div>
                                    <div class="text-base text-slate-500 mt-1">TOTAL USER</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 mt-6 text-primary">{{ $card_data->FREE_USER}}</div>
                                    <div class="text-base text-slate-500 mt-1">FREE USER</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 mt-6 text-primary">{{ $card_data->PREMIUM_USER}}</div>
                                    <div class="text-base text-slate-500 mt-1">PREMIUM USER</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 mt-6 text-primary">{{ $card_data->ADMIN_USER}}</div>
                                    <div class="text-base text-slate-500 mt-1">ADMIN USER</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-9">
            <div class="col-span-12 mt-3">
                <div class="intro-y flex items-center h-10 float-right">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                    </div>
                </div>
            </div>
                <!-- BEGIN: Data List -->
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="text-center whitespace-nowrap">SI</th>
                                <th class="whitespace-nowrap">IMAGES</th>
                                <th class="whitespace-nowrap text-left">USER NAME</th>
                                <th class="text-center whitespace-nowrap">USER TYPE</th>
                                <th class="text-center whitespace-nowrap">EMAIL ADDRESS</th>
                                <th class="text-center whitespace-nowrap">CONTACT NUMBER</th>
                                <th class="text-center whitespace-nowrap">JOINED AT</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $si=1;
                            @endphp
                            @foreach ($get_data as $key => $val)
                                <tr class="intro-x">
                                    <td class="text-center">{{ $si }}</td>
                                    <td class="w-25">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Entertech - Stock Profile" class="tooltip rounded-5" src="{{ asset('build/assets/images/profile-1.jpg') }}" title="{{ $val->name }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">{{ $val->name }}</td>
                                    <td class="text-center ">{{ $val->user_type }}</td>
                                    <td class="text-center">{{ $val->email }}</td>
                                    <td class="text-center">{{ $val->mobile }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::createFromFormat('Y-m-d',  $val->joined_date)->format('d F Y') }}</td>
    {{--                                 <td class="w-40">
                                        <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td> --}}
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                   $si += 1;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $get_data->links('pagination::tailwind')}}
                    </div>
                </div>
                <!-- END: Data List -->
            </div>
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
        </div>

        <!-- BEGIN: Notification Content -->
        <div id="delete-notification-content" class="toastify-content hidden flex">
            <i class="text-success" data-lucide="check-circle"></i>
            <div class="ml-4 mr-4">
                <div class="font-medium">User Info Deleted!</div>
                <div class="text-slate-500 mt-1">The message will be sent in 5 minutes.</div>
            </div>
        </div>
        <!-- END: Notification Content -->
        <!-- BEGIN: Notification Toggle -->
        <button id="success-notification-toggle" class="btn btn-primary">Show Notification</button>
        <!-- END: Notification Toggle -->
    </div>
@endsection
