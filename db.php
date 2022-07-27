
<?php
/**
 * 
 */

   
class DB{
    
public static function getDB() {
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="record";
    $db_table1 = "info"; // Имя Таблицы БД
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $db;
}
}


?>