<?php
ini_set( 'display_errors', 1 );
error_reporting(E_ALL);

//include "class.php";
//$main = new _main_;

//$type = "test";

if(isset($_POST['type'])) $type = $_POST['type'];
if(isset($_POST['data'])) $data = $_POST['data'];

//
if(isset($type))
{
//    switch (strip_tags($Type))
//    {
//        case "t_insert_data": $main->InsertData($Data); break;
//        case "t_get_data": $main->GetData(); break;
//    }

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "testdb";

//    $data = "kirara"; // Dummy

    $db = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("insert into data_table (name, age) values ('" . $data . "', 43)");
//    $db->exec("insert into data_table (name, age) values ('Hoge', 43)");
}


//$db_host = "localhost";
//$db_user = "root";
//$db_password = "";
//$db_name = "testdb";
//
//$db = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_password);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$db->exec("insert into data_table (name, age) values ('hizuru', 43)");