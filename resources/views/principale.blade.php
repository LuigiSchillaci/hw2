@extends('layouts.home')

@section('script')
    
<link rel="stylesheet" href="{{ url('css/principale.css')}}" />
<script src='{{ url('js/principale.js')}}' defer></script>
@endsection




        @section('ricerca')
         <img src="../image/images.jfif">
         <form name="ricerca" id="ricerca" method="get">
        @csrf
                <input type="search"  onfocus="this.value=''" value="Inserisci nome telefono da cercare" name="prodotto" id="prodotto" >
         <input  type="submit" value="Cerca">
         </form>
         @endsection

     



         @section('telefono')
         <div id='telefono'>
             
         </div>


         
         @endsection
         
         
         
         
          
         
