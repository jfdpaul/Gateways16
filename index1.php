<html>
  <?php
  session_start();
error_reporting(E_ALL); 
  ini_set('display_errors', 1); 
  
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'mysql';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass,'gateways');
    mysql_select_db( 'gateways' );
    $sql="INSERT into counter(time) values('".date('Y-m-d h:i:sa')."')";
    $retval = mysql_query( $sql, $conn );
  ?>
  <head>
    <!-- Imports -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <script src="./bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <script  src="./jquery.min.js"></script>
    <link rel="import" href="./bower_components/polymer/polymer.html">
    <link rel="import" href="./bower_components/iron-selector/iron-selector.html">
    <link rel="import" href="./bower_components/paper-item/paper-item.html">
    <link rel="import" href="./bower_components/paper-ripple/paper-ripple.html">
    <link rel="import" href="./bower_components/paper-toast/paper-toast.html">
    <link rel="import" href="./bower_components/paper-dialog/paper-dialog.html">
    <link rel="import" href="./bower_components/paper-card/paper-card.html">
    <link rel="import" href="./bower_components/iron-dropdown/iron-dropdown.html">
    <link rel="import" href="./bower_components/iron-icon/iron-icon.html">
    <link rel="import" href="./bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="./bower_components/iron-icons/communication-icons.html">
    <link rel="import" href="./bower_components/paper-spinner/paper-spinner.html">
    <link rel="import" href="./my_components/my-console.html">
    <link rel="import" href="./bower_components/paper-dialog-scrollable/paper-dialog-scrollable.html">
    <link rel="icon" type="image/png" href="./images/gateways-logo.png" />

    <!-- styles -->

    <style>
      * {
          font-family: 'Roboto', sans-serif;
        }
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
        }

        /**For background animation*/
        @keyframes animatedBackground {
        	from { background-position: 0 0; }
        	to { background-position: 100% 100%; }
        }


        /**Navigation menu*/
        .nav{
          display:inline-block;
          width:auto;
        }

        .anchor{
          font-family: 'Roboto', sans-serif;
          text-decoration:none;
          color:white;
        }

        .white{
          color:white;
        }

        .toast{
          left:0px;
          bottom:200px;
          font-size: 20px;
          background-color: rgba(0,0,0,0.8);
          color:#FFF;
        }

        body{
          /*min-width: 600px;*/
          background-color: #111122;
        }

        @media only screen and (min-width:810px){

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

          #spin{
            position:fixed;
            left:35%;
            top:20%;
            width:300px;
            height:300px;
            visibility:visible
          }

          #gigaboy{
            position:fixed;
            right:10px;
            bottom:40px;
            background-image:url('./images/mascot.png');
            background-repeat:no-repeat;
            background-size:100% 100%;
            min-height:350px;
            min-width:320px;
            display:inline-block;
            z-index:9990;
          }

          /**animate background*/
          #first_view	{
            background-image:url('images/back.jpg');
          	animation: animatedBackground 60s linear infinite;
          }

          #gatewaysLogo{
            background-image: url('./images/gateways-logo-white.png');
            min-width:250px;
            min-height:200px;
            background-size: 200px ;
            background-repeat:no-repeat;
          }

          #christLogo{
            background-image: url('./images/christ-logo.png');
            min-width:300px;
            min-height:200px;
            background-size: 300px;
            background-repeat:no-repeat;
            float:right;
            padding-right:5px;
            padding-left:15px;
          }

          .nav_links{
            font-size: 18px;
            padding:5px;
          }

          #flex{
            position:relative;
            top:-50px;
            clear:both;
          }

          #main-flex{
          height:40%;
          }

          #main-flex p{
          text-align: center;
          margin:0px;
          }

          #registration-date{
            font-size:25px;
          }

          #department_of_cs{
            font-size:18px;
          }

          #presents{
            font-size: 20px;
          }

          #gateways{
            font-size:25px;
            font-family:custom-font;
          }

          #tag_line{
            float:right;
            font-size:18px;
            font-family: 'Dancing Script', cursive;
          }

          #about_holder{
            background:#F2F2F2;
            color:#000;
            height:100%;
            width:80%;
            margin:auto;
            position:relative;
            top:-50px;
            z-index:1;
            display:block;
            position:relative;
          }

          #about{
            padding-top:1%;
            padding-right:100px;
            padding-left:100px;
            opacity:0.8;
            text-align:justify;
          }

          #about_header{
            font-size:40px;
          }

          #about_fest_description{
            display:inline-block;
            font-size:15px;
            max-width:40%;
            padding:4px;
            padding-left:15px;
          }

          #fest_header{
            position:relative;
            top:-15px;
            font-size:25px;
          }

          #about_theme_description{
            display:inline-block;
            font-size:15px;
            max-width:40%;
            float:right;
            padding:4px;
            padding-right:15px;
            position:relative;
            top:-11px;
          }

          #mobiux_logo{
            background-image:url('./images/mobiux.png');
            background-repeat:no-repeat;
            background-size:100% 100%;
            z-index:3;
            min-height:50px;
            min-width:85px;
            display:inline-block;
          }

          #about_background{
            position:absolute;
            background-image:url('./images/blocks.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
            min-width:100%;
            min-height:500px;
            bottom:-90px;
            z-index:-1;
          }

          footer{
            text-align:center;
            background:#FFF;
            padding:10px;
            height:100px;
            position:relative;
            box-shadow: 0px -5px 5px #555;

          }
          #connector{
            min-height:80px;
            width:80%;
            margin-left:9%;
            position:absolute;
            top:-40px;
            background:#FFF;
            z-index:-2;
          }

          #views{
            font-size:30px;
            position:absolute;
            left:20px;
            padding:5px;
            color:white;
            background:#007Daf;
            border-radius:3px;
          }

          #mail_icon{
            text-decoration:none;
            color:#000;
          }

          #gateways_copyright{
            font-size:15px;
            padding-bottom:5px;
          }

          #footer_right{
            font-size: 15px;
            float:right;
            display:inline-block;
            padding:10px;
            background:rgba(0,0,0,0.8);
            color:#FFF;
          }

          #footer_left{
            font-size: 15px;
            float:left;
            display:inline-block;
            padding:10px;
            background:rgba(200,200,200,0.8);
            color:#000;
          }
        }

        @media only screen and (max-width:810px){

          .profile{
            margin:1px;
            margin-left: 30px;
            margin-right: 30px;
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

          #spin{
            position:fixed;
            left:35%;
            top:20%;
            width:300px;
            height:300px;
            visibility:visible
          }

          #gigaboy{
            position:fixed;
            right:2px;
            bottom:10px;
            background-image:url('./images/mascot.png');
            background-repeat:no-repeat;
            background-size:100% 100%;
            min-height:200px;
            min-width:150px;
            display:inline-block;
            z-index:9990;
          }

          /**animate background*/
          #first_view	{
            background-image:url('images/back.jpg');
            animation: animatedBackground 60s linear infinite;
          }

          #gatewaysLogo{
            background-image: url('./images/gateways-logo-white.png');
            min-width:160px;
            min-height:130px;
            background-size: 130px ;
            background-repeat:no-repeat;
          }

          #christLogo{
            background-image: url('./images/christ-logo.png');
            min-width:200px;
            min-height:180px;
            background-size: 200px;
            background-repeat:no-repeat;
            float:right;
            padding-right:1px;
            padding-left:5px;
          }

          .nav_links{
            font-size: 10px;
            padding:2px;
          }

          #flex{
            position:relative;
            top:  10px;
            clear:both;
          }

          #main-flex{
          height:40%;
          }

          #main-flex p{
          text-align: center;
          margin:0px;
          }

          #registration-date{
            font-size:12px;
          }

          #department_of_cs{
            font-size:9px;
          }

          #presents{
            font-size: 10px;
          }

          #gateways{
            font-size:15px;
            font-family:custom-font;
          }

          #tag_line{
            float:right;
            font-size:8px;
            font-family: 'Dancing Script', cursive;
          }

          #about_holder{
            background:#F2F2F2;
            color:#000;
            height:100%;
            width:80%;
            margin:auto;
            position:relative;
            top:-20px;
            z-index:1;
            display:block;
            position:relative;
          }

          #about{
            padding-top:1%;
            padding-right:100px;
            padding-left:100px;
            opacity:0.8;
            text-align:justify;
          }

          #about_header{
            font-size:25px;
          }

          #about_fest_description{
            display:inline-block;
            font-size:10px;
            max-width:40%;
            padding:2px;
            padding-left:10px;
          }

          #fest_header{
            position:relative;
            top:-10px;
            font-size:15px;
          }

          #about_theme_description{
            display:inline-block;
            font-size:15px;
            max-width:40%;
            float:right;
            padding:4px;
            padding-right:15px;
            position:relative;
            top:-11px;
          }

          #mobiux_logo{
            background-image:url('./images/mobiux.png');
            background-repeat:no-repeat;
            background-size:100% 100%;
            z-index:3;
            min-height:30px;
            min-width:50px;
            display:inline-block;
          }

          #about_background{
            position:absolute;
            background-image:url('./images/blocks.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
            min-width:100%;
            min-height:200px;
            bottom:-90px;
            z-index:-1;
          }

          footer{
            text-align:center;
            background:#FFF;
            padding:10px;
            height:100px;
            position:relative;
            top:80px;
            box-shadow: 0px -5px 5px #555;

          }

          #views{
            font-size:20px;
            position:absolute;
            left:20px;
            padding:5px;
            color:white;
            background:#007Daf;
            border-radius:3px;
          }

          #mail_icon{
            text-decoration:none;
            color:#000;
          }

          #gateways_copyright{
            font-size:10px;
            padding-bottom:5px;
          }

          #footer_right{
            font-size: 5px;
            float:right;
            display:inline-block;
            padding:10px;
            background:rgba(0,0,0,0.8);
            color:#FFF;
          }

          #footer_left{
            font-size: 5px;
            float:left;
            display:inline-block;
            padding:5px;
            background:rgba(200,200,200,0.8);
            color:#000;

          }
        }

        .flex-horizontal > div{
          display:inline-block;
          float : left;
        }
      </style>
      <title>Gateways</title>

  </head>
  <paper-spinner id="spin" active></paper-spinner>
  <body onload="animateGateways();" style="visibility:hidden;">
    <a href="#mascot" onclick="toggleConsole();"><div id="gigaboy" title='Giga Boy: We humbly invite all the tech savvy aspirants out there, to join us in this passion filled, exuberant journey, to witness beauty in bytes.'></div></a>
    <!-- TOP MENU  -->
    <div id="first_view">
      <div id="top_menu" class="container flex-horizontal">
        <div id="gatewaysLogo"></div>
        <div id="menu_items" class="flexchild" style="margin-top:50px">
          <iron-selector selected="0">
            <div class="nav"><a class="anchor" href="#about"  ><paper-item class="nav_links"><paper-ripple></paper-ripple>About</paper-item></a></div>
            <div class="nav"><a class="anchor" href="#events" ><paper-item class="nav_links" onclick="eventstoast.open()"><paper-ripple></paper-ripple>Events</paper-item></a></div>
            <div class="nav"><a class="anchor" href="#video"  ><paper-item class="nav_links" onclick="videodialog.open()"><paper-ripple></paper-ripple>Video</paper-item></a></div>
            <div class="nav"><a class="anchor" href="#contact"><paper-item class="nav_links" onclick="posterdialog.open()"><paper-ripple recenters></paper-ripple>Poster</paper-item></a></div>
            <div class="nav"><a class="anchor" href="#contact"><paper-item class="nav_links" onclick="contactDialog.open()"><paper-ripple recenters></paper-ripple>Contact</paper-item></a></div>
          </iron-selector>
        </div>
        <div id="christLogo"></div>
        <div class="flexchild" style="display:block;float:right;margin-top:50px;">
          <iron-selector selected="0" style="display:block">
            <div class="nav"><a class="anchor" href="#login"><paper-item class="nav_links" onclick="logintoast.open()"><paper-ripple></paper-ripple>Login</paper-item></a></div>
          </iron-selector>
        </div>
      </div>
      <!-- END OF MENU -->

      <!-- MAIN FLEX  -->
      <div id="flex">
        <div id="main-flex" class="white">
             <p id="department_of_cs">Department of Computer Science</p>
             <br>
             <b>
               <p id="presents">PRESENTS</p>
               <br>
               <center>
                 <div style="display:inline-block">
                   <p id="gateways">GATEWAYS '16</p>
                   <p id="tag_line">Redefining the defined...</p>
                 </div>
              </center>
             </b>
             <br>
             <p style="font-size:20px">6th and 7th September</p>
        </div>

        <center class="white">
          <?php
            //date_default_timezone_set('India/Kolkata');
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
            <p id="registration-date"><b>Registration starts from August 15, 2016</b></p>
        </center>
      </div>
    </div>
    <!-- End of first_view -->

    <!-- ABOUT  -->
    <article id="about_holder">
      <div id="about">
        <h1 id="about_header">ABOUT</h1>
          <div id="about_fest_description">
            <b id="fest_header">FEST</b>
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
          <div id="about_theme_description">
            <div  id="mobiux_logo"></div>
            <p>This Gateways, MOBIUX - an acronym for Modular Building Blocks and AI, has been selected as the theme to drive the fest.
            Be it Google's project ARA and Arduino boards in hardware, or Web Components and Web API in software,
            all are zeroing in on towards adaptive and portable systems.</p>
            <p>Modular technology has become the trend and need of the hour. We do not reinvent the wheel anymore. We borrow it, use it and modify it as per our creativity and necessities.</p>
          </div>
        </div>
        <div id="about_background"></div>
    </article>

    <footer>
        <div  id="connector">
        </div>
        <div style="position:relative;">
          <span id="views"><b>
            <?php
              $conn = mysql_connect($dbhost, $dbuser, $dbpass,'gateways');
              mysql_select_db( 'gateways' );
              $sql="SELECT count(*) no from counter";
              $retval = mysql_query( $sql, $conn );
              $row=mysql_fetch_array($retval);
              echo $row['no'].' views';
            ?></b>
          </span>
          <span>
            <style is="custom-style">
            .big {
              top:-10px;
              --iron-icon-height: 32px;
              --iron-icon-width: 32px;
              }
            </style>
            <a href="mailto:gateways@cs.christuniversity.in" id="mail_icon" title="Contact us at gateways@christuniversity.in"><iron-icon class="big" icon="communication:mail-outline"></iron-icon></a>
          </span>
        <span>
          <a target="_blank" href="https://www.facebook.com/gateways2k16" title="Check our Facebook page"><img alt="Follow us on Facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png"></a>
        </span>
      </div>
      <span style="padding-left:20px">
        <b id="gateways_copyright">&copy Gateways 2016</b><br>
        <div id="footer_right">Check our Facebook page for pre-fest events to win exciting prizes</div>
        <div id="footer_left">Works best on Google Chrome</div>
      </span>
    </footer>
  </body>
  <my-console id="console" style="visibility:hidden"></my-console>
</html>

<!--Video Dialog -->
<paper-dialog id="videodialog" modal>
  <div style="padding:4px;display:inline-block;position:absolute;right:1px;top:-25px;"><a href="#" onclick="pauseVideo()"><iron-icon icon="icons:cancel"></iron-icon></a></div>
  <iframe id="myvideo" width="850" height="500" src="https://www.youtube.com/embed/WdWja6Y7blc" frameborder="0" allowfullscreen></iframe>
</paper-dialog>
<!--Poster Dialog -->
<paper-dialog id="posterdialog" style="height:90%;">
  <!--<div style="background-image: url('./images/poster.jpg');margin:auto;width:95%;height:100%; background-size:100% 100%"></div>-->
  <img src="./images/poster.jpg" height="95%"/>
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

<!-- Animation of welcome message -->
<script>
function animateGateways(){
  var mql = window.matchMedia("screen and (max-width: 810px)")
  if (mql.matches){ // if media query matches

      document.getElementsByTagName("body")[0].style.visibility="visible";
      document.getElementById("spin").style.visibility="hidden";
        $("#gateways").animate({ marginTop: "10px" }, 1000 )
                      .animate({fontSize: '30px'}, 1000);
        $("#clock").fadeOut(10)
                         .fadeIn(9000);
    }
    else {
      document.getElementsByTagName("body")[0].style.visibility="visible";
      document.getElementById("spin").style.visibility="hidden";
        $("#gateways").animate({ marginTop: "15px" }, 1000 )
                      .animate({fontSize: '60px'}, 1000);
        $("#clock").fadeOut(10)
                         .fadeIn(9000);
    }

  }
  function toggleConsole(){
    var console=document.getElementById("console");
    if(console.style.visibility=="hidden"){
      console.style.visibility="visible";
    }
    else {
      console.style.visibility="hidden";
    }

  }
  function pauseVideo(){
      var vdiag=document.getElementById("videodialog");
      vdiag.close();
      var iframe = document.getElementById('myvideo');
      iframe.src = iframe.src;
    }
</script>
