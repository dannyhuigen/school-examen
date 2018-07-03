<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 7/2/2018
 * Time: 3:16 PM
 */

//DbHandler class die al het contact met de database handelt

class DbHandler
{

    var $ipToConnect = "localhost";
    var $dataBaseName = "school-examen";
    var $dataBaseUserName = "root";
    var $dataBaseUserPassword = "";
    var $connection;
    var $errorMessage;
    var $

    //Constructor voor DB handler
    function __construct(){
        //Creates new connection with database
        $this->connection = new mysqli($this->ipToConnect , $this->dataBaseUserName, $this->dataBaseUserPassword, $this->dataBaseName);
        $this->testConnection();
    }

    //functie die test of er een connectie kan gemaakt worden
    function testConnection(){
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    //functie die fabriek object returned met fabriekscode;
    function getFabriek($fabriekId){
        $query = "SELECT * FROM fabriek WHERE Fabriekscode = ".$fabriekId . ";";
        $result = mysqli_query($this->connection, $query);
        $row = mysqli_fetch_assoc($result);
        $fabriekObject = new Fabriek($row["Fabriekscode"] , $row["Fabriek"] , $row["Telefoon"]);
        return $fabriekObject;
    }

    function deleteFabriek($fabriekId){
        $query = "DELETE FROM fabriek WHERE Fabriekscode = " . $fabriekId . ";";

        if ($this->connection->query($query) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->connection->error;
        }
    }

}