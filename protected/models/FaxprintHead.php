<?php

/**
 * This is the model class for table "faxprint_head".
 *
 * The followings are the available columns in table 'faxprint_head':
 * @property string $Customer
 * @property string $ContactPerson
 * @property string $TelNo
 * @property string $Address
 * @property string $DocNo
 * @property string $FANo
 * @property string $DatePlaced
 * @property string $Terms
 * @property string $PayMode
 * @property string $Instruction
 * @property string $IssueDte
 * @property string $DeliverDte
 * @property string $ApprovedBy
 * @property string $Classification
 * @property string $UserID
 * @property string $TradeIn
 * @property string $DeliverTo2
 * @property string $Acct
 * @property string $DRPeriod2
 * @property string $soDescription
 * @property string $Cancel1
 * @property string $Cancel2
 * @property string $Delivered2
 * @property string $PickedUp2
 * @property string $FaxedAsFA2
 * @property string $Approved2
 * @property string $UCS_Company
 * @property double $qty
 * @property string $unitmeas
 * @property string $itemdesc1
 * @property string $cursign
 * @property double $unitPrice
 * @property double $TotalAmt
 * @property double $FullComm
 * @property string $poremarks
 */
class FaxprintHead extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FaxprintHead the static model class
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
		return 'faxprint_head';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Customer, DocNo', 'required'),

			array('qty, unitPrice, TotalAmt, FullComm', 'numerical'),
			array('Customer, ContactPerson', 'length', 'max'=>75),
			array('TelNo, DeliverDte', 'length', 'max'=>50),
			array('Address', 'length', 'max'=>255),
			array('DocNo', 'length', 'max'=>12),
			array('FANo, ApprovedBy, UserID, TradeIn, unitmeas', 'length', 'max'=>10),
			array('Terms, PayMode', 'length', 'max'=>35),
			array('Classification', 'length', 'max'=>2),
			array('DeliverTo2', 'length', 'max'=>263),
			array('Acct, Cancel1', 'length', 'max'=>31),
			array('DRPeriod2', 'length', 'max'=>67),
			array('soDescription', 'length', 'max'=>45),
			array('Cancel2', 'length', 'max'=>292),
			array('Delivered2, PickedUp2', 'length', 'max'=>23),
			array('FaxedAsFA2', 'length', 'max'=>43),
			array('Approved2', 'length', 'max'=>81),
			array('UCS_Company', 'length', 'max'=>16),
			array('cursign', 'length', 'max'=>3),
			array('DatePlaced, Instruction, IssueDte, itemdesc1, poremarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Customer, ContactPerson, TelNo, Address, DocNo, FANo, DatePlaced, Terms, PayMode, Instruction, IssueDte, DeliverDte, ApprovedBy, Classification, UserID, TradeIn, DeliverTo2, Acct, DRPeriod2, soDescription, Cancel1, Cancel2, Delivered2, PickedUp2, FaxedAsFA2, Approved2, UCS_Company, qty, unitmeas, itemdesc1, cursign, unitPrice, TotalAmt, FullComm, poremarks', 'safe', 'on'=>'search'),
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
			'Customer' => 'Customer',
			'ContactPerson' => 'Contact Person',
			'TelNo' => 'Tel No',
			'Address' => 'Address',
			'DocNo' => 'Doc No',
			'FANo' => 'Fano',
			'DatePlaced' => 'Date Placed',
			'Terms' => 'Terms',
			'PayMode' => 'Pay Mode',
			'Instruction' => 'Instruction',
			'IssueDte' => 'Issue Dte',
			'DeliverDte' => 'Deliver Dte',
			'ApprovedBy' => 'Approved By',
			'Classification' => 'Classification',
			'UserID' => 'User',
			'TradeIn' => 'Trade In',
			'DeliverTo2' => 'Deliver To2',
			'Acct' => 'Acct',
			'DRPeriod2' => 'Drperiod2',
			'soDescription' => 'So Description',
			'Cancel1' => 'Cancel1',
			'Cancel2' => 'Cancel2',
			'Delivered2' => 'Delivered2',
			'PickedUp2' => 'Picked Up2',
			'FaxedAsFA2' => 'Faxed As Fa2',
			'Approved2' => 'Approved2',
			'UCS_Company' => 'Ucs Company',
			'qty' => 'Qty',
			'unitmeas' => 'Unitmeas',
			'itemdesc1' => 'Itemdesc1',
			'cursign' => 'Cursign',
			'unitPrice' => 'Unit Price',
			'TotalAmt' => 'Total Amt',
			'FullComm' => 'Full Comm',
			'poremarks' => 'Poremarks',
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

		$criteria->compare('Customer',$this->Customer,true);
		$criteria->compare('ContactPerson',$this->ContactPerson,true);
		$criteria->compare('TelNo',$this->TelNo,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('DocNo',$this->DocNo,true);
		$criteria->compare('FANo',$this->FANo,true);
		$criteria->compare('DatePlaced',$this->DatePlaced,true);
		$criteria->compare('Terms',$this->Terms,true);
		$criteria->compare('PayMode',$this->PayMode,true);
		$criteria->compare('Instruction',$this->Instruction,true);
		$criteria->compare('IssueDte',$this->IssueDte,true);
		$criteria->compare('DeliverDte',$this->DeliverDte,true);
		$criteria->compare('ApprovedBy',$this->ApprovedBy,true);
		$criteria->compare('Classification',$this->Classification,true);
		$criteria->compare('UserID',$this->UserID,true);
		$criteria->compare('TradeIn',$this->TradeIn,true);
		$criteria->compare('DeliverTo2',$this->DeliverTo2,true);
		$criteria->compare('Acct',$this->Acct,true);
		$criteria->compare('DRPeriod2',$this->DRPeriod2,true);
		$criteria->compare('soDescription',$this->soDescription,true);
		$criteria->compare('Cancel1',$this->Cancel1,true);
		$criteria->compare('Cancel2',$this->Cancel2,true);
		$criteria->compare('Delivered2',$this->Delivered2,true);
		$criteria->compare('PickedUp2',$this->PickedUp2,true);
		$criteria->compare('FaxedAsFA2',$this->FaxedAsFA2,true);
		$criteria->compare('Approved2',$this->Approved2,true);
		$criteria->compare('UCS_Company',$this->UCS_Company,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('unitmeas',$this->unitmeas,true);
		$criteria->compare('itemdesc1',$this->itemdesc1,true);
		$criteria->compare('cursign',$this->cursign,true);
		$criteria->compare('unitPrice',$this->unitPrice);
		$criteria->compare('TotalAmt',$this->TotalAmt);
		$criteria->compare('FullComm',$this->FullComm);
		$criteria->compare('poremarks',$this->poremarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}