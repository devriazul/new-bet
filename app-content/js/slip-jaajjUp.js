$(document).on('click', '.login-notice-close', function () {
	$('.login-notice').hide();
});
$(document).on('click', '.pot-over-notice-close', function () {
	$('.pot-over-notice').hide();
});
$(document).on('click', '.samePot-notice-close', function () {
	$('.samePot-notice').hide();
});
$(document).on('click', '.pot-close', function () {
	var potId = $(this).attr('potId');
	var betId = $(this).attr('betId');
	$.ajax({
		method: 'POST',
		url: 'potDelete.php',
		data:{
			potId: potId
		},
		success: function(data){
			if(data == 'okk'){
				$('.rate-part'+betId+'').css('background', '#808080');
        $('.rate-part'+betId+'').css('color', '#D8CECE');
				$('.betslip-wrapper-box').hide();
        document.getElementById('column365').style.display = 'none';
        document.getElementById('empty-slip').style.display = 'none';
        document.getElementById('column365cb1').style.display = 'none';
        document.getElementById('column365cc1').style.display = 'none';
			}else if(data == 'no'){
				alert('Something Wrong!');
			}
		}
	});
});
$(document).ready(function(){
	$.ajax({
		url: 'multiNumber.php',
		success: function(data){
			if(data > 0){
				
				$('.pot-rate-number').load('totalStake.php');
        $('.betslip-wrapper-box').hide();
        document.getElementById('column365').style.display = 'block';
        document.getElementById('empty-slip').style.display = 'block';
        $('.bet-open').show();
        $('.bet-close').hide();
        $('.betslip-wrapper-box').show();
        $('.bet-option-slip-wrapper').load('slip.php');
			}else{
				document.getElementById('column365').style.display = 'none';
        document.getElementById('empty-slip').style.display = 'none';
        $('.match-title-option-rate-part').css('background', '#808080');
        $('.match-title-option-rate-part').css('color', '#D8CECE');
			}
		}
	});
  $.ajax({
    url: 'multiNumbercb1.php',
    success: function(data){
      if(data > 0){
        
        $('.pot-rate-number').load('totalStakecb1.php');
        $('.betslip-wrapper-box').hide();
        document.getElementById('column365cb1').style.display = 'block';
        document.getElementById('empty-slip').style.display = 'block';
        $('.bet-open').show();
        $('.bet-close').hide();
        $('.betslip-wrapper-box').show();
        $('.bet-option-slip-wrapper').load('slipcb1.php');
      }else{
        document.getElementById('column365cb1').style.display = 'none';
        document.getElementById('empty-slip').style.display = 'none';
        $('.match-title-option-rate-part').css('background', '#808080');
        $('.match-title-option-rate-part').css('color', '#D8CECE');
      }
    }
  });
  $.ajax({
    url: 'multiNumbercc1.php',
    success: function(data){
      if(data > 0){
        
        $('.pot-rate-number').load('totalStakecc1.php');
        $('.betslip-wrapper-box').hide();
        document.getElementById('column365cc1').style.display = 'block';
        document.getElementById('empty-slip').style.display = 'block';
        $('.bet-open').show();
        $('.bet-close').hide();
        $('.betslip-wrapper-box').show();
        $('.bet-option-slip-wrapper').load('slipcc1.php');
      }else{
        document.getElementById('column365cb1').style.display = 'none';
        document.getElementById('empty-slip').style.display = 'none';
        $('.match-title-option-rate-part').css('background', '#808080');
        $('.match-title-option-rate-part').css('color', '#D8CECE');
      }
    }
  });
});

$("#pot-submit-button-action").on("click", function () {
  document.getElementById('pot-submit-button-action').style.display = 'none';
  document.getElementById('pot-submit-button-actionlo').style.display = 'block';
  $('.pot-submit-button').css('background', '#478562');
  $('.pot-submit-button-load').load('loadinSm.php');
  var multiRate = $('.pot-rate-numberno').text();
  var stakeAmount = $(".pot-stake-input").val();

  setTimeout(function () {

          var singleB = 0;
          var multiId = 0;
          $.ajax({
            method: 'POST',
            url: 'getDataB.php',
            dataType: 'json',
            data: {
              singleB: singleB
            },
            success: function(data){
              var bettingTitleId = data.bettingTitleId;
              var bettingSubTitleId = data.bettingSubTitleId;
              var bettingSubTitleOptionId = data.bettingSubTitleOptionId;
              var betRate = data.betRate;
              var bettingSubTitle = data.bettingSubTitle;
              var BettingSubTitleOption = data.BettingSubTitleOption;
              var stakeId = data.stakeId;
              var betClass = 0;
              $.ajax({
                method: 'POST',
                url: 'placeBet.php',
                data: {
                  match: bettingSubTitle,
                  matchBet: BettingSubTitleOption,
                  betRate: betRate,
                  stakeAmount: stakeAmount,
                  betId: bettingSubTitleOptionId,
                  betTitleId: bettingSubTitleId,
                  matchId: bettingTitleId
                },
                success: function(data){
                  if (data !== "") {
                    $('.pot-submit-button').css('background', '#008000');
                    $('.pot-submit-button-load').html('');
                    $('.pot-error-notice-holder').show();
                    $('.pot-error-notice-holder').text(data);
                    document.getElementById('pot-submit-button-action').style.display = 'block';
                    document.getElementById('pot-submit-button-actionlo').style.display = 'none';
                    setTimeout( function(){
                      $('.pot-error-notice-holder').text('');
                      $('.pot-error-notice-holder').hide('');
                    }, 3000);
                  } else {
                    $('.pot-submit-button').css('background', '#008000');
                    $('.pot-submit-button-load').html('');
                    $('.pot-error-notice-holder').show();
                    $('.pot-error-notice-holder').text('Bet Placed.');
                    $(".balance").load('balance.php');
                    $(".headercountABet").load('countbet.php');
                    document.getElementById('pot-submit-button-action').style.display = 'block';
                    document.getElementById('pot-submit-button-actionlo').style.display = 'none';
                    setTimeout( function(){
                      $('.pot-error-notice-holder').text('');
                      $('.pot-error-notice-holder').hide('');
                    }, 3000);
                    
                  }
                }
              });
            }
          });
  }, 2000);
    
});
$("#pot-submit-button-actcb1").on("click", function () {
  document.getElementById('pot-submit-button-actcb1').style.display = 'none';
  document.getElementById('pot-submit-button-actcb1lo').style.display = 'block';
  $('.pot-submit-button').css('background', '#478562');
  $('.pot-submit-button-load').load('loadinSm.php');
  var multiRate = $('.pot-rate-numbercb1').text();
  var stakeAmount = $(".pot-stake-inputcb1").val();

          var singleB = 0;
          var multiId = 0;
          $.ajax({
            method: 'POST',
            url: 'getDataBcb1.php',
            dataType: 'json',
            data: {
              singleB: singleB
            },
            success: function(data){
              var bettingTitleId = data.bettingTitleId;
              var bettingSubTitleId = data.bettingSubTitleId;
              var bettingSubTitleOptionId = data.bettingSubTitleOptionId;
              var betRate = data.betRate;
              var bettingSubTitle = data.bettingSubTitle;
              var BettingSubTitleOption = data.BettingSubTitleOption;
              var stakeId = data.stakeId;
              var betClass = 0;
              $.ajax({
                method: 'POST',
                url: 'placeBetcb1.php',
                data: {
                  match: bettingSubTitle,
                  matchBet: BettingSubTitleOption,
                  betRate: betRate,
                  stakeAmount: stakeAmount,
                  betId: bettingSubTitleOptionId,
                  betTitleId: bettingSubTitleId,
                  matchId: bettingTitleId
                },
                success: function(data){
                  if (data !== "") {
                    $('.pot-submit-button').css('background', '#008000');
                    $('.pot-submit-button-load').html('');
                    $('.pot-error-notice-holder').show();
                    $('.pot-error-notice-holder').text(data);
                    document.getElementById('pot-submit-button-actcb1').style.display = 'block';
                    document.getElementById('pot-submit-button-actcb1lo').style.display = 'none';
                    setTimeout( function(){
                      $('.pot-error-notice-holder').text('');
                      $('.pot-error-notice-holder').hide('');
                    }, 3000);
                  } else {
                    $('.pot-submit-button').css('background', '#008000');
                    $('.pot-submit-button-load').html('');
                    $('.pot-error-notice-holder').show();
                    $('.pot-error-notice-holder').text('Bet Placed.');
                    $(".balance").load('balance.php');
                    $(".headercountABet").load('countbet.php');
                    document.getElementById('pot-submit-button-actcb1').style.display = 'block';
                    document.getElementById('pot-submit-button-actcb1lo').style.display = 'none';
                    setTimeout( function(){
                      $('.pot-error-notice-holder').text('');
                      $('.pot-error-notice-holder').hide('');
                    }, 3000);
                    
                  }
                }
              });
            }
          });
    
});
$("#pot-submit-button-actcc1").on("click", function () {
  document.getElementById('pot-submit-button-actcc1').style.display = 'none';
  document.getElementById('pot-submit-button-actcc1lo').style.display = 'block';
  $('.pot-submit-button').css('background', '#478562');
  $('.pot-submit-button-load').load('loadinSm.php');
  var multiRate = $('.pot-rate-numbercc1').text();
  var stakeAmount = $(".pot-stake-inputcc1").val();

          var singleB = 0;
          var multiId = 0;
          $.ajax({
            method: 'POST',
            url: 'getDataBcc1.php',
            dataType: 'json',
            data: {
              singleB: singleB
            },
            success: function(data){
              var bettingTitleId = data.bettingTitleId;
              var bettingSubTitleId = data.bettingSubTitleId;
              var bettingSubTitleOptionId = data.bettingSubTitleOptionId;
              var betRate = data.betRate;
              var bettingSubTitle = data.bettingSubTitle;
              var BettingSubTitleOption = data.BettingSubTitleOption;
              var stakeId = data.stakeId;
              var betClass = 0;
              $.ajax({
                method: 'POST',
                url: 'placeBetcc1.php',
                data: {
                  match: bettingSubTitle,
                  matchBet: BettingSubTitleOption,
                  betRate: betRate,
                  stakeAmount: stakeAmount,
                  betId: bettingSubTitleOptionId,
                  betTitleId: bettingSubTitleId,
                  matchId: bettingTitleId
                },
                success: function(data){
                  if (data !== "") {
                    $('.pot-submit-button').css('background', '#008000');
                    $('.pot-submit-button-load').html('');
                    $('.pot-error-notice-holder').show();
                    $('.pot-error-notice-holder').text(data);
                    document.getElementById('pot-submit-button-actcc1').style.display = 'block';
                    document.getElementById('pot-submit-button-actcc1lo').style.display = 'none';
                    setTimeout( function(){
                      $('.pot-error-notice-holder').text('');
                      $('.pot-error-notice-holder').hide('');
                    }, 3000);
                  } else {
                    $('.pot-submit-button').css('background', '#008000');
                    $('.pot-submit-button-load').html('');
                    $('.pot-error-notice-holder').show();
                    $('.pot-error-notice-holder').text('Bet Placed.');
                    $(".balance").load('balance.php');
                    $(".headercountABet").load('countbet.php');
                    document.getElementById('pot-submit-button-actcc1').style.display = 'block';
                    document.getElementById('pot-submit-button-actcc1lo').style.display = 'none';
                    setTimeout( function(){
                      $('.pot-error-notice-holder').text('');
                      $('.pot-error-notice-holder').hide('');
                    }, 3000);
                    
                  }
                }
              });
            }
          });
    
});