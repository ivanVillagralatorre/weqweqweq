<?php
/**
* @author evilnapsis
**/
function connect(){
    

    try{
        $db = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_12f326f918fecfd",'b677726516bfe2','f702ddf6');
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
