<?php

/**
 * This is the model class for table "damaged".
 *
 * The followings are the available columns in table 'damaged':
 * @property integer $id
 * @property integer $plants_id
 * @property string $qty
 * @property string $date_damaged
 */
class Damaged extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Damaged the static model class
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
		return 'damaged';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, plants_id', 'required'),
			array('id, plants_id', 'numerical', 'integerOnly'=>true),
			array('qty', 'length', 'max'=>45),
			array('date_damaged', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, plants_id, qty, date_damaged', 'safe', 'on'=>'search'),
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
			'plants' => array(self::BELONGS_TO, 'Plants', 'plants_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'plants_id' => 'Plants',
			'qty' => 'Qty',
			'date_damaged' => 'Date Damaged',
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

		$criteria->compare('plants_id',$this->plants_id);

		$criteria->compare('qty',$this->qty,true);

		$criteria->compare('date_damaged',$this->date_damaged,true);

		return new CActiveDataProvider('Damaged', array(
			'criteria'=>$criteria,
		));
	}
}