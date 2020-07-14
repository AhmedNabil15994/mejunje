var todayIncome = 0;
var newOrders = 0;
var cancelledOrders = 0;
var completedOrders = 0;
var todayCompletedOrders = 0;
var todayNewOrders = 0;
var todayCancelledOrders = 0;
database.child('customers/orders/').on('value', function (snapshot2) {
    snapshot2.forEach(function(orderSnapshot) {
        var orderObj = orderSnapshot.val();
        if(orderObj.status == 'New'){
            newOrders+=1;
        }else if(orderObj.status == 'Canceled'){
            cancelledOrders+=1;
        }else if(orderObj.status == 'Completed'){
            completedOrders+=1;
        }
        var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
        if(moment(orderDate,'DD/MM/YYYY')  == moment(new Date() , 'DD/MM/YYY') ){
            if(orderObj.status == 'Completed'){
                todayIncome+= orderObj.totalPrice;  
                todayCompletedOrders+=1; 
            }else if(orderObj.status == 'New'){
                todayNewOrders+=1; 
            }else if(orderObj.status == 'Canceled'){
                todayCancelledOrders+=1;
            }
        }
    });
    $('p.rate.today.first i').after(todayCompletedOrders);
    $('p.rate.today.second i').after(todayCancelledOrders);
    $('p.rate.today.third i').after(todayNewOrders);
    $('p.rate.all.first i').after(completedOrders);
    $('p.rate.all.second i').after(cancelledOrders);
    $('p.rate.all.third i').after(newOrders);
    $('p.cost').html('$ '+todayIncome);
});