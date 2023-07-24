
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
                        <li><a href="adminTransactionHistory.php" class="dropdown-item"><i class="fa fa-money fa-lg"></i>( 24774015.75 )</a></li>
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
            <h6><i class="fa fa-dashboard"></i>
                                Total Bet = 0                || Total Win = 0                || Total Loss = 0
                <span style="color: green">  || Total Save = 0</span>

            </h6>

        </div>
    </div>
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Multi Running Bet </h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="userTable">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">ReturnAmount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                  
                                </tbody>
                        </table>
                    </div><!--end of .table-responsive-->

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
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#userTable').DataTable();
    });
</script>

</body>
</html>
<style>
    tbody tr th{
        font-weight: normal;
    }

.matchTitle-box{
  float: left;
  width: 85%;
}
.matchTitle-box-action{
  float: left;
  width: 15%;
}
.matchTitle-box-line{
  clear: both;
  border-bottom: 1px solid #000000;
  color: #404040;
  margin-top: 10px;
}
.table-div{
  max-width: 100%;
  height: 755px;
    scroll-snap-type: x mandatory;
    float: left;
    margin-right: 10px;
    overflow: scroll;
    position: fixed;
    margin-left: auto;
    margin-right: auto;
    color: #D3D3D3;
}
.table-div{
  position: normal;
  width: 260%;
}
thead tr th{
  border-top: .5px solid black;
  min-width: 150px;
  color: #07B970;
}
tbody tr td{
    
}
tr td{
  border-bottom: 1px solid #D3D3D3;
  border-left: 1px solid black;
}
table{
  text-align: center;
}
.page-scroll{
  left: 5px;
}
hr{
  border: 0.5px;
}
#customers tr:nth-child(even){background-color: #404040;}

#customers tr:hover {background-color: #ddd; color: black;}
</style>