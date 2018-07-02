<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 7/2/2018
 * Time: 3:25 PM
 */

//Class voor het voorraad object

class Voorraad
{

    //Class variables
    var $locatieCode;
    var $productCode;
    var $aantal;


    //Class constructor
    function __construct($locatieCode , $productCode, $aantal){
        $this->locatieCode = $locatieCode;
        $this->productCode = $productCode;
        $this->aantal = $aantal;
    }

}