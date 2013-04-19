<?php

/**
 * This is the model class for table "collaborateurs".
 *
 * The followings are the available columns in table 'collaborateurs':
 * @property string $cin
 * @property string $nom
 * @property string $prenom
 * @property string $service
 */
class Collaborateurs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Collaborateurs the static model class
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
		return 'collaborateurs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cin, nom, prenom, service', 'required'),
			array('cin', 'length', 'max'=>8),
			array('nom, prenom', 'length', 'max'=>10),
			array('service', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cin, nom, prenom, service', 'safe', 'on'=>'search'),
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
			'cin' => 'Cin',
			'nom' => 'Nom',
			'prenom' => 'Prenom',
			'service' => 'Service',
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

		$criteria->compare('cin',$this->cin,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('prenom',$this->prenom,true);
		$criteria->compare('service',$this->service,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}