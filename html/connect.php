<?php
    function db_connect(){
        $server="localhost";
        $db_username="root";
        $db_password="cs411fullscore";

        $con = mysql_connect($server,$db_username,$db_password);
        if(!$con){
            die("can't connect".mysql_error());
        }
        echo "connected";
        return $con;
    }

    db_connect();
?>