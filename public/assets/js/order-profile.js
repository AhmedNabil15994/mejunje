var order_id = getCookie('order_id');

database.child('customers/orders/'+order_id).on('value', function (snapshot) {
    var orderObj = snapshot.val();
    var restObj = orderObj.restaurant;
    var custObj = orderObj.customer;
    var driverObj = orderObj.driver;
    var rates = 0;
    var rateCount = 0;
 	$.each(orderObj.rates,function(index,item){
		rates+= item.rate;
		rateCount+= 1;
	});
	var rate = rateCount != 0 ? parseFloat(rates/rateCount).toFixed(1) : 'No Rate';
	var dishes = '';      
	var drinks = '';      
    var types = '';
	for (var i = 0; i < orderObj.complementList.length; i++) {
        dishes += orderObj.complementList[i].amount + ' '+orderObj.complementList[i].name+' x '+orderObj.complementList[i].price+' $'+', ';
    }
    for (var i = 0; i < orderObj.drinkList.length; i++) {
        drinks += orderObj.drinkList[i].amount + ' '+orderObj.drinkList[i].name+' x '+orderObj.drinkList[i].price+' $'+', ';
    }
	for (var i = 0; i < orderObj.foodTypeList.length; i++) {
        types += orderObj.foodTypeList[i].foodType+', ';
    }

    var proccess='<label class="label-2 btn-xs label-success">New</label>';
	if(orderObj.proccess == 'Canceled'){
        proccess='<label class="label-2 btn-xs label-danger">Cancelled</label>';
    }else if(orderObj.proccess == 'In Progress'){
        proccess='<label class="label-2 btn-xs label-primary">In Progress</label>';
    }else if(orderObj.proccess == 'Completed'){
        proccess='<label class="label-2 btn-xs label-info">Completed</label>';
    }else if(orderObj.proccess == 'Confirmed'){
        proccess='<label class="label-2 btn-xs label-dark">Confirmed</label>';
    }else if(orderObj.proccess == 'Out Of Delivery'){
        proccess='<label class="label-2 btn-warning">Out Of Delivery</label>';
    }

    var status='<label class="label-2 btn-xs btn-success">New</label>';
	if(orderObj.status == 'Canceled'){
        status='<label class="label-2 btn-xs btn-danger">Cancelled</label>';
    }else if(orderObj.status == 'Completed'){
        status='<label class="label-2 btn-xs btn-info">Completed</label>';
    }

    getRestRate(restObj.uid);

    $('.order-data h5').html('#' + orderObj.orderNo);
    $('.order-data .row img').attr('src',orderObj.photo);
    $('.order-data p.desc').html(orderObj.dishDesc);
    $('.order-data p.stars:first-of-type b').html(rate);
    $('.order-data p.stars:last-of-type b').html(orderObj.totalPrice);
    $('.order-data .date').html(orderObj.date +' '+orderObj.time);
    $('.order-data .dish').html(dishes);
    $('.order-data .drink').html(drinks);
    $('.order-data .type').html(types);
    $('.order-data .payment').html(orderObj.paymentMethod);
    $('.order-data .proccess').html(proccess);
    $('.order-data .status').html(status);

    $('.customer-data h5').html(custObj.displayName);
    $('.customer-data p.desc.dish-desc').html('Login By: '+custObj.login);
    $('.customer-data .cust-email i').after(custObj.email);
    $('.customer-data .cust-address i').after(custObj.location.address);
    $('.customer-data img').attr('src',custObj.photoURL);

    if(driverObj == null){
		$('.tests.driver').hide();    	
    }

    $('.driver-data h5').html(driverObj.displayName);
    $('.driver-data img').attr('src',driverObj.photo);
    $('.driver-data .descr').html(driverObj.description);
    $('.driver-data .email i').after(driverObj.email);
    $('.driver-data .phone i').after(driverObj.phone);
    $('.driver-data .paypal i').after(driverObj.paypal);
    $('.driver-data .find-p label').html('Active');
    $('.driver-data .licen').html('License: '+driverObj.driverLicense);
});

function getRestRate(restUID){
	database.child('restaurants/profile/'+restUID).on('value', function (snapshot2) {
		var restObj = snapshot2.val();
		var rest_rates = 0;
		var rest_rateCount = 0;
		$.each(restObj.rates,function(index,item){
			rest_rates+= item.rate;
			rest_rateCount+= 1;
		});

		var rest_rate = rest_rateCount != 0 ? parseFloat(rest_rates/rest_rateCount).toFixed(1) : 'No Rate';
		$('.rest-data p.stars b').html(rest_rate);
		$('.rest-data h5').html(restObj.name);
		$('.rest-data p.desc').html(restObj.description);
		$('.rest-data .row img').attr('src',restObj.photo);
		$('.rest-data label.email').html(restObj.email);
		$('.rest-data label.phone').html(restObj.phone);
		$('.rest-data label.paypal').html(restObj.paypal);
		$('.rest-data label.address').html(restObj.deliveryOptions.restaurantLocation.address);
	});
	getRestOrderInfo(restUID);
}

function getRestOrderInfo(restUID){
    var orderCount = 0;
    var total = 0;
    var orders = '';
    database.child('customers/orders/').on('value', function (snapshot2) {
        snapshot2.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();           		
            if(orderObj.restaurantUid == restUID && moment(orderObj.date,'DD/MM/YYYY').month()+1  == new Date().getMonth()+1 ){
                if(orderObj.status == 'Completed'){
                    total+= orderObj.totalPrice;   
                }
                orderCount+=1;
            }
        });
        $('.rest-data label.number').html(orderCount);
        $('.rest-data label.earned').html(total);
    });
}
