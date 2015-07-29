var main = function(){
  $('.glyphicon').mouseenter(
    function(){$('.items').css("display", "initial");} );
  
  $('.glyphicon').mouseleave(function(){
    $('.items').css("display", "none");
  });
  
//   $('.glyphicon').mouseover(function(){
//     $(".items").css("display", "none");
//   }); 
  
//   function(){$(".items").css("display", "initial");
//     function(){$(".items").css("display", "none")}
};

$(document).ready(main);