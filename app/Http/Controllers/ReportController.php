<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
     // Store
     public function store(Request $request)
     {

        if(Auth::user()->hasRole('farmer')){

            $imageid = random_int ( 1000,90000);
            $id = random_int ( 1000,90000);
         DB::table('reports')->insert(
                [
                    'id' => $id,
                    'email' => Auth::user()->id,
                    'street' => $request->input('street'),
                    'barangay' => $request->input('barangay'),
                    'municipality' => $request->input('municipality'),
                    'province' => $request->input('province'),
                    'areahectare' => $request->input('areahectare'),
                    'insuredcrop' => $request->input('insuredcrop'),
                    'varietyplanted' => $request->input('varietyplanted'),
                    'sowingdate' => $request->input('sowingdate'),
                    'plantingdate' => $request->input('plantingdate'),
                    'causeofloss' => $request->input('causeofloss'),
                    'lossdate' => $request->input('lossdate'),
                    'stageofplant' => $request->input('stageofplant'),
                    'croplossess' => $request->input('croplossess'),
                    'areadamage' => $request->input('areadamage'),
                    'damagepercent' => $request->input('damagepercent'),
                    'harvestdate' => $request->input('harvestdate'),
                    'image_id' => $imageid,
                    'lot1hectare' => $request->input('lot1hectare'),
                    'lot2hectare' => $request->input('lot2hectare'),
                    'lot3hectare' => $request->input('lot3hectare'),
                    'lot4hectare' => $request->input('lot4hectare'),
                    'north1' => $request->input('north1'),
                    'north2' => $request->input('north2'),
                    'north3' => $request->input('north3'),
                    'north4' => $request->input('north4'),
                    'south1' => $request->input('south1'),
                    'south2' => $request->input('south2'),
                    'south3' => $request->input('south3'),
                    'south4' => $request->input('south4'),
                    'east1' => $request->input('east1'),
                    'east2' => $request->input('east2'),
                    'east3' => $request->input('east3'),
                    'east4' => $request->input('east4'),
                    'west1' => $request->input('west1'),
                    'west2' => $request->input('west2'),
                    'west3' => $request->input('west3'),
                    'west4' => $request->input('west4'),
                ]
            );
            DB::table('maps')->insert(['userid' => Auth::user()->id, 'reportid'=>$id,'map'=>$request->input('maps')]);


         $img = new Photo;
         $request->validate([
             'photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         if ($request->file('photos')) {

            $fileName = time().".".$request->file('photos')->getClientOriginalExtension();
            $request->file('photos')->move('images', $fileName);

            $img->name = $fileName;
            $img->report_id =  $imageid;


            $img->save();

         }



         return redirect()->back()->with('message','Successfully Added to Damage Report!');
        }
     }

       // update
       public function update(Request $request)
       {
        //   if(Auth::user()->hasRole('farmer')){
           Report::where('id', $request->input('currentid'))->update(
            [
                'email' => Auth::user()->id,
                'street' => $request->input('street'),
                'barangay' => $request->input('barangay'),
                'municipality' => $request->input('municipality'),
                'province' => $request->input('province'),
                'areahectare' => $request->input('areahectare'),
                'insuredcrop' => $request->input('insuredcrop'),
                'varietyplanted' => $request->input('varietyplanted'),
                'sowingdate' => $request->input('sowingdate'),
                'plantingdate' => $request->input('plantingdate'),
                'causeofloss' => $request->input('causeofloss'),
                'lossdate' => $request->input('lossdate'),
                'stageofplant' => $request->input('stageofplant'),
                'croplossess' => $request->input('croplossess'),
                'areadamage' => $request->input('areadamage'),
                'damagepercent' => $request->input('damagepercent'),
                'harvestdate' => $request->input('harvestdate'),
                'lot1hectare' => $request->input('lot1hectare'),
                'lot2hectare' => $request->input('lot2hectare'),
                'lot3hectare' => $request->input('lot3hectare'),
                'lot4hectare' => $request->input('lot4hectare'),
                'north1' => $request->input('north1'),
                'north2' => $request->input('north2'),
                'north3' => $request->input('north3'),
                'north4' => $request->input('north4'),
                'south1' => $request->input('south1'),
                'south2' => $request->input('south2'),
                'south3' => $request->input('south3'),
                'south4' => $request->input('south4'),
                'east1' => $request->input('east1'),
                'east2' => $request->input('east2'),
                'east3' => $request->input('east3'),
                'east4' => $request->input('east4'),
                'west1' => $request->input('west1'),
                'west2' => $request->input('west2'),
                'west3' => $request->input('west3'),
                'west4' => $request->input('west4')
            ]
        );
        DB::table('maps')->updateOrInsert(['userid' => Auth::user()->id, 'reportid'=>$request->input('currentid'), 'map'=>$request->input('maps')]);


           $img = new Photo;
           $request->validate([
               'photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);

           if ($request->file('photos')) {

              $fileName = time().".".$request->file('photos')->getClientOriginalExtension();
              $request->file('photos')->move('images', $fileName);

              $img->name = $fileName;
              $img->report_id = $request->input('currentid');


              $img->save();

           }

        //    $damages->update();

           return redirect()->back()->with('success','Successfully Updated the selected Damage Report!');
        //   }
       }

     public function addimage(Request $request)
     {
             $img = new Photo;

         $request->validate([
             'photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         if ($request->file('photos')) {
             $fileName = time().'.'.$request->file('photos')->getClientOriginalExtension();

             $request->file('photos')->move('images', $fileName);

             $img->report_id =  $request->input('hiddenid');
             $img->name = $fileName;
             $img->save();

         }

             return redirect()->back()->with('message','Photos was Successfully Added!');
     }

     public function picturedelete(Request $request){

        $id = $request->query('id');
        Photo::where('id',$id)->delete();


        return redirect()->back()->with('message','Photos was Successfully Added!');
     }
}
