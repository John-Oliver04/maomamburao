<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <!-- Fonts -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

       <!-- CSS only -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
       <!-- JavaScript Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- Google WebFonts -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
       <link rel="icon" href="{{ url('logo1.png') }}">

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

       {{-- <link rel="stylesheet" type="text/css"  href="{{ asset('css/print.css') }}" media="print"> --}}
       <style type="text/css" media="print">

        @page {
            size: A4;
            margin:0.2;
            scale: 10;
            font-size: 8px;

        }
        @media print {
        #settings{
            display: none;
            visibility: none;
            padding-left: 100px;
        }
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
<body class="text-sm">
    <div id="print-btn" class="justify-end container-fluid d-flex">
        <div id="settings" class="">
            Suitable Printer Settings: <br>
            Size: A4  <br>
            Orientation: Portrait
        </div>
        <button onclick="window.print()" id="print-btn" class="px-3 m-5 shadow btn btn-success btn-sm"> <i class="fa fa-light fa-print"></i> Print</button>
    </div>

    @php
        $reports = App\Models\Report::where('id',$currentid)->get();
        $users = App\Models\User::where('id', $email)->get();
    @endphp

    {{-- {{$reports}} --}}
    @foreach ($reports as $report)
        @foreach ($users as $user)
            {{-- @if ($report->email == $user->id) --}}
                @foreach ($person as $info)
                    @if ($info->user_id == $user->email)

                        <div class="container">
                            <div class="text-center row">
                                <p class="uppercase">Philippine Crop Insurance Corporation</p>  <br>
                                <p> REGION IV</p> <br>
                                <h2 class="h2 text-success">CLAIM FOR INDEMNITY </h2>
                                <b>(PAGHAHABOL, BAYAD)</b>
                            </div>
                            <div class="justify-end d-flex">
                                <div class="text-center">

                                    <p>__________________</p>
                                    <p>DATE (PETSA)</p>
                                </div>
                            </div>
                        </div>


                        <p>TO   &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; &nbsp;  The ChiefCAD <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  PCIC-RO</p>

                        <p class="text-sm ">
                            &nbsp; &nbsp; Please send your Team of Adjusters to assess damage of my insured crop. <br>
                            &nbsp; &nbsp;  (Mangyaring magpadala kayo ng tagapag-imbestiga upang tasahin ang mga naging pinsala ng aking pananim. <br>
                            &nbsp; &nbsp;  Hereunder are the basic information needed by your office: <br>
                            &nbsp; &nbsp;  Narito ang mga kinakailangang tala ng inyong tanggapan: )
                        </p><br>


                        <b class="text-sm">I.  &nbsp; &nbsp; BASIC INFORMATION (MGA PANGUNAHING IMPORMASYON):</b> <br>
                        &nbsp; &nbsp; 1. &nbsp; &nbsp; Name of Farmer-Assured <i>(Pangalan ng Magsasaka)</i>: <b>{{$info->lastname}}, {{$info->firstname}} {{$info->middlename}}</b> <br>
                        &nbsp; &nbsp; 2. &nbsp; &nbsp; Address: <i>(Tirahan)</i> : <b> {{$info->address}} </b><br>
                        &nbsp; &nbsp; 3. &nbsp; &nbsp; Mobile Phone Number <i>(Numero ng Telepono)</i>: <b>{{$info->contacts}} </b><br>
                        &nbsp; &nbsp; 4. &nbsp; &nbsp; Location of Farm  <i>(Lugar ng Saka)</i>: <b> {{$report->farmloc}} </b> <br>
                        &nbsp; &nbsp; 5. &nbsp; &nbsp; Insured Crops <i>(Pananim na ipinaseguro)</i>: <b> {{$report->insuredcrop}}</b> <br>
                        &nbsp; &nbsp; 6. &nbsp; &nbsp; Area Insured <i>Luwang/Sukat ng Bukid na ipinaseguro</i>: <b>{{$report->areahectare}}</b><br>
                        &nbsp; &nbsp; 7. &nbsp; &nbsp; Variety Planted <i>Binhing Itinanim</i>: <b>{{$report->varietyplanted}}</b><br>
                        &nbsp; &nbsp; 8. &nbsp; &nbsp; Date of Sowing <i>(Petsa ng Pagpupunla)</i>: <b>{{$report->sowingdate}}</b> <br>
                        &nbsp; &nbsp; 9. &nbsp; &nbsp; Actual Date of Planting <i>(Aktwal na petsa ng pagkakatanim)</i>: {{$report->plantingdate}} <br>
                        &nbsp; &nbsp; 10. &nbsp;&nbsp; RSBSA Number : <b>{{$info->rsbsa}}</b><br><br>

                        <b class="text-sm">II.  &nbsp; &nbsp; DAMAGE INDICATORS (MGA IMPORMASYON TUNGKOL SA PINSALA):</b> <br>
                        &nbsp; &nbsp; 1. &nbsp; &nbsp; Cause of Loss <i> (Sanhi ng Pinsala)</i>: <b>{{$report->causeofloss}}</b><br>
                        &nbsp; &nbsp; 2. &nbsp; &nbsp; Date of Loss Occurence <i>(Petsa ng Pinsala)</i>: <b>{{$report->lossdate}}</b><br>
                        &nbsp; &nbsp; 3. &nbsp; &nbsp; Age/Stage of Cultivation at time of loss <i>(Edad ng Pananim ng Mapinsala)</i>: <b>{{$report->stageofplant}}</b><br>
                        &nbsp; &nbsp; 4. &nbsp; &nbsp; Area Damaged <i>(Luwang o Sukat ng Napinsalang Bahagi)</i>: <b>{{$report->areadamage}}</b><br>
                        &nbsp; &nbsp; 5. &nbsp; &nbsp; Extent/Degree of Damage <i>(Tindi o Porsyento ng Pinsala)</i>: <b>{{$report->damagepercent}}</b><br>
                        &nbsp; &nbsp; 6. &nbsp; &nbsp; Expected Date of Harvest <i>(Tinatayang Petsa ng Pagpapagapas o Pag-aani)</i>: <b>{{$report->harvestdate}}</b><br><br>

                        <b class="text-sm">III.  &nbsp; &nbsp; LOCATION SKETCH PLAN OF DAMAGED (LSP) <br>
                        (KROKIS NG BUKID NG MGA NASALANTANG NAKASEGURONG PANANIM)</b> <br>
                        <p>Isulat ang pangalan ng mga may-ari/nagsasaka ng karatig na sakahan</p><br>
                       <table class="table">
                            <thead>
                                <th>
                                    <td>Lot 1 <b>{{$report->lot1hectare}}ha.</b> </td>
                                    <td>Lot 2 <b>{{$report->lot2hectare}}ha.</b> </td>
                                    <td>Lot 3 <b>{{$report->lot3hectare}}ha.</b> </td>
                                    <td>Lot 4 <b>{{$report->lot4hectare}}ha.</b> </td>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.  North (Hilaga)</td>
                                    <td><b>{{$report->north1}}</b></td>
                                    <td><b>{{$report->north2}}</b></td>
                                    <td><b>{{$report->north3}}</b></td>
                                    <td><b>{{$report->north4}}</b></td>
                                </tr>
                                <tr>
                                    <td>2.  South (Timog)</td>
                                    <td><b>{{$report->south1}}</b></td>
                                    <td><b>{{$report->south2}}</b></td>
                                    <td><b>{{$report->south3}}</b></td>
                                    <td><b>{{$report->south4}}</b></td>

                                </tr>
                                <tr>
                                    <td>3.  East (Silangan)</td>
                                    <td><b>{{$report->east1}}</b></td>
                                    <td><b>{{$report->east2}}</b></td>
                                    <td><b>{{$report->east3}}</b></td>
                                    <td><b>{{$report->east4}}</b></td>

                                </tr>
                                <tr>
                                    <td>4.  West (Kanluran)</td>
                                    <td><b>{{$report->west1}}</b></td>
                                    <td><b>{{$report->west2}}</b></td>
                                    <td><b>{{$report->west3}}</b></td>
                                    <td><b>{{$report->west4}}</b></td>

                                </tr>
                            </tbody>

                        </table>

                        <br> <br> <br> <br>

                        <div class="card" >
                            <div class="card-body ">
                                @php
                                    $images = App\Models\Photo::all();
                                @endphp
                                @foreach ($images as $photo)
                                    @if ($photo->report_id == $report->image_id)
                                    <div class="">
                                        <b>{{$report->lossdate}}</b><br>

                                        <div class="d-flex d-inline-flex ">
                                            <img class="img-fluid img-thumbnail" width="800px" src="{{asset('images').'/'.$photo->name}}" alt="">
                                        </div>
                                    </div>

                                    @endif
                                @endforeach
                            </div>

                        </div>

                        @endif

                        @endforeach
                            {{-- @endif --}}
            @endforeach
    @endforeach
