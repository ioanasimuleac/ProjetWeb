<?php
//il creez in SUDO user
//si il afisez la user

namespace App\Http\Controllers\Demander;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Demander;
use App\Representant;
use App\Entreprise;

class DemanderController{
	
	public function readAll(){
		if(Auth::check()){
			$demande = new Demander(NULL,NULL,NULL);
			$all = $demande ->readThemAll();
			$detalii = $demande->detaliu();
			//dd($detalii);
			return view('Demander/listDemander', ['demandes' => $all, 'detalii' => $detalii]);
		}else{return route('login');}
	}

	public function create(){
		return view('Demander/create');
	}

	public function created(Request $r){
		//intai ii bag representantul in baza de date
		$nomRep = $r->get('nomRep');
		$prenomRep = $r->get('prenomRep');
		$emailRep = $r->get('emailRep');
		$telephone = $r->get('telephoneRep');
		$newRep = new Representant(NULL,$nomRep, $prenomRep,$emailRep,$telephone);
		$newRep->create();
		$repPourEntreprise = $newRep->getEmail();
		
		//dupa entreprise
		$nomEntre = $r->get('nomEntreprise');
		$ville = $r->get('villeEntreprise');
		$rue = $r->get('rueEntreprise');
		$code = $r->get('codeEntreprise');
		$newEntrepreprise = new Entreprise($nomEntre,$ville, $rue, $code,$repPourEntreprise);
		$ress = $newEntrepreprise->create();
		$nomEntreDemande = $newEntrepreprise->getNomEntreprise();
		//dd($ress);
		//final: demander
		$type = $r->get('typeBois');
		if($type == 'bois de travail' ){
			$idtype = 2;
		}else{
			$idtype = 1;
		}
		$quantite = $r->get('quantite');
		$newDemande = new Demander($nomEntreDemande, $idtype, $quantite);
		$newDemande->create();
		$stuff = array($nomRep,$prenomRep, $emailRep, $telephone,$nomEntre, $rue, $ville,$code,$type , $quantite);
		#dd($stuff);
		return view('Demander/created', ['afisaj'=>$stuff]);

	}

	public function update($id){
		//dd($id);
		$entr = Entreprise::readItem($id);
		$dem = Demander::readItem($id);
		$newentre = new Entreprise($id, NULL, NULL, NULL, NULL);
		$email = $newentre->readEmail();
		$str = $email[0]->emailrepresentant;
		//dd($str);
		$newrep = new Representant(NULL, NULL,NULL, $str, NULL);
		$rep = $newrep->readItem();
		return view('Demander/update', ['entreprise' => $entr, 'representant' =>$rep, 'demander' => $dem]);
	}
	public function updated(Request $r){
		//dd($r);
		//sterg vechea instanta 
		$ceSterg = $r->get('oldValueNomEntreprise');
		$newentre = new Entreprise($ceSterg, NULL, NULL, NULL, NULL);
		$emailRep = $newentre->readEmail(); //pour supprimer le representant
		$str = $emailRep[0]->emailrepresentant;
		$newdemande = new Demander($ceSterg,NULL, NULL);
		$newdemande->delete();
		$newentre->delete();
		$newrep = new Representant(NULL, NULL,NULL, $str, NULL);
		$re = $newrep->delete();
		
		//creez o noua instance ca fiind ceea modificata
		//representant
		$nomRep = $r->get('nomRep');
		$prenomRep = $r->get('prenomRep');
		$emailRep = $r->get('emailRep');
		$telephone = $r->get('telephoneRep');
		$newRep = new Representant(NULL,$nomRep, $prenomRep,$emailRep,$telephone);
		$newRep->create();
		$repPourEntreprise = $newRep->getEmail();
		
		//dupa entreprise
		$nomEntre = $r->get('nomEntreprise');
		$ville = $r->get('villeEntreprise');
		$rue = $r->get('rueEntreprise');
		$code = $r->get('codeEntreprise');
		$newEntrepreprise = new Entreprise($nomEntre,$ville, $rue, $code,$repPourEntreprise);
		$ress = $newEntrepreprise->create();
		$nomEntreDemande = $newEntrepreprise->getNomEntreprise();
		//dd($ress);
		//final: demander
		$type = $r->get('typeBois');
		if($type == 'bois de travail' ){
			$idtype = 2;
		}else{
			$idtype = 1;
		}
		$quantite = $r->get('quantite');
		$newDemande = new Demander($nomEntreDemande, $idtype, $quantite);
		$newDemande->create();
		$stuff = array($nomRep,$prenomRep, $emailRep, $telephone,$nomEntre, $rue, $ville,$code,$type , $quantite);
		
		return view('Demander/updated');
	}

	public function delete($id){
		$newentre = new Entreprise($id, NULL, NULL, NULL, NULL);
		$emailRep = $newentre->readEmail(); //pour supprimer le representant
		$str = $emailRep[0]->emailrepresentant;
		$newrep = new Representant(NULL, NULL,NULL, $str, NULL);
		$newdemande = new Demander($id,NULL, NULL);
		$newdemande->delete();
		$newentre->delete();
		$se = $newrep->delete();
		//dd($se);
		return redirect()->route('readVisitor');
	}
}
?>