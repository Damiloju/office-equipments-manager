<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use App\Equipments;

use App\Http\Requests;

class OfficeController extends Controller
{

    public function index () 
    {
    	/**
			Gets the list of all the offices and returns them to a view
    	**/

    	$offices = Office::all();

    	return view('Office.index', compact('offices'));
    }

    public function show (Office $office) 
    {
    	/**
			Eager Loads the office table with the records and equipments relationship
    	**/
    	$office->load('records.equipments');

    	return view('Office.show', compact('office'));

    }
}
