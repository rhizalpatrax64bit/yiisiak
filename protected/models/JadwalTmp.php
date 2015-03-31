<?php

/**
 * This is the model class for table "tbl_jadwal_tmp".
 *
 * The followings are the available columns in table 'tbl_jadwal_tmp':
 * @property string $id
 * @property integer $jdwl_id
 * @property string $ds_nidn
 * @property string $rg_kode
 * @property string $jdwl_tgl
 * @property string $jdwl_keluar
 *
 * The followings are the available model relations:
 * @property Jadwal $jdwl
 */
class JadwalTmp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_jadwal_tmp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jdwl_id', 'required'),
			array('jdwl_id', 'numerical', 'integerOnly'=>true),
			array('ds_nidn', 'length', 'max'=>20),
			array('rg_kode', 'length', 'max'=>8),
			array('jdwl_tgl', 'length', 'max'=>16),
			array('jdwl_keluar', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, jdwl_id, ds_nidn, rg_kode, jdwl_tgl, jdwl_keluar', 'safe', 'on'=>'search'),
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
			'jdwl' => array(self::BELONGS_TO, 'Jadwal', 'jdwl_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'jdwl_id' => 'Jdwl',
			'ds_nidn' => 'Ds Nidn',
			'rg_kode' => 'Rg Kode',
			'jdwl_tgl' => 'Jdwl Tgl',
			'jdwl_keluar' => 'Jdwl Keluar',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('jdwl_id',$this->jdwl_id);
		$criteria->compare('ds_nidn',$this->ds_nidn,true);
		$criteria->compare('rg_kode',$this->rg_kode,true);
		$criteria->compare('jdwl_tgl',$this->jdwl_tgl,true);
		$criteria->compare('jdwl_keluar',$this->jdwl_keluar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JadwalTmp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
