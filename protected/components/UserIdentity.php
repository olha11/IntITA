<?php

class UserIdentity extends CUserIdentity
{
	private $_id;

	public function authenticate()
	{
		$record=User::model()->findByAttributes(array('userEmail'=>$this->username));
		if($record===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!CPasswordHelper::verifyPassword($this->password,$record->userPassword))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$record->id;
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