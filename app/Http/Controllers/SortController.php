<?php

namespace App\Http\Controllers;
use App\Models\filmsController;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function sortByPrice($sort){
       
        $genres = [
            'фантастика',
            'мультфильм',
            'комедия',
            'драма',
            'боевик',
        ];
        foreach($genres as $genre){
            if($sort==$genre){
                $films=filmsController::where('genre',$sort)->get();
                break;
            }else{
                continue;
            }
        }

        $childs=[
            '6',
            '12',
        ];
        $adults=[
            '16',
            '18',
        ];
        if($sort=='adult'){
            $films=filmsController::where('age',$adults[0])->orWhere('age',$adults[1])->orderBy('age')->get();
            
        }elseif($sort=='child'){
            $films=filmsController::where('age',$childs[0])->orWhere('age',$childs[1])->orderBy('age')->get();
            
        }
        
        if($sort=='old'){
            $films=filmsController::all()->sortBy('created_at');
        }elseif($sort=='new'){
            $films=filmsController::all()->sortByDesc('created_at');
        }
        
        if($sort=='name_desc'){
            $films=filmsController::all()->sortBy('description');
        }elseif($sort=='name'){
            $films=filmsController::all()->sortByDesc('description');
        }
        
        return view('index',[
            'films'=>$films,
        ]);
    } 
}
