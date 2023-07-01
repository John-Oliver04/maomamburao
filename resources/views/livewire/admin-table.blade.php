<div class="container-fluid">
<!-- Page Heading -->
    <div class="justify-between mb-4 d-sm-flex align-items-center">
        <h1 class="mb-0 text-gray-800 h3">  {{ __('Farmers') }}</h1>
        <a data-bs-toggle="modal" data-bs-target="#generatereport"  href="#" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-success"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
            <!-- Modal -->
            <div class="modal fade" id="generatereport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Report</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <a class="px-5 m-2 rounded w-100 bg-success" target="_blank" href="{{route('generate-report-all')}}">All</a> --}}
                        <a class="px-5 m-2 rounded w-100 bg-success" target="_blank" href="{{route('generate-report-farmers')}}">Farmers</a>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
                </div>
            </div>


<ul class="mt-3 overflow-hidden list-group" id="admin_farmerspage">
    <li class="justify-between list-group-item bg-success d-flex" aria-current="true">

        <div  class=" col-sm-4 d-flex">
            <input wire:model..debounce.1ms="searchuser" class="shadow form-control"  type="search" placeholder="Search...">
            <input wire:model..debounce.1ms="yearregistered"  type="number" min="2023" max="2025" class="form-control w-50 ml-2" placeholder="Year" step="1" value="2023" />
        </div>
        <div class="d-flex">

            <form action="{{route('exportfarmers')}}" method="post" enctype="multipart/form-data">
                <a href="{{route('exportfarmers')}}" class="px-2 mr-2 border border-white shadow btn btn-sm btn-success border-bottom"data-bs-toggle="tooltip" title="Export to Excel"><i class="fa-solid fa-arrow-down"></i> Download Excel</a>
            </form>
        </div>
       {{-- <a href="/register" target="_blank"><i class="fa fas fa-solid fa-plus"></i></a> --}}
    </li>

    <div class="overflow-auto">
        <table class="table table-success table-hover">
            <thead>
                <th>#</th>
                <th>Action</th>
                <th>Name</th>
                <th>email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>RSBSA</th>
                <th>Contacts</th>
            </thead>
            <tbody>

                @foreach ($countfarmers as $farmer)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        @foreach ($countinfos as $info)
                            @if ($farmer->email == $info->user_id)
                            <td>

                                <!--  single primary button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item text-warning" data-bs-toggle="modal" data-bs-target="#addfarmer{{$loop->index}}" href="#">
                                            <i class="fa-regular fa-eye"></i> View
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Button trigger modal -->
                                        <a href="#" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#deleted{{$loop->index}}">
                                            <i class="fa fas fa-solid fa-xmark"></i> Delete
                                        </a>

                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <form action="{{route('generate-report-farmerA')}}" target="_blank" method="GET" enctype="multipart/form-data">
                                                @csrf
                                                <a href="#"  class="dropdown-item text-primary" >
                                                    <i class="fa fa-light fa-print"></i> <input type="submit" value="Preview">
                                                </a>
                                                <input type="hidden" name="$emailna" value="{{$farmer->email}}">

                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                FirstName: <b> {{$info->firstname}}</b> <br>
                                MiddleName:
                                <b>
                                    @if ($info->middlename == "")
                                        <a href="#" class="text-danger text-sm" data-bs-toggle="modal" data-bs-target="#addfarmer{{$loop->index}}">null</a>
                                    @else
                                        {{$info->middlename}}
                                    @endif
                                </b> <br>
                                LastName:
                                <b>
                                    @if ($info->lastname == "")
                                        <a href="#" class="text-danger text-sm" data-bs-toggle="modal" data-bs-target="#addfarmer{{$loop->index}}">null</a>
                                    @else
                                        {{$info->lastname}}
                                    @endif
                                </b>
                            </td>
                            <td>
                                @if ($info->user_id == "")
                                    <a href="#" class="text-danger text-sm" data-bs-toggle="modal" data-bs-target="#addfarmer{{$loop->index}}">null</a>
                                @else
                                    {{$info->user_id}}
                                @endif
                            </td>
                            <td>
                                @if ($info->age == "")
                                 <a href="#" class="text-danger text-sm" data-bs-toggle="modal" data-bs-target="#addfarmer{{$loop->index}}">null</a>
                                @else
                                    {{$info->age}}
                                @endif

                            </td>
                            <td>
                                @if ($info->gender == "")
                                    <a href="#" class="text-danger text-sm" data-bs-toggle="modal" data-bs-target="#addfarmer{{$loop->index}}">null</a>
                                @else
                                    {{$info->gender}}
                                @endif
                            </td>
                            <td>
                                @if ($info->birthday == "")
                                    <a href="#" class="text-danger text-sm" data-bs-toggle="modal" data-bs-target="#addfarmer{{$loop->index}}">null</a>
                                @else
                                    {{$info->birthday}}
                                @endif
                            </td>
                            <td>
                                @if ($info->age == "")
                                    <a href="#" class="text-danger text-sm" data-bs-toggle="modal" data-bs-target="#addfarmer{{$loop->index}}">null</a>
                                @else
                                    {{$info->age}}
                                @endif
                            </td>
                            <td>
                                @if ($info->rsbsa == "")
                                    <a href="#" class="text-danger text-sm">null</a>
                                @else
                                    {{$info->rsbsa}}
                                @endif
                            </td>
                            <td>
                                @if ($info->contacts == "")
                                <span class="text-danger text-sm">null</span>
                                @else
                                    {{$info->contacts}}
                                @endif
                            </td>



                            <!-- Modal -->
                           <div name="deleted{{$loop->index}}" class="modal fade" id="deleted{{$loop->index}}"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                       <h5 class="modal-title" id="staticBackdropLabel">Delete form</h5>
                                       <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="overflow-y-scroll modal-body">
                                            Do you want to delete this selected data? Click <b>Cancel</b> to refuse..

                                       </div>

                                       <div class="modal-footer">
                                           <button  class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                           <form action="{{route('farmer-delete')}}"  method="GET" enctype="multipart/form-data">
                                                <input type="hidden" name="email" value="{{$farmer->email}}">
                                                <button  class="btn btn-danger">Delete</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           {{-- end modal --}}

                            <div class="">
                                {{-- start modal --}}
                                <!--<form  action="{{url('dashboard-updateinfo')}}" method="POST" enctype="multipart/form-data">-->
                                <!--    @csrf-->
                                    <!-- Modal -->
                                    <div class="modal fade" id="addfarmer{{$loop->index}}"  data-bs-keyboard="false" tabindex="1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Farmer Information</h5>
                                            <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input readonly value="{{$info->user_id}}" type="email" class="form-control" id="email" placeholder="email..">
                                                    <input type="hidden" name="email" value="{{$info->user_id}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="firstname" class="form-label">FirstName</label>
                                                    <input readonly value="{{$info->firstname}}" type="text" class="form-control hover:bg-warning" id="firstname" name="firstname" placeholder="Type first name..">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="middlename" class="form-label">MiddleName</label>
                                                    <input readonly value="{{$info->middlename}}" type="text" class="form-control" id="middlename" name="middlename" placeholder="middle name..">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lastname" class="form-label">LastName</label>
                                                    <input readonly value="{{$info->lastname}}" type="text" class="form-control" id="lastname" name="lastname" placeholder="last name..">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="age" class="form-label">Age</label>
                                                    <input readonly value="{{$info->age}}" type="text" class="form-control" id="age" name="age" placeholder="age..">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label">Gender</label>
                                                    <input readonly value="{{$info->gender}}" type="text" class="form-control" id="gender" name="gender" placeholder="gender..">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="birthday" class="form-label">Birthday</label>
                                                    <input readonly value="{{$info->birthday}}" type="text" class="form-control" id="birthday" name="birthday" placeholder="birthday..">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input readonly value="{{$info->address}}" type="text" class="form-control" id="address" name="address" placeholder="address..">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="rsbsa" class="form-label">RSBSA</label>
                                                    <input readonly value="{{$info->rsbsa}}" type="text" class="form-control" id="rsbsa" name="rsbsa" placeholder="RSBSA..">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="contacts" class="form-label">Contacts</label>
                                                    <input readonly value="{{$info->contacts}}" type="text" class="form-control" id="contacts" name="contacts" placeholder="contacts..">
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button  class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                {{-- <input type="submit" class="btn btn-outline-success" value="Save"/> --}}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <!--</form>-->
                                {{-- end modal --}}
                            </div>
                        @endif
                        @endforeach

                    </tr>
                @endforeach
            </tbody>
        </table>

            {{$countfarmers->links()}}

    </div>
</ul>



</div>
