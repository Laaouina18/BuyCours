<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile'=>['required', 'int', 'max:255'],
            
            'image'=>[ 'nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
        ]);
    }

    protected function create(array $data)
    {
        $filename = null;

        if (isset($data['image'])) {
         
            $image = $data['image'];
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
        }

        return User::create([
            'name' => $data['name'],
            'role'=>$data['role'],
            'email' => $data['email'],
            'mobile'=>$data['mobile'],
            'password' => Hash::make($data['password']),
            'image' => $filename,
        ]);
    }
}
