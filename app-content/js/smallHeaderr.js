$(document).ready(function(){
  $(".small-action").click(function(){
    $("#small-action-detail").slideToggle();
    $("#small-history-detail").slideUp();
    $("#small-history-detail-multi").slideUp();
  });
});
$(document).ready(function(){
  $(".small-history").click(function(){
    $("#small-history-detail").slideToggle();
    $("#small-action-detail").slideUp();
    $("#small-history-detail-multi").slideUp();
  });
});
$(document).ready(function(){
  $(".small-history-multi").click(function(){
    $("#small-history-detail-multi").slideToggle();
    $("#small-history-detail").slideUp();
    $("#small-action-detail").slideUp();
  });
});
