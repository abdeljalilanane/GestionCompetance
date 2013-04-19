<?php

/**
 * This is the model class for table "manager".
 *
 * The followings are the available columns in table 'manager':
 * @property string $cin
 * @property string $NOM
 * @property string $Prenom
 * @property string $email
 * @property string $Tel
 * @property string $login
 * @property string $password
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
			array('cin, NOM, Prenom, email, Tel, login, password', 'required'),
			array('cin', 'length', 'max'=>8),
			array('NOM, Prenom, email, Tel, login, password', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cin, NOM, Prenom, email, Tel, login, password', 'safe', 'on'=>'search'),
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
			'NOM' => 'Nom',
			'Prenom' => 'Prenom',
			'email' => 'Email',
			'Tel' => 'Tel',
			'login' => 'Login',
			'password' => 'Password',
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
		$criteria->compare('NOM',$this->NOM,true);
		$criteria->compare('Prenom',$this->Prenom,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}