<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Entreprise extends Model{
	private $nomEntreprise;
	private $villeEntreprise;
	private $rueEntreprise;
	private $codeEntreprise;
	private $emailRepresentant;


	public function __construct($nom, $ville, $rue, $code,$email){
		$this->nomEntreprise = $nom;
		$this->villeEntreprise = $ville;
		$this->rueEntreprise = $rue;
		$this->codeEntreprise = $code;
		$this->emailRepresentant = $email;
	}

	public function getNomEntreprise(){
		return $this->nomEntreprise;
	}

	public function getEmailRepresentant(){
		return $this->emailRepresentant;
	}

	public function readEmail(){
		$values = array($this->nomEntreprise);
        $sqlrequest = "select emailrepresentant from entreprise where nomentreprise = ?;";
        $done = DB::select($sqlrequest, $values);
        return $done;
	}

	public static function readItem($nom){
		$values = array($nom);
        $sqlrequest = "select nomentreprise, villeentreprise, rueentreprise,codeentreprise from entreprise where nomentreprise = ?;";
        $done = DB::select($sqlrequest, $values);
        return $done;
	}

	public static function readThemAll($value){ 
		$values = array($value);
        $sqlrequest = "select nomentreprise, villeentreprise, rueentreprise,codeentreprise from entreprise where emailrepresentant = ?;";
        $done = DB::select($sqlrequest, $values);
        return $done;
	}

	public function create(){
		$values = array($this->nomEntreprise, $this->villeEntreprise, $this->rueEntreprise, $this->codeEntreprise, $this->emailRepresentant);
        $sqlrequest = "insert into entreprise values (?, ?, ?, ?, ?)";
        $done = DB::insert($sqlrequest, $values);
        return $done;
	}
	
	public function delete(){
		$values = array($this->nomEntreprise);
        $sqlrequest = "delete from entreprise where entreprise.nomEntreprise = ?";
        $done = DB::delete($sqlrequest, $values);
	}

}
