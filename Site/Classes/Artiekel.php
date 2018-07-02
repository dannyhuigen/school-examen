<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 7/2/2018
 * Time: 3:25 PM
 */

//Class voor het artiekel object

class Artiekel
{

    //Class variables
    var $productCode;
    var $product;
    var $type;
    var $fabrieksCode;
    var $inkoopPrijs;
    var $verkoopPrijs;


    //Class constructor
    function __construct($productCode, $product, $type, $fabrieksCode, $inkoopPrijs, $verkoopPrijs){
        $this->productCode = $productCode;
        $this->product = $product;
        $this->type = $type;
        $this->fabrieksCode = $fabrieksCode;
        $this->inkoopPrijs = $inkoopPrijs;
        $this->verkoopPrijs = $verkoopPrijs;
    }

}