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

function getIncomeByWeek(){
    var data = [0,0,0,0,0,0,0];
    var labels = [];
    var today = moment().format('DD/MM/YYYY');
    database.child('customers/orders/').on('value', function (snapshot) {
        snapshot.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            var diff = moment(today,'DD/MM/YYYY').diff(moment(orderDate,'DD/MM/YYYY'), 'days');
            if( diff <= 6 && orderObj.status == 'Completed' ){
                data[diff] = data[diff] + orderObj.totalPrice; 
            }
        });
        labels[0]= moment().format('ddd');
        var days = [];
        days[0] = moment();
        for (var i = 1; i < 7; i++) {
            days[i] = moment(days[i-1]).subtract('day',1);
            labels[i] = moment(days[i]).format('ddd');
        }

        data = data.reverse(); 
        labels = labels.reverse(); 
        dailySales($('#myChart'),labels,data);
    });

}

function getIncomeByMonth(){
    var data = [0,0,0,0,0,0];
    var currentMonth = moment().format('MM');
    var lastPeriod = '26-30';
    var endOfMonth = moment().endOf('month').format('D');
    if(currentMonth == 1 || currentMonth == 3 || currentMonth == 5 || currentMonth == 7 || currentMonth == 8 || currentMonth == 10 || currentMonth == 12){
        lastPeriod = '26-31';
    }else if (currentMonth == 2) {
        lastPeriod = '26-'+ endOfMonth;        
    }
    var labels = ['1-5','6-10','11-15','16-20','21-25',lastPeriod];
    database.child('customers/orders/').on('value', function (snapshot) {
        snapshot.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            if(orderObj.dateComponents.month == currentMonth && orderObj.status == 'Completed'){
                if(orderObj.dateComponents.day >= 1 && orderObj.dateComponents.day <= 5 ){
                    data[0] = data[0] + orderObj.totalPrice; 
                }else if(orderObj.dateComponents.day >= 6 && orderObj.dateComponents.day <= 10 ){
                    data[1] = data[1] + orderObj.totalPrice; 
                }else if(orderObj.dateComponents.day >= 11 && orderObj.dateComponents.day <= 15 ){
                    data[2] = data[2] + orderObj.totalPrice; 
                }else if(orderObj.dateComponents.day >= 16 && orderObj.dateComponents.day <= 20 ){
                    data[3] = data[3] + orderObj.totalPrice; 
                }else if(orderObj.dateComponents.day >= 21 && orderObj.dateComponents.day <= 25 ){
                    data[4] = data[4] + orderObj.totalPrice; 
                }else if(orderObj.dateComponents.day >= 26 && orderObj.dateComponents.day <= endOfMonth ){
                    data[5] = data[5] + orderObj.totalPrice; 
                }
            }
        });
        dailySales($('#myChart'),labels,data);
    });
}

function getIncomeByYear(){
    var data = [0,0,0,0,0,0,0,0,0,0,0,0];
    var currentYear = moment().format('YYYY');
    var labels = ['Jan','Feb','MAr','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    database.child('customers/orders/').on('value', function (snapshot) {
        snapshot.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            if(orderObj.dateComponents.year == currentYear && orderObj.status == 'Completed'){
                data[parseInt(orderObj.dateComponents.month)-1] = data[parseInt(orderObj.dateComponents.month)-1] + orderObj.totalPrice;
            }
        });
        dailySales($('#myChart'),labels,data);
    });
}

function compare( a, b ) {
    if ( a.value > b.value ){
        return -1;
    }
    if ( a.value < b.value ){
        return 1;
    }
    return 0;
}


function getRevenueToday(){
    var rests = [];
    var data = [];
    var today = moment().format('DD/MM/YYYY');
    database.child('customers/orders/').on('value', function (snapshot) {
        snapshot.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            var myOrderObj = {
                'label': orderObj.restaurant.name,
                'value': 0,
            };
            if(orderDate == today && orderObj.status == 'Completed'){
                if ($.inArray(orderObj.restaurant.uid, $.map(rests, function(v) { return v[0]; })) > -1) {
                    for (var i = 0; i < rests.length; i++) {
                        if(rests[i][0] == orderObj.restaurant.uid){
                            var myObj = rests[i][1];
                            myObj.value += orderObj.totalPrice; 
                        }
                    }
                }else{
                    myOrderObj.value = orderObj.totalPrice;
                    rests.push([orderObj.restaurant.uid,myOrderObj]);
                }
            }
        });
        for (var i = 0; i < rests.length; i++) {
            data.push(rests[i][1]);
        }
        data.sort( compare );
        data = data.slice(0, 4);
        revenueChange(data);
        if(data.length == 0){
            revenueChange([{'label':'No Sales Today Till now',value:'0'}]);
        }
    });
}

function getRevenueMonth(){
    var rests = [];
    var data = [];
    var currentMonth = moment().format('MM');
    database.child('customers/orders/').on('value', function (snapshot) {
        snapshot.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var myOrderObj = {
                'label': orderObj.restaurant.name,
                'value': 0,
            };
            if(orderObj.dateComponents.month == currentMonth && orderObj.status == 'Completed'){
                if ($.inArray(orderObj.restaurant.uid, $.map(rests, function(v) { return v[0]; })) > -1) {
                    for (var i = 0; i < rests.length; i++) {
                        if(rests[i][0] == orderObj.restaurant.uid){
                            var myObj = rests[i][1];
                            myObj.value += orderObj.totalPrice; 
                        }
                    }
                }else{
                    myOrderObj.value = orderObj.totalPrice;
                    rests.push([orderObj.restaurant.uid,myOrderObj]);
                }
            }
        });
        for (var i = 0; i < rests.length; i++) {
            data.push(rests[i][1]);
        }
        data.sort( compare );
        data = data.slice(0, 4);
        revenueChange(data);
        if(data.length == 0){
            revenueChange([{'label':'',value:'0'}]);
        }
    });
}

function getRevenueYear(){
    var rests = [];
    var data = [];
    var currentYear = moment().format('YYYY');
    database.child('customers/orders/').on('value', function (snapshot) {
        snapshot.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            var myOrderObj = {
                'label': orderObj.restaurant.name,
                'value': 0,
            };
            if(orderObj.dateComponents.year == currentYear && orderObj.status == 'Completed'){
                if ($.inArray(orderObj.restaurant.uid, $.map(rests, function(v) { return v[0]; })) > -1) {
                    for (var i = 0; i < rests.length; i++) {
                        if(rests[i][0] == orderObj.restaurant.uid){
                            var myObj = rests[i][1];
                            myObj.value += orderObj.totalPrice; 
                        }
                    }
                }else{
                    myOrderObj.value = orderObj.totalPrice;
                    rests.push([orderObj.restaurant.uid,myOrderObj]);
                }
            }
        });
        for (var i = 0; i < rests.length; i++) {
            data.push(rests[i][1]);
        }
        data.sort( compare );
        data = data.slice(0, 4);
        revenueChange(data);
        if(data.length == 0){
            revenueChange([{'label':'',value:'0'}]);
        }
    });
}

getRevenueToday();
getIncomeByWeek();

$('.second-menu.actions a.dropdown-item').on('click',function(e){
    e.preventDefault();
    e.stopPropagation();
    if($(this).is(":first-of-type")){
        getIncomeByWeek();
    }else if($(this).is(":nth-of-type(2)")){
        getIncomeByMonth();
    }else{
        getIncomeByYear();
    }
});

$('.first-menu.actions a.dropdown-item').on('click',function(e){
    e.preventDefault();
    e.stopPropagation();
    if($(this).is(":first-of-type")){
        $('#kt_chart_revenue_change').empty();
        getRevenueToday();
    }else if($(this).is(":nth-of-type(2)")){
        $('#kt_chart_revenue_change').empty();
        getRevenueMonth();
    }else{
        $('#kt_chart_revenue_change').empty();
        getRevenueYear();
    }
});