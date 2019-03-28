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

        echo "switching to flightdb database<br>";

        $q = 'select distinct airline from delay_info';

        $reslut=mysql_query($q,$con);

        if ($result)   
        {  
            if ($result->num_rows>0)  
            {  
                while ($rows = $result->fetch_array()) {  
                    print_r($rows);  
                    echo "<BR>rows['airline']:".$rows['airline'];  
                }//end while()  
            }else{  
                echo "<BR>查询结果为空！";     
            }//end if()  
        }else{  
            echo "<BR>查询失败！";   
        }

        return $con;
    }

    db_connect();
?>