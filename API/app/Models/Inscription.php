<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{

    use HasFactory;

    protected $table = 'inscription';
    
    protected $fillable = [
        'idetudiant',
        'idcours',
        'status',
    ];
    
    public function etudiant()
    {
        return $this->belongsTo(User::class, 'idetudiant');
    }

    public function cours()
    {
        return $this->belongsTo(Cours::class, 'idcours');
    }
}


