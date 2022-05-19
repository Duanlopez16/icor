$(window).scroll(function() {
    if ($("#menu").offset().top > 70) {
        $("#menu").addClass("shadow-lg p-3 mb-5 bg-white rounded");
        $("#menu").removeClass("kj");
    } else {
      $("#menu").removeClass("shadow-lg p-3 mb-5 bg-white rounded");
        $("#menu").addClass("kj");
    }
});

$(document).ready(function(){
    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra * 0.50;

        $('body').css({
            'background-position': '0 -' + posicion + 'px'
        });
    });
});
$("#oculto1").ready(function(){
   hide(1500);
});
jQuery(function($){
$('#card').waypoint(function(){
    $(this).toggleClass('animation-target1');
},
{
    offset: '70%',
    triggerOnce: true
});
});