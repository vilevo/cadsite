<?php

namespace App\Http\Controllers;

use App\Projet;

use Illuminate\Http\Request;

class VisiteursController extends Controller
{
    public function show_projet($id)
    {
        $projet = Projet::find($id);
        if ($projet) {
            return view('show_projet')->with('projet', $projet);
        }
    }
}
