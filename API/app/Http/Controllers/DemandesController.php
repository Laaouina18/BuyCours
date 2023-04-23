<?php
namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;
use App\Models\Cours;
use App\Models\matiere;
use App\Models\maitre;
use App\Models\Inscription;
use App\Models\Commentaire;
use App\Models\formation;
use App\Models\User;
use Illuminate\Validation\Rule;

class DemandesController extends Controller
{
    //
    public function index(){
    
            $cours=cours::all();
            $inscription=inscription::all();
            $formation=formation::all();

            return view('demandes.index')->with(['cours' => $cours, 'inscription' => $inscription, 'formation' => $formation]);
    

    }
 
    public function editformation($id){
  
        $formation = formation::find($id);
        $formation->status = 'valide';
        $formation->save();
        return redirect('demandes')->with('flash_message', 'cours archived');}
       
    
   
    public function editcours($id){
      
        $cours = cours::find($id);
        $cours->status = 'valide';
        $cours->save();
        return redirect('demandes')->with('flash_message', 'cours archived');
    }
      
    
    public function editinscription($idetudiant, $idcours){
        
            $inscription = Inscription::where('idetudiant', $idetudiant)->where('idcours', $idcours)->first();
            if($inscription){
                $inscription->status = 'valide';
                $inscription->save();
                return redirect('demandes')->with('flash_message', 'cours valide');
            } else {
                // Inscription not found, handle error accordingly
            }
      
    }
    public function destroyformation($id){
      
            $formation = formation::find($id);
            if($formation){
                $formation->delete();
                return redirect('demandes')->with('flash_message', 'Formation supprimée avec succès');
         
   
    }}
    
    public function destroy($id){
       
            $cours = Cours::findOrFail($id);

            // supprimez le cours
      
            if($cours){
                $cours->delete();
                return redirect('demandes')->with('flash_message', 'Cours supprimé avec succès');
            } else {  
                // Cours not found, handle error accordingly
            }
       
    }
    
    public function destroyinscription($idetudiant, $idcours){
        $inscription = Inscription::where('idetudiant', $idetudiant)->where('idcours', $idcours)->firstOrFail();
        $inscription->delete();
        return redirect('demandes')->with('flash_message', 'Inscription supprimée avec succès');
    }
    
    
    
    
    
}
