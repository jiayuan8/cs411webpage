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

        mysql_select_db('flightdb',$con);

        echo "switching to flightdb database";

        $q = 'select distinct airline from delay_info';

        $reslut=mysql_query($q,$con);

        echo $q;

        return $con;
    }

    db_connect();
?>