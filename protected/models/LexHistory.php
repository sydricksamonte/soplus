<?php

/**
 * This is the model class for table "lex_history".
 *
 * The followings are the available columns in table 'lex_history':
 * @property string $InvoiceNo
 * @property string $LexDate
 * @property double $StockOnHand
 * @property string $partNo
 * @property string $DocNo
 * @property string $QtyIN
 * @property string $QtyOUT
 * @property string $AN
 * @property string $Remarks
 * @property string $OldDocNo
 */
class LexHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LexHistory the static model class
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
		return 'lex_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('partNo, DocNo', 'required'),
			array('StockOnHand', 'numerical'),
			array('InvoiceNo, partNo, DocNo, OldDocNo', 'length', 'max'=>45),
			array('QtyIN, QtyOUT', 'length', 'max'=>10),
			array('Remarks', 'length', 'max'=>2),
			array('LexDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('InvoiceNo, LexDate, StockOnHand, partNo, DocNo, QtyIN, QtyOUT, AN, Remarks, OldDocNo', 'safe', 'on'=>'search'),
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
			'InvoiceNo' => 'Invoice No',
			'LexDate' => 'Lex Date',
			'StockOnHand' => 'Stock On Hand',
			'partNo' => 'Part No',
			'DocNo' => 'Doc No',
			'QtyIN' => 'Qty In',
			'QtyOUT' => 'Qty Out',
			'AN' => 'An',
			'Remarks' => 'Remarks',
			'OldDocNo' => 'Old Doc No',
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

		$criteria->compare('InvoiceNo',$this->InvoiceNo,true);
		$criteria->compare('LexDate',$this->LexDate,true);
		$criteria->compare('StockOnHand',$this->StockOnHand);
		$criteria->compare('partNo',$this->partNo,true);
		$criteria->compare('DocNo',$this->DocNo,true);
		$criteria->compare('QtyIN',$this->QtyIN,true);
		$criteria->compare('QtyOUT',$this->QtyOUT,true);
		$criteria->compare('AN',$this->AN,true);
		$criteria->compare('Remarks',$this->Remarks,true);
		$criteria->compare('OldDocNo',$this->OldDocNo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}