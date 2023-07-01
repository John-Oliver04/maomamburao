
@php
    $infos = App\Models\Info::all();
@endphp
@foreach ($infos as $info)
    @if ($info->user_id == Auth::user()->email)
    <div class="container-fluid ">

        <h1 class="mb-0 text-gray-800 h3">  {{ __('Profile') }}</h1>
        <ul class=" py-2 list-group" >

            <li class="justify-between list-group-item bg-success d-flex" aria-current="true">
            <b class="text-white"> Personal Information</b>
            <button class="text-white shadow btn btn-success border-white" onclick="enabletext()" ><i class="fa fas fa-regular fa-pen-to-square"></i></button>
            </li>
            <div id="disabledtext" >
                <li class="list-group-item "><b>FirstName: </b> <input value="{{ $info->firstname }}" disabled placeholder="Enter firstname.." class="border-0" type="text" name="" id=""></li>
                <li class="list-group-item"><b>MiddleName: </b><input value="{{ $info->middlename }}" disabled placeholder="Enter middlename.." class="border-0" type="text" name="middename" id=""> </li>
                <li class="list-group-item"><b>LastName: </b> <input value="{{ $info->lastname }}" disabled  placeholder="Enter lastname.." class="border-0" type="text" name="" id=""></li>
                <li class="list-group-item"><b>Age: </b> <input value="{{ $info->age }}" disabled placeholder="Enter age.." class="border-0" type="text" name="" id=""></li>
                <li class="list-group-item"><b>Gender: </b> <input value="{{ $info->gender }}" disabled placeholder="Enter gender.." class="border-0" type="text" name="" id=""></li>
                <li class="list-group-item"><b>Birthday: </b> <input value="{{ $info->birthday }}" disabled placeholder="Enter birthday.." class="border-0" type="text" name="" id=""></li>
                <li class="list-group-item"><b>Address: </b> <input value="{{ $info->address }}" disabled placeholder="Enter address.." class="border-0" type="text" name="" id=""></li>
                <li class="list-group-item"><b>RSBSA: </b><input value="{{ $info->rsbsa }}" disabled placeholder="Enter RSBSA.." class="border-0" type="text" name="" id=""> </li>
                <li class="list-group-item"><b>Contacts: </b><input value="{{ $info->contacts }}" disabled placeholder="Enter contact number.." class="border-0" type="text" name="" id=""> </li>
                <li class="text-right list-group-item"><button disabled class="btn btn-success btn-sm">Save</button></li>
            </div>
            <form  action="{{url('dashboard-updateinfo')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="enabledtext" style="display:none;">
                    <li class="list-group-item"><b>FirstName:</b><input  value="{{ $info->firstname }}"  placeholder="Enter firstname.." required class="form-control" type="text" name="firstname" id=""></li>
                    <li class="list-group-item"><b>MiddleName:</b><input value="{{ $info->middlename }}"  placeholder="Enter middlename.."required class="form-control" type="text" name="middlename" id=""> </li>
                    <li class="list-group-item"><b>LastName:</b><input  value="{{ $info->lastname }}"  placeholder="Enter lastname.."required class="form-control" type="text" name="lastname" id=""></li>
                    <li class="list-group-item">
                        <b>Age:</b>
                            <select name="age" class="form-control"required id="age">

                                  @for ($x =18; $x <= 100; $x++)
                                     <option value="{{$x}}">{{$x}}</option>
                                  @endfor

                            </select>

                    </li>
                    <li class="list-group-item">
                        <b>Gender:</b>
                        <select name="gender" class="form-control" required id="gender">
                            <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                    </li>
                    <li class="list-group-item"><b>Birthday:</b><input value="{{ $info->birthday }}"required  placeholder="Enter birthday.." class="form-control" type="date" name="birthday" id=""></li>
                    <li class="list-group-item"><b>Address:</b><input  value="{{ $info->address }}"required placeholder="Enter address.." class="form-control" type="text" name="address" id=""></li>
                    <li class="list-group-item"><b>RSBSA:</b><input  value="{{ $info->rsbsa }}"required placeholder="Enter RSBSA.." class="form-control" type="text" name="rsbsa" id=""> </li>
                    <li class="list-group-item"><b>Contacts:</b><input value="{{ $info->contacts }}"required placeholder="Enter contact number.." class="form-control" type="text" name="contacts" id=""> </li>
                    <input type="hidden" name="email" value="{{Auth::user()->email}}">
                    <li class="text-right list-group-item"><input type="submit"  class="btn btn-success btn-sm" value="Save"/></li>
                </div>
            </form>
        </ul>
    </div>

    @endif
@endforeach
