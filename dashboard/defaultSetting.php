
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
                <header class="app-header"><a class="app-header__logo" href="index.php" style="font-family: none; font-size: 15px;">(0.00)</a>
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
                        <li><a href="adminTransactionHistory.php" class="dropdown-item"><i class="fa fa-money fa-lg"></i>( 24731397.75 )</a></li>
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
<style>

    #accordion .panel{
        border: none;
        border-radius: 0;
        box-shadow: none;
        /* margin: 0 30px 10px 30px;*/
        overflow: hidden;
        position: relative;
        margin-bottom: -7px !important;
    }
    #accordion .panel-heading{
        padding: 0;
        border: none;
        border-radius: 0;
        position: relative;
    }
    #accordion .panel-title a{
        display: block;
        padding: 8px 22px;
        margin: 0;
        background: #145C51;
        font-size: 14px;
        font-weight: 700;

        color: #fff;
        border-radius: 0;
        position: relative;
    }




    #accordion .panel-body{
        border: 3px solid #145C51;
        border-top: none;
        background: #fff;
        /* font-size: 15px; */
        color: #1c2336;
        line-height: 27px;
        position: relative;
        margin-top: -8px !important;
    }
    #accordion .panel-body-2{

        border-top: none;
        background: #fff;
        /* font-size: 15px; */
        color: #1c2336;
        line-height: 27px;
        position: relative;
        margin-top: -8px !important;
    }

    #accordion .panel-body p{
        padding: 10px;
    }
    //modal resize

</style>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Betting Panel</h1>

        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
                        
                        <div class="tile">
                <div class="tile-body">
                    <!-- Modal -->
                    <div id="add-bet" class="modal" style="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Match Title </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">A Team</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="A_team" rows="4" placeholder="Enter A Team Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">B Team</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="B_team" rows="4" placeholder="Enter  B Team Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Bet Statement</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="title" rows="4" placeholder="Enter Bet Statement">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Date</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="date" id="demoDate" type="text" placeholder="Select Date">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Match Type</label>
                                            <div class="col-md-8">
                                                <!--Radio Button Markup-->
                                                <div class="">
                                                    <label>
                                                      <input type="radio" name="gameType" id="gameType" value="1"><span class="label-text"> FootBall</span><br>
                                                      <input class="gameTypec" type="radio" name="gameType" id="gameType" value="2"><span class="label-text"> Cricket</span><br>
                                                      <input type="radio" name="gameType" id="gameType" value="3"><span class="label-text"> Basketball</span><br>
                                                      <input type="radio" name="gameType" id="gameType" value="4"><span class="label-text"> Tennis</span><br>
                                                      <input type="radio" name="gameType" id="gameType" value="5"><span class="label-text"> Volleyball</span><br>
                                                      <input type="radio" name="gameType" id="gameType" value="6"><span class="label-text"> Hockey</span><br>
                                                      <input type="radio" name="gameType" id="gameType" value="7"><span class="label-text"> Badminton</span>
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
                                                        <input type="radio" name="status" id="status" value="1"><span class="label-text"> ODI</span><br>
                                                        <input type="radio" name="status" id="status" value="2"><span class="label-text"> T20</span><br>
                                                        <input type="radio" name="status" id="status" value="3"><span class="label-text"> Test</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3"></label>
                                            <div class="col-md-8">
                                                <input name="addBet" type="submit" class="btn btn-success" value="submit">
                                            </div>
                                        </div>


                                    </form>
                                </div>
                                <div class="modal-footer">

                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end Modal -->
                    <a class="btn btn-primary icon-btn" href="" data-toggle="modal" data-target="#add-bet"><i class="fa fa-plus"></i>Add Item	</a>
                    <a class="btn btn-success" href="" ><i class="fa fa-refresh"></i>Refresh</a><br><br>
                    <h6 style="color: #DD5347">Live Match</h6>
                                                <!-- Modal -->

                            <!-- Modal -->
                            <div id="action-sub-betting-id21" class="modal" style="">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">



                                        <div class="modal-body">

                                            <div class="list-group">
                                                <a href="#" class="list-group-item btn btn-sm" data-toggle="modal" data-target="#add-sub-betting-id21" data-dismiss="modal">Add Question</a>
                                                <a href="#" class="list-group-item btn btn-sm" data-toggle="modal" data-target="#update-match-21" data-dismiss="modal">Update match</a>
                                                <a class="list-group-item btn btn-sm" onclick="return confirm('Are you sure?')" href="defaultPanelAction.php?deleteMatch=21">Delete match</a>
                                                <a class="list-group-item btn btn-sm" onclick="return confirm('Are you sure?')" href="defaultPanelAction.php?closeMatch=21">Close The Match</a>
                                            </div>


                                        </div>

                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->

                            <!-- Modal -->
                            <div id="add-sub-betting-id21" class="modal" style="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Question </h5>

                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>match : A <> B Local Cricket  </h6>
                                            <form class="form-horizontal" method="post">

                                                <div class="form-group">
                                                    <select class="form-control col-md-6" id="dTo" name="category">
                                                        <option disabled selected value>Select category</option>
                                                                                                                        <option value=" 1">      A1</option>

                                                                                                                                <option value=" 2">      B1</option>

                                                                                                                                <option value=" 3">      C1</option>

                                                                                                                                <option value=" 4">      D1</option>

                                                                                                                                <option value=" 5">      E1</option>

                                                                                                                                <option value=" 10">      A2</option>

                                                                                                                                <option value=" 11">      B2</option>

                                                                                                                                <option value=" 12">      C2</option>

                                                                                                                                <option value=" 13">      D2</option>

                                                                                                                                <option value=" 14">      E2</option>

                                                                                                                    </select>
                                                </div>
                                                <div class="form-group">

                                                    <select class="form-control col-md-6" id="dTo" name="gType">
                                                        <option disabled selected value>Select game type</option>
                                                        <option value="1">Football</option>
                                                        <option value="2">Cricket</option>
                                                        <option value="3">Basketball</option>
                                                        <option value="4">Tennis</option>
                                                        <option value="5">Volleyball</option>
                                                        <option value="6">Hockey</option>
                                                        <option value="7">Badminton</option>
                                                    </select>
                                                </div>


                                                <div class="field_wrapper-sub">

                                                    <div class="form-group row">

                                                        <div class="col-md-6">
                                                            <input class="form-control" name="input_field[]"  placeholder="Enter Question">

                                                            <a href="javascript:void(0);" class="add_input_button-sub" title="Add field"><i style="background: green;color: white;padding: 9px;border-radius: 43%;margin-top: 6px;" class="fa fa-plus" ></i></a>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="bettingId" type="text"  value="21" hidden="1">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="addBetSubTitle" type="submit" class="btn btn-success" value="submit">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->


                            <!-- Modal update match-->
                            <div id="update-match-21" class="modal" style="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Match Title </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post">

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">A Team</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="A_team" rows="4" value="A" placeholder="Enter A Team Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">B Team</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="B_team" rows="4" value="B" placeholder="Enter  B Team Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">match Statement</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" name="title" value="Local Cricket  " rows="4" placeholder="Enter match Statement">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Date</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" value="J " name="date" id="demoDate" type="text" placeholder="Select Date">
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
                                                                <input type="radio" name="gameType" id="gameType" value="1"><span class="label-text"> FootBall</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="2"><span class="label-text"> Cricket</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="3"><span class="label-text"> Basketball</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="4"><span class="label-text"> Tennis</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="5"><span class="label-text"> Volleyball</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="6"><span class="label-text"> Hockey</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="7"><span class="label-text"> Badminton</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="addBet" type="submit" class="btn btn-success" value="submit">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->
                            <!-- first label -->

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">

                                    <div class="panel-heading" role="tab" id="headingOne21one">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne21one" aria-expanded="true" aria-controls="collapseOne21one">

                                                                                                    <img src="../img/tennis.png" width="25px;">&nbsp; A <> B ,Local Cricket  || J 

                                                    <button class="btn btn-primary  btn-sm" href="" data-toggle="modal" data-target="#action-sub-betting-id21">action </button>

                                                                                                            <form method="post"action="defaultPanelAction.php" style="display: inline">
                                                            <input type="text" name="bettingTitleId"  value="21" hidden>
                                                            <input type="submit" name="bettingTitleAriaShow" class="btn btn-danger  btn-sm"  value="aria show">
                                                        </form>
                                                                                                            


                                            </a>

                                        </h4>
                                    </div>
                                                                    </div>
                            </div>
                                                        <!-- Modal -->

                            <!-- Modal -->
                            <div id="action-sub-betting-id20" class="modal" style="">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">



                                        <div class="modal-body">

                                            <div class="list-group">
                                                <a href="#" class="list-group-item btn btn-sm" data-toggle="modal" data-target="#add-sub-betting-id20" data-dismiss="modal">Add Question</a>
                                                <a href="#" class="list-group-item btn btn-sm" data-toggle="modal" data-target="#update-match-20" data-dismiss="modal">Update match</a>
                                                <a class="list-group-item btn btn-sm" onclick="return confirm('Are you sure?')" href="defaultPanelAction.php?deleteMatch=20">Delete match</a>
                                                <a class="list-group-item btn btn-sm" onclick="return confirm('Are you sure?')" href="defaultPanelAction.php?closeMatch=20">Close The Match</a>
                                            </div>


                                        </div>

                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->

                            <!-- Modal -->
                            <div id="add-sub-betting-id20" class="modal" style="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Question </h5>

                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>match : A <> B T20 </h6>
                                            <form class="form-horizontal" method="post">

                                                <div class="form-group">
                                                    <select class="form-control col-md-6" id="dTo" name="category">
                                                        <option disabled selected value>Select category</option>
                                                                                                                        <option value=" 1">      A1</option>

                                                                                                                                <option value=" 2">      B1</option>

                                                                                                                                <option value=" 3">      C1</option>

                                                                                                                                <option value=" 4">      D1</option>

                                                                                                                                <option value=" 5">      E1</option>

                                                                                                                                <option value=" 10">      A2</option>

                                                                                                                                <option value=" 11">      B2</option>

                                                                                                                                <option value=" 12">      C2</option>

                                                                                                                                <option value=" 13">      D2</option>

                                                                                                                                <option value=" 14">      E2</option>

                                                                                                                    </select>
                                                </div>
                                                <div class="form-group">

                                                    <select class="form-control col-md-6" id="dTo" name="gType">
                                                        <option disabled selected value>Select game type</option>
                                                        <option value="1">Football</option>
                                                        <option value="2">Cricket</option>
                                                        <option value="3">Basketball</option>
                                                        <option value="4">Tennis</option>
                                                        <option value="5">Volleyball</option>
                                                        <option value="6">Hockey</option>
                                                        <option value="7">Badminton</option>
                                                    </select>
                                                </div>


                                                <div class="field_wrapper-sub">

                                                    <div class="form-group row">

                                                        <div class="col-md-6">
                                                            <input class="form-control" name="input_field[]"  placeholder="Enter Question">

                                                            <a href="javascript:void(0);" class="add_input_button-sub" title="Add field"><i style="background: green;color: white;padding: 9px;border-radius: 43%;margin-top: 6px;" class="fa fa-plus" ></i></a>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="bettingId" type="text"  value="20" hidden="1">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="addBetSubTitle" type="submit" class="btn btn-success" value="submit">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->


                            <!-- Modal update match-->
                            <div id="update-match-20" class="modal" style="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Match Title </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post">

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">A Team</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="A_team" rows="4" value="A" placeholder="Enter A Team Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">B Team</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="B_team" rows="4" value="B" placeholder="Enter  B Team Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">match Statement</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" name="title" value="T20 " rows="4" placeholder="Enter match Statement">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Date</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" value="T20 " name="date" id="demoDate" type="text" placeholder="Select Date">
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
                                                                <input type="radio" name="gameType" id="gameType" value="1"><span class="label-text"> FootBall</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="2"><span class="label-text"> Cricket</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="3"><span class="label-text"> Basketball</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="4"><span class="label-text"> Tennis</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="5"><span class="label-text"> Volleyball</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="6"><span class="label-text"> Hockey</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="7"><span class="label-text"> Badminton</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="addBet" type="submit" class="btn btn-success" value="submit">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->
                            <!-- first label -->

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">

                                    <div class="panel-heading" role="tab" id="headingOne20one">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne20one" aria-expanded="true" aria-controls="collapseOne20one">

                                                                                                    <img src="../img/cricket.png" width="25px;">&nbsp; A <> B ,T20 || T20 

                                                    <button class="btn btn-primary  btn-sm" href="" data-toggle="modal" data-target="#action-sub-betting-id20">action </button>

                                                                                                            <form method="post"action="defaultPanelAction.php" style="display: inline">
                                                            <input type="text" name="bettingTitleId"  value="20" hidden>
                                                            <input type="submit" name="bettingTitleAriaShow" class="btn btn-danger  btn-sm"  value="aria show">
                                                        </form>
                                                                                                            


                                            </a>

                                        </h4>
                                    </div>
                                                                    </div>
                            </div>
                                                        <!-- Modal -->

                            <!-- Modal -->
                            <div id="action-sub-betting-id19" class="modal" style="">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">



                                        <div class="modal-body">

                                            <div class="list-group">
                                                <a href="#" class="list-group-item btn btn-sm" data-toggle="modal" data-target="#add-sub-betting-id19" data-dismiss="modal">Add Question</a>
                                                <a href="#" class="list-group-item btn btn-sm" data-toggle="modal" data-target="#update-match-19" data-dismiss="modal">Update match</a>
                                                <a class="list-group-item btn btn-sm" onclick="return confirm('Are you sure?')" href="defaultPanelAction.php?deleteMatch=19">Delete match</a>
                                                <a class="list-group-item btn btn-sm" onclick="return confirm('Are you sure?')" href="defaultPanelAction.php?closeMatch=19">Close The Match</a>
                                            </div>


                                        </div>

                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->

                            <!-- Modal -->
                            <div id="add-sub-betting-id19" class="modal" style="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Question </h5>

                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>match : A <> B T tannis </h6>
                                            <form class="form-horizontal" method="post">

                                                <div class="form-group">
                                                    <select class="form-control col-md-6" id="dTo" name="category">
                                                        <option disabled selected value>Select category</option>
                                                                                                                        <option value=" 1">      A1</option>

                                                                                                                                <option value=" 2">      B1</option>

                                                                                                                                <option value=" 3">      C1</option>

                                                                                                                                <option value=" 4">      D1</option>

                                                                                                                                <option value=" 5">      E1</option>

                                                                                                                                <option value=" 10">      A2</option>

                                                                                                                                <option value=" 11">      B2</option>

                                                                                                                                <option value=" 12">      C2</option>

                                                                                                                                <option value=" 13">      D2</option>

                                                                                                                                <option value=" 14">      E2</option>

                                                                                                                    </select>
                                                </div>
                                                <div class="form-group">

                                                    <select class="form-control col-md-6" id="dTo" name="gType">
                                                        <option disabled selected value>Select game type</option>
                                                        <option value="1">Football</option>
                                                        <option value="2">Cricket</option>
                                                        <option value="3">Basketball</option>
                                                        <option value="4">Tennis</option>
                                                        <option value="5">Volleyball</option>
                                                        <option value="6">Hockey</option>
                                                        <option value="7">Badminton</option>
                                                    </select>
                                                </div>


                                                <div class="field_wrapper-sub">

                                                    <div class="form-group row">

                                                        <div class="col-md-6">
                                                            <input class="form-control" name="input_field[]"  placeholder="Enter Question">

                                                            <a href="javascript:void(0);" class="add_input_button-sub" title="Add field"><i style="background: green;color: white;padding: 9px;border-radius: 43%;margin-top: 6px;" class="fa fa-plus" ></i></a>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="bettingId" type="text"  value="19" hidden="1">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="addBetSubTitle" type="submit" class="btn btn-success" value="submit">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->


                            <!-- Modal update match-->
                            <div id="update-match-19" class="modal" style="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Match Title </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post">

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">A Team</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="A_team" rows="4" value="A" placeholder="Enter A Team Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">B Team</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="B_team" rows="4" value="B" placeholder="Enter  B Team Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">match Statement</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" name="title" value="T tannis " rows="4" placeholder="Enter match Statement">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Date</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" value="Ta " name="date" id="demoDate" type="text" placeholder="Select Date">
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
                                                                <input type="radio" name="gameType" id="gameType" value="1"><span class="label-text"> FootBall</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="2"><span class="label-text"> Cricket</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="3"><span class="label-text"> Basketball</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="4"><span class="label-text"> Tennis</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="5"><span class="label-text"> Volleyball</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="6"><span class="label-text"> Hockey</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="7"><span class="label-text"> Badminton</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="addBet" type="submit" class="btn btn-success" value="submit">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->
                            <!-- first label -->

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">

                                    <div class="panel-heading" role="tab" id="headingOne19one">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne19one" aria-expanded="true" aria-controls="collapseOne19one">

                                                                                                    <img src="../img/volleyball.png" width="25px;">&nbsp; A <> B ,T tannis || Ta 

                                                    <button class="btn btn-primary  btn-sm" href="" data-toggle="modal" data-target="#action-sub-betting-id19">action </button>

                                                                                                            <form method="post"action="defaultPanelAction.php" style="display: inline">
                                                            <input type="text" name="bettingTitleId"  value="19" hidden>
                                                            <input type="submit" name="bettingTitleAriaShow" class="btn btn-danger  btn-sm"  value="aria show">
                                                        </form>
                                                                                                            


                                            </a>

                                        </h4>
                                    </div>
                                                                    </div>
                            </div>
                                                        <!-- Modal -->

                            <!-- Modal -->
                            <div id="action-sub-betting-id17" class="modal" style="">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">



                                        <div class="modal-body">

                                            <div class="list-group">
                                                <a href="#" class="list-group-item btn btn-sm" data-toggle="modal" data-target="#add-sub-betting-id17" data-dismiss="modal">Add Question</a>
                                                <a href="#" class="list-group-item btn btn-sm" data-toggle="modal" data-target="#update-match-17" data-dismiss="modal">Update match</a>
                                                <a class="list-group-item btn btn-sm" onclick="return confirm('Are you sure?')" href="defaultPanelAction.php?deleteMatch=17">Delete match</a>
                                                <a class="list-group-item btn btn-sm" onclick="return confirm('Are you sure?')" href="defaultPanelAction.php?closeMatch=17">Close The Match</a>
                                            </div>


                                        </div>

                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">X</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->

                            <!-- Modal -->
                            <div id="add-sub-betting-id17" class="modal" style="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Question </h5>

                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>match : A <> B Football </h6>
                                            <form class="form-horizontal" method="post">

                                                <div class="form-group">
                                                    <select class="form-control col-md-6" id="dTo" name="category">
                                                        <option disabled selected value>Select category</option>
                                                                                                                        <option value=" 1">      A1</option>

                                                                                                                                <option value=" 2">      B1</option>

                                                                                                                                <option value=" 3">      C1</option>

                                                                                                                                <option value=" 4">      D1</option>

                                                                                                                                <option value=" 5">      E1</option>

                                                                                                                                <option value=" 10">      A2</option>

                                                                                                                                <option value=" 11">      B2</option>

                                                                                                                                <option value=" 12">      C2</option>

                                                                                                                                <option value=" 13">      D2</option>

                                                                                                                                <option value=" 14">      E2</option>

                                                                                                                    </select>
                                                </div>
                                                <div class="form-group">

                                                    <select class="form-control col-md-6" id="dTo" name="gType">
                                                        <option disabled selected value>Select game type</option>
                                                        <option value="1">Football</option>
                                                        <option value="2">Cricket</option>
                                                        <option value="3">Basketball</option>
                                                        <option value="4">Tennis</option>
                                                        <option value="5">Volleyball</option>
                                                        <option value="6">Hockey</option>
                                                        <option value="7">Badminton</option>
                                                    </select>
                                                </div>


                                                <div class="field_wrapper-sub">

                                                    <div class="form-group row">

                                                        <div class="col-md-6">
                                                            <input class="form-control" name="input_field[]"  placeholder="Enter Question">

                                                            <a href="javascript:void(0);" class="add_input_button-sub" title="Add field"><i style="background: green;color: white;padding: 9px;border-radius: 43%;margin-top: 6px;" class="fa fa-plus" ></i></a>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="bettingId" type="text"  value="17" hidden="1">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="addBetSubTitle" type="submit" class="btn btn-success" value="submit">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->


                            <!-- Modal update match-->
                            <div id="update-match-17" class="modal" style="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Match Title </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post">

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">A Team</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="A_team" rows="4" value="A" placeholder="Enter A Team Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">B Team</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="B_team" rows="4" value="B" placeholder="Enter  B Team Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">match Statement</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" name="title" value="Football " rows="4" placeholder="Enter match Statement">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Date</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" value="C " name="date" id="demoDate" type="text" placeholder="Select Date">
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
                                                                <input type="radio" name="gameType" id="gameType" value="1"><span class="label-text"> FootBall</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="2"><span class="label-text"> Cricket</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="3"><span class="label-text"> Basketball</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="4"><span class="label-text"> Tennis</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="5"><span class="label-text"> Volleyball</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="6"><span class="label-text"> Hockey</span><br>
                                                                <input type="radio" name="gameType" id="gameType" value="7"><span class="label-text"> Badminton</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <input name="addBet" type="submit" class="btn btn-success" value="submit">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- end Modal -->
                            <!-- first label -->

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">

                                    <div class="panel-heading" role="tab" id="headingOne17one">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne17one" aria-expanded="true" aria-controls="collapseOne17one">

                                                                                                    <img src="../img/football.png" width="25px;">&nbsp; A <> B ,Football || C 


                                                    <button class="btn btn-primary  btn-sm" href="" data-toggle="modal" data-target="#action-sub-betting-id17">action </button>


                                                                                                            <form method="post"action="defaultPanelAction.php" style="display: inline">
                                                            <input type="text" name="bettingTitleId"  value="17" hidden>
                                                            <input type="submit" name="bettingTitleAriaShow" class="btn btn-danger  btn-sm"  value="aria show">
                                                        </form>
                                                        

                                                    


                                            </a>

                                        </h4>
                                    </div>
                                                                    </div>
                            </div>
                            
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
</html><script src="js/plugins/pace.min.js"></script>
<script src="js/plugins/pace.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>

<script>
                                                                                            $(document).ready(function () {
                                                                                                var max_fields = 10;
                                                                                                var add_input_button = $('.add_input_button');
                                                                                                var field_wrapper = $('.field_wrapper');
                                                                                                var new_field_html = '<div class="form-group row"> <div class="col-md-6"><input class="form-control" name="input_field[]"  placeholder="Enter Ans"> <a href="javascript:void(0);" class="remove_input_button" title="Remove field"> <i style="background: red;color: white;padding: 9px;border-radius: 43%;margin-top: 6px;" class="fa fa-minus" ></i></a></div><div class="col-md-4"><input class="form-control" name="betRate[]"  placeholder="Bet Rate"></div></div>';
                                                                                                var input_count = 1;
// Add button dynamically
                                                                                                $(add_input_button).click(function () {
                                                                                                    if (input_count < max_fields) {
                                                                                                        input_count++;
                                                                                                        $(field_wrapper).append(new_field_html);
                                                                                                    }
                                                                                                });
// Remove dynamically added button
                                                                                                $(field_wrapper).on('click', '.remove_input_button', function (e) {
                                                                                                    e.preventDefault();
                                                                                                    $(this).parent('div').remove();
                                                                                                    input_count--;
                                                                                                });
                                                                                                //
                                                                                                var max_fields_sub = 10;
                                                                                                var add_input_button_sub = $('.add_input_button-sub');
                                                                                                var field_wrapper_sub = $('.field_wrapper-sub');
                                                                                                var new_field_html_sub = '<div class="form-group row"> <div class="col-md-6"><input class="form-control" name="input_field[]"  placeholder="Enter Bet Statement"> <a href="javascript:void(0);" class="remove_input_button-sub" title="Remove field"> <i style="background: red;color: white;padding: 9px;border-radius: 43%;margin-top: 6px;" class="fa fa-minus" ></i></a></div></div>';
                                                                                                var input_count_sub = 1;
// Add button dynamically
                                                                                                $(add_input_button_sub).click(function () {
                                                                                                    if (input_count_sub < max_fields_sub) {
                                                                                                        input_count_sub++;
                                                                                                        $(field_wrapper_sub).append(new_field_html_sub);
                                                                                                    }
                                                                                                });
// Remove dynamically added button
                                                                                                $(field_wrapper_sub).on('click', '.remove_input_button-sub', function (e) {
                                                                                                    e.preventDefault();
                                                                                                    $(this).parent('div').remove();
                                                                                                    input_count_sub--;
                                                                                                });
                                                                                            });


                                                                                            $('.editRate').on('shown.bs.modal', function () {
                                                                                                $(this).find('.rate').focus();
                                                                                            });

                                                                                            $(document).on('click', '.gameTypec', function () {

                                                                                                $('.hiddenOp').toggle();


                                                                                            });
</script>


</body>

</html>