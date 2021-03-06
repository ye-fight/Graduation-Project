<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $id
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property integer $createtime
 * @property integer $updatetime
 * @property integer $status
 * @property string $content
 * @property integer $user_userid
 * @property integer $category_catid
 */
class Article extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, user_userid, category_catid, content', 'required'),
			array('createtime, updatetime, status, user_userid, category_catid', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>80),
			array('keywords', 'length', 'max'=>40),
			array('description, content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, createtime, updatetime, status, user_userid, category_catid', 'safe', 'on'=>'search'),
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
			'author' => array(self::BELONGS_TO, 'User', 'user_userid'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_catid'),
			'comment' => array(self::HAS_MANY, 'Comment', 'article_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => '标题',
			'keywords' => '关键字',
			'description' => '描述',
			'createtime' => '创建时间',
			'updatetime' => '更新时间',
			'status' => '是否显示',
			'content' => '内容',
			'user_userid' => '录入人',
			'category_catid' => '栏目',
			'thumb' => '图片'
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('updatetime',$this->updatetime);
		$criteria->compare('status',$this->status);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('user_userid',$this->user_userid);
		$criteria->compare('category_catid',$this->category_catid);

		$criteria->with = array(
			'author' => array('select' => 'username'),
			'category' => array('select' => 'catname'),
		);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave()
	{
		if ($this->isNewRecord || !$this->createtime) {
			$this->createtime = $this->updatetime = time();
		} else {
			$this->updatetime = time();
		}
		return TRUE;
	}

	static public function hots($limit = 3)
	{
		return self::model()->findAll(array(
			'select' => 'title, id',
			'order' => 'hits DESC',
			'limit' => $limit
		));
	}
}
