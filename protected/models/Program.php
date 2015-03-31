<?php

/**
 * This is the model class for table "tbl_program".
 *
 * The followings are the available columns in table 'tbl_program':
 * @property string $pr_kode
 * @property string $pr_nama
 * @property string $pr_nim
 * @property string $pr_stat
 *
 * The followings are the available model relations:
 * @property Kalender[] $kalenders
 */
class Program extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_program';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pr_kode, pr_stat', 'required'),
			array('pr_kode', 'length', 'max'=>5),
			array('pr_nama', 'length', 'max'=>40),
			array('pr_nim', 'length', 'max'=>2),
			array('pr_stat', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pr_kode, pr_nama, pr_nim, pr_stat', 'safe', 'on'=>'search'),
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
			'kalenders' => array(self::HAS_MANY, 'Kalender', 'pr_kode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pr_kode' => 'Pr Kode',
			'pr_nama' => 'Pr Nama',
			'pr_nim' => 'Pr Nim',
			'pr_stat' => 'Pr Stat',
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

		$criteria->compare('pr_kode',$this->pr_kode,true);
		$criteria->compare('pr_nama',$this->pr_nama,true);
		$criteria->compare('pr_nim',$this->pr_nim,true);
		$criteria->compare('pr_stat',$this->pr_stat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Program the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
