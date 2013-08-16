<?php

/**
 * This is the model class for table "soprpt".
 *
 * The followings are the available columns in table 'soprpt':
 * @property integer $RptNo
 * @property string $RptName
 * @property string $RptDesc
 * @property string $SQLComm
 * @property string $AccessRptName
 * @property string $ORDERBYclause
 */
class Soprpt extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Soprpt the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'soprpt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RptNo', 'numerical', 'integerOnly'=>true),
			array('RptName, RptDesc, AccessRptName', 'length', 'max'=>50),
			array('ORDERBYclause', 'length', 'max'=>255),
			array('SQLComm', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('RptNo, RptName, RptDesc, SQLComm, AccessRptName, ORDERBYclause', 'safe', 'on'=>'search'),
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
			'RptNo' => 'Rpt No',
			'RptName' => 'Rpt Name',
			'RptDesc' => 'Rpt Desc',
			'SQLComm' => 'Sqlcomm',
			'AccessRptName' => 'Access Rpt Name',
			'ORDERBYclause' => 'Orderbyclause',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('RptNo',$this->RptNo);
		$criteria->compare('RptName',$this->RptName,true);
		$criteria->compare('RptDesc',$this->RptDesc,true);
		$criteria->compare('SQLComm',$this->SQLComm,true);
		$criteria->compare('AccessRptName',$this->AccessRptName,true);
		$criteria->compare('ORDERBYclause',$this->ORDERBYclause,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}