// JavaScript Document
$(document).ready(function(){	
	//form login click
	$('.btn-login').click(function(e) {
	  $(".form-login").show();
	  e.stopPropagation();
	});
	$('body').click(function(e) {       
		var formLogin = $('.form-login');  
		if (formLogin.is(':visible') && $(e.target).parents('.form-login').length == 0){
			formLogin.hide();
		}   

	});
	//Scroll bar cart
	$('#cart-list').slimScroll({
		width: '310px',
		height: 'auto',
	});

});