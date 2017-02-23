<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;

use App\Http\Requests;

class RecordsController extends Controller
{
    public function index () 
    {
    	// returns the insert view
    	return view('insert');
    }

    public function destroy(Records $record) 
    {
    	// deletes a record from the records table
    	$record->delete();

    	return back();
    } 

    public function reduce(Records $record) 
    {

    	$record->euipments_amount = $record->euipments_amount - 1;
    	$record->save();

    	return back();

    }
}
