<?php
namespace fecadmin;
use Yii;
class Module extends \yii\base\Module
{
    public $controllerNamespace ;
	public $_currentDir ;
    public function init()
    {
        $this->controllerNamespace 	= 	__NAMESPACE__ . '\controllers';
		$this->_currentDir			= 	__DIR__ ;
		
		# layout���ã����ĳ��ģ��Ҫʹ�õ�����layout
		# ����ģ��ר����layout �ļ�  appblog/code/Blog/Theme/default/ģ������/layouts/main.php
		# ���������layout Ĭ��ʹ��  applog/views/layouts/main.php
		//$this->layout = $this->_currentDir."/views/layouts/main.php";
		//$this->setViewPath($this->_currentDir); 
		//$this->layout = $this->_currentDir."/views/layouts/main.php";
		$this->layout = "main.php";
		parent::init();  
		
		
    }
}
