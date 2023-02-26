<?php

namespace App\Http\Controllers;
use App\Models\MarqueController;
use App\Models\Categorie;
use App\Models\Marque;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCategorie()
    {
        $marques = Marque::get(['id', 'marke_name']);

        return view('admin.categories.ajouterCategories', ['marques'=> $marques]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::with(['marques'])->get();
        return view('admin.categories.afficherCategorie', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $categories = new Categorie();
        // dd($categories);
             try {
                if ($request->hasfile('image_c')) {
                    // 1 : get file name with ext.
                    $fileNameWithExt = $request->file('image_c')->getClientOriginalName();
                    // 2 : get just file name
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // 3 : get just file extension
                    $ext = $request->file('image_c')->getClientOriginalExtension();
                    // 4 : file name to store
                    $fileNameToStore = $fileName.'_'.time().'.'.$ext;
                    // 5 : uploader l'image
                    $path = $request->file('image_c')->storeAs('public/image_c/', $fileNameToStore);
                } else {
                    $fileNameToStore = 'noimage.jpg';
                    }

                    $categories->uuid = time();
                    $categories->category_name = $request->input('category_name');
                    $categories->discription_c = $request->input('discription_c');
                    $categories->image_c = $fileNameToStore;
                    $categories->status = 1;
                    $categories->marques()->associate(Marque::find($request->input('marque_id')));
                    $categories->save();

                    return redirect(route('categories.indexCategorie'));

        } catch (\Throwable $e) {
    }
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
        $categories=Categorie::find($id);

        $marques=Marque::all();

        return view('admin.categories.editerCategorie', ['categories'=>$categories, 'marques'=> $marques]);
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
        $categories = Categorie::find($request->input('id'));


            if ($request->hasfile('image_c')) {
                // 1 : get file name with ext.
                $fileNameWithExt = $request->file('image_c')->getClientOriginalName();
                // 2 : get just file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // 3 : get just file extension
                $ext = $request->file('image_c')->getClientOriginalExtension();
                // 4 : file name to store
                $fileNameToStore = $fileName.'_'.time().'.'.$ext;
                // 5 : uploader l'image
                $path = $request->file('image_c')->storeAs('public/image_c/', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
                }

                $categories->category_name = $request->input('category_name');
                $categories->discription_c = $request->input('discription_c');
                // dd($categories->discription_c);
                $categories->image_c = $fileNameToStore;
                $categories->marques()->associate(Marque::find($request->input('marque_id')));
                $categories->update();

                return redirect(route('categories.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        {
            if ($categorie->image_c != 'noimage.jpg') {
                Storage::delete('public/image_p/'.$categorie->image_c);
            }

            $categorie->delete();

            return redirect(route('categories.create'));
        }
    }
}
