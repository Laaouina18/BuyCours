<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class cours extends Model
{
    use HasFactory;
    
    protected $table = 'cours';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'description', 'date_1','image', 'date_2', 'date_3', 'niveau', 'matiere_id', 'maitre_id',
    ];

  
    public function maitre()
    {
        return $this->belongsTo(maitre::class);
    }
    public function matiere()
    {
        return $this->belongsTo(matiere::class);
    }

}

