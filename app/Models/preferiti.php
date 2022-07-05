<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Preferiti extends Model{
	protected $table = 'preferitis';	
	//Parte con relazione
	public function login(){
		return $this->belongsTo('App/Models/login');
	
	}
}

?>