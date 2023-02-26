<?php

namespace App\Http\Controllers;
use App\Models\Marque;
use App\Models\Produit;
use App\Models\Currency;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Input;
use Illuminate\Support\Facades\Session;
use App\Cart;
use Stripe\Charge;
use Stripe\Stripe;
use Symfony\Contracts\Service\Attribute\Required;

class ClientController extends Controller
{

    /* start theme 02 */
    public function home2()
    {
        $marques = Marque::where('status', 1)->get();
        $categories = Categorie::where('status', 1)->get();
        $produits = Produit::where('status', 1)->get();

        $produits_sp = Produit::where('product_sp', 1)->get();

        return view('client.home', [ 'marques' => $marques,
                                            'categories' => $categories,
                                            'produits' => $produits,
                                            'produits_sp' => $produits_sp ]);
    }

    public function viewP($id)
    {
        $marques = Marque::where('status', 1)->get();
        $categories = Categorie::where('status', 1)->get();
        $produits = Produit::where('id', $id)->get();

        return view('client.detail', [  'marques' => $marques,
                                        'categories' => $categories,
                                        'produits' => $produits]);
    }

    public function viewC($id)
    {
        if (Categorie::where('id', $id)->exists())
        {
            $categories = Categorie::where('status', 1)->get();
            $produits = Produit::where('category_id', $id)->get();
            $marques = Marque::where('status', 1)->get();

        return view('client.shop', ['produits'=>$produits,
                                    'categories'=> $categories,
                                    'marques' => $marques]);
        } else {
            return view('/');
        }
    }

    public function viewM($id)
    {
        // dd($id);
        if (Marque::where('id', $id)->exists())
        {
            $marques = Marque::where('status', 1)->get();
            $categories = Categorie::where('status', 1)->get();
            $produits = Produit::where('marque_id', $id)->get();

        return view('client.shop', ['produits'=>$produits,
                                    'categories'=> $categories,
                                    'marques' => $marques]);
        } else {
            return view('/');
        }
    }

    public function shop(){
        return view('client.shop');
    }

    public function detail(){
        return view('client.detail');
    }

    public function contact2(){
        $marques = Marque::where('status', 1)->get();
        $categories = Categorie::where('status', 1)->get();
        $produits = Produit::where('status', 1)->get();

        return view('client.contact', [ 'marques' => $marques,
                                        'categories' => $categories,
                                        'produits' => $produits]);
    }

    public function cart(){
        if(!Session::has('cart')){
            // dd('hello');
            return redirect(route('home2'));
        }
        $categories = Categorie::get();
        $marques = Marque::get();
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        return view('client.cart', [ 'products' => $cart->items,
                                     'marques' => $marques,
                                     'categories' => $categories ]);
    }


    public function checkout(){
        if(!Session::has('cart')){
            return view('client.cart');
        }
        // dd('hello');
        $categories = Categorie::get();
        $marques = Marque::get();
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        return view('client.checkout', [ 'products' => $cart->items,
                                     'marques' => $marques,
                                     'categories' => $categories ]);
    }
    /* end theme 02 */


    public function news()
    {
        $marques = Marque::where('status', 1)->get();
        $produits = Produit::where('status', 1)->get();

        return view('client.news', ['marques' => $marques,
                                    'produits' => $produits]);
    }

    public function products()
    {
        $produits = Produit::where('status', 1)->get();

        return view('client.products', ['produits' => $produits]);
    }

    public function viewProduit($id)
    {
        $produits = Produit::where('id', $id)->get();
        $marques = Marque::where('status', 1)->get();
        $categories = Categorie::where('status', 1)->get();

        $currencies = Currency::select('currency_code', 'exchange_rate')->where('status', 1)->get()->toArray();
       // dd($getCurrencies);

        return view('client.viewProduit', ['produits' => $produits,
                                           'marques' => $marques,
                                           'categories'=> $categories,
                                           'currencies' => $currencies ]);

    }

    public function viewCategories($id)
    {
        // dd($id);
        if (Categorie::where('id', $id)->exists())
        {
            $categories = Categorie::where('status', 1)->get();
            $produits = Produit::where('category_id', $id)->get();
            $marques = Marque::where('status', 1)->get();

        return view('client.viewCategories', ['produits'=>$produits,
                                              'categories'=> $categories,
                                              'marques' => $marques]);
        } else {
            return view('/');
        }
    }

    public function viewMarque($id)
    {
        if(Marque::where('id', $id)->exists())
        {
            $marques = Marque::where('status', 1)->get();
            $produits = Produit::where('marque_id', $id)->get();
            $categories = Categorie::where('status', 1)->get();

            return view('client.viewMarque', [ 'produits'=>$produits,
                                               'categories'=> $categories,
                                               'marques' => $marques ]);
        } else {
            return view('/');
        }
    }

    public function barViewMarque($id)
    {
        if(Marque::where('id', $id)->exists())
        {
            $marques = Marque::where('status', 1)->get();
            $produits = Produit::where('marque_id', $id)->get();
            $categories = Categorie::where('status', 1)->get();

            return view('client.viewMarque', ['produits'=>$produits,
                                              'categories'=> $categories,
                                              'marques' => $marques]);
        } else {
            return view('/');
        }
    }

    public function payer(Required $request)
    {
        // dd(request()->input('stripeToken'));

        if(!Session::has('cart')){
            return view('client.cart');
        }

        $oldCart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_51MUvG8FiXOQHHSFQOtetPNvQEvsOYLko6eTFtiPisy6oOR5nnUVtNBBqxbdyuN5Y4AGtWq7bGMWVSCVBeKJuVxy600g4MaFlyN');

        try{
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "description" => "Test Charge",
                "source" => request()->input('stripeToken'), // obtainded with Stripe.js
            ));

        } catch(\Exception $e){
            Session::put('error', $e->getMessage());
            return redirect(route('checkout'));
        }

        Session::forget('cart');
        // Session::put('success', 'Purchase accomplished successfully !');
        dd();
        return redirect(route('cart'))->with('status', 'Achat accompli avec succés');
    }
}
