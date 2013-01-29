<?php

/**
 * This is the model class for table "staff".
 *
 * The followings are the available columns in table 'staff':
 * @property integer $staff_id
 * @property string $staff_name
 * @property string $user_name
 * @property string $password
 * @property integer $staff_role
 */
class Staff extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Staff the static model class
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
		return 'staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('staff_name, user_name, password, staff_role', 'required'),
			array('staff_role', 'numerical', 'integerOnly'=>true),
			array('staff_name, user_name, password', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('staff_id, staff_name, user_name, password, staff_role', 'safe', 'on'=>'search'),
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
			'staff_id' => 'Staff',
			'staff_name' => 'Staff Name',
			'user_name' => 'User Name',
			'password' => 'Password',
			'staff_role' => 'Staff Role',
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

		$criteria->compare('staff_id',$this->staff_id);

		$criteria->compare('staff_name',$this->staff_name,true);

		$criteria->compare('user_name',$this->user_name,true);

		$criteria->compare('password',$this->password,true);

		$criteria->compare('staff_role',$this->staff_role);

		return new CActiveDataProvider('Staff', array(
			'criteria'=>$criteria,
		));
	}
	
	public function validatePassword($password){
		if($this->password == md5($password))
			return true;
	}
}