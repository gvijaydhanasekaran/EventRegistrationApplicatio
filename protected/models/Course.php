<?php

/**
 * This is the model class for table "course".
 *
 * The followings are the available columns in table 'course':
 * @property integer $id
 * @property string $coursename
 * @property string $description
 * @property integer $createdBy
 * @property string $createdAt
 * @property integer $updatedBy
 * @property string $modifiedAt
 * @property string $status
 */
class Course extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Course the static model class
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
		return 'course';
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
			array('coursename', 'required'),
			array('createdBy, updatedBy', 'numerical', 'integerOnly'=>true),
			array('coursename', 'length', 'max'=>255),
			array('status', 'length', 'max'=>1),
			array('description, createdAt, modifiedAt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, coursename, description, createdBy, createdAt, updatedBy, modifiedAt, status', 'safe', 'on'=>'search'),
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
			'coursename' => 'Coursename',
			'description' => 'Description',
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
		$criteria->compare('coursename',$this->coursename,true);
		$criteria->compare('description',$this->description,true);
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
	public static function getCourseList()
    {
        $arr = Yii::app()->db->createCommand()
		                                 ->Select('id, coursename')
										 ->from('course')
										 ->where('status=:status', array(':status'=>'A'))
										 ->queryAll();
        array_unshift($arr, "------");        
        // print_r($arr);
        // exit();
        
        return $arr;
    }
	
}