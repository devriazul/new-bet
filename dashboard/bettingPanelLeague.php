
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
</aside><link rel="stylesheet" type="text/css" href="css/betPanel.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<main class="app-content">
    <div class="app-title" style="background: #AEB6BF;">
        <div>
            <h6><i class="fa fa-dashboard"></i> Total User Balance= 

                1093147.21                                || Total Gaining Amount= 102256376                || Total Sending Amount= 228030841.86                || Total Saving Amount= 4442760.86
                <span style="color: green">  || Total S Amount= 4025752.68</span>

            </h6>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
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
                    <!-- Add league model -->
                    <div id="addLeague" class="modal" style=" ">
                        <div class="modal-dialog col-lg-5" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="phone">League Name:</label>
                                        <input name="leagueName" type="text" class="form-control leagueName" autofocus required="1">
                                    </div>
                                    <button type="submit" class="btn btn-info addLeagueSubmit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add league Match model -->
                    <div id="addLeagueMatch" class="modal" style=" ">
                        <div class="modal-dialog col-lg-5" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="leagueNameInAddMatch"></label><br>
                                        <label for="phone">Match Name:</label>
                                        <input type="hidden" class="leagueId">
                                        <input type="text" class="form-control leagueMatchName" autofocus required="1">
                                    </div>
                                    <button type="submit" class="btn btn-info addLeagueMatchSubmit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-success" href="" ><i class="fa fa-refresh"></i>Refresh</a>
                    <a class="btn btn-primary icon-btn" href="" data-toggle="modal" data-target="#addLeague"><i class="fa fa-plus"></i>Add League</a>
                    <hr>
                    <div id="liveMatchFetch"></div>
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
</html><script>
    $(document).ready(function () {
        $("#liveMatchFetch").load('leagueContent.php');
    });
</script>
<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
</body>
</html>
<script>
$(document).on('click', '.addLeagueSubmit', function (event) {
    event.preventDefault();
    var leagueName = $('.leagueName').val();
    var addLeague = 0;
    $.ajax({
        method: "POST",
        url: "bettingPanelLeagueAction.php",
        data: {
            addLeague: addLeague,
            leagueName: leagueName
        },
        success: function (data) {
            $("#liveMatchFetch").load('leagueContent.php');
            $("#addLeague").modal('hide');
        }
    });
});
$(document).on('click', '.leagueDelete', function (event) {
    event.preventDefault();
    var league_id = $(this).attr('id');
    var leagueDelete = 0;
    $.ajax({
        method: "POST",
        url: "bettingPanelLeagueAction.php",
        data: {
            leagueDelete: leagueDelete,
            league_id: league_id
        },
        success: function (data) {
            $("#liveMatchFetch").load('leagueContent.php');
        }
    });
});
$(document).on('click', '.leagueAriaHide', function (event) {
    event.preventDefault();
    var league_id = $(this).attr('id');
    var leagueAriaHide = 0;
    $.ajax({
        method: "POST",
        url: "bettingPanelLeagueAction.php",
        data: {
            leagueAriaHide: leagueAriaHide,
            league_id: league_id
        },
        success: function (data) {
            $("#liveMatchFetch").load('leagueContent.php');
        }
    });
});
$(document).on('click', '.leagueAriaShow', function (event) {
    event.preventDefault();
    var league_id = $(this).attr('id');
    var leagueAriaShow = 0;
    $.ajax({
        method: "POST",
        url: "bettingPanelLeagueAction.php",
        data: {
            leagueAriaShow: leagueAriaShow,
            league_id: league_id
        },
        success: function (data) {
            $("#liveMatchFetch").load('leagueContent.php');
        }
    });
});
$(document).on('click', '.addLeagueMatch', function (event) {
    event.preventDefault();
    var league_id = $(this).attr('id');
    var FetchLeagueName = 0;
    $.ajax({
        method: "POST",
        url: "bettingPanelLeagueAction.php",
        data: {
            FetchLeagueName: FetchLeagueName,
            league_id: league_id
        },
        success: function (data) {
            $(".leagueId").val(league_id);
            $('.leagueNameInAddMatch').text(data);
        }
    });
});
$(document).on('click', '.addLeagueMatchSubmit', function (event) {
    event.preventDefault();
    var league_id = $('.leagueId').val();
    var leagueMatchName = $('.leagueMatchName').val();
    var addLeagueMatch = 0;
    $.ajax({
        method: "POST",
        url: "bettingPanelLeagueAction.php",
        data: {
            addLeagueMatch: addLeagueMatch,
            leagueMatchName: leagueMatchName,
            league_id: league_id
        },
        success: function (data) {
            $("#liveMatchFetch").load('leagueContent.php');
            $("#addLeagueMatch").modal('hide');
            $(".leagueMatchName").val();
        }
    });
});
$(document).on('click', '.leagueMatchDelete', function (event) {
    event.preventDefault();
    var leagueMatch_id = $(this).attr('id');
    var leagueMatchDelete = 0;
    $.ajax({
        method: "POST",
        url: "bettingPanelLeagueAction.php",
        data: {
            leagueMatchDelete: leagueMatchDelete,
            leagueMatch_id: leagueMatch_id
        },
        success: function (data) {
            $("#liveMatchFetch").load('leagueContent.php');
        }
    });
});
</script>