<?php

class UserIdentity extends CUserIdentity
{
	protected $_id;

	public function authenticate(){
		$user = User::model()->find('LOWER(userEmail)=?', array(strtolower($this->username)));

		if(($user === null) || ($this->password !== $user->userPassword)) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		else {
			$this->_id       = $user->userID;
			$this->username  = $user->userEmail;
			$this->errorCode = self::ERROR_NONE;
		}

		return !$this->errorCode;

	}

	public function getId(){
		return $this->_id;
	}

}