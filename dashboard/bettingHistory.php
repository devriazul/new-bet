
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
</aside><style type="text/css">
	.search_input,.submit_search {
        padding: 4px 6px;
        border-radius: 5px;
        border: 1px solid #575756;
        transition: all 250ms ease-in-out;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        margin-top: 10px;
    }
</style>
<main class="app-content">

    <div class="app-title">
        <div>
            <h5><i class="fa fa-th-list"></i> History</h5>
   
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                   <div>
                      <form method='post'>
                        <input style="margin-left: 10px;" class="search_input" name='search' type="text">
                        <button class="submit_search" type="submit"><i class="fa fa-search"></i></button>
                      </form>
                     </div>
                    <div class="table-responsive" style="margin-top: 10px;">

                            <table class="table table-hover table-bordered" id="">
                       
                                <thead>
                                    <tr>
                                         <!--<th>SN</th>-->
                                        <th>Match</th>
                                        <th>question</th>
                                        <th>Credit(In)</th>
                                        <th>Debit(out)</th>
                                        <th>Saving</th>
                                        <th>User Balance</th>
                                        <th>Time</th>
                                 
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army  24 Jul 2023 9:00 PM</td>
                                                <td>7 over over/under (1st innings)</td>
                                                <td>0</td>
                                                <td>-1703.2</td>
                                                <td>4441057.6618081 </td>
                                                <td>1097258.91 </td>
                                                <td>24 Jul 2023 9:56 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army  24 Jul 2023 9:00 PM</td>
                                                <td>7 over 2 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4442760.8618081 </td>
                                                <td>1097258.91 </td>
                                                <td>24 Jul 2023 9:56 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army  24 Jul 2023 9:00 PM</td>
                                                <td>7 over odd/even (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4442760.8618081 </td>
                                                <td>1097258.91 </td>
                                                <td>24 Jul 2023 9:56 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army  24 Jul 2023 9:00 PM</td>
                                                <td>7 over 3 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4442760.8618081 </td>
                                                <td>1097258.91 </td>
                                                <td>24 Jul 2023 9:56 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>San Lorenzo Reserves VS Tigre Reserves 24 Jul 2023 8:00 PM</td>
                                                <td>Full Time Result</td>
                                                <td>0</td>
                                                <td>-40</td>
                                                <td>4442760.8618081 </td>
                                                <td>1095125.02 </td>
                                                <td>24 Jul 2023 9:54 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>San Lorenzo Reserves VS Tigre Reserves 24 Jul 2023 8:00 PM</td>
                                                <td>Match Goals Over/Under</td>
                                                <td>0</td>
                                                <td>-20.4</td>
                                                <td>4442800.8618081 </td>
                                                <td>1103076.12 </td>
                                                <td>24 Jul 2023 9:53 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>7 over over/under (2nd innings)</td>
                                                <td>592.6</td>
                                                <td>0</td>
                                                <td>4442821.2618081 </td>
                                                <td>1105933.4 </td>
                                                <td>24 Jul 2023 9:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>7 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4442228.6618081 </td>
                                                <td>1105933.4 </td>
                                                <td>24 Jul 2023 9:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>7 over odd/even (2nd innings)</td>
                                                <td>573.6</td>
                                                <td>0</td>
                                                <td>4442802.2618081 </td>
                                                <td>1105933.4 </td>
                                                <td>24 Jul 2023 9:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>7 over 3 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4442228.6618081 </td>
                                                <td>1105933.4 </td>
                                                <td>24 Jul 2023 9:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>6 over over/under (2nd innings)</td>
                                                <td>0</td>
                                                <td>-871.94</td>
                                                <td>4442228.6618081 </td>
                                                <td>1117854.02 </td>
                                                <td>24 Jul 2023 9:47 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>6 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4443100.6018081 </td>
                                                <td>1117854.02 </td>
                                                <td>24 Jul 2023 9:47 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>6 over odd/even (2nd innings)</td>
                                                <td>0</td>
                                                <td>-23</td>
                                                <td>4443077.6018081 </td>
                                                <td>1117854.02 </td>
                                                <td>24 Jul 2023 9:47 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>6 over 3 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4443100.6018081 </td>
                                                <td>1117854.02 </td>
                                                <td>24 Jul 2023 9:47 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Vitalii  Mukhin VS Vasil Smyk 24 Jul 2023 9:10 PM</td>
                                                <td>1st Game winner</td>
                                                <td>0</td>
                                                <td>-1500</td>
                                                <td>4443100.6018081 </td>
                                                <td>1102616.65 </td>
                                                <td>24 Jul 2023 9:47 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Vitalii  Mukhin VS Vasil Smyk 24 Jul 2023 9:10 PM</td>
                                                <td>To Win The Match</td>
                                                <td>0</td>
                                                <td>-212.8</td>
                                                <td>4444600.6018081 </td>
                                                <td>1102007.55 </td>
                                                <td>24 Jul 2023 9:46 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>5 over over/under (2nd innings)</td>
                                                <td>1517.6</td>
                                                <td>0</td>
                                                <td>4444813.4018081 </td>
                                                <td>1110179.76 </td>
                                                <td>24 Jul 2023 9:44 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>5 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4443295.8018081 </td>
                                                <td>1110179.76 </td>
                                                <td>24 Jul 2023 9:44 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>5 over odd/even (2nd innings)</td>
                                                <td>0</td>
                                                <td>-159.2</td>
                                                <td>4443136.6018081 </td>
                                                <td>1110179.76 </td>
                                                <td>24 Jul 2023 9:44 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>5 over 3 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4443295.8018081 </td>
                                                <td>1110179.76 </td>
                                                <td>24 Jul 2023 9:44 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>4 over over/under (2nd innings)</td>
                                                <td>0</td>
                                                <td>-965.2</td>
                                                <td>4443295.8018081 </td>
                                                <td>1110516.54 </td>
                                                <td>24 Jul 2023 9:40 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>4 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4444261.0018081 </td>
                                                <td>1110516.54 </td>
                                                <td>24 Jul 2023 9:40 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>4 over odd/even (2nd innings)</td>
                                                <td>0</td>
                                                <td>-108</td>
                                                <td>4444153.0018081 </td>
                                                <td>1110516.54 </td>
                                                <td>24 Jul 2023 9:40 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>4 over 3 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4444261.0018081 </td>
                                                <td>1110516.54 </td>
                                                <td>24 Jul 2023 9:40 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army  24 Jul 2023 9:00 PM</td>
                                                <td>4 Over total over/under (1st innings)</td>
                                                <td>1834.8</td>
                                                <td>0</td>
                                                <td>4444261.0018081 </td>
                                                <td>1102241.86 </td>
                                                <td>24 Jul 2023 9:39 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army  24 Jul 2023 9:00 PM</td>
                                                <td>4 Over total 2 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4442426.2018081 </td>
                                                <td>1102241.86 </td>
                                                <td>24 Jul 2023 9:39 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army  24 Jul 2023 9:00 PM</td>
                                                <td>4 Over total odd/even (1st innings)</td>
                                                <td>150</td>
                                                <td>0</td>
                                                <td>4442576.2018081 </td>
                                                <td>1102241.86 </td>
                                                <td>24 Jul 2023 9:39 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army  24 Jul 2023 9:00 PM</td>
                                                <td>4 Over total 3 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4442426.2018081 </td>
                                                <td>1102241.86 </td>
                                                <td>24 Jul 2023 9:39 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>San Lorenzo Reserves VS Tigre Reserves 24 Jul 2023 8:00 PM</td>
                                                <td>Half Time Result</td>
                                                <td>20</td>
                                                <td>0</td>
                                                <td>4442426.2018081 </td>
                                                <td>1081249.54 </td>
                                                <td>24 Jul 2023 9:39 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>San Lorenzo Reserves VS Tigre Reserves 24 Jul 2023 8:00 PM</td>
                                                <td> First Team To Score</td>
                                                <td>20</td>
                                                <td>0</td>
                                                <td>4442406.2018081 </td>
                                                <td>1083922.54 </td>
                                                <td>24 Jul 2023 9:38 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>3 over over/under (2nd innings)</td>
                                                <td>0</td>
                                                <td>-878</td>
                                                <td>4442386.2018081 </td>
                                                <td>1110988.44 </td>
                                                <td>24 Jul 2023 9:34 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>3 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4443264.2018081 </td>
                                                <td>1110988.44 </td>
                                                <td>24 Jul 2023 9:34 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>3 over odd/even (2nd innings)</td>
                                                <td>816</td>
                                                <td>0</td>
                                                <td>4444080.2018081 </td>
                                                <td>1110988.44 </td>
                                                <td>24 Jul 2023 9:34 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>3 over 3 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4443264.2018081 </td>
                                                <td>1110988.44 </td>
                                                <td>24 Jul 2023 9:34 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>2 over over/under (2nd innings)</td>
                                                <td>0</td>
                                                <td>-4592.504</td>
                                                <td>4443264.2018081 </td>
                                                <td>1186987.96 </td>
                                                <td>24 Jul 2023 9:29 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>2 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4447856.7058081 </td>
                                                <td>1186987.96 </td>
                                                <td>24 Jul 2023 9:29 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>2 over odd/even (2nd innings)</td>
                                                <td>317</td>
                                                <td>0</td>
                                                <td>4448173.7058081 </td>
                                                <td>1186987.96 </td>
                                                <td>24 Jul 2023 9:29 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>2 over 3 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4447856.7058081 </td>
                                                <td>1186987.96 </td>
                                                <td>24 Jul 2023 9:29 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>1 over over/under (2nd innings)</td>
                                                <td>6199.8</td>
                                                <td>0</td>
                                                <td>4447856.7058081 </td>
                                                <td>1205273.98 </td>
                                                <td>24 Jul 2023 9:21 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>1 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4441656.9058081 </td>
                                                <td>1205273.98 </td>
                                                <td>24 Jul 2023 9:21 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>1 over odd/even (2nd innings)</td>
                                                <td>0</td>
                                                <td>-160</td>
                                                <td>4441496.9058081 </td>
                                                <td>1205273.98 </td>
                                                <td>24 Jul 2023 9:21 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>1 over 3 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4441656.9058081 </td>
                                                <td>1205273.98 </td>
                                                <td>24 Jul 2023 9:21 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>20 over over/under (1st innings)</td>
                                                <td>2793.6</td>
                                                <td>0</td>
                                                <td>4441656.9058081 </td>
                                                <td>1206137.01 </td>
                                                <td>24 Jul 2023 9:08 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>20 over 2 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4438863.3058081 </td>
                                                <td>1206137.01 </td>
                                                <td>24 Jul 2023 9:08 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>20 over odd/even (1st innings)</td>
                                                <td>24.2</td>
                                                <td>0</td>
                                                <td>4438887.5058081 </td>
                                                <td>1206137.01 </td>
                                                <td>24 Jul 2023 9:08 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>20 over 3 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4438863.3058081 </td>
                                                <td>1206137.01 </td>
                                                <td>24 Jul 2023 9:08 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Tomas Donat VS Vratislav Petracek 24 Jul 2023 8:30 PM</td>
                                                <td>1st Game winner</td>
                                                <td>0</td>
                                                <td>-1500</td>
                                                <td>4438863.3058081 </td>
                                                <td>1191947.29 </td>
                                                <td>24 Jul 2023 9:07 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Tomas Donat VS Vratislav Petracek 24 Jul 2023 8:30 PM</td>
                                                <td>To Win The Match</td>
                                                <td>420</td>
                                                <td>0</td>
                                                <td>4440363.3058081 </td>
                                                <td>1192467.29 </td>
                                                <td>24 Jul 2023 9:06 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Durban Qalandars VS Cape Town Samp Army 24 Jul 2023 9:00 PM</td>
                                                <td>Toss Wonner</td>
                                                <td>0</td>
                                                <td>-368.14</td>
                                                <td>4439943.3058081 </td>
                                                <td>1190645.15 </td>
                                                <td>24 Jul 2023 9:06 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Harare Hurricanes VS Joburg Buffaloes  24 Jul 2023 7:00 PM</td>
                                                <td>Match Winner</td>
                                                <td>94108.8</td>
                                                <td>0</td>
                                                <td>4440311.4458081 </td>
                                                <td>1036430.89 </td>
                                                <td>24 Jul 2023 8:58 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Harare Hurricanes VS Joburg Buffaloes  24 Jul 2023 7:00 PM</td>
                                                <td>9 over over/under (2nd innings)</td>
                                                <td>1237</td>
                                                <td>0</td>
                                                <td>4346202.6458081 </td>
                                                <td>1033860.89 </td>
                                                <td>24 Jul 2023 8:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Harare Hurricanes VS Joburg Buffaloes  24 Jul 2023 7:00 PM</td>
                                                <td>9 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4344965.6458081 </td>
                                                <td>1033860.89 </td>
                                                <td>24 Jul 2023 8:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Harare Hurricanes VS Joburg Buffaloes  24 Jul 2023 7:00 PM</td>
                                                <td>9 over odd/even (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4344965.6458081 </td>
                                                <td>1033860.89 </td>
                                                <td>24 Jul 2023 8:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Harare Hurricanes VS Joburg Buffaloes  24 Jul 2023 7:00 PM</td>
                                                <td>9 over 3 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4344965.6458081 </td>
                                                <td>1033860.89 </td>
                                                <td>24 Jul 2023 8:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>19 over over/under (1st innings)</td>
                                                <td>473.4</td>
                                                <td>0</td>
                                                <td>4344965.6458081 </td>
                                                <td>1031474.89 </td>
                                                <td>24 Jul 2023 8:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>19 over 2 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4344492.2458081 </td>
                                                <td>1031474.89 </td>
                                                <td>24 Jul 2023 8:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>19 over odd/even (1st innings)</td>
                                                <td>0</td>
                                                <td>-24</td>
                                                <td>4344468.2458081 </td>
                                                <td>1031474.89 </td>
                                                <td>24 Jul 2023 8:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>19 over 3 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4344492.2458081 </td>
                                                <td>1031474.89 </td>
                                                <td>24 Jul 2023 8:52 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>18 over over/under (1st innings)</td>
                                                <td>2732.452</td>
                                                <td>0</td>
                                                <td>4344492.2458081 </td>
                                                <td>1043385.59 </td>
                                                <td>24 Jul 2023 8:49 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>18 over 2 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4341759.7938081 </td>
                                                <td>1043385.59 </td>
                                                <td>24 Jul 2023 8:49 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>18 over odd/even (1st innings)</td>
                                                <td>0</td>
                                                <td>-136</td>
                                                <td>4341623.7938081 </td>
                                                <td>1043385.59 </td>
                                                <td>24 Jul 2023 8:49 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Hampton Falcons VS Trident Stallions  24 Jul 2023                          7:30 PM</td>
                                                <td>18 over 3 way win (1st innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4341759.7938081 </td>
                                                <td>1043385.59 </td>
                                                <td>24 Jul 2023 8:49 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Harare Hurricanes VS Joburg Buffaloes  24 Jul 2023 7:00 PM</td>
                                                <td>8 over over/under (2nd innings)</td>
                                                <td>0</td>
                                                <td>-1817.6</td>
                                                <td>4341759.7938081 </td>
                                                <td>1039181.32 </td>
                                                <td>24 Jul 2023 8:44 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Harare Hurricanes VS Joburg Buffaloes  24 Jul 2023 7:00 PM</td>
                                                <td>8 over 2 way win (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4343577.3938081 </td>
                                                <td>1039181.32 </td>
                                                <td>24 Jul 2023 8:44 PM </td>
                                              
                                            </tr>
                                            
                                             <tr>
                                                <!--<td></td>-->
                                         
                                                <td>Harare Hurricanes VS Joburg Buffaloes  24 Jul 2023 7:00 PM</td>
                                                <td>8 over odd/even (2nd innings)</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>4343577.3938081 </td>
                                                <td>1039181.32 </td>
                                                <td>24 Jul 2023 8:44 PM </td>
                                              
                                            </tr>
                                            
                                </tbody>
                            </table>
                    </div>
                    <div style="float: left; margin-left: 10px;">
                         <form method='post'>
                          <input name='previous1' type="submit" value='previous'>
                         </form>
                        </div>
                        <div style="float: left; margin-left: 3px;">
                         <form method='post'>
                           <input name='one1' type="submit" value='1'>
                         </form>
                        </div>
                        <div style="float: left; margin-left: 3px;">
                         <form method='post'>
                           <input name='two1' type="submit" value='2'>
                         </form>
                        </div>
                        <div style="float: left; margin-left: 4px;">
                         <form method='post'>
                           <input name='three1' type="submit" value='3'>
                         </form>
                        </div>
                        <div style="float: left; margin-left: 3px;">
                         <form method='post'>
                           <input name='four1' type="submit" value='4'>
                         </form>
                        </div>
                        <div style="float: left;margin-left: 3px;">
                         <form method='post'>
                           <input name='next1' type="submit" value='next'>
                         </form>
                        </div>
                        <div style="padding-bottom: 20px;">.</div>
                </div>
            </div>
        </div>
    </div>
</main>
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
</html><script >
    $('#sampleTable').dataTable({
      aaSorting: [[0, 'asc']]
    });
</script>
<!-- Google analytics script-->

</body>
</html>