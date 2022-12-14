<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\filmsController;
use App\Models\Users;



class cartController extends Controller
{
    

    public function add(Request $request){
        
        Cart::create([
            'id'=>$request->id,
            'description'=>$request->description,
            'image'=>$request->image,
            'price'=>$request->price,
            'age'=>$request->age,
            'qty'=>$request->qty,
            'user_id'=>$request->user()->id,
        ]);

        session()->flash('success', 'Товар успешно добвлен!');

        return redirect()->route('cart.list');
    }

    public function update(Request $request){

        Cart::where('id',$request->id)->update(
            [
                'qty' => $request->qty,
            ]
        );

        session()->flash('success', 'Товар успешно изменен!');

        return redirect()->route('cart.list');
    }
    public function remove(Request $request){
        Cart::where('id',$request->id)->delete();
        session()->flash('success', 'Товар успешно удален');

        return redirect()->route('cart.list');
    }
    public function clear(Request $request){
        Cart::truncate();

        session()->flash('success', 'Все товары удалены');

        return redirect()->route('cart.list');
    }

    public function purchase(Request $request){
        Cart::truncate();
        session()->flash('success','Вы заказали билет!');
        return redirect()->route('films');
    }
   
}
