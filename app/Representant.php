<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Representant extends Model{
    //attributs
    private $idRep;
    private $nomRep;
    private $prenomRep;
    private $email;
    private $telephone;

    //methodes
     public function __construct($id,$nom,$prenom,$email,$tel){
     	$this->idRep = $id;
     	$this->nomRep = $nom;
     	$this->prenomRep = $prenom;
     	$this->email = $email;
     	$this->telephone = $tel;
     }
     public function getIdRep(){
     	return $this->idRep;
     }
     public function getEmail(){
     	return $this->email;
     }

     public function readItem(){
     	$values = array($this->email);
        $sqlrequest = "select nomrep, prenomrep,email, telephone from representant where email = ?;";
        $done = DB::select($sqlrequest, $values);
        return $done;
     }

     public function readThemAll(){
        $sqlrequest = "select * from representant;";
        $done = DB::select($sqlrequest);
        return $done;
     }

     public function create(){
     	$values = array($this->nomRep, $this->prenomRep, $this->telephone, $this->email);
        $sqlrequest = "insert into representant(nomrep, prenomrep, telephone, email) values(?, ?, ?, ?)";
        $done = DB::insert($sqlrequest, $values);
        return $done;
     }
     
     public function delete(){
     	$values = array($this->email);
        $sqlrequest = "delete from representant where representant.email = ?";
        $done = DB::delete($sqlrequest, $values);
     }

     //public function updateIT(){}
     
}