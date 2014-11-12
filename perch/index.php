<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      Welcome to Bodhi Tree Studio
    </title>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
    <meta description='Page title'>
    <link href='assets/stylesheets/vendor/reset.css' rel='stylesheet' type='text/css'>
    <link href='assets/stylesheets/main.css' rel='stylesheet' type='text/css'>
    <link href='assets/stylesheets/jquery.bxslider.css' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <link href='assets/stylesheets/ie8.css' rel='stylesheet' type='text/css'>
      <script src='assets/javascripts/vendor/html5shiv.min.js'></script>
    <![endif]-->
    <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,300italic,400italic,600italic" rel='stylesheet' type='text/css'>
    <script src='assets/javascripts/vendor/jquery-1.9.1.js'></script>
    <script src='assets/javascripts/wsLaunch.js'></script>
    <script src='assets/javascripts/jquery.slicknav.js'></script>
    <script src='assets/javascripts/jquery.bxslider.js'></script>
    <script>
      $(document).ready(function(){
        $('#menu').slicknav();
        $('.bxslider').bxSlider({
          mode: 'fade',
          auto: true,
          autoHover: true,
          autoControls: true,
        });
      });
    </script>
    <script>
      function launchWS(winName) { 
        //window height and width
        myHeight = screen.height*.80;
        myWidth = 784;
      
        //widow height bounds
        if ( myHeight < 556 ) {
          myHeight = 556;
        } else if (myHeight>700) {
          myHeight = 700;
        }
      
        //get screen size, and cacl center screen positioning
        var height = screen.height;
        var width = screen.width;
        var leftpos = width / 2 - myWidth / 2;
        var toppos = (height / 2 - myHeight / 2) - 40;
      
        //open window
        msgWindow=window.open(winName,"ws_window","toolbar=no,location=no,directories=no,resizable=yes,menubar=no,scrollbars=no,status=yes,width="+ myWidth + ",height="+ myHeight + ", left="+ leftpos + ",top=" + toppos); 
        //focus window
        setTimeout('msgWindow.focus()',1);
      }
    </script>
  </head>
  <body class='default'>
    <div id='wrap'>
      <div id='main'>
        <header class='home'>
          <div class='social-home'>
            <div class='social-links'>
              <div class='class-link'>
                <a href="javascript:launchWS('http://clients.mindbodyonline.com/ws.asp?studioid=149520&amp;stype=-7');">
                  Reserve a spot
                </a>
              </div>
              <div class='social'>
                <a href='https://www.facebook.com/bodhitreetoronto' target='blank'>
                  <img src='assets/images/facebook.png'>
                </a>
                <a href='https://twitter.com/ombodhitree' target='blank'>
                  <img src='assets/images/twitter.png'>
                </a>
              </div>
            </div>
          </div>
          <div class='menu-home'>
            <ul id='menu-desktop'>
              <li>
                <span>About the Studio</span>
                <ul>
                  <li>
                    <a href='backstory.php'>Backstory</a>
                  </li>
                  <li>
                    <a href='what-to-expect.php'>New Students</a>
                  </li>
                  <li>
                    <a href='teacher-profiles.php'>Teacher Profiles</a>
                  </li>
                </ul>
              </li>
              <li>
                <span>Class Information</span>
                <ul class='class'>
                  <li>
                    <a href="javascript:launchWS('http://clients.mindbodyonline.com/ws.asp?studioid=149520&amp;stype=-7');">Reserve a spot in Class</a>
                  </li>
                  <li>
                    <a href='class-descriptions.php'>Class Descriptions</a>
                  </li>
                  <li>
                    <a href='class-pricing.php'>Class Pricing</a>
                  </li>
                </ul>
              </li>
              <li>
                <span>Contact Us</span>
                <ul class='contact'>
                  <li>
                    <a href='connect.php'>Connect</a>
                  </li>
                  <li>
                    <a href='location.php'>Location</a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class='clear'></div>
          </div>
          <ul id='menu'>
            <li>
              <span>About the Studio</span>
              <ul>
                <li>
                  <a href='backstory.php'>Backstory</a>
                </li>
                <li>
                  <a href='what-to-expect.php'>New Students</a>
                </li>
                <li>
                  <a href='teacher-profiles.php'>Teacher Profiles</a>
                </li>
              </ul>
            </li>
            <li>
              <span>Class Information</span>
              <ul class='class'>
                <li>
                  <a href="javascript:launchWS('http://clients.mindbodyonline.com/ws.asp?studioid=149520&amp;stype=-7');">Reserve a spot in Class</a>
                </li>
                <li>
                  <a href='class-descriptions.php'>Class Descriptions</a>
                </li>
                <li>
                  <a href='class-pricing.php'>Class Pricing</a>
                </li>
              </ul>
            </li>
            <li>
              <span>Contact Us</span>
              <ul class='contact'>
                <li>
                  <a href='connect.php'>Connect</a>
                </li>
                <li>
                  <a href='location.php'>Location</a>
                </li>
              </ul>
            </li>
          </ul>
        </header>
        <div class='clear'></div>
        <div class='home-wrapper'>
          <div class='slider'>
            <ul class='bxslider'>
              <?php perch_content('homepage-slide')?>
            </ul>
          </div>
          <div class='logo'>
            <a href='index.php'>
              <img src='assets/images/bodhi-tree-logo.png'>
            </a>
          </div>
          <div class='content home-welcome'>
            <h1>
              <?php perch_content('header')?>
            </h1>
            <?php perch_content('page-content')?>
            <a class='pink-sml-link' href="javascript:launchWS('http://clients.mindbodyonline.com/ws.asp?studioid=149520&amp;stype=-7');">View the class schedule</a>
          </div>
          <div class='content cta-home'>
            <ul>
              <li>
                <?php perch_content('calltoaction-image-1')?>
                <a class='pink-med-link' href='<?php perch_content('calltoaction-link-1')?>'><?php perch_content('calltoaction-header-1')?></a>
              </li>
              <li>
                <?php perch_content('calltoaction-image-2')?>
                <a class='pink-med-link' href='<?php perch_content('calltoaction-link-2')?>'><?php perch_content('calltoaction-header-2')?></a>
              </li>
              <li>
                <?php perch_content('calltoaction-image-3')?>
                <a class='pink-med-link' href='<?php perch_content('calltoaction-link-3')?>'><?php perch_content('calltoaction-header-3')?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id='footer'>
      <div class='contact-quicklinks'>
        <p>
          Phone:
          <span>
            416-259-7000
          </span>
        </p>
        <p>
          Email:
          <span>
            <a href='mailto:connect@bodhitreetoronto.com'>connect@bodhitreetoronto.com</a>
          </span>
        </p>
        <p class='copyright'>Copyright 2014 Bodhi Tree Studio. All rights reserved</p>
      </div>
    </div>
  </body>
</html>
