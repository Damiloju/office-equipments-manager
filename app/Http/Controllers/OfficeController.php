<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use App\Equipments;

use App\Http\Requests;

class OfficeController extends Controller
{

    public function index () {

    	$offices = Office::all();

    	return view('Office.index', compact('offices'));
    }

    public function show (Office $office) {

    	$office->load('records.equipments');

    	return view('Office.show', compact('office'));

    }
}
