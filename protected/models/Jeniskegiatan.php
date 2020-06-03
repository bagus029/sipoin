<?php

/**
 * This is the model class for table "jeniskegiatan".
 *
 * The followings are the available columns in table 'jeniskegiatan':
 * @property integer $idjeniskegiatan
 * @property string $jeniskegiatan
 * @property integer $statusjeniskegiatan
 * @property integer $jumlahpoin
 *
 * The followings are the available model relations:
 * @property Kegiatan[] $kegiatans
 */
class Jeniskegiatan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jeniskegiatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idjeniskegiatan', 'required'),
			array('idjeniskegiatan, statusjeniskegiatan, jumlahpoin', 'numerical', 'integerOnly'=>true),
			array('jeniskegiatan', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idjeniskegiatan, jeniskegiatan, statusjeniskegiatan, jumlahpoin', 'safe', 'on'=>'search'),
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
			'kegiatans' => array(self::HAS_MANY, 'Kegiatan', 'idjeniskegiatan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idjeniskegiatan' => 'Id',
			'jeniskegiatan' => 'Jenis Jegiatan',
			'statusjeniskegiatan' => 'Status',
			'jumlahpoin' => 'Jumlah Poin',
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

		$criteria->compare('idjeniskegiatan',$this->idjeniskegiatan);
		$criteria->compare('jeniskegiatan',$this->jeniskegiatan,true);
		$criteria->compare('statusjeniskegiatan',$this->statusjeniskegiatan);
		$criteria->compare('jumlahpoin',$this->jumlahpoin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jeniskegiatan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
