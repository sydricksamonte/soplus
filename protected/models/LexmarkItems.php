<?php

/**
 * This is the model class for table "lexmark_items".
 *
 * The followings are the available columns in table 'lexmark_items':
 * @property string $partNo
 * @property string $description
 * @property double $dealersprice
 * @property double $retailerprice
 * @property double $stockOnHand
 * @property double $consignment
 * @property double $demo
 * @property string $updatedBy
 * @property string $lastUpdate
 */
class LexmarkItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LexmarkItems the static model class
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
		return 'lexmark_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dealersprice, retailerprice, stockOnHand, consignment, demo', 'numerical'),
			array('partNo, updatedBy', 'length', 'max'=>45),
			array('description, lastUpdate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('partNo, description, dealersprice, retailerprice, stockOnHand, consignment, demo, updatedBy, lastUpdate', 'safe', 'on'=>'search'),
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
			'partNo' => 'Part No',
			'description' => 'Description',
			'dealersprice' => 'Dealersprice',
			'retailerprice' => 'Retailerprice',
			'stockOnHand' => 'Stock On Hand',
			'consignment' => 'Consignment',
			'demo' => 'Demo',
			'updatedBy' => 'Updated By',
			'lastUpdate' => 'Last Update',
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

		$criteria->compare('partNo',$this->partNo,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('dealersprice',$this->dealersprice);
		$criteria->compare('retailerprice',$this->retailerprice);
		$criteria->compare('stockOnHand',$this->stockOnHand);
		$criteria->compare('consignment',$this->consignment);
		$criteria->compare('demo',$this->demo);
		$criteria->compare('updatedBy',$this->updatedBy,true);
		$criteria->compare('lastUpdate',$this->lastUpdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}