<?php
$logfile= 'info.html';
$IP = $_SERVER['REMOTE_ADDR'];
$logdetails=  date("F j, Y, g:i a") . ': ' . '<a target=_blank href=http://www.dnsstuff.com/tools/ipall.ch?domain='.$_SERVER['REMOTE_ADDR'].'>'.$_SERVER['REMOTE_ADDR'].'</a>';
$rc = fopen($logfile, "a"); 
fwrite($rc, $logdetails);
fwrite($rc, "<br />_____ Provided by JavaScripthost.com _____");
fwrite($rc, "<br>");
fclose($rc); 
?>
