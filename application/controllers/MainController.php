<?php
namespace application\controllers;

use application\lib\Db;
use application\core\Controller;

class MainController extends Controller
{
	public function indexAction()
	{
		$db=new Db;
		$form='3; DELETE FROM goods1';
		$params=
		[
		'id'=>$form
		];
		$data=$db->column("SELECT name FROM goods1 WHERE id= :id",$params);
		debug($data);
		$this->view->render('Главная страница');
	}
}

