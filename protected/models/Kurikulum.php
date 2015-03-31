<?php

/**
 * This is the model class for table "tbl_kurikulum".
 *
 * The followings are the available columns in table 'tbl_kurikulum':
 * @property string $kr_kode
 * @property string $kr_nama
 *
 * The followings are the available model relations:
 * @property Kalender[] $kalenders
 */
class Kurikulum extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_kurikulum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kr_kode', 'required'),
			array('kr_kode', 'length', 'max'=>5),
			array('kr_nama', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kr_kode, kr_nama', 'safe', 'on'=>'search'),
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
			'kalenders' => array(self::HAS_MANY, 'Kalender', 'kr_kode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kr_kode' => 'Kr Kode',
			'kr_nama' => 'Kr Nama',
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

		$criteria->compare('kr_kode',$this->kr_kode,true);
		$criteria->compare('kr_nama',$this->kr_nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kurikulum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
