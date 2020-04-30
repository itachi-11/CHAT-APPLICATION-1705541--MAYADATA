<?php

// $db['db_host'] = "localhost";
// $db['db_user'] = "id12394803_devdemons";
// $db['db_pass'] = "devdemons";
// $db['db_name'] = "id12394803_hostel_portal";
$host = "localhost";
$user = "id12491939_root";
$pass = "Rishiraj123@";
$db_name = "id12491939_cms";

    $con = new mysqli($host,$user,$pass,$db_name);
if(!$con)
echo "false";
    function formatDate($date)
    {
        return date('g:i a',strtotime($date));
    }


?>
