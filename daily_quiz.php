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
<style>
    div {
        clear: both;
        margin: 0 50px;
    }
</style>


<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="#"><img src="img/miniicon.png" alt="Sedna logo"></a></div>
                    <div class="header-nav">
                        <nav>
                          <ul class="primary-nav">
                              <li><a href="#">Future Career</a></li>
                              <li><a href="guest.php">Daily Life Sugestion</a></li>
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
                </div>
            </header>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h2>Daily Life Question</h2>
                        <p>This question will tell you what do you like for you meal.</p><br>
                        <p>Scoll Down to take the quiz.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
    </section>
<form name="daily_quiz" id="dailyquiz" method="post" action="daily_result.php"  >
<filedset>
    <section class="features section-padding" id="features">
        
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>1. What kind of cooking do you want ?</h3>
                        <p>How your food will be cook.</p>
                        <div>
                            <input value="a" type="radio" name="question1" id="radio1" class="radio" checked required/>
                            <label for="radio1">Fried</label>
                        </div>
                       <div>
                            <input value="b" type="radio" name="question1" id="radio2" class="radio"/>
                            <label for="radio2">Boiled</label>
                        </div>
                        <div>
                            <input value="c" type="radio" name="question1" id="radio3" class="radio"/>
                            <label for="radio3">Stirred</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="device-showcase">
            <div class="devices">
                <div class="ipad-wrap wp1"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="img/devices.png" alt="responsive devices"></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <div class="feature-list">
                        <h3>2. What kind of meat do you prefered ?</h3>
                        <p>Food made with pork, chicken, beef, or seafood</p>
                        <ul class="features-stack">
                            <div>
                            <input value="a" type="radio" name="question2" id="radio4" class="radio" checked required/>
                            <label for="radio4">Seafood</label>
                        </div>
                       <div>
                            <input value="b" type="radio" name="question2" id="radio5" class="radio"/>
                            <label for="radio5">Beef</label>
                        </div>
                        <div>
                            <input value="c" type="radio" name="question2" id="radio6" class="radio"/>
                            <label for="radio6">Pork & Chicken</label>
                        </div>
                        <div>
                            <input value="d" type="radio" name="question2" id="radio7" class="radio"/>
                            <label for="radio7">No Meat</label>
                        </div>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="macbook-wrap wp3"></div>
        <div class="responsive-feature-img"><img src="img/macbook-pro.png" alt="responsive devices"></div>
    </section>
    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>3. Do you want your food to be spicy ?</h3>
                        <p>The flavor of your food will be spicy or may contain chili.</p>
                        <ul class="features-stack">
                            <div>
                            <input value="a" type="radio" name="question3" id="radio8" class="radio" checked required/>
                            <label for="radio8">Spicy</label>
                        </div>
                       <div>
                            <input value="b" type="radio" name="question3" id="radio9" class="radio"/>
                            <label for="radio9">Not Spicy</label>
                        </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="device-showcase">
            <div class="devices">
                <div class="chili-wrap wp1"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="img/devices.png" alt="responsive devices"></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <div class="feature-list">
                        <h3>4. What combination do you prefered in your food ?</h3>
                        <p>Combination with rice, noodles, or other (eg. Steak)</p>
                        <ul class="features-stack">
                            <div>
                            <input value="a" type="radio" name="question4" id="radio10" class="radio" checked required/>
                            <label for="radio10">Noodles</label>
                        </div>
                       <div>
                            <input value="b" type="radio" name="question4" id="radio11" class="radio"/>
                            <label for="radio11">Rice</label>
                        </div>
                        <div>
                            <input value="c" type="radio" name="question4" id="radio12" class="radio"/>
                            <label for="radio12">Other</label>
                        </div>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="noodle-wrap wp3"></div>
        <div class="responsive-feature-img"><img src="img/macbook-pro.png" alt="responsive devices"></div>
    </section>

    <section class="hero-strip section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>
                Are you sure about your answer ? </h2>
                <p>Once you submit your answer, the program will calculate the menu for you.</p>
                <button class="btn btn-ghost btn-accent btn-large">SUBMIT !</a>
            </div>
        </div>
    </section>
</fieldset>
</form>

    

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
