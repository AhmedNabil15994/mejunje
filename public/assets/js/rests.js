database.child('restaurants/profile/').once('value', function (snapshot) {
    var i = 0;
    var itemCount = 0;
    snapshot.forEach(function(userSnapshot) {
        $('#example tbody tr.odd').empty();
        var restaurantObj = userSnapshot.val();
        var restUID = restaurantObj.uid;
        var currentMonth = new Date().getMonth()+1;
        var statusButton = '<button class="btn-xs btn-success" data-area="'+restUID+'"> <i class="fa fa-check"></i></button>';
        var paidButton = '<button class="btn-xs btn-warning paid" data-area="'+restUID+'"> Pay</button>';
        var statusLabel = '<label class="label label-danger">In Active</label>';
        if(restaurantObj.status == 'active'){
            statusButton = '<button class="btn-xs btn-danger" data-area="'+restUID+'"> <i class="fa fa-times"></i></button>';
            statusLabel = '<label class="label label-success">Active</label>';
        }
        if(restaurantObj.paids){
            $.each(restaurantObj.paids,function(index,item){
                if(item.paidForMonth == currentMonth){
                    paidButton = '<button class="btn-xs btn-info"> Paid</button>';
                }
            });
        }
        itemCount+=1;
        var myElement = '<tr class="tr" id="'+restUID+'">'+
                            '<td>'+ restUID +'</td>'+
                            '<td>'+
                                '<img src="'+restaurantObj.photo+'" alt="">'+
                                '<span>'+restaurantObj.name+'</span>'+
                            '</td>'+
                            '<td>'+restaurantObj.phone+'</td>'+
                            '<td>'+restaurantObj.email+'</td>'+
                            '<td>'+restaurantObj.paypal+'</td>'+
                            '<td>'+getRestInfo(restUID)+'</td>'+
                            '<td>'+getRestInfo(restUID)+'</td>'+
                            '<td>'+restaurantObj.startDate+'</td>'+
                            '<td>'+statusLabel+'</td>'+
                            '<td>'+
                                '<button class="btn btn-xs btn-primary view" data-area="'+restUID+'"><i class="fa fa-eye"></i></button>'+
                                statusButton+
                                paidButton+
                            '</td>'+
                        '</tr>';
        $('#example tbody').append(myElement);
        $('.extra_title span.item-counts').html(' ('+itemCount+')');
    });
    oTable = $('#example').DataTable({
        'pageLength': 10,
    });
    $('.search-data').keyup(function(){
          oTable.search($(this).val()).draw() ;
    })
});

function getRestInfo(restUID){
    var orderCount = 0;
    var total = 0;
    database.child('customers/orders/').on('value', function (snapshot2) {
        snapshot2.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            if(orderObj.restaurantUid == restUID && moment(orderDate,'DD/MM/YYYY').month()+1  == new Date().getMonth()+1 ){
                if(orderObj.status == 'Completed'){
                    total+= orderObj.totalPrice;   
                }
                orderCount+=1;
            }
        });
        $('tr#'+restUID+' td:nth-of-type(7)').html(orderCount);
        $('tr#'+restUID+' td:nth-of-type(6)').html(total);
    });
}

$(document).on('click','tr.tr td .btn-danger',function(){
    var restUID = $(this).data('area');
    database.child('restaurants/profile/'+restUID).update({
        status: 'inactive',
    });
    $(this).parents('tr').children('td:nth-of-type(9)').children('.label-success').removeClass('label-success').addClass('label-danger').html('Inactive');
    $(this).removeClass('btn-danger').addClass('btn-success').children('i.fa-times').removeClass('fa-times').addClass('fa-check');
});

$(document).on('click','tr.tr td .btn-success',function(){
    var restUID = $(this).data('area');
    database.child('restaurants/profile/'+restUID).update({
        status: 'active',
    });
    $(this).parents('tr').children('td:nth-of-type(9)').children('.label-danger').removeClass('label-danger').addClass('label-success').html('Active');
    $(this).removeClass('btn-success').addClass('btn-danger').children('i.fa-check').removeClass('fa-check').addClass('fa-times');
});

$(document).on('click','tr.tr td .view',function(){
    var restUID = $(this).data('area');
    setCookie('rest_id', restUID,1);
    window.location.href = '/rest-profile';
});

$(document).on('click','.btn-warning.paid',function(e){
    e.preventDefault();
    e.stopPropagation();
    var restUID = $(this).data('area');
    var today = moment().format('DD/MM/YYYY');

    database.child('customers/orders/').on('value', function (snapshot2) {
        var total = 0;
        snapshot2.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            if(orderObj.restaurantUid == restUID && moment(orderDate,'DD/MM/YYYY').month()+1  == new Date().getMonth()+1 ){
                if(orderObj.status == 'Completed' && orderObj.paymentMethod == 'Credit Card'){
                    total+= orderObj.totalPrice;   
                }
            }
        });
        database.child('restaurants/profile/'+restUID+'/paids').push({
            date: today.toString(),
            total: total.toString(),
            paid: true,
            paidForMonth: new Date().getMonth()+1,
            paidForYear: moment().format('YYYY'),
        });
    });
    var elemParent = $(this).parent('td');
    $(this).remove();
    elemParent.append('<button class="btn-xs btn-info"> Paid</button>');
});