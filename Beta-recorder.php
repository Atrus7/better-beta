<?
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'beta');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
//$con = mysql_connect("localhost", "", "");
mysql_select_db(DB_NAME, $link) or die("Could not Select Beta");

mysql_query("INSERT INTO cursor_data (x, y, user_id) VALUES(20,30,40)");
?>
<p> PHP IS NOT <? echo("NOT");?> RUNNING...</p>
