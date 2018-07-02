<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 7/2/2018
 * Time: 3:25 PM
 */

//Class voor het fabriek object

class Fabriek
{

    //Class variables
    var $fabrieksCode;
    var $fabriek;
    var $telefoon;


    //Class constructor
    function __construct($fabrieksCode, $fabriek, $telefoon){
        $this->fabrieksCode = $fabrieksCode;
        $this->fabriek = $fabriek;
        $this->telefoon = $telefoon;
    }

}