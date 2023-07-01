<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Info;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportFarmer  implements FromCollection,WithHeadings
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
            'Age',
            'Gender',
            'Birthday',
            'Address',
            'RSBSA',
            'Contacts',
        ];
    }
    public function collection()
    {
        $usersAndInfo = User::whereRoleIs('farmer')->join('infos','infos.user_id','=','users.email')
        ->get([
            'users.email',
            'infos.firstname',
            'infos.middlename',
            'infos.lastname',
            'infos.age',
            'infos.gender',
            'infos.birthday',
            'infos.address',
            'infos.rsbsa',
            'infos.contacts',
        ]);

        return $usersAndInfo;
    }
}
