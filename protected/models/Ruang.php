<?php

/**
 * This is the model class for table "tbl_ruang".
 *
 * The followings are the available columns in table 'tbl_ruang':
 * @property string $rg_kode
 * @property string $rg_nama
 * @property integer $kapasitas
 *
 * The followings are the available model relations:
 * @property Jadwal[] $jadwals
 */
class Ruang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ruang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rg_kode', 'required'),
			array('kapasitas', 'numerical', 'integerOnly'=>true),
			array('rg_kode', 'length', 'max'=>8),
			array('rg_nama', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rg_kode, rg_nama, kapasitas', 'safe', 'on'=>'search'),
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
			'jadwals' => array(self::HAS_MANY, 'Jadwal', 'rg_kode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rg_kode' => 'Rg Kode',
			'rg_nama' => 'Rg Nama',
			'kapasitas' => 'Kapasitas',
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

		$criteria->compare('rg_kode',$this->rg_kode,true);
		$criteria->compare('rg_nama',$this->rg_nama,true);
		$criteria->compare('kapasitas',$this->kapasitas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ruang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
