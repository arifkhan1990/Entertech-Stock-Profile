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
            <div class="cursor-pointer menu-icon" role="button">
                <a href="{{ route(Route::current()->getName(),'layout=top-menu')}}"><i data-lucide="arrow-up" id="arrow-up"></i></a>

                <a href="{{ route(Route::current()->getName(),'layout=simple-menu')}}"><i data-lucide="arrow-left" id="arrow-left"></i></a>
                <a href="{{ route(Route::current()->getName(),'layout=side-menu')}}"><i data-lucide="arrow-right" id="arrow-right"></i></a>
            </div>

            <div class="intro-x relative ml-5 mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                    <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification notification--light sm:hidden" href="">
                    <i data-lucide="search" class="notification__icon dark:text-slate-500"></i>
                </a>
                <div class="search-result">
                    <div class="search-result__content">

                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Stock Market Profile" class="rounded-full" src="{{ asset('build/assets/images/' . $faker['images'][0]) }}">
                                </div>
                                <div class="ml-3">{{ $faker['products'][0]['name'] }}</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">{{ $faker['products'][0]['category'] }}</div>
                            </a>
                        @endforeach
                    </div>
                </div>
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
        <div class="intro-x dropdown mr-4 sm:mr-6">
            <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i>
            </div>
            <div class="notification-content pt-2 dropdown-menu">
                <div class="notification-content__box dropdown-content">
                    <div class="notification-content__title">Notifications</div>
                    @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                        <div class="cursor-pointer relative flex items-center {{ $key ? 'mt-5' : '' }}">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Stock Market Profile" class="rounded-full" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">{{ $faker['users'][0]['name'] }}</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ $faker['times'][0] }}</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">{{ $faker['news'][0]['short_content'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
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
                        <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </li>
                    <li><hr class="dropdown-divider border-white/[0.08]"></li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help
                        </a>
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
