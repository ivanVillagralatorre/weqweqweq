<?php
/**
* @author evilnapsis
**/
function connect(){
    

    try{
        $db = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_d6be82b678b6e84",'bc2d8f1edc0fa4','fbfee04e');
        echo "conexión correcta a la base de datos";
        return $db;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}

connect();

?>
