<?php
namespace fecadmin;
use Yii;
class Module extends \fec\AdminModule
{
   #Yii::$app   Module
   
   
    public function init()
    {
		# ���´������ָ��
        $this->controllerNamespace 	= 	__NAMESPACE__ . '\\controllers';
		$this->_currentDir			= 	__DIR__ ;
		$this->_currentNameSpace	=   __NAMESPACE__;
		
		# ָ��Ĭ�ϵ�man�ļ�
		$this->layout = "main_ajax.php";
		parent::init();  
		
    }
}
