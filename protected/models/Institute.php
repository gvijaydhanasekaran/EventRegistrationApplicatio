<?php

/**
 * This is the model class for table "institute".
 *
 * The followings are the available columns in table 'institute':
 * @property integer $id
 * @property string $institutename
 * @property string $instituteplace
 * @property string $incharge
 * @property string $contactno
 * @property integer $createdBy
 * @property string $createdAt
 * @property integer $updatedBy
 * @property string $modifiedAt
 * @property string $status
 */
class Institute extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Institute the static model class
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
		return 'institute';
	}

	public function defaultScope()
    {
        $alias = $this->getTableAlias(false,false).".";
        return array(
            'condition'=>$alias.'status !="D"',
        );
    }
    

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institutename', 'required'),
			array('createdBy, updatedBy', 'numerical', 'integerOnly'=>true),
			array('institutename, instituteplace, incharge', 'length', 'max'=>200),
			array('contactno', 'length', 'max'=>15),
			array('status', 'length', 'max'=>1),
			array('createdAt, modifiedAt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, institutename, instituteplace, incharge, contactno, createdBy, createdAt, updatedBy, modifiedAt, status', 'safe', 'on'=>'search'),
		);
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
			'institutename' => 'Institute Name',
			'instituteplace' => 'Institute Place',
			'incharge' => 'Incharge Name',
			'contactno' => 'Contactno',
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
		$criteria->compare('institutename',$this->institutename,true);
		$criteria->compare('instituteplace',$this->instituteplace,true);
		$criteria->compare('incharge',$this->incharge,true);
		$criteria->compare('contactno',$this->contactno,true);
		$criteria->compare('createdBy',$this->createdBy);
		$criteria->compare('createdAt',$this->createdAt,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('modifiedAt',$this->modifiedAt,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function beforeSave()
    {
        if($this->isNewRecord){
            $this->createdBy = Yii::app()->user->id; //option by default
            $this->createdAt = new CDbExpression('NOW()');
        }else{
            $this->updatedBy=Yii::app()->user->id; //option by default
            $this->modifiedAt = new CDbExpression('NOW()');
        }

		return parent::beforeSave();
	}
	public static function getInstituteList()
    {
        $arr = Yii::app()->db->createCommand()
		                                 ->Select('id, institutename')
										 ->from('institute')
										 ->where('status=:status', array(':status'=>'A'))
										 ->queryAll();
        array_unshift($arr, "------");        
        // print_r($arr);
        // exit();
        
        return $arr;
    }	
}