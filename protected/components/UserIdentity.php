<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	 // Need to store the user's ID:
	 private $_id;


	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
	
		$user = CSecurity::model()->findByAttributes(array('Emp_Code'=>$this->username));
		if ($user===null) { // No user found!
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		} else if ( strtolower ($user->Passwrd) !==  strtolower ($this->password) ) { // Invalid password!
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else { // Okay!
		    $this->errorCode=self::ERROR_NONE;
		    // Store the role in a session:
			#die($user->Level);
		    $this->setState('role', $user->Level);
			$this->setState('AcctName', $user->AcctName);
			$this->_id = $user->Emp_Code;
		}
		return !$this->errorCode;
	}
	
	public function getId()
	{
	 return $this->_id;
	}

	
} 
