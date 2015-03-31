<?php

/**
 * This is the model class for table "tbl_dosen".
 *
 * The followings are the available columns in table 'tbl_dosen':
 * @property string $ds_nidn
 * @property string $ds_user
 * @property string $ds_pass
 * @property string $ds_pass_kode
 * @property string $ds_nm
 * @property integer $ds_tipe
 * @property string $ds_kat
 *
 * The followings are the available model relations:
 * @property TblBobotNilai[] $tblBobotNilais
 * @property TblMatkul[] $tblMatkuls
 */
class Dosen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_dosen';
	}

	public $active;
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ds_nidn', 'required'),
			array('ds_tipe', 'numerical', 'integerOnly'=>true),
			array('ds_nidn', 'length', 'max'=>20),
			array('ds_user, ds_pass, ds_nm', 'length', 'max'=>80),
			array('ds_pass_kode', 'length', 'max'=>10),
			array('ds_kat', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ds_nidn, ds_user, ds_pass, ds_pass_kode, ds_nm, ds_tipe, ds_kat', 'safe', 'on'=>'search'),
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
			'tblBobotNilais' => array(self::HAS_MANY, 'TblBobotNilai', 'ds_nidn'),
			'tblMatkuls' => array(self::HAS_MANY, 'TblMatkul', 'penanggungjawab'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ds_nidn' => 'NIDN',
			'ds_nm' => 'Nama',
			'ds_tipe' => 'Tipe',
			'ds_kat' => 'Kategori',
			'ds_user' => 'Username',
			'ds_pass' => 'Password',
			'ds_pass_kode' => 'Pass Kode',
			
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

		$criteria->compare('ds_nidn',$this->ds_nidn,true);
		$criteria->compare('ds_user',$this->ds_user,true);
		$criteria->compare('ds_pass',$this->ds_pass,true);
		$criteria->compare('ds_pass_kode',$this->ds_pass_kode,true);
		$criteria->compare('ds_nm',$this->ds_nm,true);
		$criteria->compare('ds_tipe',$this->ds_tipe);
		$criteria->compare('ds_kat',$this->ds_kat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dosen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
