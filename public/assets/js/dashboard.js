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
        var newData = [];
        var newLabels = [];
        for (var i = 0; i < labels.length; i++) {
            if(labels[i] == 'Mon'){
                newLabels[0] = labels[i];
                newData[0] = labels[i];
            }else if(labels[i] == 'Tue'){
                newLabels[1] = labels[i];
                newData[1] = labels[i];
            }else if(labels[i] == 'Wed'){
                newLabels[2] = labels[i];
                newData[2] = labels[i];
            }else if(labels[i] == 'Thu'){
                newLabels[3] = labels[i];
                newData[3] = labels[i];
            }else if(labels[i] == 'Fri'){
                newLabels[4] = labels[i];
                newData[4] = labels[i];
            }else if(labels[i] == 'Sat'){
                newLabels[5] = labels[i];
                newData[5] = labels[i];
            }else if(labels[i] == 'Sun'){
                newLabels[6] = labels[i];
                newData[6] = labels[i];
            }
        }
        dailySales($('#myChart'),newLabels,newData);
    });

}

function getIncomeByMonth(){
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

function getIncomeByYear(){
    var data = [0,0,0,0,0,0,0,0];
    var currentYear = moment().format('YYYY');
    var labels = [
            moment(moment().format('YYYY')).subtract('years', 3).format('YYYY'),
            moment(moment().format('YYYY')).subtract('years', 2).format('YYYY'),
            moment(moment().format('YYYY')).subtract('years', 1).format('YYYY'),
            moment().format('YYYY'),
            moment(moment().format('YYYY')).add('years', 1).format('YYYY'),
            moment(moment().format('YYYY')).add('years', 2).format('YYYY'),
            moment(moment().format('YYYY')).add('years', 3).format('YYYY'),

        ];
    database.child('customers/orders/').on('value', function (snapshot) {
        snapshot.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            for (var i = 0; i < labels.length; i++) {
                if(orderObj.dateComponents.year == labels[i] && orderObj.status == 'Completed'){
                    data[i] = data[i] + orderObj.totalPrice;
                }
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