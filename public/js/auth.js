$(document).ready(function(){
    $("input").focus(function(){
      $(this).css("background-image", "linear-gradient( 135deg, #FCCF31 10%, #F55555 100%)");
    });
    $("input").blur(function(){
      $(this).css("background-image", "none");
    });
  });


