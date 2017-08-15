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
        $messages = [
            'name.required' => 'The equipment needs to have a  name!',
            'name.min:3'    => 'The name of the equipment must have at least 3 characters',
            'other_name.required' => 'The equipment needs to have a second name!',
            'other_name.min:3'    => 'The other name of the equipment must have at least 3 characters',
            'price.required' => 'The equipment needs to have a  price!',
            'name.numeric'    => 'The price of the equipment should be a number',
        ];

        $this->validate(request(), [
            'name' => 'required|min:3',
            'other_name' => 'required|min:3',
            'price' => 'required|numeric'
        ], $messages);

        $equipment = new Equipments;

        $equipment->create(request()->all());

        flash()->custom('Sweet!', 'You Have Created An Equipment Successfully');

        return back();
    }
}
