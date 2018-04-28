<?php

namespace App\Http\Controllers;

use App\Equipments;
use App\Http\Requests;
use App\Office;
use App\Records;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        return view('home');
//    }

    public function index(Office $office, Equipments $equipments, User $user, Records $records)
    {
        $officeCount = $office->count();
        $equipmentsCount = $equipments->count();
        $userCount = $user->count();
        $faultyCount = $records->where('no_of_faulty', '>', 0)->sum('no_of_faulty');
        $recordsDetails =  $records->with('office','user','equipments')->get();

        $data = [
            'officeCount' => $officeCount,
            'equipmentsCount' => $equipmentsCount,
            'userCount' => $userCount,
            'faultyCount' => $faultyCount,
            'records' => $recordsDetails
        ];

        return view('home')->with('data', $data);
    }

    public function toggleMode(User $user)
    {
        $theme_mode = auth()->user()->theme_mode;

        if ($theme_mode == 0){
            $result = $user->where('id',auth()->id())->update(['theme_mode' => 1]);
        }else{
            $result = $user->where('id',auth()->id())->update(['theme_mode' => 0]);
        }

        return back();
    }
}
