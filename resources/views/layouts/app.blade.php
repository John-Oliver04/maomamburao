<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>



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
            <link rel="icon" href="{{ url('logo1.png') }}">
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

            <!-- Custom styles for this template-->
            <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

            <style>
                [x-cloak] { display: none !important; }

                .f{
                     color: rgb(132, 36, 118);

                }

                /* Hide scrollbar for Chrome, Safari and Opera */
                .messagescroll::-webkit-scrollbar {
                    display: none;
                }

                /* Hide scrollbar for IE, Edge and Firefox */
                .messagescroll {
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
                max-height: 300px;
                }

                .profileimg
                {
                    background-image: url('backgrounds/profilebg.png');
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                @font-face {
                    font-family: ChopinScript;
                    src: url('fonts/GreatVibesRegular.ttf') format('truetype');
                }

            </style>
            @livewireStyles()
    </head>
    <body class="font-sans antialiased page-top" id="page-top" >
        <div class="min-h-screen bg-gray-100 ">
            @include('layouts.navigation')
        </div>



        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="{{asset('js/jquery.printPage.js')}}"></script>

        {{-- Script for PIE GRAPH - damages to crops -- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\--}}
        @php
            $rice =  App\Models\Report::where('varietyplanted','Rice')->count();
            $corn = App\Models\Report::where('varietyplanted','Corn')->count();
            $banana = App\Models\Report::where('varietyplanted','Banana')->count();
            $union = App\Models\Report::where('varietyplanted','Union')->count();
            $cassava = App\Models\Report::where('varietyplanted','Cassava')->count();
        @endphp
        <script>
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';


            //RICE CORN UNION BANANA CASSAVA
            const crops = ["Rice","Corn","Union","Banana","Cassava"];
            // Pie Chart Example
            var ctx = document.getElementById("myPieChart");
            var rice = "<?= $rice ?>";
            var corn = "<?= $corn ?>";
            var banana = "<?= $banana ?>";
            var union = "<?= $union ?>";
            var cassava = "<?= $cassava ?>";
            var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: crops,
                datasets: [{
                    data: [rice, corn, banana, union, cassava],
                backgroundColor: ['rgb(102, 205, 102)', '#1cc88a', '#36b9cc', 'rgb(115, 228, 185)', 'rgb(230, 117, 215)'],
                hoverBackgroundColor: ['rgb(32, 120, 35)', '#17a673', '#2c9faf', 'rgb(61, 121, 98)', 'rgb(132, 36, 118)'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: true
            },
                cutoutPercentage: 80,
            },
            });

        </script>

        {{-- script for BAR CHART \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}
        @php
            $jan = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','01')->count();
            $feb = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','02')->count();
            $mar = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','03')->count();
            $apr = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','04')->count();
            $may = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','05')->count();
            $jun = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','06')->count();
            $jul = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','07')->count();
            $aug = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','08')->count();
            $sep = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','09')->count();
            $oct = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','10')->count();
            $nov = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','11')->count();
            $dec = App\Models\Info::whereYear('created_at', 2023)->whereMonth('created_at','12')->count();



            if($jan < 40 && $feb < 40 &&  $mar < 40 &&  $apr < 40 &&  $may < 40 &&  $jun < 40 &&  $jul < 40 &&  $aug < 40 &&  $sep < 40 &&  $oct < 40 &&  $nov < 40 &&  $dec < 40 )
            {
                $range = 50;
                if($jan < 20 && $feb < 20 &&  $mar < 20 &&  $apr < 20 &&  $may < 20 &&  $jun < 20 &&  $jul < 20 &&  $aug < 20 &&  $sep < 20 &&  $oct < 20 &&  $nov < 20 &&  $dec < 20 )
                {
                    $range = 40;
                    if ($jan < 10 && $feb < 10 &&  $mar < 10 &&  $apr < 10 &&  $may < 10 &&  $jun < 10 &&  $jul < 10 &&  $aug < 10 &&  $sep < 10 &&  $oct < 10 &&  $nov < 10 &&  $dec < 10 )
                    {
                        $range = 20;
                    }
                }
            }


        @endphp


{{-- GRAPH FOR REGISTERED FARMER --}}
        <script>


            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
            }

            // Bar Chart Example
            var ctx = document.getElementById("myBarChart");
            var range = "<?= $range ?>"
            var jan = "<?= $jan ?>"
            var feb = "<?= $feb ?>"
            var mar = "<?= $mar ?>"
            var apr = "<?= $apr ?>"
            var may = "<?= $may ?>"
            var jun = "<?= $jun ?>"
            var jul = "<?= $jul ?>"
            var aug = "<?= $aug ?>"
            var sep = "<?= $sep ?>"
            var oct = "<?= $oct ?>"
            var nov = "<?= $nov ?>"
            var dec = "<?= $dec ?>"

            var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June","July","August","September","October","November","December"],
                datasets: [{
                label: "Registered",
                backgroundColor: "rgb(44, 127, 44)",
                hoverBackgroundColor: "green",
                borderColor: "#4e73df",
                data: [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    time: {
                    unit: ''
                    },
                    gridLines: {
                    display: false,
                    drawBorder: false
                    },
                    ticks: {
                    maxTicksLimit: 6
                    },
                    maxBarThickness: 75,
                }],
                yAxes: [{
                    ticks: {
                    min: 0,
                    max: range,
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return  number_format(value) + ' farmers' ;
                    }
                    },
                    gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                    }
                }],
                },
                legend: {
                display: false
                },
                tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': ' + number_format(tooltipItem.yLabel) + ' farmers';
                    }
                }
                },
            }
            });

        </script>

        {{-- Script for AREA GRAPH damages per year -- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\--}}

        <script>
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
                // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
            }

            // Area Chart Example
            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["2010", "2011", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"],
                datasets: [{
                label: "Estimated Lost",
                lineTension: 0.3,
                backgroundColor: " rgb(117, 252, 117)",
                borderColor: "green",
                pointRadius: 3,
                pointBackgroundColor: "red",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [800000, 1000000, 500000, 1500000, 1000000, 2000000, 1500000, 2500000, 2000000, 3000000, 2500000, 4000000],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    time: {
                    unit: 'date'
                    },
                    gridLines: {
                    display: false,
                    drawBorder: false
                    },
                    ticks: {
                    maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '₱' + number_format(value);
                    }
                    },
                    gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                    }
                }],
                },
                legend: {
                display: false
                },
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: 'red',
                titleFontSize: 14,
                borderColor: 'gray',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': ₱' + number_format(tooltipItem.yLabel);
                    }
                }
                }
            }
            });


        </script>

        <script  >
            $(document).ready(function(){
                    // change the selector to use a class
                    $(".ReplyMsg").click(function(){
                        // this will query for the clicked toggle
                        var $toggle = $(this);

                        // build the target form id
                        var id = "#ReplyMessage" + $toggle.data('id');

                        $( id ).toggle();
                    });
                });

            var varAbout = document.getElementById("aboutpage");
            var vardashboard = document.getElementById("dashboardpage");
            var varservices = document.getElementById("servicespage");
            var varcontact = document.getElementById("contactspage");
            var varProfile = document.getElementById("profilepage");
            var vartable = document.getElementById("tablepage");
            var vartablereport = document.getElementById("tablereportpage");

            var varAboutF = document.getElementById("aboutpageF");
            var vardashboardF = document.getElementById("dashboardpageF");
            var varservicesF = document.getElementById("servicespageF");
            var varcontactF = document.getElementById("contactspageF");
            var varProfileF = document.getElementById("profilepageF");
            var vartableF = document.getElementById("tablepageF");

            const farmerbtn = document.getElementById("farmerbtn");
            const reportbtn = document.getElementById("reportbtn");
            const aboutbtn = document.getElementById("aboutbtn");
            const servicebtn = document.getElementById("servicebtn");
            var showM = document.getElementById("showM");
            const requestbtn = document.getElementById("requestbtn");

            let show = document.getElementById('enabledtext');
            let hide = document.getElementById('disabledtext');

                // $(requestbtn).click(function (e) {
                //     e.preventDefault();
                //     $("#clickM").trigger("click");
                // });

                $("#requestbtn").bind("click", (function () {

                   $('#clickM').click();

                }));





            function enabletext()
            {
                if (show.style.display === 'none') {
                    hide.style.display = 'none';
                    show.style.display = 'block';

                }else if(show.style.display === 'none'){
                    show.style.display = 'block';
                    hide.style.display = 'none';
                }
            }

                function profileFunc() {
                    $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(contactbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                        if (varProfileF.style.display === "none") {
                            varAboutF.style.display = "none";
                            vardashboardF.style.display = "none";
                            varservicesF.style.display = "none";
                            varcontactF.style.display = "none";
                            varProfileF.style.display = "block";
                        }

                }
                function profileFuncs() {
                    $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(contactbtn).removeClass('bg-gradient-success text-white border border-white shadow');

                        if (varProfileF.style.display === "none") {
                            varAboutF.style.display = "none";
                            varservicesF.style.display = "none"
                            varcontactF.style.display = "none"
                            vardashboardF.style.display = "none"
                            varProfileF.style.display = "block"
                        }

                }


                function aboutFunc()  {
                    $(aboutbtn).addClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(farmerbtn).removeClass('bg-gradient-success text-white border border-white shadow');

                        if (varAbout.style.display === "none") {
                            vartable.style.display = "none";
                            vartablereport.style.display = "none";
                            varAbout.style.display = "block";
                            vardashboard.style.display = "none";
                            varservices.style.display = "none";

                        }

                }
                function aboutFuncs()  {
                    $(aboutbtn).addClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(contactbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                        if (varAboutF.style.display === "none") {
                            varAboutF.style.display = "block";
                            varservicesF.style.display = "none"
                            varcontactF.style.display = "none"
                            vardashboardF.style.display = "none"
                            varProfileF.style.display = "none"


                        }
                }
                function servicesFunc() {
                    $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).addClass('bg-gradient-success text-white border border-white shadow');
                    $(farmerbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                        if (varservices.style.display === "none") {
                            vartable.style.display = "none";
                            vartablereport.style.display = "none";
                            varservices.style.display = "block";
                            varAbout.style.display = "none";
                            vardashboard.style.display = "none";
                        }
                }
                function servicesFuncs() {
                    $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(contactbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).addClass('bg-gradient-success text-white border border-white shadow');
                        if (varservicesF.style.display === "none") {
                            varAboutF.style.display = "none";
                            varservicesF.style.display = "block"
                            varcontactF.style.display = "none"
                            vardashboardF.style.display = "none"
                            varProfileF.style.display = "none"


                        }
                }

                function  dashboardFunc() {
                        // admindash.style.display = 'block';
                        // admintable.style.display = 'none';
                        $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(farmerbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                        if (vardashboard.style.display === "none" ) {
                            vartable.style.display = "none";
                            vartablereport.style.display = "none";
                            vardashboard.style.display = "block";
                            varAbout.style.display = "none";
                            varservices.style.display = "none";
                        }
                    }
                function  dashboardFuncs() {
                        // admindash.style.display = 'block';
                        // admintable.style.display = 'none';
                    $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).addClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(contactbtn).removeClass('bg-gradient-success text-white border border-white shadow');

                        if (vardashboardF.style.display === "none" ) {
                            varAboutF.style.display = "none";
                            varservicesF.style.display = "none"
                            varcontactF.style.display = "none"
                            vardashboardF.style.display = "block"
                            varProfileF.style.display = "none"


                        }
                    }

                function tableFunc() {
                        // admindash.style.display = 'none';
                        // admintable.style.display = 'block';
                        $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(farmerbtn).addClass('bg-gradient-success text-white border border-white shadow');
                        if (vartable.style.display === "none" ) {
                            vardashboard.style.display = "none";
                            vartable.style.display = "block";
                            vartablereport.style.display = "none";
                            varAbout.style.display = "none";
                            varservices.style.display = "none";
                        }
                }
                function reportFunc() {
                        // admindash.style.display = 'none';
                        // admintable.style.display = 'block';
                        $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).addClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(farmerbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                        if (vartablereport.style.display === "none" ) {
                            vardashboard.style.display = "none";
                            vartable.style.display = "none";
                            vartablereport.style.display = "block";
                            varAbout.style.display = "none";
                            varservices.style.display = "none";
                        }
                }


                function contactsFunc() {

                        if (varcontact.style.display === "none") {
                            vartable.style.display = "none";
                            vartablereport.style.display = "none";
                            varcontact.style.display = "block";
                            varAbout.style.display = "none";
                            vardashboard.style.display = "none";
                            varservices.style.display = "none";


                            // admindash.style.display = 'none';
                            // admintable.style.display = 'block';
                        }
                }
                function contactsFuncs() {
                    $(aboutbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(reportbtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(servicebtn).removeClass('bg-gradient-success text-white border border-white shadow');
                    $(contactbtn).addClass('bg-gradient-success text-white border border-white shadow');
                        if (varcontactF.style.display === "none") {
                            varAboutF.style.display = "none";
                            varservicesF.style.display = "none"
                            varcontactF.style.display = "block"
                            vardashboardF.style.display = "none"
                            varProfileF.style.display = "none"


                            // admindash.style.display = 'none';
                            // admintable.style.display = 'block';
                        }
                }



                    document.getElementById("serviceid1").style.display='none';
                    document.getElementById("serviceid2").style.display='none';
                    document.getElementById("serviceid3").style.display='none';
                    document.getElementById("serviceid4").style.display='none';
                    document.getElementById("serviceid5").style.display='none';
                    document.getElementById("serviceid6").style.display='none';
                    document.getElementById("serviceid7").style.display='none';
                    document.getElementById("serviceid8").style.display='none';
                    document.getElementById("serviceid9").style.display='none';
                    document.getElementById("serviceid10").style.display='none';
                    document.getElementById("serviceid11").style.display='none';
                    document.getElementById("serviceid12").style.display='none';
                    var serviceid = document.getElementById("serviceid")
                    var showbtn = document.getElementById('showbtn');
                    var hidebtn = document.getElementById('hidebtn');


                    function  showservices()
                    {
                        if(serviceid1.style.display == 'none')
                        {
                            document.getElementById("serviceid1").style.display='block';
                            document.getElementById("serviceid2").style.display='block';
                            document.getElementById("serviceid3").style.display='block';
                            document.getElementById("serviceid4").style.display='block';
                            document.getElementById("serviceid5").style.display='block';
                            document.getElementById("serviceid6").style.display='block';
                            document.getElementById("serviceid7").style.display='block';
                            document.getElementById("serviceid8").style.display='block';
                            document.getElementById("serviceid9").style.display='block';
                            document.getElementById("serviceid10").style.display='block';
                            document.getElementById("serviceid11").style.display='block';
                            document.getElementById("serviceid12").style.display='block';
                            hidebtn.style.display = 'block';
                            showbtn.style.display = 'none';

                        }
                        else
                        {
                            document.getElementById("serviceid1").style.display='none';
                            document.getElementById("serviceid2").style.display='none';
                            document.getElementById("serviceid3").style.display='none';
                            document.getElementById("serviceid4").style.display='none';
                            document.getElementById("serviceid5").style.display='none';
                            document.getElementById("serviceid6").style.display='none';
                            document.getElementById("serviceid7").style.display='none';
                            document.getElementById("serviceid8").style.display='none';
                            document.getElementById("serviceid9").style.display='none';
                            document.getElementById("serviceid10").style.display='none';
                            document.getElementById("serviceid11").style.display='none';
                            document.getElementById("serviceid12").style.display='none';
                            hidebtn.style.display = 'none';
                            showbtn.style.display = 'block';
                        }
                    }

                    function  hideservices()
                    {
                        if(serviceid1.style.display == 'none')
                        {
                            document.getElementById("serviceid1").style.display='block';
                            document.getElementById("serviceid2").style.display='block';
                            document.getElementById("serviceid3").style.display='block';
                            document.getElementById("serviceid4").style.display='block';
                            document.getElementById("serviceid5").style.display='block';
                            document.getElementById("serviceid6").style.display='block';
                            document.getElementById("serviceid7").style.display='block';
                            document.getElementById("serviceid8").style.display='block';
                            document.getElementById("serviceid9").style.display='block';
                            document.getElementById("serviceid10").style.display='block';
                            document.getElementById("serviceid11").style.display='block';
                            document.getElementById("serviceid12").style.display='block';
                            hidebtn.style.display = 'block';
                            showbtn.style.display = 'none';

                        }
                        else
                        {
                            document.getElementById("serviceid1").style.display='none';
                            document.getElementById("serviceid2").style.display='none';
                            document.getElementById("serviceid3").style.display='none';
                            document.getElementById("serviceid4").style.display='none';
                            document.getElementById("serviceid5").style.display='none';
                            document.getElementById("serviceid6").style.display='none';
                            document.getElementById("serviceid7").style.display='none';
                            document.getElementById("serviceid8").style.display='none';
                            document.getElementById("serviceid9").style.display='none';
                            document.getElementById("serviceid10").style.display='none';
                            document.getElementById("serviceid11").style.display='none';
                            document.getElementById("serviceid12").style.display='none';
                            hidebtn.style.display = 'none';
                            showbtn.style.display = 'block';
                        }
                    }
        </script>

<script>


    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
    }

    // Bar Chart Example
    var ctx = document.getElementById("myBarChart");
    var range = "<?= $range ?>"
    var jan = "<?= $jan ?>"
    var feb = "<?= $feb ?>"
    var mar = "<?= $mar ?>"
    var apr = "<?= $apr ?>"
    var may = "<?= $may ?>"
    var jun = "<?= $jun ?>"
    var jul = "<?= $jul ?>"
    var aug = "<?= $aug ?>"
    var sep = "<?= $sep ?>"
    var oct = "<?= $oct ?>"
    var nov = "<?= $nov ?>"
    var dec = "<?= $dec ?>"

    var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June","July","August","September","October","November","December"],
        datasets: [{
        label: "Registered",
        backgroundColor: "rgb(44, 127, 44)",
        hoverBackgroundColor: "green",
        borderColor: "#4e73df",
        data: [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec],
        }],
    },
    options: {
        maintainAspectRatio: false,
        layout: {
        padding: {
            left: 10,
            right: 25,
            top: 25,
            bottom: 0
        }
        },
        scales: {
        xAxes: [{
            time: {
            unit: ''
            },
            gridLines: {
            display: false,
            drawBorder: false
            },
            ticks: {
            maxTicksLimit: 6
            },
            maxBarThickness: 75,
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: range,
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
                return  number_format(value) + ' farmers' ;
            }
            },
            gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
            }
        }],
        },
        legend: {
        display: false
        },
        tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
            label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ': ' + number_format(tooltipItem.yLabel) + ' farmers';
            }
        }
        },
    }
    });

</script>


@php
    $tayamaan = App\Models\Report::where('barangay', 'Tayamaan')->count();
    $balansay = App\Models\Report::where('barangay', 'Balansay')->count();
    $tangkalan = App\Models\Report::where('barangay', 'Tangkalan')->count();
    $sanluis = App\Models\Report::where('barangay', 'San Luis')->count();
    $talabaan = App\Models\Report::where('barangay', 'Talabaan')->count();
    $payompon = App\Models\Report::where('barangay', 'Payompon')->count();
    $fatima = App\Models\Report::where('barangay', 'Fatima')->count();

    $tayamaanP = intval($tayamaan / ($tayamaan + $balansay + $tangkalan + $sanluis + $talabaan + $payompon + $fatima) * 100);
    $balansayP = intval($balansay / ($tayamaan + $balansay + $tangkalan + $sanluis + $talabaan + $payompon + $fatima) * 100);
    $tangkalanP = intval($tangkalan / ($tayamaan + $balansay + $tangkalan + $sanluis + $talabaan + $payompon + $fatima) * 100);
    $sanluisP = intval($sanluis / ($tayamaan + $balansay + $tangkalan + $sanluis + $talabaan + $payompon + $fatima) * 100);
    $talabaanP = intval($talabaan / ($tayamaan + $balansay + $tangkalan + $sanluis + $talabaan + $payompon + $fatima) * 100);
    $payomponP = intval($payompon / ($tayamaan + $balansay + $tangkalan + $sanluis + $talabaan + $payompon + $fatima) * 100);
    $fatimaP = intval($fatima / ($tayamaan + $balansay + $tangkalan + $sanluis + $talabaan + $payompon + $fatima) * 100);
@endphp

{{-- GRAPH FOR MOST DAMAGES FARM OF EVERY BARANGAY --}}
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';



    // Bar Chart Example
    // var ctx = document.getElementById("damageChart");
    var range = "<?= $range ?>"

    var tayamaan = "<?= $tayamaan ?>"
    var balansay = "<?= $balansay ?>"
    var tangkalan = "<?= $tangkalan ?>"
    var sanluis = "<?= $sanluis ?>"
    var talabaan = "<?= $talabaan ?>"
    var payompon = "<?= $payompon ?>"
    var fatima = "<?= $fatima ?>"

    var tayamaanP = "<?= $tayamaanP ?>"
    var balansayP = "<?= $balansayP ?>"
    var tangkalanP = "<?= $tangkalanP ?>"
    var sanluisP = "<?= $sanluisP ?>"
    var talabaanP = "<?= $talabaanP ?>"
    var payomponP = "<?= $payomponP ?>"
    var fatimaP = "<?= $fatimaP ?>"


      //pie chart data
      var data = {
        labels: [["Tayamaan", tayamaanP.toString() + "%"],[ "Balansay", balansayP.toString() + "%"], ["Tangkalan", tangkalanP.toString() + "%"], ["San Luis", sanluisP.toString() + "%"], ["Talabaan", talabaanP.toString() + "%"], ["Payompon", payompon.toString() + "%"], ["Fatima", fatimaP.toString() + "%"]],
        datasets: [
          {
            label: "Barangay",
            data: [tayamaan, balansay, tangkalan, sanluis, talabaan, payompon, fatima],
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };

      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "top",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
      var ctx = document.getElementById("damageChart");

      //create Pie Chart class object
      var damageChart = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });


</script>


           @livewireScripts()

        </body>
</html>
