<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Office;
use App\Equipments;
use JavaScript;

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

    	JavaScript::put([
         'offices' => $offices
        ]);

    	return view('Office.index');
    }

    public function getOffices()
    {
        return $offices = Office::all();
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
    	$office->load('records.equipments')->where('deleted_at', null);
//
//    	JavaScript::put([
//    	   'office' => $office,
//        ]);
//
//    	return view('Office.show', compact('office'));

        return $office;
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

            $messages = [
                'body.required' => 'The office needs to have a  name!',
                'body.min:5'    => 'The name of the office must have at least 5 characters',
            ];

            $this->validate(request(), [
                'body' => 'required|min:5'
            ],$messages);

            $office = new Office;

            $office->name = request()->body;

            try {
                $office->save();

                flash()->custom('Sweet!', 'You Have Added An Office Successfully');

                return back();
            }catch (QueryException $e) {
    //            return response()->json(['status'=>$e->getCode(),'Message'=>$e->getMessage()]);
                flash()->error('Sorry!', "The office $office->name already exist");

                return back();
            }
        }
}
