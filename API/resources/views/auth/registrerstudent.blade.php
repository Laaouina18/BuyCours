@extends('layouts.app')

@section('content')
<div class="registration-form">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-icon">
                <span><i class="fa fa-user"></i></span>
            </div>
                    <div class="form-group">
            
            <input type="file" class="form-control item" id="image" name="image">
        </div>

     
        <div class="form-group">
      
            <input type="number" class="form-control item" id="name" name="mobile" placeholder="entrer votre num">
        </div>
                  
                    <div class="form-group">
             
                      
                            <input id="name" type="text" class="form-control item" name="name" value="{{ old('name') }}" placeholder="entrer votre nom" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="form-group">
                 
                      
                            <input id="email" type="email" class="form-control item" name="email" value="{{ old('email') }}"  required autocomplete="email" placeholder="entrer votre email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
               
                    </div>
                    <div class="form-group">
                
                
                            <input id="password" type="password" class="form-control item" name="password"  placeholder="entrer votre password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
</div>
                            <div class="form-group">
           
      
                                <input id="password-confirm" type="password" class="form-control item" name="password_confirmation"  placeholder="confirmer votre password" required autocomplete="new-password">
                            
               
                           
                        </div>
                 
                        <input type="hidden" class="form-control item" id="name" name="role"  value="student" >
                        <div class="form-group">
                <button type="submit"  class="btn btn-block create-account">Create Account</button>
            </div>
                    </form>
                </div>
            </div>
        </div>
 

@endsection
