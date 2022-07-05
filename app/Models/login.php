<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class Login extends Model implements AuthenticatableContract{
	use Authenticatable;
    protected $primaryKey = 'username';	
	protected $autoIncrement = false;	
	protected $keyType = "string";
	//Parte con relazione
	public function preferitis(){
		return $this->hasMany('App/Models/preferiti'); 
	}
}

?>