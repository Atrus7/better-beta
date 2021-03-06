<?php   
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'beta');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
mysql_select_db(DB_NAME, $link) or die("Could not Select Beta");
mysql_query("UPDATE user SET count = count + 1");
?>

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
          }
          });

  

}
        $('document').ready(function() {
            TogetherJS();
        });
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
    <link href="Content/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Content/css/stylish-portfolio.css" rel="stylesheet">

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
                    <p class="lead"><a target="_blank" href="https://enter.beepsend.com/hosts/290be3f3182e31979e45adcd9b53040c/cat_fishbowl_kopt.jpg">Enter the Fish Bowl</a>!</p>
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
                                    <img class="img-portfolio img-responsive" src="Content/img/portfolio-1.jpg">
                                </a>
         </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="Content/img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="Content/img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="Content/img/portfolio-4.jpg">
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
    <script src="Content/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Content/js/bootstrap.min.js"></script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="Content/js/jquery.ripples.js"></script>
    
    <!--Ripples that don't work-->
    <script>    
        $(document).ready(function() {
            $('.header').ripples({
            resolution: 256,
            perturbance: 0.04
            });
        });
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



















