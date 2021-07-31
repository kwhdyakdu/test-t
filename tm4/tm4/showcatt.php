<?php

$p = "";
$n = "0";

// Otherwise we connect to our Database
include ($_SERVER['DOCUMENT_ROOT'] . '/tv/config.php');

$query="SELECT DISTINCT cat FROM tv ORDER BY cat";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

$i=0;
while ($i < $num) {

$cat=mysql_result($result,$i,"cat");

// echo "<li><a title=\"$cat\" href=\"$p?s=$n&q=$cat\"><font color='#FFFFFF'>$cat</font></a></li>&nbsp;&nbsp;";

print "<li><a title='$cat' href='/search-$cat-Live TV channels-$n.php'><font color='#FFFFFF'>$cat</font></a></li>&nbsp;&nbsp;";


$i++;
}



?>
