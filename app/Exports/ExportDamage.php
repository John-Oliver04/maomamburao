<?php

namespace App\Exports;

use App\Models\Report;
use App\Models\Info;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportDamage implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array{
        return[
            'Email',
            'Firstname',
            'Middlename',
            'Lastname',
            'Location of Farm',
            'Area Insured',
            'Insured Crop',
            'Variety Planted',
            'Date of Sowing',
            'Actual Date of Planting',
            'Date of Loss Occurence',
            'Age/Stage of Cultivation at Time of Loss',
            'Area Damage',
            'Extent/Percent of Damage',
            'Expected Date of Harvest',
            'Lot1 hectare',
            'Lot2 hectare',
            'Lot3 hectare',
            'Lot4 hectare',
            'North1',
            'North2',
            'North3',
            'North4',
            'South1',
            'South2',
            'South3',
            'South4',
            'East1',
            'East2',
            'East3',
            'East4',
            'West1',
            'West2',
            'West3',
            'West4',
        ];
    }

    public function collection()
    {
        $reports = User::whereRoleIs('farmer')
        ->join('reports','reports.email','=','users.id')
        ->join('infos','infos.user_id','=','users.email')
        ->get([
            'infos.user_id',
            'infos.firstname',
            'infos.middlename',
            'infos.lastname',
            'reports.farmloc',
            'reports.areahectare',
            'reports.insuredcrop',
            'reports.varietyplanted',
            'reports.sowingdate',
            'reports.plantingdate',
            'reports.lossdate',
            'reports.stageofplant',
            'reports.areadamage',
            'reports.damagepercent',
            'reports.harvestdate',
            'reports.lot1hectare',
            'reports.lot2hectare',
            'reports.lot3hectare',
            'reports.lot4hectare',
            'reports.north1',
            'reports.north2',
            'reports.north3',
            'reports.north4',
            'reports.south1',
            'reports.south2',
            'reports.south3',
            'reports.south4',
            'reports.east1',
            'reports.east2',
            'reports.east3',
            'reports.east4',
            'reports.west1',
            'reports.west2',
            'reports.west3',
            'reports.west4',

        ]);
        return $reports;
    }
}
