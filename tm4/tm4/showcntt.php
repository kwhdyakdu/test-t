<?php

$p = "";
$n = "0";

// Otherwise we connect to our Database
include ($_SERVER['DOCUMENT_ROOT'] . '/tv/config.php');

$query="SELECT DISTINCT cnt FROM tv ORDER BY cnt";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

$i=0;
while ($i < $num) {

$cnt=mysql_result($result,$i,"cnt");

print "<li><a title='$cnt' href='/search-$cnt-Live TV channels-$n.php'><font color='#FFFFFF'>$cnt</font></a></li>&nbsp;&nbsp;";
?>
<!--
<li><a title="<? //print $cnt; ?>" href="<? //print $p; ?>?s=<? //print $n; ?>&q=<? //print $cnt; ?>"><font color="#FFFFFF"><? // print $cnt; ?></font></a></li>&nbsp;&nbsp; -->



<?
$i++;
}



?>
