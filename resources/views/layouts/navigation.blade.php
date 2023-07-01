@if (Auth::user()->hasRole('admin'))
    <div class="">


        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion " id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="{{asset('logo1.png')}}" width="60px" alt="">
                    </div>
                    <div class="mx-3 sidebar-brand-text">MAO<sup>Admin</sup></div>
                </a>

                <!-- Divider -->
                <hr class="my-0 sidebar-divider">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <button onclick="javascript:dashboardFunc()"  class="nav-link" >
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        Dashboard
                    </button>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Menus
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item ">
                    <div>
                        <div class="py-2 mx-2 rounded collapse-inner nav-item">
                            {{-- <button onclick="farmersFunc()" class="text-center nav-link collapse-item btn btn-success w-100" >
                                <i class="fa fa-solid fa-rectangle-list"></i>
                                Farmers
                            </button>
                            {{-- <button onclick="reportsFunc()" class="text-center nav-link collapse-item btn btn-success w-100" >
                                <i class="fa fa-solid fa-rectangle-list"></i>
                                Reports
                            </button> --}}
                            <button onclick="tableFunc()" id="farmerbtn" class="text-center nav-link collapse-item btn btn-success w-100">
                                <i class="fa fa-solid fa-users"></i>
                                Farmers
                            </button>
                            <button onclick="reportFunc()" id="reportbtn" class="text-center nav-link collapse-item btn btn-success w-100">
                                <i class="fa fas fa-solid fa-list-check"></i>
                                Reports
                            </button>
                            <button onclick="javascript:aboutFunc()" id="aboutbtn"   class="text-center nav-link btn btn-success w-100">
                                <i class="fa fas fa-thin fa-circle-info"></i>
                                 About
                                </button>
                            <button onclick="javascript:servicesFunc()" id="servicebtn" class="text-center nav-link collapse-item btn btn-success w-100">
                                <i class="fa fas fa-solid fa-hand-holding"></i>
                                Services
                            </button>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Settings</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="py-2 bg-white rounded collapse-inner">
                            <h6 class="collapse-header">Custom Settings:</h6>
                            <a class="collapse-item" href="">Themes</a>
                            <a class="collapse-item" href="">Icons</a>
                            <a class="collapse-item" href="">Sizes</a>
                            <a class="collapse-item" href="">Other</a>
                        </div>
                    </div>
                </li> --}}

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="border-0 rounded-circle" id="sidebarToggle"></button>
                </div>



            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content" >

                    <!-- Topbar -->
                    <nav id="navbar-dark" class="mb-4 shadow border-bottom navbar navbar-expand navbar-light topbar static-top">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        {{-- <form
                            class="my-2 mr-auto d-none d-sm-inline-block form-inline ml-md-3 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="border-0 form-control bg-light small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form> --}}

                        <!-- Topbar Navbar -->
                        <ul class="ml-auto navbar-nav profileimg">

                            {{-- <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="mr-auto form-inline w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="border-0 form-control bg-light small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li> --}}


                            @php
                                $count = App\Models\ContactRequest::where('name','!=','admin')->count();
                            @endphp
                            <!-- Nav Item - Messages -->
                            <li class="mx-1 nav-item dropdown no-arrow " id="showM">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown clickM" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas text-success fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">
                                        {{$count}}
                                    </span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div id="showM" class="shadow dropdown-list dropdown-menu dropdown-menu-right animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header bg-success">
                                        Message Center
                                    </h6>
                                    @php
                                        $messages = App\Models\ContactRequest::paginate(5);
                                        $replys = App\Models\Reply::all();
                                        $seens = App\Models\Seen::all();
                                    @endphp
                                    <div class="overflow-scroll messagescroll">
                                    @foreach ($messages as $message)
                                        @if ($message->name != 'Admin')
                                            <a class="dropdown-item d-flex align-items-center ReplyMsg" data-id="{{$message->id}}" href="#" >
                                                <div class="mr-3 dropdown-list-image">
                                                    <i class="text-gray-500 fas fa-2x fa-solid fa-user-tie"></i>

                                                    <div class="status-indicator bg-success"></div>
                                                </div>
                                                {{-- S E E N --}}
                                                <form class="font-weight-bold w-100" action="{{route('message-delete')}}"  method="GET" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="justify-end d-flex">
                                                        <button type="submit" name="{{$loop->index}}"  class="cursor-pointer btn text-danger" data-bs-toggle="modal" data-bs-target="#messagedelete{{$message->id}}">
                                                            <i class="fa fa-solid fa-circle-xmark"></i>
                                                        </button>
                                                        <input type="hidden" name="message" value="{{$message->id}}">
                                                    </div>

                                                    <div class="text-truncate">{{$message->name}}</div>
                                                    <div class="text-gray-500 small">{{$message->message}}</div>
                                                    <div class="text-muted small">{{$message->created_at->diffForHumans()}}</div>
                                                </form>
                                            </a>
                                            <form action="{{route('message-reply')}}" method="POST" class="border w-100" id="ReplyMessage{{$message->id}}" style="display: none;">
                                                @csrf
                                                <p class="italic">To: <b class="text-primary"> {{$message->name}} </b></p>
                                                <input type="hidden" name="id" value="{{$message->id}}">
                                                <input type="hidden" name="email" value="{{$message->email}}">
                                                <input type="hidden" name="name" value="Admin">

                                                <div class="w-100 d-flex">
                                                    <textarea type="text" class="border-0 w-100 input-group" rows="1" placeholder="Reply.." name="txtreply" id="txtreply"></textarea>
                                                    <button type="submit"  class="px-3 text-center btn btn-sm btn-primary"> <i class="mt-2 fas fa fa-duotone fa-paper-plane"></i> </button>
                                                </div>
                                            </form>
                                        @endif
                                    @endforeach
                                    </div>


                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="mr-2 text-gray-600 d-none d-lg-inline small">
                                    {{Auth::user()->name}}
                                    </span>
                                    <img class=" img-profile" src={{ Avatar::create( Auth::user()->name )->setTheme('pastel') }} />

                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                    aria-labelledby="userDropdown">

                                    {{-- <a class="dropdown-item" href="#">
                                        <i class="mr-2 text-gray-400 fas fa-list fa-sm fa-fw"></i>
                                        <input type="checkbox" name="" id="mode">
                                        Theme(Light/Dark)
                                    </a> --}}
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div  id="dashboardpage"  class="container-fluid">

                        <!-- Page Heading -->
                        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
                            <h1 id="hone" class="mb-0 h3" >  {{ __('Dashboard') }}</h1>
                        </div>


                        <!-- Content Row -->
                        <div class="row">
                            <!-- Admins (Monthly) Card Example -->
                            <div class="mb-4 col-xl-3 col-md-6">
                                <div class="py-2 shadow card border-left-info h-100">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="mr-2 col">
                                                <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">Admin
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold">
                                                            @php
                                                                $collectadmins = Auth::user()->whereRoleIs('admin')->count();
                                                            @endphp
                                                                {{$collectadmins}}
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mr-2 progress progress-sm">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 50%" aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="text-gray-300 fas fa-2x fa-solid fa-users-gear"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Farmers (all) Card Example -->
                            <a href="#"  onclick="tableFunc()" class="mb-4 col-xl-3 col-md-6">
                                <div class="py-2 shadow card border-left-primary h-100">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="mr-2 col">
                                                <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                                    Farmers (All)</div>
                                                <div class="mb-0 text-gray-800 h5 font-weight-bold">
                                                    @php
                                                        $farmerscount =  Auth::user()->whereRoleIs('farmer')->count();
                                                    @endphp
                                                    {{$farmerscount}}
                                                    users</div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="text-gray-300 fas fa-2x fa-solid fa-user-tie"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- Damages (all) Card Example -->
                            <a href="#"  onclick="reportFunc()" class="mb-4 col-xl-3 col-md-6">
                                <div class="py-2 shadow card border-left-success h-100">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="mr-2 col">
                                                <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">
                                                    Reports (All)</div>
                                                <div class="mb-0 text-gray-800 h5 font-weight-bold">
                                                    @php
                                                        $damagescount = App\Models\Report::count();
                                                    @endphp
                                                    {{$damagescount}}
                                                farms</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="text-gray-300 fas fa-2x fa-regular fa-tractor"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- Pending Requests Card Example -->
                            <div class="mb-4 col-xl-3 col-md-6">
                                <div class="py-2 shadow card border-left-warning h-100">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="mr-2 col">
                                                <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">
                                                    Pending Requests</div>
                                                <div class="mb-0 text-gray-800 h5 font-weight-bold">

                                                {{$count}} requests
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="text-gray-300 fas fa-comments fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <div class="col-xl-12 col-lg-7">

                        <livewire:bar-chart >
                    </div>
                    <!-- Content Row Graphs-->
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <livewire:damage-chart >
                        </div>
                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="mb-4 shadow card">
                                <!-- Card Header - Dropdown -->
                                <div class="py-3 card-header">
                                    <h6 class="m-0 font-weight-bold text-success">Number of Damages by Crops</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="pt-4 chart-pie">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <hr>

                            This chart shows the overall damages to crops.
                                </div>
                            </div>
                        </div>
                    </div>



                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>


            </div>

                    <div id="tablepage"  style="display: none;">
                        <livewire:admin-table>
                    </div>
                    <div id="tablereportpage"  style="display: none;">
                        <livewire:admin-table-report>
                    </div>
                    <!-- /.container-fluid -->
                    <div id="aboutpage" class="container" style="display: none;">
                        <x-about-web/>
                    </div>

                    <div id="servicespage"   style="display:none;">
                        <x-services/>
                    </div>

                </div>
                <!-- End of Main Content -->




                <!-- Footer -->
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="my-auto text-center copyright">
                            <span>Copyright &copy; MAO Portal 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="rounded scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(Auth::user()->hasRole('farmer'))
    <div class="">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion " id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="{{asset('logo1.png')}}" width="60px" alt="">
                    </div>
                    <div class="mx-3 sidebar-brand-text">MAO<sup>farmer</sup></div>
                </a>

                <!-- Divider -->
                <hr class="my-0 sidebar-divider">

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Menus
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item ">
                    <div >
                        <div class="py-2 mx-2 rounded collapse-inner nav-item">
                            <button onclick="dashboardFuncs()" id="reportbtn"  class="text-center nav-link btn btn-success w-100" ><i class="fa fas fa-solid fa-list-check"></i> Reports</button>
                            <button onclick="aboutFuncs()" id="aboutbtn"   class="text-center nav-link btn btn-success w-100" ><i class="fa fas fa-thin fa-circle-info"></i> About</button>
                            <button onclick="servicesFuncs()" id="servicebtn" class="text-center nav-link collapse-item btn btn-success w-100" ><i class="fa fas fa-solid fa-hand-holding"></i> Services</button>
                            <button onclick="contactsFuncs()" id="contactbtn" class="text-center nav-link collapse-item btn btn-success w-100" ><i class="fa fa-solid fa-square-phone-flip"></i> Contact</button>
                        </div>
                    </div>
                </li>



                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="border-0 rounded-circle" id="sidebarToggle"></button>
                </div>



            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                            <i class="fa fa-bars"></i>
                        </button>



                        <!-- Topbar Navbar -->
                        <ul class="ml-auto navbar-nav profileimg ">

                            @php

                                $countrequest = App\Models\ContactRequest::where('email', Auth::user()->email)->where('name','Admin')->count();
                            @endphp
                            <!-- Nav Item - Messages -->
                            <li class="mx-1 nav-item dropdown no-arrow ">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="text-success fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">
                                        {{$countrequest}}

                                    </span>
                                </a>
                                <!-- Dropdown - Messages MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header bg-success">
                                        Message Center
                                    </h6>
                                    @php
                                        $messages = App\Models\ContactRequest::where('email', Auth::user()->email)->get();
                                        $replys = App\Models\Reply::paginate(5);
                                    @endphp
                                    @foreach($messages as $message)
                                        @if ($message->name == 'Admin')
                                            <a class="dropdown-item d-flex align-items-center ReplyMsg" data-id="{{$message->id}}" href="#" >
                                                <div class="mr-3 dropdown-list-image">
                                                    <i class="text-gray-500 fas fa-2x fa-solid fa-user-tie"></i>
                                                    <div class="status-indicator bg-success"></div>
                                                </div>
                                                {{-- DELETE --}}
                                                <form class="font-weight-bold w-100" action="{{route('message-delete')}}"  method="GET" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="justify-end d-flex">
                                                        <button type="submit" name="{{$loop->index}}"  class="cursor-pointer btn text-danger" data-bs-toggle="modal" data-bs-target="#messagedelete{{$message->id}}">
                                                            <i class="fa fa-solid fa-circle-xmark"></i>
                                                        </button>
                                                        <input type="hidden" name="message" value="{{$message->id}}">
                                                    </div>

                                                    <div class="text-truncate">{{$message->name}}</div>
                                                    <div class="text-gray-500 small">{{$message->message}}</div>
                                                    <div class="text-muted small">{{$message->created_at->diffForHumans()}}</div>
                                                </form>
                                            </a>
                                            <form action="{{route('message-reply')}}" method="POST" class="border w-100" id="ReplyMessage{{$message->id}}" style="display: none;">
                                                @csrf
                                                <p class="italic">To: <b class="text-primary"> Admin </b></p>
                                                <input type="hidden" name="msgid" value="{{$message->id}}">
                                                <input type="hidden" name="name" value="{{Auth::user()->name}}">
                                                <input type="hidden" name="email" value="{{$message->email}}">

                                                <div class="w-100 d-flex">
                                                    <textarea type="text" class="border-0 w-100 input-group" rows="1" placeholder="Reply.." name="txtreply" id="txtreply"></textarea>
                                                    <button type="submit"  class="px-3 text-center btn btn-sm btn-primary"> <i class="mt-2 fas fa fa-duotone fa-paper-plane"></i> </button>
                                                </div>
                                            </form>
                                        @endif
                                    @endforeach

                                    <a class="text-center text-gray-500 dropdown-item small" href="#"> </a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="mr-2 text-gray-600 d-none d-lg-inline small">
                                    {{Auth::user()->name}}
                                    </span>

                                    <img class=" img-profile rounded-circle" src={{ Avatar::create( Auth::user()->name )->setTheme('pastel') }} />
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a onclick="profileFunc()" class="dropdown-item" href="#">
                                        <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
                                        Profile
                                    </a>

                                    {{-- <a class="dropdown-item" href="#">
                                        <i class="mr-2 text-gray-400 fas fa-list fa-sm fa-fw"></i>
                                        <input type="checkbox" name="" id="mode">
                                        Theme(Light/Dark)

                                    </a> --}}

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div id="dashboardpageF"   class="container-fluid">

                        <!-- Page Heading -->
                        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
                            <h1 class="mb-0 text-gray-800 h3">  {{ __('Reports') }}</h1>
                            <form action="{{route('generate-report-farmer')}}" target="_blank" method="GET" enctype="multipart/form-data">
                                @csrf
                                <a href="" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-success">
                                    <i class="fas fa-download fa-sm text-white-50"></i>

                                    <input type="submit" value=" Generate Report">
                                </a>
                                <input type="hidden" name="$emailna" value="{{Auth::user()->email}}">
                            </form>
                        </div>

                        <!-- Page Content -->
                        <main>
                            {{ $slot }}
                        </main>

                    </div>

                    <!-- /.container-fluid -->

                    <div id="profilepageF" style="display: none;">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        <x-profile-farmer/>
                    </div>
                    <div id="aboutpageF" style="display: none;">
                        <x-about-web/>
                    </div>

                    <div id="servicespageF" style="display:none;">
                        <x-services/>
                    </div>
                    <div id="contactspageF" style="display:none;">
                        <x-contact/>
                    </div>

                </div>
                <!-- End of Main Content -->



                <!-- Footer -->
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="my-auto text-center copyright">
                            <span>Copyright &copy; MAO Portal 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="rounded scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@elseif(Auth::user()->hasRole('guest'))

    <div class="">


        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion " id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="{{asset('logo1.png')}}" width="60px" alt="">
                    </div>
                    <div class="mx-3 sidebar-brand-text">MAO<sup>guest</sup></div>
                </a>

                <!-- Divider -->
                <hr class="my-0 sidebar-divider">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <button onclick="dashboardFunc()"  class="nav-link" >
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        Dashboard
                    </button>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Menus
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item ">
                    <div >
                        <div class="py-2 mx-2 rounded collapse-inner nav-item">
                            <button onclick="aboutFunc()"   class="text-center nav-link btn btn-success w-100" ><i class="fa fas fa-thin fa-circle-info"></i> About</button>
                            <button onclick="servicesFunc()" class="text-center nav-link collapse-item btn btn-success w-100" ><i class="fa fa-solid fa-rectangle-list"></i> Services</button>
                            <button onclick="contactsFunc()" class="text-center nav-link collapse-item btn btn-success w-100" ><i class="fa fa-solid fa-square-phone-flip"></i> Contact</button>
                        </div>
                    </div>
                </li>



                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="border-0 rounded-circle" id="sidebarToggle"></button>
                </div>



            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                            <i class="fa fa-bars"></i>
                        </button>



                        <!-- Topbar Search -->
                        {{-- <form
                            class="my-2 mr-auto d-none d-sm-inline-block form-inline ml-md-3 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="border-0 form-control bg-light small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form> --}}

                        <!-- Topbar Navbar -->
                        <ul class="ml-auto navbar-nav">



                            @php
                                $count = App\Models\ContactRequest::where('email',Auth::user()->email)->count();
                            @endphp
                            <!-- Nav Item - Messages -->
                            <li class="mx-1 nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">


                                        {{$count}}

                                    </span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header bg-success">
                                        Message Center
                                    </h6>
                                    @php
                                        $messages = App\Models\ContactRequest::where('email', Auth::user()->email)->get();
                                        $replys = App\Models\Reply::paginate(5);
                                    @endphp
                                        @foreach ($messages as $message)
                                        <a class="dropdown-item d-flex align-items-center ReplyMsg" data-id="{{$message->id}}" href="#" >
                                            <div class="mr-3 dropdown-list-image">
                                                <i class="text-gray-500 fas fa-2x fa-solid fa-user-tie"></i>

                                                <div class="status-indicator bg-success"></div>
                                            </div>
                                            <form class="font-weight-bold w-100" action="{{route('message-delete')}}"  method="GET" enctype="multipart/form-data">
                                                @csrf
                                                <div class="justify-end d-flex">
                                                    <button type="submit" name="{{$loop->index}}"  class="cursor-pointer btn text-danger" data-bs-toggle="modal" data-bs-target="#messagedelete{{$message->id}}">
                                                        <i class="fa fa-solid fa-circle-xmark"></i>
                                                    </button>
                                                    <input type="hidden" name="message" value="{{$message->id}}">
                                                </div>

                                                <div class="text-truncate">{{$message->name}}</div>
                                                <div class="text-gray-500 small">{{$message->message}}</div>
                                                <div class="text-muted small">{{$message->created_at->diffForHumans()}}</div>
                                            </form>
                                        </a>
                                        @foreach ($replys as $reply)
                                            @if ($message->id == $reply->idno)
                                                <a class="dropdown-item d-flex align-items-center bg-gradient-success" href="#" >
                                                    <div class="mr-3 dropdown-list-image">
                                                        <i class="fa fas fa-solid fa-reply"></i>
                                                        <i class="text-success fas fa-2x fa-solid fa-user-tie"></i>

                                                        <div class="status-indicator bg-success"></div>
                                                    </div>
                                                    <div class="font-weight-bold w-100" >


                                                            <div class="text-truncate">Admin</div>
                                                            <div class="text-white small">{{$reply->message}}</div>
                                                            <div class="text-white small">{{$reply->created_at->diffForHumans()}}</div>
                                                        </div>
                                                </a>
                                            @endif
                                        @endforeach
                                        <form action="{{route('message-reply')}}" method="POST" class="border w-100" id="ReplyMessage{{$message->id}}" style="display: none;">
                                            @csrf
                                            <p class="italic">To: <b class="text-primary"> {{$message->name}} </b></p>
                                            <input type="hidden" name="msgid" value="{{$message->id}}">
                                            <div class="w-100 d-flex">
                                                <textarea type="text" class="border-0 w-100 input-group" rows="1" placeholder="Reply.." name="txtreply" id="txtreply"></textarea>
                                                <button type="submit"  class="px-3 text-center btn btn-sm btn-primary"> <i class="mt-2 fas fa fa-duotone fa-paper-plane"></i> </button>
                                            </div>
                                        </form>
                                    @endforeach



                                    <a class="text-center text-gray-500 dropdown-item small" href="#">Read More Messages</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="mr-2 text-gray-600 d-none d-lg-inline small">
                                    {{Auth::user()->name}}
                                    </span>
                                    <img class=" img-profile" src={{ Avatar::create( Auth::user()->name )->setTheme('pastel') }} />

                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a onclick="profileFunc()" class="dropdown-item" href="#">
                                        <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div id="dashboardpage"   class="container-fluid">

                        @if (Auth::user()->hasRole('admin'))
                            <!-- Page Heading -->
                            <div class="mb-4 d-sm-flex align-items-center justify-content-between">
                                <h1 class="mb-0 text-gray-800 h3">  {{ __('Dashboard') }}</h1>
                                <a data-bs-toggle="modal" data-bs-target="#generatereport"  href="#" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-success"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                            </div>
                        @endif

                                <!-- Modal -->
                                <div class="modal fade" id="generatereport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Report</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <a class="px-5 m-2 rounded w-100 bg-success" target="_blank" href="{{route('generate-report-all')}}">All</a>
                                            {{-- <a class="px-5 m-2 rounded w-100 bg-success" target="_blank" href="{{route('generate-report-admins')}}">Admin</a> --}}
                                            <a class="px-5 m-2 rounded w-100 bg-success" target="_blank" href="generate-report-farmers">Farmers</a>
                                            <a class="px-5 m-2 rounded w-100 bg-success" target="_blank" href="{{route('generate-report-damages')}}">Damages</a>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                    </div>
                                </div>



                        <!-- Content Row -->
                        <div class="row">
                            @if (Auth::user()->hasRole('admin'))
                            <!-- Admins (Monthly) Card Example -->
                            <div class="mb-4 col-xl-3 col-md-6">
                                <div class="py-2 shadow card border-left-info h-100">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="mr-2 col">
                                                <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">Admin
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold">
                                                            Wala pa
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mr-2 progress progress-sm">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 50%" aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="text-gray-300 fas fa-2x fa-solid fa-users-gear"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>




                    </div>

                    <!-- /.container-fluid -->

                    <div id="profilepage" style="display: none;">
                        <x-profile-farmer/>
                    </div>
                    <div id="aboutpage" style="display: none;">
                        <x-about/>
                    </div>

                    <div id="servicespage" style="display:none;">
                        <x-services/>
                    </div>

                    <div id="contactspage" style="display:none;">
                        <x-contact/>
                    </div>
                </div>
                <!-- End of Main Content -->



                <!-- Footer -->
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="my-auto text-center copyright">
                            <span>Copyright &copy; MAO Portal 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="rounded scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif




