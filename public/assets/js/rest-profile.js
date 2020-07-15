var restUID = getCookie('rest_id');
function getRestOrderInfo(restUID){
    var orderCount = 0;
    var total = 0;
    var orders = '';
    var newOrders = 0;
    var cancelledOrders = 0;
    var completedOrders = 0;
    database.child('customers/orders/').on('value', function (snapshot2) {
        snapshot2.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;

            if(orderObj.restaurantUid == restUID){
           		var proccess='<label class="btn btn-xs btn-success">New</label>';
				if(orderObj.proccess == 'Canceled'){
		            proccess='<label class="btn btn-xs btn-danger">Cancelled</label>';
		        }else if(orderObj.proccess == 'In Progress'){
		            proccess='<label class="btn btn-xs btn-primary">In Progress</label>';
		        }else if(orderObj.proccess == 'Completed'){
		            proccess='<label class="btn btn-xs btn-info">Completed</label>';
		        }else if(orderObj.proccess == 'Confirmed'){
		            proccess='<label class="btn btn-xs btn-dark">Confirmed</label>';
		        }else if(orderObj.proccess == 'Out Of Delivery'){
		            proccess='<label class="btn btn-xs btn-warning">Out Of Delivery</label>';
		        }

                orders += '<div class="col-md-4">'+
                 				'<div class="cust-order">'+
                 					'<div class="col-md-6 col-xs-12">'+
                 						'<img src="'+orderObj.photo+'">'+
                 					'</div>'+
                 					'<div class="col-md-6 col-xs-12 order-details">'+
                 						'<h5>#'+ orderObj.orderNo +'</h5>'+
                 						'<p class="desc">'+ orderObj.dishDesc+'<br> ID: '+orderObj.id+'</p>'+
                 						'<p class="date">'+orderDate+'</p>'+
                 						'<p>'+proccess+'</p>'+
                 						'<div class="row last">'+
                 							'<div class="col-xs-9 text-left">'+
                 								'<img src="'+orderObj.customer.photoURL+'"> '+orderObj.customer.displayName+
                 							'</div>'+
                 							'<div class="col-xs-3 text-right">$'+orderObj.totalPrice+'</div>'+
                 						'</div>'+
                 					'</div>'+
                 				'</div>'+
                 			'</div>';

                if(orderObj.status == 'New'){
                    newOrders+=1;
                }else if(orderObj.status == 'Canceled'){
                    cancelledOrders+=1;
                }else if(orderObj.status == 'Completed'){
                    completedOrders+=1;
                }
                
            }
            if(orderObj.restaurantUid == restUID && moment(orderDate,'DD/MM/YYYY').month()+1  == new Date().getMonth()+1 ){
                if(orderObj.status == 'Completed'){
                    total+= orderObj.totalPrice;   
                }
                orderCount+=1;
            }
        });
        $('.rest-prof label.number').html(orderCount);
        $('.rest-prof label.earned').html(total);
        $('.rest-prof label.id').html(restUID);
        $('p.rate.first i').after(completedOrders);
        $('p.rate.second i').after(cancelledOrders);
        $('p.rate.third i').after(newOrders);
        $('.my-orders').html(orders);
    });
}

function getRestMenu(restUID){
    var orderCount = 0;
    var total = 0;
    database.child('restaurants/dishes/'+restUID).on('value', function (snapshot2) {
        var menus = '';
        $('.my-menu').empty();
        snapshot2.forEach(function(dishSnapshot) {
            var dishObj = dishSnapshot.val();
       		var dishes = '';           
       		var types = '';
       		var times = '';
       		var price = 0;
       		var rates = 0;
       		var rateCount = 0;
       		for (var i = 0; i < dishObj.complementList.length; i++) {
	            dishes += dishObj.complementList[i].amount + ' '+dishObj.complementList[i].name+', ';
	            price = parseFloat(parseFloat(price) + parseFloat(dishObj.complementList[i].price));
	        }
	        for (var i = 0; i < dishObj.drinkList.length; i++) {
	            dishes += dishObj.drinkList[i].amount + ' '+dishObj.drinkList[i].name+', ';
	            price = parseFloat(parseFloat(price) + parseFloat(dishObj.drinkList[i].price));
	        }
	        for (var i = 0; i < dishObj.foodTypeList.length; i++) {
	            types += dishObj.foodTypeList[i].foodType+', ';
	        }
	        for (var i = 0; i < dishObj.times.length; i++) {
	            times += dishObj.times[i].day+ ' '+ dishObj.times[i].from+'-'+dishObj.times[i].to +'<br> ';
	        }
	        $.each(dishObj.rates,function(index,item){
				rates+= item.rate;
				rateCount+= 1;
			});

			var rate = rateCount != 0 ? parseFloat(rates/rateCount).toFixed(1) : 'No Rate';

            menus += '<div class="col-md-4">'+
            			'<div class="cust-order">'+
            				'<div class="col-md-6 col-xs-12">'+
            					'<img src="'+dishObj.photo+'">'+
            				'</div>'+
							'<div class="col-md-6 col-xs-12 order-details">'+            				
								'<h5>'+dishObj.dishName+'</h5>'+
								'<p class="desc dish-desc">'+dishObj.dishDesc+'<br>ID: '+dishSnapshot.key+'</p>'+
            					'<p class="date dish-desc">'+dishes+'</p>'+
            					'<p class="date dish-desc">Drinks '+dishObj.minDrinks+':'+dishObj.maxDrinks+'</p>'+
            					'<p class="date dish-desc">'+types+'</p>'+
								'<div class="row last">'+
									'<div class="col-xs-6 text-left"><p class="stars"> <i class="fa fa-star"></i> '+rate+'</p></div>'+
									'<div class="col-xs-6 text-right">$'+price+'</div>'+
								'</div>'+
            				'</div>'+
            			'</div>'+
            		 '</div>';



        });
        $('.my-menu').html(menus);
    });
}

function getRestDelivery(restUID){
	var delivery = '';
    database.child('restaurants/deliveryStaff/').on('value', function (snapshot2) {
        snapshot2.forEach(function(orderSnapshot) {
            var deliveryObj = orderSnapshot.val();
            if(deliveryObj.restaurantUid == restUID){
                delivery += '<div class="col-md-4">'+
                 				'<div class="cust-order">'+
                 					'<div class="col-md-6 col-xs-12">'+
                 						'<img src="'+deliveryObj.photo+'">'+
                 					'</div>'+
                 					'<div class="col-md-6 col-xs-12 order-details">'+
                 						'<h5>'+ deliveryObj.name +'</h5>'+
                 						'<p class="desc dish-desc">'+deliveryObj.description+'</p>'+
                 						'<p class="date dish-desc"><i class="fa fa-envelope"></i> '+deliveryObj.email+'</p>'+
                 						'<p class="date dish-desc"><i class="fa fa-phone"></i> '+deliveryObj.phone+'</p>'+
                 						'<p class="date dish-desc"><i class="fab fa-paypal"></i> '+deliveryObj.paypal+'</p>'+
                 						'<p class="find-p"><label class="btn btn-xs btn-success">Active</label></p>'+
                 						'<div class="row last">'+
                 							'<div class="col-xs-12 text-left"><p class="stars"> License: '+deliveryObj.driverLicense+'</p></div>'+
                 						'</div>'+
                 					'</div>'+
                 				'</div>'+
                 			'</div>';

            }
        });
        $('.my-delivery').html(delivery);
    });
}


getRestOrderInfo(restUID);
getRestMenu(restUID);
getRestDelivery(restUID);

database.child('restaurants/profile/'+restUID).on('value', function (snapshot) {
	var restObj = snapshot.val();
	$('.rest-prof h5').html(restObj.name);
	$('.rest-prof p.desc').html(restObj.description);
	$('.cust-profile .row img').attr('src',restObj.photo);
	var rates = 0;
	var rateCount = 0;
	$.each(restObj.rates,function(index,item){
		rates+= item.rate;
		rateCount+= 1;
	});
	
	var rate = rateCount != 0 ? parseFloat(rates/rateCount).toFixed(1) : 'No Rate';
	$('.rest-prof p.stars .value').html(rate);
	$('.rest-prof label.email').html(restObj.email);
	$('.rest-prof label.phone').html(restObj.phone);
	$('.rest-prof label.paypal').html(restObj.paypal);
	$('.rest-prof label.address').html(restObj.deliveryOptions.restaurantLocation.address);
	$('label.delivery').html(restObj.deliveryOptions.delivery == false ? 'false' : restObj.deliveryOptions.delivery );
	$('label.delivery-location').html(restObj.deliveryOptions.deliveryLocation.address);
	$('label.delivery-price').html(restObj.deliveryOptions.deliveryPrice);
	$('label.pick-up').html(restObj.deliveryOptions.pickUp == false ? 'false' : restObj.deliveryOptions.pickUp);

	$.each(restObj.times , function(index,item){
		var myString = '<div class="col-xs-12 pd-l-0">'+
							'<div class="form-group">'+
								'<div class="col-xs-6">'+
									'<label><i class="fa fa-calendar"></i>'+item.day+'</label>'+
								'</div>'+
								'<div class="col-xs-6">'+
									'<label class="label-2">'+item.from +' - '+ item.to +'</label>'+
								'</div>'+
							'</div>'+
						'</div>';
		$('.chart-data .row.more-info.my-times').append(myString);
	});


});

