@include('template.app.header')

<body>
    <div id="page-container" class="sidebar-open">
        <div id="page-overlay"></div>

        <!-- navbar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="float-left">
                    <a href="#" id="close-sidebar" class="bundar"><i class="fas fa-fw fa-times"></i></a>
                </div>
                <a href="/">
                    <span class="sidebar-header-title">{{ config('app.name') }}</span>
                </a>
            </div>

            <section class="sidebar-logo">
                <div class="logo-circle">
                    <i class="far fa-user"></i>
                </div>
            </section>
            <section class="row">
                <ul class="column sidebar-nav">
                    @php
                    if(!Auth::guard('member')->user()->username){
                    $tbl = "user";
                    }else{
                    $tbl = "member";
                    }

                    if($tbl=="user"){
                    $role = Auth::guard($tbl)->user()->level;
                    }else{
                    $role=4;
                    }


                    $a= DB::table('titlemenus')->where('id',$role)->first();
                    $b= DB::table('menus')->where(['titlemenu_id'=>$role,'is_active'=>1])->get();
                    @endphp

                    <li class="nav-section-heading">{{ $a->name }}</li>
                    @foreach ($b as $menu)
                        <li>
                            <a class="sentuh" href="{{ $menu->url }}" class="">
                                <i class="{{ $menu->icon }}" aria-hidden="true"></i>
                                <span class="tekken">{{ $menu->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>
        </nav>

        <!-- header -->
        <div id="page-content" class="container-fluid">
            <div class="row page-header">
                <div class="column">
                    <a href="#" id="toggle-sidebar" class="bundar"><i class="fas fa-fw fa-bars"></i></a>
                </div>
                <div class="column">
                    <div class="user">
                        {{-- <p>{{ Auth::user()->name }}</p>
                        --}}
                        <a class="dropdown-item button" href="{{ route('logout') }}">
                            {{ __('Logout') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- content -->
        <div id="page-body">
            @yield('content')
        </div>
    </div>


    <script src="{{ asset('js/admin.js') }}">
    </script>
    @stack('popup')
    @stack('scripts')
</body>

</html>