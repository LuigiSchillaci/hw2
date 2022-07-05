<?php
namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




use Illuminate\Routing\Controller as BaseController;


class RegistrazioneController extends Controller {

    function visualizza()
    { 
        if(Session::get('username'))
        {
return redirect('principale');

        }
        $error=Session::get('error');
        Session::forget('error');
        return view('registrazione')->with('error',$error);
    }

    function register() {
        if(Session::get('username'))
        {
          return redirect('principale');
        }

        if(strlen(request('username'))==0 ||strlen(request('password'))==0 ||strlen(request('nome'))==0 ||strlen(request('cognome'))==0){
            Session::put('error','campi_vuoti');
            return redirect('registrazione')->withInput();
            }
            
            else if(strlen(request('password')) < 8)
            {
            Session::put('error','password_corta');
            return redirect('registrazione')->withInput();
            }
            else if(Login::where('username',request('username'))->first())
            {
            Session::put('error','esistente');
            return redirect('registrazione')->withInput();
            }
            
            $login= new Login;
            $login->nome= request('nome');
            $login->cognome= request('cognome');
            $login->username= request('username');
            $pass= request('password');
            $login->password= password_hash(request('password'), PASSWORD_BCRYPT);
            $login->save();
           
      Session::put('username',$login->username);
      Session::put('password',$pass);
       return redirect('principale');
      
}
}


?>
