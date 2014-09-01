
<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'beta');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
mysql_select_db(DB_NAME, $link) or die("Could not Select Beta");
$count = mysql_query("SELECT count FROM user");
$sizeofarr = 100;
$arrofarr = array(array()); 
$i = 0;
do {
$result = mysql_query("SELECT x, y, user_id FROM cursor_data WHERE user_id =($i + 1) ORDER BY id ASC") or die(mysql_error());
if(mysql_num_rows($result)!=0)
    $rows = mysql_num_rows($result);
    while($rows = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $arrofarr[$i][] = $rows['x'];
        $arrofarr[$i][] = $rows['y'];
    }



    //$arrofarr[$i] = mysql_fetch_array($result, MYSQL_ASSOC) or die("WHOOPS");
$i++;
} while($i < $sizeofarr);//TODO::FIXME

/*

$estimate = array(
  array(13, 242, 184),
  array(12, 145, 143),
  array(1, 54, 24, 234),
  array(1, 174, 145, 244)
  );
  
//*/
for ($i=0; $i < count($arrofarr) - 1; $i++) { 
    
          $arr = $arrofarr[$i];
          $encoded_array = json_encode($arr, JSON_PRETTY_PRINT);
          echo ("
            <img id=\"fish" . $i . "\" class=\"fish\" src=\"img/left_fish.png\">
            <script> 
            var array" . $i . " = " . $encoded_array . ";
            </script>" );
      } 


?>
<style>
.fish {
    position:absolute;
    top: 50%;
    right:50%;
    z-index: 100000;
}
</style>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>


<!--        <script src="Beta-playback.js">         -->
<?php ?>



<script>
$(document).ready(function () {
    
    var i = 1;                     //  set your counter to 1

function playLoop () {           //  create a loop function
   setTimeout(function () {    //  call a 3s setTimeout when the loop is called
    if(array1.length > i)
    move(array1[i], array1[i + 1], 1);
    else if(i - array1.length ==1){die(1);}
    if(array2.length > i)
    move(array2[i], array2[i + 1], 2);
    else if(i - array2.length ==1){die(2);}
    if(array3.length > i)
    move(array3[i], array3[i + 1], 3);
    else if(i - array3.length ==1){die(3);}
    if(array4.length > i)
    move(array4[i], array4[i + 1], 4);
    else if(i - array4.length ==1){die(4);}
    if(array5.length > i)
    move(array5[i], array5[i + 1], 5); 
    else if(i - array5.length ==1){die(5);}
    if(array6.length > i)
    move(array6[i], array6[i + 1], 6); 
    else if(i - array6.length ==1){die(6);}
    if(array7.length > i)
    move(array7[i], array7[i + 1], 7); 
    else if(i - array7.length ==1){die(7);}
    if(array8.length > i)
    move(array8[i], array8[i + 1], 8); 
    else if(i - array8.length ==1){die(8);}
    if(array9.length > i)
    move(array9[i], array9[i + 1], 9); 
    else if(i - array9.length ==1){die(9);}
    if(array10.length > i)
    move(array10[i], array10[i + 1], 10); 
    else if(i - array10.length ==1){die(10);}
    if(array11.length > i)
    move(array11[i], array11[i + 1], 11); 
    else if(i - array11.length ==1){die(11);}
    if(array12.length > i)
    move(array12[i], array12[i + 1], 12); 
    else if(i - array12.length ==1){die(12);}
    if(array13.length > i)
    move(array13[i], array13[i + 1], 13); 
    else if(i - array13.length ==1){die(13);}
    if(array14.length > i)
    move(array14[i], array14[i + 1], 14); 
    else if(i - array14.length ==1){die(14);}
    if(array15.length > i)
    move(array15[i], array15[i + 1], 15); 
    else if(i - array15.length ==1){die(15);}
    if(array16.length > i)
    move(array16[i], array16[i + 1], 16); 
    else if(i - array16.length ==1){die(16);}
    if(array17.length > i)
    move(array17[i], array17[i + 1], 17); 
    else if(i - array17.length ==1){die(17);}
    if(array18.length > i)
    move(array18[i], array18[i + 1], 18); 
    else if(i - array18.length ==1){die(18);}
    if(array19.length > i)
    move(array19[i], array19[i + 1], 19); 
    else if(i - array19.length ==1){die(19);}
    if(array20.length > i)
    move(array20[i], array20[i + 1], 20); 
    else if(i - array20.length ==1){die(20);}
    if(array21.length > i)
    move(array21[i], array21[i + 1], 21); 
    else if(i - array21.length ==1){die(21);}
    if(array22.length > i)
    move(array22[i], array22[i + 1], 22); 
    else if(i - array22.length ==1){die(22);}
    if(array23.length > i)
    move(array23[i], array23[i + 1], 23); 
    else if(i - array23.length ==1){die(23);}
    if(array24.length > i)
    move(array24[i], array24[i + 1], 24); 
    else if(i - array24.length ==1){die(24);}
    if(array25.length > i)
    move(array25[i], array25[i + 1], 25); 
    else if(i - array25.length ==1){die(25);}
    if(array26.length > i)
    move(array26[i], array26[i + 1], 26); 
    else if(i - array26.length ==1){die(26);}
    if(array27.length > i)
    move(array27[i], array27[i + 1], 27); 
    else if(i - array27.length ==1){die(27);}
    if(array28.length > i)
    move(array28[i], array28[i + 1], 28); 
    else if(i - array28.length ==1){die(28);}
    if(array29.length > i)
    move(array29[i], array29[i + 1], 29); 
    else if(i - array29.length ==1){die(29);}
    if(array30.length > i)
    move(array30[i], array30[i + 1], 30); 
    else if(i - array30.length ==1){die(30);}
    if(array31.length > i)
    move(array31[i], array31[i + 1], 31); 
    else if(i - array31.length ==1){die(31);}
   /* if(array32.length > i)
    move(array32[i], array32[i + 1], 32); 
    if(array33.length > i)
    move(array33[i], array33[i + 1], 33); 
    if(array34.length > i)
    move(array34[i], array34[i + 1], 34); 
    if(array35.length > i)
    move(array35[i], array35[i + 1], 35); 
    if(array36.length > i)
    move(array36[i], array36[i + 1], 36); 
    if(array37.length > i)
    move(array37[i], array37[i + 1], 37); 
    if(array38.length > i)
    move(array38[i], array38[i + 1], 38); 
    if(array39.length > i)
    move(array39[i], array39[i + 1], 39); 
    if(array40.length > i)
    move(array40[i], array40[i + 1], 40); 
    if(array41.length > i)
    move(array41[i], array41[i + 1], 41); 
    if(array42.length > i)
    move(array42[i], array42[i + 1], 42); 
    if(array43.length > i)
    move(array43[i], array43[i + 1], 43); 
    if(array44.length > i)
    move(array44[i], array44[i + 1], 44); 
    if(array45.length > i)
    move(array45[i], array45[i + 1], 45); 
    if(array46.length > i)
    move(array46[i], array46[i + 1], 46); 
    if(array47.length > i)
    move(array47[i], array47[i + 1], 47); 
    if(array48.length > i)
    move(array48[i], array48[i + 1], 48); 
    if(array49.length > i)
    move(array49[i], array49[i + 1], 49); 
    if(array50.length > i)
    move(array50[i], array50[i + 1], 50);// */

      i++;                     //  increment the counter
      if (i < 60) {            //  if the counter < 10, call the loop function
         playLoop();             //  ..  again which will trigger another 
      }                        //  ..  setTimeout()
   }, 300)
}

playLoop();                      //  start the loop

    
});

function move(x,y,id) {

    img = $('#fish' + id);
    var offset = img.offset();
    var pageX = offset.left - $(window).scrollLeft();
    var pageY = offset.top - $(window).scrollTop();
    var d = pageX + pageY;
    var left = x - (offset.left);
    var top = y - (offset.top);
    if(left > 0)
    {
        img.attr("src","img/left_fish.png");
    }
    else
    {
        img.attr("src","img/right_fish.png")
    }
    img.animate({
        top:  y +'px',
        left: x + 'px'
    }, 300*d*(.015), 'linear');
}

function die(id) {
    var offset = img.offset();
    var pageY =  $(window).scrollTop();
    dimg = $('#fish' + id);
    dimg.animate({  borderSpacing: -180 }, {
    step: function(now,fx) {
      $(this).css('-webkit-transform','rotate('+now+'deg)'); 
      $(this).css('-moz-transform','rotate('+now+'deg)');
      $(this).css('transform','rotate('+now+'deg)');
    },
    duration:'slow'
},'linear');

  dimg.animate({
  top: "-=" + offset.top * 4 + "px"  
  }, 2500, 'linear');
}



</script>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Better Beta</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">Better Beta</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#services">Services</a>
            </li>
            <li>
                <a href="#portfolio">Portfolio</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Better Beta</h1>
            <h3>Have an over the-shoulder beta experience with just a snippet of JS Code. </h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Better Beta tracks real time feedback on user engagement, right on your own website.</h2>
                    <button class="btn" onCLick="ripple()">Enter the Fish Bowl</button>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>The Code</h2>
                            <hr class="small">
                    <div class="row">
                <script src="https://gist.github.com/amorales28/64b3302600783c033c69.js"></script>
                
        </div>
        <!-- /.container -->
    </section>


    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Built at LSU GeauxHack 2014</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>The Team</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
         </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="25YGA7D6RBKDS">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
          
    </section>
    
    <!-- BEGINNING OF CONTACT FORM -->
<div class="section-page-landing" id="contact">
            <div class="inner-section">
                <div class="contain">
                    <center><h2>Contact Me</h2>
<form class="contact" action="mailer.php" method="post">
<p>Name:</p> <!-- Can choose to customize form.html inputs starting here as needed, but be sure to reference any changes in mailer.php post fields-->
<input type="text" name="name" />
 <p>E-mail:</p> 
<input type="text" name="email" />
<p>Subject:</p>
<input type="text" name="subject" />
<p>Message:</p>
<textarea name="message" syle="width: 45%; text-align: center;">Do not keep track of me!</textarea></p>
<input class="send" type="submit" value="Send"> <!-- Send button-->
</form></center>
                </div>
            </div>
        </div>
        <!--end contact form-->   

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Better Beta 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/jquery.ripples.js"></script>
    
    <!--Ripples that don't work-->
    <script>    
        function ripple(){
		
			$('.header').ripples({
			resolution: 256,
			perturbance: 0.04
			
		});
	}
    </script>
    
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>