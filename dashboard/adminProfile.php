
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
                        <li><a href="adminTransactionHistory.php" class="dropdown-item"><i class="fa fa-money fa-lg"></i>( 24759935.75 )</a></li>
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
<main class="app-content">

    <div class="container">
        <div class="row">
            <div class="col-md-1 ">

            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                                                <div class="row">
                            <div class="col-md-12">
                                <h4>Your Profile</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                    <form action="" method="post">
                                        <div class = "form-group row">
                                            <label for = "username" class = "col-4 col-form-label"> Name*</label>
                                            <div class = "col-8">
                                                <input value="0" name="name" placeholder = "Name" class = "form-control here" required = "required" type = "text">
                                            </div>
                                        </div>
                                        <div class = "form-group row">
                                            <label for = "name" class = "col-4 col-form-label">User Name *</label>
                                            <div class = "col-8">
                                                <input id = "name" name = "userName" value="lal122" placeholder = "First Name" class = "form-control here" type = "text" required="1">
                                            </div>
                                        </div>

                                        <div class = "form-group row">
                                            <label for = "email"  class = "col-4 col-form-label">Email*</label>
                                            <div class = "col-8">
                                                <input id = "email"  value="0" name ="email" placeholder = "Email" class = "form-control here" required = "required" type = "text">
                                            </div>
                                        </div>
                                        <div class = "form-group row">
                                            <label for = "newpass" class = "col-4 col-form-label">Old Password</label>
                                            <div class = "col-8">
                                                <input   name = "oldpass" placeholder = "Old Password" class = "form-control" type ="password" required="1"  value="$2y$10$ZW/nwBbMkqcT1lBMgJBSh.mjflWhZdx0d9x2giyaFRU2dlTz30RmG">
                                            </div>
                                        </div>
                                        <div class = "form-group row">
                                            <label for = "newpass" class = "col-4 col-form-label">New Password</label>
                                            <div class = "col-8">
                                                <input  name = "newpass" placeholder = "New Password" class = "form-control" type = "password" required="1">
                                            </div>
                                        </div>
                                        <div class = "form-group row">
                                            <div class = "offset-4 col-8">
                                                <button name = "update" type = "submit" class = "btn btn-primary">Update My Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</main>
<!--Essential javascripts for application to work-->
<script src = "js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<!-- Google analytics script-->
<script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>
</body>
</html>