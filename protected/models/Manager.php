<?php

/**
 * This is the model class for table "manager".
 *
 * The followings are the available columns in table 'manager':
 * @property integer $id
 * @property string $cin
 * @property string $NOM
 * @property string $Prenom
 * @property string $Email
 * @property string $Tel
 * @property string $login
 * @property string $motpasse
 */
class Manager extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Manager the static model class
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
		return 'manager';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cin, NOM, Prenom, Email, Tel, login, motpasse', 'required'),
			array('cin', 'length', 'max'=>8),
			array('NOM, Prenom, Email, Tel, login, motpasse', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cin, NOM, Prenom, Email, Tel, login, motpasse', 'safe', 'on'=>'search'),
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
			'cin' => 'Cin',
			'NOM' => 'Nom',
			'Prenom' => 'Prenom',
			'Email' => 'Email',
			'Tel' => 'Tel',
			'login' => 'Login',
			'motpasse' => 'Motpasse',
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
		$criteria->compare('cin',$this->cin,true);
		$criteria->compare('NOM',$this->NOM,true);
		$criteria->compare('Prenom',$this->Prenom,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('motpasse',$this->motpasse,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}