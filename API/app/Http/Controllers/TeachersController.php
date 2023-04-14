<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;
use App\Models\Cours;
use App\Models\matiere;
use App\Models\maitre;

use App\Models\Commentaire;
use Illuminate\Validation\Rule;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return\Illuminate\Http\response.
     */
    public function index()
    { 
        if(auth()->user()){
        
        $maitre=maitre::all();
        return view('teachers')->with('maitre',$maitre);}
        else{
            return view('auth.login');
        }
    
    }}