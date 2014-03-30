<?php

/**
 * This is the model class for table "question".
 *
 * The followings are the available columns in table 'question':
 * @property integer $questionid
 * @property string $title
 * @property string $content
 * @property integer $createtime
 * @property integer $answertime
 * @property string $answer
 * @property integer $status
 * @property string $questioner_name
 * @property string $questioner_email
 * @property integer $user_userid
 *
 * The followings are the available model relations:
 * @property User $userUser
 */
class Question extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, questioner_name, questioner_email', 'required'),

			// 检查后台回答是否为空
			array('answer', 'required', 'on'=>'update'),
			
			array('questionid, createtime, answertime, status, user_userid', 'numerical', 'integerOnly'=>true),
			array('title, questioner_name', 'length', 'max'=>45),
			array('questioner_email', 'email'),
			array('content, answer', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('questionid, title, content, createtime, answertime, answer, status, questioner_name, questioner_email, user_userid', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'questionid' => 'Questionid',
			'title' => '问题主题',
			'content' => '问题详情',
			'createtime' => '提问日期',
			'answertime' => '回答日期',
			'answer' => '医生答疑',
			'status' => '状态',
			'questioner_name' => '咨询人姓名',
			'questioner_email' => '咨询人邮箱',
			'user_userid' => 'User Userid',
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

		$criteria=new CDbCriteria;

		$criteria->compare('questionid',$this->questionid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('answertime',$this->answertime);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('questioner_name',$this->questioner_name,true);
		$criteria->compare('questioner_email',$this->questioner_email,true);
		$criteria->compare('user_userid',$this->user_userid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Question the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
