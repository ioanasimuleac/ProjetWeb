<?php

//FACI UPDATE CU POST
//TRIMITI ID-UL ELEMENTULUI PE CARE VREI SA-L MODIFICI
//SI IN CONTROLLER II FAC UPDATE WHERE CELE 2 ID SUNT IDENTICE
//DAR INTREBARE E CUM VA ARATA EFECTIV BLADE-UL PT ACEASTA CHESTIE

namespace App\Http\Controllers\Bois;
use Illuminate\Http\Request;
use App\Bois;
use Illuminate\Support\Facades\Auth;

class BoisController{
	
	public function read(Request $r){
		if(Auth::check()){
			$foc = Bois::read1();
			$munca = Bois::read2();
			return view('Bois\listBois', ['foc' => $foc, 'munca' =>$munca]);
		}else{return redirect()->route('login');}

	}
	public function readVisitor(Request $r){
		$foc = Bois::read1();
		$munca = Bois::read2();
		return view('Bois\listBoisVisitor', ['foc' => $foc, 'munca' =>$munca]);
	}

	public function create(){
		if(Auth::check()){
			return view('Bois\createBois');
		}else{return redirect()->route('login');}
	}
	public function created(Request $r){
		if(Auth::check()){
			if(is_null($r->get('typeBois')) == false && is_null($r->get('nomBois')) == false && is_null($r->get('volumBois')) ==false && is_null($r->get('diametreBois')) ==false && is_null($r->get('prixBois')) == false) {
	   			$nomBois =  $r->get('nomBois');
	    		$volumBois =  htmlspecialchars($r->get('volumBois'));
	    		$diametreBois =  htmlspecialchars($r->get('diametreBois'));
	    		$prixunite =  htmlspecialchars($r->get('prixBois'));
	    		if($r->get('typeBois') == 'bois de travail'){
					$typeBois = 2;
				}else{
					$typeBois = 1;
				}
				$offre = new Bois(NULL, $nomBois, $volumBois, $diametreBois, $prixunite, $typeBois);
				$offre->create();
				return view('Bois\createdBois');
			}else{
				var_dump('EROARE');
			}
		}else{return redirect()->route('login');}
	}

	public function delete($id){
		if(Auth::check()){
			if(is_null($id) == false){
				$idbois = htmlspecialchars($id);
				$sup = new Bois($idbois, NULL, NULL, NULL,NULL,NULL);
				$sup->delete();
				return redirect()->route('read');
			} else{
				var_dump("EROARE!");
			} 
		}else{return redirect()->route('login');}
	}

	public function update($id){
		if(Auth::check()){
			if(is_null($id) == false){
				$up = new Bois($id, NULL, NULL, NULL,NULL,NULL);
				$element = $up->readItem();
				return view('Bois\updateBois',['item'=> $element]);
			} else{var_dump("eroare!");}
		}else{return redirect()->route('login');}
	}
	
	public function updated(Request $r){
		if(Auth::check()){
			if(is_null($r->get('nomBois')) == false && is_null($r->get('volumBois')) ==false && is_null($r->get('diametreBois')) ==false &&
			 is_null($r->get('prixBois')) == false && is_null($r->get('idbois')) == false) {
			 	$idBois =  htmlspecialchars($r->get('idbois'));
	   			$nomBois =  $r->get('nomBois');
	    		$volumBois =  htmlspecialchars($r->get('volumBois'));
	    		$diametreBois =  htmlspecialchars($r->get('diametreBois'));
	    		$prixunite =  htmlspecialchars($r->get('prixBois'));
				$offre = new Bois($idBois, $nomBois, $volumBois, $diametreBois, $prixunite, NULL);
				var_dump($offre->getIdBois());
				var_dump($offre->getNomBois());
				$rez = $offre->updateIt();
				return redirect()->route('read');
			}else{
				var_dump('EROARE');
			}
		}else{return redirect()->route('login');}
	}

}

?>