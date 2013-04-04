<?php

/**
 * This is the model class for table "service_supervise".
 *
 * The followings are the available columns in table 'service_supervise':
 * @property integer $id
 * @property string $service
 * @property string $cin_Manager
 */
class ServiceSupervise extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ServiceSupervise the static model class
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
		return 'service_supervise';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('service, cin_Manager', 'required'),
			array('service', 'length', 'max'=>200),
			array('cin_Manager', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, service, cin_Manager', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'service' => 'Service',
			'cin_Manager' => 'Cin Manager',
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
		$criteria->compare('service',$this->service,true);
		$criteria->compare('cin_Manager',$this->cin_Manager,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}