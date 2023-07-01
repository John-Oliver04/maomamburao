<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'email',
        'farmloc',
        'areahectare',
        'insuredcrop',
        'varietyplanted',
        'sowingdate',
        'plantingdate',
        'causeofloss',
        'lossdate',
        'stageofplant',
        'croplossess',
        'areadamage',
        'damagepercent',
        'harvestdate',
        'image_id',
        'lot1hectare',
        'lot2hectare',
        'lot3hectare',
        'lot4hectare',
        'north1',
        'north2',
        'north3',
        'north4',
        'south1',
        'south2',
        'south3',
        'south4',
        'east1',
        'east2',
        'east3',
        'east4',
        'west1',
        'west2',
        'west3',
        'west4',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
