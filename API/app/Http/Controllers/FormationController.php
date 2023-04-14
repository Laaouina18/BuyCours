<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;
use App\Models\formation;
use App\Models\matiere;
use App\Models\maitre;

use App\Models\Commentaire;
use Illuminate\Validation\Rule;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return\Illuminate\Http\response.
     */
    public function index()
    { 
        if(auth()->user()){
        
        $formation=formation::all();
        return view('formation.index')->with('formation',$formation);}
        else{
            return view('auth.login');
        }
    
    }

    /**
     * Show the form for creating a new resource.
     * @return\Illuminate\Http\response.
     */
    public function create()
    {
        if(auth()->user()){
        $maitre = maitre::all();
        $matiere = matiere::all();
      
        return view('formation.create', compact('maitre', 'matiere'));}
        else{
return view('auth.login');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
         
            'image' => 'nullable',
            'date_1' => 'required|date',
            'date_2' => 'required|date',
           
            'niveau' => 'required|string|max:255',
          
            'maitre_id' => 'required|exists:users,id',
        
            
       
           
        ]);
       
        $formation= new formation();
        $formation->name = $validatedData['name'];
        $formation->description = $validatedData['description'];
        $formation->date_1 = $validatedData['date_1'];
        $formation->date_2 = $validatedData['date_2'];
      
        $formation->niveau = $validatedData['niveau'];
     
        $formation->maitre_id = $validatedData['maitre_id'];
   
      
 
        if ($request->hasFile('image')) {
            $image= $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
            $formation->image = $filename;
        }
       
    
        $formation->save();
    
        return redirect('formation')->with('flash_message', 'Vous avez ajouté une formation.');
    }
    
    

    /**
     * Display the specified resource.
     */
 
    public function show($id)
    {
$formation=formation::find($id);
// $comments = Commentaire::all();
// $commentaires=Commentaire::all();
 return view('formation.show', compact( 'formation'));

      
    }
    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit($id)
    {
        if(auth()->user()){
        $formation=formation::find($id);
        $maitre = maitre::all();
        $matiere = matiere::all();
      
        return view('formation.edit', compact('maitre', 'formation','matiere'));}
        else{
            return view('auth.login');
        }

        
    }
    public function destroy($id){
        if(auth()->user()){
        $formation = formation::find($id);
        $formation->status = 'archived';
        $formation->save();
        return redirect('formation')->with('flash_message', 'cours archived');}
        else{
            return view('auth.login');
        }
    }
    public function unarchive($id){
        if(auth()->user()){
        $formation= formation::find($id);
        $formation->status = 'active';
        $formation->save();
        return redirect()->back()->with('flash_message', 'Cours unarchived');}
        else{
            return view ('auth.login');
        }
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $formation = formation::find($id);
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
     
        'image' => 'nullable',
        'date_1' => 'required|date',
        'date_2' => 'required|date',
       
        'niveau' => 'required|string|max:255',
      
        'maitre_id' => 'required|exists:users,id',
    
        
   
    ]);

    $formation->name = $validatedData['name'];
    $formation->description = $validatedData['description'];
    $formation->date_1 = $validatedData['date_1'];
    $formation->date_2 = $validatedData['date_2'];
  
    $formation->niveau = $validatedData['niveau'];
 
    $formation->maitre_id = $validatedData['maitre_id'];

  

    if ($request->hasFile('image')) {
        $image= $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('public/images', $filename);
        $formation->image = $filename;
    }
   
    $formation->save();

    return redirect()->route('formation.index')->with('flash_message', 'Matière modifié avec succès!');
}

    /**
     * Remove the specified resource from storage.
     */
  
        
    }

