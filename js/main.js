/* global $, alert, console */


$(function() {
   $("#one").addClass("progress-bar-purple");
});
$(document).ready(function(){
var scrollButton = $("#scroll-top");
$(window).scroll(function()
{
  $(this).scrollTop() >= 700 ? scrollButton.show() :scrollButton.hide();

  });
  // click on button to scroll top
     scrollButton.click(function()
     {
         $("html,body").animate({ scrollTop : 0}, 600);
     });
  $('.carousel').carousel({
    interval: 10000
  });
});


$(function () {
    'use strict';
    var  userError = true,
         emailError = true,
         msgError  = true;

  $('.username').blur(function () {
    if ($(this).val().length < 4){
      $(this).css({"border-color": "#F00",
              "border-weight":"1px",
              "border-style":"solid"});
       $(this).parent().find('.custom-alert').fadeIn(200);
       $(this).parent().find('.asterisx').fadeIn(100);
       userError = true;
    }
    else {
      $(this).css({"border-color": "#080",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeOut(200);
       $(this).parent().find('.asterisx').fadeOut(100);
       userError = false;
    }
  });


// start contact form

  $('.email').blur(function () {
    if ($(this).val() === ''){
      $(this).css({"border-color": "#F00",
              "border-weight":"1px",
              "border-style":"solid"});

      $(this).parent().find('.custom-alert').fadeIn(200);
       $(this).parent().find('.asterisx').fadeIn(100);

       emailError = true;
    }
    else {
      $(this).css({"border-color": "#080",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeOut(200);
       $(this).parent().find('.asterisx').fadeOut(100);

       emailError = false;

    }
  });


  $('.message').blur(function () {
    if ($(this).val().length < 11){
      $(this).css({"border-color": "#F00",
              "border-weight":"1px",
              "border-style":"solid"});
       $(this).parent().find('.custom-alert').fadeIn(200);
       $(this).parent().find('.asterisx').fadeIn(100);

       msgError = true;
    }
    else {
      $(this).css({"border-color": "#080",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeOut(200);
       $(this).parent().find('.asterisx').fadeOut(100);

       msgError = false;
    }

  });

  $(".contact-form").submit(function(e){
    if (userError === true || emailError === true || msgError === true){
      e.preventDefault();
      $('.username, .email, .message').blur();
    }

});

  $('html').niceScroll({

    cursorcolor: '#F7600e',
    cursorwidth: '10px',
    cursorborder: '1px solid #F7600e'

  });
}); // end document get ready
/*********************************/
// loading Screen
/*
$(window).load(function()
{

  $(".loading-overlay .containers").fadeOut(1000, // loading Elemment
    function ()
    {
    $(this).parent().fadeOut(1000,
      function ()
      {
        $("body").css("overflow","auto"); // overflow
      $(this).remove();
    });
  });
});
*/
