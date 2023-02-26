<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;
use Illuminate\Support\Facades\Storage;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMarque()
    {
        return view('admin.marques.ajouterMarque');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marques = Marque::all();

        return view('admin.marques.afficherMarque')->with('marques', $marques);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marques = new Marque();
        try {

                if ($request->hasfile('icon')) {
                    $fileNameWithExt = $request->file('icon')->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $ext = $request->file('icon')->getClientOriginalExtension();
                    $fileNameToStore = $fileName.'_'.time().'.'.$ext;
                    $path = $request->file('icon')->storeAs('public/icon/', $fileNameToStore);
                } else {
                    $fileNameToStore = 'noimage.jpg';
                }

            $marques->uuid = time();
            $marques->marke_name = $request->input('marke_name');

            $marques->status = 1;
            $marques->icon = $fileNameToStore;
            $marques->save();

            return redirect(route('marques.indexMarque'));
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
        $marques=Marque::find($id);

        return view('admin.marques.editerMarque', ['marques'=> $marques]);
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
        $marques = Marque::find($request->input('id'));
        $marques->marke_name = $request->input('marke_name');
        $marques->status = 1;

             try {
                if ($request->hasfile('icon')) {
                    $fileNameWithExt = $request->file('icon')->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $ext = $request->file('icon')->getClientOriginalExtension();
                    $fileNameToStore = $fileName.'_'.time().'.'.$ext;
                    $path = $request->file('icon')->storeAs('public/icon/', $fileNameToStore);
                } else {
                    $fileNameToStore = 'noimage.jpg';
                    }

            $marques->icon = $fileNameToStore;

            $marques->update();

            return redirect(route('marques.create'));
        } catch (\Throwable $e) {
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy(Marque $marque)
    {
        if ($marque->icon != 'noimage.jpg') {
            Storage::delete('public/icon/'.$marque->icon);
        }

        $marque->delete();

        return redirect(route('marques.create'));
    }

    public function activer($id)
    {
        $marque = Marque::find($id);
        $marque->status = 1;
        $marque->update();

        return redirect(route('marques.create'));
    }

    public function desactiver($id)
    {
        $marque = Marque::find($id);
        $marque->status = 0;
        $marque->update();

        return redirect(route('marques.create'));

    }
}
