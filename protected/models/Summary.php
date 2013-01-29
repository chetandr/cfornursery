<?php

/**
 * This is the model class for table "summary".
 *
 * The followings are the available columns in table 'summary':
 * @property integer $plant
 * @property string $botanical_name
 * @property string $common_name
 * @property double $damaged
 * @property double $sold
 * @property string $stock
 * @property double $total
 * @property double $price
 */
class Summary extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Summary the static model class
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
		return 'summary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('plant', 'numerical', 'integerOnly'=>true),
			array('damaged, sold, total, price', 'numerical'),
			array('botanical_name, common_name', 'length', 'max'=>256),
			array('stock', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('plant, botanical_name, common_name, damaged, sold, stock, total, price', 'safe', 'on'=>'search'),
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
			'plant' => 'Plant',
			'botanical_name' => 'Botanical Name',
			'common_name' => 'Common Name',
			'damaged' => 'Damaged',
			'sold' => 'Sold',
			'stock' => 'Stock',
			'total' => 'Total',
			'price' => 'Price',
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

		$criteria->compare('plant',$this->plant);

		$criteria->compare('botanical_name',$this->botanical_name,true);

		$criteria->compare('common_name',$this->common_name,true);

		$criteria->compare('damaged',$this->damaged);

		$criteria->compare('sold',$this->sold);

		$criteria->compare('stock',$this->stock,true);

		$criteria->compare('total',$this->total);

		$criteria->compare('price',$this->price);

		return new CActiveDataProvider('Summary', array(
			'criteria'=>$criteria,
		));
	}
}