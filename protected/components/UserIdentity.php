<?php

class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_username;
	public function getName()
	{
		return $this->_username;
	}
	public function getId()
	{
		return $this->_id;
	}
	public function authenticate()
	{
		$user= Users::model()->find('LOWER(username)=?', array(strtolower($this->username)));
		if($user === null)
		{
			$this->errorCode= self::ERROR_UNKNOWN_IDENTITY;
		}
		elseif($user->password !== md5($this->password))
		{
			$this->errorCode= self::ERROR_PASSWORD_INVALID;
		}
		else
		{
			$this->_id = $user->id;
			$this->_username = $user->userEmail;
			$user->last_login_time=new CDbExpression("NOW()");
			$user->save();
			$this->errorCode= self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

}