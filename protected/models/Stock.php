<?php

/**
 * This is the model class for table "stock".
 *
 * The followings are the available columns in table 'stock':
 * @property integer $id
 * @property integer $plant
 * @property string $in_date
 * @property integer $qty
 */
class Stock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Stock the static model class
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
		return 'stock';
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
			array('plant, qty', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('in_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, plant, in_date, qty', 'safe', 'on'=>'search'),
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
			'in_date' => 'In Date',
			'qty' => 'Qty',
			'price' => 'Price'
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
		$criteria->compare('plant_details.common_name',$this->plant);
		$criteria->compare('in_date',$this->in_date,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('qty',$this->qty);
		$criteria->with = array('plant_details');
		
		$ret = new CActiveDataProvider('Stock', array(
			'criteria'=>$criteria,
		));
				
		return new CActiveDataProvider('Stock', array(
			'criteria'=>$criteria,
		));
	}
}