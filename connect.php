<?php
$dbhost = '112.213.89.106';
$dbuser = 'donghoom_admin';
$dbpass = 'omega';
$conn 	= mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
$dbname = 'donghoom_dongho201107';
$query  = 'select * from users;';
mysql_select_db($dbname);
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {    
    echo $row['fullname']; 
	echo '<br/>';	
}
?>