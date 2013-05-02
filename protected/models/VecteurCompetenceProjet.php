<?php

/**
 * This is the model class for table "Vecteur_competence_projet".
 *
 * The followings are the available columns in table 'Vecteur_competence_projet':
 * @property integer $id_competence_projet
 * @property integer $id_competence
 * @property integer $id_projet
 */
class VecteurCompetenceProjet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VecteurCompetenceProjet the static model class
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
		return 'Vecteur_competence_projet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_competence, id_projet', 'required'),
			array('id_competence, id_projet', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_competence_projet, id_competence, id_projet', 'safe', 'on'=>'search'),
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
			'id_competence_projet' => 'Id Competence Projet',
			'id_competence' => 'Id Competence',
			'id_projet' => 'Id Projet',
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

		$criteria->compare('id_competence_projet',$this->id_competence_projet);
		$criteria->compare('id_competence',$this->id_competence);
		$criteria->compare('id_projet',$this->id_projet);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}