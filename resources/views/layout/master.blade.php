<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Mitaneon a cleaning and co-working rental services">
    <meta name="author" content="mitaneon">
    <title>@yield('title')</title>

    
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Favicons
<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">-->

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
	<link href="assets/css/font-awesome.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!-- REVOLUTION SLIDER CSS -->
    <link href="rs-plugin/css/settings.css" rel="stylesheet">
    <link href="css/extralayers.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong><a href="tel://08025359144" id="iphone">Call Us Now +2349028511886, +2348025359144</a></strong></div>
                    
                  <!--  <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                             
                                        </div>
                                         
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputUsernameEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="#">Forgot password?</a>
                                        <input type="submit" name="Sign_in" value="Sign in" id="Sign_in" class="button_drop">
                                        <input type="submit" name="Sign_up" value="Sign up" id="Sign_up" class="button_drop outline">
                                    </div>
                                </div><!-- End Dropdown access -
                            </li>
                             
                        </ul>
                    </div>-->
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo_home">
                      <h1><a href="{{route('home')}}" title="Mitaneon">Mitaneon</a></h1>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu"  >
                        <div id="header_menu">
                            <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="{{route('home')}}" style="font-size: 22px; font-weight: bolder;" class="show-submenu">Home</a>
                            </li>
                            
                             <li class="submenu">
                                <a href="{{route('home.clean')}}" style="font-size: 20px; font-weight: bolder;" class="show-submenu">Professional Cleaning </li>
                            <li class="submenu">
                                <a href="{{route('home.property')}}" style="font-size: 20px; font-weight: bolder;" class="show-submenu">Facility Management </a>   </li>
                              <li class="submenu">
                                <a href="{{route('home.contact')}}" style="font-size: 20px; font-weight: bolder;" class="show-submenu">Contact Us </a>
 
                            </li>
                            <li class="submenu">
                                <a href="{{url('/coming-soon')}}" style="font-size: 20px; font-weight: bolder;" class="show-submenu">Co-Work</a></li>
                           
                        </ul>
                    </div><!-- End main-menu -->
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

<!-- Revolution Slider -->
 @yield('content')

   
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                    <a href="tel://08025359144" id="phone">+2349028511886, +2348025359144</a>
                    <a href="mailto:info@mitaneon.com" id="email_footer">info@mitaneon.com</a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div id="social_footer">
                        <ul>
                            <li><a href="https://facebook.com/mitaneonng"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com/mitaneon"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/mitaneon/"><i class="icon-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company-beta/11155470/"><i class="icon-linkedin"></i></a></li>
                             
                        </ul>
                        <p>© Mitaneon <?php echo date('Y') ?></p>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

    <!-- Common scripts -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="js/functions.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/revolution_func.js"></script>
    <script type="text/javascript" src="js/GoogleMap.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBViqS3r4ig5KSf5w1mYBtcF6RXpW76K8&callback=myMap"></script>
 


</body>

</html>