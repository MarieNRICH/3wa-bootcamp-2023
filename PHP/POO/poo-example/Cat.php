<?php


class Cat extends Feline{
    private $purr;
    public function __construct($paramName, $paramFurr, $paramNbPaw,$paramPurr){
        parent::__construct($paramName, $paramFurr, $paramNbPaw);
         $this->purr = $paramPurr;
    }
        
      public function presentation(){
        echo 'le chat ' . $this->name.' vous salue';
    }
    

}