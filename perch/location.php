<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      Bodhi Tree Studio - Location
    </title>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
    <meta description='Page title'>
    <link href='assets/stylesheets/vendor/reset.css' rel='stylesheet' type='text/css'>
    <link href='assets/stylesheets/main.css' rel='stylesheet' type='text/css'>
    <link href='assets/stylesheets/jquery.bxslider-teachers.css' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <link href='assets/stylesheets/ie8.css' rel='stylesheet' type='text/css'>
      <script src='assets/javascripts/vendor/html5shiv.min.js'></script>
    <![endif]-->
    <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,300italic,400italic,600italic" rel='stylesheet' type='text/css'>
    <script src='assets/javascripts/vendor/jquery-1.9.1.js'></script>
    <script src='assets/javascripts/vendor/jquery-ui.js'></script>
    <script src='assets/javascripts/wsLaunch.js'></script>
    <script src='assets/javascripts/jquery.slicknav.js'></script>
    <script src='assets/javascripts/jquery.bxslider.js'></script>
    <script>
      $(document).ready(function(){
        var icons = {
          header: "closed-icon",
          activeHeader: "open-icon"
        };
        $( "#accordion" ).accordion({
          collapsible: true,
          heightStyle: "content",
          icons: icons
        });
        $('#menu').slicknav();
        $('.bxslider-teachers').bxSlider({
          mode: 'fade',
          auto: false,
          pause: 10000,
          pagerCustom: '#bx-pager'
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
  <body class='location'>
    <div id='wrap'>
      <div id='header'>
        <header>
          <div class='social-links'>
            <div class='social'>
              <a href='https://www.facebook.com/bodhitreetoronto' target='blank'>
                <img src='assets/images/facebook.png'>
              </a>
              <a href='https://twitter.com/ombodhitree' target='blank'>
                <img src='assets/images/twitter.png'>
              </a>
            </div>
            <div class='class-link'>
              <a href="javascript:launchWS('http://clients.mindbodyonline.com/ws.asp?studioid=149520&amp;stype=-7');">
                Reserve a spot
              </a>
            </div>
          </div>
          <div class='logo'>
            <a href='index.php'>
              <img src='assets/images/bodhi-tree-logo.png'>
            </a>
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
        </header>
      </div>
      <div id='main'>
        <div class='content-about'>
          <div class='about-wrapper'>
            <h1>
              Location
            </h1>
            <div id='accordion'>
              <h3>Studio Address:</h3>
              <div class='div-accordion'>
                <?php perch_content('studio-address')?>
              </div>
              <h3>Map</h3>
              <div class='div-accordion'>
                <iframe frameborder='0' height='600' src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2888.203493153097!2d-79.51730429999999!3d43.6231234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b37d2904dd505%3A0xd2897ebcfb6d8b1a!2s1066+The+Queensway%2C+Etobicoke%2C+ON+M8Z+1P7%2C+Canada!5e0!3m2!1sen!2sus!4v1407534709966' style='border:0' width='100%'></iframe>
              </div>
              <h3>TTC DIRECTIONS</h3>
              <div class='div-accordion'>
                <?php perch_content('ttc-directions')?>
              </div>
              <h3>Parking Instructions</h3>
              <div class='div-accordion'>
                <?php perch_content('parking-instructions')?>
              </div>
            </div>
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
