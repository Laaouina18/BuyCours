<?php

namespace App\Http\Controllers;

use App\Models\maitre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class MaitreController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return\Illuminate\Http\response.
     */
    public function index()
    { 
        if(auth()->user()){
        $maitre=maitre::all();
        return view('maitre.index')->with('maitre',$maitre);}
        else{
            return view('auth.login');
        }
    
    }

    /**
     * Show the form for creating a new resource.
     * @return\Illuminate\Http\response.
     */
 

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
$maitre=maitre::find($id);
return view('maitre.show')->with('maitre',$maitre);
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        if(auth()->user()){
        maitre::destroy($id);
       return redirect('maitre')->with('flash_message','maitre supprimé');}
       else{
        return view('auth.login');
       }
    }
        
    }

