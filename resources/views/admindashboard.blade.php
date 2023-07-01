<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



        <div class="">
            {{-- start modal --}}

            <form  action="{{url('dashboard-register')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Damages Report Form</h5>
                        <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="crop" class="form-label">Type of Crop (Choose one only)</label>
                                <input required type="text" class="form-control" id="crop" name="crop" placeholder="Ex: Rice, Corn, Onion, Banana etc.">
                            </div>

                            <div class="mb-3">
                                <label for="losses" class="form-label">Estimated Crop Losses</label>
                                <input required type="number" class="form-control" id="losses" name="losses" placeholder="Php 000.00">
                            </div>
                            <div class="mb-3">
                                <label for="hectare" class="form-label">Hectares</label>
                                <input required type="text" class="form-control" id="hectare" name="hectare" placeholder="Input Hectares">
                            </div>

                            <div class="mb-3">
                                <label for="disaster" class="form-label">Type of Disaster</label>
                                <input required type="text" class="form-control" id="disaster" name="disaster" placeholder="Ex: Flood, High Wind, Typhoon">
                            </div>

                            <div class="mb-3">
                                <label for="dated" class="form-label">Date</label>
                                <input required type="text" class="form-control" id="dated" name="dated" placeholder="Date of typhoon">
                            </div>

                            <div class="mb-3">
                                <label for="pic" class="form-label">Picture of Damages</label>
                                <input type="file" name="photos" class="form-control" id="pic">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-sm btn-outline-success" value="Add"/>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            {{-- end modal --}}
        </div>


    </x-app-layout>
