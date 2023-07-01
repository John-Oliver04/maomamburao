<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mao Portal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

 <link rel="icon" href="{{ url('logo1.png') }}">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            html{
                scroll-behavior: smooth;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }

            .carding:hover {
                box-shadow: 5px 5px 10px grey;
                border-radius: 5px 5px;
                color: green;
            }

            .aboutbg {
                background-size: center;
                background-repeat: no-repeat;
                background-image: url('backgrounds/about.png');
            }
            .aboutbg2 {
                background-size: center;
                background-image: url('backgrounds/about.png');
            }
            /*
            .abouthover:hover{
                animation-delay: 1s;
                animation-duration: 3s;
                animation-direction: alternate;
                animation-name: abouth;
                animation-iteration-count: infinite;
            }

            @keyframes abouth{
                from{
                    background-color: rgb(222, 253, 222);
                }
                to{
                    background-color: rgb(255, 255, 255);
                }
            } */

            .aboutpic{
                animation-duration: 3s;
                animation-direction: alternate-reverse;
                animation-iteration-count: infinite;
                animation-name: aboutpix;
            }
            @keyframes aboutpix{
                from{
                    transform: rotate(1deg);
                }
                to{
                    transform: rotate(-1deg)
                }
            }

            .modal-content, .bg-topbar{
                background-size: cover;
                background-image: url('backgrounds/bglogin.jpg');
            }
        </style>
    </head>
    <body class="antialiased" style="overflow-x: hidden;">



    <!-- Topbar Start -->
    <div class="px-5 container-fluid d-none d-lg-block bg-topbar">
        <div class="row gx-5">
            <div class="py-1 text-center col-lg-4">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt-fill text-success me-3 fs-1"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Our Office</h6>
                        <span class="text-sm">Municipal Agriculture Office - Brgy 8 - Mamburao, Occidental Mindoro, Philippines, 5106</span>
                    </div>
                </div>
            </div>
            <div class="py-3 text-center col-lg-4 border-start border-end">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-fill me-3 fs-1 text-success"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email Us</h6>
                        <span class="text-sm">agriculture.lgumamburao@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="py-3 text-center col-lg-4">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-success me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Call Us</h6>
                        <span class="text-sm">+63965 890 9212</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="px-3 shadow-sm container-fluid sticky-top bg-dark bg-light-radial pe-lg-0">
        <nav class="py-3 navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-lg-0">
            <a href="" class="mb-1 navbar-brand">
                <h1 class="m-0 text-white display-4 text-uppercase">
                    <img src="{{url('logo1.png')}}" class="" width="64px" alt="">
                    MAO Portal
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="py-0 navbar-nav ms-auto">
                    <a href="#home" class="nav-item nav-link ">
                        Home
                    </a>
                    <a href="#about" class="nav-item nav-link">About</a>

                    <a href="#services" class="nav-item nav-link" >Services</a>

                    <a href="#contact" class="nav-item nav-link">Contact</a>


                    @if (Route::has('login'))

                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Dashboard</a>
                            @else
                                <a href="" data-bs-toggle="modal" data-bs-target="#modallogin" class="nav-item nav-link">Log in</a>

                                @if (Route::has('register'))
                                    <a href=""  data-bs-toggle="modal" data-bs-target="#modalsignup"  class="p-2 nav-item nav-link bg-success">Register</a>
                                @endif
                            @endauth

                    @endif


                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class=""id="home">
        <div  class="p-0 container-fluid">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="w-100 cover" height="600px" src={{url('portal/img/bg10.jpg')}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                {{-- <img src="{{url('logo1.png')}}" class="shadow" width="100px" alt=""> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 " height="600px" src={{url("portal/img/bgz1.jpg")}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <img src="{{url('logo1.png')}}" class="shadow" width="100px" alt="">
                                <h1 class="text-white display-2 text-uppercase mb-md-4">The farmer has to be an optimist</h1>
                                <a href="" class="mt-2 text-white btn btn-success py-md-3 px-md-5">Register</a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" height="600px" src={{url('portal/img/bgz2z.jpg')}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <img src="{{url('logo1.png')}}" class="shadow" width="100px" alt="">
                                <h1 class="text-white display-2 text-uppercase mb-md-4">We can make it</h1>
                                <a href="#contact" class="mt-2 btn btn-success py-md-3 px-md-5">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="w-100 cover" height="600px" src={{url('portal/img/bgz3.jpg')}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                {{-- <img src="{{url('logo1.png')}}" class="shadow" width="100px" alt=""> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 cover" height="600px" src={{url('portal/img/bgz4.jpg')}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                {{-- <img src="{{url('logo1.png')}}" class="shadow" width="100px" alt=""> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 cover" height="600px" src={{url('portal/img/bg6.jpg')}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                {{-- <img src="{{url('logo1.png')}}" class="shadow" width="100px" alt=""> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 cover" height="600px" src={{url('portal/img/bg8.jpg')}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                {{-- <img src="{{url('logo1.png')}}" class="shadow" width="100px" alt=""> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" height="600px" src={{url('portal/img/bgz5.jpg')}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <img src="{{url('logo1.png')}}" class="shadow" width="100px" alt="">
                                <h1 class="text-white display-4 text-uppercase mb-md-4">The farm is part of me.</h1>
                                <a href="{{route('register')}}" class="mt-2 btn btn-success py-md-3 px-md-5">Signup Now</a>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
<!-- Carousel End -->


<x-modal-login/>
<x-modal-register/>

    {{-- About Start --}}
    <x-about-web/>
    {{-- About End --}}



    <!-- Services Start -->
    <x-services/>
    <!-- Services End -->




{{-- contact start --}}

<div class="px-5 py-6 my-5 container-fluid bg-success"  id="contact">
    <div class="row gx-5">
        <div class="mb-5 col-lg-4 mb-lg-0">
            <div class="mb-4">
                <h1 class="mb-4 display-5 text-uppercase">Request A <span class="text-white">Call Back</span></h1>
            </div>
            <p class="mb-3">Whether you have a question and concern or simply want to connect with us.</p>
            <p>Feel free to send me a message in the request form or direct your message to our hotline number <b class="text-white bg-success">+63965 890 9212</b>  </p>

            <div class="d-flex ">
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Click to redirect to facebook account" href="https://www.facebook.com/MAOmamburao" target="_blank" class="p-1 m-1 border btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                </a>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Click to write an email" href="mailto:agriculture.lgumamburao@gmail.com" class="p-1 m-1 border btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                      </svg>
                </a>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Click to redirect to google maps location" href="https://goo.gl/maps/dSGeJxVW7bcc9kFv6" target="_blank" class="p-1 m-1 border btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                      </svg>
                </a>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="p-5 text-center border bg-dark">

                        <form action="{{route('dashboard-contact-save')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">

                                    <input name="name"  required type="text" class=" form-control" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input  name="email"  required type="email" class=" form-control" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="contact" id="contact" data-target-input="nearest">
                                        <input  name="contact" required type="number" class=" form-control" placeholder="Your Contact Number" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="" id="time" data-target-input="nearest">

                                        <div class="d-flex">

                                            <input type="date"
                                            name="calldate"
                                            required
                                            class="form-control datetimepicker-input"
                                            placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                            <input type="time"
                                            name="calltime"
                                            required
                                            class=" form-control datetimepicker-input"
                                            placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea required name="message" class=" form-control" rows="5" placeholder="Write a message about your concern"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="py-3 btn btn-success w-100" type="submit">Submit Request</button>
                                </div>
                            </div>
                        </form>

            </div>
        </div>
    </div>
</div>
{{-- contact end --}}


{{-- Footer start --}}
    <x-footer/>
{{-- Footer end --}}

        <script>
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

                    function showservices()
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
                    function hideservices()
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
    </body>
</html>
