<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        return view('admin.projets.index')->with('projets', $projets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'bail|required|min:5',
            'description' => 'required'
        ]);
        $projet = new Projet;
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        if ($projet->save()) {
            $request->session()->flash('success', $projet->titre . ' a bien été crée');
        } else {
            $request->session()->flash('error', ' une erreur s\'est produite veuillez réessayer svp! ');
        }

        return redirect()->route('admin.projets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {

        return view('admin.projets.edit')->with('projet', $projet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projet)
    {
        $this->validate($request, [
            'titre' => 'bail|required|min:5',
            'description' => 'required'
        ]);
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        if ($projet->save()) {
            $request->session()->flash('success', $projet->titre . ' a bien été modifié');
        } else {
            $request->session()->flash('error', ' une erreur s\'est produite veuillez réessayer svp! ');
        }

        return redirect()->route('admin.projets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        //
    }
}
