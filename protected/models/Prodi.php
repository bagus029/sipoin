<?php

/**
 * This is the model class for table "prodi".
 *
 * The followings are the available columns in table 'prodi':
 * @property string $IDPRODI
 * @property integer $KODEPRODI
 * @property integer $KODEPRODIUNSOED
 * @property integer $IDJENJANG
 * @property integer $IDFAKULTAS
 * @property string $NAMAPRODI
 * @property string $ISAKTIF
 * @property string $KODEPRODILAMA
 *
 * The followings are the available model relations:
 * @property Mahasiswa[] $mahasiswas
 * @property Fakultas $iDFAKULTAS
 * @property Jenjang $iDJENJANG
 */
class Prodi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prodi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDPRODI', 'required'),
			array('KODEPRODI, KODEPRODIUNSOED, IDJENJANG, IDFAKULTAS', 'numerical', 'integerOnly'=>true),
			array('IDPRODI, KODEPRODILAMA', 'length', 'max'=>4),
			array('NAMAPRODI', 'length', 'max'=>80),
			array('ISAKTIF', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDPRODI, KODEPRODI, KODEPRODIUNSOED, IDJENJANG, IDFAKULTAS, NAMAPRODI, ISAKTIF, KODEPRODILAMA', 'safe', 'on'=>'search'),
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
			'mahasiswas' => array(self::HAS_MANY, 'Mahasiswa', 'IDPRODI'),
			'iDFAKULTAS' => array(self::BELONGS_TO, 'Fakultas', 'IDFAKULTAS'),
			'iDJENJANG' => array(self::BELONGS_TO, 'Jenjang', 'IDJENJANG'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDPRODI' => 'Id',
			'KODEPRODI' => 'Kode Prodi',
			'KODEPRODIUNSOED' => 'Kode Prodi Unsoed',
			'IDJENJANG' => 'Jenjang',
			'IDFAKULTAS' => 'Fakultas',
			'NAMAPRODI' => 'Nama Prodi',
			'ISAKTIF' => 'Is Aktif',
			'KODEPRODILAMA' => 'Kode Prodi Lama',
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

		$criteria->compare('IDPRODI',$this->IDPRODI,true);
		$criteria->compare('KODEPRODI',$this->KODEPRODI);
		$criteria->compare('KODEPRODIUNSOED',$this->KODEPRODIUNSOED);
		$criteria->compare('IDJENJANG',$this->IDJENJANG);
		$criteria->compare('IDFAKULTAS',$this->IDFAKULTAS);
		$criteria->compare('NAMAPRODI',$this->NAMAPRODI,true);
		$criteria->compare('ISAKTIF',$this->ISAKTIF,true);
		$criteria->compare('KODEPRODILAMA',$this->KODEPRODILAMA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->db2;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Prodi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
