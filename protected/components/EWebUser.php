<?php
class EWebUser extends CWebUser{
    protected $_model;
    protected function loadUser()
    {
        if($this->_model===null){
           $this->_model= Pengguna::model()->findByPk($this->id); 
        }
        return $this->_model;
    }
    

    function getLevel()
    {
        $user=$this->loadUser();
        if($user)
            return $user->level;
        return 100;
    }
    function getIsAdmin()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->level)==1;
    }   
    function getIsPimpinan()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->level)==2;
    }
    function getIsUser()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->level)==3;
    }
    
    function getNama()
   {
       $user=  $this->loadUser();
       if($user)
           return $user->username;
       return 100;
   }
    
    
}