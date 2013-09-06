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
 /**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	
	//public $rememberMe;

    public $Emp_Code;
    public $Passwrd;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('Emp_Code, Passwrd', 'required'),
			// rememberMe needs to be a boolean
			#array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('Passwrd', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			//'rememberMe'=>'Remember me next time',
			'Emp_Code'=>'Username',
			'Passwrd'=>'Password',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{	
		if(!$this->hasErrors())  // we only want to authenticate when no input errors
		{
			$identity=new UserIdentity($this->Emp_Code,$this->Passwrd);
			$identity->authenticate();
			switch($identity->errorCode)
			{
				case UserIdentity::ERROR_NONE:
					Yii::app()->user->login($identity);
					return true;
					break;
				case UserIdentity::ERROR_USERNAME_INVALID:
					$this->addError('Emp_Code','Username is incorrect.');
					break;
				case  UserIdentity::ERROR_PASSWORD_INVALID:
					Yii::app()->user->login($identity);
					$this->addError('Passwrd','Username or Password is incorrect.');
					break;
			}
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->Emp_Code,$this->Passwrd);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			#$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity);
			return true;
		}
		else
        {
			return false;
        }
	}
}
