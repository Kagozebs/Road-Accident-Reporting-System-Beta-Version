<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reporter;
use App\Models\Stuff;
class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id()){

            if(Auth::user()->usertype=='0'){
                return view('admin.stuff.home');
            }

            else{
                return view('admin.home');
            }
        }

        else{
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('user.home');
    }


   

    public function store(Request $request){

       

                             $reporter=new reporter;
                             $reporter->fullname = $request->fullname;
                             $reporter->email = $request->email;
                             $reporter->phone = $request->phone;
                             $reporter->DateOfaccident= $request->DateOfaccident;
                             $reporter->Registredownerofvehicle = $request->Registredownerofvehicle;
                             $reporter->PersonDrivingThevehicle = $request->PersonDrivingThevehicle;
                             $reporter->VehicleRegistration = $request->VehicleRegistration;
                             $reporter->LocationOfAccident= $request->LocationOfAccident;
                             $reporter->Describeaccident= $request->Describeaccident;
                             $reporter->status='In progress';
                         
                             if(Auth::id()){
                             $reporter->user_id=Auth::user()->id;
                             }
                             $reporter->save();
                     
                             return redirect()->back()->with('Message, Report sent Successfully');
    }
           

}
