<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property integer $id
 * @property integer $courseId
 * @property string $eventname
 * @property string $eventtime
 * @property integer $amount
 * @property integer $prize1
 * @property integer $prize2
 * @property integer $prize3
 * @property integer $createdBy
 * @property string $createdAt
 * @property integer $updatedBy
 * @property string $modifiedAt
 * @property string $status
 */
class Event extends CActiveRecord
{
	public $courseSearch;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Event the static model class
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
		return 'event';
	}

    public function defaultScope()
    {
        $alias = $this->getTableAlias(false,false).".";
        return array(
            'condition'=>$alias.'status != "D"',
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
			array('courseId, eventname', 'required'),
			array('courseId, amount, prize1, prize2, prize3, createdBy, updatedBy', 'numerical', 'integerOnly'=>true),
			array('eventname', 'length', 'max'=>200),
			array('status', 'length', 'max'=>1),
			array('eventtime, createdAt, modifiedAt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, courseId, eventname, eventtime, amount, prize1, prize2, prize3, createdBy, createdAt, updatedBy, modifiedAt, status, courseSearch', 'safe', 'on'=>'search'),
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
			'courseRel'=>array(self::BELONGS_TO, 'Course', 'courseId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'courseId' => 'Course',
			'eventname' => 'Eventname',
			'eventtime' => 'Eventtime',
			'amount' => 'Amount',
			'prize1' => 'Prize1',
			'prize2' => 'Prize2',
			'prize3' => 'Prize3',
			'createdBy' => 'Created By',
			'createdAt' => 'Created At',
			'updatedBy' => 'Updated By',
			'modifiedAt' => 'Modified At',
			'status' => 'Status',
			'courseSearch' =>"Course",
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

		$criteria->with = array('courseRel');

		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.courseId',$this->courseId);
		$criteria->compare('t.eventname',$this->eventname,true);
		$criteria->compare('t.eventtime',$this->eventtime,true);
		$criteria->compare('t.amount',$this->amount);
		$criteria->compare('t.prize1',$this->prize1);
		$criteria->compare('t.prize2',$this->prize2);
		$criteria->compare('t.prize3',$this->prize3);
		$criteria->compare('t.createdBy',$this->createdBy);
		$criteria->compare('t.createdAt',$this->createdAt,true);
		$criteria->compare('t.updatedBy',$this->updatedBy);
		$criteria->compare('t.modifiedAt',$this->modifiedAt,true);
		$criteria->compare('t.status',$this->status,true);

		$criteria->compare('courseRel.coursename',$this->courseSearch,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'attributes'=>array(
					'id'=>array(
						'asc'=>'t.id',
						'desc'=>'t.id desc',
					),
					'eventname'=>array(
						'asc'=>'t.eventname',
						'desc'=>'t.eventname desc',
					),
					'courseSearch'=>array(
						'asc'=>'courseRel.coursename',
						'desc'=>'courseRel.coursename desc',
					),
					'status'=>array(
						'asc'=>'t.status',
						'desc'=>'t.status desc',
					),
				)
			)			
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

	
}