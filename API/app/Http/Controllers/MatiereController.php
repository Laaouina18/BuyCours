<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return\Illuminate\Http\response.
     */
    public function index()
    { 
        if(auth()->user()){
        $matiere=matiere::all();
        return view('matiere.index')->with('matiere',$matiere);}
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
        return view('matiere.create');
        }else{
            return view ("auth.login");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
      
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       
    ]);

    $matiere = new matiere();
    $matiere->name = $validatedData['name'];
 

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('public/images', $filename);
        $matiere->image = $filename;
    }

    $matiere->save();



        return redirect('matiere')->with('flash_message', 'vous avez ajouté une matière');
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
$matiere=matiere::find($id);
return view('matiere.show')->with('matiere',$matiere);
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(auth()->user()){
        $matiere=matiere::find($id);
        return view('matiere.edit')->with('matiere',$matiere);}
        else{
            return view('auth.login');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $matiere = matiere::find($id);
    $validatedData = $request->validate([
        "name" => "required|string|max:255",
        "image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
     
    ]);
   $matiere->name= $validatedData["name"];
 
   if ($request->hasFile('image')) {
    $image= $request->file('image');
    $filename = time().'.'.$image->getClientOriginalExtension();
    $path = $image->storeAs('public/images', $filename);
    $matiere->image = $filename;
}
    $matiere->save();

    return redirect()->route('matiere.index')->with('flash_message', 'Matière modifié avec succès!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        if(auth()->user()){
        matiere::destroy($id);
       return redirect('matiere')->with('flash_message','matiere supprimé');}
       else{
        return view('auth.login');
       }
    }
        
    }

