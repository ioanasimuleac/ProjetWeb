<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Demander extends Model{
    //attributs
    private $nomEntreprise;
    private $idTypeBois;
    private $quantite;

    //methodes
    public function __construct($nom, $type,$qt){
    	$this->nomEntreprise = $nom;
    	$this->idTypeBois = $type;
    	$this->quantite = $qt;
    }
    
    public function getNomEntreprise(){
    	return $this->nomEntreprise;
    }

    public function getIdTypeBois(){
    	return $this->idTypeBois;
    }

    public static function readItem($nom){
		$values = array($nom);
        $sqlrequest = "select idtypebois, quantite from demander where nomentreprise = ?;";
        $done = DB::select($sqlrequest, $values);
        return $done;
	}
     public static function readThemAll(){
        $sqlrequest = "select nomentreprise, nomtypebois, quantite from demander, typebois where demander.idtypebois = typebois.idtypebois;";
        $done = DB::select($sqlrequest);
        return $done;
    }

    public static function detaliu(){
        $sqlr = "(select demander.nomentreprise, villeentreprise, rueentreprise,codeentreprise,nomrep, prenomrep, email, telephone from entreprise, demander, representant where demander.nomentreprise = entreprise.nomentreprise and entreprise.emailrepresentant = representant.email)";
        $done = DB::select($sqlr);
        return $done;
    }

    public function create(){
    	$values = array($this->nomEntreprise, $this->idTypeBois, $this->quantite);
        $sqlrequest = "insert into demander values (?, ?, ?)";
        $done = DB::insert($sqlrequest, $values);
        return $done;
    }
    public function delete(){
    	$values = array($this->nomEntreprise);
        $sqlrequest = "delete from demander where nomEntreprise = ?";
        $done = DB::delete($sqlrequest, $values);
    }
    
    public function updateIt(){}



}
