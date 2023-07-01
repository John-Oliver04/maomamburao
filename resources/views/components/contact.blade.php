
    <!-- Appointment Start -->
    <div class="px-2 py-6 my-5 container-fluid" style="background: rgb(40, 107, 62);" id="contact">
        <div class="row gx-5">
            <div class="mb-5 col-lg-4 mb-lg-0">
                <div class="mb-4">
                    <h1 class="mb-4 display-5 text-uppercase">Request A <span class="text-success">Call Back</span></h1>
                </div>
                <p class="mb-3">Whether you have a question and concern or simply want to connect with us.</p>
                <p>Feel free to send me a message in the request form or direct your message to our hotline number <b class="text-white bg-success">+63965 890 9212</b>  </p>

                <div class="d-flex ">
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Click to redirect to facebook account" href="https://www.facebook.com/MAOmamburao" target="_blank" class="p-1 m-1 border btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                    </a>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Click to write an email" href="" class="p-1 m-1 border btn btn-success">
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
                <div class="p-1 text-center" style="background-color: rgb(34, 34, 34);">

                        @php
                            $users = App\Models\Info::where('user_id', Auth::user()->email)->get();

                        @endphp
                        @foreach ($users as $user)
                            <form action="{{route('dashboard-contact-save')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">

                                        <input name="name" value="{{$user->firstname}}" required type="text" class=" form-control" placeholder="Your Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input  name="email" value="{{$user->user_id}}" required type="email" class=" form-control" placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="contact" id="contact" data-target-input="nearest">
                                            <input  name="contact" value="{{$user->contact}}" required type="number" class=" form-control" placeholder="Your Contact Number" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="" id="time" data-target-input="nearest">
                                            <label for="calldate ">Schedule</label>
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
                        @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
