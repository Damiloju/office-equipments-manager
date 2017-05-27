<?php

namespace App\Http\Controllers;

use App\Equipments;
use Illuminate\Http\Request;

use App\Http\Requests;

class EquipmentController extends Controller
{
    public function add()
    {
        return view('equipments.add');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'other_name' => 'required|min:3',
            'price' => 'required|numeric'
        ]);

        $equipment = new Equipments;

        $equipment->create(request()->all());

        \Session::flash('status', 'You Have Created An Equipment Successfully');

        return back();
    }
}
