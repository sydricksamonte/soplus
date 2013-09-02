<?php

/**
 * This is the model class for table "somain".
 *
 * The followings are the available columns in table 'somain':
 * @property string $DocNo
 * @property string $DatePlaced
 * @property string $UserID
 * @property string $Customer
 * @property string $ContactPerson
 * @property string $Terms
 * @property string $PayMode
 * @property string $DeliverDte
 * @property string $AcctOf1
 * @property string $AcctOf2
 * @property string $Instruction
 * @property string $IssueDte
 * @property string $Address
 * @property string $TelNo
 * @property string $Approved
 * @property integer $Faxed
 * @property integer $Emailed
 * @property integer $ForApproval
 * @property string $Classification
 * @property string $ApprovedBy
 * @property string $DRPeriod
 * @property string $Remarks
 * @property string $PODetails
 * @property integer $Cancelled
 * @property string $CancelReason
 * @property string $CancelDateFax
 * @property string $Currency
 * @property string $DeliverTo
 * @property integer $Delilvered
 * @property string $FANo
 * @property string $ApprovedDateTime
 * @property integer $PickedUp
 * @property integer $FaxedAsFA
 * @property string $Field1
 * @property string $Field2
 * @property string $Field3
 * @property string $Field4
 * @property integer $FA_RGB
 * @property integer $FA_Other1
 * @property integer $FA_Other2
 * @property string $RefDocNo
 * @property string $RefInvDtr
 * @property string $DateSubmitted
 */
class Somain extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Somain the static model class
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
		return 'somain';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('Classification, DocNo', 'required'),
			array('TelNo', 'numerical'),
			array('DocNo, UserID, Approved, ApprovedBy, FANo', 'length', 'max'=>20),
			array('Customer, ContactPerson', 'length', 'max'=>75),
			array('Terms, PayMode', 'length', 'max'=>35),
			array('DeliverDte, TelNo, DRPeriod, Field1, Field2, Field3, Field4', 'length', 'max'=>50),
			array('AcctOf1, Currency', 'length', 'max'=>3),
			array('AcctOf2', 'length', 'max'=>25),
			array('Address, Remarks, CancelReason', 'length', 'max'=>255),
			array('Classification', 'length', 'max'=>2),
			array('PODetails', 'length', 'max'=>100),
			array('DeliverTo', 'length', 'max'=>250),
			array('RefDocNo, RefInvDtr', 'length', 'max'=>45),
			array('DocNo, DatePlaced,ForApproval, Instruction, IssueDte, CancelDateFax, ApprovedDateTime, DateSubmitted', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DocNo, DatePlaced, UserID, Customer, ContactPerson, Terms, PayMode, DeliverDte, AcctOf1, AcctOf2, Instruction, IssueDte, Address, TelNo, DateSubmitted', 'safe', 'on'=>'search'),
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
			'DocNo' => 'Doc No',
			'DatePlaced' => 'Date Placed',
			'UserID' => 'User',
			'Customer' => 'Customer',
			'ContactPerson' => 'Contact Person',
			'Terms' => 'Terms',
			'PayMode' => 'Pay Mode',
			'DeliverDte' => 'Deliver Dte',
			'AcctOf1' => 'Account Of',
			'AcctOf2' => 'If not Account of User, this is for',
			'Instruction' => 'Instruction',
			'IssueDte' => 'Issue Dte',
			'Address' => 'Address',
			'TelNo' => 'Tel No',
			'Approved' => 'Approved',
			'Faxed' => 'Faxed',
			'Emailed' => 'Emailed',
			'ForApproval' => 'For Approval',
			'Classification' => 'Classification',
			'ApprovedBy' => 'Approved By',
			'DRPeriod' => 'Drperiod',
			'Remarks' => 'Remarks',
			'PODetails' => 'Podetails',
			'Cancelled' => 'Cancelled',
			'CancelReason' => 'Cancel Reason',
			'CancelDateFax' => 'Cancel Date Fax',
			'Currency' => 'Currency',
			'DeliverTo' => 'Deliver To',
			'Delilvered' => 'Delilvered',
			'FANo' => 'Fano',
			'ApprovedDateTime' => 'Approved Date Time',
			'PickedUp' => 'Picked Up',
			'FaxedAsFA' => 'Faxed As Fa',
			'Field1' => 'Field1',
			'Field2' => 'Field2',
			'Field3' => 'Field3',
			'Field4' => 'Field4',
			'FA_RGB' => 'Fa Rgb',
			'FA_Other1' => 'Fa Other1',
			'FA_Other2' => 'Fa Other2',
			'RefDocNo' => 'Ref Doc No',
			'RefInvDtr' => 'Ref Inv Dtr',
			'DateSubmitted' => 'Date Submitted',
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

		$criteria->compare('DocNo',$this->DocNo,true);
		$criteria->compare('DatePlaced',$this->DatePlaced,true);
		$criteria->compare('UserID',$this->UserID,true);
		$criteria->compare('Customer',$this->Customer,true);
		$criteria->compare('ContactPerson',$this->ContactPerson,true);
		$criteria->compare('Terms',$this->Terms,true);
		$criteria->compare('PayMode',$this->PayMode,true);
		$criteria->compare('DeliverDte',$this->DeliverDte,true);
		$criteria->compare('AcctOf1',$this->AcctOf1,true);
		$criteria->compare('AcctOf2',$this->AcctOf2,true);
		$criteria->compare('Instruction',$this->Instruction,true);
		$criteria->compare('IssueDte',$this->IssueDte,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('TelNo',$this->TelNo,true);
		$criteria->compare('Approved',$this->Approved,true);
		$criteria->compare('Faxed',$this->Faxed);
		$criteria->compare('Emailed',$this->Emailed);
		$criteria->compare('ForApproval',$this->ForApproval);
		$criteria->compare('Classification',$this->Classification,true);
		$criteria->compare('ApprovedBy',$this->ApprovedBy,true);
		$criteria->compare('DRPeriod',$this->DRPeriod,true);
		$criteria->compare('Remarks',$this->Remarks,true);
		$criteria->compare('PODetails',$this->PODetails,true);
		$criteria->compare('Cancelled',$this->Cancelled);
		$criteria->compare('CancelReason',$this->CancelReason,true);
		$criteria->compare('CancelDateFax',$this->CancelDateFax,true);
		$criteria->compare('Currency',$this->Currency,true);
		$criteria->compare('DeliverTo',$this->DeliverTo,true);
		$criteria->compare('Delilvered',$this->Delilvered);
		$criteria->compare('FANo',$this->FANo,true);
		$criteria->compare('ApprovedDateTime',$this->ApprovedDateTime,true);
		$criteria->compare('PickedUp',$this->PickedUp);
		$criteria->compare('FaxedAsFA',$this->FaxedAsFA);
		$criteria->compare('Field1',$this->Field1,true);
		$criteria->compare('Field2',$this->Field2,true);
		$criteria->compare('Field3',$this->Field3,true);
		$criteria->compare('Field4',$this->Field4,true);
		$criteria->compare('FA_RGB',$this->FA_RGB);
		$criteria->compare('FA_Other1',$this->FA_Other1);
		$criteria->compare('FA_Other2',$this->FA_Other2);
		$criteria->compare('RefDocNo',$this->RefDocNo,true);
		$criteria->compare('RefInvDtr',$this->RefInvDtr,true);
		$criteria->compare('DateSubmitted',$this->DateSubmitted,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function countAllDocNoPattern($dn)
	{
		$sql = "SELECT DocNo FROM somain WHERE DocNo LIKE '".$dn."%' ORDER BY DocNo DESC";
        $numPattern = Yii::app()->db->createCommand($sql)->queryScalar();
        $newstring = substr($numPattern, -4);
        $a = 1;
        $b = $newstring;
        $z = $a + $b;
		return $z;
	}
    public function getAllRelToUser($id)
	{
		$criteria=new CDbCriteria;
		$criteria->compare('UserID',$id);
        $criteria->compare('DocNo',$this->DocNo,true);
		$criteria->compare('DatePlaced',$this->DatePlaced,true);
		$criteria->compare('UserID',$this->UserID,true);
		$criteria->compare('Customer',$this->Customer,true);
		$criteria->compare('ContactPerson',$this->ContactPerson,true);
		$criteria->compare('Terms',$this->Terms,true);
		$criteria->compare('DeliverDte',$this->DeliverDte,true);
		$criteria->compare('Instruction',$this->Instruction,true);
		$criteria->compare('IssueDte',$this->IssueDte,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
     public function createUrl($dataObject)
    {
                // use security manager to encrypt 
                $security = Yii::app()->getSecurityManager();
                $encryptedProperty = $security->encrypt( $dataObject->property,  $user->someKey );
                $utf8Property = utf8_encode($encryptedProperty);
                $property = $utf8Property;
                
                // build url
                $route = implode(UserModule::module()->activateUrl);
                $params = array(
                        'property'=>$property,
                        'someKey'=>$someKey,
                );
                return $this->createAbsoluteUrl($route, $params);
    }
      public function getUserOfSpecDocNo($id)
	{
		$sql = "SELECT UserID FROM somain WHERE DocNo = '".$id."' LIMIT 1";
        $result = Yii::app()->db->createCommand($sql)->queryScalar();
        
		return $result;
	}
}