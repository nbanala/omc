<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Addcomment;
use App\Mentor;
use App\Student;

class AddcommentController extends Controller
{
    public function index()
    {
        //
        $addcomments = Addcomment::all();
        return view('addcomments.index',compact('addcomments'));
    }

      public function create()
     {
         $mentors = Mentor::pluck('id');
		 return view('addcomments.create', compact('mentors'));
     }

    public function store(Request $request)
    {

        $addcomment= new Addcomment($request->all());
        $addcomment->save();

        return redirect('addcomments');
    }
    
    
}

