
<!DOCTYPE html>
<html lang="en-GB">
 <head>
  <meta charset="UTF-8">
  <title>User</title>
  <link rel='dns-prefetch' href='//www.google.com' />
  <link rel='dns-prefetch' href='//ajax.googleapis.com' />
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  <link rel='dns-prefetch' href='//s.w.org' />
  <style type="text/css">
  img.app-smiley,
  img.emoji {
   display: inline !important;
   border: none !important;
   box-shadow: none !important;
   height: 1em !important;
   width: 1em !important;
   margin: 0 .07em !important;
   vertical-align: -0.1em !important;
   background: none !important;
   padding: 0 !important;
  }
  a.bhead{
    margin-top: -36px;
    float: right;
    position: relative;
    right: 80px;
  }
  .headercountABet{
    margin-top: -40px;
    float: right;
    position: relative;
    right: 26px;
    font-size: 15px;
    border-radius: 100%;
    color: white;
    font-weight: bold;
    height: 15px;
  }
  a.bhead:hover .headercountABet:hover{
    color: #f00;
  }
  .small-detail{
    background: #F8F8F8;
  }
   .colorSite{
    
  }
  .colorSiteBar{
    background: #FFA500 !important;
    color: #333333;
  }
  /* BetTile team name box color */
  .colorT{
    background: #0E4835 !important;
  }
  /* BetTile text color */
  .colorText{
    color: white;
    font-weight: bold;
    font-size: 20px !important;
  }
  /* BetTile statement & date box color */
  .colorSt{
    background: #0E4835 !important;
  }
  /* BetTile statement & date text color */
  .colorStText{
     color: white;
  }
  /* Bet SubTile box color */
  .colorSubt{
    background: white !important;
    height: 32px !important;
    border-bottom: 0px solid #439158 !important;
    border-top: 3px solid #42997e !important;
  }
  /* Bet SubTile text color */
  .colorSubtText{
    color: #F5FB52 !important;
    font-size: 13.5px;
    font-weight: bold;
  }
  /* Bet SubTile Option box color */
  .colorSto{
    background: black !important;
    border: 0px solid #505050 !important;
    height: 10px !important;
    width: 10% !important;
  }
  /* Bet SubTile Option text color */
  .colorStoText{
    color: black !important;
    font-size: 13px;
  }
  /* Rate text color */
  .colorR{
    color: white;
  }
  .match-title-option, .match-sub-title, .small-rate-part, .big-rate-part, .match-title-option-rate, .match-title-option-rate-part{
      background: #14805E !important;
      border-bottom: 0px solid #505050 !important;
  }
  .okkDone{
      background: #F8EFFB !important;
  }
  .modalSignUp{
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 80px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #EAEDED !important;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
  margin-right: 20px;
  margin-top: 10px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
} 
.club{
  margin-top: 4px;
  font-size: 14px;
  color: #B0B0B0;
  height: 40px;
  width: 240px;
  border: 0px;
}
.green{
    color: green !important;
}
input[type=text], input[type=password], select {
  width: 240px !important;
  height: 40px !important;
  padding: 12px 30px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: white !important;
}
.bttn-register {
  width: 240px !important;
  height: 40px !important;
  background-color: #14805e !important;
  color: white !important;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.bttn-register:hover {
  background-color: #45a049;
}
.form-group{
}
.headerUp{
  margin-top: -20px;
  margin-left: -20px;
  width: 286px;
  height: 50px;
  text-align: center;
}
.headerUpText{
  position: relative;
  top: 10px;
  color: white;
}
  </style>
  <meta name="lazycrab-framework-css" content="lazycrab-framework-css" id="lazycrab-framework-css">
  <link rel='stylesheet' id='css_style-css' href='app-content/css/style.css' type='text/css' media='all' />
  <link rel='stylesheet' id='jquery-style-css' href='app-content/css/jquery-ui.css' type='text/css' media='all' />
  <link rel='stylesheet' id='cr-style-css' href='app-content/css/style.front.css' type='text/css' media='all' />
  <link rel='stylesheet' id='wpstatistics-css-css' href='app-content/css/frontend.css' type='text/css' media='all' />
  <link rel='stylesheet' id='las-flag-css' href='app-content/css/flag-icon.min.css' type='text/css' media='all' /> 
  <link rel='stylesheet' id='theme-style-css' href='app-content/css/style2.css' type='text/css' media='all' />
  <link rel='stylesheet' id='lazycrab-media-queries-css' href='app-content/css/media-queries.css' type='text/css' media='all' />
  <link rel='stylesheet' id='app-mediaelement-css' href='app-content/css/app-mediaelement.min.css' type='text/css' media='all' />
  <link rel="stylesheet" type="text/css" href="app-content/css/match-format.css">
  <link rel="stylesheet" type="text/css" href="app-content/css/sports-style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

  <script src="js/jquery.min_1.js"></script>
  <script type="text/javascript" src="app-content/js/abupdate.js"></script>
  <script type='text/javascript' src='app-content/js/jquery.js'></script>
  <script type='text/javascript' src='app-content/js/main.min.js'></script>
  <script type='text/javascript' src='app-content/js/smallHeaderr.js'></script>
  <script>
    $(document).ready(function() {
        $("body").on("contextmenu", function(e) {
            return false;
        });
        $('body').bind('cut copy', function(e) {
             e.preventDefault();
        });
    });
    document.addEventListener("keydown", function(e){
        if (e.ctrlKey || e.keyCode==123) {
            e.stopPropagation();
            e.preventDefault();
        }
    });
  </script>
  <meta name="generator" content="WordPress 4.9.8" />
  <script>
    var tf_mobile_menu_trigger_point = 980;
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

 <body class="home page-template page-template-pages page-template-home page-template-pageshome-php page page-id-7 lazycrab-fw-1-0-7 bethook-1-0-3 webkit not-ie default_width sidebar1 no-touch has-fixed-header">
  <script type="text/javascript">
   function lazycrabMobileMenuTrigger() {
    if( document.body.clientWidth <= tf_mobile_menu_trigger_point ) {
       jQuery( 'body' ).addClass( 'mobile_menu_active' );
      } else {
       jQuery( 'body' ).removeClass( 'mobile_menu_active' );
      }
    }
    lazycrabMobileMenuTrigger();
    jQuery( window ).resize( lazycrabMobileMenuTrigger );
  </script>
  <div id="headerwrap" class="fixed-header">
		<div class="width-top" style="display:none!important"> 
      <div class="mamu-header">				
				<div class="">chutia shrisa not working block</div> 
      </div>
    </div>				  
   <div class="mid-fullwidth home">            
    <div>
      <div>
        <div class="jxhead left">
          <div id="site-logo">
            <a href="index.php" title="Betting site">
              <span style="font-size: 18px;">Home</span>
            </a>
          </div>    
        </div>
        <div class="jxhead center">   
          <ul class="top-menr">
            <li class="asport" id="highlightable"><a class="hf" href="/"> Sports</a></li>       
            <li class="ainplay allsportlive" id="highlightable"><a class="hf" href="#"> In-Play </a></li>      
            <li class="ainplay" id="highlightable"><a class="hf" href="#"> Up-Coming </a></li>           
          </ul> 
        </div>
        <script>
         jQuery(function () {
          jQuery('#highlightable').click(function () {
           jQuery(this).addClass('div#body');
           setTimeout(function () {
            jQuery('#highlightable').removeClass('highlighted');
           }, 2000);
          });
         });
         //profile pic click function
        </script>   
        <div class="jxhead right">   
          <ul class="tabs  primary-nav tt" style="max-width:670px;">            
                        <li class="tabs__item">
                <p class="statusin" id="ftgtyy"></p>
				        <div class="loginoOT">
				          <ul class="ulogg">
				            <li>
                      <input id="userIdOfuser" type="text" name="username" placeholder="username">
				              <br> <a class="hyel" href="#">Join Now</a>
				            </li>			
				            <li>
                      <input id="passwordOfuser" type="password" name="password" placeholder="password">
				              <br> <a class="hyel" href="#">Lost Login?</a>
			            	</li>			
			            	<li>
				              <input class="submit_button btn-login" id="userSignInForm" type="submit" value="Go" name="submit">
                    </li>
				
				          </ul>
				        </div>           
            </li>
                    </ul>    
      </div>   
     </div>
    </div>           
   </div> 
   <!-- sport file for mobile view -->
   <header id="header" class="pagewidth clearfix header-on-scroll" itemscope="itemscope" style="background: #0E4835 !important;">
      <div id="site-logo">
       
                <a href="index.php" title="Betting site"><span style="font-size: 14px; color: white;">Home</span></a>
               
      </div>
      <div id="site-description" class="site-description">
        <span>sports betting</span>
      </div>
      <a class="mhead" href="index.php" style="font-size: 15px; margin-left: 35px; color: white;">In-Play</a>
      <!-- / For login/signup/account -->    
       
      <div class="log-sign">      
        <span id="join-mobile" style="color: white;"> Join </span>
        <a style="margin-left:15px;color: white;" id="login-mobile" href="loginnly.php">Login</a>
      </div>
            <div class="usr-ctl" id="usersmallview" style="display: none; text-transform: none;">
        <ul class="ftc">
          <div class="box">
            <div class="line">
              <div class="triangle">
              </div>
            </div>
          </div>
          
          <div class="strowx">
            <ftd class="rs balance">
            </ftd>
            <df class="ffe">
                <a href="index.php" title="Betting site">Home</a>
            </df>
          </div>
          <div class="strow">
            <ftd class="rs balance">
            </ftd>
            <df class="ffe">
                <a href="#" class="header-deposit"> Deposit</a>
            </df>
          </div>
          <div class="strowc">
            <ftd class="rsc"> <a href="setting.php"> Profile </a>
            </ftd>
            <df class="ffec">
              <a href="#"> <i class="fa fa-cog"></i></a>
            </df>
          </div>
          <div class="strowc">
            <ftd class="rsc"> <a href="#" class="small-action"> Wallet <i class="fa fa-angle-down"></i></a>
            </ftd>
            <df class="ffec">
              <a href="#"> <i style="font-size: 17px;" class="fa fa-folder"></i></a>
            </df>
          </div>
          <div class="small-detail" id="small-action-detail" style="display: none;">
            <ul class="ftc">
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;
                  <i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-deposit">Deposit</a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-withdraw"> Withdrawal </a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;
                  <i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-sendMoney">Send Money</a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;
                  <i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-sendMoney">Balance Transfer</a>
                </ftd>
              </div>
            </ul>
          </div>
          <div class="strowc">
            <ftd class="rsc"> <a href="#" class="small-history"> Statement <i class="fa fa-angle-down"></i></a>
            </ftd>
            <df class="ffec">
              <a href="#"> <i style="font-size: 17px;" class="fa fa-folder"></i></a>
            </df>
          </div>
          <div class="small-detail" id="small-history-detail" style="display: none;">
            <ul class="ftc">
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-activebeth"> Bets </a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-settled-bet"> Old Bets </a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-settled-betbc"> Settled Cricket </a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-deposith">Deposit History</a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-withdrawh">Withdrawal History</a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-sendMoneyh">Send Money History</a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-sendMoneyh">Balance Transfer History</a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-transetions">Transections</a>
                </ftd>
              </div>
              <div class="strowc">
                <ftd class="rsc">&nbsp;&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp; <a href="#" class="header-transetionsbc">Transections Cricket</a>
                </ftd>
              </div>
            </ul>
          </div>
          <div class="strowc">
            <ftd class="rsc"> <a class="log_ou" href="?logout"> Logout</a> 
            </ftd>
            <df class="ffec">
              <a href="#"> <i class="fa fa-power-off"></i></a>
            </df>
          </div>  
        </ul>
      </div>  
    <!-- /#mobile-menu -->
     </header>
    <!-- /#header -->
  </div>
  <div id="myModal" class="modalSignUp">
    <div class="modal-content">
      <div class="headerUp" style="background: #14805e !important;">
        <span class="headerUpText">Registration</span>
        <span class="close">&times;</span>
      </div>
      <div>
        <div>
          <div class="panel-body colorSite">
            <div class="row">
              <div class="col-lg-12">
                <div id="login-form" style="display: block;">
                  <div style="width: 100%;" class="form-group">
                    <p class="status" style="color: #14805e;"></p> 
                  </div>
                  <div style="width: 100%;" >
                    <input type="text" name="username" class="name" tabindex="1" placeholder="Full Name" value="">
                  </div>
                  <div style="width: 100%;">
                    <input type="text" name="username" class="userId" tabindex="1" placeholder="Username" value="">
                  </div>
                  <div style="width: 100%;" >
                    <select class="form-control club" id="club" name="club" tabindex="1">
                                                    <option value="Game24w">5winbd</option>
                                                          <option value="King Club">Win Club</option>
                                                          <option value="HELP-CLUB">🇧🇩Sirajganj Club🇧🇩</option>
                                                          <option value="degreeclubkf">Green Table</option>
                                                          <option value="Faridpur Club">🌀BET-GURU CLUB🌀</option>
                                                          <option value="Public Club">🏠 Family Club 🏠</option>
                                                          <option value="boxclubgg">⚽Rajshahi Club⚽</option>
                                                          <option value="Dhaka Club">🏴 BLACK _WHITE _CLUB  🏁</option>
                                                          <option value="Bogura King">NOT-OUT CLUB</option>
                                                          <option value="cityclubmm">BET-BOSS CLUB</option>
                                                          <option value="cricketClub334">Five Ster Club</option>
                                                          <option value="Bazar100.netbaz">ACTIVE CLUB</option>
                                                          <option value="boss65">🇧🇩 All Sports Club 🇧🇩</option>
                                                          <option value="Kingster">Newzland Club</option>
                                                          <option value="BD24 Club">BD Club</option>
                                                          <option value="australiaClub1m">🏆GREEN CLUB🏆</option>
                                                          <option value="championclub0p">Public Club</option>
                                                          <option value="t20club1jk">LINE-GURU CLUB</option>
                                                          <option value="realmadridclubr9">🏫 City Club 🏫</option>
                                                          <option value="Captainvirat18">🌾DHUNMUNDI CLUB🌾</option>
                                                          <option value="smartsclub4r">winBet</option>
                                                          <option value="messi10club0d">Update club</option>
                                                          <option value="kingstarclubtt">❤️ Boss Labar ❤️</option>
                                                          <option value="Boss24 club">Boss24 club</option>
                                                          <option value="Sportssp">TVS CLUB</option>
                                                          <option value="Winbetclubsp">❤️MEHER PUR CLUB❤️</option>
                                                          <option value="winBET">Betting masters</option>
                                                          <option value="maxbetclub09">☀️SP CLUB☀️</option>
                                                          <option value="Jamalpur Club">💛Dhinajpur Dollar Club💛</option>
                                                          <option value="Pabnasp">ALL THE BEST CLUB</option>
                                                          <option value="princebdclub2i">Dot Club</option>
                                                          <option value="MsDhoni7sp">Raj Bet Club</option>
                                                          <option value="betbazarclub6i">TOP ONE CLUB</option>
                                                          <option value="clubboss420q8">MelBet100%Club</option>
                                                          <option value="FiveStarp">NARSINGDI CLUB</option>
                                                          <option value="Rana club">Man City</option>
                                                          <option value="maxbetclubko">BET-LOVER CLUB</option>
                                                          <option value="Munshiganj Club">Bksp Club</option>
                                                          <option value="SMARTbaza">bet brothers club</option>
                                                          <option value="bet365">🎎 Win7sports club 🎎</option>
                                                          <option value="Day Night">★University Club★</option>
                                                          <option value="SherpurClub">Help line club</option>
                                                          <option value="Unitedssp">King Club</option>
                                                          <option value="sylhetclubi8">Sports Club</option>
                                                          <option value="MAX CLUB">Network Club</option>
                                                          <option value="SMART CLUB">Moon Star Club</option>
                                                          <option value="BOSS 365">Pabna club</option>
                                                          <option value="AsiaClubsp">1Xbet Tips Club</option>
                                                          <option value="Boys Club">MESSI 10 CLUB</option>
                                                          <option value="Davilcnw">🏆 KING STAR CLUB  🏆</option>
                                                          <option value="FASHIONbaz">Barishal nusu Club</option>
                                                          <option value="Captainviratsp">Tamim Iqbal Club</option>
                                                          <option value="Bangladesh">🇧🇩BANGLADASH CLUB🇧🇩</option>
                                                          <option value="theworldclubkk">🇧🇩HELP-CLUB🇧🇩</option>
                                                          <option value="City Club">🇮🇳 Friends Club 🇮🇳</option>
                                                          <option value="Green Table">🏏🏏SK75 Club🏏🏏</option>
                                                          <option value="msdhoni7clubn7">JAMUNA CLUB </option>
                                                          <option value="Khalna Club">Khulna Club</option>
                                                          <option value="DEGREEsp">UNIQUE CLUB BD</option>
                                                          <option value="Argentinaclubsp">Tipper Shawon Club ✅</option>
                                                          <option value="New Club">🏆 Maxwell club 🏆</option>
                                                          <option value="BET-GURU CLUB">Gulshan Club</option>
                                                          <option value="inplaydg5">POPULAR CLUB</option>
                                                          <option value="boguraclubdr">National Club</option>
                                                          <option value="madaripurclubk5">Rangpur club</option>
                                                          <option value="Big Boss"> 🌼Barcelona Club🌼</option>
                                                          <option value="Dubaiclub45">Star Club</option>
                                                          <option value="updateclub">🐯🐯 Bagerhat Club 🐯🐯</option>
                                                          <option value="MASHRAFEboss">DARAZ_CLUB</option>
                                                          <option value="eagleClub">Best Club</option>
                                                          <option value="Rock Club">Lions Club</option>
                                                          <option value="Royalsspl">CD CLUB</option>
                                                          <option value="activeclubys">Betting👉 life club ✍️</option>
                                                          <option value="popularclub3ir">❤️❤️ Lady Doll Club ❤️❤️</option>
                                                          <option value="Mexico Club">Andru Rassell club</option>
                                                          <option value="lionsClub@1">ROCKAR CLUB✅</option>
                                                          <option value="Freedomsp">💙 Rainbow Club 💙</option>
                                                          <option value="All Sports Club"> 🏏🏏Victorians🏏🏏</option>
                                                          <option value="indiaclub4t">AB DE VILLIERS</option>
                                                          <option value="sirajgonjclubeo">Brazil Club🇧🇷</option>
                                                          <option value="sirajgonjclubsq">Bikrampur Club</option>
                                                          <option value="Tangailsp">🇯🇵 Japan Club 🇯🇵</option>
                                                          <option value="freedomclub6ks">🏏🏏TOP-GURU CLUB🏏🏏</option>
                                                          <option value="winnerSite">Max club</option>
                                                          <option value="bpliplclub9wx">💎 CTG CLUB 💎</option>
                                                </select>
                  </div>
                  <div style="width: 100%;">
                    <input class="sponsor" type="text" name="sponsor" tabindex="1" placeholder="Sponsor" value="">
                  </div>
                  <div style="width: 100%;">
                    <input class="mobileNumber" type="text" name="mobileNumber" tabindex="2" placeholder="Mobile Number" value="">
                  </div>
                  <div style="width: 100%;">
                    <input class="password" type="password" name="password" tabindex="2" placeholder="Password">
                  </div>
                  <div style="width: 100%;">
                    <input class="confirmPassword" type="password" name="confirm-password" tabindex="2" placeholder="Confirm Password">
                  </div>
                  <div style="width: 100%">
                    <input type="submit" name="register-submit" tabindex="2" class="bttn-register" value="Register Now">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).on('click', '#join-mobile', function () {
      $('.modalSignUp').show();
    });
    $(document).on('click', '.close', function () {
      $('.modalSignUp').hide();
    });
    
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("login-mobile");
    btn.onclick = function() {
      modalSignIn.style.display = "block";
    }
    $(".bttn-register").on("click", function () {
      $(".status").html("<h3>Wait Please...</h3>");
      var userId = $(".userId").val();
      var name = $(".name").val();
      var password = $(".password").val();
      var club = $(".club").val();
      var mobileNumber = $(".mobileNumber").val();
      var sponsor = $(".sponsor").val();
      var confirmPassword = $(".confirmPassword").val();
    
      $.ajax({
        method: "POST",
        url: "userSignUp.php",
        data: {name: name, userId: userId, password: password,confirmPassword:confirmPassword, mobileNumber: mobileNumber, sponsor: sponsor, club: club},
        success: function (data) {

            if (data!== "") {
                $(".status").text(data);
            } else {
              $(".status").html("Succesfully Logining...");
              var timer = setTimeout(function() {
                  window.location='index.php'
                }, 2000);
            }
        }
      });
    });
</script><div id="body" class="clearfix">
  <link rel="stylesheet" type="text/css" href="app-content/css/index-style.css">
  <link rel="stylesheet" type="text/css" href="app-content/css/slip-style.css">
  <!-- layout-container -->
    <div id="layout" class="pagewidth clearfix">
    <!-- content -->
      <div id="content" class="clearfix">
        <div class="row" id="refin">
          <div class="column left-col">            
          </div>

        <div class="column mid-col">
          <div id="container" class="sportsroll">
          </div>
          <div id="sports-logo"></div>
          <div class="sport-football">
            <div class="notice">
                            <span><p>৩০ মিনিটে withdraw দেওয়া হয়। Withdraw limit 500 to 25000 tk.&radic;&radic; [ 24 hours open] Deposit 100 to Unlimited.আপনাদের সর্ব্বোচ্চ সেবা দেওয়াটাই আমাদের মুল লক্ষ্য ৷</p>
</span>
            </div>
            <div class="bettings-wrapper" style="color: white; background: #0E4835;"></div>
            <div class="bettings-wrapperIn" style="color: white; background: #0E4835;"></div>
            <div class="bettings-wrapperUp" style="color: white; background: #0E4835;"></div>
         </div>

        </div>
        <div class="column mid-right-col">
          
        </div>
        <div class="column" id="column365" style="display: none;">
          <div id="betslip-wrapper" style="min-height: 7%;">
            <div class="points-holder">
              <ul class="betslp">
                <li class=""><span class="multi-number">1</span> Bet Slip</li>
                <li>
                  <a class="balance" style="color: black;" href="#"></a>
                </li>
                <li>
                  <span class="pot-class-sm" style="color: black;"></span>
                </li>
              </ul>
            </div>
            <div class="betslip-wrapper-box">
              <div class="bets-holder" id="empty-slip">     
                <div class="info-holder" style="padding-top: 16px;">
                </div> 
              </div>
              <!-- betslip -->
              <div class="bets-holder">
                <div class="error-holder"></div>
                <div id="wholly">
                  <div class="pot-error-notice-holder"></div>
                  <div class="bet-option-slip-wrapper">
                    <!-- slip stand here -->
                  </div>
                </div>
              </div>
              <!-- bet action-->
              <div class="default-stake-rate">
                 <div class="default-rate">500</div>
                 <div class="default-rate">1000</div>
                 <div class="default-rate">3000</div>
                 <div class="default-rate">4000</div>
                 <div class="default-rate">5000</div>
              </div>
              <div class="pot-action">
                <div class="pot-stake">
                  <input type="number" min="1" class="pot-stake-input pot-stake-inputno stake" placeholder="Input Stake" step="1" id="stake-input">
                </div>
                <div class="pot-rate">
                  <div class="pot-rate-text">Rate</div>
                  <div class="pot-rate-number pot-rate-numberno"></div>
                </div>
                <div class="pot-submit-button" id="pot-submit-button-action">
                  <div class="pot-submit-one">Place Bet</div>
                  <div class="pot-submit-two">Return: <span class="pot-submit-two-number">00.00</span></div>
                  <div class="pot-submit-button-load"></div>
                </div>
                <div class="pot-submit-button" id="pot-submit-button-actionlo" style="display: none;">
                  <div class="pot-submit-one">Place Bet</div>
                  <div class="pot-submit-two">Return: <span class="pot-submit-two-number">00.00</span></div>
                  <div class="pot-submit-button-load"></div>
                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="column" id="column365cb1" style="display: none;">
          <div id="betslip-wrapper" style="min-height: 7%;">
            <div class="points-holder">
              <ul class="betslp">
                <li class=""><span class="multi-number">1</span> Bet Slip</li>
                <li>
                  <a class="balance" style="color: black;" href="#"></a>
                </li>
                <li>
                  <span class="pot-class-sm" style="color: black;"></span>
                </li>
              </ul>
            </div>
            <div class="betslip-wrapper-box">
              <div class="bets-holder" id="empty-slip">     
                <div class="info-holder" style="padding-top: 16px;">
                </div> 
              </div>
              <!-- betslip -->
              <div class="bets-holder">
                <div class="error-holder"></div>
                <div id="wholly">
                  <div class="pot-error-notice-holder"></div>
                  <div class="bet-option-slip-wrapper">
                    <!-- slip stand here -->
                  </div>
                </div>
              </div>
              <!-- bet action-->
              <div class="default-stake-rate">
                 <div class="default-rate">500</div>
                 <div class="default-rate">1000</div>
                 <div class="default-rate">2500</div>
                 <div class="default-rate">3000</div>
                 <div class="default-rate">4000</div>
              </div>
              <div class="pot-action">
                <div class="pot-stake">
                  <input type="number" min="1" class="pot-stake-input pot-stake-inputcb1 stake" placeholder="Input Stake" step="1" id="stake-input">
                </div>
                <div class="pot-rate">
                  <div class="pot-rate-text">Rate</div>
                  <div class="pot-rate-number pot-rate-numbercb1"></div>
                </div>
                <div class="pot-submit-button" id="pot-submit-button-actcb1">
                  <div class="pot-submit-one">Place Bet</div>
                  <div class="pot-submit-two">Return: <span class="pot-submit-two-number">00.00</span></div>
                  <div class="pot-submit-button-load"></div>
                </div>
                <div class="pot-submit-button" id="pot-submit-button-actcb1lo" style="display: none;">
                  <div class="pot-submit-one">Place Bet</div>
                  <div class="pot-submit-two">Return: <span class="pot-submit-two-number">00.00</span></div>
                  <div class="pot-submit-button-load"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column" id="column365cc1" style="display: none;">
          <div id="betslip-wrapper" style="min-height: 7%;">
            <div class="points-holder">
              <ul class="betslp">
                <li class=""><span class="multi-number">1</span> Bet Slip</li>
                <li>
                  <a class="balance" style="color: black;" href="#"></a>
                </li>
                <li>
                  <span class="pot-class-sm" style="color: black;"></span>
                </li>
              </ul>
            </div>
            <div class="betslip-wrapper-box">
              <div class="bets-holder" id="empty-slip">     
                <div class="info-holder" style="padding-top: 16px;">
                </div> 
              </div>
              <!-- betslip -->
              <div class="bets-holder">
                <div class="error-holder"></div>
                <div id="wholly">
                  <div class="pot-error-notice-holder"></div>
                  <div class="bet-option-slip-wrapper">
                    <!-- slip stand here -->
                  </div>
                </div>
              </div>
              <!-- bet action-->
              <div class="default-stake-rate">
                 <div class="default-rate">500</div>
                 <div class="default-rate">1000</div>
                 <div class="default-rate">2000</div>
                 <div class="default-rate">3000</div>
                 <div class="default-rate">3500</div>
              </div>
              <div class="pot-action">
                <div class="pot-stake">
                  <input type="number" min="1" class="pot-stake-input pot-stake-inputcc1 stake" placeholder="Input Stake" step="1" id="stake-input">
                </div>
                <div class="pot-rate">
                  <div class="pot-rate-text">Rate</div>
                  <div class="pot-rate-number pot-rate-numbercc1"></div>
                </div>
                <div class="pot-submit-button" id="pot-submit-button-actcc1">
                  <div class="pot-submit-one">Place Bet</div>
                  <div class="pot-submit-two">Return: <span class="pot-submit-two-number">00.00</span></div>
                  <div class="pot-submit-button-load"></div>
                </div>
                <div class="pot-submit-button" id="pot-submit-button-actcc1lo" style="display: none;">
                  <div class="pot-submit-one">Place Bet</div>
                  <div class="pot-submit-two">Return: <span class="pot-submit-two-number">00.00</span></div>
                  <div class="pot-submit-button-load"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="login-notice" style="display: none; border-radius: 3px;">
          <div class="login-notice-one">
            <div class="login-notice-close"><i class=" fa fa-remove"></i></div>
            <span style="font-size: 40px;"><i class="fa fa-thumbs-o-down"></i></span>
          </div>
          <div class="login-notice-two">
            <a href="loginnly.php">Please Login! <i class="fa fa-sign-in"></i></a>
            <a href="regi-login.php">
              <span style="font-size: 11px; text-decoration: underline;">Registration There <i class="fa fa-signup"></i></span>
            </a>
          </div>
        </div>
        <div class="pot-over-notice" style="display: none; border-radius: 3px;">
          <div class="pot-over-notice-one">
            <div class="pot-over-notice-close"><i class=" fa fa-remove"></i></div>
            <span style="font-size: 40px;"><i class="fa fa-bell-o"></i></span>
          </div>
          <div class="pot-over-notice-two">
            &nbsp;Maximum&nbsp; <span style="color: red; font-weight: bold; font-size: 18px;">1</span>
          </div>
        </div>
        <div class="samePot-notice" style="display: none;">
          <div class="samePot-notice-one">
            <div class="samePot-notice-close"><i class=" fa fa-remove"></i></div>
            <span style="font-size: 40px;"><i class="fa fa-bell-o"></i></span>
          </div>
          <div class="samePot-notice-two">You can Multibet in <b style="color: red;">1</b> time per match!</div>
        </div>
      </div>
    </div>
  </div>
<script> 
var url = window.location.href.split('?')[1];
if(url){
if(isNaN(url)){
    if(url.length < 1){
        $(".bettings-wrapper").load('hlithi.php');
        setTimeout(function(){
            $(".bettings-wrapperIn").load('hlit.php'); 
        },5000);
        setTimeout(function(){
            $(".bettings-wrapperUp").load('hlitupcomming.php');
        },5000);
    }
    else if (/allsport/.test(window.location.href)) {
        $(".bettings-wrapper").load('hlitall.php');
    }
    else if (/upcoming/.test(window.location.href)) {
        $(".bettings-wrapper").load('hlitupcomming.php');
    }
    else if (/football/.test(window.location.href)) {
        $(".bettings-wrapper").load('lfootball.php');
    }
    else if (/cricket/.test(window.location.href)) {
        $(".bettings-wrapper").load('lcricket.php');
    }
    else if (/basketball/.test(window.location.href)) {
        $(".bettings-wrapper").load('lbasketball.php');
    }
    else if (/tennis/.test(window.location.href)) {
        $(".bettings-wrapper").load('ltennis.php');
    }
    else if (/tablet/.test(window.location.href)) {
        $(".bettings-wrapper").load('lvolleyball.php');
    }
    else if (/hockey/.test(window.location.href)) {
        $(".bettings-wrapper").load('lhockey.php');
    }
    else if (/badminton/.test(window.location.href)) {
        $(".bettings-wrapper").load('lbadminton.php');
    }
    else if (/allsportlive/.test(window.location.href)) {
        $(".bettings-wrapper").load('onlylive.php');
    }
    else if (/activebet/.test(window.location.href)) {
        document.getElementById('profile-detail').style.display = 'none';
        $(".setting-option-detail").load('activeBet.php');
    }
}else{
    if (url == 1) {
        document.getElementById('profile-detail').style.display = 'none';
        $(".setting-option-detail").load('deposit.php');
    }
    else if (url == 2) {
        document.getElementById('profile-detail').style.display = 'none';
        $(".setting-option-detail").load('withdraw.php');
    }
    else if (url == 3) {
        document.getElementById('profile-detail').style.display = 'none';
        $(".setting-option-detail").load('balancet.php');
    }
    else if (url == 4) {
        document.getElementById('profile-detail').style.display = 'none';
       $(".setting-option-detail").load('betHistory.php');
    }
    else if (url == 5) {
       document.getElementById('profile-detail').style.display = 'none';
        $(".setting-option-detail").load('activeBet.php');
    }
    else if (url == 6) {
       document.getElementById('profile-detail').style.display = 'none';
       $(".setting-option-detail").load('depositHistory.php');
    }
    else if (url == 7) {
       document.getElementById('profile-detail').style.display = 'none';
       $(".setting-option-detail").load('withdrawHistory.php');
    }
    else if (url == 8) {
       document.getElementById('profile-detail').style.display = 'none';
       $(".setting-option-detail").load('BalanceTransferHistory.php');
    }
    else if (url == 9) {
       document.getElementById('profile-detail').style.display = 'none';
       document.getElementById('usersmallview').style.display = 'none';
       $(".setting-option-detail").load('sendMoney.php');
    }else if (url > 15 && url < 100) {
       $(".bettings-wrapper").load('hlitLeagueWise.php',{league: url});
    }else {
      $(".bettings-wrapper").load('SubTitleOption.php',{matchId: url});
    }
}}else{
    $(".bettings-wrapper").load('hlithi.php');
    setTimeout(function(){
        $(".bettings-wrapperIn").load('hlit.php');
    },5000);
    setTimeout(function(){
        $(".bettings-wrapperUp").load('hlitupcomming.php');
    },5000);
}
$(document).ready(function(){
  $(".bet-close").click(function(){
   $('.bet-close').hide();
   $('.bet-open').show();
   $('.betslip-wrapper-box').hide();
  });
  $(".bet-open").click(function(){
   $('.bet-open').hide();
   $('.bet-close').show();
   $('.betslip-wrapper-box').show();
  });
});

$(document).on('click', '.lallsport', function () {
  window.location='?allsport';
});
$(document).on('click', '.allsports-upcoming', function () {
   window.location='?upcoming';
}); 
$(document).on('click', '.lfootball', function () {
  window.location='?football';
}); 
$(document).on('click', '.lcricket', function () {
  window.location='?cricket';
}); 
$(document).on('click', '.lbasketball', function () {
  window.location='setting.php?basketball';
});
$(document).on('click', '.ltennis', function () {
  window.location='?tennis';
}); 
$(document).on('click', '.ltabletennis', function () {
  window.location='?tablet';
}); 
$(document).on('click', '.lhockey', function () {
  window.location='setting.php?hockey';
}); 
$(document).on('click', '.lbadminton', function () {
  window.location='setting.php?badminton';
}); 
$(document).on('click', '.allsportlive', function () {
  window.location='index.php?allsportlive';
}); 
$(document).on('click', '.lcoin', function () {
  window.location='index.php/game';
}); 
//active bet
$(document).on('click', '.myactivebet', function () {
  window.location='setting.php?activebet';
});


//header profile ver option
$(document).on('click', '.header-deposit', function () {
    window.location='deposit.php';
});
$(document).on('click', '.header-withdraw', function () {
    window.location='withdraw.php';
});
$(document).on('click', '.header-balance-transfer', function () {
    window.location='setting.php?3';
});
$(document).on('click', '.header-settled-bet', function () {
  window.location='betHistory.php';
});
$(document).on('click', '.header-activebeth', function () {
  window.location='setting.php?activebet';
});
$(document).on('click', '.header-deposith', function () {
  window.location='depositHistory.php';
});
$(document).on('click', '.header-withdrawh', function () {
  window.location='withdrawHistory.php';
});
$(document).on('click', '.header-btransferh', function () {
  window.location='BalanceTransferHistory.php';
});
$(document).on('click', '.header-transetions', function () {
  window.location='transetionsHistory.php';
});
$(document).on('click', '.header-settled-betbc', function () {
  window.location='betHistoryCricket.php';
});
$(document).on('click', '.header-transetionsbc', function () {
  window.location='transetionsHistorycricket.php';
});

//multibet
$(document).on('click', '.header-aMultiBet', function () {
  window.location='multiBetHistory.php';
});
$(document).on('click', '.header-sMultiBet', function () {
  window.location='multiSattledHistory.php';
});

  $(document).on('click', '.header-sendMoney', function () {
  window.location='setting.php?9';
  });
  $(document).on('click', '.header-sendMoneyh', function () {
  window.location='sendMoneyhistory.php';
  });
 
</script>
<script src="app-content/js/touch/jquery.min.js"></script>
<script src="app-content/js/touch/jquery-ui.min.js"></script>




<div id="footerwrap">
  <footer id="footer" class="pagewidth clearfix" itemscope="itemscope" itemtype="">
    <div class="footer-text clearfix">
      <div class="one">
        <div class="backtotop">Back to top</div>
        <div class="foot-col">
          <br>
          <div class="f-col a">
            <div class="col-c">
              <span style="color: white; font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;HELP</span> 
              <div class="rdtTTy">
                <a target="_new" href="#">Live betting terms</a></br>
                <a target="_new" href="#">Payment Options</a></br>
                <a target="_new" href="#">Responsible Gambling</a></br>
                <a target="_new" href="#">Deposit</a></br>
                <a target="_new" href="#">Withdrawal</a></br>
                <a target="_new" href="#">Betting Rules's</a></br>
                <a target="_new" href="#">Affiliates</a></br>
                <a target="_new" href="#">Agent Account</a></br>
              </div>
            </div>
          </div>
          <div class="f-col b">
            <div class="col-c">
              <span style="color: white; font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;TOP SPORTS</span> 
              <div class="rdtTTy">
                <a target="_new" href="#">Football/Soccer</a></br>
                <a target="_new" href="#">Cricket</a></br>
                <a target="_new" href="#">Basketball</a></br>
                <a target="_new" href="#">Tennis</a></br>
                <a target="_new" href="#">Volleyball</a></br>
                <a target="_new" href="#">American Football</a></br>
                <a target="_new" href="#">Baseball</a></br>
                <a target="_new" href="#">Snooker</a></br>
              </div>
            </div>
          </div>
          <div class="f-col c">
            <div class="col-c">
              <span style="color: white; font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;Extras</span> 
              <div class="rdtTTy">
                <a target="_new" href="#">Terms & Conditions</a></br>
                <a target="_new" href="#">Privacy Policy</a></br>
                <a target="_new" href="#">Cookies Policy</a></br>
                <a target="_new" href="#">Technical issues</a></br>
                <a target="_new" href="#">Current Offers</a></br>
                <a target="_new" href="#">FAQ's</a></br>
                <a target="_new" href="#">About</a></br>
                <a target="_new" href="#">Contact us</a></br>
              </div>
            </div>
          </div>
        </div>
        
        <div class="line-btm"><br></div>

        <div class="bottomb"></div>
        <div class="endbtm">
          <div class="btmlogo">
            <div id="site-logo">
              <a href="index.php" title="Betting site">
                <span class="jy" style="font-size: 19px;">Home</span>
              </a>
              <a href="./app/Gaming Pay.apk" title="Betting site">
                <span class="jy" style="font-size: 19px;"><img src="./img/okk.png" width="150"/> Download App</span>
              </a>
            </div>
          </div>
          <ul class="rm-dbRM">
            <li class="btTm"><a target="_new" href="#">News </a></li>
            <li class="btTm"><a target="_new" href="#">Affiliates </a></li>
            <li class="btTm"><a target="_new" href="#">Blogs</a></li>
            <li class="btTm"><a target="_new" href="#">Extras </a></li>
            <li class="btTm"><a target="_new" href="#">Contacts </a></li>
          </ul><br>
          <div class="priv-cookies">
            <p>
              By accessing, continuing to use or navigating throughout this site you accept that we will use certain browser cookies to improve your customer experience with us. Betting site only uses cookies which will improve your experience with us and will not interfere with your privacy. Please refer to our <span class="fm-FooterModule_Link ">Cookies Policy</span> for further information on our use of cookies and how you can disable or manage their use should you wish.
            </p>
          </div>
          <div class="allright">
            <p>
              © 2010-2030 Betting site. All rights reserved.
            </p>
          </div>
          <div class="bottom-share">
            <div id="lazycrab-social-links-2" class="widget lazycrab-social-links">
              <ul class="social-links horizontal">
                <li class="social-link-item twitter font-icon icon-medium">
                  <a href="#" ><i class="fa fa-twitter" ></i>  Twitter</a>
                </li>
                <!-- /lazycrab-link-item -->
                <li class="social-link-item facebook font-icon icon-medium">
                  <a href="#" ><i class="fa fa-facebook" ></i>  Facebook</a>
                </li>
                <!-- /lazycrab-link-item -->
              </ul>
            </div>   
            <!-- /.footer-widgets -->
          </div>
        </div>
      </div>
    </div>  
    <!-- /footer-text -->
    </br>
  </footer>
  <!-- /#footer -->
</div>
<!-- /#footerwrap -->
<script>
setInterval(function () {
    
                var url = window.location.href.split('?')[1];
                if(url){
                  if(isNaN(url)){
                    if (/allsport/.test(window.location.href)) {
                        $(".bettings-wrapper").load('hlitall.php');
                    }
                    else if (/football/.test(window.location.href)) {
                        $(".bettings-wrapper").load('lfootball.php');
                    }
                    else if (/upcoming/.test(window.location.href)) {
                        $(".bettings-wrapper").load('hlitupcomming.php');
                    }
                    else if (/cricket/.test(window.location.href)) {
                        $(".bettings-wrapper").load('lcricket.php');
                    }
                    else if (/basketball/.test(window.location.href)) {
                        $(".bettings-wrapper").load('lbasketball.php');
                    }
                    else if (/tennis/.test(window.location.href)) {
                        $(".bettings-wrapper").load('ltennis.php');
                    }
                    else if (/tablet/.test(window.location.href)) {
                        $(".bettings-wrapper").load('lvolleyball.php');
                    }
                    else if (/activebet/.test(window.location.href)) {
                        document.getElementById('profile-detail').style.display = 'none';
                        $(".setting-option-detail").load('activeBet.php');
                    }
                  }else{
                    if (url > 15 && url < 100) {
                      $(".bettings-wrapper").load('hlitLeagueWise.php',{league: url});
                    }else{
                      $(".bettings-wrapper").load('SubTitleOption.php',{matchId: url});
                    }
                  }
                }else{
                    $(".bettings-wrapper").load('hlithi.php');
                }
            
},  5000);
</script><style>
@media screen and (max-width: 760px) {
  .foot-col, .line-btm{
    display: none;
  }
  .game24w{
    font-size: 20px;
  }
}
.game24w{
  font-size: 18px;
}
.backtotop{
    display: block;
    width: 95%;
    height: 28px;
    background: #545454;
    margin-left: 2.5%;
    cursor: pointer;
  }
</style>
<script>
$(document).ready(function(){ 
   $('.backtotop').click(function(){ 
       $("html, body").animate({ scrollTop: 0 }, 600); 
       return false; 
   }); 
});
</script>
 
</div>
<div class="body-overlay"></div>
<script>$('#sports-logo').load('sportslogo.php');</script>
<script src="app-content/js/headerrrr.js"></script>
<script src="js/validation/validated.js"></script>
<script src="app-content/js/slip-jaajjUp.js"></script>
</body>
<style>
div#mb_betslip {
    position: fixed;
    background: #000;
    bottom: 0;
    width:100%;
    display:none;
}
input#userSignInForm {
    padding: 5px;
    float: right;
    margin-top: -46px;
}
input#userSignInForm {
    border: 2px solid #089c2d;
    background: #ddd;
}
.notice{
  width: 350px;
  height: 23px;
  font-size: 17px;
  font-family: "cooper black", Times, serif;
}
.clickGameType{
  background: grey;
  color: black;
}
.default-rate{
    color: #A5A1A1;
    border: 1px solid #eee;
}
.league{
  width: 95% !important;
  background: #494949 !important;
  border: 1px solid #494949;
  color: #DDDDDD;
  height: 45px !important;
}
.leagueOne, .leagueTwo{
  margin-left: 10px;
  margin-top: -15px !important;
  cursor: pointer;
}
.seeMore{
  font-size: 12px;
  font-weight: bold;
  margin-top: -15px;
  margin-left: 40px;
  color: #5FE8BD;
  text-decoration: underline;
  cursor: pointer;
}
.underLineLea{
  border-bottom: 1px solid #565656;
  margin-left: -10px;
  padding-top: -5px;
  clear: both;
}
</style>
<script>
$('.default-rate').on('click', function(){
    var stake = $(this).text();
    $('.stake').val(stake);
    var rate = 0;
    rate = $('.pot-rate-numbercb1').text();
    if(rate == 0){
      rate = $('.pot-rate-numbercc1').text();
    }
    $('.pot-submit-two-number').text(stake * rate);
});
$('.pot-stake-inputno').keyup(function () {
    var stakeAmount = $(this).val();
    var betRate = $(".pot-rate-numberno").text();
    var st = stakeAmount * betRate;
    $(".pot-submit-two-number").text(st.toFixed(2));
});
$('.pot-stake-inputcb1').keyup(function () {
    var stakeAmount = $(this).val();
    var betRate = $(".pot-rate-numbercb1").text();
    var st = stakeAmount * betRate;
    $(".pot-submit-two-number").text(st.toFixed(2));
});
$('.pot-stake-inputcc1').keyup(function () {
    var stakeAmount = $(this).val();
    var betRate = $(".pot-rate-numbercc1").text();
    var st = stakeAmount * betRate;
    $(".pot-submit-two-number").text(st.toFixed(2));
});
$(".league").on('click', function () {
    var str = $(this).attr('value');
    window.location="?"+str+"";
});
$('.seeMore').on('click', function(){
    $('.leagueTwo').show();
    $(this).hide();
});
</script>
</html>
