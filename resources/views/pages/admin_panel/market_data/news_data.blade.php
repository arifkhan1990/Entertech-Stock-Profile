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
                    <a class="flex items-center text-[16px] text-primary font-medium" href="{{ route('market-events-data')}}">
                        <i data-lucide="newspaper" class="w-4 h-4 mr-2"></i>News
                    </a>
                    <a class="flex items-center text-[16px] mt-5 active" href="{{ route('market-events-data')}}">
                        <i data-lucide="boxes" class="w-4 h-4 mr-2"></i> Events
                    </a>
                    <a class="flex items-center text-[16px] mt-5" href="{{ route('market-category-data')}}">
                        <i data-lucide="file-type-2" class="w-4 h-4 mr-2"></i> Category
                    </a>
                    <a class="flex items-center text-[16px] mt-5" href="{{ route('market-industry-data')}}">
                        <i data-lucide="factory" class="w-4 h-4 mr-2"></i> Industry Data
                    </a>
                    <a class="flex items-center text-[16px] mt-5" href="{{ route('market-company-data')}}">
                        <i data-lucide="building-2" class="w-4 h-4 mr-2"></i> Company Data
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-9 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Date picker from -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                   <div class="grid grid-cols-12 gap-6  mt-8 mb-8">
                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block">
                            <div class="intro-y box col-span-12 2xl:col-span-6 ml-8 mt-2">
                                <div class="relative w-70 mx-auto">
                                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                        <i data-lucide="calendar" class="w-4 h-4"></i>
                                    </div>
                                    <input type="text" class="datepicker form-control pl-12" data-single-mode="true" placeholder="From Date">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block">
                            <div class="intro-y box col-span-12 2xl:col-span-6 ml-8 mt-2">
                                <div class="relative w-70 mx-auto">
                                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                        <i data-lucide="calendar" class="w-4 h-4"></i>
                                    </div>
                                    <input type="text" class="datepicker form-control pl-12" data-single-mode="true" placeholder="To Date">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block">
                            <div class="intro-y box col-span-12 2xl:col-span-6 mt-2 mr-2">
                                <div class="relative w-56 mx-auto">
                                    <a href="" class="btn btn-success w-24 text-white inline-block mr-1 mb-2">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END: Date picker from -->
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
                                    <th class="whitespace-nowrap">#</th>
                                    <th class="whitespace-nowrap uppercase">TRADING CODE</th>
                                    <th class="whitespace-nowrap uppercase">NEWS DETAILS</th>
                                    <th class="whitespace-nowrap uppercase">POSTED AT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Angelina</td>
                                    <td>Jolie</td>
                                    <td>@angelinajolie</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Brad</td>
                                    <td>Pitt</td>
                                    <td>@bradpitt</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Charlie</td>
                                    <td>Hunnam</td>
                                    <td>@charliehunnam</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Daily Sales -->

            </div>
        </div>
    </div>
@endsection
