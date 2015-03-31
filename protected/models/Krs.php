<?php

/**
 * This is the model class for table "tbl_krs".
 *
 * The followings are the available columns in table 'tbl_krs':
 * @property integer $krs_id
 * @property string $krs_tgl
 * @property integer $jdwl_id
 * @property string $mhs_nim
 * @property integer $krs_tgs1
 * @property integer $krs_tgs2
 * @property integer $krs_tgs3
 * @property integer $krs_tambahan
 * @property integer $krs_quis
 * @property integer $krs_uts
 * @property integer $krs_uas
 * @property string $krs_tot
 * @property string $krs_grade
 * @property string $krs_stat
 * @property string $krs_ulang
 * @property string $kr_kode_
 * @property string $ds_nidn_
 * @property string $ds_nm_
 * @property string $mtk_kode_
 * @property string $mtk_nama_
 * @property string $sks_
 *
 * The followings are the available model relations:
 * @property Absensi[] $absensis
 * @property Jadwal $jdwl
 * @property Mahasiswa $mhsNim
 */
class Krs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_krs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('krs_tgl, jdwl_id, mhs_nim', 'required'),
			array('jdwl_id, krs_tgs1, krs_tgs2, krs_tgs3, krs_tambahan, krs_quis, krs_uts, krs_uas', 'numerical', 'integerOnly'=>true),
			array('mhs_nim', 'length', 'max'=>18),
			array('krs_tot, kr_kode_', 'length', 'max'=>5),
			array('krs_grade, krs_stat, krs_ulang', 'length', 'max'=>1),
			array('ds_nidn_', 'length', 'max'=>20),
			array('ds_nm_', 'length', 'max'=>80),
			array('mtk_kode_', 'length', 'max'=>15),
			array('mtk_nama_', 'length', 'max'=>50),
			array('sks_', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('krs_id, krs_tgl, jdwl_id, mhs_nim, krs_tgs1, krs_tgs2, krs_tgs3, krs_tambahan, krs_quis, krs_uts, krs_uas, krs_tot, krs_grade, krs_stat, krs_ulang, kr_kode_, ds_nidn_, ds_nm_, mtk_kode_, mtk_nama_, sks_', 'safe', 'on'=>'search'),
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
			'absensis' => array(self::HAS_MANY, 'Absensi', 'krs_id'),
			'jdwl' => array(self::BELONGS_TO, 'Jadwal', 'jdwl_id'),
			'mhsNim' => array(self::BELONGS_TO, 'Mahasiswa', 'mhs_nim'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'krs_id' => 'Krs',
			'krs_tgl' => 'Krs Tgl',
			'jdwl_id' => 'Jdwl',
			'mhs_nim' => 'Mhs Nim',
			'krs_tgs1' => 'Krs Tgs1',
			'krs_tgs2' => 'Krs Tgs2',
			'krs_tgs3' => 'Krs Tgs3',
			'krs_tambahan' => 'Krs Tambahan',
			'krs_quis' => 'Krs Quis',
			'krs_uts' => 'Krs Uts',
			'krs_uas' => 'Krs Uas',
			'krs_tot' => 'Krs Tot',
			'krs_grade' => 'Krs Grade',
			'krs_stat' => 'Krs Stat',
			'krs_ulang' => 'Krs Ulang',
			'kr_kode_' => 'Kr Kode',
			'ds_nidn_' => 'Ds Nidn',
			'ds_nm_' => 'Ds Nm',
			'mtk_kode_' => 'Mtk Kode',
			'mtk_nama_' => 'Mtk Nama',
			'sks_' => 'Sks',
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

		$criteria->compare('krs_id',$this->krs_id);
		$criteria->compare('krs_tgl',$this->krs_tgl,true);
		$criteria->compare('jdwl_id',$this->jdwl_id);
		$criteria->compare('mhs_nim',$this->mhs_nim,true);
		$criteria->compare('krs_tgs1',$this->krs_tgs1);
		$criteria->compare('krs_tgs2',$this->krs_tgs2);
		$criteria->compare('krs_tgs3',$this->krs_tgs3);
		$criteria->compare('krs_tambahan',$this->krs_tambahan);
		$criteria->compare('krs_quis',$this->krs_quis);
		$criteria->compare('krs_uts',$this->krs_uts);
		$criteria->compare('krs_uas',$this->krs_uas);
		$criteria->compare('krs_tot',$this->krs_tot,true);
		$criteria->compare('krs_grade',$this->krs_grade,true);
		$criteria->compare('krs_stat',$this->krs_stat,true);
		$criteria->compare('krs_ulang',$this->krs_ulang,true);
		$criteria->compare('kr_kode_',$this->kr_kode_,true);
		$criteria->compare('ds_nidn_',$this->ds_nidn_,true);
		$criteria->compare('ds_nm_',$this->ds_nm_,true);
		$criteria->compare('mtk_kode_',$this->mtk_kode_,true);
		$criteria->compare('mtk_nama_',$this->mtk_nama_,true);
		$criteria->compare('sks_',$this->sks_,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Krs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
