<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Staff;



class StaffController extends Controller
{

    public function index()
    {
        //
        
        $staffs=Staff:all();
        
        return view('staffs.index',compact('staffs'));
    }

        public function create()
     {
         return view('staffs.create');
     }

         public function show($id)
     {
      
        $staff=Staff::find($id);
        return view('Home',compact('staff'));
     }
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @return Response
    //  */
     public function store(Request $request)
    {
        $staff = new Staff();
		$staff->id = $request['id'];
        $staff->name = $request['name'];
		$staff->email = $request['email'];
        $staff->address = $request['address'];
        $staff->zip = $request['zip'];
        $staff->cell_phone = $request['cell_phone'];
        $staff->save();
        $staff = Staff::all();
        return view('Home',compact('staffs'));
    }

    public function edit($id)
     {
         $staff=Staff::find($id);
         return view('staffs.edit',compact('staff'));
     }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
     public function update($id,Request $request)
     {
       
		/*$mentorUpdate=Request::all();
        $staff=Staff::find($id);
        $student->update($studentUpdate);*/
        $staff= new Staff($request->all());
        $staff = Staff::find($id);
        $staff-> update($request->all());
        return redirect('staffs');
     }

     public function destroy($id)
     {
         Staff::find($id)->delete();
         $staffs = Staff::all();
         return view('home', compact('staffs'));
     }
}



