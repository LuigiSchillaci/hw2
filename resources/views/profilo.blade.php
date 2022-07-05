@extends('layouts.home')

    @section('script')
<link rel="stylesheet" href="{{ url('css/profilo.css')}}"/>
<script src='{{ url('js/profilo.js')}}' defer></script>
<script src='{{ url('js/elimina.js')}}' defer></script>
@endsection

@section('telefono')
<div id='telefono'>

</div>


@endsection

@section('cambio')

<div class="container">

                    <form name="cambio" id="cambio" method='get'>
                        @csrf
                     <label>Vuoi cambiare le tue credenziale?</label>
                     <button onclick="location.href='controllo_password'" type="button">Cambia Credenziali</button><br>
                     <label>Vuoi Eliminare il tuo account?</label>
                     <button type="submit">Elimina Account</button>
                </div>
    

@endsection


 



            
