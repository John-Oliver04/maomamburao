<x-app-layout>
    <livewire:farmer-table/>

        <div class="">
            {{-- start modal --}}

             {{-- UPDATE TABLE START --}}
             <form  action="{{url('dashboard-register')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Damage Report Form</h5>
                            <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="col">
                                    <h5 class="text-success">BASIC INFORMATION (MGA PANGUNAHING IMPORMASYON)</h5>
                                    <div class="mb-3">
                                        <label for="farmloc" class="form-label">Location of Farm (Lugar ng Saka)  <b class="text-danger">*</b> </label>
                                       <div class="row">
                                           <div class="col-md-6">
                                              <label for="street" class="form-label">Street<b class="text-danger">*</b> </label>
                                              <div class="d-flex">
                                                @php
                                                    $balansaySt = array("Bagong Silang","Caryandangan","Igso","Matamayor","Pagkakaisa","Sawmill","Balantoy","Pinagssabiran","Suntay","Sitio 38","Tambunakan","Banilad","Pinagwayan","Maasim","Kakawan","Pulong Bato","Proper","Porbis","Bagong Tulay","Malaalat","Budburan","Bacong","Taguan","Bagaa","Banabaan");
                                                    $tangkalanSt = array("Armado","Proper","Banacan","Gumaer","Niogan","Santa Rosa","Tarlacan","Bungahan","Kulikuli","Balibago I", "Balibago II", "Rayusan","Laban");
                                                    $sanluisSt = array("Cabiguhan I", "Balete", "Dapdap", "Subing", "Taguan", "Santol", "Proper", "Abeleda", "Cabiguhan II", "Burol", "Caryandangan");
                                                    $tayamaanSt = array("Tubili Point", "Aroma", "Tuguilan", "Cumalog Point", "Sea Breeze", "Ragasras", "Nangol", "Lagdaan", "Dungon", "Tikian");
                                                    $talabaanSt =array("Proper","Pagbahan Point","Talabaan Point", "Olango", "Annex", "Leman Beach", "Balisong", "Lehman Beach", "Kamalimalihan", "Baranguit");
                                                    $payomponSt = array("RVQ Homes", "Boribor", "Boning", "Masigasig", "Carauisan Point", "Mercene, Bagong Silang", "Dapi", "Sinambalan", "Sulok", "Taburan", "Urban", "Bagong Silang", "Forestry", "Balibago", "Kabilawan");
                                                    $fatimaSt = array("Maculbo", "Sulong Ipil", "Tii");
                                                    sort($balansaySt);
                                                    sort($tangkalanSt);
                                                    sort($sanluisSt);
                                                    sort($tayamaanSt);
                                                    sort($talabaanSt);
                                                    sort($payomponSt);
                                                    sort($fatimaSt);

                                                    $sitios = array_merge($balansaySt, $tangkalanSt, $sanluisSt, $tayamaanSt, $talabaanSt, $payomponSt, $fatimaSt);
                                                    sort($sitios);

                                                    $barangays = array("Balansay", "Tangkalan", "San Luis", "Tayamaan", "Talabaan", "Payompon", "Fatima");
                                                    sort($barangays);
                                                @endphp

                                                  <select  required  name="street" class="form-control" id="street">
                                                    <option selected disabled>(Choose one)</option>

                                                    <option disabled class="bg-success text-dark font-bold">Balansay   <div class="fst-italic text-secondary">(Mamburao, Occidental Mindoro)</div></option>
                                                      @for ($i = 0; $i < count($balansaySt); $i++)
                                                        <option value="{{$balansaySt[$i]}}"> <b>{{$balansaySt[$i]}}</b> <div class="text-sm">- Balansay, Mamburao, Occidental Mindoro</div> </option>
                                                      @endfor
                                                    <option disabled class="bg-success text-dark font-bold">Tangkalan  <div class="fst-italic text-secondary">(Mamburao, Occidental Mindoro)</div></option>
                                                      @for ($i = 0; $i < count($tangkalanSt); $i++)
                                                        <option value="{{$tangkalanSt[$i]}}"> <b>{{$tangkalanSt[$i]}}</b> <div class="text-sm">- Tangkalan, Mamburao, Occidental Mindoro</div> </option>
                                                      @endfor
                                                    <option disabled class="bg-success text-dark font-bold">San Luis  <div class="fst-italic text-secondary">(Mamburao, Occidental Mindoro)</div></option>
                                                      @for ($i = 0; $i < count($sanluisSt); $i++)
                                                        <option value="{{$sanluisSt[$i]}}"> <b>{{$sanluisSt[$i]}}</b> <div class="text-sm">- San Luis, Mamburao, Occidental Mindoro</div> </option>
                                                      @endfor
                                                    <option disabled class="bg-success text-dark font-bold">Tayamaan  <div class="fst-italic text-secondary">(Mamburao, Occidental Mindoro)</div></option>
                                                      @for ($i = 0; $i < count($tayamaanSt); $i++)
                                                        <option value="{{$tayamaanSt[$i]}}"> <b>{{$tayamaanSt[$i]}}</b> <div class="text-sm">- Tayamaan, Mamburao, Occidental Mindoro</div> </option>
                                                      @endfor
                                                    <option disabled class="bg-success text-dark font-bold">Talabaan  <div class="fst-italic text-secondary">(Mamburao, Occidental Mindoro)</div></option>
                                                      @for ($i = 0; $i < count($talabaanSt); $i++)
                                                        <option value="{{$talabaanSt[$i]}}"> <b>{{$talabaanSt[$i]}}</b> <div class="text-sm">- Talabaan, Mamburao, Occidental Mindoro</div> </option>
                                                      @endfor
                                                    <option disabled class="bg-success text-dark font-bold">Payompon  <div class="fst-italic text-secondary">(Mamburao, Occidental Mindoro)</div></option>
                                                      @for ($i = 0; $i < count($payomponSt); $i++)
                                                        <option value="{{$payomponSt[$i]}}"> <b>{{$payomponSt[$i]}}</b> <div class="text-sm">- Payompon, Mamburao, Occidental Mindoro</div> </option>
                                                      @endfor
                                                    <option disabled class="bg-success text-dark font-bold">Fatima  <div class="fst-italic text-secondary">(Mamburao, Occidental Mindoro)</div></option>
                                                      @for ($i = 0; $i < count($fatimaSt); $i++)
                                                        <option value="{{$fatimaSt[$i]}}"> <b>{{$fatimaSt[$i]}}</b> <div class="text-sm">- Fatima, Mamburao, Occidental Mindoro</div> </option>
                                                      @endfor

                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <label for="barangay" class="form-label">Barangay<b class="text-danger">*</b> </label>
                                              <div class="d-flex">
                                                  <select  required  name="barangay" class="form-control" id="barangay">
                                                    <option selected disabled>(Choose one)</option>
                                                    @for ($i = 0; $i < count($barangays); $i++)
                                                      <option value="{{$barangays[$i]}}">{{$barangays[$i]}}</option>
                                                    @endfor
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <label for="municipality" class="form-label">Municipality<b class="text-danger">*</b> </label>
                                              <div class="d-flex">
                                                  <select  required  name="municipality" class="form-control" id="municipality">
                                                      <option selected value="Mamburao">Mamburao</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <label for="province" class="form-label">Province<b class="text-danger">*</b> </label>
                                              <div class="d-flex">
                                                  <select  required  name="province" class="form-control" id="province">
                                                      <option selected value="Occidental Mindoro">Occidental Mindoro</option>
                                                  </select>
                                              </div>
                                          </div>
                                       </div>
                                        <div class="p-2 m-2 border col border-success">
                                           <b class="text-danger">1.</b>  <a target="_blank" href="https://goo.gl/maps/dSGeJxVW7bcc9kFv6">Goto to Google Maps and find the location of your farm. <i class="fa fas fa-solid fa-map-location-dot"></i></a> <br>
                                           <b class="text-danger">2.</b> Click the current site of your farm then copy the URL by clicking <i class="fa fas fa-regular fa-share-nodes"></i> icon. <br>
                                             <img class="border shadow-sm" src="{{asset('backgrounds/maps.PNG')}}" alt="">
                                            <b class="text-danger">3.</b>Paste the copied link url into Textbox. <b class="text-danger">*</b>
                                             <input required placeholder="paste the copied url.." type="text" class="form-control" name="maps" id="maps">
                                         </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="areahectare" class="form-label">Area Insured (Sukat ng Bukid) <b class="text-danger">*</b> </label>
                                         <input required class="form-control" type="text" name="areahectare" id="areahectare">
                                    </div>
                                    <div class="mb-3">
                                        <label for="insuredcrop" class="form-label">Insured Crops (Pananim na Ipinaseguro) <b class="text-danger">*</b> </label>
                                        <select  required  name="insuredcrop" class="form-control" id="insuredcrop">
                                            <option value="Rice">Rice</option>
                                            <option value="Corn">Corn</option>
                                            <option value="Onion">Onion</option>
                                            <option value="Banana">Banana</option>
                                            <option value="Cassava">Cassava</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="varietyplanted" class="form-label">Variety Planted (Binhing Itinanim) <b class="text-danger">*</b> </label>
                                        <input required  class="form-control" type="text" name="varietyplanted" id="varietyplanted">
                                        <!--<select  name="varietyplanted" class="form-control" id="varietyplanted">-->
                                        <!--    <option value="Rice">Rice</option>-->
                                        <!--    <option value="Corn">Corn</option>-->
                                        <!--    <option value="Union">Union</option>-->
                                        <!--    <option value="Banana">Banana</option>-->
                                        <!--    <option value="Cassava">Cassava</option>-->
                                        <!--</select>-->
                                    </div>

                                    <div class="mb-3">
                                        <label for="sowingdate" class="form-label">Date of Sowing (Petsa ng Pagpupunla) <b class="text-danger">*</b> </label>
                                        <input required  class="form-control" type="text" name="sowingdate" id="sowingdate">
                                        <!--<input required type="date" class="form-control" id="sowingdate" name="sowingdate">-->
                                    </div>

                                    <div class="mb-3">
                                        <label for="plantingdate" class="form-label">Actual Date of Planting (Aktwal na petsa ng pagkakatanim) <b class="text-danger">*</b> </label>
                                        <input required type="date" class="form-control" id="plantingdate" name="plantingdate">
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="text-success">DAMAGE INDICATORS (MGA IMPORMASYON TUNGKOL SA PINSALA)</h5>
                                    <div class="mb-3 row">
                                        <label for="causeofloss" class="form-label">Cause of Loss (Sanhi ng Pinsala) <b class="text-danger">*</b> </label>
                                        <input required  class="form-control" type="text" name="causeofloss" id="causeofloss">
                                        <!--<select  name="causeofloss" class="form-control" id="causeofloss">-->
                                        <!--    <option value="Flood">Flood</option>-->
                                        <!--    <option value="Drought">Drought</option>-->
                                        <!--    <option value="Typhoon">Typhoon</option>-->
                                        <!--    <option value="Typhoon w/ high winds">Typhoon w/ high winds</option>-->
                                        <!--    <option value="Landslides">Landslides</option>-->
                                        <!--    <option value="Wildfires">Wildfires</option>-->
                                        <!--</select>-->
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="lossdate" class="form-label">Date of Loss Occurence (Petsa ng Pinsala) <b class="text-danger">*</b> </label>
                                        <input required type="date" class="form-control" id="lossdate" name="lossdate">
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="stageofplant" class="form-label">Age/Stage of Cultivation at time of loss (Edad ng Pananim ng Mapinsala) <b class="text-danger">*</b> </label>
                                        <input required  class="form-control" type="text" name="stageofplant" id="stageofplant">

                                    </div>

                                    <div class="mb-3 row">
                                        <label for="croplossess" class="form-label">Estimated Crop Losses <b class="text-danger">*</b> </label>
                                        <input required  class="form-control" type="text" name="croplossess" id="croplossess">
                                        <!--<select  name="croplossess" class="form-control" id="croplossess">-->
                                        <!--    @for ($l = 5000; $l <= 200000; $l=$l+5000)-->
                                        <!--        <option value="Php {{$l}}">Php {{$l}}</option>-->
                                        <!--    @endfor-->
                                        <!--</select>-->
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="areadamage" class="form-label">Area Damaged (Luwang o Sukat ng Napinsalang Bahagi) <b class="text-danger">*</b> </label>
                                        <input required  class="form-control" type="text" name="areadamage" id="areadamage">
                                        <!--<select  required  name="areadamage" class="form-control" id="areadamage">-->
                                        <!--    <option value=" 1/4 of 1 hectare"> 1/4 of 1hectare</option>-->
                                        <!--    <option value=" 1/2 of 1 hectare"> 1/2 of 1hectare</option>-->
                                        <!--    <option value=" 3/4 of 1 hectare"> 3/4 of 1hectare</option>-->
                                        <!--    <option value="1 hectare">1hectare</option>-->
                                        <!--    @for ($h = 2; $h <= 10; $h++)-->
                                        <!--        <option value="{{$h}} hectares">{{$h}}hectares</option>-->
                                        <!--    @endfor-->
                                        <!--</select>-->
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="damagepercent" class="form-label">Extent/Degree of Damage (Tindi o Porsyento ng Pinsala) <b class="text-danger">*</b> </label>
                                        <select  required  name="damagepercent" class="form-control" id="damagepercent">
                                            @for ($l = 1; $l <= 100; $l++)
                                                <option value="{{$l}} percent"> {{$l}} percent</option>
                                            @endfor
                                        </select>
                                    </div>

                                    <div required  class="mb-3 row">
                                        <label for="harvestdate" class="form-label">Expected date of harvest (Petsa ng Pagpapagapas) <b class="text-danger">*</b> </label>
                                        <input required type="date" class="form-control" id="harvestdate" name="harvestdate" >
                                    </div>

                                    <div required  class="mb-3 row">
                                        <label for="pic" class="form-label">Picture of Damages <b class="text-danger">*</b> </label>
                                        <input required type="file" name="photos" class="form-control" id="pic">
                                    </div>
                                    <input type="hidden" name="walalang" value="">
                                </div>
                                <div class="col">
                                    <h5 class="text-success">LOCATION SKETCH PLAN OF DAMAGED (LSP)(KROKIS NG BUKID NG MGA NASALANTANG NAKASEGURONG PANANIM)</h5>
                                    <p>Isulat ang pangalan ng mga may-ari/nagsasaka ng karatig na sakahan</p><br>
                                    <table class="table">
                                        <thead>
                                            <th>
                                                <td class="">Lot 1 <b class="text-danger">*</b> <input required  class="form-control w-100" type="text" name="lot1hectare" id="lot1hectare" placeholder="hectare">ha.</td>
                                                <td class="">Lot 2 <b class="text-danger">*</b> <input required  class="form-control w-100" type="text" name="lot2hectare" id="lot2hectare" placeholder="hectare">ha.</td>
                                                <td class="">Lot 3 <b class="text-danger">*</b> <input required  class="form-control w-100" type="text" name="lot3hectare" id="lot3hectare" placeholder="hectare">ha.</td>
                                                <td class="">Lot 4 <b class="text-danger">*</b> <input required  class="form-control w-100" type="text" name="lot4hectare" id="lot4hectare" placeholder="hectare">ha.</td>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.  North (Hilaga) <b class="text-danger">*</b> </td>
                                                <td>
                                                <input required  class="form-control w-100" type="text" name="north1" id="north1" placeholder="Name">
                                                </td>
                                                <td>
                                                    <input required  class="form-control w-100" type="text" name="north2" id="north2" placeholder="Name">

                                                </td>
                                                <td>
                                                    <input required  class="form-control w-100" type="text" name="north3" id="north3" placeholder="Name">

                                                </td>
                                                <td>
                                                    <input required  class="form-control w-100" type="text" name="north4" id="north4" placeholder="Name">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.  South (Timog) <b class="text-danger">*</b> </td>
                                                <td>
                                                    <input required  class="form-control w-100" type="text" name="south1" id="south1" placeholder="Name">
                                                </td>
                                                <td>
                                                    <input required  class="form-control w-100" type="text" name="south2" id="south2" placeholder="Name">
                                                </td>
                                                <td>
                                                    <input required v class="form-control w-100" type="text" name="south3" id="south3" placeholder="Name">
                                                </td>
                                                <td>
                                                    <input required  class="form-control w-100" type="text" name="south4" id="south4" placeholder="Name">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>3.  East (Silangan) <b class="text-danger">*</b> </td>
                                                <td>
                                                    <input required class="form-control w-100" type="text" name="east1" id="east1" placeholder="Name">

                                                </td>
                                                <td>
                                                    <input required  class="form-control w-100" type="text" name="east2" id="east2" placeholder="Name">

                                                </td>
                                                <td>
                                                    <input required class="form-control w-100" type="text" name="east3" id="east3" placeholder="Name">

                                                </td>
                                                <td>
                                                    <input required  class="form-control w-100" type="text" name="east4" id="east4" placeholder="Name">

                                                </td>

                                            </tr>
                                            <tr>
                                                <td>4.  West (Kanluran) <b class="text-danger">*</b> </td>
                                                <td>
                                                    <input required class="form-control w-100" type="text" name="west1" id="west1" placeholder="Name">

                                                </td>
                                                <td>
                                                    <input required class="form-control w-100" type="text" name="west2" id="west2" placeholder="Name">

                                                </td>
                                                <td>
                                                    <input required class="form-control w-100" type="text" name="west3" id="west3" placeholder="Name">

                                                </td>
                                                <td>
                                                    <input required class="form-control w-100" type="text" name="west4" id="west4" placeholder="Name">

                                                </td>

                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                            </div>
                            <div class="modal-footer">

                                <button  class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                                <input type="submit" class="px-2 btn btn-outline-primary" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            {{-- end modal --}}


        </div>


    </x-app-layout>
