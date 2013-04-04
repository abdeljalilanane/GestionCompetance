<?php

/**
 * This is the model class for table "competences".
 *
 * The followings are the available columns in table 'competences':
 * @property integer $id
 * @property string $libelle
 * @property string $type
 * @property string $Groupe
 */
class Competences extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Competences the static model class
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
		return 'competences';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('libelle, type, Groupe', 'required'),
			array('libelle, type, Groupe', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, libelle, type, Groupe', 'safe', 'on'=>'search'),
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
			'libelle' => 'Libelle',
			'type' => 'Type',
			'Groupe' => 'Groupe',
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
		$criteria->compare('libelle',$this->libelle,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('Groupe',$this->Groupe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}