<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bois extends Model{

	public $timestamps = false; #nu vreau sa-mi apara niste coloane in aplicatie
    private $idBois;
    private $nomBois;
    private $volumBois;
    private $diametreBois;
    private $prixunite;
    private $typeBois;

    public function __construct($id, $nomm, $vol, $diametre, $prix, $type){
            $this->idBois = $id;
            $this->nomBois = $nomm;
            $this->volumBois = $vol;
            $this->diametreBois = $diametre;
            $this->prixunite = $prix;
            $this->typeBois = $type;
    }

    public function getNomBois(){
        return $this->nomBois;
    }
    public function getIdBois(){
        return $this->idBois;
    }


    public static function read1(){
        $sqlrequest = "select idbois, nombois, volum, diametre, prixunite from bois where bois.idtypebois = ?;";
    	$bois = DB::select($sqlrequest, [1]);
    	return $bois;
    }
    public static function read2(){
        $sqlrequest = "select idbois,nombois, volum, diametre, prixunite from bois where bois.idtypebois = ?;";
        $bois = DB::select($sqlrequest,[2]);
        return $bois;
    }
    public function readItem(){
        $sqlrequest = "select idbois, nombois, volum, diametre, prixunite from bois where idbois = ?;";
        $values = array($this->idBois);
        $item = DB::select($sqlrequest, $values);
        return $item;

    }
    public function create(){
        $values = array($this->nomBois, $this->volumBois, $this->diametreBois, $this->prixunite, $this->typeBois);
        $sqlrequest = "insert into bois (select ROW_NUMBER() OVER() + (select max(idbois) FROM bois), ?, ?, ?, ?,?)";
        $done = DB::insert($sqlrequest, $values);
    }
    
    public function delete(){
        $values = array($this->idBois);
        $sqlrequest = "delete from bois where bois.idbois = ?";
        $done = DB::delete($sqlrequest, $values);
    }
    
    public function updateIt(){
        $values = array($this->nomBois, $this->volumBois, $this->diametreBois, $this->prixunite, $this->idBois);
        //dd($values);
        $sqlrequest = "update bois set nombois = ?, volum = ?, diametre = ?,prixunite = ? where idbois = ?;";
        $done = DB::update($sqlrequest, $values);
        return $done;
    }
    

    
}
