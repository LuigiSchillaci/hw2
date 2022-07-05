<?php
namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




use Illuminate\Routing\Controller as BaseController;


class EliminaController extends BaseController
{

    public function elimina() {

      if(!Session::get('username'))
      {
         return redirect('login');
      }


        $nome_utente = Session::get('username');
        $user = Login::where('username',$nome_utente)->first();
        if($user)
        {
            $user->delete();
            Session::flush();
          return 1;
        }
        return redirect('profilo');
}
}


?>