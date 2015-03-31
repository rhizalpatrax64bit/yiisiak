<?php

/**
 * This is the model class for table "tbl_jurusan".
 *
 * The followings are the available columns in table 'tbl_jurusan':
 * @property string $jr_id
 * @property string $fk_id
 * @property string $jr_kode_nim
 * @property string $jr_nama
 * @property string $jr_jenjang
 * @property string $jr_stat
 *
 * The followings are the available model relations:
 * @property Fakultas $fk
 * @property Kalender[] $kalenders
 * @property Matkul[] $matkuls
 */
class Jurusan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_jurusan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jr_id, jr_stat', 'required'),
			array('jr_id', 'length', 'max'=>8),
			array('fk_id, jr_jenjang', 'length', 'max'=>2),
			array('jr_kode_nim', 'length', 'max'=>5),
			array('jr_nama', 'length', 'max'=>50),
			array('jr_stat', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jr_id, fk_id, jr_kode_nim, jr_nama, jr_jenjang, jr_stat', 'safe', 'on'=>'search'),
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
			'fk' => array(self::BELONGS_TO, 'Fakultas', 'fk_id'),
			'kalenders' => array(self::HAS_MANY, 'Kalender', 'jr_id'),
			'matkuls' => array(self::HAS_MANY, 'Matkul', 'jr_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jr_id' => 'Jr',
			'fk_id' => 'Fk',
			'jr_kode_nim' => 'Jr Kode Nim',
			'jr_nama' => 'Jr Nama',
			'jr_jenjang' => 'Jr Jenjang',
			'jr_stat' => 'Jr Stat',
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

		$criteria->compare('jr_id',$this->jr_id,true);
		$criteria->compare('fk_id',$this->fk_id,true);
		$criteria->compare('jr_kode_nim',$this->jr_kode_nim,true);
		$criteria->compare('jr_nama',$this->jr_nama,true);
		$criteria->compare('jr_jenjang',$this->jr_jenjang,true);
		$criteria->compare('jr_stat',$this->jr_stat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jurusan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
