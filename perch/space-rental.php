<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      Bodhi Tree Studio - Space Rental
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
  <body class='about'>
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
            <img class='article-image' src='assets/images/placeholder-img.png'>
            <h1>
              Space Rental
            </h1>
            <h2>
              This is a sub-header. This is a sub-header. This is a sub-header. This is a sub-header. This is a sub-header. This is a sub-header.
            </h2>
            <h3>
              This is another kind of sub-header that you can use. This is another kind of sub-header that you can use.
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare malesuada turpis, non tempus arcu tempor quis. Aliquam scelerisque lectus lorem, vel scelerisque tellus dignissim aliquam. In et nibh nec tellus rhoncus tempus ac quis quam. Donec vehicula tortor vitae dolor tristique, dignissim luctus augue lobortis. Vivamus lacinia dapibus tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque id est orci. Aliquam erat volutpat. Nulla facilisi. Donec eu nulla lorem. Quisque cursus nibh eu turpis eleifend, ac semper urna porttitor. Praesent accumsan rhoncus lobortis. Nunc quis lectus in diam viverra laoreet. Nulla at semper justo.
            </p>
            <p>
              Nunc consectetur vehicula enim a ullamcorper. Maecenas non enim eget diam varius hendrerit. Nam ut est tincidunt, consectetur mauris nec, euismod libero. Mauris vitae mi eget quam varius porta. Integer scelerisque, risus sed fermentum accumsan, risus massa scelerisque augue, ut pretium diam tellus ac lorem. Sed scelerisque, dolor sed rutrum adipiscing, leo ligula vehicula nisl, a molestie nisi libero vitae ligula. Donec malesuada ultrices dui. Proin ornare consectetur dapibus. Sed commodo nulla a pharetra congue. Mauris ornare ac risus in fermentum. Vestibulum vel magna iaculis, rutrum mauris eu, dictum eros. Proin et nunc nec augue feugiat ullamcorper vitae ac ligula. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <p>
              Duis nisl ante, pretium a libero nec, imperdiet tristique risus. Pellentesque viverra auctor aliquam. Phasellus lobortis metus vitae felis ornare aliquam. Vestibulum sagittis est eu interdum tincidunt. Proin gravida, leo sodales adipiscing fringilla, elit enim ultrices magna, quis laoreet metus orci eget lacus. In auctor rhoncus sollicitudin. Mauris tristique lorem sed mauris dapibus, sed scelerisque erat consequat. Phasellus hendrerit leo congue nulla molestie aliquet. Vestibulum nisi ipsum, consequat ut rutrum vel, pretium sed est.
            </p>
            <h3>
              This is another kind of sub-header that you can use. This is another kind of sub-header that you can use.
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare malesuada turpis, non tempus arcu tempor quis. Aliquam scelerisque lectus lorem, vel scelerisque tellus dignissim aliquam. In et nibh nec tellus rhoncus tempus ac quis quam. Donec vehicula tortor vitae dolor tristique, dignissim luctus augue lobortis. Vivamus lacinia dapibus tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque id est orci. Aliquam erat volutpat. Nulla facilisi. Donec eu nulla lorem. Quisque cursus nibh eu turpis eleifend, ac semper urna porttitor. Praesent accumsan rhoncus lobortis. Nunc quis lectus in diam viverra laoreet. Nulla at semper justo.
            </p>
            <p>
              Nunc consectetur vehicula enim a ullamcorper. Maecenas non enim eget diam varius hendrerit. Nam ut est tincidunt, consectetur mauris nec, euismod libero. Mauris vitae mi eget quam varius porta. Integer scelerisque, risus sed fermentum accumsan, risus massa scelerisque augue, ut pretium diam tellus ac lorem. Sed scelerisque, dolor sed rutrum adipiscing, leo ligula vehicula nisl, a molestie nisi libero vitae ligula. Donec malesuada ultrices dui. Proin ornare consectetur dapibus. Sed commodo nulla a pharetra congue. Mauris ornare ac risus in fermentum. Vestibulum vel magna iaculis, rutrum mauris eu, dictum eros. Proin et nunc nec augue feugiat ullamcorper vitae ac ligula. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
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
