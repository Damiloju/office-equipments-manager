<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Records;
use App\Office;
use App\Equipments;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class RecordsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
    	// returns the insert view
    	return view('insert');
    }

    /**
     * @param Records $record
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Records $record)
    {
    	// deletes a record from the records table
    	$record->delete();

        \Session::flash('del', 'You Have Deleted The Equipment Successfully');
    	return back();
    }

    /**
     * @param Records $record
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reduce(Records $record)
    {
    	$record->euipments_amount = $record->euipments_amount - 1;
    	$record->save();

        \Session::flash('red', 'You Have Reduced The Equipment Successfully');
    	return back();

    }

    /**
     * @param Office $office
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add (Office $office)
    {

        $office->load('records.equipments');
        $equipments = $office->records->lists('equipments')->lists('id');
        $equipment = Equipments::whereNotIn('id', $equipments)->get();

        return view('record.add', compact('equipment','office'));
    }

    /**
     * @param Office $office
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store (Office $office)
    {

        $this->validate(request(), [
            'name' => 'required|min:3',
            'euipment_amount' => 'required|numeric',
        ]);

        $record = new Records;

        $equipment = Equipments::where('name', request()->name)->get();

        $record->equipments_id = $equipment[0]->id;

        $record->office_id = $office->id;
        $record->euipments_amount = request()->euipment_amount;
        $record->user_id = Auth::user()->id;

        $record->save();

        \Session::flash('sto', 'You Have Added An Equipment Successfully');
        return redirect("office/$office->id");
    }

    public function show(Records $record)
    {
        $record->load('office','user','equipments');
        return view('record.details',compact('record'));
    }

}
