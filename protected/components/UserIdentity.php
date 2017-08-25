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
	public function authenticate()
	{
                $criteria = new CDbCriteria;
                $criteria->addCondition('login = "' . $this->username . '"');
		$usuario = usuarios::model()->find($criteria);
                
		if ((!isset($usuario['login'])) && (!isset($usuario['senha']))) {
                    $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
                } else if ($usuario['login'] != $this->username) {
                    $this->errorCode = self::ERROR_USERNAME_INVALID;
                } else if ($usuario['senha'] != md5($this->password)) {
                    $this->errorCode = self::ERROR_PASSWORD_INVALID;
                } else {
                    $this->errorCode=self::ERROR_NONE;
                    return !$this->errorCode;
                }  
	}
}