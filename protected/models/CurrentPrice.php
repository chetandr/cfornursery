<?php

/**
 * This is the model class for table "current_price".
 *
 * The followings are the available columns in table 'current_price':
 * @property double $max(price)
 * @property integer $plant
 */
class CurrentPrice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CurrentPrice the static model class
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
		return 'current_price';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('plant', 'required'),
			array('plant', 'numerical', 'integerOnly'=>true),
			array('max(price)', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('max(price), plant', 'safe', 'on'=>'search'),
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
			'max(price)' => 'Max(price)',
			'plant' => 'Plant',
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

		$criteria->compare('max(price)',$this->max(price));

		$criteria->compare('plant',$this->plant);

		return new CActiveDataProvider('CurrentPrice', array(
			'criteria'=>$criteria,
		));
	}
}