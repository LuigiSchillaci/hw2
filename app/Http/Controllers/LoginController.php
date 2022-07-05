<?php
namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




use Illuminate\Routing\Controller as BaseController;


class LoginController extends Controller {

    
    public function verifica() {
        { 
            if(Session::get('username'))
            {
           return redirect('principale');
            }
            $error=Session::get('error');
            Session::forget('error');
            return view('login')->with('error',$error);
        }
    }



    public function login() {
        if(Session::get('username'))
        {
           return redirect('principale');
        }

        if(strlen(request('username'))==0 ||strlen(request('password'))==0){
            Session::put('error','campi_vuoti');
            return redirect('login')->withInput();
            }
      
           $login = Login::where('username',request('username'))->first();
           $pass = request('password');
           if(!$login ||!password_verify(request('password'),$login->password))
            {
            Session::put('error','nonesiste');
            return redirect('login')->withInput();
            }
      Session::put('username',$login->username);
      Session::put('password',$pass);
       return redirect('principale');
}



     public function logout() {
         Session::flush();
         return redirect('login');
     }
}
?>