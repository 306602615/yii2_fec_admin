<?php
namespace fecadmin\helpers;
use Yii; 
use fecadmin\models\AdminUserRole;
use fecadmin\models\AdminRole;

#use fecadmin\helpers\CUser::ifCurrentUserIsSpecificRole($role_name);
class CUser 
{
	# �жϵ�ǰ���û��Ƿ����ĳ��Ȩ���顣
	public static function ifCurrentUserIsSpecificRole($role_name){
		if(!$role_name)
			return false;
		$user = Yii::$app->user->identity;
		$user_id = $user['id'];
		$roles = AdminUserRole::find()->asArray()->where([
			'user_id' => $user_id
		])->all();
		$role_ids = [];
		if(!empty($roles)){
			foreach($roles as $role){
				$role_ids[] = $role['role_id'];
			}
		}
		$user_role_names = [];
		$user_roles = AdminRole::find()->asArray()->where([
			'in','role_id',$role_ids
		])->all();
		if(!empty($user_roles)){
			foreach($user_roles as $one){
				$user_role_names[] = $one['role_name'];
			}
		}
		if(in_array($role_name,$user_role_names)){
			return true;
		}
		return false;
	}
	
}