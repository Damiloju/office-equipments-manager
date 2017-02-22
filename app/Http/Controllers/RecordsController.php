<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;

use App\Http\Requests;

class RecordsController extends Controller
{
    public function index () {
    	
    	return view('insert');
    }

    public function destroy(Records $record) {

    	$record->delete();

    	return back();
    } 
}
