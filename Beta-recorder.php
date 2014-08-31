<?
define('DB_HOST', '127.0.0.1');
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
  $count = mysql_query("SELECT count FROM timestamp WHERE rel_time = $rel_time");
  if(mysql_num_rows($count) ==0)
  {
    $count = 1;
  }
  $cid = 'cid' . $count;

  mysql_query("INSERT INTO cursor_data (x, y, user_id) VALUES($x,$y, $count)");
  mysql_query("INSERT INTO timestamp (rel_time, $cid, count) VALUES ($rel_time, $count, $count) ON DUPLICATE KEY UPDATE count=count+1");
}
else {
    http_response_code(500);
}

?>
<p> PHP IS NOT <? echo($alert);?> RUNNING...</p>
