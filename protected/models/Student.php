<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $id
 * @property string $studentname
 * @property integer $collegeId
 * @property integer $courseId
 * @property integer $createdBy
 * @property string $createdAt
 * @property integer $updatedBy
 * @property string $modifiedAt
 * @property string $status
 */
class Student extends CActiveRecord
{
	public $courseSearch;
	public $instituteSearch;
	public $event;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		return 'student';
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
			array('studentname, collegeId', 'required'),
			array('collegeId, courseId, createdBy, updatedBy', 'numerical', 'integerOnly'=>true),
			array('studentname', 'length', 'max'=>200),
			array('status', 'length', 'max'=>1),
			array('createdAt, modifiedAt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, studentname, collegeId, courseId, createdBy, createdAt, updatedBy, modifiedAt, status, courseSearch, instituteSearch', 'safe', 'on'=>'search'),
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
			'instituteRel'=>array(self::BELONGS_TO, 'Institute', 'collegeId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'studentname' => 'Studentname',
			'collegeId' => 'Institute',
			'courseId' => 'Course',
			'createdBy' => 'Created By',
			'createdAt' => 'Created At',
			'updatedBy' => 'Updated By',
			'modifiedAt' => 'Modified At',
			'status' => 'Status',
			'courseSearch' =>"Course",			
			'instituteSearch' => 'Institute',
			'event' => 'Event',
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

		$criteria->with = array('courseRel','instituteRel');
		//$criteria->with = array('instituteRel');

		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.studentname',$this->studentname,true);
		$criteria->compare('t.collegeId',$this->collegeId);
		$criteria->compare('t.courseId',$this->courseId);
		$criteria->compare('t.createdBy',$this->createdBy);
		$criteria->compare('t.createdAt',$this->createdAt,true);
		$criteria->compare('t.updatedBy',$this->updatedBy);
		$criteria->compare('t.modifiedAt',$this->modifiedAt,true);
		$criteria->compare('t.status',$this->status,true);

		$criteria->compare('courseRel.coursename',$this->courseSearch,true);
		$criteria->compare('instituteRel.institutename',$this->instituteSearch,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'attributes'=>array(
					'id'=>array(
						'asc'=>'t.id',
						'desc'=>'t.id desc',
					),
					'studentname'=>array(
						'asc'=>'t.studentname',
						'desc'=>'t.studentname desc',
					),
					'courseSearch'=>array(
						'asc'=>'courseRel.coursename',
						'desc'=>'courseRel.coursename desc',
					),
					'instituteSearch'=>array(
						'asc'=>'instituteRel.institutename',
						'desc'=>'instituteRel.institutename desc',
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