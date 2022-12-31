@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-3">
                    <div class="grid grid-cols-12 gap-6 mt-5">
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
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 lg:col-span-6 mt-3">
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="flex">
                                <h2 class="text-lg font-medium truncate mr-5">User Summery</h2>
                            </div>
                            <div class="dropdown md:ml-auto mt-5 md:mt-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter by Category <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li><a href="" class="dropdown-item">Day</a></li>
                                        <li><a href="" class="dropdown-item">Week</a></li>
                                        <li><a href="" class="dropdown-item">Month</a></li>
                                        <li><a href="" class="dropdown-item">Year</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart">
                            <div class="h-[275px]">
                                <canvas id="report-line-chart" class="mt-6 -mb-6"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <div class="col-span-12 lg:col-span-6 mt-3">
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="flex">
                                <h2 class="text-lg font-medium truncate mr-5">Trade Summary</h2>
                            </div>
                            <div class="dropdown md:ml-auto mt-5 md:mt-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter by Category <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li><a href="" class="dropdown-item">Day</a></li>
                                        <li><a href="" class="dropdown-item">Week</a></li>
                                        <li><a href="" class="dropdown-item">Month</a></li>
                                        <li><a href="" class="dropdown-item">Year</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart">
                            <div class="h-[275px]">
                                <canvas id="report-line-chart" class="mt-6 -mb-6"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
