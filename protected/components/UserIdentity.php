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
		$users = Manager::model()->findByAttributes(array('login'=>$this->username));
		
		if($users===null)
                 {
                    $users2 = Collaborateurs::model()->findByAttributes(array('login'=>$this->username));
                        if($users2===null)
                        {
                            $users=array('admin'=>'admin', );
                                if(!isset($users[$this->username]))
                                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                                        elseif($users[$this->username]!==$this->password)
                                                $this->errorCode=self::ERROR_PASSWORD_INVALID;
                                        else
                                        {$this->errorCode=self::ERROR_NONE;
                                                
                                                
                                                }
                                                    return !$this->errorCode;
                         }
                         else if($users2->password!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
			
		else
                {
                    $this->errorCode=self::ERROR_NONE;
                      
                        
                        }
		return !$this->errorCode;
        		
                        
                }        
		else if($users->password!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
			
		else
                {$this->errorCode=self::ERROR_NONE;
                yii::app()->user->setState(isManager,true);
                }
		return !$this->errorCode;
	
	}
}