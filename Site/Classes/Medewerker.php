<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 7/2/2018
 * Time: 3:25 PM
 */

//class voor het medewerker object

class Medewerker
{

    //Class variables
    var $medewerkersCode;
    var $voorLetters;
    var $voorVoegsels;
    var $achterNaam;
    var $naam;
    var $gebruikersNaam;
    var $wachtWoord;

    //Class constructor
    function __construct($medewerkersCode, $voorLetters, $voorVoegsels, $achterNaam, $naam, $gebruikersNaam, $wachtWoord){

        $this->medewerkersCode = $medewerkersCode;
        $this->voorLetters = $voorLetters;
        $this->voorVoegsels = $voorVoegsels;
        $this->achterNaam = $achterNaam;
        $this->naam = $naam;
        $this->gebruikersNaam = $gebruikersNaam;
        $this->wachtWoord = $gebruikersNaam;

    }

}