<?php 
set_time_limit(0);
error_reporting(E_ALL);
    session_start();
    $nick = trim($_GET['imagekadi']);
if (!$_SESSION[$nick]) {
 
$apifor = "base_api.php";
echo "OK";


   if ($apifor=="error") {
       session_destroy();
    exit;
     
   } 
   $_SESSION[$nick]= $apifor;

} else { 
       echo "OK";
}

$_SESSION['photo']= $_SESSION[$nick];
$_SESSION['kadi']= $nick;
?>