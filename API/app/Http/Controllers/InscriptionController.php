<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    //


public function store(Request $request)
{
    $idetudiant = auth()->user()->id;
    $idcours = $request->input('idcours');
    
    $inscription = new Inscription;
    $inscription->idetudiant = $idetudiant;
    $inscription->idcours = $idcours;
    $inscription->status = 'en cours';
    $inscription->save();
    
    return redirect()->back();
}

}
