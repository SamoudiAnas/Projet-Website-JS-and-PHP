/*jslint
    es6
*/
const hero = document.querySelector(".hero");
const slider = document.querySelector(".slider");
const logo = document.querySelector(".logo");
const nav_bar = document.querySelector(".nav-bar");
const headline = document.querySelector(".headline");




const t1 = new TimelineMax();

t1.fromTo(hero, 1, { height : "0%"}, { height : "100%" ,ease: Power2.easeInOut})
.fromTo(hero, 1.2, { width : "100%"}, { width : "80%" ,ease: Power2.easeInOut})
.fromTo(slider, 1.2, { x : "-100%"}, { x : "0%" ,ease: Power2.easeInOut}, "-=1.2")
.fromTo(logo, 1.2, {opacity : 0, x : "30%"}, {opacity : 1, x : "0%" ,ease: Power2.easeInOut}, "-=0.5")
.fromTo(nav_bar, 1.2, {opacity : 0, x : "30%"}, {opacity : 1, x : "0%" ,ease: Power2.easeInOut}, "-=1")
.fromTo(headline, 1.2, {opacity : 0, x : "30%"}, {opacity : 1, x : "0%" ,ease: Power2.easeInOut}, "-=1")
;





(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input3').each(function () {
        $(this).on('blur', function () {
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
            

    /*==================================================================
    [ Chose Radio ]*/
    $("#radio1").on('change', function(){
        if ($(this).is(":checked")) {
            $('.input3-select').slideUp(300);
        }
    });

    $("#radio2").on('change', function(){
        if ($(this).is(":checked")) {
            $('.input3-select').slideDown(300);
        }
    });
        
  
    
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var message = $('.validate-input textarea[name="message"]');


    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }


        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        if($(message).val().trim() == ''){
            showValidate(message);
            check=false;
        }

        return check;
    });


    $('.validate-form .input3').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);