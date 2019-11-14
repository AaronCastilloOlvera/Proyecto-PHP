$(document).ready(function(){
var altura = $('nav').offset().top;
$(window).on('scroll',function(){
if ($(window).scrollTop() > 50) {
	$('nav').addClass('shrink');
}else{
	$('nav').removeClass('shrink');
	$('nav').addClass('top');

}
});

//--------------------------------------------menu

$('#home').on('click',function(){
	var position= 0;
	$('body,html').animate({
    scrollTop: position + 'px'
	},2000);
	$('#home').addClass('bottom');
	$('#system').removeClass('bottom');
	$('#about').removeClass('bottom');
	$('#contact').removeClass('bottom');
	$('#acercade').removeClass('bottom');
})

$('#system').on('click',function(){
	var position = 530;
	$('body,html').animate({
     scrollTop:position +'px'
	},2000);
	$('#system').addClass('bottom');
	$('#home').removeClass('bottom');
	$('#about').removeClass('bottom');
	$('#contact').removeClass('bottom');
	$('#acercade').removeClass('bottom');
})

$('#about').on('click',function(){
	var position = 900;
	$('body,html').animate({
     scrollTop:position +'px'
	},2000);
	$('#about').addClass('bottom');
	$('#system').removeClass('bottom');
	$('#home').removeClass('bottom');
	$('#contact').removeClass('bottom');
	$('#acercade').removeClass('bottom');
})

$('#contact').on('click',function(){
	var position = 1380;
	$('body,html').animate({
     scrollTop:position +'px'
	},2000);
	$('#contact').addClass('bottom');
	$('#system').removeClass('bottom');
	$('#home').removeClass('bottom');
	$('#about').removeClass('bottom');
	$('#acercade').removeClass('bottom');
})

$('#acercade').on('click',function(){
	var position = 1900;
	$('body,html').animate({
     scrollTop:position +'px'
	},2000);
	$('#acercade').addClass('bottom');
	$('#system').removeClass('bottom');
	$('#about').removeClass('bottom');
	$('#home').removeClass('bottom');
	$('#contact').removeClass('bottom');
})

});
