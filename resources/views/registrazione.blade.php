@extends('layouts.login_registrazione')



 @section('js')
 <script src='{{ url('js/registrazione.js')}} ' defer></script>
 @endsection

 @section('title','Registrazione')


@section('h1','Registrati')
@section('form')
@if($error == 'campi_vuoti')
<section class='error'>Compilare tutti i campi.</section>
@elseif($error == 'password_corta')
<section class='error'>Password corta.</section>
@elseif($error == 'esistente')
<section class='error'>Account già esistente</section>
@endif
                <form name='form' method='post'> 
                    @csrf
                <p><label>Nome <input type='text' name='nome' value='{{ old("nome") }}' ></label></p>
                <p><label>Cognome <input type='text' name='cognome' value='{{ old("cognome") }}'></label></p>
                    <p><label>Username <input type='text' name='username' value='{{ old("username") }}'></label></p>
                    <p><label>Password <input type='password' name='password' value='{{ old("password") }}'></label></p>
                    <button type="submit">Registrati</button>
                    <button onclick="location.href='login'" type="button">Indietro</button>       
       
				 </form>
                 @endsection

