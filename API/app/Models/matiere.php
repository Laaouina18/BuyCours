<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    use HasFactory;
protected  $table='matiere';
protected $primarykey='id' ;
protected $fillable = ['name', 'image', 'niveau', '_token'];
// public function songs()
// {
//     return $this->hasMany(Song::class);
// }
}
