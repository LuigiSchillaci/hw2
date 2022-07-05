@extends('layouts.login_registrazione')



@section('js')
<script src='{{ url('js/login.js')}}' defer></script>
@endsection
<script type="text/javascript">
    const csrf_token = "{{ csrf_token() }}";
</script>

 

@section('title','Cambio Credenziali')


@section('h1','Cambio Credenziali')
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
                <p><label>Nome <input type='text' name='nome'></label></p>

                <p><label>Cognome <input type='text' name='cognome'></label></p>

                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <button type="submit">Cambia Credenziali</button>
                    <button onclick="location.href='login'" type="button">Indietro</button>       
       
				 </form>
                 @endsection

