<?php

require 'Vehicule.php';
require 'Moteur.php';
require 'Voiture.php';


$voiture = new Voiture;

echo $voiture->combustion();