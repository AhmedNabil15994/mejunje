var custUID = getCookie('cust_id');
function getRestOrderInfo(custUID){
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
            if(orderObj.customer.uid == custUID){
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


                if(orderObj.status == 'New'){
                    newOrders+=1;
                }else if(orderObj.status == 'Canceled'){
                    cancelledOrders+=1;
                }else if(orderObj.status == 'Completed'){
                    completedOrders+=1;
                }
                orders += '<div class="col-md-4">'+
                                '<div class="cust-order">'+
                                    '<div class="col-md-6 col-xs-12">'+
                                        '<img src="'+orderObj.photo+'">'+
                                    '</div>'+
                                    '<div class="col-md-6 col-xs-12 order-details">'+
                                        '<h5>#'+ orderObj.orderNo +'</h5>'+
                                        '<p class="desc">'+ orderObj.dishDesc+'</p>'+
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

            }
            if(orderObj.customer.uid == custUID && moment(orderDate,'DD/MM/YYYY').month()+1  == new Date().getMonth()+1 ){
                if(orderObj.status == 'Completed'){
                    total+= orderObj.totalPrice;   
                }
                orderCount+=1;
            }
        });
        $('.cust-profile input.number').val(orderCount);
        $('.cust-profile input.paid').val(total > 0 ? total : 0);
        $('p.rate.first i').after(completedOrders);
        $('p.rate.second i').after(cancelledOrders);
        $('p.rate.third i').after(newOrders);
        $('.my-orders').html(orders);
    });
}


getRestOrderInfo(custUID);

database.child('customers/profiles/'+custUID).on('value', function (snapshot) {
    var custObj = snapshot.val();
    $('.cust-profile h5').html(custObj.displayName);
    $('.cust-profile input.id').val(custObj.uid);
    $('.cust-profile .row img').attr('src',custObj.photoURL);
    $('.cust-profile input.email').val(custObj.email);
    $('.cust-profile input.login_type').val(custObj.login);
    $('.cust-profile textarea.address').val(custObj.location.address);

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
            if(orderObj.customer.uid == custUID && diff <= 6 && orderObj.status == 'Completed' ){
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
    var data = [0,0,0,0,0,0,0,0,0,0,0,0];
    var currentYear = moment().format('YYYY');
    var labels = ['Jan','Feb','MAr','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    database.child('customers/orders/').on('value', function (snapshot) {
        snapshot.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            if(orderObj.customer.uid == custUID && orderObj.dateComponents.year == currentYear && orderObj.status == 'Completed'){
                data[parseInt(orderObj.dateComponents.month)-1] = data[parseInt(orderObj.dateComponents.month)-1] + orderObj.totalPrice;
            }
        });
        dailySales($('#myChart'),labels,data);
    });
}

function getIncomeByYear(){
    var data = [0,0,0,0,0,0,0,0,0,0,0,0];
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
                if(orderObj.customer.uid == custUID && orderObj.dateComponents.year == labels[i] && orderObj.status == 'Completed'){
                    data[i] = data[i] + orderObj.totalPrice;
                }
            }
        });
        dailySales($('#myChart'),labels,data);
    });
}

getIncomeByWeek();

$('.actions a.dropdown-item').on('click',function(e){
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