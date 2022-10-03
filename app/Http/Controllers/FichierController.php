<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreFichierRequest;
use App\Http\Requests\UpdateFichierRequest;

class FichierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichiers = Fichier::all();
        return view('back.pages.administration', compact('fichiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFichierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Storage::put('public/img', $request->file('img'));


        $fichier = new Fichier;
        $fichier -> src = $request -> file('img')->hashname();
        $fichier -> save();
        return redirect() -> back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function show(Fichier $fichier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function edit(Fichier $fichier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFichierRequest  $request
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFichierRequest $request, Fichier $fichier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fichier $fichier)
    {
        //
    }
}
