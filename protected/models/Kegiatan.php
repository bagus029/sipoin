<?php

/**
 * This is the model class for table "kegiatan".
 *
 * The followings are the available columns in table 'kegiatan':
 * @property string $idkegiatan
 * @property integer $idjeniskegiatan
 * @property string $namakegiatan
 * @property double $poinkegiatan
 * @property integer $statuskegiatan
 * @property string $satuanpoin
 *
 * The followings are the available model relations:
 * @property Detailkegiatan[] $detailkegiatans
 * @property Jeniskegiatan $idjeniskegiatan0
 */
class Kegiatan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kegiatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idkegiatan', 'required'),
			array('idjeniskegiatan, statuskegiatan', 'numerical', 'integerOnly'=>true),
			array('poinkegiatan', 'numerical'),
			array('idkegiatan', 'length', 'max'=>5),
			array('satuanpoin', 'length', 'max'=>50),
			array('namakegiatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idkegiatan, idjeniskegiatan, namakegiatan, poinkegiatan, statuskegiatan, satuanpoin', 'safe', 'on'=>'search'),
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
			'detailkegiatans' => array(self::HAS_MANY, 'Detailkegiatan', 'idkegiatan'),
			'idjeniskegiatan0' => array(self::BELONGS_TO, 'Jeniskegiatan', 'idjeniskegiatan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idkegiatan' => 'Id',
			'idjeniskegiatan' => 'Jenis Kegiatan',
			'namakegiatan' => 'Nama Kegiatan',
			'poinkegiatan' => 'Poin Kegiatan',
			'statuskegiatan' => 'Status',
			'satuanpoin' => 'Satuan Poin',
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

		$criteria->compare('idkegiatan',$this->idkegiatan,true);
		$criteria->compare('idjeniskegiatan',$this->idjeniskegiatan);
		$criteria->compare('namakegiatan',$this->namakegiatan,true);
		$criteria->compare('poinkegiatan',$this->poinkegiatan);
		$criteria->compare('statuskegiatan',$this->statuskegiatan);
		$criteria->compare('satuanpoin',$this->satuanpoin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kegiatan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
