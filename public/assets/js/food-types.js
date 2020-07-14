var total = 0;
database.child('customers/orders/').on('value', function (snapshot2) {
    snapshot2.forEach(function(orderSnapshot) {
        var orderObj = orderSnapshot.val();
        var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
        if(orderObj.status == 'Completed' && moment(orderDate,'DD/MM/YYYY').month()+1  == new Date().getMonth()+1 ){
            total+= orderObj.totalPrice;   
        }
    });
    $('.dashed h2 span.total').html('$ '+total); 
});

getRestMenu('American');

function getRestMenu(foodType){
    database.child('restaurants/dishes/').on('value', function (snapshot) {
        $('.my-menu').empty();
        var myDishes = '';
        var total = 0;
        snapshot.forEach(function(restSnapShot){
            var dishes = restSnapShot.val();
            restSnapShot.forEach(function(dishSnapShot){
                var dishObj = dishSnapShot.val();
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
                for (var i = 0; i < dishObj.times.length; i++) {
                    times += dishObj.times[i].day+ ' '+ dishObj.times[i].from+'-'+dishObj.times[i].to +'<br> ';
                }
                $.each(dishObj.rates,function(index,item){
                    rates+= item.rate;
                    rateCount+= 1;
                });

                var rate = rateCount != 0 ? parseFloat(rates/rateCount).toFixed(1) : 'No Rate';

                for (var i = 0; i < dishObj.foodTypeList.length; i++) {
                    types += dishObj.foodTypeList[i].foodType+', ';
                    if(foodType == dishObj.foodTypeList[i].foodType){
                        myDishes += '<div class="col-md-6">'+
                                '<div class="cust-order">'+
                                    '<div class="col-md-6 col-xs-12">'+
                                        '<img src="'+dishObj.photo+'">'+
                                    '</div>'+
                                    '<div class="col-md-6 col-xs-12 order-details">'+                           
                                        '<h5>'+dishObj.dishName+'</h5>'+
                                        '<p class="desc dish-desc">'+dishObj.dishDesc+'</p>'+
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
                    }
                }
            });
        });
        $('.my-menu').html(myDishes);
    });
}

$('.swiper-wrapper .swiper-slide').on('click',function(){
    if(!$(this).hasClass('swiper-slide-active')){
        $(this).addClass('swiper-slide-active').siblings('.swiper-slide').removeClass('swiper-slide-active');
        getRestMenu($(this).children('p').html());
    }
});

$('.swiper-button-next').on('click',function(){
    $('.swiper-container').animate({scrollLeft:'+=100'},250);
});
$('.swiper-button-prev').on('click',function(){
    $('.swiper-container').animate({scrollLeft:'-=100'},250);
});