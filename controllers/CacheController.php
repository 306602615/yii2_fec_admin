<?php
namespace fecadmin\controllers;


use Yii;
use fec\helpers\CRequest;
use fecadmin\FecadminbaseController;
/**
 * Site controller
 */
class CacheController extends FecadminbaseController
{
	
   
	# ˢ�»���
    public function actionIndex()
    {
		if(CRequest::param("method") == 'reflush'){
			$this->getBlock()->reflush();
		}
		$data = $this->getBlock()->getLastData();
		return $this->render($this->action->id,$data);
	}
	
	
	
	
}








