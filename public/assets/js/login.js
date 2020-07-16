$(function(){
	$('.btnSubmit').on('click',function(){
		var email = $('input.email').val();
		var password = $('input.password').val();
    	if(email && password){
    		$.ajax({
		        type:'post',
		        url: 'https://us-central1-mejunje.cloudfunctions.net/AdminLogin',
		        data:{
		            'email': email,
		            'password': password,
		        },
		        done:function(data){
		        	if(data.success == true){
		        		successNotification('Login Success, Welcome Admin');
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