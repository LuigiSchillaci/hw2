
@extends('layouts.home')
@section('script')
<link rel="stylesheet" href="{{ url('css/controllo_password.css')}}"/>
@endsection




@section('cambio')
<section>

            <form name='form' method='post' id="dati">
            @csrf
             <h1>Inserisci la tua password attuale</h1>      
             @if($error == 'password_errata')
<section class='error'>Errore password</section>
@endif
             <p><label>Password: <input type="password" name="password" id='password'></label></p>
             <button type="submit">Entra</button>
             </form>
</section>
@endsection

