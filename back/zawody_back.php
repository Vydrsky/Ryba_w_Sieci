<?php

require_once "db_connect.php";
try
{
    $query = $db->prepare('SELECT title,date,type,fishery,start_time FROM zawody');
    $query->execute();
   
   
    $_SESSION['key'] = $query->fetchAll(PDO::FETCH_ASSOC);
    
}
catch(PDOException $ex)
{
 echo $ex->getMessage();   
 exit('error ');
}
?>