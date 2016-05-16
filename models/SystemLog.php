<?php
namespace fecadmin\models;

use Yii;
use fec\helpers\CDate;
use yii\db\ActiveRecord;
/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class SystemLog extends ActiveRecord
{
    
    /**
     * @inheritdoc
     */
	# ����table
    public static function tableName()
    {
        return 'system_log';
    }
	
	 /**
     * @inheritdoc
     */
	# ���� status  Ĭ��  ���Լ�ȡֵ������
    public function rules()
    {
        return [
           
		];
    }
	
	
	
	
	public function beforeSave($insert)  
    {  
          
        if (parent::beforeSave($insert)) {  
           
            if($insert == self::EVENT_BEFORE_INSERT){  
                $user = Yii::$app->user->identity;
				$account = $user['username'];
				$this->created_person = $account;
				$this->created_at = CDate::getCurrentDateTime();
			}else{  
                  
            }  
            $this->updated_at = CDate::getCurrentDateTime(); 
            
            return true;  
        } else {  
            return false;  
          
        }  
    } 
	
	

   
}
