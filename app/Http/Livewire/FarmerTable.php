<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;
class FarmerTable extends Component
{
    use WithPagination;

    public $searchreport;
    public $walalang;
    public $currentid;
    public function render()
    {

            $reports = Report::where('email', Auth::user()->id)
            ->orwhere('street','like','%'.$this->searchreport.'%')
            ->orwhere('barangay','like','%'.$this->searchreport.'%')
            ->orwhere('municipality','like','%'.$this->searchreport.'%')
            ->orwhere('province','like','%'.$this->searchreport.'%')
            ->orwhere('areahectare','like','%'.$this->searchreport.'%')
            ->orwhere('insuredcrop','like','%'.$this->searchreport.'%')
            ->orwhere('varietyplanted','like','%'.$this->searchreport.'%')
            ->orwhere('sowingdate','like','%'.$this->searchreport.'%')
            ->orwhere('plantingdate','like','%'.$this->searchreport.'%')
            ->orwhere('causeofloss','like','%'.$this->searchreport.'%')
            ->orwhere('lossdate','like','%'.$this->searchreport.'%')
            ->orwhere('stageofplant','like','%'.$this->searchreport.'%')
            ->orwhere('croplossess','like','%'.$this->searchreport.'%')
            ->orwhere('areadamage','like','%'.$this->searchreport.'%')
            ->orwhere('damagepercent','like','%'.$this->searchreport.'%')
            ->orwhere('harvestdate','like','%'.$this->searchreport.'%')
            ->get();


        return view('livewire.farmer-table', ['reports'=>$reports]);
    }
}
