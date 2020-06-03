<?php

/**
 * This is the model class for table "validasi".
 *
 * The followings are the available columns in table 'validasi':
 * @property integer $idvalidasi
 * @property integer $iddetailkeg
 * @property integer $validasibem
 * @property integer $validasiwd
 * @property string $tglvalidasibem
 * @property string $tglvalidasiwd
 */
class Validasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'validasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	//		array('idvalidasi', 'required'),
			array('idvalidasi, iddetailkeg, validasibem, validasiwd', 'numerical', 'integerOnly'=>true),
			array('tglvalidasibem, tglvalidasiwd', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idvalidasi, iddetailkeg, validasibem, validasiwd, tglvalidasibem, tglvalidasiwd', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idvalidasi' => 'Idvalidasi',
			'iddetailkeg' => 'Iddetailkeg',
			'validasibem' => 'Validasibem',
			'validasiwd' => 'Validasiwd',
			'tglvalidasibem' => 'Tglvalidasibem',
			'tglvalidasiwd' => 'Tglvalidasiwd',
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

		$criteria->compare('idvalidasi',$this->idvalidasi);
		$criteria->compare('iddetailkeg',$this->iddetailkeg);
		$criteria->compare('validasibem',$this->validasibem);
		$criteria->compare('validasiwd',$this->validasiwd);
		$criteria->compare('tglvalidasibem',$this->tglvalidasibem,true);
		$criteria->compare('tglvalidasiwd',$this->tglvalidasiwd,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Validasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
