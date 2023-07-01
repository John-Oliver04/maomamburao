<div class="container-fluid">
    <div class="justify-between mb-4 d-sm-flex align-items-center">
        <h1 class="mb-0 text-gray-800 h3">  {{ __('Reports') }}</h1>
        <a data-bs-toggle="modal" data-bs-target="#generatereport1"  href="#" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-success"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
            <!-- Modal -->
            <div class="modal fade" id="generatereport1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Report</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <a class="px-5 m-2 rounded w-100 bg-success" target="_blank" href="{{route('generate-report-all')}}">All</a> --}}

                        <a class="px-5 m-2 rounded w-100 bg-success" target="_blank" href="{{route('generate-report-damages')}}">Damages</a>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
                </div>
            </div>
        {{-- Reports --}}
    <ul class="mt-3 overflow-hidden list-group" id="admin_reportspage">
        <li class="justify-between list-group-item bg-success d-flex" aria-current="true">

            {{-- <a href=""  data-bs-toggle="modal" data-bs-target="#dontt"><i class="fa fas fa-solid fa-plus"></i></a> --}}
            <div  class="input-group col-sm-4">
                <input wire:model..debounce.1s="searchreport" class="shadow form-control"  type="search"  placeholder="Search...">

            </div>
            <form action="{{route('exportreports')}}" method="post" enctype="multipart/form-data">
                <a href="{{route('exportreports')}}" class="px-2 mr-2 border border-white shadow btn btn-sm btn-success border-bottom" data-bs-toggle="tooltip" title="Export to Excel"><i class="fa-solid fa-arrow-down"></i> Download Excel</a>
            </form>


        </li>

        <div class="overflow-auto">
            <table class="table table-success table-hover">
                <thead>
                        <th>#</th>
                        <th>Action</th>
                        <th class="text-nowrap">Damages</th>
                        <th class="text-nowrap">Area Hectare</th>
                        <th class="text-nowrap">Insured Crop</th>
                        <th class="text-nowrap">Variety Planted</th>
                        <th class="text-nowrap">Sowing Date</th>
                        <th class="text-nowrap">Planting Date</th>
                        <th class="text-nowrap">Location of Farm</th>
                        <th class="text-nowrap">Cause of Loss</th>
                        <th class="text-nowrap">Loss Date</th>
                        <th class="text-nowrap">Stage of Plant</th>
                        <th class="text-nowrap">Crop Lossess</th>
                        <th class="text-nowrap">Area Damage</th>
                        <th class="text-nowrap">Percent of Damage</th>
                        <th class="text-nowrap">Harvest Date</th>

                </thead>
                <tbody>

                    @foreach ($reports as $report)
                        <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>

                                    <!--  single warning button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#reportupdate{{$report->id}}">
                                                <i class="fa-regular fa-eye"></i> View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-danger" href="#"  name="{{$loop->index}}"  data-bs-toggle="modal" data-bs-target="#reportdelete{{$report->id}}">
                                                <i class="fa fas fa-solid fa-xmark"></i> Delete
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <form  action="{{route('generate-selected-report-farmerA')}}" target="_blank" method="GET" enctype="multipart/form-data">
                                                @csrf
                                                {{-- emailna is a id number --}}
                                                <input type="hidden" name="$emailna" value="{{$report->email}}">
                                                {{-- currentid is a current report id --}}
                                                <input type="hidden" name="$currentid" value="{{$report->id}}">
                                                <a href="#" class="dropdown-item text-success">
                                                    <i class="fa fa-light fa-print"></i> <input type="submit" value="Preview"/>          <!--Preview-->
                                                </a>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>

                                    <!-- Modal -->
                                    <div name="reportdelete{{$report->id}}" class="modal fade" id="reportdelete{{$report->id}}"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Delete Form</h5>
                                                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="overflow-y-scroll modal-body">
                                                    Want to delete this current report? Click <b>Cancel</b> to refuse..
                                                </div>

                                                <div class="modal-footer">
                                                    <button  class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <form action="{{route('report-delete')}}"  method="GET" enctype="multipart/form-data">
                                                        <input type="hidden" name="report" value="{{$report->id}}">
                                                        <button  class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end modal --}}

                                    {{-- UPDATE TABLE START --}}
                                    <!--<form  action="{{url('dashboard-update')}}" method="POST" enctype="multipart/form-data">-->
                                        @csrf
                                        <!-- Modal -->
                                        <div class="modal fade" id="reportupdate{{$report->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel"> Damage Report Information</h5>
                                                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="col">
                                                            <h5 class="text-success">BASIC INFORMATION (MGA PANGUNAHING IMPORMASYON)</h5>
                                                            <div class="mb-3">
                                                                <label for="farmloc" class="form-label">Location of Farm (Lugar ng Saka)</label>
                                                                <input readonly required class="form-control" type="text" name="farmloc" id="farmloc" value="{{$report->street}}, {{$report->barangay}}, {{$report->municipality}}, {{$report->province}}">
                                                                @foreach ($maps as $map)
                                                                @if ($map->reportid == $report->id)
                                                                    <a target="_blank" href="{{$map->map}}">{{$map->map}}</a>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="areahectare" class="form-label">Area Insured (Sukat ng Bukid)</label>
                                                                <input readonly required class="form-control" type="text" name="areahectare" id="areahectare" value="{{$report->areahectare}}">

                                                                {{-- <select  required  name="areahectare" class="form-control" id="areahectare" >
                                                                    <option class="bg-success" value="{{$report->areahectare}}">{{$report->areahectare}}</option>
                                                                    @for ($h = 1; $h <= 10; $h++)
                                                                        <option value="{{$h}} hectares">{{$h}} hectare(s)</option>
                                                                    @endfor
                                                                </select> --}}
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="insuredcrop" class="form-label">Insured Crops (Pananim na Ipinaseguro)</label>
                                                                <select aria-readonly="insuredcrop"  required  name="insuredcrop" class="form-control" id="insuredcrop">
                                                                    <option value="{{$report->insuredcrop}}" class="bg-success">{{$report->insuredcrop}}</option>

                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="varietyplanted" class="form-label">Variety Planted (Binhing Itinanim)</label>
                                                                <input readonly required  class="form-control" type="text" name="varietyplanted" id="varietyplanted" value="{{$report->varietyplanted}}">

                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="sowingdate" class="form-label">Date of Sowing (Petsa ng Pagpupunla)</label>
                                                                <input readonly required  class="form-control" type="text" name="sowingdate" id="sowingdate" value="{{$report->sowingdate}}">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="plantingdate" class="form-label">Actual Date of Planting (Aktwal na petsa ng pagkakatanim)</label>
                                                                <input readonly required type="date" class="form-control" id="plantingdate" name="plantingdate" value="{{$report->plantingdate}}">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <h5 class="text-success">DAMAGE INDICATORS (MGA IMPORMASYON TUNGKOL SA PINSALA)</h5>
                                                            <div class="mb-3 row">
                                                                <label for="causeofloss" class="form-label">Cause of Loss (Sanhi ng Pinsala)</label>
                                                                <input readonly required  class="form-control" type="text" name="causeofloss" id="causeofloss" value="{{$report->causeofloss}}">

                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="lossdate" class="form-label">Date of Loss Occurence (Petsa ng Pinsala)</label>
                                                                <input readonly required type="date" class="form-control" id="lossdate" name="lossdate" value="{{$report->lossdate}}">
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="stageofplant" class="form-label">Age/Stage of Cultivation at time of loss (Edad ng Pananim ng Mapinsala)</label>
                                                                <input readonly required  class="form-control" type="text" name="stageofplant" id="stageofplant" value="{{$report->stageofplant}}">

                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="croplossess" class="form-label">Estimated Crop Losses</label>
                                                                <input readonly required  class="form-control" type="text" name="croplossess" id="croplossess" value="{{$report->croplossess}}">

                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="areadamage" class="form-label">Area Damaged (Luwang o Sukat ng Napinsalang Bahagi)</label>
                                                                <input readonly required class="form-control" type="text" name="areadamage" id="areadamage" value="{{$report->areadamage}}">
                                                                {{-- <select  required  name="areadamage" class="form-control" id="areadamage">
                                                                    <option value="{{$report->areadamage}}" class="bg-success"> {{$report->areadamage}}</option>
                                                                    <option value=" 1/4 of 1 hectare"> 1/4 of 1hectare</option>
                                                                    <option value=" 1/2 of 1 hectare"> 1/2 of 1hectare</option>
                                                                    <option value=" 3/4 of 1 hectare"> 3/4 of 1hectare</option>
                                                                    <option value="1 hectare">1hectare</option>
                                                                    @for ($h = 2; $h <= 10; $h++)
                                                                        <option value="{{$h}} hectares">{{$h}}hectares</option>
                                                                    @endfor
                                                                </select> --}}
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="damagepercent" class="form-label">Extent/Degree of Damage (Tindi o Porsyento ng Pinsala)</label>
                                                                <select  required  name="damagepercent" class="form-control" id="damagepercent">
                                                                    <option value="{{$report->damagepercent}}">{{$report->damagepercent}}</option>

                                                                </select>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="harvestdate" class="form-label">Expected date of harvest (Petsa ng Pagpapagapas)</label>
                                                                <input readonly required type="date" class="form-control" id="harvestdate" name="harvestdate" value="{{$report->harvestdate}}">
                                                            </div>

                                                            <div required  class="mb-3 row">
                                                                <label for="pic" class="form-label">Picture of Damages</label>
                                                                <input type="file" name="photos" class="form-control" id="pic">
                                                            </div>
                                                            <input type="hidden" name="walalang" value="">
                                                        </div>
                                                        <div class="col">
                                                            <h5 class="text-success">LOCATION SKETCH PLAN OF DAMAGED (LSP)(KROKIS NG BUKID NG MGA NASALANTANG NAKASEGURONG PANANIM)</h5>
                                                            <p>Isulat ang pangalan ng mga may-ari/nagsasaka ng karatig na sakahan</p><br>
                                                            <table class="table">
                                                                <thead>
                                                                    <th>
                                                                        <td class="">Lot 1 <input readonly required value="{{$report->lot1hectare}}"  class="form-control w-100" type="text" name="lot1hectare" id="lot1hectare" placeholder="hectare">ha.</td>
                                                                        <td class="">Lot 2 <input readonly required value="{{$report->lot2hectare}}" class="form-control w-100" type="text" name="lot2hectare" id="lot2hectare" placeholder="hectare">ha.</td>
                                                                        <td class="">Lot 3 <input readonly required value="{{$report->lot3hectare}}" class="form-control w-100" type="text" name="lot3hectare" id="lot3hectare" placeholder="hectare">ha.</td>
                                                                        <td class="">Lot 4 <input readonly required value="{{$report->lot4hectare}}" class="form-control w-100" type="text" name="lot4hectare" id="lot4hectare" placeholder="hectare">ha.</td>
                                                                    </th>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1.  North (Hilaga)</td>
                                                                        <td>
                                                                        <input readonly required value="{{$report->north1}}" class="form-control w-100" type="text" name="north1" id="north1" placeholder="Name">
                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->north2}}" class="form-control w-100" type="text" name="north2" id="north2" placeholder="Name">

                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->north3}}" class="form-control w-100" type="text" name="north3" id="north3" placeholder="Name">

                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->north4}}" class="form-control w-100" type="text" name="north4" id="north4" placeholder="Name">

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.  South (Timog)</td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->south1}}" class="form-control w-100" type="text" name="south1" id="south1" placeholder="Name">
                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->south2}}" class="form-control w-100" type="text" name="south2" id="south2" placeholder="Name">
                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->south3}}" class="form-control w-100" type="text" name="south3" id="south3" placeholder="Name">
                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->south4}}" class="form-control w-100" type="text" name="south4" id="south4" placeholder="Name">
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.  East (Silangan)</td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->east1}}" class="form-control w-100" type="text" name="east1" id="east1" placeholder="Name">

                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->east2}}" class="form-control w-100" type="text" name="east2" id="east2" placeholder="Name">

                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->east3}}" class="form-control w-100" type="text" name="east3" id="east3" placeholder="Name">

                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->east4}}" class="form-control w-100" type="text" name="east4" id="east4" placeholder="Name">

                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>4.  West (Kanluran)</td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->west1}}" class="form-control w-100" type="text" name="west1" id="west1" placeholder="Name">

                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->west2}}" class="form-control w-100" type="text" name="west2" id="west2" placeholder="Name">

                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->west3}}" class="form-control w-100" type="text" name="west3" id="west3" placeholder="Name">

                                                                        </td>
                                                                        <td>
                                                                            <input readonly required value="{{$report->west4}}" class="form-control w-100" type="text" name="west4" id="west4" placeholder="Name">

                                                                        </td>

                                                                    </tr>
                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="currentid" value="{{$report->id}}">
                                                        <button  class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                                                        {{-- <input type="submit" class="btn btn-outline-warning"  value="Update"> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <!--</form>-->
                                    {{-- UPDATE TABLE END --}}
                                </td>


                                <td class="text-center">
                                    <a name="{{$loop->index}}"  class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#okies{{$report->id}}" href="">
                                        <i class="fa-solid fa-images"></i>
                                    </a>
                                        <!-- Modal -->
                                    <div name="{{$loop->index}}" class="modal fade" id="okies{{$report->id}}"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pictures of damages</h5>
                                                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="overflow-y-scroll modal-body">


                                                        <div class="card" >
                                                            <div class="card-body d-flex ">
                                                                @php
                                                                    $images = App\Models\Photo::all();
                                                                @endphp
                                                                @foreach ($images as $photo)
                                                                    @if ($photo->report_id == $report->image_id)
                                                                    {{-- <form action="{{route('picture-delete')}}" method="GET" > --}}
                                                                        {{-- @csrf --}}
                                                                        <div class=" d-flex justify-center" id="{{$photo->id}}">
                                                                            <div class="d-flex justify-end relative">
                                                                                <img class="w-100 cover border" width="800px" src="{{asset('images').'/'.$photo->name}}" alt="Image">
                                                                                <input type="hidden" name="id" value="{{$photo->id}}">

                                                                                <button type="submit" class=" absolute m-1" value=""><i class="fa fas fa-regular fa-circle-xmark"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    {{-- </form> --}}
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class=" card-footer">
                                                    {{-- <form  action="{{route('dashboard-addimage')}}" method="POST" enctype="multipart/form-data"> --}}
                                                        {{-- @csrf --}}
                                                        {{-- <input type="hidden" name="hiddenid" value="{{$report->image_id}}">

                                                        <label for="pic" class="form-label">Add Image</label>
                                                        <input type="file" required name="photos" class="form-control" id="photos">

                                                        <input type="submit" class="mt-3 text-white btn bg-success w-100" value="Add"/> --}}
                                                    {{-- </form> --}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- end modal --}}

                                </td>

                                <td>{{$report->areahectare}}</td>
                                <td>{{$report->insuredcrop}}</td>
                                <td>{{$report->varietyplanted}}</td>
                                <td>{{$report->sowingdate}}</td>
                                <td>{{$report->plantingdate}}</td>
                                <td>
                                    <div class="d-flex">
                                        {{$report->street}}, {{$report->barangay}}, {{$report->municipality}}, {{$report->province}}
                                    </div>
                                    @foreach ($maps as $map)
                                        @if ($map->reportid == $report->id)
                                            <a target="_blank" href="{{$map->map}}">{{Str::substr( $map->map, 0, 10)}}</a>
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$report->causeofloss}}</td>
                                <td>{{$report->lossdate}}</td>
                                <td>{{$report->stageofplant}}</td>
                                <td>{{$report->croplossess}}</td>
                                <td>{{$report->areadamage}}</td>
                                <td>{{$report->damagepercent}}</td>
                                <td>{{$report->harvestdate}}</td>



                            </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
            {{$reports->links()}}
    </ul>
</div>
