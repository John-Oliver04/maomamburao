<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <!-- Fonts -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
       <link rel="icon" href="{{ url('logo1.png') }}">

       <!-- CSS only -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
       <!-- JavaScript Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- Google WebFonts -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

       <!-- Icon Font Stylesheet -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!-- Styles -->
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">

       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>
       <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

 <style type="text/css" media="print">

     @page {
         size: landscape;
         margin:0.2;
         scale: 10;
         font-size: 8px;
     }
     @media print {
      .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
      }
    }

#print-btn {
    display: none;
    visibility: none;
    padding-left: 100px;
}

</style>
</head>
<body>

    <div class="">
        <div class="justify-end container-fluid d-flex">
            <button onclick="window.print()" id="print-btn" class="px-3 m-5 shadow btn btn-primary btn-sm"> <i class="fa fa-light fa-print"></i> Print</button>
        </div>
        <div class="text-center d-flex justify-content-center">
            <div class="justify-around d-flex">
                 <p></p><img width="100px" src="{{asset('logo1.png')}}" alt=""><p></p>
            </div>


        </div>
        <div class="text-center row">

               <p>Republic of the Phiippines</p>  <br>
               <p> Mamburao Occidental Mindoro</p> <br>
               <p>MUNICIPALITY OF MAMBURAO</p>  <br>
                                            <br>
               <b class="h3">Municipal Agriculture office</b>
        </div>
    </div>


    <hr class="my-5">


    <ul class="mt-3 overflow-hidden list-group">
        <li class="justify-between list-group-item bg-success d-flex" aria-current="true">
           <b class="text-white"> Farmers</b>
         </li>
        <div   >
            <table class="table table-striped table-hover">
                <thead>
                    <th>email</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>RSBSA</th>
                    <th>Contacts</th>
                </thead>
                <tbody>
                    @php
                        $countfarmers = Auth::user()->whereRoleIs('farmer')->get();
                        $countinfos = App\Models\Info::all();
                    @endphp

                    @foreach ($countfarmers as $farmer)
                        <tr>
                            @foreach ($countinfos as $info)
                                @if ($farmer->email == $info->user_id)

                                    <td>{{$farmer->email}}</td>
                                    <td>
                                        FirstName:  {{$info->firstname}} <br>
                                        MiddleName: {{$info->middlename}} <br>
                                        LastName: {{$info->lastname}}
                                    </td>
                                    <td>{{$info->age}}</td>
                                    <td>{{$info->gender}}</td>
                                    <td>{{$info->birthday}}</td>
                                    <td>{{$info->address}}</td>
                                    <td>{{$info->rsbsa}}</td>
                                    <td>{{$info->contacts}}</td>



                                   @endif
                            @endforeach

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </ul>



    <div class="">
        <ul class="mt-3 overflow-hidden list-group">
            <li class="justify-between list-group-item bg-success d-flex" aria-current="true">
               <b class="text-white"> Reports</b>
             </li>

            {{-- Damages   T A B L E S --}}
            <table class="table table-hover table-striped">
                <thead>
                    <th>#</th>
                    <th>Variety Planted</th>
                    <th>Area Hectare</th>
                    <th>Insured Crop</th>
                    <th>Variety Planted</th>
                    <th>Sowing Date</th>
                    <th>Planting Date</th>
                    <th>Location of Farm</th>
                    <th>Cause of Loss</th>
                    <th>Loss Date</th>
                    <th>Stage of Plant</th>
                    <th>Crop Lossess</th>
                    <th>Area Damage</th>
                    <th>Percent of Damage</th>
                    <th>Harvest Date</th>
                </thead>
                <tbody>
                    @php
                        $damagedetails = App\Models\Report::all();
                    @endphp
                    @foreach ($damagedetails as $report)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$report->varietyplanted}}</td>
                        <td>{{$report->areahectare}}</td>
                        <td>{{$report->insuredcrop}}</td>
                        <td>{{$report->varietyplanted}}</td>
                        <td>{{$report->sowingdate}}</td>
                        <td>{{$report->plantingdate}}</td>
                        <td>{{$report->farmloc}}</td>
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

        </ul>
    </div>


</body>
</html>

