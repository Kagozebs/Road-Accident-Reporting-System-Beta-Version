<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stuff;
use App\Models\Reporter;
use App\Model\admin\admin;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_stuff');
    
    }




    public function upload(Request $request)
    {
        $stuff=new stuff;
        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('stuffimage',  $imagename);
        $stuff->image=$imagename;
         $stuff->sname = $request->sname;
        $stuff->phone = $request->phone;
        $stuff->speciality = $request->speciality;
        $stuff->password = $request->password;
     

        $stuff->save();
        
        return redirect()->back()->with('Message, Report sent Successfully');
    }

    public function showreports()
    {
        $reporter=reporter::all();   
        return view('admin.showreports', compact('reporter'));
    } 

    public function approved($id)
    {
        $reporter=reporter::find($id);
        return view('admin.showreports', compact('reporter'));
        $reporter->status='approved';

        $reporter->save();
        return redirect()->back();
    }

    public function canceled($id)
    {
        $reporter=reporter::find($id);
        return view('admin.roles.showreports', compact('reporter'));
        $reporter->status='canceled';

        $reporter->save();
        return redirect()->back();
    } 

    public function showstuff()
    {
        $stuff=stuff::all();
        return view('admin.roles.showstuff', compact('stuff'));
    }

    public function deletestuff($id)
    {
        $stuff=stuff::find($id);
      

        $stuff->delete();
        return redirect()->back();
    } 

    public function updatestuff($id)
    {
        $stuff=stuff::find($id);   
        return view('admin.roles.update_stuff', compact('stuff'));
    }

    public function editstuff(Request $request, $id)
    {
        $stuff=stuff::find($id);

        $stuff->sname=$request->sname;
        $stuff->phone=$request->phone;
        $stuff->speciality=$request->speciality;

        $image=$request->file;

        if($image)
        {

         
            $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('stuffimage',  $imagename);
        $stuff->image=$imagename;
        } 

        $stuff->save();
        
        return redirect()->back();
       

    }

     
    
}
