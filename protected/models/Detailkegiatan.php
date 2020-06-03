<?php

/**
 * This is the model class for table "detailkegiatan".
 *
 * The followings are the available columns in table 'detailkegiatan':
 * @property integer $iddetailkeg
 * @property string $idkegiatan
 * @property string $nim
 * @property string $detailkegiatan
 * @property integer $statusdetailkeg
 * @property string $tglkegiatan
 * @property string $tempatkegiatan
 * @property string $penyelenggara
 * @property integer $validasi
 *
 * The followings are the available model relations:
 * @property Kegiatan $idkegiatan0
 * @property Uploaddatadukung[] $uploaddatadukungs
 * @property Validasi[] $validasis
 */
class Detailkegiatan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailkegiatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('iddetailkeg', 'required'),
			array('iddetailkeg, statusdetailkeg, validasi', 'numerical', 'integerOnly'=>true),
			array('idkegiatan', 'length', 'max'=>5),
			array('nim', 'length', 'max'=>18),
			array('penyelenggara', 'length', 'max'=>85),
			array('detailkegiatan, tglkegiatan, tempatkegiatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iddetailkeg, idkegiatan, nim, detailkegiatan, statusdetailkeg, tglkegiatan, tempatkegiatan, penyelenggara, validasi', 'safe', 'on'=>'search'),
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
			'idkegiatan0' => array(self::BELONGS_TO, 'Kegiatan', 'idkegiatan'),
			'uploaddatadukungs' => array(self::HAS_MANY, 'Uploaddatadukung', 'iddetailkeg'),
			'validasis' => array(self::HAS_MANY, 'Validasi', 'iddetailkeg'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddetailkeg' => 'Id',
			'idkegiatan' => 'Kategori Kegiatan',
			'nim' => 'NIM',
			'detailkegiatan' => 'Detail Kegiatan',
			'statusdetailkeg' => 'Status',
			'tglkegiatan' => 'Tanggal Kegiatan',
			'tempatkegiatan' => 'Tempat Kegiatan',
			'penyelenggara' => 'Penyelenggara',
			'validasi' => 'Validasi',
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

		$criteria->compare('iddetailkeg',$this->iddetailkeg);
		$criteria->compare('idkegiatan',$this->idkegiatan,true);
		$criteria->compare('nim',$this->nim,true);
		$criteria->compare('detailkegiatan',$this->detailkegiatan,true);
		$criteria->compare('statusdetailkeg',$this->statusdetailkeg);
		$criteria->compare('tglkegiatan',$this->tglkegiatan,true);
		$criteria->compare('tempatkegiatan',$this->tempatkegiatan,true);
		$criteria->compare('penyelenggara',$this->penyelenggara,true);
		$criteria->compare('validasi',$this->validasi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detailkegiatan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
