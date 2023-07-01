<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-between">
        <h6 class="m-0 font-weight-bold text-success">Registered User </h6>
        <div class="col-lg-4 d-flex justify-end ">
                {{-- <select wire:model='yearselect'  name="crop" class="form-control" id="crop">
                    <option value="" disabled selected>Choose Year</option>
                    @for ($year=2023;$year>=2010;$year--)
                    <a href="#"><option value="{{$year}}">{{$year}}</option></a>
                    @endfor

                </select>
                <input class="btn btn-success" type="submit" value="Load">{{$yearselect}} --}}
                <h5>2023</h5>
        </div>
    </div>
    <div class="card-body">
        <div class="chart-bar">
            <canvas id="myBarChart"></canvas>
        </div>
        <hr>
    </div>
    <div class="m-2">

        This chart shows the registered users every month.
    </div>
</div>

