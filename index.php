<html>
  <head>
    <!-- Imports -->
    <script src="./bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="import" href="./bower_components/polymer/polymer.html">
    <link rel="import" href="./bower_components/iron-selector/iron-selector.html">
    <link rel="import" href="./bower_components/paper-item/paper-item.html">
    <link rel="import" href="./bower_components/paper-ripple/paper-ripple.html">
    <link rel="import" href="./bower_components/paper-toast/paper-toast.html">
    <link rel="import" href="./bower_components/paper-dialog/paper-dialog.html">
    <link rel="import" href="./bower_components/paper-card/paper-card.html">
    <link rel="import" href="./bower_components/iron-dropdown/iron-dropdown.html">
    <link rel="import" href="./bower_components/iron-icon/iron-icon.html">
    <link rel="import" href="./bower_components/iron-icons/communication-icons.html">
    <link rel="import" href="./bower_components/paper-dialog-scrollable/paper-dialog-scrollable.html">
    <link rel="import" href="./my_components/my-countdown/my-countdown.html">
    <link rel="import" href="./my_components/my-console.html">
    <link rel="icon" type="image/png" href="./images/gateways-logo.png" />

    <!-- styles -->

    <style>
      /**Overall scrollbars*/
        html {
          overflow-y: scroll;
          overflow-x: hidden;
        }
        body::-webkit-scrollbar {
          width: 3px;  /* remove scrollbar space */
          background: transparent;  /* optional: just make scrollbar invisible */
        }
        /* optional: show position indicator in red */
          body::-webkit-scrollbar-thumb {
          background: #FF00FF;
        }

        @font-face {
                font-family: custom-font;
                src: url(2589-ldr.regular.ttf);
                /*src: url(fonts/destencilnf/DeStencilNF.ttf);
                /*src: url(fonts/graycat/GrayCat.ttf);*/
                /*src: url(fonts/psipbrg/PSIPBRG_.TTF);*/
                /*src: url(neon2.ttf);*/
        }

        /**For background animation*/
        @keyframes animatedBackground {
        	from { background-position: 0 0; }
        	to { background-position: 100% 0; }
        }

        /**animate background*/
        #first_view	{
        	background-position: 0px 0px;
        	background-repeat: repeat-x;
        	animation: animatedBackground 50s linear infinite;
        }

        /**Navigation menu*/
        .nav{
          display:inline-block;
          width:auto;
        }

        .anchor{
          text-decoration:none;
          color:white;
        }

        .white{
          color:white;
        }

        #flex{
          position:relative;
          top:-50px;
/*          height:90%;*/
        }

        #main-flex{
        height:40%;
        }

        #main-flex p{
        text-align: center;
        margin:0px;
        }

        body{
          min-width: 600px;
          background-color: #111122;
        }

        .toast{
          left:0px;
          bottom:200px;
          font-size: 20px;
/*          background-color: rgba(0,125,175,0.8);*/
          background-color: rgba(0,0,0,0.8);
          /*border:1px solid rgba(200,200,200,0.8);
          background-color: rgba(0,0,0,0.8);*/
          color:#FFF;
        }

        .profile{
          margin:10px;
          margin-left: 50px;
          margin-right: 50px;
          border: 3px solid rgba(0,0,0,0.9);
          border-radius: 100px;
          background-size: 100px 100px;
          background-repeat: no-repeat;
          min-width:100px;
          min-height:100px;
          display:inline-block;
        }

        .dropdown-content{
          color:white;
          background:#007daf;
          border:2px solid black;
          padding:5px;
          position:relative;
          top:100px;
          left:-7px
        }
        #jerin-dropdown .dropdown-content , #karanjit-dropdown .dropdown-content{
          left:-110px;
        }

        @media only screen and (min-width:800px){

        }
        @media only screen and (max-width:850px){

        }
      </style>

      <!-- Custom style for top navigation bar -->
      <style is="custom-style">
        /**Top navigation bar + logo*/
        .flex-horizontal {
          @apply (--layout-horizontal);
        }
        .flexchild {
          @apply(--layout-flex);
        }
      </style>

      <title>Gateways</title>

  </head>
  <body>

    <!-- TOP MENU  -->
    <div id="first_view" style="background-image:url('images/back.jpg');">
      <div id="top_menu" class="container flex-horizontal">
        <div style="background-image: url('./images/gateways-logo-white.png'); min-width:250px;min-height:200px;background-size: 200px ; background-repeat:no-repeat"></div>
        <div id="menu_items" class="flexchild" style="margin-top:50px">
          <iron-selector selected="0">
            <div class="nav"><a class="anchor" href="#about"><paper-item><paper-ripple></paper-ripple>About</paper-item></a></div>
            <div class="nav"><a class="anchor" href="#events"><paper-item onclick="eventstoast.open()"><paper-ripple></paper-ripple>Events</paper-item></a></div>
            <div class="nav"><a class="anchor" href="#video"><paper-item onclick="videodialog.open()"><paper-ripple></paper-ripple>Video</paper-item></a></div>
            <div class="nav"><a class="anchor" href="#contact"><paper-item onclick="contactDialog.open()"><paper-ripple recenters></paper-ripple>Contact</paper-item></a></div>
          </iron-selector>
        </div>
        <div class="flexchild" style="margin-top:50px;">
          <iron-selector selected="0" style="display:block;float:right;display:block">
            <div class="nav"><a class="anchor" href="#login"><paper-item onclick="logintoast.open()"><paper-ripple></paper-ripple>Login</paper-item></a></div>
            <div class="nav"><a class="anchor" href="#register"><paper-item onclick="registrationtoast.open()"><paper-ripple center></paper-ripple>Register</paper-item></a></div>
          </iron-selector>
        </div>
        <div style="background-image: url('./images/christ.png');  min-width:300px;min-height:200px;background-size: 300px; background-repeat:no-repeat"></div>
      </div>
      <!-- END OF MENU -->

      <!-- MAIN FLEX  -->
      <div id="flex">
        <div id="main-flex" class="white">
             <p style="font-size:18px">Department of Computer Science</p>
             <br>
             <b>
               <p style="font-size:16px">PRESENTS</p>
               <br>
               <p id="gateways" style="font-size:25px; font-family:custom-font">GATEWAYS 2016</p>
             </b>
             <br>
             <p style="font-size:20px">6th and 7th September</p>
        </div>

        <center class="white">
          <?php
            date_default_timezone_set('India/Kolkata');
            $date=mktime(0, 0, 0, 8, 15, 2016);  //from 15 August 2016 00:00:00 am
          ?>

          <!-- Delete from here when making web component -->
          <script type="text/javascript" src="./my_components/my-countdown/clock_assets/flipclock.js"></script>
          <link rel="stylesheet" type="text/css" href="./my_components/my-countdown/clock_assets/flipclock.css">
          <style>
              #clock{
                padding:18px;
                display:inline-flex;
                background:#EEFFEE;
                border-radius: : 60px;
                margin:auto;
              }
              body .flip-clock-wrapper ul li a div div.inn, body .flip-clock-small-wrapper ul li a div div.inn {
                  color: #EEE;
                  background-color: #007daf;
                }
              body .flip-clock-dot, body .flip-clock-small-wrapper .flip-clock-dot {
                background: #000;
              }
              body .flip-clock-wrapper .flip-clock-meridium a, body .flip-clock-small-wrapper .flip-clock-meridium a {
                color: #FFF;
              }
            </style>
          <div id="clock">
            <div class="clock-builder-output" sytle="display:block"></div>
            <script>
              $(function(){
                  FlipClock.Lang.Custom = { days:'Days', hours:'Hours', minutes:'Minutes', seconds:'Seconds' };
                  var opts = {
                    clockFace: 'DailyCounter',
                    countdown: true,
                    language: 'Custom'
                    };
                  var countdown = <?php echo date("U", $date); ?> - <?php echo time()?> ; // from: 08/15/2016 12:00 am +0530
                  countdown = Math.max(1, countdown);
                  $('.clock-builder-output').FlipClock(countdown, opts);
                });
            </script>
          </div>
            <!-- Delete till here -->
          <!--<my-countdown endtime="<?php //echo date("U", $date); ?>" starttime="<?php //echo time()?>"></my-countdown>-->
            <p id="registration-date" style="font-size:25px"><b>Registration starts from August 15, 2016</b></p>
        </center>
      </div>
    </div>
    <!-- End of first_view -->

    <!-- ABOUT  -->
    <article style="background:#F2F2F2;color:#000; height:100%;width:80%; margin:auto;position:relative;top:-50px;z-index:1;display:block;position:relative">
      <div id="about" style="padding-top:1%;padding-right:100px;padding-left:100px;opacity:0.8;text-align:justify">
        <h1 style="font-size:40px;">ABOUT</h1>
          <div style="display:inline-block;font-size:15px;max-width:40%;padding:4px;padding-left:15px;">
            <b style="position:relative;top:-15px;font-size:25px">FEST</b>
              <p>Gateways is the national level inter-collegiate post graduate IT fest organized
              by the Department of Computer Science, Christ University.
              It provides the much needed exposure which is a prerequisite to survive in the IT industry.
              Participants compete in numerous technical and non-technical events that are both entertaining and
              intellectually challenging.
            </p>
            <p>We are proud to present the 20th version of Gateways, with which we continue our tradition to benefit the students in staying
              abreast with latest trends in technology and developing their organisational and soft skills.
            </p>
          </div>
          <div style="display:inline-block;font-size:15px;max-width:40%;float:right;padding:4px;padding-right:15px;position:relative;top:-11px;">
            <div  style="background-image:url('./images/mobiux.png');background-repeat:no-repeat;background-size:100% 100%;z-index:3;min-height:50px;min-width:85px;display:inline-block"></div>
            <p>This Gateways, MOBIUX - an acronym for Modular Building Blocks and AI, has been selected as the theme to drive the fest.
            Be it Google's project ARA and Arduino boards in hardware, or Web Components and Web API in software,
            all are zeroing in on towards adaptive and portable systems.</p>
            <p>Modular technology has become the trend and need of the hour. We do not reinvent the wheel anymore. We borrow it, use it and modify it as per our creativity and necessities.</p>
          </div>
          <!--<p style="display:inline-block;font-size:15px;">
            We humbly invite all the tech savvy aspirants out there, to join us in this passion filled, exuberant journey, to witness beauty in bytes.
          </p>
          -->
        </div>
        <div style="position:absolute;background-image:url('./images/blocks.jpg');background-repeat:no-repeat;background-size:100% 100%;min-width:100%;min-height:500px;bottom:-90px;z-index:-1"></div>
    </article>
    <article style="padding:30px;font-size:50px;background-color:#007Daf;color:white;min-height:100px;text-align:center;position:relative;top:-50px;z-index:10;box-shadow: 2px 8px 2px #aaaaaa;">
      <div title='Giga Boy: We humbly invite all the tech savvy aspirants out there, to join us in this passion filled, exuberant journey, to witness beauty in bytes.' style="background-image:url('./images/mascot.png');background-repeat:no-repeat;background-size:100% 100%;min-height:250px;min-width:250px;display:inline-block;z-index:-1;"></div><span>Stay Tuned...</span>
    </article>
    <footer style="text-align:center;background:#FFF;padding:10px;height:100px;position:relative;box-shadow: 0px -5px 5px #555;">
        <div  id="connector" style="min-height:80px;width:80%;margin-left:9%;position:absolute;top:-40px;background:#FFF;z-index:-2;">
        </div>
        <div style="position:relative;">
          <span>
            <style is="custom-style">
            .big {
              top:-10px;
              --iron-icon-height: 32px;
              --iron-icon-width: 32px;
              }
            </style>
            <a href="mailto:gateways@cs.christuniversity.in" style="text-decoration:none;color:#000;" title="Contact us at gateways16@christuniversity.in"><iron-icon class="big" icon="communication:mail-outline"></iron-icon></a>
          </span>
        <span>
          <a target="_blank" href="https://www.facebook.com/gateways2k16" title="Check our Facebook page"><img alt="Follow us on Facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png"></a>
        </span>
      </div>
      <span style="padding-left:20px">
        <b style="font-size:15px">&copy Gateways 2016</b><br>
        <div style="float:right;display:inline-block;padding:10px;background:rgba(0,0,0,0.8);color:#FFF">Check our Facebook page for pre-fest events to win exciting prizes</div>
        <div style="float:left;display:inline-block;padding:10px;background:rgba(200,200,200,0.8);color:#000">Works best on Google Chrome</div>
      </span>
    </footer>
  </body>
</html>

<paper-dialog id="videodialog">
  <!--<iframe width="850" height="500" src="https://www.youtube.com/embed/Tcf8_ql1nKQ" frameborder="0" allowfullscreen></iframe>-->
  <div style="color:#FFF;background:#000;min-height:500px;min-width:850px;font-size:50px;text-align:center"><br><br><br>Teaser in progress...</div>
</paper-dialog>

<!-- Start of profile dialog-->
<paper-dialog id="contactDialog" style="background:rgba(10,10,10,0.9); color:#fff;" with-backdrop >
    <center style="background:#007daf;padding-top:25px;padding-bottom:20px;"><h2>Student Co-ordinators</h2></center>
    <paper-dialog-scrollable>
      <table border="0" style="margin:auto;text-align:center;">
        <tr>
          <td colspan="2">
            <div class="profile" style="background-image: url('./images/jerin.jpg')" onmouseover="document.getElementById('jerin-dropdown').toggle();"></div>
            <iron-dropdown id="jerin-dropdown" horizontal-align="right" vertical-align="top">
              <div class="dropdown-content">
                Jerrin James | <iron-icon icon="communication:contact-phone"></iron-icon> | 9686530428
              </div>
            </iron-dropdown>
          </td>
        </tr>
        <tr>
          <td><div class="profile" style="background-image: url('./images/suzan.jpg')" onmouseover="document.getElementById('suzan-dropdown').toggle();"></div>
            <iron-dropdown id="suzan-dropdown" horizontal-align="right" vertical-align="top">
              <div class="dropdown-content">
                Sussan Elias | <iron-icon icon="communication:contact-phone"></iron-icon> | 8095510370
              </div>
            </iron-dropdown>
          </td>
          <td><div class="profile" style="background-image: url('./images/nambita.jpg')" onmouseover="document.getElementById('nambita-dropdown').toggle();"></div>
            <iron-dropdown id="nambita-dropdown" horizontal-align="right" vertical-align="top">
              <div class="dropdown-content">
                        Namita Gupta | <iron-icon icon="communication:contact-phone"></iron-icon> | 7406435312
              </div>
            </iron-dropdown>
          </td>
        </tr>
        <tr>
          <td colspan="2"><div class="profile" style="background-image: url('./images/karanjit.jpg')" onmouseover="document.getElementById('karanjit-dropdown').toggle();"></div>
            <iron-dropdown id="karanjit-dropdown" horizontal-align="right" vertical-align="top">
              <div class="dropdown-content">
                        Karanjit Tiwana | <iron-icon icon="communication:contact-phone"></iron-icon> | 9663661306
              </div>
            </iron-dropdown>
          </td>
        </tr>
      </table>
    </paper-dialog-scrollable>
</paper-dialog>
<!-- END of profile dialog-->

<!-- Toasts-->
<paper-toast class="toast" id="registrationtoast" text="Registration from 15th August 2016"></paper-toast>
<paper-toast class="toast" id="logintoast" text="You need to register first"></paper-toast>
<paper-toast class="toast" id="videotoast" text="Teaser coming soon..."></paper-toast>
<paper-toast class="toast" id="eventstoast" text="In Progress..."></paper-toast>


<!-- Sound -->
<audio id="beep-one" preload="auto">
	<source src="audio/beep.mp3" controls></source>
	<source src="audio/beep.ogg" controls></source>
	Your browser isn't invited for super fun audio time.
</audio>

<script>
  var beepOne = $("#beep-one")[0];
  $(".nav")
  	.click(function() {
  		beepOne.play();
  	});
</script>

<!-- Animation of welcome message -->
<script>
$( document ).ready(function() {
  $("#gateways").animate({ marginTop: "15px" }, 1000 )
                .animate({fontSize: '60px'}, 1000);
  $("#clock").fadeOut(10)
                   .fadeIn(9000);
});
  </script>
