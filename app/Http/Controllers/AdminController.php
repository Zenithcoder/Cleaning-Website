<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clean;
use App\Property;

class AdminController extends Controller
{
    public function Index()
    {
    	
    	return view('admin.index');
    }


    public function Allclean()
    {
    	 $cleans=Clean::all();
        return view('admin.allclean',compact('cleans'));
    }

    public function Allfacility()
    {
         $facilitys=Property::all();
        return view('admin.facility',compact('facilitys'));
    }
}
