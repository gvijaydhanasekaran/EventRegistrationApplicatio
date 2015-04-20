<?php
    class WebUser extends CWebUser
    {
        public function getUserId() {
            $model = User::model()->findByAttributes(array('username'=>Yii::app()->user->id));
            if($model){
                return $model->id;
            }
        }

        public function getUsername() {
            if(Yii::app()->user->getIsGuest()){
                return "xxx";
            }else{
                //$model = User::model()->findByAttributes(array('email'=>Yii::app()->user->id));
                $model = User::model()->findByPk(Yii::app()->user->id);
                if($model){
                    return $model->displayname;
                }
            }
        }

    }
?>
