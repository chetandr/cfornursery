<?php

/**
 * This is the model class for table "plants".
 *
 * The followings are the available columns in table 'plants':
 * @property integer $id
 * @property string $botanical_name
 * @property string $common_name
 */
class Plants extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Plants the static model class
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
		return 'plants';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('botanical_name, common_name', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, botanical_name, common_name', 'safe', 'on'=>'search'),
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
			'bookings' => array(self::HAS_MANY, 'Bookings', 'plants'),
			'damageds' => array(self::HAS_MANY, 'Damaged', 'plants_id'),
			'prices' => array(self::HAS_MANY, 'Price', 'plants_id'),
			'sales' => array(self::HAS_MANY, 'Sales', 'plant'),
			'stocks' => array(self::HAS_MANY, 'Stock', 'plant'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'botanical_name' => 'Botanical Name',
			'common_name' => 'Common Name',
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

		$criteria->compare('botanical_name',$this->botanical_name,true);

		$criteria->compare('common_name',$this->common_name,true);

		return new CActiveDataProvider('Plants', array(
			'criteria'=>$criteria,
		));
	}
}