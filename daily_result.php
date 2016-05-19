<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tell Me Yours</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/etline-font.css">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="hero2">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="#"><img src="img/miniicon.png" alt="Sedna logo"></a></div>
                    <div class="header-nav">
                        <nav>
                          <ul class="primary-nav">
                              <li><a href="#" color:black>Future Career</a></li>
                              <li><a href="#">Daily Life Sugestion</a></li>
                              <li><a href="#">Magic 8 Ball</a></li>
                          </ul>
                          <ul class="member-actions">
                                <li><a href="index.html" class="btn-white btn-small">Logout.</a></li>
                          </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                    <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h3>Your menu should be . . .<h3>
                        <h3>===========================================<h3>

                        <?php
                            $conn = new mysqli("127.0.0.1", "root", "", "tellmeyours");
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            
                            $sql = "SELECT menu FROM tb_result WHERE cooking = '".mysql_real_escape_string($_POST['question1'])."' AND 
                                    meat = '".mysql_real_escape_string($_POST['question2'])."' AND
                                    spicy = '".mysql_real_escape_string($_POST['question3'])."' AND
                                    combination = '".mysql_real_escape_string($_POST['question4'])."'";

                            $result = $conn->query($sql);

                            while($row = $result->fetch_array()) {
                                echo  "<h3>".$row["menu"]."<h3>";
                            }

                            $conn->close();
                        ?>
                        <h3>===========================================<h3>
                        <a href="daily.php" class="btn btn-fill btn-large btn-margin-right">Play Again</a><br><br>
                        <a href="guest.php" class="btn btn-fill btn-large btn-margin-right">Back to Menu</a>
                    </div>
                </div>
            </div>
            </header>  
        </section>
    </section>

    

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="bower_components/retina.js/dist/retina.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="bower_components/classie/classie.js"></script>
    <script src="bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>