<?php
namespace fecadmin\controllers;
use Yii;
use yii\web\Controller;
/**
 * fec ����controller
 */
class CaptchaController extends Controller
{
	
	
	public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'index' => [
                'class' => 'fec\helpers\CCaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
				'padding' => 0,//���
				'height'=>40,//�߶�
				'width' => 80,  //���  
				'offset'=>4,
				//'foreColor'=>0xffffff,     //������ɫ
            ],
        ];
    }
	
	/*
				'class' => 'fec\helpers\CCaptchaAction',
                                    'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                                    'backColor'=>0x000000,//������ɫ
                                    'maxLength' => 6, //�����ʾ����
                                    'minLength' => 5,//������ʾ����
                                    'padding' => 5,//���
                                    'height'=>40,//�߶�
                                    'width' => 130,  //���  
                                    'foreColor'=>0xffffff,     //������ɫ
                                    'offset'=>4,        //�����ַ�ƫ���� ��Ч��
                                    //'controller'=>'login',        //ӵ�����������controller
	*/		
	
}
