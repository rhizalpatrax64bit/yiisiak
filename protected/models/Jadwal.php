<?php

/**
 * This is the model class for table "tbl_jadwal".
 *
 * The followings are the available columns in table 'tbl_jadwal':
 * @property integer $jdwl_id
 * @property integer $bn_id
 * @property string $rg_kode
 * @property string $semester
 * @property string $jdwl_hari
 * @property string $jdwl_masuk
 * @property string $jdwl_keluar
 * @property string $jdwl_kls
 * @property string $jdwl_uts
 * @property string $jdwl_uas
 *
 * The followings are the available model relations:
 * @property BobotNilai $bn
 * @property Ruang $rgKode
 * @property JadwalTmp[] $jadwalTmps
 * @property Krs[] $krs
 */
class Jadwal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_jadwal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bn_id, semester, jdwl_hari, jdwl_masuk, jdwl_keluar', 'required'),
			array('bn_id', 'numerical', 'integerOnly'=>true),
			array('rg_kode', 'length', 'max'=>8),
			array('semester, jdwl_hari', 'length', 'max'=>1),
			array('jdwl_masuk, jdwl_keluar', 'length', 'max'=>5),
			array('jdwl_kls', 'length', 'max'=>15),
			array('jdwl_uts, jdwl_uas', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jdwl_id, bn_id, rg_kode, semester, jdwl_hari, jdwl_masuk, jdwl_keluar, jdwl_kls, jdwl_uts, jdwl_uas', 'safe', 'on'=>'search'),
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
			'bn' => array(self::BELONGS_TO, 'BobotNilai', 'bn_id'),
			'rgKode' => array(self::BELONGS_TO, 'Ruang', 'rg_kode'),
			'jadwalTmps' => array(self::HAS_MANY, 'JadwalTmp', 'jdwl_id'),
			'krs' => array(self::HAS_MANY, 'Krs', 'jdwl_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jdwl_id' => 'Kode Jdwl',
			'bn_id' => 'Bn',
			'rg_kode' => 'Kode Ruang',
			'semester' => 'Semester',
			'jdwl_hari' => 'Hari',
			'jdwl_masuk' => 'Masuk',
			'jdwl_keluar' => 'Keluar',
			'jdwl_kls' => 'Kelas',
			'jdwl_uts' => 'Tgl UTS',
			'jdwl_uas' => 'Tgl UAS',
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

		$criteria->compare('jdwl_id',$this->jdwl_id);
		$criteria->compare('bn_id',$this->bn_id);
		$criteria->compare('rg_kode',$this->rg_kode,true);
		$criteria->compare('semester',$this->semester,true);
		$criteria->compare('jdwl_hari',$this->jdwl_hari,true);
		$criteria->compare('jdwl_masuk',$this->jdwl_masuk,true);
		$criteria->compare('jdwl_keluar',$this->jdwl_keluar,true);
		$criteria->compare('jdwl_kls',$this->jdwl_kls,true);
		$criteria->compare('jdwl_uts',$this->jdwl_uts,true);
		$criteria->compare('jdwl_uas',$this->jdwl_uas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function view($Day)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('jdwl_id',$this->jdwl_id);
		$criteria->compare('bn_id',$this->bn_id);
		$criteria->compare('rg_kode',$this->rg_kode,true);
		$criteria->compare('semester',$this->semester,true);
		$criteria->compare('jdwl_hari',$Day,true);
		$criteria->compare('jdwl_masuk',$this->jdwl_masuk,true);
		$criteria->compare('jdwl_keluar',$this->jdwl_keluar,true);
		$criteria->compare('jdwl_kls',$this->jdwl_kls,true);
		$criteria->compare('jdwl_uts',$this->jdwl_uts,true);
		$criteria->compare('jdwl_uas',$this->jdwl_uas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function getJadwal($fk_id,$jr_id,$pr_kode,$day,$kr_kode){
		$cmd ="
			  SELECT bn.mtk_kode [Kode MK]
				  ,mtk.mtk_nama Matakuliah
				  ,ds.ds_nm Dosen
				  ,Waktu = jdwl_masuk + ' - ' + jdwl_keluar
			      ,rg.[rg_kode] + ' - ' + rg.rg_nama Ruangan
			      ,[jdwl_kls] Kelas
				  ,mtk.mtk_sks SKS
				  ,(select COUNT(*) from tbl_krs where tbl_krs.jdwl_id = jd.jdwl_id)  Total
				  ,fk.fk_id
				  ,jr.jr_id
				  ,p.pr_kode
				  ,semester
				  ,jd.jdwl_id
			  FROM  [tbl_jadwal] jd
			  join tbl_bobot_nilai bn on bn.id = bn_id
			  join tbl_kalender k on k.kln_id = bn.kln_id
			  join tbl_program p on p.pr_kode = k.pr_kode
			  join tbl_jurusan jr on jr.jr_id = k.jr_id
			  join tbl_fakultas fk on fk.fk_id = jr.fk_id
			  join tbl_matkul mtk on mtk.mtk_kode = bn.mtk_kode
			  join tbl_ruang rg on rg.rg_kode = jd.rg_kode
			  join tbl_dosen ds on ds.ds_nidn = bn.ds_nidn
			  where fk.fk_id ='$fk_id' and jr.jr_id ='$jr_id' and p.pr_kode ='$pr_kode' and  jdwl_hari = '$day' and k.kr_kode = '$kr_kode'
			  order by Waktu ASC";

			  $jd = Yii::app()->db->createCommand($cmd)->queryAll();
			
		return $jd;	
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jadwal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
