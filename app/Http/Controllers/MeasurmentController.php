<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;

class MeasurmentController extends Controller
{
    public function index()
    {
        return view('frontend.measurment');
    }

     public function store(Request $request)
    {

        $request->validate([

            'seena'            => 'required',
            'teera'            => 'required',
            'bazu_length'      => 'required',
            'kameez_length'    => 'required',
            'collar'           => 'required',
            'armhole'          => 'required',
            'shalwar_length'   => 'required',
            'pancha'           => 'required',

        ]);

        Measurement::create([

            'seena'            => $request->seena,
            'teera'            => $request->teera,
            'bazu_length'      => $request->bazu_length,
            'kameez_length'    => $request->kameez_length,
            'collar'           => $request->collar,
            'armhole'          => $request->armhole,
            'shalwar_length'   => $request->shalwar_length,
            'pancha'           => $request->pancha,
            'instructions'     => $request->instructions,

        ]);

        return redirect()->view('frontend.order_overview')->with('success', 'Measurements Submitted Successfully');

    }

    
}
