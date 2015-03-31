<?php

/**
 * This is the model class for table "tbl_kalender".
 *
 * The followings are the available columns in table 'tbl_kalender':
 * @property integer $kln_id
 * @property string $kr_kode
 * @property string $jr_id
 * @property string $pr_kode
 * @property string $kln_krs
 * @property string $kln_masuk
 * @property string $kln_uts
 * @property string $kln_uas
 * @property integer $kln_krs_lama
 * @property integer $kln_uts_lama
 * @property integer $kln_uas_lama
 * @property string $kln_stat
 * @property string $kln_sesi
 *
 * The followings are the available model relations:
 * @property BobotNilai[] $bobotNilais
 * @property Jurusan $jr
 * @property Kurikulum $krKode
 * @property Program $prKode
 */
class Kalender extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_kalender';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kln_stat', 'required'),
			array('kln_krs_lama, kln_uts_lama, kln_uas_lama', 'numerical', 'integerOnly'=>true),
			array('kr_kode, pr_kode', 'length', 'max'=>5),
			array('jr_id', 'length', 'max'=>8),
			array('kln_stat', 'length', 'max'=>1),
			array('kln_sesi', 'length', 'max'=>2),
			array('kln_krs, kln_masuk, kln_uts, kln_uas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kln_id, kr_kode, jr_id, pr_kode, kln_krs, kln_masuk, kln_uts, kln_uas, kln_krs_lama, kln_uts_lama, kln_uas_lama, kln_stat, kln_sesi', 'safe', 'on'=>'search'),
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
			'bobotNilais' => array(self::HAS_MANY, 'BobotNilai', 'kln_id'),
			'jr' => array(self::BELONGS_TO, 'Jurusan', 'jr_id'),
			'krKode' => array(self::BELONGS_TO, 'Kurikulum', 'kr_kode'),
			'prKode' => array(self::BELONGS_TO, 'Program', 'pr_kode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kln_id' => 'Kln',
			'kr_kode' => 'Kr Kode',
			'jr_id' => 'Jr',
			'pr_kode' => 'Pr Kode',
			'kln_krs' => 'Kln Krs',
			'kln_masuk' => 'Kln Masuk',
			'kln_uts' => 'Kln Uts',
			'kln_uas' => 'Kln Uas',
			'kln_krs_lama' => 'Kln Krs Lama',
			'kln_uts_lama' => 'Kln Uts Lama',
			'kln_uas_lama' => 'Kln Uas Lama',
			'kln_stat' => 'Kln Stat',
			'kln_sesi' => 'Kln Sesi',
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

		$criteria->compare('kln_id',$this->kln_id);
		$criteria->compare('kr_kode',$this->kr_kode,true);
		$criteria->compare('jr_id',$this->jr_id,true);
		$criteria->compare('pr_kode',$this->pr_kode,true);
		$criteria->compare('kln_krs',$this->kln_krs,true);
		$criteria->compare('kln_masuk',$this->kln_masuk,true);
		$criteria->compare('kln_uts',$this->kln_uts,true);
		$criteria->compare('kln_uas',$this->kln_uas,true);
		$criteria->compare('kln_krs_lama',$this->kln_krs_lama);
		$criteria->compare('kln_uts_lama',$this->kln_uts_lama);
		$criteria->compare('kln_uas_lama',$this->kln_uas_lama);
		$criteria->compare('kln_stat',$this->kln_stat,true);
		$criteria->compare('kln_sesi',$this->kln_sesi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kalender the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
