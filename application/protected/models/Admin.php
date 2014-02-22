<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $userid
 * @property string $username
 * @property string $password
 * @property string $encrypt
 * @property string $lastloginip
 * @property integer $lastlogintime
 * @property string $email
 * @property string $realname
 */
class Admin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('realname', 'required'),
			array('lastlogintime', 'numerical', 'integerOnly'=>true),
			array('username, realname', 'length', 'max'=>20),
			array('password', 'length', 'max'=>32),
			array('encrypt', 'length', 'max'=>6),
			array('lastloginip', 'length', 'max'=>15),
			array('email', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userid, username, password, encrypt, lastloginip, lastlogintime, email, realname', 'safe', 'on'=>'search'),
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
			'userid' => 'Userid',
			'username' => 'Username',
			'password' => 'Password',
			'encrypt' => 'Encrypt',
			'lastloginip' => 'Lastloginip',
			'lastlogintime' => 'Lastlogintime',
			'email' => 'Email',
			'realname' => 'Realname',
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

		$criteria->compare('userid',$this->userid);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('encrypt',$this->encrypt,true);
		$criteria->compare('lastloginip',$this->lastloginip,true);
		$criteria->compare('lastlogintime',$this->lastlogintime);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('realname',$this->realname,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
