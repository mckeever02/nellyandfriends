<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nelly Fandango - A children's picture book by Declan Carville </title>
    <meta name="description" content="Nelly Fandango, a children's picture book wrriten by Declan Carville and illustrated by Melvin Carroll" />
    <meta name="keywords" content="children's book, illustration, Belfast, picture book, Nelly, Fandango" />

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Bass Grid CSS -->
    <link href="../css/bass-grid.css" rel="stylesheet" />
</head>
<body>

<?php include('../includes/header.php') ?>

<div class="main alternate group">
	<div class="yellow-pattern">
		<div class="container group">
			<div class="seven">
				<h3>About the Author...</h3>
				<p>Declan Carville was born in Belfast in 1964 and after studying Economics at Queen’s University he worked for a brief period in business before embarking on his writing career.</p>

				<p>Concentrating on Ireland’s rich cultural heritage as a source of inspiration, Declan is the author of a number of children’s picture books including <em>A Day to Remember at the Giant’s Causeway, Valentine O’Byrne Irish Dancer</em> and <em>The Fairy Glen. Nelly Fandango,</em> his second title illustrated by Melvin Carroll, remains a personal favourite… and for obvious reasons. “Even when we think we know where it is we want to be in life, it is always good to prepared for the unexpected,” says Declan. “Nelly is a great character and I love how she deals with the changes that are put her way...”</p>
			</div><!-- end eight -->
            <div class="five">
                <img src="../images/declan.jpg" alt="Photo of the author">
            </div>
		</div><!-- end yellow-pattern -->
	</div><!-- end container -->
	<div class="yellow-bg">
		<div class="container group">
			<div id="video-section" class="twelve">
				<h3>School Visits...</h3>
				<p>During the year Declan enjoys visiting schools throughout Ireland, carrying out creative writing workshops.</p>

				<p>If you are a teacher and you would like Declan to visit your school, you can contact Declan at: <a href="mailto:declan@nellyandfriends.com">declan@nellyandfriends.com</a></p>
                
                <div class="video-container">
				<h3>Play the Video...</h3>
                    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/131635777' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                </div>
			</div><!-- end full column -->
		</div><!-- end container -->
	</div><!-- end yellow-bg -->
</div><!-- end main -->

<?php include('../includes/calltoactions.php') ?>

<footer>
	<div class="container group">
    <img class="come-back-soon" src="../images/come-back-soon.png" alt="come back soon">
  <div class="group">
    <div class="twelve">
      <p>Contact Declan at: <a href="mailto:declan@nellyandfriends.com">declan@nellyandfriends.com</a></p>
    </div><!-- end twelve columns -->
    <div class="nine">
    	<p class="small"><strong>The Apple logo, iBooks, iPhone, and iPod touch are trademarks of Apple Inc., registered in the U.S. and other countries.</strong></p>
    </div><!-- ten columns -->
    <div class="three">
    	<a href="https://itunes.apple.com/gb/book/nelly-fandango/id1004543974?mt=11" class="buy-button pull-right"></a>
    </div><!-- three columns -->

    <div class="eight">
			<p class="small small-print"><strong>Supported by the Creative Industries Innovation Fund</strong></p>
    </div><!-- six -->
    <div class="two ">
    	<img src="../images/arts-council-logo.svg" alt="Arts Council logo">
    </div>
    <div class="two">
    	<img src="../images/dcal-logo.svg" alt="DCAL logo">
    </div>
  </div><!-- footer-content -->

  </div><!-- end container -->
</footer><!-- /footer -->

<script src="../js/modernizr.js"></script>
<script>
  //SVG fallback
  if (!Modernizr.svg) {
        var imgs = document.getElementsByTagName('img');
        var svgExtension = /.*\.svg$/
        var l = imgs.length;
        for(var i = 0; i < l; i++) {
            if(imgs[i].src.match(svgExtension)) {
                imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
                console.log(imgs[i].src);
            }
        }
    };
</script>
</body>
</html>