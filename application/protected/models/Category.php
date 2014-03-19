<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $catid
 * @property string $catname
 * @property string $description
 * @property integer $items
 * @property integer $is_single
 */
class Category extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('items, is_single', 'numerical', 'integerOnly'=>true),
			array('catname', 'length', 'max'=>30),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('catid, catname, description, items, is_single', 'safe', 'on'=>'search'),
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
			'catid' => '栏目ID',
			'catname' => '栏目名',
			'description' => '栏目描述',
			'items' => '文章数',
			'is_single' => '单页面'
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

		$criteria->compare('catid',$this->catid);
		$criteria->compare('catname',$this->catname,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('items',$this->items);
		$criteria->compare('is_single',$this->is_single);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getCategory($all = FALSE)
	{
		if ($all) {
			$model = $this->findAll();
		} else {
			$model = $this->findAll('is_single=:is_single', array(':is_single'=>0));
		}
		

		$data = CHtml::listData($model, 'catid', 'catname');

		return $data;
	}
}
