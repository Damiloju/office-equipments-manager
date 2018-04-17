<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Records;
use App\Office;
use App\Equipments;
use JavaScript;

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

        flash()->custom('Done!', 'You Have Deleted The Equipment Successfully');
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

        flash()->custom('Done!', 'You Have Reduced The Equipment Successfully');
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
        $messages = [
            'name.required' => 'The equipment needs to have a  name!',
            'name.min:3'    => 'The name of the equipment must have at least 3 characters',
            'equipments.required' => 'Kindly state the amount to add!',
            'equipments.numeric'    => 'The amount should be a number',
        ];

        $this->validate(request(), [
            'name' => 'required|min:3',
            'equipments_amount' => 'required|numeric',
        ],$messages);

        $record = new Records;

        $equipment = Equipments::where('name', request()->name)->get();

        $record->equipments_id = $equipment[0]->id;

        $record->office_id = $office->id;
        $record->equipments_amount = request()->equipments_amount;
        $record->user_id = Auth::user()->id;

        $record->save();

        flash()->custom('Sweet!', 'You Have Added An Equipment Successfully');
        return redirect("office/$office->id");
    }

    public function show(Records $record)
    {
        $record->load('office','user','equipments');
        JavaScript::put([
            'record' => $record
        ]);
        return view('record.details');
    }

}
