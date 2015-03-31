<?php

/**
 * This is the model class for table "tbl_matkul".
 *
 * The followings are the available columns in table 'tbl_matkul':
 * @property string $mtk_kode
 * @property string $mtk_nama
 * @property integer $mtk_sks
 * @property string $mtk_kat
 * @property string $mtk_stat
 * @property string $jr_id
 * @property string $penanggungjawab
 * @property string $mtk_sesi
 * @property string $mtk_sub
 * @property string $mtk_semester
 *
 * The followings are the available model relations:
 * @property Dosen $penanggungjawab0
 * @property Jurusan $jr
 */
class Matkul extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_matkul';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mtk_kode', 'required'),
			array('mtk_sks', 'numerical', 'integerOnly'=>true),
			array('mtk_kode', 'length', 'max'=>15),
			array('mtk_nama', 'length', 'max'=>50),
			array('mtk_kat, mtk_stat', 'length', 'max'=>1),
			array('jr_id', 'length', 'max'=>8),
			array('penanggungjawab', 'length', 'max'=>20),
			array('mtk_sesi, mtk_semester', 'length', 'max'=>2),
			array('mtk_sub', 'length', 'max'=>80),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mtk_kode, mtk_nama, mtk_sks, mtk_kat, mtk_stat, jr_id, penanggungjawab, mtk_sesi, mtk_sub, mtk_semester', 'safe', 'on'=>'search'),
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
			'penanggungjawab0' => array(self::BELONGS_TO, 'Dosen', 'penanggungjawab'),
			'jr' => array(self::BELONGS_TO, 'Jurusan', 'jr_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mtk_kode' => 'Mtk Kode',
			'mtk_nama' => 'Mtk Nama',
			'mtk_sks' => 'Mtk Sks',
			'mtk_kat' => 'Mtk Kat',
			'mtk_stat' => 'Mtk Stat',
			'jr_id' => 'Jr',
			'penanggungjawab' => 'Penanggungjawab',
			'mtk_sesi' => 'Mtk Sesi',
			'mtk_sub' => 'Mtk Sub',
			'mtk_semester' => 'Mtk Semester',
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

		$criteria->compare('mtk_kode',$this->mtk_kode,true);
		$criteria->compare('mtk_nama',$this->mtk_nama,true);
		$criteria->compare('mtk_sks',$this->mtk_sks);
		$criteria->compare('mtk_kat',$this->mtk_kat,true);
		$criteria->compare('mtk_stat',$this->mtk_stat,true);
		$criteria->compare('jr_id',$this->jr_id,true);
		$criteria->compare('penanggungjawab',$this->penanggungjawab,true);
		$criteria->compare('mtk_sesi',$this->mtk_sesi,true);
		$criteria->compare('mtk_sub',$this->mtk_sub,true);
		$criteria->compare('mtk_semester',$this->mtk_semester,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Matkul the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
