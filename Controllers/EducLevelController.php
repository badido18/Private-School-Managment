<?php

namespace Controllers ;

use Classes\Classe;
use Models\ArticlesModel;
use Models\CarrouselModel;

class EducLevelController extends Controller{

	public $currentPage = 1 ;
	public $level ;
	public $levelName ;
	public $link ;

	public function loadPages($perPage=4){
		return (new ArticlesModel())->getPages('level'.$this->level,$perPage);
	}

	public function loadArticles($perPage=4){
		return (new ArticlesModel())->getArticles('level'.$this->level,$this->currentPage,$perPage);
	}

	public function loadDiapo(){
		return (new CarrouselModel())->getImageUrls();
	}

	public function render($params){
		if (isset($params['level']))
		{
			$this->level = $params['level'] ;
			$this->levelName = Classe::getLevelName($params['level']) ;
			$this->link = "/education/".$this->level."/articles" ;
			if (isset($params['page']))
				$this->currentPage = $params['page'] ;
		}
		else{
			$this->NotFound();
		}

		$this->view('EducLevelView');
	}

}