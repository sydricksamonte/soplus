<?php

/**
 * This is the model class for table "so_detail".
 *
 * The followings are the available columns in table 'so_detail':
 * @property string $DetailNo
 * @property string $DocNo
 * @property double $Qty
 * @property string $UnitMeas
 * @property string $ItemDesc
 * @property string $CurSign
 * @property double $UnitPrice
 * @property string $InvoiceNo
 * @property string $InvoiceDte
 * @property string $PORemarks
 * @property double $FullComm
 * @property string $CommB
 * @property string $CommC
 * @property string $War_Parts
 * @property string $War_Labor
 * @property string $War_Onsite
 * @property string $TransactionNo
 * @property string $Lexmark
 * @property string $Field1
 * @property string $Field2
 * @property string $Field3
 * @property string $Field4
 * @property integer $chngePrice
 * @property string $partNo
 * @property integer $bold
 */
class SoDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SoDetail the static model class
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
		return 'so_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('chngePrice, bold', 'numerical', 'integerOnly'=>true),
			array('Qty, UnitPrice, FullComm', 'numerical'),
			array('DocNo, UnitMeas, InvoiceNo, Lexmark', 'length', 'max'=>10),
			array('CurSign', 'length', 'max'=>3),
			array('CommB, CommC, Field1, Field2, Field3, Field4', 'length', 'max'=>50),
			array('War_Parts, War_Labor, War_Onsite', 'length', 'max'=>40),
			array('TransactionNo', 'length', 'max'=>5),
			array('partNo', 'length', 'max'=>45),
			array('ItemDesc, InvoiceDte, PORemarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DetailNo, DocNo, Qty, UnitMeas, ItemDesc, CurSign, UnitPrice, InvoiceNo, InvoiceDte, PORemarks, FullComm, CommB, CommC, War_Parts, War_Labor, War_Onsite, TransactionNo, Lexmark, Field1, Field2, Field3, Field4, chngePrice, partNo, bold', 'safe', 'on'=>'search'),
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
			'DetailNo' => 'Detail No',
			'DocNo' => 'Doc No',
			'Qty' => 'Qty',
			'UnitMeas' => 'Unit Meas',
			'ItemDesc' => 'Item Desc',
			'CurSign' => 'Cur Sign',
			'UnitPrice' => 'Unit Price',
			'InvoiceNo' => 'Invoice No',
			'InvoiceDte' => 'Invoice Dte',
			'PORemarks' => 'Poremarks',
			'FullComm' => 'Full Comm',
			'CommB' => 'Comm B',
			'CommC' => 'Comm C',
			'War_Parts' => 'War Parts',
			'War_Labor' => 'War Labor',
			'War_Onsite' => 'War Onsite',
			'TransactionNo' => 'Transaction No',
			'Lexmark' => 'Lexmark',
			'Field1' => 'Field1',
			'Field2' => 'Field2',
			'Field3' => 'Field3',
			'Field4' => 'Field4',
			'chngePrice' => 'Chnge Price',
			'partNo' => 'Part No',
			'bold' => 'Bold',
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

		$criteria->compare('DetailNo',$this->DetailNo,true);
		$criteria->compare('DocNo',$this->DocNo,true);
		$criteria->compare('Qty',$this->Qty);
		$criteria->compare('UnitMeas',$this->UnitMeas,true);
		$criteria->compare('ItemDesc',$this->ItemDesc,true);
		$criteria->compare('CurSign',$this->CurSign,true);
		$criteria->compare('UnitPrice',$this->UnitPrice);
		$criteria->compare('InvoiceNo',$this->InvoiceNo,true);
		$criteria->compare('InvoiceDte',$this->InvoiceDte,true);
		$criteria->compare('PORemarks',$this->PORemarks,true);
		$criteria->compare('FullComm',$this->FullComm);
		$criteria->compare('CommB',$this->CommB,true);
		$criteria->compare('CommC',$this->CommC,true);
		$criteria->compare('War_Parts',$this->War_Parts,true);
		$criteria->compare('War_Labor',$this->War_Labor,true);
		$criteria->compare('War_Onsite',$this->War_Onsite,true);
		$criteria->compare('TransactionNo',$this->TransactionNo,true);
		$criteria->compare('Lexmark',$this->Lexmark,true);
		$criteria->compare('Field1',$this->Field1,true);
		$criteria->compare('Field2',$this->Field2,true);
		$criteria->compare('Field3',$this->Field3,true);
		$criteria->compare('Field4',$this->Field4,true);
		$criteria->compare('chngePrice',$this->chngePrice);
		$criteria->compare('partNo',$this->partNo,true);
		$criteria->compare('bold',$this->bold);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}