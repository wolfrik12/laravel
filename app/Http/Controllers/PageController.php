<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\filmsController;
use App\Models\Cart;
use App\Models\Descr;

class PageController extends Controller
{
    public function callFunction(){
        $films=filmsController::all();
        $films = $films->sortBy('price');
        return view('index',[
           
           
            
            'films'=>$films,
        ]);
    }
    public function where(){
        return view('where');
    }
    public function admin(){
        $admins = User::all();
        return view('admin',[
            'admins'=>$admins
        ]);
    }
    public function films(Request $request){
        
            // dd($request);
            
            $films=filmsController::all();

            $users = filmsController::all();
            
            $users = $users->sortBy('description');
            
            return view('index',[
           
            'users'=>$users,
            'films'=>$films,
        ]);
    }
    public function filmsPage($id){
        $films=filmsController::find($id);
$descr=Descr::find($id);
        if(!$films){
            return abort(404);
        }
        return view('aboutFilms',[
           "films"=>$films,
           "descr"=>$descr,
        ]);
    }
    public function showCart(Request $request){
        
        $cartItems = Cart::where('user_id',$request->user()->id)->get();
        return view('cart',[
            'cartItems'=>$cartItems
        ]);
    }

}
