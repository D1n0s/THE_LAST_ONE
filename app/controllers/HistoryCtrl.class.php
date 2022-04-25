<?php

namespace app\controllers;

use app\forms\HistoryForm;
use app\transfer\HisResult;
use PDOException;

class HistoryCtrl {

	private $form; //dane formularza wyszukiwania
	private $records; //rekordy pobrane z bazy danych

	public function __construct(){
		//stworzenie potrzebnych obiektów
	}
		

	public function action_history(){
		
	
		try{


			$this->records = getDB()->select("kredyt", [
					"id_kredyt" ,
					"ilosc_rat",
					"kwota" ,
					"opr",
					"result_kwota",
					"result_prowizja",
					"result_rata",
				]);
			
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
		}	
	
		
		// 4. wygeneruj widok
		getSmarty()->assign('kredyt',$this->records);  // lista rekordów z bazy danych
		getSmarty()->display('HistoryList.tpl');
	}
	
}
