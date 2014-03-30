<?php

/**
 * This is the model class for table "quiz".
 *
 * The followings are the available columns in table 'quiz':
 * @property integer $quizid
 * @property string $quiz
 * @property string $quiz_select
 * @property integer $quiz_select_number
 * @property string $quiz_answer
 * @property string $quiz_describe
 * @property integer $createtime
 * @property integer $user_userid
 * @property integer $quiztype_id
 */
class Quiz extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quiz';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_userid, quiztype_id', 'required'),
			array('quiz_select_number, createtime, user_userid, quiztype_id', 'numerical', 'integerOnly'=>true),
			array('quiz, quiz_answer, quiz_select, quiz_describe', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('quizid, quiz, quiz_select, quiz_select_number, quiz_answer, quiz_describe, createtime, user_userid, quiztype_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_userid'),
			'type' => array(self::BELONGS_TO, 'Quiztype', 'quiztype_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'quizid' => 'ID',
			'quiz' => '题干',
			'quiz_select' => '备选项',
			'quiz_select_number' => '备选项数量',
			'quiz_answer' => '参考答案',
			'quiz_describe' => '题目解析',
			'createtime' => '录入时间',
			'user_userid' => '录入人',
			'quiztype_id' => '题目类型',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('quizid',$this->quizid);
		$criteria->compare('quiz',$this->quiz,true);
		$criteria->compare('quiz_select',$this->quiz_select,true);
		$criteria->compare('quiz_select_number',$this->quiz_select_number);
		$criteria->compare('quiz_answer',$this->quiz_answer,true);
		$criteria->compare('quiz_describe',$this->quiz_describe,true);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('user_userid',$this->user_userid);
		$criteria->compare('quiztype_id',$this->quiztype_id);

		$criteria->with = array(
			'user' => array('select' => 'username'),
			'type' => array('select' => 'quiz_type'),
		);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Quiz the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
