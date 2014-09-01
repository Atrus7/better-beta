<?
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'beta');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
mysql_select_db(DB_NAME, $link) or die("Could not Select Beta");
$alert = 0;
if(isset($_POST['timestamp']) && !empty($_POST['timestamp']))
{
  $rel_time = ceil($_POST['timestamp']);
  $x = $_POST['x'];
  $y = $_POST['y'];
  $result = mysql_query("SELECT * FROM user") or die(mysql_error());
  $obj = mysql_fetch_object($result);
  $count = $obj->count + 1;
  $cid = 'cid' . $count;

  mysql_query("INSERT INTO cursor_data (x, y, user_id) VALUES($x,$y, $count)") or die( http_response_code(404));
  $id = mysql_insert_id();
  mysql_query("INSERT INTO timestamp(rel_time, $cid) VALUES($rel_time, $id) ON DUPLICATE KEY UPDATE $cid=$id") or die(mysql_error());

}
else {
   
}

?>
<p> PHP IS RUNNING...</p>
