<?php 

class Voiture implements Vehicule  {
    use Moteur;
    public function demarrer(){
        
        return 'demarrer';
    }
    
    public function stop(){
        return 'stop';
    }
    
    public function faireLePlein(){
        return 'fait le plein !';
    }
}

