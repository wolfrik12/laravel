<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function getData(){
        $sliders = Slider::all();
        return view('o_nas',[
            'sliders'=>$sliders
        ]);
    }
   
}
