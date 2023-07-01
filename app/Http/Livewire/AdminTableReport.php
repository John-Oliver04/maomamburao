<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Models\Info;
use App\Models\Report;
use App\Models\Map;

class AdminTableReport extends Component
{
    use WithPagination;

    public $searchuser;
    public $searchreport;
    public $searchreq;
    public $searchdate;

    public function render()
    {
        $countfarmers = Auth::user()->whereRoleIs('farmer')
        ->paginate(5, ['*'],'$countfarmers');

        $countinfos = Info::where('firstname','like','%'.$this->searchuser.'%')
        ->orWhere('middlename','like','%'.$this->searchuser.'%')
        ->orWhere('lastname','like','%'.$this->searchuser.'%')
        ->orWhere('age','like','%'.$this->searchuser.'%')
        ->orWhere('gender','like','%'.$this->searchuser.'%')
        ->orWhere('birthday','like','%'.$this->searchuser.'%')
        ->orWhere('address','like','%'.$this->searchuser.'%')
        ->orWhere('rsbsa','like','%'.$this->searchuser.'%')
        ->orWhere('contacts','like','%'.$this->searchuser.'%')
        ->orWhere('user_id','like','%'.$this->searchuser.'%')
        ->get();

        $reports = Report::where('street','like','%'.$this->searchreport.'%')
        ->orWhere('barangay','like','%'.$this->searchreport.'%')
        ->orWhere('municipality','like','%'.$this->searchreport.'%')
        ->orWhere('province','like','%'.$this->searchreport.'%')
        ->orWhere('areahectare','like','%'.$this->searchreport.'%')
        ->orWhere('insuredcrop','like','%'.$this->searchreport.'%')
        ->orWhere('varietyplanted','like','%'.$this->searchreport.'%')
        ->orWhere('sowingdate','like','%'.$this->searchreport.'%')
        ->orWhere('plantingdate','like','%'.$this->searchreport.'%')
        ->orWhere('causeofloss','like','%'.$this->searchreport.'%')
        ->orWhere('lossdate','like','%'.$this->searchreport.'%')
        ->orWhere('stageofplant','like','%'.$this->searchreport.'%')
        ->orWhere('croplossess','like','%'.$this->searchreport.'%')
        ->orWhere('areadamage','like','%'.$this->searchreport.'%')
        ->orWhere('damagepercent','like','%'.$this->searchreport.'%')
        ->orWhere('harvestdate','like','%'.$this->searchreport.'%')
        ->paginate(5,['*'],'$reports');

        $maps = Map::all();

        return view('livewire.admin-table-report',
        [
            'reports'=> $reports,
            'countfarmers'=> $countfarmers,
            'countinfos'=> $countinfos,
            'maps'=> $maps,
        ]);
    }
}
