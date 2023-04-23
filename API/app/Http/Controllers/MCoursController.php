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



class MCoursController extends Controller
{
    //
    public function create()
    {
        if(auth()->user()){
        $maitre = maitre::all();
        $matiere = matiere::all();
      
        return view('createcours', compact('maitre', 'matiere'));}
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
    
        return view('home')->with('flash_message', 'votre demande est bien effectué.');
    }
    
    
}
