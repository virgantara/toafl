<?php

/**
 * This is the model class for table "soal".
 *
 * The followings are the available columns in table 'soal':
 * @property integer $id_soal
 * @property string $konten
 * @property integer $is_aktif
 *
 * The followings are the available model relations:
 * @property SoalPilihan[] $soalPilihans
 */
class Soal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'soal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('konten', 'required'),
			array('is_aktif', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_soal, konten, is_aktif', 'safe', 'on'=>'search'),
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
			'soalPilihans' => array(self::HAS_MANY, 'SoalPilihan', 'id_soal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_soal' => 'Id Soal',
			'konten' => 'Konten',
			'is_aktif' => 'Is Aktif',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_soal',$this->id_soal);
		$criteria->compare('konten',$this->konten,true);
		$criteria->compare('is_aktif',$this->is_aktif);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Soal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
