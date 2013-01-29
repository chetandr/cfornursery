<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 private $_id;
	 private $_greetName;
	 private $auth;
	public function authenticate(){
		$this->auth=Yii::app()->authManager;		
		$username=strtolower($this->username);
		
		$staff = new Staff();
		$user = $staff->Model()->find('LOWER(user_name) = :uname',array(':uname'=>$username));
		if($user===null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else {			
			$this->_id=$this->username;			
			switch($user->staff_role) {
				case '1':					
					$this->setState('isAdmin', true);
					$this->setState('isModerator', true);
					$this->setState('isCommon', true);					
					break;
				case '3':					
					$this->setState('isAdmin', false);
					$this->setState('isModerator', true);
					$this->setState('isCommon', true);					
					break;
				case '2':					
					$this->setState('isAdmin', false);
					$this->setState('isModerator', false);
					$this->setState('isCommon', true);
					break;					
			}		
								
			$this->setState('title', $user->staff_name);
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
		
	}
	
	public function getId()	{
		return $this->_id;
	}


}