<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    use HasFactory;
    
    protected $table = 'formation';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'description', 'date_1','image', 'date_2', 'niveau',  'maitre_id',
    ];

  
    public function maitre()
    {
        return $this->belongsTo(maitre::class);
    }

    // public function comments()
    // {
    //     return $this->hasMany(Commentaire::class);
    // }
}

