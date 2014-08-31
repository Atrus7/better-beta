<?php ?>

<!DOCTYPE HTML>
<html>
<p>  Watching your every move </p>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="togetherjs_mod/togetherjs.js"></script>

<script>
function store(something)
{

   $.ajax({
          type: 'POST',
          url: 'Beta-recorder.php',
          data: {
          "x": something.x,
          "y": something.y,
          "timestamp": something.timestamp
          //"element": something.element
          },
          success: function(text) { 
          alert("DUDE");
          }
          });

}
        $('document').ready(function() {
            TogetherJS();
        });
</script>




</html>



















