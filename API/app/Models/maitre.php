<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maitre extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];  
    protected $hidden = [
        'password',
        'remember_token',
    ];
   
protected  $table='users';
protected $primarykey='id' ;
protected $fillable = ['name', 'image',    'password', 'remember_token',  'email_verified_at','mobile','email','_token'];
// public function songs()
// {
//     return $this->hasMany(Song::class);
// }
}
