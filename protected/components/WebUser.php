<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebUser
 *
 * @author Lucas
 */
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  // Return first name.
  // access it by Yii::app()->user->nome
  public function getNome(){
    $user = $this->loadUser(Yii::app()->user->name);
    return isset($user)?$user->nome:'';
  }
  
  public function getSenha() {
    $user = $this->loadUser(Yii::app()->user->name);
     return isset($user)?$user->senha:'';
  }
  
  public function getUserID() {
    $user = $this->loadUser(Yii::app()->user->name);
     return isset($user)?$user->usuariosId:-1;
  }
  
  public function getEmail() {
    $user = $this->loadUser(Yii::app()->user->name);
    return isset($user)?$user->email:'';
  }
  
  // Load user model.
  protected function loadUser($login=null)
    {
        if($this->_model===null)
        {
            if($login!==null) {
                $criteria = new CDbCriteria();
                $criteria->condition = 'login=:login';
                $criteria->params = array(':login'=>$login);
                $this->_model= usuarios::model()->find($criteria);
            }
        }
        return $this->_model;
    }
}
