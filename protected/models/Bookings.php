<?php

/**
 * This is the model class for table "bookings".
 *
 * The followings are the available columns in table 'bookings':
 * @property integer $id
 * @property integer $contact
 * @property integer $plants
 * @property integer $qty
 * @property string $pickup_date
 * @property string $booked_date
 * @property string $buying_price
 */
class Bookings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Bookings the static model class
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
		return 'bookings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact, plants', 'required'),
			array('contact, plants, qty', 'numerical', 'integerOnly'=>true),
			array('pickup_date, booked_date, buying_price', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, contact, plants, qty, pickup_date, booked_date, buying_price', 'safe', 'on'=>'search'),
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
			'contact0' => array(self::BELONGS_TO, 'Contact', 'contact'),
			'plants0' => array(self::BELONGS_TO, 'Plants', 'plants'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'contact' => 'Contact',
			'plants' => 'Plants',
			'qty' => 'Qty',
			'pickup_date' => 'Pickup Date',
			'booked_date' => 'Booked Date',
			'buying_price' => 'Buying Price',
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

		$criteria->compare('contact',$this->contact);

		$criteria->compare('plants',$this->plants);

		$criteria->compare('qty',$this->qty);

		$criteria->compare('pickup_date',$this->pickup_date,true);

		$criteria->compare('booked_date',$this->booked_date,true);

		$criteria->compare('buying_price',$this->buying_price,true);

		return new CActiveDataProvider('Bookings', array(
			'criteria'=>$criteria,
		));
	}
}