<?php
@$fp = fopen("logfile.html", "ab");
if(!$fp) {
echo "Could not open file for logging";
}
else {
$str = $_SERVER["REMOTE_ADDR"];
$str .= " ";
$str .= date("H:i, d M Y");
fwrite($fp, $str);
fclose($fp);
}
?> 
