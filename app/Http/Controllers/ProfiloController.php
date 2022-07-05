<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Preferiti;




use Illuminate\Routing\Controller as BaseController;


class ProfiloController extends Controller {

    function register()
    {
        
        if(!Session::get('username'))
        {
            return redirect('login');
        }
        
        return view('profilo');
    }

    function stampa()
    {
        if(!Session::get('username'))
        {
            return redirect('login');
        }
        
        $nome_utente=Session::get('username');
        $users =Preferiti::where('user', $nome_utente)->get();
        return json_encode($users);
    }

}
?>