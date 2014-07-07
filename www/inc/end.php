<?php
/*
 *  © CoinWheel 
 *  Demo: http://www.btcircle.com
 *  Please do not copy or redistribute.
 *  More licences we sell, more products we develop in the future.  
*/

mysql_query("UPDATE `players` SET `time_last_active`=NOW(),`lastip`='".$_SERVER['REMOTE_ADDR']."' WHERE `id`=$player[id] LIMIT 1");
mysql_close();
?>