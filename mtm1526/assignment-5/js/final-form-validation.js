$(document).ready(function(){
	var userAvailable = $('.user-available');
	var passwordReqs = 0;
	
	$('#username').on('change', function(ev){
		var username = $(this).val();
		
		userAvailable.attr('data-status', 'unchecked');
		
		if(username.length >= 3 && username.length <= 25){
			var ajax = $.post('check-username.php', {
				'username' : username
			});
			
			ajax.done(function (data){
				if(data == 'available'){
					userAvailable.attr('data-status', 'available').html('Available');
				}
				else{
					userAvailable.attr('data-status', 'unavailable').html('Unavailable');
				}
			});
		}
		else{
			userAvailable.attr('data-status', 'unavailable').html('Unavailable');
		}
	});
	
	$('#password').on('keyup', function(ev) {
		var password = $(this).val();
		
		if(password.length > 5) {
			passwordReqs++;
			$('.pass-length').attr('data-state', 'achieved');
		}
		
		if(password.match(/[a-z]/)){
			passwordReqs++;
			$('.pass-lower').attr('data-state', 'achieved');
		}
		
		if(password.match(/[A-Z]/)){
			passwordReqs++;
			$('.pass-upper').attr('data-state', 'achieved');
		}
		
		if(password.match(/[0-9]/)){
			passwordReqs++;
			$('.pass-num').attr('data-state', 'achieved');
		}
		
		if(password.match(/[^a-zA-Z0-9]/)){
			passwordReqs++;
			$('.pass-symbol').attr('data-state', 'achieved');
		}
	});
	
	
	
	
	
	$('#email address').on('keyup', function(ev) {
		var emailaddress = $(this).val();
		
		if( emailaddress.length > 5) {
			 emailaddressReqs++;
			$('.email-length').attr('data-state', 'achieved');
		}
		
		if( emailaddress.match(/[a-z]/)){
			 emailaddressReqs++;
			$('.email-lower').attr('data-state', 'achieved');
		}
		
		if(emailaddress.match(/[A-Z]/)){
			passwordReqs++;
			$('.email-upper').attr('data-state', 'achieved');
		}
		
		if(emailaddress.match(/[0-9]/)){
			passwordReqs++;
			$('.email-num').attr('data-state', 'achieved');
		}
		
		if(emailaddress.match(/[^a-zA-Z0-9]/)){
			passwordReqs++;
			$('.email-symbol').attr('data-state', 'achieved');
		}
	});
	
	
	
	
	
	
	
	
		$('#canada').on('click',function(){
		$('#info').load('canada.html');
		
	});
	
	
	
		$('#us').on('click',function(){
		$('#info').load('us.html');
		
	});
	$('#form').on('submit', function (ev) {
		if(userAvailable.attr('data-status') == 'unchecked' || userAvailable.attr('data-status') == 'unavailable' || passwordReqs < 5){
			ev.preventDefault();
		}
	});
});