
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@pratikborsadiya">
        <meta property="twitter:creator" content="@pratikborsadiya">
        <!-- Open Graph Meta-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Vali Admin">
        <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Admin</title>
    </head>
    <body class="app sidebar-mini">
        <!-- Navbar-->
                <header class="app-header"><a class="app-header__logo" href="index.php" style="font-family: none; font-size: 15px;">Hussa(52,042.49)</a>
            <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
            <!-- Navbar Right Menu-->
            <ul class="app-nav">
                <!--Notification Menu-->
                <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" id=""><i class="fa fa-envelope-square fa-lg"></i><span class="badge" style="background: red;" id="countChatofClub"></span></a>
                    <ul class="app-notification dropdown-menu dropdown-menu-right">
                        <li class="app-notification__title" style="color: red">Club notifications.</li>
                        <div class="app-notification__content" id="chatNotificationListOfClub">


                        </div>
                        <li class="app-notification__footer"><a href="mailBox.php">See all notifications.</a></li>
                    </ul>
                </li>
                <!--Notification Menu-->
                <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" id=""><i class="fa fa-envelope-o fa-lg"></i><span class="badge" style="background: red;" id="countChat"></span></a>
                    <ul class="app-notification dropdown-menu dropdown-menu-right">
                        <li class="app-notification__title">User notifications.</li>
                        <div class="app-notification__content" id="chatNotificationList">


                        </div>
                        <li class="app-notification__footer"><a href="mailBox.php">See all notifications.</a></li>
                    </ul>
                </li>
                <!--Notification Menu-->
                <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" id=""><i class="fa fa-bell-o fa-lg"></i><span class="badge" style="background: red;" id="count"></span></a>
                    <ul class="app-notification dropdown-menu dropdown-menu-right">
                        <li class="app-notification__title">You have  new notifications.</li>
                        <div class="app-notification__content" id="notificationList">


                        </div>
                        <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
                    </ul>
                </li>
                <!-- User Menu-->
                <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><strong></strong><i class="fa fa-user fa-lg"></i></a>
                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
                        <li><a href="adminTransactionHistory.php" class="dropdown-item"><i class="fa fa-money fa-lg"></i>( 24774965.75 )</a></li>
                        <li><a class="dropdown-item" href="setting.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="adminProfile.php"><i class="fa fa-cog fa-lg"></i> Change profile</a></li>
                        <li><a class="dropdown-item" href="adminProfile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                        <li><a class="dropdown-item" href=""><i class="fa fa-user fa-lg"></i> Clear history</a></li>
                        <li><a class="dropdown-item" href="?logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </header>


<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <br>
    <ul class="app-menu">

        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard </span></a></li>
        <li><a class="app-menu__item" href="updateNotice.php"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">Notice board</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">All betting</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="bettingPanel.php"><i class="icon fa fa-circle-o"></i>Betting Panel</a></li>
                <li><a class="treeview-item" href="bettingPanelAuto.php"><i class="icon fa fa-circle-o"></i>Betting Cricket</a></li>
                <li><a class="treeview-item" href="bettingPanelAuto2.php"><i class="icon fa fa-circle-o"></i>Cricket Over Total</a></li>
                <li><a class="treeview-item" href="bettingPanelAuto3.php"><i class="icon fa fa-circle-o"></i>Cricket Per Over</a></li>
                <li><a class="treeview-item" href="bettingPanelLeague.php"><i class="icon fa fa-circle-o"></i>League Panel</a></li>
                <li><a class="treeview-item" href="cashoutPanel.php"><i class="icon fa fa-circle-o"></i>CashOut Panel</a></li>
                <li><a class="treeview-item" href="bettingHistory.php"><i class="icon fa fa-circle-o"></i> Betting Transaction</a></li>
                <li><a class="treeview-item" href="closedMatch.php"><i class="icon fa fa-circle-o"></i>Closed match History</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Multi Panel</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="multiUserWise.php"><i class="icon fa fa-circle-o"></i>User Wise</a></li>
                <li><a class="treeview-item" href="multiRunningBet.php"><i class="icon fa fa-circle-o"></i>Running Bet</a></li>
                <li><a class="treeview-item" href="multiCloseBet.php"><i class="icon fa fa-circle-o"></i>Close Bet</a></li>
                <li><a class="treeview-item" href="bettingHistoryMulti.php"><i class="icon fa fa-circle-o"></i>Multi Betting Transaction</a></li>
               <li><a class="treeview-item" href="wlbalance.php"><i class="icon fa fa-circle-o"></i>Admin Win/Loss Balance</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Statement</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="bettingTransferSendOrReturn.php"><i class="icon fa fa-circle-o"></i>Betting Transfer</a></li>
                <li><a class="treeview-item" href="usertouserbalancetransfer.php"><i class="icon fa fa-circle-o"></i>User Balance Transfer</a></li>
                <li><a class="treeview-item" href="userCancelWithdrwal.php"><i class="icon fa fa-circle-o"></i>User Canceled Withdrwal</a></li>
                <li><a class="treeview-item" href="userBalaceTransfer.php"><i class="icon fa fa-circle-o"></i>Balance transfer history</a></li>
                <li><a class="treeview-item" href="sendMoneyAdmin.php"><i class="icon fa fa-circle-o"></i>Send Money history</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Operator Active</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
            </ul>
        </li>
    </ul>
</aside>
<link rel="stylesheet" type="text/css" href="css/betPanel.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<main class="app-content">
    <div class="app-title" style="background: #AEB6BF;">
        <div>
            <h6>
                                || Total Gaining Amount= 102256376                || Total Sending Amount= 228030841.86                || Total Saving Amount= 4442760.86
                <span style="color: green">  || Total S Amount= 4025765.79</span>

            </h6>

        </div>
    </div>
    <div class="row" style="background: #AEB6BF;">
        <div class="col-md-12">
            <div>
                <div class="tile-body">
                    <!-- add match -->
                    <div id="add-bet" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Match Title </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div id="addMatchSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">A Team</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="A_team" name="A_team" rows="4" placeholder="Enter A Team Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">B Team</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="B_team" name="B_team" rows="4" placeholder="Enter  B Team Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Bet Statement</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="title" name="title" rows="4" placeholder="Enter Bet Statement">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Date</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="date" name="date" id="demoDate" type="text" placeholder="Select Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Match Status</label>
                                        <div class="col-md-8">
                                            <!--Radio Button Markup-->
                                            <div class="">
                                                <label>
                                                    <input type="radio" name="status" id="status" value="1"><span class="label-text"> Live</span><br>
                                                    <input type="radio" name="status" id="status" value="2"><span class="label-text"> Upcoming</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Match Type</label>
                                        <div class="col-md-8">
                                            <!--Radio Button Markup-->
                                            <div class="">
                                                <label>
                                                    <input type="radio" name="gameType" id="gameType" value="1">
                                                    <span class="label-text"> FootBall</span><br>
                                                    <input class="gameTypec" type="radio" name="gameType" id="gameType" value="2">
                                                    <span class="label-text"> Cricket</span><br>
                                                    <input type="radio" name="gameType" id="gameType" value="4">
                                                    <span class="label-text"> Tennis</span><br>
                                                    <input type="radio" name="gameType" id="gameType" value="5">
                                                    <span class="label-text"> Volleyball</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row hiddenOp" style="display: none">
                                        <label class="control-label col-md-3">Match Status</label>
                                        <div class="col-md-8">
                                            <!--Radio Button Markup-->
                                            <div class="">
                                                <label>
                                                    <input type="radio" name="status2" id="status2" value="1"><span class="label-text"> ODI</span><br>
                                                    <input type="radio" name="status2" id="status2" value="2"><span class="label-text"> T20</span><br>
                                                    <input type="radio" name="status2" id="status2" value="3"><span class="label-text"> Test</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input  id="addMatchSubmit" type="submit" class="btn btn-success" value="submit">
                                            <input  id="addMatchSubmitDefault" type="submit" class="btn btn-success" value="add default">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- add match By League-->
                    <div id="add-bet-league" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Match Title By League</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div id="addMatchSuccessLea">
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">League</label>
                                        <div class="col-md-8">
                                            <select class="form-control club" id="league" name="league" tabindex="1">
                                                <option disabled selected value>Select League</option>
                                                                                            <option value="262" name="Marsh ODI Cup ">Marsh ODI Cup </option>
                                                                                                <option value="265" name="European T10">European T10</option>
                                                                                                <option value="290" name="County Championship division 1">County Championship division 1</option>
                                                                                                <option value="294" name="ACC Premier Cup 2023">ACC Premier Cup 2023</option>
                                                                                                <option value="302" name="ECI.  T10">ECI.  T10</option>
                                                                                                <option value="305" name="KCA Club Champioship T20">KCA Club Champioship T20</option>
                                                                                                <option value="308" name="Nordic T20  Cup  2023">Nordic T20  Cup  2023</option>
                                                                                                <option value="309" name="CE T20  2023">CE T20  2023</option>
                                                                                                <option value="310" name="Green Afghanistan ODI Cup">Green Afghanistan ODI Cup</option>
                                                                                                <option value="322" name="Africa T20 Cup ">Africa T20 Cup </option>
                                                                                                <option value="323" name="Ireland tour of England 2023">Ireland tour of England 2023</option>
                                                                                                <option value="324" name="T20 Blast 2023">T20 Blast 2023</option>
                                                                                                <option value="325" name="Afghanistan tour of Sri Lanka 2023">Afghanistan tour of Sri Lanka 2023</option>
                                                                                                <option value="326" name="West Indies tour of United Arab Emirates 2023">West Indies tour of United Arab Emirates 2023</option>
                                                                                                <option value="327" name="Ireland IP T20 2023">Ireland IP T20 2023</option>
                                                                                                <option value="328" name="ICC World Test Championship Final 2023">ICC World Test Championship Final 2023</option>
                                                                                                <option value="335" name="County Div One 2023">County Div One 2023</option>
                                                                                                <option value="336" name="County Div Two 2023">County Div Two 2023</option>
                                                                                                <option value="337" name="TNPL 2023">TNPL 2023</option>
                                                                                                <option value="338" name="Sri Lanka Major Clubs T20">Sri Lanka Major Clubs T20</option>
                                                                                                <option value="340" name="Women’s Emerging Asia Cup ">Women’s Emerging Asia Cup </option>
                                                                                                <option value="341" name="South Africa A tour of Sri Lanka, 2023">South Africa A tour of Sri Lanka, 2023</option>
                                                                                                <option value="342" name="ICC Cricket World Cup Qualifier Warm-up Matches ">ICC Cricket World Cup Qualifier Warm-up Matches </option>
                                                                                                <option value="350" name="Africa T20  Continent Cup, 2023">Africa T20  Continent Cup, 2023</option>
                                                                                                <option value="351" name="Afghanistan tour of Bangladesh 2023">Afghanistan tour of Bangladesh 2023</option>
                                                                                                <option value="353" name="MPL 2023">MPL 2023</option>
                                                                                                <option value="354" name="The Ashes 2023">The Ashes 2023</option>
                                                                                                <option value="356" name="ICC WCQ 2023">ICC WCQ 2023</option>
                                                                                                <option value="358" name="Women Ashes 2023">Women Ashes 2023</option>
                                                                                                <option value="359" name="UPL T20 2023">UPL T20 2023</option>
                                                                                                <option value="360" name="Jamaica T10. Dream 11">Jamaica T10. Dream 11</option>
                                                                                                <option value="365" name="Ireland Women tour of West Indies  2023">Ireland Women tour of West Indies  2023</option>
                                                                                                <option value="366" name="New Zealand Women tour of Sri Lanka 2023">New Zealand Women tour of Sri Lanka 2023</option>
                                                                                                <option value="367" name="Duleep Trophy 2023">Duleep Trophy 2023</option>
                                                                                                <option value="368" name="RHF Trophy 2023">RHF Trophy 2023</option>
                                                                                                <option value="370" name="TWtoN 2023">TWtoN 2023</option>
                                                                                                <option value="374" name="Uganda tour of Namibia 2023">Uganda tour of Namibia 2023</option>
                                                                                                <option value="376" name="India Women tour of Bangladesh 2023">India Women tour of Bangladesh 2023</option>
                                                                                                <option value="377" name="W-T20l Tri-Series 2023">W-T20l Tri-Series 2023</option>
                                                                                                <option value="378" name="India tour of West Indies 2023">India tour of West Indies 2023</option>
                                                                                                <option value="379" name="Valletta T20 2023">Valletta T20 2023</option>
                                                                                                <option value="380" name="ACC Emerging Asia Cup 2023">ACC Emerging Asia Cup 2023</option>
                                                                                                <option value="381" name="Punjab T20 2023">Punjab T20 2023</option>
                                                                                                <option value="383" name="MLC 2023">MLC 2023</option>
                                                                                                <option value="384" name="JCL T10">JCL T10</option>
                                                                                                <option value="385" name="Zim Afro T10">Zim Afro T10</option>
                                                                                                <option value="386" name="Pakistan tour of Sri Lanka 2023">Pakistan tour of Sri Lanka 2023</option>
                                                                                                <option value="387" name="WC EUR Qualifier 2023">WC EUR Qualifier 2023</option>
                                                                                                <option value="388" name="Global T20 Canada 2023">Global T20 Canada 2023</option>
                                                                                                <option value="389" name="WC Asia Qualifier 2023">WC Asia Qualifier 2023</option>
                                                                                                <option value="390" name="Australia Women tour of Ireland 2023">Australia Women tour of Ireland 2023</option>
                                                                                                <option value="391" name="Deodhar Trophy 2023">Deodhar Trophy 2023</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">A Team</label>
                                        <div class="col-md-8">
                                            <select class="form-control A_teamLea" id="A_teamLea" name="league" tabindex="1">
                                                <option disabled selected value>Select A Team</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">B Team</label>
                                        <div class="col-md-8">
                                            <select class="form-control B_teamLea" id="B_teamLea" name="league" tabindex="1">
                                                <option disabled selected value>Select B Team</option>
                                            </select>
                                        </div>
                                    </div>
                                    <datalist id="leagueMatch"></datalist>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Bet Statement</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="titleLea" name="title" rows="4" placeholder="Enter Bet Statement">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Date</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="dateLea" name="date" id="demoDate" type="text" placeholder="Select Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Match Status</label>
                                        <div class="col-md-8">
                                            <!--Radio Button Markup-->
                                            <div class="">
                                                <label>
                                                    <input type="radio" name="status" id="statusLea" value="1"><span class="label-text"> Live</span><br>
                                                    <input type="radio" name="status" id="statusLea" value="2"><span class="label-text"> Upcoming</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Match Type</label>
                                        <div class="col-md-8">
                                            <!--Radio Button Markup-->
                                            <div class="">
                                                <label>
                                                    <input type="radio" name="gameType" id="gameTypeLea" value="1">
                                                    <span class="label-text"> FootBall</span><br>
                                                    <input class="gameTypec" type="radio" name="gameType" id="gameTypeLea" value="2">
                                                    <span class="label-text"> Cricket</span><br>
                                                    <input type="radio" name="gameType" id="gameTypeLea" value="4">
                                                    <span class="label-text"> Tennis</span><br>
                                                    <input type="radio" name="gameType" id="gameTypeLea" value="5">
                                                    <span class="label-text"> Volleyball</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row hiddenOp" style="display: none">
                                        <label class="control-label col-md-3">Match Status</label>
                                        <div class="col-md-8">
                                            <!--Radio Button Markup-->
                                            <div class="">
                                                <label>
                                                    <input type="radio" name="status2" id="status2Lea" value="1"><span class="label-text"> ODI</span><br>
                                                    <input type="radio" name="status2" id="status2Lea" value="2"><span class="label-text"> T20</span><br>
                                                    <input type="radio" name="status2" id="status2Lea" value="3"><span class="label-text"> Test</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input  id="addMatchSubmitLea" type="submit" class="btn btn-success" value="submit">
                                            <input  id="addMatchSubmitDefaultLea" type="submit" class="btn btn-success" value="add default">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- hidden-match -->
                    <div id="hidden-match" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hidden match</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body" id="hiddenContentShow">

                                </div>
                                <div class="modal-footer">

                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <a class="btn btn-primary icon-btn" href="" data-toggle="modal" data-target="#add-bet"><i class="fa fa-plus"></i>Add Item</a>
                    <a class="btn btn-primary icon-btn" href="" data-toggle="modal" data-target="#add-bet-league"><i class="fa fa-plus"></i>By League</a>
                    <a class="btn btn-success" href="" ><i class="fa fa-refresh"></i>Refresh</a>
                    <a class="btn btn-primary" href="" id="hidden" data-toggle="modal" data-target="#hidden-match">hidden match </a>
                    <a class="btn btn-primary" href="defaultSetting.php" >Set default match </a><br><br>
                    <!-- addQuestion -->
                    <div id="addQuestion" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Question </h5>

                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>match : <span id="matchShow"></span></h6>
                                    <div id="addQustionSuccess"></div>
                                    <div class="form-group">
                                    <select class="form-control col-md-6" id="category" name="category">
                                     <option disabled selected value>Select category</option>
                                                                          </select>
                                   </div>

                                    <div class="field_wrapper-sub">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input class="form-control" name="input_field" id="addQustionOfMatch"  placeholder="Enter Question">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="bettingId" id="bettingIdForAddQuestion" type="text"  value="" hidden="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="addBetSubTitle" id="addQuestionSubmit" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
        <!-- limitMatch -->
                    <div id="scoreModal" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add score </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>match : <span id="matchShowOfLimit"></span></h6>
                                    <div id="scoreSuc"></div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input class="form-control" name="limitRateAmount" id="ScoreRateForMatch"  value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input name="bettingId" id="matchIdForScore" type="text"  value="" hidden="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="limitBettingTitle" id="score" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- limitMatch -->
                    <div id="limitMatch" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Limit </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>match : <span id="matchShowOfLimit"></span></h6>
                                    <div id="limitMatchSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input class="form-control" name="limitRateAmount" id="limitRateForMatch"  value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input name="bettingId" id="matchIdForLimit" type="text"  value="" hidden="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="limitBettingTitle" id="limitRateForMatchSubmit" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- wait -->
                    <div id="matchWatting" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Match Waiting Time </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>match : <span id="matchShowOfWait"></span></h6>
                                    <div id="waitMatchSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input class="form-control" id="matchWaittingRate" id="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">                           
                                        <div class="col-md-8">
                                            <input name="bettingId" id="matchIdForWait" type="text"  value="" hidden="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="waitBettingTitle" id="matchWattingTimeSubmit"type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- limitQuestion -->
                    <div id="limitQuestion" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Limit For Cash Out</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Question  : <span id="questionShowOfLimit"></span></h6>
                                    <div id="limitQuestionSuccess"></div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input class="form-control" name="limitRateAmount" id="limitRateForQuestion"  value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input name="bettingId" id="questionIdForLimit" type="text"  value="" hidden="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="limitBettingTitle" id="limitRateForQuestionSubmitCash" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- wait -->
                    <div id="questionWatting" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Question Waiting Time </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>match : <span id="questionShowOfWait"></span></h6>
                                    <div id="waitQuestionSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input class="form-control" id="questionWaittingRate" id="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">                           
                                        <div class="col-md-8">
                                            <input name="bettingId" id="questionIdForWait" type="text"  value="" hidden="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="waitBettingTitle" id="questionWattingTimeSubmit"type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- matchActionMenu -->
                    <div id="matchActionMenu" class="modal" style="">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item btn btn-sm addQuestion" id="" data-toggle="modal" data-target="#addQuestion">Add Question</a>
                                        <a href="#" class="list-group-item btn btn-sm updateMatch" id="" data-toggle="modal" data-target="#updateMatch" data-dismiss="modal">Update match</a>
                                        <button class="list-group-item btn btn-sm closeMatchAuto" id="" onclick="return confirm('Are you sure?')">Close The Match</button>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- hidden-match -->
                    <div id="hidden-section" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hidden match</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body" id="hiddenSectionShow">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary m-default" type="button" data-dismiss="modal" id="">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- matchActionMenu -->
                    
                    <div id="defaultc" class="modal" style="">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="list-group">
                                        <input type="number" class="list-group-item overAutoNumber" placeholder="Enter Over Number">
                                        <span class="list-group-item btn btn-sm overAutoSubmit" matchId="" category="CC1">C1</span>
                                        <span class="list-group-item btn btn-sm overAutoSubmit" matchId="" category="CC2">C2</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- end Modal -->
                    <!-- Modal update match-->
                    <div id="updateMatch" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Match Title </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div id="UpdateMatchSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">A Team</label>
                                        <div class="col-md-8">
                                            <input type="hidden" class="form-control matchIdForUpdate" id="" rows="4" value="" >
                                            <input type="text" class="form-control" id="Update_A_team" name="A_team" rows="4" value="" placeholder="Enter A Team Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">B Team</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  id="Update_B_team" rows="4" value="" placeholder="Enter  B Team Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">match Statement</label>
                                        <div class="col-md-8">
                                            <input class="form-control" name="title" id="Update_title" value="" rows="4" placeholder="Enter match Statement">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Date</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="Update_date" value="" name="date" id="demoDate" type="text" placeholder="Select Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Match Status</label>
                                        <div class="col-md-8">
                                            <!--Radio Button Markup-->
                                            <div class="">
                                                <label>
                                                    <input type="radio" name="Update_status" id="Update_status" value="1"><span class="label-text"> Live</span><br>
                                                    <input type="radio" name="Update_status" id="Update_status" value="2"><span class="label-text"> Upcoming</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Match Type</label>
                                        <div class="col-md-8">
                                            <!--Radio Button Markup-->
                                            <div class="">
                                                <label>
                                                    <input type="radio" name="Update_gameType" id="Update_gameType" value="1">
                                                    <span class="label-text"> FootBall</span><br>
                                                    <input type="radio" name="Update_gameType" id="Update_gameType" value="2">
                                                    <span class="label-text"> Cricket</span><br>
                                                    <input type="radio" name="Update_gameType" id="Update_gameType" value="4">
                                                    <span class="label-text"> Tennis</span><br>
                                                    <input type="radio" name="Update_gameType" id="Update_gameType" value="5">
                                                    <span class="label-text"> Volleyball</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="updateMatch" id="updateMatchSubmit" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- questionActionMenu -->
                    <div id="questionActionMenu" class="modal" style="">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item btn btn-sm addAns" id="" data-toggle="modal" data-target="#addAns">Add Answer</a>
                                        <a href="#" class="list-group-item btn btn-sm updateQuestion" id="" data-toggle="modal" data-target="#updateQuestion" data-dismiss="modal">Update question</a>

                                        <button class="list-group-item btn btn-sm closeQuestion" id="" onclick="return confirm('Are you sure?')" >Close The question</button>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- addAns Modal -->
                    <div id="addAns" class="modal" style="">
                        <div class="modal-dialog "  role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Question : <span id="questionShowOfAddAns"></span></h6>
                                    <div id="addAnsSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <input class="form-control" id="addAnsField"  placeholder="Enter Ans">
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" id="addAnsRate"  placeholder="Rate">
                                        </div>
                                    </div>
                                    <div class="form-group row">                           
                                        <div class="col-md-8">
                                            <input  id="questionIdForAddAns" type="text"  value="" hidden="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input  id="addAnsSubmit" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- update-sub-betting Modal -->
                    <div id="updateQuestion" class="modal" style="">
                        <div class="modal-dialog "  role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Question </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div id="UpdateQuestionSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Question</label>
                                        <div class="col-md-8">
                                            <input type="hidden" class="form-control questionIdForUpdate" id="" rows="4" value="" >
                                            <input class="form-control" id="editQuestion"  value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input name="updateMatch" id="updateQuestionSubmit" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->                                                       
                    <!-- edit betting rate -->
                    <div id="updateAnsRate" class="modal editRate" style="">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Answer </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div id="UpdateAnsSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input class="form-control"  id="editAnswer" value="">
                                            <input type="hidden" class="form-control ansIdForUpdate" id="" rows="4" value="" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input type="number" class="form-control rate"  id="editRateAmount" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input  id="updateAnsSubmit" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- limit betting rate -->
                    <div id="limitAns" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Limit Answer </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Answer : <span id="ansShowOfLimit"></span></h6>
                                    <div id="limitAnsSuccess">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input class="form-control" id="limitRateAmount"  value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <input class="form-control"  id="ansIdForLimit"  value="" hidden="1">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-8">
                                            <input  id="limitRateForAnsSubmit" type="submit" class="btn btn-success" value="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <!-- hidden-Subtitle -->
                    <div id="hidden-option" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hidden Option</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body" id="hiddenOptionShow">

                                </div>
                                <div class="modal-footer">

                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->

                    <div id="liveMatchFetch"></div>
                    <br>  
                    <div id="upcomingContent"></div>

                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/betActionAuto3.js"></script>
<script type="text/javascript" src="js/cashout.js"></script>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>

<script>
    function fetchChat() {
        $.ajax({
            url: "fetchNotification.php",
             dataType: 'json',
            success: function (data) {

                $("#count").html(data.count);
            }
        });
    }


    fetchChat();
    setInterval(function () {
        fetchChat();
    
    }, 60000);
    
 //fetch chat   
        function Chat() {
        $.ajax({
            url: "fetchChat.php",
           dataType: 'json',
            success: function (data) {

                $("#countChat").html(data.countChat);
                $("#chatNotificationList").html(data.list);
            }
        });
    }


    Chat();
    setInterval(function () {
        Chat();
    
    }, 60000);
    
     //fetch chat  club 
        function ChatClub() {
        $.ajax({
            url: "fetchChatOfClub.php",
           dataType: 'json',
            success: function (data) {

                $("#countChatofClub").html(data.countChat);
                $("#chatNotificationListOfClub").html(data.list);
            }
        });
    }


    ChatClub();
    setInterval(function () {
        ChatClub();
    
    }, 60000);
    
</script>

</body>
</html><script>
if(window.location.href.split('?')[1]){
    var url = window.location.href.split('?')[1];
    $("#upcomingContent").html('');
    setTimeout(function(){
        $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: url});
    },1000);
    //$("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: url});
}else{
    setTimeout(function(){
        $("#liveMatchFetch").load('betLiveOptionAuto.php');
    },1000);
    setTimeout(function(){
        $("#upcomingContent").load('betUpcomingOptionAuto.php');
    },1000);
    //$("#liveMatchFetch").load('betLiveOptionAuto.php');
    //$("#upcomingContent").load('betUpcomingOptionAuto.php');
}
setInterval(function () {
    if(window.location.href.split('?')[1]){
        var url = window.location.href.split('?')[1];
        $("#upcomingContent").html('');
        $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: url});
    }
}, 3000);
$(document).on('click', '#hidden', function (event) {
    $("#hiddenContentShow").load('hiddenContent.php');
});
</script>
</body>
</html>
<script>
$(function () {
    setInterval(function () {
        if ($("#success").is(":visible")) {
            //you may add animate.css class for fancy fadeout
            $("#success").fadeOut("fast");
        }
    }, 10000);
});
$('.editRate').on('shown.bs.modal', function () {
    $(this).find('.rate').focus();
});
$(document).on('click', '.gameTypec', function () {
    $('.hiddenOp').toggle();
});
$(document).on('click', '#limitRateForQuestionSubmitCash', function (event) {
    event.preventDefault();
    var match_id = $('.titleCheck').text();
    var question_id = $('#questionIdForLimit').val();
    var limitRateForQuestion = $('#limitRateForQuestion').val();
    $.ajax({
        method: "POST",
        url: "betPanelActionCashOut.php",
        data: {
            question_id_for_limit: question_id,
            limitRateForQuestion: limitRateForQuestion
        },
        success: function (data) {
            $('#limitRateForQuestion').val('');
            $("#limitQuestionSuccess").html(data);
            //page refresh
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: match_id});
        }
    });
});
//question Stop or active
$(document).on('click', '.matchHighlightInactive', function (event) {
    event.preventDefault();
    var match_id = $(this).attr("id");

    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            question_id_for_highlight_hide: match_id
        },
        success: function (data) {
            //page refresh
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: match_id});
            
        }
    });

});
$(document).on('click', '.matchHighlightActive', function (event) {
    event.preventDefault();
    var match_id = $(this).attr("id");

    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            question_id_for_highlight_show: match_id
        },
        success: function (data) {
            //page refresh
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: match_id});
            
        }
    });

});
$(document).on('click', '.section', function (event) {
    event.preventDefault();
    $('#defaultba').modal("hide");
    $('#defaultt').modal("hide");
    $('#defaultv').modal("hide");
    $('#defaulth').modal("hide");
});
$(document).on('click', '.questionTotalhide', function (event) {
    event.preventDefault();
    var question_id = $(this).attr('id');
    var match_id = $('.titleCheck').text();

    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            question_id_for_total_hide: question_id
        },
        success: function (data) {

            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: match_id});
        }
    });

});

$(document).on('click', '.questionTotalShow', function (event) {
    event.preventDefault();
    var match_id = $(this).attr('id');
    $.ajax({
        method: "POST",
        url: "hiddenOptioncc1.php",
        data: {
            question_id_for_total_show: match_id
        },
        success: function (data) {
            $("#hiddenOptionShow").html(data);
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: match_id});
        }
    });

});
$(document).on('click', '.hiddenToLiveOption', function (event) {
    event.preventDefault();
    var match_idd = $(this).attr('id');
    var match_id = $('.titleCheck').text();

    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            question_id_for_total_show_fetch: match_idd
        },
        success: function (data) {
            $("#hiddenOptionShow").load('hiddenOptioncb1.php',{question_id_for_total_show: match_id});
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: match_id});
        }
    });

});
$("#league").change(function () {
    var str = "";
    var name = "";
    $(this).find('option:selected').each(function() {
        str = $(this).attr('value');
        name = $(this).attr('name');
    });
    $('#titleLea').val(name);
    $.ajax({
        method: "POST",
        url: "getLeagueTeam.php",
        data: {
            leagueId: str,
        },
        success: function (data) {
            $('.A_teamLea').html(data);
            $('.B_teamLea').html(data);
        }
    });
});
$(document).on('click', '#addMatchSubmitLea', function (event) {
    event.preventDefault();
    var league = $('#league').val();
    var A_team = $('#A_teamLea').val();
    var B_team = $('#B_teamLea').val();
    var title = $('#titleLea').val();
    var date = $('#dateLea').val();
    var status = $("#statusLea:checked").val();
    var gameType = $("#gameTypeLea:checked").val();
    var addMatchLea = 1;

    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            league: league,
            A_team: A_team,
            B_team: B_team,
            title: title,
            date: date,
            status: status,
            gameType: gameType,
            addMatchLea: addMatchLea
        },
        success: function (data) {
            $('#A_teamLea').val('');
            $('#B_teamLea').val('');
            $('#titleLea').val('');
            $('#dateLea').val('');
            $("#addMatchSuccessLea").html(data);
            $("#liveMatchFetch").load('betLiveOptionAuto.php');
        }
    });
});
$(document).on('click', '#addMatchSubmitDefaultLea', function (event) {
    event.preventDefault();
    var league = $('#league').val();
    var A_team = $("#A_teamLea").val();
    var B_team = $("#B_teamLea").val();
    var title = $('#titleLea').val();
    var date = $('#dateLea').val();
    var status = $("#statusLea:checked").val();

    var gameType = $("#gameTypeLea:checked").val();
    var addMatchDefaultLea = 1;
    if ($("input:radio[id='status2']").is(":checked")) {
        var status2 = $("#status2Lea:checked").val();
    } else {
        var status2 = 0;
    }
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            league: league,
            A_team: A_team,
            B_team: B_team,
            title: title,
            date: date,
            status: status,
            gameType: gameType,
            status2: status2,
            addMatchDefaultLea: addMatchDefaultLea
        },
        success: function (data) {
            $("#addMatchSuccessLea").html(data);
            $("#liveMatchFetch").load('betLiveOptionAuto.php');
        }
    });

});
$(document).on('click', '.optionRateButt', function (event) {
    event.preventDefault();
    var matchId = $(this).attr('id');
    var position = $(this).attr('position');
    var positionUpdate = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchTwo.php",
        data: {
            matchId: matchId,
            position: position,
            positionUpdate: positionUpdate
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.matchActiondefaultAuto', function (event) {
    event.preventDefault();
    var matchId = $(this).attr('id');
    $('.overAutoSubmit').attr('matchId',matchId);
});
$(document).on('click', '.overAutoSubmit', function (event) {
    event.preventDefault();
    var matchId = $(this).attr('matchId');
    var category = $(this).attr('category');
    var over = $('.overAutoNumber').val();
    var overAutoSubmit = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            category: category,
            over: over,
            overAutoSubmit: overAutoSubmit
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoRunSubmit', function (event) {
    event.preventDefault();
    var matchId = $(this).attr('matchId');
    var id = $(this).attr('id');
    var run = $(this).attr('run');
    var overIn = $(this).attr('overIn');
    var autoRunSubmit = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            run: run,
            id: id,
            subTitleId: overIn,
            autoRunSubmit: autoRunSubmit
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoDifferenceSubmit', function (event) {
    event.preventDefault();
    var matchId = $(this).attr('matchId');
    var id = $(this).attr('id');
    var difference = $(this).attr('difference');
    var overIn = $(this).attr('overIn');
    var autoDifferenceSubmit = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            difference: difference,
            id: id,
            overIn: overIn,
            autoDifferenceSubmit: autoDifferenceSubmit
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoQuestionStop', function (event) {
    event.preventDefault();
    var autowinId = $(this).attr('id');
    var matchId = $(this).attr('matchId');
    var autoQuestionStop = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            autowinId: autowinId,
            autoQuestionStop: autoQuestionStop
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoQuestionActive', function (event) {
    event.preventDefault();
    var autowinId = $(this).attr('id');
    var matchId = $(this).attr('matchId');
    var autoQuestionActive = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            autowinId: autowinId,
            autoQuestionActive: autoQuestionActive
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoQuestionHide', function (event) {
    event.preventDefault();
    var autowinId = $(this).attr('id');
    var matchId = $(this).attr('matchId');
    var autoQuestionHide = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            autowinId: autowinId,
            autoQuestionHide: autoQuestionHide
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoQuestionShow', function (event) {
    event.preventDefault();
    var autowinId = $(this).attr('id');
    var matchId = $(this).attr('matchId');
    var autoQuestionShow = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            autowinId: autowinId,
            autoQuestionShow: autoQuestionShow
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoQuestionAHide', function (event) {
    event.preventDefault();
    var autowinId = $(this).attr('id');
    var matchId = $(this).attr('matchId');
    var autoQuestionAHide = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            autowinId: autowinId,
            autoQuestionAHide: autoQuestionAHide
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoQuestionAShow', function (event) {
    event.preventDefault();
    var autowinId = $(this).attr('id');
    var matchId = $(this).attr('matchId');
    var autoQuestionAShow = 0;
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            matchId: matchId,
            autowinId: autowinId,
            autoQuestionAShow: autoQuestionAShow
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.autoWinSubmit', function (event) {
    event.preventDefault();
    var matchId = $(this).attr('matchId');
    var matchSubId = $(this).attr('matchSubId');
    var autowinId = $(this).attr('autowinId');
    var autoWinRun = $('.autoWinRunNumber'+matchSubId+'').val();
    var autoWinSubmit = 0;
    $.ajax({
        method: "POST",
        url: "betPanelActioncc1.php",
        data: {
            autoMatch: matchId,
            autowinId: autowinId,
            autoWinRun: autoWinRun,
            autoWinSubmit: autoWinSubmit
        },
        success: function (data) {
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: matchId});
        }
    });

});
$(document).on('click', '.matchActionMenuAuto', function () {

    var match_id = $(this).attr("id");
    $('.addQuestion').attr({
        id: match_id
    });
    $('.updateMatch').attr({
        id: match_id
    });
    $('.deleteMatch').attr({
        id: match_id
    });
    $('.closeMatchAuto').attr({
        id: match_id
    });

});
$(document).on('click', '.closeMatchAuto', function () {
    var match_id = $(this).attr("id");
    $.ajax({
        method: "POST",
        url: "betPanelDataFetchCc1.php",
        data: {
            closeMatchAuto: match_id
        },
        success: function (data) {
            //page refresh
            $("#liveMatchFetch").load('betLiveContentAuto3.php',{matchId: match_id});
            
        }
    });

});
</script>