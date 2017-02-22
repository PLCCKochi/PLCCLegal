<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') | @yield('company')</title>
<!--CUSTOM CSS-->
<link href="../../../css/custom.min.css" rel="stylesheet" type="text/css">
<!--BOOTSTRAP 3.3.5-->
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css">
<!--COLOR CSS-->
<link href="../../../css/color.css" rel="stylesheet" type="text/css">
<!--RESPONDIVE CSS-->
<link href="../../../css/responsive.css" rel="stylesheet" type="text/css">
<!--BXSLIDER CSS-->
<link href="../../../css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<!--CountDown CSS-->
<link href="../../../css/jquery.countdown.css" rel="stylesheet" type="text/css">
<!--OWL CAROUSEL CSS-->
<link href="../../../css/owl.carousel.css" rel="stylesheet" type="text/css">
<!--SCROLL FOR SIDEBAR NAVIGATION-->
<link href="../../../css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<!--PrettyPhoto CSS-->
<link href="../../../css/prettyPhoto.min.css" rel="stylesheet" type="text/css">
<!--FONTAWESOME 4.4.0 CSS-->
<link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--FAVICON ICON-->
<link rel="icon" href="../../../images/favicon.ico" type="image/x-icon">
<!--GOOGLE FONTS-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="cp-theme-style-1">
<!--WRAPPER START-->
<div id="wrapper"> 
  @yield('content')
</div>
<!--WRAPPER END--> 

<!--JQUERY START--> 
<!--jQuery 1.11.3--> 
<script src="../../../js/jquery-1.11.3.min.js"></script> 
<!--BOOTSTRAP--> 
<script src="../../../js/bootstrap.min.js"></script> 
<!--BXSLIDER JS--> 
<script src="../../../js/jquery.bxslider.min.js"></script> 
<!--OWL CAROUSEL JS--> 
<script src="../../../js/owl.carousel.min.js"></script> 
<!--RUNNING COUNTER JS--> 
<script src="../../../js/waypoint.js"></script> 
<script src="../../../js/jquery.counterup.min.js"></script> 
<!--FORM OPTION JS--> 
<script src="../../../js/jquery.noconflict.js"></script> 
<script src="../../../js/theme-scripts.js"></script> 
<!--SCROLL FOR SIDEBAR NAVIGATION--> 
<script src="../../../js/jquery.mCustomScrollbar.concat.min.js"></script> 
<!--Isotope JS-->
<script src="../../../js/isotope.pkgd.min.js"></script>
<!--PrettyPhoto JS--> 
<script src="../../../js/jquery.prettyPhoto.min.js"></script> 
<!--Accordion JS-->
<script src="../../../js/jquery.accordion.js"></script> 
<!--Wookmark JS-->
<script src="../../../js/wookmark.js"></script>
<!--doTdoTdoT JS-->
<script src="../../../js/jquery.dotdotdot.js"></script>
<!--JQUERY END-->
<!--AutoLinker JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/autolinker/1.2.0/Autolinker.min.js"></script>
<!--CUSTOM SCRIPT--> 
<script src="../../../js/custom.min.js"></script>
<!--GMaps JS-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_ZbqiSmqgurKxsBpxm67ZGGTqZ56ahvA&callback=initMap"
    async defer></script>
<script type="text/javascript">
	function opennewsearch(){
    window.open('https://www.google.com/search?q=' + document.getElementById('searchtext').value + ' site:@yield('host')', '_blank');
}
</script>
</body>
</html>
