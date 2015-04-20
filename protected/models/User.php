<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $displayname
 * @property string $image
 * @property integer $createdBy
 * @property string $createdAt
 * @property integer $updatedBy
 * @property string $modifiedAt
 * @property string $status
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, displayname', 'required'),
			array('createdBy, updatedBy', 'numerical', 'integerOnly'=>true),
			array('username, password, displayname, image', 'length', 'max'=>255),
			array('status', 'length', 'max'=>1),
			array('password', 'passwordStrength'),
			array('password', 'required', 'on'=>'insert'),
			//array('createdAt, modifiedAt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, displayname, image, createdBy, createdAt, updatedBy, modifiedAt, status', 'safe', 'on'=>'search'),
		);
	}

	public function passwordStrength($attribute,$params){
		if(!empty($this->password)){
			if(strlen($this->password) > 5){
				if(preg_match( '~[A-Z]~', $this->password)){
					if(preg_match( '~\d~', $this->password)){

					}else{
						$this->addError('password', "Password must contains 1 number");
					}
				}else{
					if(preg_match( '~\d~', $this->password)){
						$this->addError('password', "Password must contains 1 uppercase");
					}else {
						$this->addError('password', "Password must contains 1 uppercase and 1 number");
					}
				}
			}else{
				$this->addError('password', "Password too short! (Minimum 6 characters + 1 uppercase + 1 number)");
			}
		}
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'displayname' => 'Displayname',
			'image' => 'Image',
			'createdBy' => 'Created By',
			'createdAt' => 'Created At',
			'updatedBy' => 'Updated By',
			'modifiedAt' => 'Modified At',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('displayname',$this->displayname,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('createdBy',$this->createdBy);
		$criteria->compare('createdAt',$this->createdAt,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('modifiedAt',$this->modifiedAt,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
     public function beforeSave()
     {
        if($this->isNewRecord){
            $this->createdBy = Yii::app()->user->id; //option by default
            $this->createdAt = new CDbExpression('NOW()');
        }else{
            $this->updatedBy=Yii::app()->user->id; //option by default
            $this->modifiedAt = new CDbExpression('NOW()');
        }

		unset($this -> password);
        if (isset($_POST['User']['password']) && trim($_POST['User']['password']) != "") {
             $this -> password = md5($_POST['User']['password']);
        }

        return parent::beforeSave();
     }
}