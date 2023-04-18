@extends('layouts.app')

@section('content')

		<h1 style="text-align:center;margin-top:14px;">Choisissez votre profil</h1>
<div class="profil">
			<a href="{{ route('register') }}">
				<div class="maitre">
					<h2>Maître</h2>
				</div>
			</a>
			<a href="{{ route('registers') }}">
				<div class="etudiant">
					<h2>Étudiant</h2>
				</div>
			</a>
		</div>

        @endsection