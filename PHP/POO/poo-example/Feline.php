<?php


abstract class Feline{
    protected $name;
    private $furr;
    private $nbPaw;
    
    public function __construct($paramName, $paramFurr, $paramNbPaw){
        $this->name = $paramName;
        $this->furr = $paramFurr;
        $this->nbPaw = $paramNbPaw;
    }
    
    public function getName(){
        return $this->name;
    }
    public function getfurr(){
        return $this->furr;
    }
    
    public function getNbPaw(){
        return $this->nbPaw;
    }
    
    public function presentation(){
        echo $this->name.'vous salue';
    }
    
    
}