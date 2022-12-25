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
                    <a class="flex items-center text-[16px] text-primary font-medium mt-5" href="{{ route('market-events-data')}}">
                        <i data-lucide="boxes" class="w-4 h-4 mr-2"></i> Events
                    </a>
                    <a class="flex items-center text-[16px] font-medium mt-5" href="{{ route('market-category-data')}}">
                        <i data-lucide="file-type-2" class="w-4 h-4 mr-2"></i> Category
                    </a>
                    <a class="flex items-center text-[16px] font-medium mt-5" href="{{ route('market-industry-data')}}">
                        <i data-lucide="factory" class="w-4 h-4 mr-2"></i> Industry Data
                    </a>
                    <a class="flex items-center text-[16px] font-medium mt-5" href="{{ route('market-company-data')}}">
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
                                    <th class="whitespace-nowrap">#</th>
                                    <th class="whitespace-nowrap uppercase">CATEGORY</th>
                                    <th class="whitespace-nowrap uppercase">TRADING CODE</th>
                                    <th class="whitespace-nowrap uppercase">YEAR END</th>
                                    <th class="whitespace-nowrap uppercase">DIVIDENT IN (%)</th>
                                    <th class="whitespace-nowrap uppercase">VANUE</th>
                                    <th class="whitespace-nowrap uppercase">TIME</th>
                                    <th class="whitespace-nowrap uppercase">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Daily Sales -->

            </div>
        </div>
    </div>
@endsection
