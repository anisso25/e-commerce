<?php

namespace App\Http\Controllers;
use App\Models\Marque;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProduit()
    {
        $marques = Marque::get(['id', 'marke_name']);
        $categories = Categorie::get(['id', 'category_name']);

        return view('admin.produits.ajouterProduit', ['marques' => $marques,
                                                      'categories'=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits = Produit::all();
        $categories = Categorie::get(['id', 'category_name']);
        $marques = Marque::all();

        return view('admin.produits.afficherProduit',
        ['produits'=>$produits,
         'categories'=> $categories,
         'marques' => $marques ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produits = new Produit();
                // upload image produit
                if ($request->hasfile('image_p')) {
                    $fileNameWithExt = $request->file('image_p')->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $ext = $request->file('image_p')->getClientOriginalExtension();
                    $fileNameToStore = $fileName.'_'.time().'.'.$ext;
                    $path = $request->file('image_p')->storeAs('public/image_p/', $fileNameToStore);
                } else {
                    $fileNameToStore = 'noimage.jpg';
                    }
                $produits->image_p = $fileNameToStore;

                // upload fiche technique
                if ($request->hasfile('fiche_t')) {
                    $fileNameWithExt = $request->file('fiche_t')->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $ext = $request->file('fiche_t')->getClientOriginalExtension();
                    $fileNameToStore2 = $fileName.'_'.time().'.'.$ext;
                    $path = $request->file('fiche_t')->storeAs('public/fiche_t/', $fileNameToStore2);
                } else {
                    $fileNameToStore2 = 'noimage.jpg';
                    }
                $produits->fiche_t = $fileNameToStore2;

                    $produits->uuid = time();
                    $produits->product_name = $request->input('product_name');
                    $produits->product_title = $request->input('product_title');
                    $produits->prix = $request->input('prix');
                    $produits->discription_p = $request->input('discription_p');
                    $produits->status = 1;
                    $produits->product_sp = 0;

                    $produits->categories()->associate(Categorie::find($request->input('category_id')));
                    $produits->marques()->associate(Marque::find($request->input('marque_id')));

                    $produits->save();

                    return redirect(route('produits.indexProduit'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produits=Produit::find($id);
        $marques = Marque::get(['id', 'marke_name']);
        $categories = Categorie::get(['id', 'category_name']);

        return view('admin.produits.editerProduit',
        ['marques' => $marques,
         'categories'=> $categories,
         'produits'=> $produits]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $produits = Produit::find($request->input('id'));
                $produits->product_title = $request->input('product_title');
                $produits->product_name = $request->input('product_name');

                $produits->prix = $request->input('prix');
                $produits->discription_p = $request->input('discription_p');
                $produits->status = 1;

                // upload image produit
                if ($request->hasfile('image_p')) {
                    $fileNameWithExt = $request->file('image_p')->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $ext = $request->file('image_p')->getClientOriginalExtension();
                    $fileNameToStore = $fileName.'_'.time().'.'.$ext;
                    $path = $request->file('image_p')->storeAs('public/image_p/', $fileNameToStore);
                } else {
                    $fileNameToStore = 'noimage.jpg';
                    }

                // upload fiche technique
                if ($request->hasfile('fiche_t')) {
                    $fileNameWithExt = $request->file('fiche_t')->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $ext = $request->file('fiche_t')->getClientOriginalExtension();
                    $fileNameToStore2 = $fileName.'_'.time().'.'.$ext;
                    $path = $request->file('fiche_t')->storeAs('public/fiche_t/', $fileNameToStore2);
                } else {
                    $fileNameToStore2 = 'noimage.jpg';
                    }

                    $produits->image_p = $fileNameToStore;
                    $produits->fiche_t = $fileNameToStore2;

                    $produits->categories()->associate(Categorie::find($request->input('category_id')));
                    $produits->marques()->associate(Marque::find($request->input('marque_id')));

                    $produits->update();

            return redirect(route('produits.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        {
            if ($produit->image_p != 'noimage.jpg') {
                Storage::delete('public/image_p/'.$produit->image_p);
            }

            $produit->delete();

            return redirect(route('produits.create'));
        }
    }

    public function activer($id)
    {
        $produit = Produit::find($id);

        $produit->product_sp = 1;

        $produit->update();

        return redirect(route('produits.create'));
    }

    public function desactiver($id)
    {
        $produit = Produit::find($id);

        $produit->product_sp = 0;

        $produit->update();

        return redirect(route('produits.create'));

    }
}
