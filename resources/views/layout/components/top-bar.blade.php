<!-- BEGIN: Top Bar -->
<div class="top-bar-boxed {{ isset($class) ? $class : '' }} h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
            <img alt="Stock Market Profile" class="logo__image w-25" src="{{ asset('build/assets/images/entertech.png') }}">
            <span class="logo__text text-white text-lg ml-3">

            </span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto ml-9 flex">
            <div class="cursor-pointer menu-icon text-white" role="button">
                <a href="{{ route(Route::current()->getName(),'layout=top-menu')}}"><i data-lucide="arrow-up" id="arrow-up"></i></a>

                <a href="{{ route(Route::current()->getName(),'layout=simple-menu')}}"><i data-lucide="arrow-left" id="arrow-left"></i></a>
                <a href="{{ route(Route::current()->getName(),'layout=side-menu')}}"><i data-lucide="arrow-right" id="arrow-right"></i></a>
            </div>

            <div class="intro-x relative ml-5 mr-3 sm:mr-6">
                <div class="search hidden sm:block w-[400px]">
                    <select data-placeholder="Select Company code" class="search__input form-control border-transparent tom-select !w-[400px]">
                            <option value=""></option>
                            <option value="1">Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                    </select>
                    <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification notification--light sm:hidden" href="">
                    <i data-lucide="search" class="notification__icon dark:text-slate-500"></i>
                </a>
{{--                 <div class="search-result">
                    <div class="search-result__content">


                    </div>
                </div> --}}
            </div>
            <!-- <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><a href="#">Application</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol> -->
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->

        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x mr-4 sm:mr-6">
            <div data-url="{{ route('dark-mode-switcher') }}" class="dark-mode-switcher cursor-pointer w-10 h-12 flex items-center justify-center z-50">

                    <div class="dark-mode-switcher__toggle {{ $dark_mode ? 'dark-mode-switcher__toggle--active' : '' }} border"></div>
                </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Stock Market Profile" src="{{ asset('build/assets/images/' . $fakers[9]['photos'][0]) }}">
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Client code: {{ Auth::user()->client_code }}</div>
                    </li>
                    <li><hr class="dropdown-divider border-white/[0.08]"></li>
                    <li>
                        <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5">
                            <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
        <div class="intro-x dropdown mr-4 sm:mr-6">
            <div class="dropdown-toggle cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <div class="font-medium ml-2 text-white">{{ Auth::user()->name }}</div>
                <div class="ml-2 text-xs text-white/60 mt-0.5 dark:text-slate-500">Client code: {{ Auth::user()->client_code }}</div>
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Client code: {{ Auth::user()->client_code }}</div>
                    </li>
                    <li><hr class="dropdown-divider border-white/[0.08]"></li>
                    <li>
                        <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5">
                            <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Top Bar -->

@section('script')
    <script type="module">
        (function () {
            // menu toggle
            var current_url = window.location.href;
            console.log(current_url.split("=")[1]);
            if(current_url.split("=")[1] == 'top-menu'){
                $('#arrow-up').css({
                    'display': 'none'
                });
            }else if(current_url.split("=")[1] == 'side-menu') {
                $('#arrow-right').css({
                    'display': 'none'
                });
            }else{
                $('#arrow-left').css({
                    'display': 'none'
                });
            }


            $('#arrow-up').on('click', function() {
                $('#arrow-up').css({
                    'display': 'none'
                });
                $('#arrow-left').css({
                    'display': 'block'
                });
                $('#arrow-right').css({
                    'display': 'block'
                });
            });

            $('#arrow-left').on('click', function() {
                $('#arrow-left').css({
                    'display': 'none'
                });
                $('#arrow-right').css({
                    'display': 'block'
                });
                $('#arrow-up').css({
                    'display': 'block'
                });
            });

            $('#arrow-right').on('click', function() {
                $('#arrow-right').css({
                    'display': 'none',
                });
                $('#arrow-left').css({
                    'display': 'block'
                });
                $('#arrow-up').css({
                    'display': 'block'
                });
            });

        })()
    </script>
@endsection
