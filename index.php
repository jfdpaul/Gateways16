<html>
  <?php
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'gateways');
    date_default_timezone_set('Asia/Kolkata');//or change to whatever timezone you want
    $sql="INSERT into counter(time) values('".date('Y-m-d h:i:sa')."')";
    $retval = mysqli_query($conn,$sql );
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
    <link rel="import" href="./bower_components/paper-input/paper-input.html">
    <link rel="import" href="./bower_components/paper-button/paper-button.html">
    <link rel="import" href="./bower_components/paper-ripple/paper-ripple.html">
    <link rel="import" href="./bower_components/paper-toast/paper-toast.html">
    <link rel="import" href="./bower_components/paper-dialog/paper-dialog.html">
    <link rel="import" href="./bower_components/paper-card/paper-card.html">
    <link rel="import" href="./bower_components/iron-dropdown/iron-dropdown.html">
    <link rel="import" href="./bower_components/iron-icon/iron-icon.html">
    <link rel="import" href="./bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="./bower_components/iron-icons/communication-icons.html">
    <link rel="import" href="./bower_components/paper-spinner/paper-spinner.html">
    <link rel="import" href="./bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
    <link rel="import" href="./bower_components/paper-listbox/paper-listbox.html">
    <link rel="import" href="./bower_components/iron-list/iron-list.html">
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

        #jaison-dropdown .dropdown-content{
          left:-35px;
          bottom:10px;
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
            min-height: 100%;
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
            background-color: inherit;
            color:#000;
            width:100%;
            position:relative;
            z-index:1;
            display:block;
            position:relative;
          }

          #about{
            background:#F5F5F5;
            position:relative;
            top:-30px;
            padding-top:1%;
            min-height:100%;
            width: 70%;
            margin:auto;
            padding-right:100px;
            padding-left:100px;
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
            position:relative;
            background-image:url('./images/blocks.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
            min-width:100%;
            min-height:50%;
            margin:auto;
          }

          footer{
            text-align:center;
            background:#FFF;
            padding:10px;
            height:100px;
            width:100%;
            box-shadow: 0px -5px 5px #555;
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
            background-color: inherit;
            color:#000;
            width:100%;
            position:relative;
            z-index:1;
            display:block;
            position:relative;
          }

          #about{
            background:#F5F5F5;
            position:relative;
            top:-30px;
            padding-top:1%;
            min-height:100%;
            width: 70%;
            margin:auto;
            padding-right:100px;
            padding-left:100px;
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
            position:relative;
            background-image:url('./images/blocks.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
            min-width:100%;
            min-height:50%;
            margin:auto;
          }

          footer{
            text-align:center;
            background:#FFF;
            padding:10px;
            height:100px;
            width:100%;
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

        #login{
          padding:20px;
          color:#fff;
        }

        paper-button button {
          padding:5px;
          background-color: transparent;
          border-color: transparent;
        }

        .yellow-button {
          text-transform: none;
          color: #eeff41;
        }

        paper-button{
          background-color: #29aba4;
          color:#fff;
       }
      </style>


      <title>Gateways</title>

  </head>
  <paper-spinner id="spin" active></paper-spinner>
  <body onload="animateGateways();" style="visibility:hidden;">
    <div id="error"></div>
    <a href="#mascot" onclick="toggleConsole();"><div id="gigaboy" title='Giga Boy: We humbly invite all the tech savvy aspirants out there, to join us in this passion filled, exuberant journey, to witness beauty in bytes.'></div></a>
    <!-- TOP MENU  -->
    <div id="first_view">
      <div id="top_menu" class="container flex-horizontal">
        <div id="gatewaysLogo"></div>
        <div id="menu_items" class="flexchild" style="margin-top:50px">
          <iron-selector selected="0">
            <div class="nav"><a class="anchor" href="#about"  ><paper-item class="nav_links"><paper-ripple></paper-ripple>About</paper-item></a></div>
            <div class="nav"><a  class="anchor" href="./pages/events.php" ><paper-item class="nav_links" ><paper-ripple></paper-ripple>Events</paper-item></a></div>
            <div class="nav" style="position:relative;"><a  class="anchor" href="#more" ><paper-item class="nav_links" onclick="toggleMenu()"><paper-ripple></paper-ripple>More</paper-item></a>
              <paper-listbox id="menu" style="visibility:hidden;background-color:#111;z-index:1;position:absolute;padding:10px;opacity:0.9" onclick="toggleMenu()">
                <div class="nav"><a class="anchor" href="#schedule"><paper-item class="nav_links" onclick="scheduledialog.open()"><paper-ripple recenters></paper-ripple>Schedule</paper-item></a></div>
                <div class="nav"><a class="anchor" href="#poster"><paper-item class="nav_links" onclick="posterdialog.open()"><paper-ripple recenters></paper-ripple>Poster</paper-item></a></div>
                <div class="nav"><a class="anchor" href="#teaser"><paper-item class="nav_links" onclick="teaserdialog.open()"><paper-ripple></paper-ripple>Teaser</paper-item></a></div>
              </paper-listbox>
            </div>
           <div class="nav"><a class="anchor" href="#contact"><paper-item class="nav_links" onclick="contactdialog.open()"><paper-ripple recenters></paper-ripple>Contact</paper-item></a></div>
          </iron-selector>
        </div>
        <div id="christLogo"></div>
        <div class="flexchild" style="display:block;float:right;margin-top:50px;">
          <iron-selector selected="0" style="display:block">
           <div class="nav">
              <a class="anchor" href="#login"><paper-item class="nav_links" onclick="<?php $flag=0; if(!isset($_SESSION['col_id']) || $_SESSION['col_id']==''){ echo "login.open()"; }  else { $flag=1; echo "javascript:location.href='profile.php'";}?>"><?php if($flag==0) echo "Login"; else echo "Profile"; ?> </paper-item></a>
               </div>
          <div class="nav">
            <?php if($flag==1) echo '<a class="anchor" href="logout.php"><paper-item class="nav_links" onclick="">Logout</paper-item></a>'; ?>
           </div>

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
          <p id="registration-date"><b>Registration started</b></p>
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
          <div id="about_background"></div>
        </div>
        <div id="general_rules" style="position:relative;top:-30px;">
          <div id="rules_banner" class="white" style="background-color:#007Daf;min-width:100%;min-height:50px;text-align:center;font-size:30px;padding:30px;"><b>GENERAL RULES</b></div>
          <div id="rules_list" style="padding:35px;max-width:80%;margin:auto;background:#F5F5F5;font-size:15px">
            <ul>
              <li>Maximum 20 participants per college.</li>
              <li>Participants are required to carry their ID cards.</li>
              <li>A participant can participate in a maximum of 3 events.</li>
              <li>All the 3 events for a participant cannot be from the same category (technical or non-technical)</li>
              <li>Laptop, pendrives and cameras if required, have to be carried by the participant.</li>
              <li>Registration should be done online before 4th September 2016.</li>
              <li>Outstation students should inform before 4th September 2016 for accommodation.</li>
              <li>Registration fee of Rs 100/- per participant. In no case, the fee will be refunded.</li>
              <li>Kindly ensure that the participant should report 15 minutes prior to the event venue.</li>
            </ul>
          </div>
        </div>
        <footer>
            <div style="position:relative;">
              <span id="views"><b>
                <?php
                  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'gateways');
                  $sql="SELECT count(*) no from counter";
                  $retval = mysqli_query( $conn, $sql );
                  $row=mysqli_fetch_array($retval,MYSQLI_ASSOC);
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
            <div style="text-align:center;">
              <b><a href="#websitedialog" onclick="websitedialog.open()" class="nav_links anchor" style="background-color:#007adc;padding:7px;">Developed By</a></b>
              <br><br><b id="gateways_copyright">&copy Gateways 2016</b>
            </div>
          </span>
        </footer>
    </article>
  </body>
</html>
<my-console id="console" style="visibility:hidden;"></my-console>
<!--Teaser Dialog -->
<paper-dialog id="teaserdialog" modal>
  <div style="padding:4px;display:inline-block;position:absolute;right:1px;top:-25px;"><a href="#" onclick="pauseTeaser()"><iron-icon icon="icons:cancel"></iron-icon></a></div>
  <iframe id="myteaser" width="850" height="500" src="https://www.youtube.com/embed/WdWja6Y7blc" frameborder="0" allowfullscreen></iframe>
</paper-dialog>
<!--Poster Dialog -->
<paper-dialog id="posterdialog" style="height:90%;">
  <!--<div style="background-image: url('./images/poster.jpg');margin:auto;width:95%;height:100%; background-size:100% 100%"></div>-->
  <img src="./images/poster.jpg" height="95%"/>
</paper-dialog>
<paper-dialog id="scheduledialog" style="height:90%;">
  <!--<div style="background-image: url('./images/poster.jpg');margin:auto;width:95%;height:100%; background-size:100% 100%"></div>-->
  <img src="./images/schedule.jpg" height="95%"/>
</paper-dialog>

<!-- Start of profile dialog-->
<paper-dialog id="contactdialog" style="background:rgba(10,10,10,0.9); color:#fff;" with-backdrop >
    <center style="background:#007daf;padding-top:25px;padding-bottom:20px;"><h2>Student Co-ordinators</h2></center>
    <paper-dialog-scrollable>
      <table border="0" style="margin:auto;text-align:center;">
        <tr>
          <td colspan="2">
            <a href="#"><div class="profile" style="background-image: url('./images/jerin.jpg')" onclick="document.getElementById('jerin-dropdown').toggle();"></div></a>
            <iron-dropdown id="jerin-dropdown" horizontal-align="right" vertical-align="top">
              <div class="dropdown-content">
                Jerrin James | <iron-icon icon="communication:contact-phone"></iron-icon> | 9686530428
              </div>
            </iron-dropdown>
          </td>
        </tr>
        <tr>
          <td>
            <a href="#"><div class="profile" style="background-image: url('./images/suzan.jpg')" onclick="document.getElementById('suzan-dropdown').toggle();"></div></a>
            <iron-dropdown id="suzan-dropdown" horizontal-align="right" vertical-align="top">
              <div class="dropdown-content">
                Sussan Elias | <iron-icon icon="communication:contact-phone"></iron-icon> | 8095510370
              </div>
            </iron-dropdown>
          </td>
          <td>
            <a href="#"><div class="profile" style="background-image: url('./images/nambita.jpg')" onclick="document.getElementById('nambita-dropdown').toggle();"></div></a>
            <iron-dropdown id="nambita-dropdown" horizontal-align="right" vertical-align="top">
              <div class="dropdown-content">
                        Namita Gupta | <iron-icon icon="communication:contact-phone"></iron-icon> | 7406435312
              </div>
            </iron-dropdown>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <a href="#"><div class="profile" style="background-image: url('./images/karanjit.jpg')" onclick="document.getElementById('karanjit-dropdown').toggle();"></div></a>
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

<paper-dialog id="login" style="background:rgba(255,255,255,0.9); color:#fff;" with-backdrop>
     <center style="background:#007daf;padding-top:25px;padding-bottom:20px;"><h2>College Profile Login</h2></center>
     <div id="container" style="text-align:center;">
      <form method="post" action="profile.php">
      <paper-input type="text" name="email" placeholder="email"/></paper-input>
      <paper-input type="password" name="pass" placeholder="password"/></paper-input>
      <paper-button type="submit" style="background-color:#737379;" value="login"/><button style="color:#fff;">Login</button></paper-button>

      </form>
      </div>
</paper-dialog>

<paper-dialog id="websitedialog" style="background:rgba(10,10,10,0.9); color:#fff;width:40%" with-backdrop>
  <center style="background:#007daf;padding-top:25px;padding-bottom:20px;"><h2>Website Developers</h2></center>
<center>
  <div style="display:block;float:left">
    <a href="#jonathan-dropdown"><div class="profile" style="background-image: url('./images/jonathan.jpg')" onclick="document.getElementById('jonathan-dropdown').toggle();"></div></a>
    <iron-dropdown id="jonathan-dropdown" horizontal-align="right" vertical-align="top">
      <div id="jonathan" class="dropdown-content">
                Jonathan Fidelis Paul | <a href="https://www.facebook.com/jonathan.paul.5076"><img src="./images/facebook-box.png" style="position:relative;top:5px;" width="24" height="24"></a>
      </div>
    </iron-dropdown>
  </div>
  <div style="display:block;float:right">
    <a href="#jaison-dropdown"><div class="profile" style="background-image: url('./images/jaison.jpg')" onclick="document.getElementById('jaison-dropdown').toggle();"></div></a>
    <iron-dropdown id="jaison-dropdown" horizontal-align="right" vertical-align="top">
      <div id="jaison" class="dropdown-content">
                Jaison Saji | <a href="https://www.facebook.com/Jaison.hacker"><img src="./images/facebook-box.png" style="position:relative;top:5px;" width="24" height="24"></a>
      </div>
    </iron-dropdown>
  </div>
</center>
  <hr style="width:80%">
  <div>
    <h3>About Website </h3>
    <br>
    This site has incorparated elements of modular design and technology.
    <br>From the console (on clicking the mascot), to the events page's auto generation from coded templates; we tried to stick to the theme - <a href="#mobiux_logo" class="anchor">MOBIUX</a>
    <br>The source code is available on github <br><a class="anchor" href="https://github.com/jfdpaul/Gateways16">(https://github.com/jfdpaul/Gateways16)</a>.
  </div>
</paper-dialog>



<!-- Toasts-->
<paper-toast class="toast"   id="toast1" duration="0" text="Wrong email or password!">
  <a href="#" onclick="toast1.toggle()" style="width:40px;text-decoration:none;padding:2px;border-radius:100px;background-color:#007a99;color:#fff;">x</a>
</paper-toast>
<!-- Animation of welcome message -->
<script>

 toast1.fitInto = first_view;
function animateGateways(){

  <?php
   if(isset($_GET['error']) && $_GET['error']==1){
    echo "toast1.open();";
  }
  ?>
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
  function pauseTeaser(){
      var vdiag=document.getElementById("teaserdialog");
      vdiag.close();
      var iframe = document.getElementById('myteaser');
      iframe.src = iframe.src;
    }
    function toggleMenu() {
      var menu=document.getElementById("menu");
      if(menu.style.visibility=="hidden"){
        menu.style.visibility="visible";
      }
      else {
        menu.style.visibility="hidden";
      }
    }
</script>
</html>
<?php
mysqli_close($conn);
?>
