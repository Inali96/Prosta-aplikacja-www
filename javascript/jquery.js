/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    $("#panel").hide();
  $("#panel2").hide();
    $("#panel3").hide();
    $("#panel4").hide();

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
   
           $("#panel2").delay(100).fadeOut(300);
           $("#panel3").delay(100).fadeOut(300);

  });
});
$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
  
             $("#panel").delay(100).fadeOut(300);
           $("#panel3").delay(100).fadeOut(300);
  });
});
$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
   
             $("#panel").delay(100).fadeOut(300);
           $("#panel2").delay(100).fadeOut(300);
  });
});

$(document).ready(function(){
    $("#menu").click(function(){

        $("#menu").delay(100).fadeOut(300);
        $("#panel4").delay(100).fadeIn(300);
    });
});
