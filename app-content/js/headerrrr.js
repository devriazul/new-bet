$("#menu-icon").on("click", function () {
    jQuery("#mobile-menu").addClass( 'sidemenu-on' );
    jQuery("#mobile-menu").removeClass( 'sidemenu-off' );
});
$("#menu-icon-close").on("click", function () {
    jQuery("#mobile-menu").removeClass( 'sidemenu-on' );
});
function toggle_visibility(id) {
  var e = document.getElementById(id);
    if(e.style.display == 'block')
      e.style.display = 'none';
    else
     e.style.display = 'block';
}

$(document).ready(function(){
  $(".profile-pic").click(function(){
    $("#usersmallview").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".login-credential").click(function(){
    $("#userboldview").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".history").click(function(){
    $("#historyy").slideToggle("slow");
  });
});

// settings 

$(document).on('click', '.profile', function () {
	$(".setting-option-detail").hide();
	$(".setting-option-detail-next").html("");
	$(".profile-detail").show();
});
$(document).on('click', '.deposit', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('deposit.php');
});
$(document).on('click', '.withdraw', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('withdraw.php');
});
$(document).on('click', '.b-transfer', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('balancet.php');
});
$(document).on('click', '.sponsorr', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('sponsor.php');
});
$(document).on('click', '.deposith', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('depositHistory.php');
});
$(document).on('click', '.withdrawh', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('withdrawHistory.php');
});
$(document).on('click', '.balancetransferh', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('BalanceTransferHistory.php');
});
$(document).on('click', '.beth', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('betHistory.php');
});
$(document).on('click', '.activebeth', function () {
   $(".profile-detail").hide();
   $(".setting-option-detail-next").html("");
   $(".setting-option-detail").show();
   $(".setting-option-detail").load('activeBet.php');
});



$(document).on('click', '.show-more-sponsor', function () {
   $(".profile-detail").hide();
   $("#show-more").hide();
   $(".setting-option-detail").show();
   $(".setting-option-detail-next").load('sponsor2.php');
});
$(document).on('click', '.show-more-deposit', function () {
   $(".profile-detail").hide();
   $("#show-more").hide();
   $(".setting-option-detail").show();
   $(".setting-option-detail-next").load('depositHistory2.php');
});
$(document).on('click', '.show-more-withdraw', function () {
   $(".profile-detail").hide();
   $("#show-more").hide();
   $(".setting-option-detail").show();
   $(".setting-option-detail-next").load('withdrawHistory2.php');
});
$(document).on('click', '.show-more-btransfer', function () {
   $(".profile-detail").hide();
   $("#show-more").hide();
   $(".setting-option-detail").show();
   $(".setting-option-detail-next").load('BalanceTransferHistory2.php');
});
$(document).on('click', '.show-more-bethistory', function () {
   $(".profile-detail").hide();
   $("#show-more").hide();
   $(".setting-option-detail").show();
   $(".setting-option-detail-next").load('betHistory2.php');
});


$("#deposit-numberW").on("click", function () {
  $("#dTo").load('DepositNumber.php');
});


//header sports
$(document).ready(function(){
  $(".today-smoll-side").click(function(){
    $("#live-upcoming-today").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".tomorrow-smoll-side").click(function(){
    $("#live-upcoming-tomorrow").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".cricket-smoll-side").click(function(){
    $("#live-upcoming-cricket").slideToggle("slow");
  });
});


$(document).ready(function(){
  $(".football-smoll-side").click(function(){
    $("#live-upcoming-football").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".basketball-smoll-side").click(function(){
    $("#live-upcoming-basketball").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".tennis-smoll-side").click(function(){
    $("#live-upcoming-tennis").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".volleyball-smoll-side").click(function(){
    $("#live-upcoming-volleyball").slideToggle("slow");
  });
});

// cash out
$(document).on('click', '.cash-out-option', function () {
  $(this).text('');
  $(this).addClass("loading");
  $(this).removeClass("cash-out-option");
  var id = $(this).attr('betTID');
  var ans = $(this).attr('betID');
  var rate = $(this).attr('rate');
  var ques = $(this).attr('matchTitle');
  var gameType = $(this).attr('gametype');
  var matchId = $(this).attr('match');
  setTimeout(function () {
    $.ajax({
        method: "POST",
        url: "cashout.php",
        data: {
            id: id,
            ans: ans,
            ques: ques,
            gameType: gameType,
            rate: rate,
            matchId: matchId
       },
       success: function (data) {
        if(data !== ''){
          alert(data);
          $(this).removeClass('loader');
          location.reload();
         }else{
          alert('Cashout error');
          $(this).removeClass('loader');
         }

       }
    });
  }, 8000);
});

$("#submit-slip-button-oldd").on("click", function () {
    $(".error-holder").text('Wait! placing your bet....');
    document.getElementById('submit-slip-button').style.display = 'none';
    var match = $(".slip-bet-cat-name").text();
    var matchBet = $(".slip-bet-name").text();
    var betRate = $(".slip-bet-odd").text();
    var stakeAmount = $("#stake-input").val();
    var betId = $("#betId").val();
    var matchId = $("#matchId").val();
    var betTitleId = $("#betTitleId").val();

    $.ajax({
        method: "POST",
        url: "placeBet.php",
        data: {
            match: match,
            matchBet: matchBet,
            betRate: betRate,
            stakeAmount: stakeAmount,
            betId: betId,
            matchId: matchId,
            betTitleId: betTitleId
        },
        success: function (data) {

            if (data !== "") {
                $(".error-holder").text(data);
                document.getElementById('submit-slip-button').style.display = 'block';
            } else {
                $(".error-holder").text('Bet Placed.');
                document.getElementById('submit-slip-button').style.display = 'block';
                $(".balance").load('balance.php');
                $(".headercountABet").load('countbet.php');
                $(".countABet").load('countbet.php');
            }
        }
    });
});
