<?php

/**
 * This is the model class for table "Vecteur_competence_collaborateur".
 *
 * The followings are the available columns in table 'Vecteur_competence_collaborateur':
 * @property integer $id_competence_collaborateur
 * @property integer $id_competence
 * @property integer $id_collaborateur
 */
class VecteurCompetenceCollaborateur extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VecteurCompetenceCollaborateur the static model class
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
		return 'Vecteur_competence_collaborateur';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_competence, id_collaborateur', 'required'),
			array('id_competence, id_collaborateur', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_competence_collaborateur, id_competence, id_collaborateur', 'safe', 'on'=>'search'),
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
			'id_competence_collaborateur' => 'Id Competence Collaborateur',
			'id_competence' => 'Id Competence',
			'id_collaborateur' => 'Id Collaborateur',
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

		$criteria->compare('id_competence_collaborateur',$this->id_competence_collaborateur);
		$criteria->compare('id_competence',$this->id_competence);
		$criteria->compare('id_collaborateur',$this->id_collaborateur);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}