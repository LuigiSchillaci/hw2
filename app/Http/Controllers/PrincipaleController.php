<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\preferiti;




use Illuminate\Routing\Controller as BaseController;


class PrincipaleController extends Controller {

    function vedi(){
        if(!Session::get('username'))
        {
           return redirect('login');
        }
        return view('principale');    
     }

     
     public function aggiungi() 
     { 
        
$request=request();
$preferiti= new Preferiti();
$preferiti->user=Session::get('username');
$preferiti->nome=$request->querynome;
$preferiti->brand= $request->querybrand;
$preferiti->immagine=$request->queryimg;
$preferiti->save();
if ($preferiti) {
 $response = array("stato" => true); 
} 
else {
 $response = array("stato" => false); 
}
return $response;

     }
 
     public function rimuovi() {

      if(!Session::get('username'))
      {
         return redirect('login');
      }
      $telefono=request('telefono');       
        $nome_utente = Session::get('username');
        $pref = Preferiti::where('user',$nome_utente)->where('nome',$telefono)->delete();
        if($pref)
        {
          return 1;
        }
        return 0;
}




public function cerca()
{
if(!Session::get('username')){

return [];
}


$telefoni=request('text');   
$curl = curl_init();
curl_setopt_array($curl, [
   CURLOPT_URL => "http://api-mobilespecs.azharimm.site/v2/search?query=".$telefoni,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_SSL_VERIFYHOST => false,
   CURLOPT_SSL_VERIFYPEER => false,
]);
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
   echo "cURL Error #:" . $err;
} else {
   return $response;
}


}

}

?>