<html>

<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'beta');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
mysql_select_db(DB_NAME, $link) or die("Could not Select Beta");

$arrofarr = array(array()); 
$i = 0;
do {
$result = mysql_query("SELECT x, y, user_id FROM cursor_data WHERE user_id =($i + 1)") or die(mysql_error());
$arrofarr[$i] = mysql_fetch_array($result, MYSQL_NUM) or die("WHOOPS");
$i++;
} while($i < 3);//TODO:: FIXME

/*

$estimate = array(
  array(13, 242, 184),
  array(12, 145, 143),
  array(1, 54, 24, 234),
  array(1, 174, 145, 244)
  );
  
//*/
for ($i=0; $i < count($arrofarr); $i++) { 
    
          $arr = $arrofarr[$i];
          $encoded_array = ('"' . implode('","', $arr) . '"');
          echo ("
            <img id=\"fish" . $i . "\" class=\"fish\" src=\"Content/img/glyphicons_halflings_007_user.png\">
            <script> 
            var array" . $i . " = [" . $encoded_array . "];


            </script>" );
      } //*/


?>
<style>
.fish {
    position:absolute;
    z-index: 100000;
}
</style>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>


<img class="fish" src="Content/img/glyphicons_halflings_007_user.png">
<img class="fish" src="Content/img/glyphicons_halflings_007_user.png" style="top:30px;">

</img>
<p> Hello </p>
</html>
<!--		<script src="Beta-playback.js">			-->
<?php ?>



<script>
$(document).ready(function () {
    

    for (var i = 0; i < 4; i++) {
    move(array1[i], array1[i + 1], 1);
    move(array2[i], array2[i + 1], 2);
    move(array3[i], array3[i + 1], 3);
    move(array4[i], array4[i + 1], 4);
    //array2[i]
    //array3[i]
    /*array4[i]
    array5[i]
    array6[i]
    array7[i]
    array8[i]
    array9[i]
    array10[i]
    array11[i]
    array12[i]
    array13[i]
    array14[i]
    array15[i]
    array16[i]
    array17[i]
    array18[i]
    array19[i]
    array20[i]
    array21[i]
    array22[i]
    array23[i]
    array24[i]
    array25[i]
    array26[i]
    array27[i]
    array28[i]
    array29[i]
    array30[i]
    array31[i]
    array32[i]
    array33[i]
    array34[i]
    array35[i]
    array36[i]
    array37[i]
    array38[i]
    array39[i]
    array40[i]
    array41[i]
    array42[i]
    array43[i]//*/
    };
    
});

function move(x,y,id) {

    img = $('#fish' + id);
    var offset = img.offset();
    var top = x - offset.top;
    var left = y - offset.left;
    img.animate({
        top: "+="+ x +'px',
        left: "+=" + y + 'px'
    }, 1000, 'linear');
}


</script>
