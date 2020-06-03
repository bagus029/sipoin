<?php

/**
 * This is the model class for table "uploaddatadukung".
 *
 * The followings are the available columns in table 'uploaddatadukung':
 * @property integer $iddatadukung
 * @property integer $iddetailkeg
 * @property string $namadatadukung
 * @property string $filedatadukung
 * @property string $tanggalupload
 * @property string $tanggalupdate
 * @property integer $statusdatadukung
 *
 * The followings are the available model relations:
 * @property Detailkegiatan $iddetailkeg0
 */
class Uploaddatadukung extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'uploaddatadukung';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('iddatadukung', 'required'),
			array('iddatadukung, iddetailkeg, statusdatadukung', 'numerical', 'integerOnly'=>true),
			array('namadatadukung', 'length', 'max'=>50),
			//array('filedatadukung', 'length', 'max'=>100),
			array('tanggalupload, tanggalupdate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('filedatadukung', 'file', 'types' => 'pdf,doc,docx,jpg,jpeg,png,', 'allowEmpty' => false, 'on' => 'tambah'),
			array('filedatadukung', 'file', 'types' => 'pdf,doc,docx,jpg,jpeg,png,', 'allowEmpty' => true, 'on' => 'update'),
			array('tanggalupload', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
			array('iddatadukung, iddetailkeg, namadatadukung, filedatadukung, tanggalupload, tanggalupdate, statusdatadukung', 'safe', 'on'=>'search'),
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
			'iddetailkeg0' => array(self::BELONGS_TO, 'Detailkegiatan', 'iddetailkeg'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddatadukung' => 'Id',
			'iddetailkeg' => 'Detail Kegiatan',
			'namadatadukung' => 'Nomor SK / Nama Bukti',
			'filedatadukung' => 'File Data Dukung',
			'tanggalupload' => 'Tanggal Upload',
			'tanggalupdate' => 'Tanggal Update',
			'statusdatadukung' => 'Status',
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

		$criteria->compare('iddatadukung',$this->iddatadukung);
		$criteria->compare('iddetailkeg',$this->iddetailkeg);
		$criteria->compare('namadatadukung',$this->namadatadukung,true);
		$criteria->compare('filedatadukung',$this->filedatadukung,true);
		$criteria->compare('tanggalupload',$this->tanggalupload,true);
		$criteria->compare('tanggalupdate',$this->tanggalupdate,true);
		$criteria->compare('statusdatadukung',$this->statusdatadukung);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Uploaddatadukung the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
