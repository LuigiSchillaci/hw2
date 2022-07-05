<?php
namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




use Illuminate\Routing\Controller as BaseController;


class CambioController extends BaseController
{
    public function vedi()
    {
        $error=Session::get('error');
        Session::forget('error');
        return view('cambio')->with('error',$error);
        }

    public function cambia() {
        if(!Session::get('username'))
        {
           return redirect('login');
        }

        if(strlen(request('username'))==0 ||strlen(request('password'))==0 ||strlen(request('nome'))==0 ||strlen(request('cognome'))==0){
            Session::put('error','campi_vuoti');
            return redirect('cambio')->withInput();
            }
            
            else if(strlen(request('password')) < 8)
            {

            Session::put('error','password_corta');
            return redirect('cambio')->withInput();
            }
            else if(Login::where('username',request('username'))->first())
            {
            Session::put('error','esistente');
            return redirect('cambio')->withInput();
            }
            
      
        $nome_utente=Session::get('username');      
        $user = Login::find($nome_utente);
        if(!$user)
        {
        return redirect('login');
        }
        $user->nome = request('nome');
        $user->cognome = request('cognome');
        $user->username = request('username');
        $user->password = password_hash(request('password'), PASSWORD_BCRYPT);;
        $user->save();
       
        Session::put('username', $user->username);
        Session::put('password',$user->password);
        
        return redirect('principale');

    }  
}
?>