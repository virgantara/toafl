<?php

/**
 * This is the model class for table "soal_pilihan".
 *
 * The followings are the available columns in table 'soal_pilihan':
 * @property integer $id_pilihan
 * @property integer $id_soal
 * @property integer $is_right
 * @property string $pilihan
 *
 * The followings are the available model relations:
 * @property Soal $idSoal
 */
class SoalPilihan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'soal_pilihan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_soal, is_right', 'numerical', 'integerOnly'=>true),
			array('pilihan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pilihan, id_soal, is_right, pilihan', 'safe', 'on'=>'search'),
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
			'idSoal' => array(self::BELONGS_TO, 'Soal', 'id_soal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pilihan' => 'Id Pilihan',
			'id_soal' => 'Id Soal',
			'is_right' => 'Is Right',
			'pilihan' => 'Pilihan',
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

		$criteria->compare('id_pilihan',$this->id_pilihan);
		$criteria->compare('id_soal',$this->id_soal);
		$criteria->compare('is_right',$this->is_right);
		$criteria->compare('pilihan',$this->pilihan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SoalPilihan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
