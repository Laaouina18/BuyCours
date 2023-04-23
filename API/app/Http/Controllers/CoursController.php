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

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return\Illuminate\Http\response.
     */
    public function index()
    { 
        if(auth()->user()){
        
        $cours=cours::all();
        return view('cours.index')->with('cours',$cours);}
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
      
        return view('cours.create', compact('maitre', 'matiere'));}
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
         "status" => "string",
            'image' => 'nullable',
            'date_1' => 'required|string|max:255',
            'date_2' => 'required|string|max:255',
            'date_3' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
          
            'maitre_id' => 'required|exists:users,id',
            'matiere_id' => 'required|exists:matiere,id',
            
       
           
        ]);
       
        $cours= new cours();
        $cours->name = $validatedData['name'];
        $cours->description = $validatedData['description'];
        $cours->date_1 = $validatedData['date_1'];
        $cours->date_2 = $validatedData['date_2'];
        $cours->date_3 = $validatedData['date_3'];
        $cours->niveau = $validatedData['niveau'];
        $cours->status = $validatedData['status'];
     
        $cours->maitre_id = $validatedData['maitre_id'];
        $cours->matiere_id = $validatedData['matiere_id'];
      
 
        if ($request->hasFile('image')) {
            $image= $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
            $cours->image = $filename;
        }
       
    
        $cours->save();
    
        return redirect('cours')->with('flash_message', 'Vous avez ajouté un cours.');
    }
    
    

    /**
     * Display the specified resource.
     */
 
    public function show($id)
    {
$cours=cours::find($id);
// $comments = Commentaire::all();
// $commentaires=Commentaire::all();
 return view('cours.show', compact( 'cours'));

      
    }
    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit($id)
    {
        if(auth()->user()){
        $cours=cours::find($id);
        $maitre = maitre::all();
        $matiere = matiere::all();
      
        return view('cours.edit', compact('maitre', 'cours','matiere'));}
        else{
            return view('auth.login');
        }

        
    }
    public function destroy($id){
        if(auth()->user()){
        $cours = cours::find($id);
        $cours->status = 'archived';
        $cours->save();
        return redirect('cours')->with('flash_message', 'cours archived');}
        else{
            return view('auth.login');
        }
    }
    public function unarchive($id){
        if(auth()->user()){
        $cours= cours::find($id);
        $cours->status = 'active';
        $cours->save();
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
    $cours = cours::find($id);
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
         
            'image' => 'nullable',
            'date_1' => 'required|string|max:255',
            'date_2' => 'required|string|max:255',
            'date_3' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
          
            'maitre_id' => 'required|exists:users,id',
            'matiere_id' => 'required|exists:matiere,id',
          
       
    ]);


        $cours->name = $validatedData['name'];
        $cours->description = $validatedData['description'];
        $cours->date_1 = $validatedData['date_1'];
        $cours->date_2 = $validatedData['date_2'];
        $cours->date_3 = $validatedData['date_3'];
        $cours->niveau = $validatedData['niveau'];
     
        $cours->maitre_id = $validatedData['maitre_id'];
        $cours->matiere_id = $validatedData['matiere_id'];
      
 
        if ($request->hasFile('image')) {
            $image= $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
            $cours->image = $filename;
        }
       

    $cours->save();

    return redirect()->route('cours.index')->with('flash_message', 'cours modifié avec succès!');
 


}

    /**
     * Remove the specified resource from storage.
     */
  
        
    }

