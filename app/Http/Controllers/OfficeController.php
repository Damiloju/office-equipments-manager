<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Office;
use App\Equipments;

use App\Http\Requests;

class OfficeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
    	/**
			Gets the list of all the offices and returns them to a view
    	**/

    	$offices = Office::all();

    	return view('Office.index', compact('offices'));
    }

    /**
     * @param Office $office
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show (Office $office)
    {
    	/**
			Eager Loads the office table with the records and equipments relationship
    	**/
    	$office->load('records.equipments');

    	return view('Office.show', compact('office'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('Office.add');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'body' => 'required|min:5'
        ]);

        $office = new Office;

        $office->name = request()->body;

        try {
            $office->save();

            \Session::flash('status', 'You Have Added An Office Successfully');

            return back();
        }catch (QueryException $e) {
//            return response()->json(['status'=>$e->getCode(),'Message'=>$e->getMessage()]);
            return back()->withErrors("Office $office->name already exist");
        }
    }
}
