<?php
namespace fecadmin\controllers;


use Yii;
use yii\helpers\Url;
use fecadmin\FecadminbaseController;
/**
 * Site controller
 */
class RoleController extends FecadminbaseController
{
	
   
	# Ȩ��
    public function actionManager()
    {
		$data = $this->getBlock()->getLastData();
		return $this->render($this->action->id,$data);
	}
	
	# Ȩ��
    public function actionManageredit()
    {
		$data = $this->getBlock()->getLastData();
		return $this->render($this->action->id,$data);
	}
	
	# Ȩ��
    public function actionManagereditsave()
    {
		$this->getBlock("manageredit")->save();
		
	}
	
	# Ȩ��
    public function actionManagerdelete()
    {
		$this->getBlock("manageredit")->delete();
		
	}
	

















	
	
}








