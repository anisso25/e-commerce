<?php

namespace App\Http\Controllers;

// use App\Models\Cart;
use App\Cart;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $product = Produit::findorfail($id);
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        // dd($cart->add($product, $id));
        $cart->add($product, $id);
        Session::put('cart', $cart);

        // dd(Session::get('cart'));
         return redirect('/');
    }

    public function update(Request $request)
    {
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($request->id, $request->quantity);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return redirect('/panier');

    }

    public function retirer(Request $request, $id){
        $categories = Categorie::get();

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            $products = Produit::get();
            Session::forget('cart');
        }

        return redirect('/panier');
    }

}
