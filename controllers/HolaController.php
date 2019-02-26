<?php 

class HolaController extends SiteController
{
	public function actionIndex()
	{
		$Facebook="SigridVeraGomeez";
		$this->render("index.php",array("$Facebook"=>$Facebook));
		}
 }

