
@extends('layouts.login_registrazione')


        @section('js')
        <script src='{{ url('js/login.js')}}' defer></script>
        @endsection

        @section('title','Login')

          


@section('h1','Login')
@section('form')
@if($error == 'campi_vuoti')
<section class='error'>Compilare tutti i campi.</section>
@elseif($error == 'nonesiste')
<section class='error'>Credenziali non valide.</section>
@endif
                <form name="form" method="post">
                    @csrf
                    <p><label>Username <input type="text" name="username" id='username' value='{{ old("username") }}'></label></p>
                    <p><label>Password <input type="password" name="password" id='password'></label></p>
                    <button type="submit">Entra</button>
					<button onclick="location.href='registrazione'" type="button">Registrati</button>       
				 </form>
                 @endsection


