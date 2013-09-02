<?php

/**
 * This is the model class for table "c_security".
 *
 * The followings are the available columns in table 'c_security':
 * @property string $Emp_Code
 * @property string $FirstName
 * @property string $MI
 * @property string $LastName
 * @property string $Level
 * @property string $Passwrd
 * @property string $AcctName
 * @property string $Bday
 * @property string $LocalNo
 * @property string $CellPhone
 * @property string $Email
 * @property string $TermsConditions
 * @property string $Position
 * @property integer $Resigned
 * @property integer $PRFPLUS
 * @property integer $Optimal
 * @property integer $ServiceCtr
 * @property integer $Unison
 * @property integer $LogIn
 * @property string $LastLog
 * @property string $Sex
 * @property string $religion
 * @property string $citizenship
 * @property string $civilstatus
 * @property string $completeaddress
 */
class CSecurity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CSecurity the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CDbConnection database connection
	 */
	public function getDbConnection()
	{
		return Yii::app()->dbadvert;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'c_security';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Emp_Code', 'required'),
			array('Resigned, PRFPLUS, Optimal, ServiceCtr, Unison, LogIn', 'numerical', 'integerOnly'=>true),
			array('Emp_Code, Passwrd, Sex, religion, citizenship, civilstatus, completeaddress', 'length', 'max'=>45),
			array('FirstName, LastName, CellPhone', 'length', 'max'=>20),
			array('MI', 'length', 'max'=>1),
			array('Level', 'length', 'max'=>36),
			array('AcctName', 'length', 'max'=>3),
			array('Bday', 'length', 'max'=>5),
			array('LocalNo', 'length', 'max'=>12),
			array('Email', 'length', 'max'=>75),
			array('Position', 'length', 'max'=>50),
			array('TermsConditions, LastLog', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Emp_Code, FirstName, MI, LastName, Level, Passwrd, AcctName, Bday, LocalNo, CellPhone, Email, TermsConditions, Position, Resigned, PRFPLUS, Optimal, ServiceCtr, Unison, LogIn, LastLog, Sex, religion, citizenship, civilstatus, completeaddress', 'safe', 'on'=>'search'),
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
			'Emp_Code' => 'Emp Code',
			'FirstName' => 'First Name',
			'MI' => 'Mi',
			'LastName' => 'Last Name',
			'Level' => 'Level',
			'Passwrd' => 'Passwrd',
			'AcctName' => 'Acct Name',
			'Bday' => 'Bday',
			'LocalNo' => 'Local No',
			'CellPhone' => 'Cell Phone',
			'Email' => 'Email',
			'TermsConditions' => 'Terms Conditions',
			'Position' => 'Position',
			'Resigned' => 'Resigned',
			'PRFPLUS' => 'Prfplus',
			'Optimal' => 'Optimal',
			'ServiceCtr' => 'Service Ctr',
			'Unison' => 'Unison',
			'LogIn' => 'Log In',
			'LastLog' => 'Last Log',
			'Sex' => 'Sex',
			'religion' => 'Religion',
			'citizenship' => 'Citizenship',
			'civilstatus' => 'Civilstatus',
			'completeaddress' => 'Completeaddress',
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

		$criteria->compare('Emp_Code',$this->Emp_Code,true);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('MI',$this->MI,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('Level',$this->Level,true);
		$criteria->compare('Passwrd',$this->Passwrd,true);
		$criteria->compare('AcctName',$this->AcctName,true);
		$criteria->compare('Bday',$this->Bday,true);
		$criteria->compare('LocalNo',$this->LocalNo,true);
		$criteria->compare('CellPhone',$this->CellPhone,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('TermsConditions',$this->TermsConditions,true);
		$criteria->compare('Position',$this->Position,true);
		$criteria->compare('Resigned',$this->Resigned);
		$criteria->compare('PRFPLUS',$this->PRFPLUS);
		$criteria->compare('Optimal',$this->Optimal);
		$criteria->compare('ServiceCtr',$this->ServiceCtr);
		$criteria->compare('Unison',$this->Unison);
		$criteria->compare('LogIn',$this->LogIn);
		$criteria->compare('LastLog',$this->LastLog,true);
		$criteria->compare('Sex',$this->Sex,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('citizenship',$this->citizenship,true);
		$criteria->compare('civilstatus',$this->civilstatus,true);
		$criteria->compare('completeaddress',$this->completeaddress,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function getAcctNameOfUserInModel($id)
	{
		$sql = "SELECT AcctName FROM c_security WHERE Emp_Code = '".$id."' LIMIT 1";
        $result = Yii::app()->db->createCommand($sql)->queryScalar();
		return $result;
	}
}