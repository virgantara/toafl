<?php

/**
 * This is the model class for table "user_jawaban".
 *
 * The followings are the available columns in table 'user_jawaban':
 * @property integer $id_user
 * @property integer $id_soal
 * @property integer $id_jawaban
 * @property integer $is_right
 * @property string $waktu_jawab
 */
class UserJawaban extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_jawaban';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('waktu_jawab', 'required'),
			array('id_user, id_soal, id_jawaban, is_right', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, id_soal, id_jawaban, is_right, waktu_jawab', 'safe', 'on'=>'search'),
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
			'id_user' => 'Id User',
			'id_soal' => 'Id Soal',
			'id_jawaban' => 'Id Jawaban',
			'is_right' => 'Is Right',
			'waktu_jawab' => 'Waktu Jawab',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_soal',$this->id_soal);
		$criteria->compare('id_jawaban',$this->id_jawaban);
		$criteria->compare('is_right',$this->is_right);
		$criteria->compare('waktu_jawab',$this->waktu_jawab,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserJawaban the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
