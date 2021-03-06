<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $userid
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $lastloginip
 * @property integer $lastlogintime
 * @property string $realname
 */
class User extends CActiveRecord
{
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
			array('username', 'required'),
			array('password', 'required', 'on'=>'insert'),
			array('lastlogintime', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>16),
			array('email, realname', 'length', 'max'=>45),
			array('lastloginip', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userid, username, password, email, lastloginip, lastlogintime, realname', 'safe', 'on'=>'search'),
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
			'article' => array(self::HAS_MANY, 'Article', 'userid')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userid' => '用户ID',
			'username' => '用户名',
			'password' => '密码',
			'email' => '邮箱地址',
			'lastloginip' => '上次登陆IP',
			'lastlogintime' => '上次登陆时间',
			'realname' => '真实姓名',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('lastloginip',$this->lastloginip,true);
		$criteria->compare('lastlogintime',$this->lastlogintime);
		$criteria->compare('realname',$this->realname,true);

		$dataProvider = new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));

		$data = $dataProvider->getData();
		foreach ($data as $key => $value) {
			$value->lastlogintime = date('Y-m-d h:i', $value->lastlogintime);
		}
		$dataProvider->setData($data);	
			
		return $dataProvider;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * 密码加密
	 * @param  string $passwd 
	 * @return string         
	 */
	public function encrypt($passwd)
	{
		return md5($passwd);
	}

	public function beforeSave()
	{
		if (!$this->isNewRecord) {
			$old = self::model()->findByPk($this->userid);

			if ($this->password == '') {
				$this->password = $old->password;
			}
			if ($this->password !== $old->password) {
				$this->password = $this->encrypt($this->password);
			}
		} else {
			$this->password = $this->encrypt($this->password);
		}
		return true;
	}

}
