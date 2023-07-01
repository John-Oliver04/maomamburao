<?php

namespace App\Http\Controllers;

use App\Exports\ExportDamage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\User;
use App\Models\Report;
use App\Models\Photo;
use App\Models\ContactRequest;
use App\Models\Reply;
use App\Exports\ExportFarmer;
use Maatwebsite\Excel\Facades\Excel;


class InfoController extends Controller
{
    public function editinfo(Request $request)
    {


            Info::where('user_id', $request->input('email'))->update(
                [
                    'firstname' => $request->input('firstname'),
                    'middlename' => $request->input('middlename'),
                    'lastname' => $request->input('lastname'),
                    'age' => $request->input('age'),
                    'gender' => $request->input('gender'),
                    'birthday' => $request->input('birthday'),
                    'address' => $request->input('address'),
                    'rsbsa' => $request->input('rsbsa'),
                    'contacts' => $request->input('contacts'),

                ]
            );

            return redirect()->back()->with('success','Successfully updated!');
    }


    public function show(Request $request)
    {
        $email = $request->query('$emailna');
        $person = Info::where('user_id','=', $email)->get();
        return view('admin.print.persondetails')->with('person', $person);
    }

    public function showA(Request $request)
    {
        $email = $request->query('$emailna');
        $person = Info::where('user_id','=', $email)->get();
        return view('admin.print.persondetails')->with('person', $person);
    }


    public function showselected(Request $request)
    {
        $email = $request->query('$emailna');
        $id = $request->query('$currentid');
        // dd($email);
        $person = Info::where('user_id','=',$email)->get();
        $currentid = Report::where('id','=',$id)->get();


        return view('admin.print.persondetail')->with('email',$email)->with('currentid', $id)->with('person', $person);
    }

    public function showselectedA(Request $request) //Report farmer Generated report --
    {
        // emailna is a user id
        $emailna = $request->query('$emailna');
        // currentid is a current id of report
        $id = $request->query('$currentid');
        $selectedUser = User::where('id',$emailna)->first();
        $person = Info::all();

        return view('admin.print.persondetailA')->with('email', $emailna)->with('currentid', $id)->with('person', $person);
    }

    public function delete(Request $request)
    {

        $email = $request->query('email');

        $users = User::where('email',$email)->get();
        $reports = User::all();
        foreach ($users as $user) {
            foreach ($reports as $report) {
                if ($user->id == $report->email) {
                    Photo::where('report_id',$report->image_id)->delete();
                    Report::where('email',$user->id)->delete();
                }
            }
        }
        Info::where('user_id',$email)->delete();
        User::where('email',$email)->delete();

       return redirect()->back()->with('success','Successfully deleted!');
    }


    public function messagedelete(Request $request)
    {

        $id = $request->query('message');
        ContactRequest::where('id',$id)->delete();
        Reply::where('idno',$id)->delete();

       return redirect()->back()->with('success','Successfully deleted!');
    }

    public function reportdelete(Request $request)
    {

        $id = $request->query('report');
        Report::where('id',$id)->delete();

       return redirect()->back()->with('success','Successfully deleted!');
    }

    public function exportfarmers(Request $request)
    {
        return Excel::download(new ExportFarmer, 'Farmers List.xlsx');
    }
    public function exportreports(Request $request)
    {
        return Excel::download(new ExportDamage, 'Reports List.xlsx');
    }


}
