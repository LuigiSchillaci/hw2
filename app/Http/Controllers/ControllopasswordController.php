<?php
namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




use Illuminate\Routing\Controller as BaseController;


class ControllopasswordController extends BaseController
{

    public function entra()
    {
        $error=Session::get('error');
        Session::forget('error');
        return view('controllo_password')->with('error',$error);
        return $error;

    }

    public function controllo() {

        if(!Session::get('username'))
        {
           return redirect('login');
        }

        $nome_utente=Session::get('username');    
        $user = Login::where('username',$nome_utente)->first();
        if(!password_verify(request('password'),$user->password))
        {
            Session::put('error','password_errata');
            return redirect('controllo_password')->withInput();
            
        }

        return redirect('cambio');

    }  
}

?>