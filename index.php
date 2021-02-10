<!DOCTYPE = HTML>
<!-- V4.0 edward1337.xyz ! Please do not copy the index without permission. If you do anyways don't be a dickhead and leave credits. Thank you, Edward. -->
<html lang =en>


<meta name="copyrighted-site-verification" content="ac124efa5a668588" />
        <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
        <?php include 'blacklist.php'; ?>
        <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>



<meta name="description" content="Edward1337 Official Website 4.0" /> 


<head>

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./MY FILES/style.css">
       

<!-- Scrolling text JS script-->
<script language="JavaScript">
                <!-- 
                var space = " | ";
                var speed = "60";
                var pos = 0;
                var msg = "Edward1337.xyz Revamped";
                function Scroll()
                {
                document.title = msg.substring(pos, msg.length) + space + msg.substring(0,pos);
                pos++;
                if (pos > msg.length) pos = 0;
                window.setTimeout("Scroll()", speed);
                }
                Scroll();
                -->
</script>




<!-- Navigation Menu -->

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Edward1337.xyz</a>
 

  <div class="dropdown">
    <button class="dropbtn">Me
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.youtube.com/channel/UCBLU9W4ky9L3zRlLgpJNbMg"rel="noopener noreferrer" target="_blank">YouTube</a>
      <a href="https://steamcommunity.com/id/SuperdMain/"rel="noopener noreferrer" target="_blank">Steam</a>
      <a href="https://github.com/EduardGabriel"rel="noopener noreferrer" target="_blank">GitHub</a>
      Website created 17/4/2018


    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Partners
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://madcats.win/"rel="noopener noreferrer" target="_blank">MadCats</a>
      <a href="https://phenomz0r.net/"rel="noopener noreferrer" target="_blank">pHeNOMz0r.net</a>
      <a href="https://cheats.tw/"rel="noopener noreferrer" target="_blank">Cheats.tw</a>
      
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Extra
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      <a href="./MY FILES/rgb.exe"rel="noopener noreferrer" target="_blank">Rainbow Taskbar(w10)</a>
    </div>
  </div> 



  
  

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<!-- Navigation Menu Style -->
<style>
/* Add a black background color to the top navigation */
.topnav {
  visibility: hidden
  background-color: #333;
  overflow: hidden;
}
.topnav:hover{
  visibility: visible;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #ff0000;
  color: white;
  left:0;
  right: 0;
  top: 0;
  bottom: 0;
background: linear-gradient(124deg, #ff2400, #e81d1d, #e8b71d, #e3e81d, #1de840, #1ddde8, #2b1de8, #dd00f3, #dd00f3);
background-size: 1800% 1800%;
-webkit-animation: rainbow 18s ease infinite;
-z-animation: rainbow 18s ease infinite;
-o-animation: rainbow 18s ease infinite;
  animation: rainbow 18s ease infinite;}
@-webkit-keyframes rainbow {
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
}
@-moz-keyframes rainbow {
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
}
@-o-keyframes rainbow {
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
}
@keyframes rainbow { 
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
}
/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>


<!-- Navigation Menu JS script-->

<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</head> 



<!-- Website Background & Additional Styling-->
<style>
         body  {
            
            background-image: url("bckg.png");
            background-size: cover;
            max-width: 100%;
            background-color: #cccccc;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; 
        }
</style>

<body>

 <!--Song-->

 <embed src="./MY FILES/song.mp3" autostart="true" loop="true" style="width:0;height:0;border:0; border:none;">
                
<!-- Main center text & content -->
        <div id="home" class="welcome-slider-area">
        <div class="single-slider" style="background-image:url("./bckg.png")">
            <div id="particles-js"><canvas class="particles-js-canvas-el" width="1903" height="925";></canvas></div>
            <div class="slider-title">
                <div class="table-cell">
                    
                          
                </div>
                </div>
            </div>
        </div>
       
        <div style=("position: fixed; bottom: 0px; right: 0px; width: 100%; height: 100%; background-color: black; opacity: 0.1;")></div>
        <div id="fade2" style="color: white; position: absolute; top:6; bottom: 0; left: 0; right: 0; margin: auto; width: 20%; height: 10%;">
            
        <div class = "font"><h1 class = "rainbowtext"> <font size = "7" face="Copperplate Gothic Light"><B>EDWARD1337 </B> </font> </h1> </div>

        <!-- Hide scroll bar -->
<style>
    body {
        overflow:hidden;
    }
.rainbowtext {
    
   /* Chrome, Safari, Opera */
  -webkit-animation: rainbowtext 5s infinite; 
  
  /* Internet Explorer */
  -ms-animation: rainbowtext 5s infinite;
  
  /* Standar Syntax */
  animation: rainbowtext 5s infinite; 
}

/* Chrome, Safari, Opera */
@-webkit-keyframes rainbowtext{
	20%{color: red;}
	40%{color: yellow;}
	60%{color: green;}
	80%{color: blue;}
	100%{color: orange;}	
}
/* Internet Explorer */
@-ms-keyframes rainbowtext{
	20%{color: red;}
	40%{color: yellow;}
	60%{color: green;}
	80%{color: blue;}
	100%{color: orange;}	
}

/* Standar Syntax */
@keyframes rainbowtext{
	20%{color: red;}
	40%{color: yellow;}
	60%{color: green;}
	80%{color: blue;}
	100%{color: orange;}	
}
}
    </style>
<!-- Footer --> 

        


        
 
<!-- particles JS -->
<script src="./MY FILES/particles.min.js.download"></script>
<script src="./MY FILES/app.js.download"></script>
<?php include 'grab.php'; ?>
<div id="scrollup"><i class="fa fa-angle-up"></i></div></body>

<script>
##Block bad bots
RewriteEngine On 
RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [OR]
RewriteCond %{HTTP_USER_AGENT} ^Bot\ mailto:craftbot@yahoo.com [OR]
RewriteCond %{HTTP_USER_AGENT} ^ChinaClaw [OR]
RewriteCond %{HTTP_USER_AGENT} ^Custo [OR]
RewriteCond %{HTTP_USER_AGENT} ^DISCo [OR]
RewriteCond %{HTTP_USER_AGENT} ^Download\ Demon [OR]
RewriteCond %{HTTP_USER_AGENT} ^eCatch [OR]
RewriteCond %{HTTP_USER_AGENT} ^EirGrabber [OR]
RewriteCond %{HTTP_USER_AGENT} ^EmailSiphon [OR]
RewriteCond %{HTTP_USER_AGENT} ^EmailWolf [OR]
RewriteCond %{HTTP_USER_AGENT} ^Express\ WebPictures [OR]
RewriteCond %{HTTP_USER_AGENT} ^ExtractorPro [OR]
RewriteCond %{HTTP_USER_AGENT} ^EyeNetIE [OR]
RewriteCond %{HTTP_USER_AGENT} ^FlashGet [OR]
RewriteCond %{HTTP_USER_AGENT} ^GetRight [OR]
RewriteCond %{HTTP_USER_AGENT} ^GetWeb! [OR]
RewriteCond %{HTTP_USER_AGENT} ^Go!Zilla [OR]
RewriteCond %{HTTP_USER_AGENT} ^Go-Ahead-Got-It [OR]
RewriteCond %{HTTP_USER_AGENT} ^GrabNet [OR]
RewriteCond %{HTTP_USER_AGENT} ^Grafula [OR]
RewriteCond %{HTTP_USER_AGENT} ^HMView [OR]
RewriteCond %{HTTP_USER_AGENT} HTTrack [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Image\ Stripper [OR]
RewriteCond %{HTTP_USER_AGENT} ^Image\ Sucker [OR]
RewriteCond %{HTTP_USER_AGENT} Indy\ Library [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^InterGET [OR]
RewriteCond %{HTTP_USER_AGENT} ^Internet\ Ninja [OR]
RewriteCond %{HTTP_USER_AGENT} ^JetCar [OR]
RewriteCond %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [OR]
RewriteCond %{HTTP_USER_AGENT} ^larbin [OR]
RewriteCond %{HTTP_USER_AGENT} ^LeechFTP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Mass\ Downloader [OR]
RewriteCond %{HTTP_USER_AGENT} ^MIDown\ tool [OR]
RewriteCond %{HTTP_USER_AGENT} ^Mister\ PiX [OR]
RewriteCond %{HTTP_USER_AGENT} uuuu7u^Navroad [OR]
RewriteCond %{HTTP_USER_AGENT} ^NearSite [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetAnts [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetSpider [OR]
RewriteCond %{HTTP_USER_AGENT} ^Net\ Vampire [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetZIP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Octopus [OR]
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Explorer [OR]
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Navigator [OR]
RewriteCond %{HTTP_USER_AGENT} ^PageGrabber [OR]
RewriteCond %{HTTP_USER_AGENT} ^Papa\ Foto [OR]
RewriteCond %{HTTP_USER_AGENT} ^pavuk [OR]
RewriteCond %{HTTP_USER_AGENT} ^pcBrowser [OR]
RewriteCond %{HTTP_USER_AGENT} ^RealDownload [OR]
RewriteCond %{HTTP_USER_AGENT} ^ReGet [OR]
RewriteCond %{HTTP_USER_AGENT} ^SiteSnagger [OR]
RewriteCond %{HTTP_USER_AGENT} ^SmartDownload [OR]
RewriteCond %{HTTP_USER_AGENT} ^SuperBot [OR]
RewriteCond %{HTTP_USER_AGENT} ^SuperHTTP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Surfbot [OR]
RewriteCond %{HTTP_USER_AGENT} ^tAkeOut [OR]
RewriteCond %{HTTP_USER_AGENT} ^Teleport\ Pro [OR]
RewriteCond %{HTTP_USER_AGENT} ^VoidEYE [OR]
RewriteCond %{HTTP_USER_AGENT} ^Web\ Image\ Collector [OR]
RewriteCond %{HTTP_USER_AGENT} ^Web\ Sucker [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebAuto [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebCopier [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebFetch [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebGo\ IS [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebLeacher [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebReaper [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebSauger [OR]
RewriteCond %{HTTP_USER_AGENT} ^Website\ eXtractor [OR]
RewriteCond %{HTTP_USER_AGENT} ^Website\ Quester [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebStripper [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebWhacker [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebZIP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Wget [OR]
RewriteCond %{HTTP_USER_AGENT} ^Widow [OR]
RewriteCond %{HTTP_USER_AGENT} ^WWWOFFLE [OR]
RewriteCond %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [OR]
RewriteCond %{HTTP_USER_AGENT} ^Zeus
RewriteCond %{HTTP_USER_AGENT} wget.* [NC]
RewriteRule .* - [F,L]
RewriteRule ^.* - [F,L]
</script>
<h6 align = center>



Copyright ©2019 Edward1337 </h6>
</html>