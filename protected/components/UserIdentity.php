<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	public function authenticate()
	{
		$record=Users::model()->findByAttributes(array('userEmail'=>$this->userEmail));
		if($record===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!CPasswordHelper::verifyPassword($this->userPasword,$record->userPassword))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$record->userID;
			$this->setState('title', $record->userEmail);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}
}