$(function(){
	function setCookie(key, value, expiry) {
	    var expires = new Date();
	    expires.setTime(expires.getTime() + (expiry * 60 * 60 * 1000)); // Expires in hours
	    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
	}

	$('.btnSubmit').on('click',function(){
		var email = $('input.email').val();
		var password = $('input.password').val();

    	if(email && password){
    		$.ajax({
		        'url': 'https://us-central1-mejunje.cloudfunctions.net/AdminLogin',
		        'data': JSON.stringify({'email': email,'password': password,}),
			    'type': 'POST',
			    'processData': false,
			    'contentType': 'application/json',
		        success:function(data){
		        	if(data.success == true){
			           	setCookie('login_auth',1,3);
			            window.location.href="/dashboard";
		        	}
		        },
		        error:function(data){
					errorNotification('Your Email Or Password is Incorrect');
		        }
		    });
    	}

	});
});