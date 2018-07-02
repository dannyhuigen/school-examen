<?php

//Class voor locatie object

class Locatie
{

    //Class variables
    var $locatieCode;
    var $locatie;


    //Class constructor
    function __construct($locatieCode , $locatie){
        $this->locatieCode = $locatieCode;
        $this->locatie = $locatie;
    }

}