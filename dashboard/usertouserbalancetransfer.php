
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
        <header class="app-header"><a class="app-header__logo" href="index2.php">Admin 2</a>
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
                        <li><a href="adminTransactionHistory.php" class="dropdown-item"><i class="fa fa-money fa-lg"></i>( 24773820.75 )</a></li>
                        <li><a class="dropdown-item" href="setting.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="adminProfile.php"><i class="fa fa-cog fa-lg"></i> Change profile</a></li>
                        <li><a class="dropdown-item" href="adminProfile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                        <li><a class="dropdown-item" href=""><i class="fa fa-user fa-lg"></i> Clear history</a></li>
                        <li><a class="dropdown-item" href="?logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </header>


<main class="app-content">
	<div class="app-title">
	  <div>
		<i class="fa fa-users"></i> User To User Balance Transfer History
	  </div>
	</div>
	<div class="row">
        <div class="col-md-12">
        	<div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                    	<table class="table table-hover table-bordered" id="balHistory">
                    		<thead>
                          <tr>
                            <th>No</th>
                            <th>From User</th>
                            <th>To User</th>
                            <th>Notes</th>
                            <th>Amount</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <td>1</td>
                                <td>Jibon 10</td>
                                <td>Return </td>
                                <td>Double deposit send</td>
                                <td>200</td>
                                <td>24 Jul 2023 8:50 PM</td>
                              </tr>
                                                        <tr>
                                <td>2</td>
                                <td>Khan22</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>100</td>
                                <td>24 Jul 2023 4:32 PM</td>
                              </tr>
                                                        <tr>
                                <td>3</td>
                                <td>sagor248</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>2300</td>
                                <td>24 Jul 2023 4:32 PM</td>
                              </tr>
                                                        <tr>
                                <td>4</td>
                                <td>Rk34</td>
                                <td>Return </td>
                                <td>Tk petam sokal er deposit necilo 2k</td>
                                <td>2000</td>
                                <td>22 Jul 2023 11:40 PM</td>
                              </tr>
                                                        <tr>
                                <td>5</td>
                                <td>Fizar</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>1500</td>
                                <td>22 Jul 2023 4:29 PM</td>
                              </tr>
                                                        <tr>
                                <td>6</td>
                                <td>Return </td>
                                <td>sakib444</td>
                                <td>Ok</td>
                                <td>1900</td>
                                <td>20 Jul 2023 10:03 PM</td>
                              </tr>
                                                        <tr>
                                <td>7</td>
                                <td>Return </td>
                                <td>Mintu150</td>
                                <td>Ok</td>
                                <td>159</td>
                                <td>20 Jul 2023 2:49 PM</td>
                              </tr>
                                                        <tr>
                                <td>8</td>
                                <td>Fizar</td>
                                <td>Return </td>
                                <td>Withdraw request 10100 but bkash send 10200</td>
                                <td>100</td>
                                <td>20 Jul 2023 7:45 AM</td>
                              </tr>
                                                        <tr>
                                <td>9</td>
                                <td>Atik89</td>
                                <td>Bk10</td>
                                <td>Coin transfer request from Atik club holder</td>
                                <td>1000</td>
                                <td>19 Jul 2023 10:48 AM</td>
                              </tr>
                                                        <tr>
                                <td>10</td>
                                <td>Jabed08</td>
                                <td>Return </td>
                                <td>Extra deposit 30 tk</td>
                                <td>30</td>
                                <td>16 Jul 2023 6:53 PM</td>
                              </tr>
                                                        <tr>
                                <td>11</td>
                                <td>Return </td>
                                <td>arif51</td>
                                <td>Balance kom</td>
                                <td>151</td>
                                <td>16 Jul 2023 5:40 PM</td>
                              </tr>
                                                        <tr>
                                <td>12</td>
                                <td>Atik89</td>
                                <td>Mofiz</td>
                                <td>Deposit admin </td>
                                <td>300</td>
                                <td>16 Jul 2023 3:38 PM</td>
                              </tr>
                                                        <tr>
                                <td>13</td>
                                <td>Mofiz</td>
                                <td>Atik89</td>
                                <td>Deposit admin </td>
                                <td>300</td>
                                <td>16 Jul 2023 3:26 PM</td>
                              </tr>
                                                        <tr>
                                <td>14</td>
                                <td>Family</td>
                                <td>Return </td>
                                <td>duble withdraw </td>
                                <td>4000</td>
                                <td>15 Jul 2023 11:49 PM</td>
                              </tr>
                                                        <tr>
                                <td>15</td>
                                <td>Return </td>
                                <td>Shojib00</td>
                                <td>Club withdraw </td>
                                <td>2700</td>
                                <td>15 Jul 2023 7:34 PM</td>
                              </tr>
                                                        <tr>
                                <td>16</td>
                                <td>Zahid77</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>100</td>
                                <td>15 Jul 2023 5:05 PM</td>
                              </tr>
                                                        <tr>
                                <td>17</td>
                                <td>AF10</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>1000</td>
                                <td>15 Jul 2023 4:49 PM</td>
                              </tr>
                                                        <tr>
                                <td>18</td>
                                <td>Xxx</td>
                                <td>Sane10</td>
                                <td>Ok</td>
                                <td>9401</td>
                                <td>15 Jul 2023 2:48 PM</td>
                              </tr>
                                                        <tr>
                                <td>19</td>
                                <td>67899</td>
                                <td>Return </td>
                                <td>O</td>
                                <td>10244</td>
                                <td>15 Jul 2023 2:04 PM</td>
                              </tr>
                                                        <tr>
                                <td>20</td>
                                <td>com</td>
                                <td>return</td>
                                <td>jh</td>
                                <td>12991</td>
                                <td>14 Jul 2023 2:58 PM</td>
                              </tr>
                                                        <tr>
                                <td>21</td>
                                <td>New100</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>1110</td>
                                <td>13 Jul 2023 8:50 AM</td>
                              </tr>
                                                        <tr>
                                <td>22</td>
                                <td>Mone1</td>
                                <td>Return </td>
                                <td>Doubble withdrawal same amount </td>
                                <td>680</td>
                                <td>13 Jul 2023 7:37 AM</td>
                              </tr>
                                                        <tr>
                                <td>23</td>
                                <td>Sk778</td>
                                <td>Return </td>
                                <td>Withdrawal limit nai...than bkash a dawa houca 4700</td>
                                <td>4700</td>
                                <td>12 Jul 2023 8:40 PM</td>
                              </tr>
                                                        <tr>
                                <td>24</td>
                                <td>Riaz091</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>200</td>
                                <td>12 Jul 2023 7:45 PM</td>
                              </tr>
                                                        <tr>
                                <td>25</td>
                                <td>Return </td>
                                <td>Arf</td>
                                <td>Ok</td>
                                <td>500</td>
                                <td>11 Jul 2023 8:46 PM</td>
                              </tr>
                                                        <tr>
                                <td>26</td>
                                <td>Shakib505</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>195</td>
                                <td>09 Jul 2023 3:50 PM</td>
                              </tr>
                                                        <tr>
                                <td>27</td>
                                <td>A76</td>
                                <td>Return </td>
                                <td>Extra dubble deposit send 1400</td>
                                <td>1400</td>
                                <td>07 Jul 2023 8:53 PM</td>
                              </tr>
                                                        <tr>
                                <td>28</td>
                                <td>Return </td>
                                <td>Good</td>
                                <td>Ok</td>
                                <td>66</td>
                                <td>07 Jul 2023 4:26 PM</td>
                              </tr>
                                                        <tr>
                                <td>29</td>
                                <td>Return </td>
                                <td>Aryan1</td>
                                <td>Ok</td>
                                <td>1000</td>
                                <td>07 Jul 2023 2:30 PM</td>
                              </tr>
                                                        <tr>
                                <td>30</td>
                                <td>Taxtail</td>
                                <td>Taxtail98</td>
                                <td>Ok</td>
                                <td>22236</td>
                                <td>07 Jul 2023 12:00 PM</td>
                              </tr>
                                                        <tr>
                                <td>31</td>
                                <td>Bd67</td>
                                <td>Sohel100</td>
                                <td>Ok</td>
                                <td>100</td>
                                <td>06 Jul 2023 10:54 PM</td>
                              </tr>
                                                        <tr>
                                <td>32</td>
                                <td>Rihm71</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>300</td>
                                <td>05 Jul 2023 5:31 PM</td>
                              </tr>
                                                        <tr>
                                <td>33</td>
                                <td>Smart92</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>350</td>
                                <td>04 Jul 2023 2:56 PM</td>
                              </tr>
                                                        <tr>
                                <td>34</td>
                                <td>samira66</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>500</td>
                                <td>03 Jul 2023 10:06 PM</td>
                              </tr>
                                                        <tr>
                                <td>35</td>
                                <td>Return </td>
                                <td>we123</td>
                                <td>Ok</td>
                                <td>274</td>
                                <td>02 Jul 2023 8:59 PM</td>
                              </tr>
                                                        <tr>
                                <td>36</td>
                                <td>Return </td>
                                <td>bdtax550</td>
                                <td>Ok</td>
                                <td>415</td>
                                <td>02 Jul 2023 8:46 PM</td>
                              </tr>
                                                        <tr>
                                <td>37</td>
                                <td>Asif2401</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>500</td>
                                <td>02 Jul 2023 8:43 PM</td>
                              </tr>
                                                        <tr>
                                <td>38</td>
                                <td>Lost888</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>450</td>
                                <td>01 Jul 2023 4:22 PM</td>
                              </tr>
                                                        <tr>
                                <td>39</td>
                                <td>Return </td>
                                <td>Asif2401</td>
                                <td>Ok</td>
                                <td>500</td>
                                <td>29 Jun 2023 8:12 PM</td>
                              </tr>
                                                        <tr>
                                <td>40</td>
                                <td>RT806</td>
                                <td>Return </td>
                                <td>Extra bkash send 1000 withdraw 1000</td>
                                <td>1000</td>
                                <td>29 Jun 2023 6:51 AM</td>
                              </tr>
                                                        <tr>
                                <td>41</td>
                                <td>Mithun33</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>2000</td>
                                <td>28 Jun 2023 7:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>42</td>
                                <td>Haider005</td>
                                <td>3Onik</td>
                                <td>Ok</td>
                                <td>440</td>
                                <td>28 Jun 2023 7:15 PM</td>
                              </tr>
                                                        <tr>
                                <td>43</td>
                                <td>Lucky2233</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>1050</td>
                                <td>26 Jun 2023 9:22 PM</td>
                              </tr>
                                                        <tr>
                                <td>44</td>
                                <td>Rhydoy</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>400</td>
                                <td>26 Jun 2023 8:29 PM</td>
                              </tr>
                                                        <tr>
                                <td>45</td>
                                <td>nur0000</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>100</td>
                                <td>26 Jun 2023 8:11 PM</td>
                              </tr>
                                                        <tr>
                                <td>46</td>
                                <td>Return </td>
                                <td>Ra5</td>
                                <td>Ok</td>
                                <td>15000</td>
                                <td>26 Jun 2023 5:11 PM</td>
                              </tr>
                                                        <tr>
                                <td>47</td>
                                <td>Return </td>
                                <td>Ra7</td>
                                <td>Ok</td>
                                <td>15000</td>
                                <td>26 Jun 2023 5:07 PM</td>
                              </tr>
                                                        <tr>
                                <td>48</td>
                                <td>Return </td>
                                <td>Ra6</td>
                                <td>Ok</td>
                                <td>15000</td>
                                <td>26 Jun 2023 5:07 PM</td>
                              </tr>
                                                        <tr>
                                <td>49</td>
                                <td>Return </td>
                                <td>Ra5</td>
                                <td>Ok</td>
                                <td>15000</td>
                                <td>26 Jun 2023 5:07 PM</td>
                              </tr>
                                                        <tr>
                                <td>50</td>
                                <td>Azad123</td>
                                <td>Return </td>
                                <td>23-6-23 extra bkash send 1000 and withdraw 2200</td>
                                <td>1000</td>
                                <td>25 Jun 2023 11:14 AM</td>
                              </tr>
                                                        <tr>
                                <td>51</td>
                                <td>Omor005</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>580</td>
                                <td>24 Jun 2023 6:52 PM</td>
                              </tr>
                                                        <tr>
                                <td>52</td>
                                <td>manik120</td>
                                <td>Return </td>
                                <td>Extra deposit send 100 bkash received 1700</td>
                                <td>100</td>
                                <td>23 Jun 2023 9:13 PM</td>
                              </tr>
                                                        <tr>
                                <td>53</td>
                                <td>Shakib505</td>
                                <td>Return </td>
                                <td>Extra deposit send 100 and bkash received 178</td>
                                <td>100</td>
                                <td>23 Jun 2023 9:11 PM</td>
                              </tr>
                                                        <tr>
                                <td>54</td>
                                <td>7win</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>11000</td>
                                <td>23 Jun 2023 3:08 PM</td>
                              </tr>
                                                        <tr>
                                <td>55</td>
                                <td>5win</td>
                                <td>Return </td>
                                <td>A</td>
                                <td>18316</td>
                                <td>23 Jun 2023 8:24 AM</td>
                              </tr>
                                                        <tr>
                                <td>56</td>
                                <td>Sohag Ali</td>
                                <td>Return </td>
                                <td>Extra deposit send 100 bkash received 200</td>
                                <td>100</td>
                                <td>21 Jun 2023 12:05 PM</td>
                              </tr>
                                                        <tr>
                                <td>57</td>
                                <td>Rased79</td>
                                <td>Return </td>
                                <td>Deposit extra </td>
                                <td>5000</td>
                                <td>20 Jun 2023 9:00 PM</td>
                              </tr>
                                                        <tr>
                                <td>58</td>
                                <td>Return</td>
                                <td>Robi 12</td>
                                <td>Ok</td>
                                <td>100</td>
                                <td>20 Jun 2023 7:48 PM</td>
                              </tr>
                                                        <tr>
                                <td>59</td>
                                <td>Robi 12</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>100</td>
                                <td>20 Jun 2023 7:48 PM</td>
                              </tr>
                                                        <tr>
                                <td>60</td>
                                <td>Robi 12</td>
                                <td>Return </td>
                                <td>Extra deposit 100 and bkash received 400</td>
                                <td>100</td>
                                <td>20 Jun 2023 7:48 PM</td>
                              </tr>
                                                        <tr>
                                <td>61</td>
                                <td>Return</td>
                                <td>Ok123</td>
                                <td>Ok</td>
                                <td>900</td>
                                <td>18 Jun 2023 11:31 AM</td>
                              </tr>
                                                        <tr>
                                <td>62</td>
                                <td>Masud79</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>501</td>
                                <td>17 Jun 2023 9:59 PM</td>
                              </tr>
                                                        <tr>
                                <td>63</td>
                                <td>angel</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>1424</td>
                                <td>17 Jun 2023 8:57 PM</td>
                              </tr>
                                                        <tr>
                                <td>64</td>
                                <td>Return</td>
                                <td>Oppo30</td>
                                <td>Ok</td>
                                <td>5398</td>
                                <td>15 Jun 2023 10:20 PM</td>
                              </tr>
                                                        <tr>
                                <td>65</td>
                                <td>mal13</td>
                                <td>Return </td>
                                <td>Oppo30 ai id ta 5398- tar jonno return </td>
                                <td>5398</td>
                                <td>15 Jun 2023 9:52 PM</td>
                              </tr>
                                                        <tr>
                                <td>66</td>
                                <td>Return</td>
                                <td>Asif12</td>
                                <td>Bet problem </td>
                                <td>1800</td>
                                <td>14 Jun 2023 9:31 PM</td>
                              </tr>
                                                        <tr>
                                <td>67</td>
                                <td>Milon 121</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>480</td>
                                <td>14 Jun 2023 3:26 PM</td>
                              </tr>
                                                        <tr>
                                <td>68</td>
                                <td>Return</td>
                                <td>Ok123</td>
                                <td>Bet prob</td>
                                <td>1544</td>
                                <td>14 Jun 2023 10:01 AM</td>
                              </tr>
                                                        <tr>
                                <td>69</td>
                                <td>Champion</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>1000</td>
                                <td>13 Jun 2023 9:03 AM</td>
                              </tr>
                                                        <tr>
                                <td>70</td>
                                <td>Return </td>
                                <td>Siddik77</td>
                                <td>Bet problem </td>
                                <td>49</td>
                                <td>13 Jun 2023 12:53 AM</td>
                              </tr>
                                                        <tr>
                                <td>71</td>
                                <td>sonet110</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>105</td>
                                <td>12 Jun 2023 2:59 PM</td>
                              </tr>
                                                        <tr>
                                <td>72</td>
                                <td>7win</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>39000</td>
                                <td>11 Jun 2023 9:23 PM</td>
                              </tr>
                                                        <tr>
                                <td>73</td>
                                <td>Mon55</td>
                                <td>Return </td>
                                <td>Bet problem </td>
                                <td>385</td>
                                <td>11 Jun 2023 7:14 PM</td>
                              </tr>
                                                        <tr>
                                <td>74</td>
                                <td>Return</td>
                                <td>Mithun33</td>
                                <td>Bet problem </td>
                                <td>360</td>
                                <td>10 Jun 2023 10:23 PM</td>
                              </tr>
                                                        <tr>
                                <td>75</td>
                                <td>Return </td>
                                <td>Mindgamer</td>
                                <td>Bet problem </td>
                                <td>216</td>
                                <td>10 Jun 2023 8:23 PM</td>
                              </tr>
                                                        <tr>
                                <td>76</td>
                                <td>Return</td>
                                <td>Mindgamer</td>
                                <td>Bet problem </td>
                                <td>108</td>
                                <td>10 Jun 2023 8:21 PM</td>
                              </tr>
                                                        <tr>
                                <td>77</td>
                                <td>Return</td>
                                <td>Lalchan56</td>
                                <td>Bet problem </td>
                                <td>360</td>
                                <td>10 Jun 2023 8:13 PM</td>
                              </tr>
                                                        <tr>
                                <td>78</td>
                                <td>Return </td>
                                <td>Abc223</td>
                                <td>Bet problem </td>
                                <td>90</td>
                                <td>10 Jun 2023 7:19 PM</td>
                              </tr>
                                                        <tr>
                                <td>79</td>
                                <td>Return </td>
                                <td>Ss007</td>
                                <td>Bet problem </td>
                                <td>900</td>
                                <td>10 Jun 2023 7:05 PM</td>
                              </tr>
                                                        <tr>
                                <td>80</td>
                                <td>Ripon40</td>
                                <td>Ripon39 </td>
                                <td>Not out club </td>
                                <td>600</td>
                                <td>10 Jun 2023 3:41 PM</td>
                              </tr>
                                                        <tr>
                                <td>81</td>
                                <td>Khairul0000</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>500</td>
                                <td>10 Jun 2023 1:04 PM</td>
                              </tr>
                                                        <tr>
                                <td>82</td>
                                <td>Sakib16</td>
                                <td>Sakibtest </td>
                                <td>All Sports Club</td>
                                <td>10000</td>
                                <td>08 Jun 2023 3:19 PM</td>
                              </tr>
                                                        <tr>
                                <td>83</td>
                                <td>Ritax50</td>
                                <td>Return </td>
                                <td>Vula withdraw cancel </td>
                                <td>990</td>
                                <td>07 Jun 2023 9:33 PM</td>
                              </tr>
                                                        <tr>
                                <td>84</td>
                                <td>Darkness</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>10300</td>
                                <td>07 Jun 2023 5:27 PM</td>
                              </tr>
                                                        <tr>
                                <td>85</td>
                                <td>67899</td>
                                <td>Mhasanbdfp</td>
                                <td>Club withdraw </td>
                                <td>1000</td>
                                <td>07 Jun 2023 12:24 PM</td>
                              </tr>
                                                        <tr>
                                <td>86</td>
                                <td>Zz2</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>700</td>
                                <td>05 Jun 2023 1:45 PM</td>
                              </tr>
                                                        <tr>
                                <td>87</td>
                                <td>Bagerhat</td>
                                <td>1tuser</td>
                                <td>Ok</td>
                                <td>800</td>
                                <td>04 Jun 2023 10:58 PM</td>
                              </tr>
                                                        <tr>
                                <td>88</td>
                                <td>Return </td>
                                <td>Ra7</td>
                                <td>Ok</td>
                                <td>10001</td>
                                <td>03 Jun 2023 2:20 PM</td>
                              </tr>
                                                        <tr>
                                <td>89</td>
                                <td>Return </td>
                                <td>Ra6</td>
                                <td>Ok</td>
                                <td>30010</td>
                                <td>03 Jun 2023 2:12 PM</td>
                              </tr>
                                                        <tr>
                                <td>90</td>
                                <td>Return </td>
                                <td>Ra5</td>
                                <td>Ok</td>
                                <td>30000</td>
                                <td>03 Jun 2023 2:05 PM</td>
                              </tr>
                                                        <tr>
                                <td>91</td>
                                <td>Ibrahim95</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>14000</td>
                                <td>02 Jun 2023 6:35 PM</td>
                              </tr>
                                                        <tr>
                                <td>92</td>
                                <td>Return</td>
                                <td>Mdd</td>
                                <td>Ok</td>
                                <td>180</td>
                                <td>01 Jun 2023 7:53 PM</td>
                              </tr>
                                                        <tr>
                                <td>93</td>
                                <td>Nirob75</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>70</td>
                                <td>30 May 2023 7:26 PM</td>
                              </tr>
                                                        <tr>
                                <td>94</td>
                                <td>Delowur013</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>150</td>
                                <td>30 May 2023 5:35 PM</td>
                              </tr>
                                                        <tr>
                                <td>95</td>
                                <td>Return</td>
                                <td>Sss</td>
                                <td>Ok</td>
                                <td>188</td>
                                <td>30 May 2023 12:51 AM</td>
                              </tr>
                                                        <tr>
                                <td>96</td>
                                <td>Yeasirsy</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>120</td>
                                <td>29 May 2023 8:38 PM</td>
                              </tr>
                                                        <tr>
                                <td>97</td>
                                <td>Khadiza</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>114</td>
                                <td>28 May 2023 11:02 PM</td>
                              </tr>
                                                        <tr>
                                <td>98</td>
                                <td>Umur55</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>21252</td>
                                <td>28 May 2023 10:17 PM</td>
                              </tr>
                                                        <tr>
                                <td>99</td>
                                <td>Return</td>
                                <td>Nasir33</td>
                                <td>Ok</td>
                                <td>156</td>
                                <td>28 May 2023 5:34 PM</td>
                              </tr>
                                                        <tr>
                                <td>100</td>
                                <td>sifat99</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>90</td>
                                <td>28 May 2023 4:35 PM</td>
                              </tr>
                                                        <tr>
                                <td>101</td>
                                <td>B111</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>400</td>
                                <td>24 May 2023 8:17 PM</td>
                              </tr>
                                                        <tr>
                                <td>102</td>
                                <td>Return</td>
                                <td>Odvut</td>
                                <td>Bet problem </td>
                                <td>100</td>
                                <td>24 May 2023 6:07 PM</td>
                              </tr>
                                                        <tr>
                                <td>103</td>
                                <td>Alome 1000</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>100</td>
                                <td>24 May 2023 2:18 PM</td>
                              </tr>
                                                        <tr>
                                <td>104</td>
                                <td>Return</td>
                                <td>Aktar27</td>
                                <td>Deposit Problem </td>
                                <td>1000</td>
                                <td>22 May 2023 2:11 PM</td>
                              </tr>
                                                        <tr>
                                <td>105</td>
                                <td>Raad</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>900</td>
                                <td>21 May 2023 7:47 PM</td>
                              </tr>
                                                        <tr>
                                <td>106</td>
                                <td>Rubel11</td>
                                <td>Rubel113</td>
                                <td>Ok</td>
                                <td>423</td>
                                <td>21 May 2023 4:47 PM</td>
                              </tr>
                                                        <tr>
                                <td>107</td>
                                <td>Mou999</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>330</td>
                                <td>21 May 2023 4:41 PM</td>
                              </tr>
                                                        <tr>
                                <td>108</td>
                                <td>Mou999</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>750</td>
                                <td>21 May 2023 4:33 PM</td>
                              </tr>
                                                        <tr>
                                <td>109</td>
                                <td>67899</td>
                                <td>SS007</td>
                                <td>Ok</td>
                                <td>500</td>
                                <td>21 May 2023 3:53 PM</td>
                              </tr>
                                                        <tr>
                                <td>110</td>
                                <td>Khoka</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>200</td>
                                <td>20 May 2023 10:13 PM</td>
                              </tr>
                                                        <tr>
                                <td>111</td>
                                <td>Najmul78</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>60</td>
                                <td>20 May 2023 6:27 PM</td>
                              </tr>
                                                        <tr>
                                <td>112</td>
                                <td>Welcome </td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>2400</td>
                                <td>20 May 2023 11:40 AM</td>
                              </tr>
                                                        <tr>
                                <td>113</td>
                                <td>Luck11</td>
                                <td>Return </td>
                                <td>Extra Deposit </td>
                                <td>50</td>
                                <td>20 May 2023 10:49 AM</td>
                              </tr>
                                                        <tr>
                                <td>114</td>
                                <td>Return</td>
                                <td>new100</td>
                                <td>Club Withdraw </td>
                                <td>1100</td>
                                <td>20 May 2023 10:31 AM</td>
                              </tr>
                                                        <tr>
                                <td>115</td>
                                <td>Samiul1213</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>3010</td>
                                <td>19 May 2023 10:17 PM</td>
                              </tr>
                                                        <tr>
                                <td>116</td>
                                <td>Return</td>
                                <td>Sajib007</td>
                                <td>Ok</td>
                                <td>46</td>
                                <td>19 May 2023 5:33 PM</td>
                              </tr>
                                                        <tr>
                                <td>117</td>
                                <td>Return</td>
                                <td>Bahar013</td>
                                <td>5700</td>
                                <td>5700</td>
                                <td>19 May 2023 2:49 PM</td>
                              </tr>
                                                        <tr>
                                <td>118</td>
                                <td>Return</td>
                                <td>Bahar013</td>
                                <td>Extra </td>
                                <td>5000</td>
                                <td>19 May 2023 2:36 PM</td>
                              </tr>
                                                        <tr>
                                <td>119</td>
                                <td>Bahar013</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>2500</td>
                                <td>19 May 2023 2:35 PM</td>
                              </tr>
                                                        <tr>
                                <td>120</td>
                                <td>Shohidul Islam</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>20</td>
                                <td>18 May 2023 6:01 PM</td>
                              </tr>
                                                        <tr>
                                <td>121</td>
                                <td>Mamun100</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>100</td>
                                <td>17 May 2023 9:23 PM</td>
                              </tr>
                                                        <tr>
                                <td>122</td>
                                <td>Mou999</td>
                                <td>Return </td>
                                <td>Extra </td>
                                <td>1350</td>
                                <td>17 May 2023 8:27 PM</td>
                              </tr>
                                                        <tr>
                                <td>123</td>
                                <td>Return</td>
                                <td>Raju94</td>
                                <td>Ok</td>
                                <td>1500</td>
                                <td>17 May 2023 6:13 PM</td>
                              </tr>
                                                        <tr>
                                <td>124</td>
                                <td>Raju94</td>
                                <td>Return </td>
                                <td>Dp extra 1500</td>
                                <td>1500</td>
                                <td>17 May 2023 5:57 PM</td>
                              </tr>
                                                        <tr>
                                <td>125</td>
                                <td>Robin1319</td>
                                <td>Return </td>
                                <td>Extra Deposit </td>
                                <td>100</td>
                                <td>15 May 2023 9:05 PM</td>
                              </tr>
                                                        <tr>
                                <td>126</td>
                                <td>Md.Ferdous1234</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>150</td>
                                <td>15 May 2023 6:17 PM</td>
                              </tr>
                                                        <tr>
                                <td>127</td>
                                <td>Shuvon00</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>1000</td>
                                <td>14 May 2023 8:08 PM</td>
                              </tr>
                                                        <tr>
                                <td>128</td>
                                <td>Return</td>
                                <td>Anamul778</td>
                                <td>Extra</td>
                                <td>150</td>
                                <td>14 May 2023 8:05 PM</td>
                              </tr>
                                                        <tr>
                                <td>129</td>
                                <td>Anamul778</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>100</td>
                                <td>14 May 2023 8:05 PM</td>
                              </tr>
                                                        <tr>
                                <td>130</td>
                                <td>Return</td>
                                <td>Anamul778</td>
                                <td>Ok</td>
                                <td>150</td>
                                <td>14 May 2023 8:03 PM</td>
                              </tr>
                                                        <tr>
                                <td>131</td>
                                <td>Return</td>
                                <td>Shuvon00</td>
                                <td>Ok</td>
                                <td>1000</td>
                                <td>14 May 2023 6:47 PM</td>
                              </tr>
                                                        <tr>
                                <td>132</td>
                                <td>N2023</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>500</td>
                                <td>14 May 2023 4:39 PM</td>
                              </tr>
                                                        <tr>
                                <td>133</td>
                                <td>Dalower123</td>
                                <td>Return </td>
                                <td>Vula withdraw cancel </td>
                                <td>1000</td>
                                <td>13 May 2023 9:58 PM</td>
                              </tr>
                                                        <tr>
                                <td>134</td>
                                <td>return</td>
                                <td>Nahid90</td>
                                <td>ok</td>
                                <td>2332</td>
                                <td>13 May 2023 11:29 AM</td>
                              </tr>
                                                        <tr>
                                <td>135</td>
                                <td>return</td>
                                <td>r332211</td>
                                <td>J</td>
                                <td>1000</td>
                                <td>12 May 2023 7:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>136</td>
                                <td>return</td>
                                <td>r332211</td>
                                <td>J</td>
                                <td>1000</td>
                                <td>12 May 2023 7:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>137</td>
                                <td>Aman365</td>
                                <td>Return</td>
                                <td>Exta club withdraw </td>
                                <td>2100</td>
                                <td>11 May 2023 9:20 AM</td>
                              </tr>
                                                        <tr>
                                <td>138</td>
                                <td>return </td>
                                <td>Mamun117</td>
                                <td>back coin</td>
                                <td>6080</td>
                                <td>07 May 2023 6:37 PM</td>
                              </tr>
                                                        <tr>
                                <td>139</td>
                                <td>Return</td>
                                <td>Dipa75</td>
                                <td>S</td>
                                <td>113</td>
                                <td>07 May 2023 6:21 PM</td>
                              </tr>
                                                        <tr>
                                <td>140</td>
                                <td>Murad22</td>
                                <td>Return</td>
                                <td>Fall send</td>
                                <td>44366</td>
                                <td>07 May 2023 5:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>141</td>
                                <td>Betmaster</td>
                                <td>return</td>
                                <td>Fall send </td>
                                <td>22046</td>
                                <td>07 May 2023 5:39 PM</td>
                              </tr>
                                                        <tr>
                                <td>142</td>
                                <td>Nabila23</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>180</td>
                                <td>07 May 2023 12:06 PM</td>
                              </tr>
                                                        <tr>
                                <td>143</td>
                                <td>Return</td>
                                <td>Nabila23</td>
                                <td>Ok</td>
                                <td>180</td>
                                <td>07 May 2023 12:04 PM</td>
                              </tr>
                                                        <tr>
                                <td>144</td>
                                <td>Return</td>
                                <td>Nabila23</td>
                                <td>Ok</td>
                                <td>180</td>
                                <td>07 May 2023 12:04 PM</td>
                              </tr>
                                                        <tr>
                                <td>145</td>
                                <td>Ajgor</td>
                                <td>Return</td>
                                <td>Ok</td>
                                <td>5200</td>
                                <td>07 May 2023 2:11 AM</td>
                              </tr>
                                                        <tr>
                                <td>146</td>
                                <td>Nishan2</td>
                                <td>Return</td>
                                <td>Ok</td>
                                <td>5701</td>
                                <td>07 May 2023 2:06 AM</td>
                              </tr>
                                                        <tr>
                                <td>147</td>
                                <td>Mamun117</td>
                                <td>Return </td>
                                <td>Ok</td>
                                <td>6080</td>
                                <td>07 May 2023 2:05 AM</td>
                              </tr>
                                                        <tr>
                                <td>148</td>
                                <td>Mafuz</td>
                                <td>Return</td>
                                <td>Good aro ektu kom kore nio </td>
                                <td>6601</td>
                                <td>07 May 2023 2:04 AM</td>
                              </tr>
                                                        <tr>
                                <td>149</td>
                                <td>Sumon418696</td>
                                <td>return </td>
                                <td>b</td>
                                <td>500</td>
                                <td>05 May 2023 8:32 PM</td>
                              </tr>
                                                        <tr>
                                <td>150</td>
                                <td>BBC 420</td>
                                <td>MD Rased </td>
                                <td>Help 5</td>
                                <td>1000</td>
                                <td>04 May 2023 7:01 PM</td>
                              </tr>
                                                        <tr>
                                <td>151</td>
                                <td>Allis</td>
                                <td>Return </td>
                                <td>Dubble same withdrawal 500</td>
                                <td>500</td>
                                <td>02 May 2023 9:19 PM</td>
                              </tr>
                                                        <tr>
                                <td>152</td>
                                <td>green1</td>
                                <td>keya19</td>
                                <td>greentable </td>
                                <td>20000</td>
                                <td>01 May 2023 8:18 PM</td>
                              </tr>
                                                        <tr>
                                <td>153</td>
                                <td>Hiw2</td>
                                <td>Hiw1</td>
                                <td>Ok</td>
                                <td>4000</td>
                                <td>30 Apr 2023 3:55 PM</td>
                              </tr>
                                                        <tr>
                                <td>154</td>
                                <td>sifat79</td>
                                <td>Return </td>
                                <td>Extra withdraw send 550 and bkash send 550</td>
                                <td>550</td>
                                <td>30 Apr 2023 2:04 PM</td>
                              </tr>
                                                        <tr>
                                <td>155</td>
                                <td>Sabbir1000</td>
                                <td>Return </td>
                                <td>Withdraw 1000 and bkash send 1090 to return 100</td>
                                <td>100</td>
                                <td>29 Apr 2023 11:03 AM</td>
                              </tr>
                                                        <tr>
                                <td>156</td>
                                <td>Salma123</td>
                                <td>rafsan000</td>
                                <td>Arif62</td>
                                <td>1000</td>
                                <td>28 Apr 2023 6:20 PM</td>
                              </tr>
                                                        <tr>
                                <td>157</td>
                                <td>Return</td>
                                <td>nipa55</td>
                                <td>Calculation vul</td>
                                <td>1000</td>
                                <td>27 Apr 2023 11:53 PM</td>
                              </tr>
                                                        <tr>
                                <td>158</td>
                                <td>Nipa55</td>
                                <td>Return </td>
                                <td>Falt</td>
                                <td>1900</td>
                                <td>27 Apr 2023 11:37 PM</td>
                              </tr>
                                                        <tr>
                                <td>159</td>
                                <td>Return </td>
                                <td>rasel1234</td>
                                <td>Win coin</td>
                                <td>300</td>
                                <td>24 Apr 2023 8:46 PM</td>
                              </tr>
                                                        <tr>
                                <td>160</td>
                                <td>L88</td>
                                <td>Return </td>
                                <td>Extra deposit send 315 and bkash received 315</td>
                                <td>315</td>
                                <td>24 Apr 2023 8:17 PM</td>
                              </tr>
                                                        <tr>
                                <td>161</td>
                                <td>Prem2345</td>
                                <td>Return </td>
                                <td>😪😪😪 </td>
                                <td>4000</td>
                                <td>22 Apr 2023 3:04 PM</td>
                              </tr>
                                                        <tr>
                                <td>162</td>
                                <td>Prem2345</td>
                                <td>Return</td>
                                <td>Ato tk kore nile ki hoy. Tumi jodi ato nei hoy bolo. Dine 500 kore nio. </td>
                                <td>5717</td>
                                <td>22 Apr 2023 3:02 PM</td>
                              </tr>
                                                        <tr>
                                <td>163</td>
                                <td>tusar67</td>
                                <td>Return </td>
                                <td>Extra deposit send 200 and bkash received 300</td>
                                <td>200</td>
                                <td>22 Apr 2023 1:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>164</td>
                                <td>Motalab</td>
                                <td>return </td>
                                <td>extra withdraw </td>
                                <td>1000</td>
                                <td>22 Apr 2023 6:23 AM</td>
                              </tr>
                                                        <tr>
                                <td>165</td>
                                <td>Return </td>
                                <td>Kst</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 7:11 PM</td>
                              </tr>
                                                        <tr>
                                <td>166</td>
                                <td>Return </td>
                                <td>Robi</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 7:11 PM</td>
                              </tr>
                                                        <tr>
                                <td>167</td>
                                <td>Return </td>
                                <td>Himel09</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 7:10 PM</td>
                              </tr>
                                                        <tr>
                                <td>168</td>
                                <td>Return </td>
                                <td>RK34</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 7:10 PM</td>
                              </tr>
                                                        <tr>
                                <td>169</td>
                                <td>Return </td>
                                <td>Asif2401</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 7:09 PM</td>
                              </tr>
                                                        <tr>
                                <td>170</td>
                                <td>Return </td>
                                <td>SADIA1</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 7:08 PM</td>
                              </tr>
                                                        <tr>
                                <td>171</td>
                                <td>Return </td>
                                <td>Icc2022</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 7:07 PM</td>
                              </tr>
                                                        <tr>
                                <td>172</td>
                                <td>Return </td>
                                <td>Family</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 7:06 PM</td>
                              </tr>
                                                        <tr>
                                <td>173</td>
                                <td>Bdtax50</td>
                                <td>Return </td>
                                <td>Personl use, family club.</td>
                                <td>3010</td>
                                <td>21 Apr 2023 5:28 PM</td>
                              </tr>
                                                        <tr>
                                <td>174</td>
                                <td>Return </td>
                                <td>Rx123</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 2:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>175</td>
                                <td>Return </td>
                                <td>Microsoft</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 2:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>176</td>
                                <td>Return </td>
                                <td>sohel88</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 2:24 PM</td>
                              </tr>
                                                        <tr>
                                <td>177</td>
                                <td>Return </td>
                                <td>spvai</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 2:23 PM</td>
                              </tr>
                                                        <tr>
                                <td>178</td>
                                <td>Return </td>
                                <td>Bethero</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 11:34 AM</td>
                              </tr>
                                                        <tr>
                                <td>179</td>
                                <td>Return </td>
                                <td>Win12</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 11:33 AM</td>
                              </tr>
                                                        <tr>
                                <td>180</td>
                                <td>Return</td>
                                <td>Rock10</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 11:13 AM</td>
                              </tr>
                                                        <tr>
                                <td>181</td>
                                <td>Return</td>
                                <td>Shojib00</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 11:11 AM</td>
                              </tr>
                                                        <tr>
                                <td>182</td>
                                <td>Return</td>
                                <td>Boss111</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 11:11 AM</td>
                              </tr>
                                                        <tr>
                                <td>183</td>
                                <td>Return</td>
                                <td>Nusu54</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 11:10 AM</td>
                              </tr>
                                                        <tr>
                                <td>184</td>
                                <td>Return</td>
                                <td>Black13</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 11:10 AM</td>
                              </tr>
                                                        <tr>
                                <td>185</td>
                                <td>Return </td>
                                <td>Hridoy75</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 10:53 AM</td>
                              </tr>
                                                        <tr>
                                <td>186</td>
                                <td>Return </td>
                                <td>new100</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 10:52 AM</td>
                              </tr>
                                                        <tr>
                                <td>187</td>
                                <td>Return </td>
                                <td>Out</td>
                                <td>Bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 10:49 AM</td>
                              </tr>
                                                        <tr>
                                <td>188</td>
                                <td>Return </td>
                                <td>Bdtax50</td>
                                <td>Holka bonus</td>
                                <td>1500</td>
                                <td>21 Apr 2023 10:46 AM</td>
                              </tr>
                                                        <tr>
                                <td>189</td>
                                <td>nirob75</td>
                                <td>Return </td>
                                <td>Bkash received 3000 and extra deposit send 6000</td>
                                <td>3000</td>
                                <td>20 Apr 2023 8:40 PM</td>
                              </tr>
                                                        <tr>
                                <td>190</td>
                                <td>Sumon1444</td>
                                <td>Return </td>
                                <td>Extra bkash paid 100 withdraw request 570</td>
                                <td>100</td>
                                <td>16 Apr 2023 7:16 PM</td>
                              </tr>
                                                        <tr>
                                <td>191</td>
                                <td>Mahbub215105</td>
                                <td>Return </td>
                                <td>Extra bkash paid 860 and withdraw request 5000</td>
                                <td>860</td>
                                <td>16 Apr 2023 1:45 PM</td>
                              </tr>
                                                        <tr>
                                <td>192</td>
                                <td>Masum55</td>
                                <td>Return </td>
                                <td>Extra bkash paid 1000 and withdraw request 3000</td>
                                <td>1000</td>
                                <td>16 Apr 2023 1:43 PM</td>
                              </tr>
                                                        <tr>
                                <td>193</td>
                                <td>Monjurul9391</td>
                                <td>Return </td>
                                <td>Extra withdraw bkash send 1480.</td>
                                <td>200</td>
                                <td>16 Apr 2023 7:42 AM</td>
                              </tr>
                                                        <tr>
                                <td>194</td>
                                <td>Rk34</td>
                                <td>Return</td>
                                <td>Baki coin 6k</td>
                                <td>6000</td>
                                <td>15 Apr 2023 3:41 PM</td>
                              </tr>
                                                        <tr>
                                <td>195</td>
                                <td>Return</td>
                                <td>RK34</td>
                                <td>Mot 6k</td>
                                <td>6000</td>
                                <td>13 Apr 2023 7:18 PM</td>
                              </tr>
                                                        <tr>
                                <td>196</td>
                                <td>Return </td>
                                <td>Miraj98</td>
                                <td>Ok</td>
                                <td>300</td>
                                <td>13 Apr 2023 11:54 AM</td>
                              </tr>
                                                        <tr>
                                <td>197</td>
                                <td>Return </td>
                                <td>Sabbir12345</td>
                                <td>Bet pending </td>
                                <td>90</td>
                                <td>13 Apr 2023 11:52 AM</td>
                              </tr>
                                                        <tr>
                                <td>198</td>
                                <td>Return </td>
                                <td>Miraj98</td>
                                <td>Vul</td>
                                <td>137</td>
                                <td>12 Apr 2023 1:59 AM</td>
                              </tr>
                                                        <tr>
                                <td>199</td>
                                <td>Return</td>
                                <td>Riad 21</td>
                                <td>Vul</td>
                                <td>2040</td>
                                <td>12 Apr 2023 1:28 AM</td>
                              </tr>
                                                        <tr>
                                <td>200</td>
                                <td>Sohel100</td>
                                <td>Return </td>
                                <td>Not received bkash money 100tk</td>
                                <td>100</td>
                                <td>10 Apr 2023 10:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>201</td>
                                <td>Spvai</td>
                                <td>মেহেদি</td>
                                <td>ok</td>
                                <td>3000</td>
                                <td>10 Apr 2023 9:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>202</td>
                                <td>Spvai</td>
                                <td>হাসান</td>
                                <td>ok</td>
                                <td>3000</td>
                                <td>10 Apr 2023 9:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>203</td>
                                <td>Shakib22</td>
                                <td>Rk34</td>
                                <td>Sk75 club holder requst</td>
                                <td>4400</td>
                                <td>10 Apr 2023 5:27 PM</td>
                              </tr>
                                                        <tr>
                                <td>204</td>
                                <td>Mim100</td>
                                <td>Return </td>
                                <td>3000 deposit.Return 27000 not send bkash money 27k</td>
                                <td>27000</td>
                                <td>08 Apr 2023 8:52 PM</td>
                              </tr>
                                                        <tr>
                                <td>205</td>
                                <td>Spvai</td>
                                <td>হাসান</td>
                                <td>Sp club requst</td>
                                <td>7000</td>
                                <td>08 Apr 2023 8:11 PM</td>
                              </tr>
                                                        <tr>
                                <td>206</td>
                                <td>spvai</td>
                                <td>মেহেদি</td>
                                <td>Sp Club requst</td>
                                <td>8000</td>
                                <td>08 Apr 2023 8:10 PM</td>
                              </tr>
                                                        <tr>
                                <td>207</td>
                                <td>shiek</td>
                                <td>Return </td>
                                <td>Extra deposit 500 </td>
                                <td>500</td>
                                <td>08 Apr 2023 3:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>208</td>
                                <td>Return </td>
                                <td>Tarik1122</td>
                                <td>Win but not add</td>
                                <td>475</td>
                                <td>07 Apr 2023 9:40 PM</td>
                              </tr>
                                                        <tr>
                                <td>209</td>
                                <td>faruk14</td>
                                <td>return </td>
                                <td>withdraw tk send but not accept </td>
                                <td>1000</td>
                                <td>07 Apr 2023 2:43 PM</td>
                              </tr>
                                                        <tr>
                                <td>210</td>
                                <td>dumki1</td>
                                <td>Saiful789</td>
                                <td>Ok</td>
                                <td>10003</td>
                                <td>04 Apr 2023 2:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>211</td>
                                <td>Afrin222</td>
                                <td>return </td>
                                <td>exta 10k dep</td>
                                <td>10000</td>
                                <td>02 Apr 2023 8:19 PM</td>
                              </tr>
                                                        <tr>
                                <td>212</td>
                                <td>Rc2023</td>
                                <td>Antora89</td>
                                <td>Ok</td>
                                <td>10000</td>
                                <td>02 Apr 2023 7:53 PM</td>
                              </tr>
                                                        <tr>
                                <td>213</td>
                                <td>Rc2023</td>
                                <td>Am100</td>
                                <td>Ok</td>
                                <td>10000</td>
                                <td>02 Apr 2023 7:52 PM</td>
                              </tr>
                                                        <tr>
                                <td>214</td>
                                <td>Return </td>
                                <td>Kabila11</td>
                                <td>Deposit </td>
                                <td>1010</td>
                                <td>30 Mar 2023 11:20 PM</td>
                              </tr>
                                                        <tr>
                                <td>215</td>
                                <td>Return </td>
                                <td>RTSIYAM</td>
                                <td>Ok</td>
                                <td>420</td>
                                <td>30 Mar 2023 10:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>216</td>
                                <td>Kawsarbk</td>
                                <td>Kawsar33</td>
                                <td>Ok</td>
                                <td>3752</td>
                                <td>30 Mar 2023 1:57 PM</td>
                              </tr>
                                                        <tr>
                                <td>217</td>
                                <td>Return </td>
                                <td>Krisno1</td>
                                <td>Club withdraw </td>
                                <td>1700</td>
                                <td>29 Mar 2023 11:06 PM</td>
                              </tr>
                                                        <tr>
                                <td>218</td>
                                <td>67899</td>
                                <td>Bg77</td>
                                <td>Club withdraw </td>
                                <td>15000</td>
                                <td>29 Mar 2023 10:12 PM</td>
                              </tr>
                                                        <tr>
                                <td>219</td>
                                <td>Return </td>
                                <td>RTSIYAM</td>
                                <td>Ok</td>
                                <td>421</td>
                                <td>29 Mar 2023 2:19 PM</td>
                              </tr>
                                                        <tr>
                                <td>220</td>
                                <td>Return </td>
                                <td>Sayma67890</td>
                                <td>Ok</td>
                                <td>160</td>
                                <td>24 Mar 2023 10:32 PM</td>
                              </tr>
                                                        <tr>
                                <td>221</td>
                                <td>Md2</td>
                                <td>Return</td>
                                <td>Extra withdraw </td>
                                <td>1050</td>
                                <td>14 Mar 2023 9:00 PM</td>
                              </tr>
                                                        <tr>
                                <td>222</td>
                                <td>M D K</td>
                                <td>Return</td>
                                <td>Withdraw extra send 500 by bkash</td>
                                <td>500</td>
                                <td>12 Mar 2023 8:12 PM</td>
                              </tr>
                                                        <tr>
                                <td>223</td>
                                <td>Nuralom098</td>
                                <td>return </td>
                                <td>withdraw send but withdrawal cal.</td>
                                <td>500</td>
                                <td>12 Mar 2023 11:51 AM</td>
                              </tr>
                                                        <tr>
                                <td>224</td>
                                <td>Return</td>
                                <td>Nobin00</td>
                                <td>8th win coin missing </td>
                                <td>1800</td>
                                <td>09 Mar 2023 9:19 PM</td>
                              </tr>
                                                        <tr>
                                <td>225</td>
                                <td>Babu115</td>
                                <td>return </td>
                                <td>withdrawal problem</td>
                                <td>5000</td>
                                <td>09 Mar 2023 1:34 PM</td>
                              </tr>
                                                        <tr>
                                <td>226</td>
                                <td>Green1</td>
                                <td>Keya19</td>
                                <td>Greentable</td>
                                <td>20000</td>
                                <td>07 Mar 2023 7:37 PM</td>
                              </tr>
                                                        <tr>
                                <td>227</td>
                                <td>return </td>
                                <td>Nazmul120</td>
                                <td>won coin not send</td>
                                <td>100</td>
                                <td>03 Mar 2023 6:26 PM</td>
                              </tr>
                                                        <tr>
                                <td>228</td>
                                <td>Return</td>
                                <td>Mastu mia</td>
                                <td>Win coin missing </td>
                                <td>2000</td>
                                <td>24 Feb 2023 8:41 PM</td>
                              </tr>
                                                        <tr>
                                <td>229</td>
                                <td>Return </td>
                                <td>Mamun01532</td>
                                <td>Bet problem total extra run</td>
                                <td>570</td>
                                <td>24 Feb 2023 7:29 PM</td>
                              </tr>
                                                        <tr>
                                <td>230</td>
                                <td>Udoy75</td>
                                <td>Dipa75</td>
                                <td>Andru rassell club</td>
                                <td>672</td>
                                <td>19 Feb 2023 7:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>231</td>
                                <td>Return </td>
                                <td>Robi</td>
                                <td>Hack coin</td>
                                <td>3500</td>
                                <td>19 Feb 2023 6:47 PM</td>
                              </tr>
                                                        <tr>
                                <td>232</td>
                                <td>Return</td>
                                <td>apple533</td>
                                <td>User hack</td>
                                <td>1120</td>
                                <td>18 Feb 2023 2:51 PM</td>
                              </tr>
                                                        <tr>
                                <td>233</td>
                                <td>Family</td>
                                <td>Asif678</td>
                                <td>Amar</td>
                                <td>2000</td>
                                <td>14 Feb 2023 10:52 PM</td>
                              </tr>
                                                        <tr>
                                <td>234</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>200</td>
                                <td>13 Feb 2023 6:46 PM</td>
                              </tr>
                                                        <tr>
                                <td>235</td>
                                <td>Family</td>
                                <td>Luban</td>
                                <td>Bonas </td>
                                <td>1000</td>
                                <td>11 Feb 2023 8:47 AM</td>
                              </tr>
                                                        <tr>
                                <td>236</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>300</td>
                                <td>10 Feb 2023 8:28 PM</td>
                              </tr>
                                                        <tr>
                                <td>237</td>
                                <td>Jua1</td>
                                <td>Asif678</td>
                                <td>Amr</td>
                                <td>300</td>
                                <td>10 Feb 2023 3:03 PM</td>
                              </tr>
                                                        <tr>
                                <td>238</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>300</td>
                                <td>08 Feb 2023 10:39 PM</td>
                              </tr>
                                                        <tr>
                                <td>239</td>
                                <td>Return</td>
                                <td>Raju94</td>
                                <td>Bet3s</td>
                                <td>3839</td>
                                <td>07 Feb 2023 6:55 PM</td>
                              </tr>
                                                        <tr>
                                <td>240</td>
                                <td>Jua1</td>
                                <td>Mono97</td>
                                <td>Dp</td>
                                <td>10500</td>
                                <td>02 Feb 2023 8:04 PM</td>
                              </tr>
                                                        <tr>
                                <td>241</td>
                                <td>Asif678</td>
                                <td>Manik97</td>
                                <td>Bonas</td>
                                <td>100</td>
                                <td>02 Feb 2023 7:13 PM</td>
                              </tr>
                                                        <tr>
                                <td>242</td>
                                <td>Bbss</td>
                                <td>MST10</td>
                                <td>Pass vule gese</td>
                                <td>369</td>
                                <td>02 Feb 2023 3:06 PM</td>
                              </tr>
                                                        <tr>
                                <td>243</td>
                                <td>Return</td>
                                <td>Tanjib77</td>
                                <td>Bet problem</td>
                                <td>426</td>
                                <td>02 Feb 2023 10:30 AM</td>
                              </tr>
                                                        <tr>
                                <td>244</td>
                                <td>Rm100</td>
                                <td>Return </td>
                                <td>Wt poblem </td>
                                <td>2000</td>
                                <td>02 Feb 2023 9:47 AM</td>
                              </tr>
                                                        <tr>
                                <td>245</td>
                                <td>Return</td>
                                <td>Microsoft</td>
                                <td>B</td>
                                <td>5683</td>
                                <td>01 Feb 2023 10:44 PM</td>
                              </tr>
                                                        <tr>
                                <td>246</td>
                                <td>Family</td>
                                <td>Jannat346</td>
                                <td>Bpnas</td>
                                <td>500</td>
                                <td>01 Feb 2023 4:58 PM</td>
                              </tr>
                                                        <tr>
                                <td>247</td>
                                <td>Return</td>
                                <td>Saha100</td>
                                <td>Kom deya hoyse</td>
                                <td>2000</td>
                                <td>31 Jan 2023 9:19 PM</td>
                              </tr>
                                                        <tr>
                                <td>248</td>
                                <td>Family</td>
                                <td>Sajib42</td>
                                <td>D</td>
                                <td>5355</td>
                                <td>31 Jan 2023 7:53 PM</td>
                              </tr>
                                                        <tr>
                                <td>249</td>
                                <td>Family</td>
                                <td>Sajib42</td>
                                <td>D</td>
                                <td>5355</td>
                                <td>31 Jan 2023 5:15 PM</td>
                              </tr>
                                                        <tr>
                                <td>250</td>
                                <td>Family</td>
                                <td>Khokon234</td>
                                <td>Bonas </td>
                                <td>329</td>
                                <td>30 Jan 2023 4:55 PM</td>
                              </tr>
                                                        <tr>
                                <td>251</td>
                                <td>A7</td>
                                <td>Return</td>
                                <td>D ac</td>
                                <td>2810</td>
                                <td>30 Jan 2023 4:03 PM</td>
                              </tr>
                                                        <tr>
                                <td>252</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>100</td>
                                <td>30 Jan 2023 2:55 PM</td>
                              </tr>
                                                        <tr>
                                <td>253</td>
                                <td>Tamim75</td>
                                <td>Tuhin75</td>
                                <td>Tamim75 korte se</td>
                                <td>3500</td>
                                <td>30 Jan 2023 1:20 PM</td>
                              </tr>
                                                        <tr>
                                <td>254</td>
                                <td>Return</td>
                                <td>Tarif</td>
                                <td>Bet problem</td>
                                <td>400</td>
                                <td>30 Jan 2023 10:49 AM</td>
                              </tr>
                                                        <tr>
                                <td>255</td>
                                <td>Return</td>
                                <td>Ripon32</td>
                                <td>Bet problem </td>
                                <td>210</td>
                                <td>27 Jan 2023 2:54 PM</td>
                              </tr>
                                                        <tr>
                                <td>256</td>
                                <td>Tb Rock</td>
                                <td>Return</td>
                                <td>Besi disilam</td>
                                <td>340</td>
                                <td>26 Jan 2023 9:57 AM</td>
                              </tr>
                                                        <tr>
                                <td>257</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>126</td>
                                <td>24 Jan 2023 8:44 PM</td>
                              </tr>
                                                        <tr>
                                <td>258</td>
                                <td>Spon1</td>
                                <td>Lp</td>
                                <td>S a kaj kore</td>
                                <td>126</td>
                                <td>24 Jan 2023 8:44 PM</td>
                              </tr>
                                                        <tr>
                                <td>259</td>
                                <td>Asif678</td>
                                <td>Sompa222</td>
                                <td>Bonas</td>
                                <td>300</td>
                                <td>24 Jan 2023 6:34 PM</td>
                              </tr>
                                                        <tr>
                                <td>260</td>
                                <td>Asif678</td>
                                <td>Arif51</td>
                                <td>Bonas</td>
                                <td>300</td>
                                <td>24 Jan 2023 6:34 PM</td>
                              </tr>
                                                        <tr>
                                <td>261</td>
                                <td>Scammers</td>
                                <td>Return </td>
                                <td>Withdraw poblem </td>
                                <td>300</td>
                                <td>22 Jan 2023 5:01 PM</td>
                              </tr>
                                                        <tr>
                                <td>262</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>395</td>
                                <td>22 Jan 2023 9:58 AM</td>
                              </tr>
                                                        <tr>
                                <td>263</td>
                                <td>Scammers</td>
                                <td>Return </td>
                                <td>Withdraw poblem </td>
                                <td>40</td>
                                <td>22 Jan 2023 8:50 AM</td>
                              </tr>
                                                        <tr>
                                <td>264</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas dilam</td>
                                <td>250</td>
                                <td>21 Jan 2023 6:58 PM</td>
                              </tr>
                                                        <tr>
                                <td>265</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>180</td>
                                <td>20 Jan 2023 6:57 PM</td>
                              </tr>
                                                        <tr>
                                <td>266</td>
                                <td>Fahim43</td>
                                <td>MdTohidulIslamBD</td>
                                <td>User </td>
                                <td>100</td>
                                <td>19 Jan 2023 3:35 PM</td>
                              </tr>
                                                        <tr>
                                <td>267</td>
                                <td>Return</td>
                                <td>MdTohidulIslamBD</td>
                                <td>B</td>
                                <td>100</td>
                                <td>19 Jan 2023 2:09 PM</td>
                              </tr>
                                                        <tr>
                                <td>268</td>
                                <td>Return</td>
                                <td>Lost888</td>
                                <td>Bet problem</td>
                                <td>184</td>
                                <td>19 Jan 2023 2:03 PM</td>
                              </tr>
                                                        <tr>
                                <td>269</td>
                                <td>Eusufh12345</td>
                                <td>Tb Rock</td>
                                <td>Id hake</td>
                                <td>504</td>
                                <td>18 Jan 2023 1:53 PM</td>
                              </tr>
                                                        <tr>
                                <td>270</td>
                                <td>Return</td>
                                <td>Pk666</td>
                                <td>Bet problem </td>
                                <td>140</td>
                                <td>17 Jan 2023 8:34 PM</td>
                              </tr>
                                                        <tr>
                                <td>271</td>
                                <td>Bipul 1</td>
                                <td>Mominul 1</td>
                                <td>Id hake</td>
                                <td>1184</td>
                                <td>16 Jan 2023 9:33 PM</td>
                              </tr>
                                                        <tr>
                                <td>272</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonus dilam</td>
                                <td>250</td>
                                <td>16 Jan 2023 9:29 PM</td>
                              </tr>
                                                        <tr>
                                <td>273</td>
                                <td>Spon1</td>
                                <td>Lp</td>
                                <td>S a kaj kore</td>
                                <td>280</td>
                                <td>16 Jan 2023 9:21 PM</td>
                              </tr>
                                                        <tr>
                                <td>274</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonus</td>
                                <td>550</td>
                                <td>15 Jan 2023 7:10 PM</td>
                              </tr>
                                                        <tr>
                                <td>275</td>
                                <td>Family</td>
                                <td>Sohan9</td>
                                <td>Dp korte pare na </td>
                                <td>1545</td>
                                <td>14 Jan 2023 3:32 PM</td>
                              </tr>
                                                        <tr>
                                <td>276</td>
                                <td>Mo1</td>
                                <td>Return </td>
                                <td>Dp poblem</td>
                                <td>105</td>
                                <td>13 Jan 2023 10:45 PM</td>
                              </tr>
                                                        <tr>
                                <td>277</td>
                                <td>Asraf12</td>
                                <td>Tamim75</td>
                                <td>Idr pass vule gese,,</td>
                                <td>1658</td>
                                <td>12 Jan 2023 10:06 PM</td>
                              </tr>
                                                        <tr>
                                <td>278</td>
                                <td>Asif678</td>
                                <td>Baba55</td>
                                <td>Bonas</td>
                                <td>310</td>
                                <td>11 Jan 2023 7:17 PM</td>
                              </tr>
                                                        <tr>
                                <td>279</td>
                                <td>Return</td>
                                <td>Rahimbb</td>
                                <td>Withdraw done but seen is not panel</td>
                                <td>1010</td>
                                <td>11 Jan 2023 7:08 PM</td>
                              </tr>
                                                        <tr>
                                <td>280</td>
                                <td>Wel530</td>
                                <td>Return </td>
                                <td>Dp problem </td>
                                <td>590</td>
                                <td>11 Jan 2023 9:23 AM</td>
                              </tr>
                                                        <tr>
                                <td>281</td>
                                <td>Return</td>
                                <td>Rubel8</td>
                                <td>Wt poblem</td>
                                <td>70</td>
                                <td>09 Jan 2023 10:26 PM</td>
                              </tr>
                                                        <tr>
                                <td>282</td>
                                <td>Return</td>
                                <td>Family</td>
                                <td>Advance club withdraw nilam,</td>
                                <td>7000</td>
                                <td>08 Jan 2023 9:14 AM</td>
                              </tr>
                                                        <tr>
                                <td>283</td>
                                <td>Return</td>
                                <td>New100</td>
                                <td>Pabe</td>
                                <td>8000</td>
                                <td>08 Jan 2023 8:53 AM</td>
                              </tr>
                                                        <tr>
                                <td>284</td>
                                <td>New100</td>
                                <td>Return</td>
                                <td>Id Problem</td>
                                <td>8000</td>
                                <td>07 Jan 2023 10:36 PM</td>
                              </tr>
                                                        <tr>
                                <td>285</td>
                                <td>Return</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1051627b21232728202050777d71797c3e737f7d">[email&#160;protected]</a></td>
                                <td>Bet problem</td>
                                <td>400</td>
                                <td>06 Jan 2023 8:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>286</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>B</td>
                                <td>200</td>
                                <td>06 Jan 2023 4:00 PM</td>
                              </tr>
                                                        <tr>
                                <td>287</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>169</td>
                                <td>06 Jan 2023 3:39 PM</td>
                              </tr>
                                                        <tr>
                                <td>288</td>
                                <td>Spon1</td>
                                <td>Lp</td>
                                <td>S a kajvkore</td>
                                <td>169</td>
                                <td>06 Jan 2023 3:38 PM</td>
                              </tr>
                                                        <tr>
                                <td>289</td>
                                <td>Return</td>
                                <td>Pk666</td>
                                <td>Bet problem</td>
                                <td>180</td>
                                <td>05 Jan 2023 11:02 PM</td>
                              </tr>
                                                        <tr>
                                <td>290</td>
                                <td>Return</td>
                                <td>Pk666</td>
                                <td>Bet problem,,</td>
                                <td>160</td>
                                <td>05 Jan 2023 11:00 PM</td>
                              </tr>
                                                        <tr>
                                <td>291</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>194</td>
                                <td>05 Jan 2023 4:31 PM</td>
                              </tr>
                                                        <tr>
                                <td>292</td>
                                <td>Spon1</td>
                                <td>Lp</td>
                                <td>S a kaj koren</td>
                                <td>194</td>
                                <td>05 Jan 2023 4:31 PM</td>
                              </tr>
                                                        <tr>
                                <td>293</td>
                                <td>Sadia1</td>
                                <td>Shamim100</td>
                                <td>S vai</td>
                                <td>1000</td>
                                <td>04 Jan 2023 2:44 PM</td>
                              </tr>
                                                        <tr>
                                <td>294</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>73</td>
                                <td>03 Jan 2023 10:49 AM</td>
                              </tr>
                                                        <tr>
                                <td>295</td>
                                <td>Spon1</td>
                                <td>Lp</td>
                                <td>Spn a kaj kre</td>
                                <td>73</td>
                                <td>03 Jan 2023 10:48 AM</td>
                              </tr>
                                                        <tr>
                                <td>296</td>
                                <td>Return</td>
                                <td>Alim14</td>
                                <td>Dp poblem </td>
                                <td>100</td>
                                <td>02 Jan 2023 1:08 PM</td>
                              </tr>
                                                        <tr>
                                <td>297</td>
                                <td>Alim14</td>
                                <td>Return </td>
                                <td>Dp poblem </td>
                                <td>100</td>
                                <td>02 Jan 2023 1:05 PM</td>
                              </tr>
                                                        <tr>
                                <td>298</td>
                                <td>Asif678</td>
                                <td>Family</td>
                                <td>S</td>
                                <td>10</td>
                                <td>31 Dec 2022 3:30 AM</td>
                              </tr>
                                                        <tr>
                                <td>299</td>
                                <td>Jabed08</td>
                                <td>Return </td>
                                <td>Dp poblem</td>
                                <td>5800</td>
                                <td>30 Dec 2022 9:32 AM</td>
                              </tr>
                                                        <tr>
                                <td>300</td>
                                <td>Spon1</td>
                                <td>Lp</td>
                                <td>Sponsor a kaj kore</td>
                                <td>164</td>
                                <td>29 Dec 2022 4:27 PM</td>
                              </tr>
                                                        <tr>
                                <td>301</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas dilam</td>
                                <td>164</td>
                                <td>29 Dec 2022 4:27 PM</td>
                              </tr>
                                                        <tr>
                                <td>302</td>
                                <td>Hridoy75</td>
                                <td>Dipa75</td>
                                <td>Tranfer</td>
                                <td>159</td>
                                <td>29 Dec 2022 3:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>303</td>
                                <td>Family</td>
                                <td>Baba55</td>
                                <td>Bonas dilam</td>
                                <td>150</td>
                                <td>28 Dec 2022 8:15 AM</td>
                              </tr>
                                                        <tr>
                                <td>304</td>
                                <td>Asif678</td>
                                <td>Family</td>
                                <td>Amr</td>
                                <td>50</td>
                                <td>28 Dec 2022 8:15 AM</td>
                              </tr>
                                                        <tr>
                                <td>305</td>
                                <td>Return</td>
                                <td>Lp</td>
                                <td>Dhar dilam</td>
                                <td>1000</td>
                                <td>27 Dec 2022 9:28 PM</td>
                              </tr>
                                                        <tr>
                                <td>306</td>
                                <td>Return</td>
                                <td>Lp</td>
                                <td>Dhar dilam,ami dibo</td>
                                <td>700</td>
                                <td>27 Dec 2022 2:08 PM</td>
                              </tr>
                                                        <tr>
                                <td>307</td>
                                <td>Family</td>
                                <td>Lp</td>
                                <td>Bonas</td>
                                <td>210</td>
                                <td>26 Dec 2022 4:23 PM</td>
                              </tr>
                                                        <tr>
                                <td>308</td>
                                <td>Spon1</td>
                                <td>Lp</td>
                                <td>Sponsor kaj kore</td>
                                <td>210</td>
                                <td>26 Dec 2022 4:23 PM</td>
                              </tr>
                                                        <tr>
                                <td>309</td>
                                <td>Asif678</td>
                                <td>Family</td>
                                <td>Amr</td>
                                <td>168</td>
                                <td>26 Dec 2022 4:22 PM</td>
                              </tr>
                                                        <tr>
                                <td>310</td>
                                <td>Shakil9242</td>
                                <td>Return </td>
                                <td>Wt da</td>
                                <td>510</td>
                                <td>24 Dec 2022 9:58 AM</td>
                              </tr>
                                                        <tr>
                                <td>311</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bons dilam</td>
                                <td>175</td>
                                <td>23 Dec 2022 10:29 PM</td>
                              </tr>
                                                        <tr>
                                <td>312</td>
                                <td>Spon1</td>
                                <td>Lp</td>
                                <td>Sponsor a kaj kore</td>
                                <td>179</td>
                                <td>23 Dec 2022 10:29 PM</td>
                              </tr>
                                                        <tr>
                                <td>313</td>
                                <td>Asif678</td>
                                <td>Family</td>
                                <td>Amr</td>
                                <td>100</td>
                                <td>23 Dec 2022 10:21 PM</td>
                              </tr>
                                                        <tr>
                                <td>314</td>
                                <td>Return</td>
                                <td>Lp</td>
                                <td>Ami nilam</td>
                                <td>570</td>
                                <td>23 Dec 2022 10:20 AM</td>
                              </tr>
                                                        <tr>
                                <td>315</td>
                                <td>Pk555</td>
                                <td>Pk666</td>
                                <td>Id hake hoysilo tai transfer</td>
                                <td>1405</td>
                                <td>22 Dec 2022 10:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>316</td>
                                <td>Aaa</td>
                                <td>Return</td>
                                <td>Exta w</td>
                                <td>2050</td>
                                <td>20 Dec 2022 10:56 AM</td>
                              </tr>
                                                        <tr>
                                <td>317</td>
                                <td>Asif678</td>
                                <td>Family</td>
                                <td>P</td>
                                <td>120</td>
                                <td>17 Dec 2022 12:50 PM</td>
                              </tr>
                                                        <tr>
                                <td>318</td>
                                <td>Asif678</td>
                                <td>Lp</td>
                                <td>Bonas dilam</td>
                                <td>200</td>
                                <td>16 Dec 2022 5:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>319</td>
                                <td>Tamim75</td>
                                <td>Return</td>
                                <td>Advance club withdraw desilam,</td>
                                <td>2000</td>
                                <td>16 Dec 2022 11:44 AM</td>
                              </tr>
                                                        <tr>
                                <td>320</td>
                                <td>Spon1</td>
                                <td>Llp</td>
                                <td>Sponsor a kaj kore</td>
                                <td>240</td>
                                <td>14 Dec 2022 4:41 PM</td>
                              </tr>
                                                        <tr>
                                <td>321</td>
                                <td>Asif678</td>
                                <td>Lllp</td>
                                <td>Sponsor a kaj kore</td>
                                <td>237</td>
                                <td>14 Dec 2022 1:48 PM</td>
                              </tr>
                                                        <tr>
                                <td>322</td>
                                <td>K6666</td>
                                <td>Asif678</td>
                                <td>Dhar</td>
                                <td>71</td>
                                <td>14 Dec 2022 1:47 PM</td>
                              </tr>
                                                        <tr>
                                <td>323</td>
                                <td>Hridoy75</td>
                                <td>Dipa75</td>
                                <td>190 Hridoy75 </td>
                                <td>190</td>
                                <td>14 Dec 2022 12:47 PM</td>
                              </tr>
                                                        <tr>
                                <td>324</td>
                                <td>Spon1</td>
                                <td>Llp</td>
                                <td>Sponsor a  kaj kore</td>
                                <td>238</td>
                                <td>13 Dec 2022 8:50 PM</td>
                              </tr>
                                                        <tr>
                                <td>325</td>
                                <td>Spon1</td>
                                <td>Llp</td>
                                <td>Sponsor a kaj kore</td>
                                <td>350</td>
                                <td>13 Dec 2022 2:25 PM</td>
                              </tr>
                                                        <tr>
                                <td>326</td>
                                <td>Alamin00</td>
                                <td>Sima00</td>
                                <td>Password not match</td>
                                <td>693</td>
                                <td>12 Dec 2022 7:55 PM</td>
                              </tr>
                                                        <tr>
                                <td>327</td>
                                <td>Spon1</td>
                                <td>Ii8</td>
                                <td>Sponsor a kaj kore</td>
                                <td>500</td>
                                <td>12 Dec 2022 6:43 PM</td>
                              </tr>
                                                        <tr>
                                <td>328</td>
                                <td>Asif678</td>
                                <td>Sompa222</td>
                                <td>Bonas dilam,</td>
                                <td>300</td>
                                <td>12 Dec 2022 4:13 PM</td>
                              </tr>
                                                        <tr>
                                <td>329</td>
                                <td>Return</td>
                                <td>Polk</td>
                                <td>Dp dise</td>
                                <td>195</td>
                                <td>12 Dec 2022 12:52 PM</td>
                              </tr>
                                                        <tr>
                                <td>330</td>
                                <td>Polk</td>
                                <td>Return </td>
                                <td>Dp poblem</td>
                                <td>195</td>
                                <td>12 Dec 2022 12:43 PM</td>
                              </tr>
                                                        <tr>
                                <td>331</td>
                                <td>Asif678</td>
                                <td>Tt5</td>
                                <td>Bonas dilam</td>
                                <td>1500</td>
                                <td>10 Dec 2022 10:54 PM</td>
                              </tr>
                                                        <tr>
                                <td>332</td>
                                <td>Spon1</td>
                                <td>Tt5</td>
                                <td>Sponsor a kaj kore</td>
                                <td>1567</td>
                                <td>10 Dec 2022 10:41 PM</td>
                              </tr>
                                                        <tr>
                                <td>333</td>
                                <td>Asif678</td>
                                <td>Ii8</td>
                                <td>Spn a kaj kre</td>
                                <td>242</td>
                                <td>09 Dec 2022 4:57 PM</td>
                              </tr>
                                                        <tr>
                                <td>334</td>
                                <td>Spon1</td>
                                <td>Ii8</td>
                                <td>Sponsor a kaj kore</td>
                                <td>242</td>
                                <td>09 Dec 2022 4:57 PM</td>
                              </tr>
                                                        <tr>
                                <td>335</td>
                                <td>Asif678</td>
                                <td>Family</td>
                                <td>P</td>
                                <td>500</td>
                                <td>08 Dec 2022 7:59 PM</td>
                              </tr>
                                                        <tr>
                                <td>336</td>
                                <td>Family</td>
                                <td>Ii8</td>
                                <td>Spon a bonas dilam</td>
                                <td>483</td>
                                <td>08 Dec 2022 6:03 PM</td>
                              </tr>
                                                        <tr>
                                <td>337</td>
                                <td>Spon1</td>
                                <td>Ii8</td>
                                <td>Sponsor a kaj kore</td>
                                <td>483</td>
                                <td>08 Dec 2022 6:03 PM</td>
                              </tr>
                                                        <tr>
                                <td>338</td>
                                <td>Amjad1k</td>
                                <td>Akram1k</td>
                                <td>Hack coin</td>
                                <td>20805</td>
                                <td>08 Dec 2022 1:19 PM</td>
                              </tr>
                                                        <tr>
                                <td>339</td>
                                <td>Am2</td>
                                <td>Family</td>
                                <td>Withdraw desi ami,</td>
                                <td>500</td>
                                <td>08 Dec 2022 1:02 PM</td>
                              </tr>
                                                        <tr>
                                <td>340</td>
                                <td>Spon1</td>
                                <td>Tt5</td>
                                <td>Amr sponsor a kaj kore,</td>
                                <td>100</td>
                                <td>06 Dec 2022 7:33 PM</td>
                              </tr>
                                                        <tr>
                                <td>341</td>
                                <td>Asif678</td>
                                <td>Tt5</td>
                                <td>B dilam</td>
                                <td>100</td>
                                <td>06 Dec 2022 7:30 PM</td>
                              </tr>
                                                        <tr>
                                <td>342</td>
                                <td>Return</td>
                                <td>Tamim75</td>
                                <td>Advance club withdraw</td>
                                <td>2000</td>
                                <td>05 Dec 2022 11:35 PM</td>
                              </tr>
                                                        <tr>
                                <td>343</td>
                                <td>Asif678</td>
                                <td>Spon1</td>
                                <td>B dilam </td>
                                <td>171</td>
                                <td>05 Dec 2022 9:10 PM</td>
                              </tr>
                                                        <tr>
                                <td>344</td>
                                <td>Sifat67</td>
                                <td>Dubai5</td>
                                <td>Ok</td>
                                <td>4599</td>
                                <td>05 Dec 2022 10:19 AM</td>
                              </tr>
                                                        <tr>
                                <td>345</td>
                                <td>Asif678</td>
                                <td>Spon1</td>
                                <td>B dilam </td>
                                <td>392</td>
                                <td>04 Dec 2022 8:36 PM</td>
                              </tr>
                                                        <tr>
                                <td>346</td>
                                <td>Asif678</td>
                                <td>Tt5</td>
                                <td>Bonas delam</td>
                                <td>200</td>
                                <td>02 Dec 2022 12:12 PM</td>
                              </tr>
                                                        <tr>
                                <td>347</td>
                                <td>Sadia1</td>
                                <td>RT15</td>
                                <td>S vai</td>
                                <td>5000</td>
                                <td>01 Dec 2022 9:00 PM</td>
                              </tr>
                                                        <tr>
                                <td>348</td>
                                <td>Olok22</td>
                                <td>Return </td>
                                <td>Do poblem </td>
                                <td>100</td>
                                <td>01 Dec 2022 8:39 PM</td>
                              </tr>
                                                        <tr>
                                <td>349</td>
                                <td>Sadia1</td>
                                <td>SSF</td>
                                <td>S vai</td>
                                <td>5000</td>
                                <td>01 Dec 2022 7:18 PM</td>
                              </tr>
                                                        <tr>
                                <td>350</td>
                                <td>return</td>
                                <td>Rony333</td>
                                <td>win coin</td>
                                <td>8700</td>
                                <td>01 Dec 2022 5:54 PM</td>
                              </tr>
                                                        <tr>
                                <td>351</td>
                                <td>Sadia1</td>
                                <td>Md2</td>
                                <td>Bonas</td>
                                <td>300</td>
                                <td>01 Dec 2022 5:42 PM</td>
                              </tr>
                                                        <tr>
                                <td>352</td>
                                <td>Sadia1</td>
                                <td>Asif678</td>
                                <td>1k dhar</td>
                                <td>1000</td>
                                <td>01 Dec 2022 3:20 PM</td>
                              </tr>
                                                        <tr>
                                <td>353</td>
                                <td>Family</td>
                                <td>Champion</td>
                                <td>Football return er jonne</td>
                                <td>1135</td>
                                <td>01 Dec 2022 1:46 PM</td>
                              </tr>
                                                        <tr>
                                <td>354</td>
                                <td>Asif678</td>
                                <td>Family</td>
                                <td>Amr</td>
                                <td>150</td>
                                <td>01 Dec 2022 1:45 PM</td>
                              </tr>
                                                        <tr>
                                <td>355</td>
                                <td>Family</td>
                                <td>All24</td>
                                <td>Football return er jonne </td>
                                <td>3315</td>
                                <td>01 Dec 2022 1:45 PM</td>
                              </tr>
                                                        <tr>
                                <td>356</td>
                                <td>SADIA1</td>
                                <td>Return </td>
                                <td>Dp rin</td>
                                <td>100</td>
                                <td>01 Dec 2022 12:11 PM</td>
                              </tr>
                                                  </tbody>
                    	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.2.1.min.js"></script>
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
</html><script type="text/javascript">$('#balHistory').DataTable();</script>