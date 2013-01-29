<?php

/**
 * This is the model class for table "sales".
 *
 * The followings are the available columns in table 'sales':
 * @property integer $id
 * @property integer $plant
 * @property string $qty
 * @property double $unitprice
 * @property string $sales_date
 */
class Sales extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Sales the static model class
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
		return 'sales';
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
			array('unitprice', 'numerical'),
			array('qty', 'length', 'max'=>45),
			array('sales_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, plant, qty, unitprice, sales_date', 'safe', 'on'=>'search'),
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
			'plant_details' => array(self::BELONGS_TO, 'Plants', 'plant'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'plant' => 'Plant',
			'qty' => 'Qty',
			'unitprice' => 'Unitprice',
			'sales_date' => 'Sales Date',
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

		$criteria->compare('plant',$this->plant);

		$criteria->compare('qty',$this->qty,true);

		$criteria->compare('unitprice',$this->unitprice);

		$criteria->compare('sales_date',$this->sales_date,true);

		return new CActiveDataProvider('Sales', array(
			'criteria'=>$criteria,
		));
	}
}