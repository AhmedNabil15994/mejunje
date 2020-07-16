database.child('customers/orders/').once('value', function (snapshot) {
    var x = 0;
    var itemCount = 0;
    snapshot.forEach(function(userSnapshot) {
        $('#example tbody tr.odd').empty();
        var orderObj = userSnapshot.val();
        var dishName = '';
        for (var i = 0; i < orderObj.complementList.length; i++) {
            dishName += orderObj.complementList[i].amount + ' '+orderObj.complementList[i].name+', ';
        }
        for (var i = 0; i < orderObj.drinkList.length; i++) {
            dishName += orderObj.drinkList[i].amount + ' '+orderObj.drinkList[i].name+', ';
        }
        var status='<label class="label label-success">New</label>';
        var proccess='<label class="label label-success">New</label>';

        if(orderObj.status == 'Canceled'){
            status='<label class="label label-danger">Cancelled</label>';
        }else if(orderObj.status == 'Completed'){
            status='<label class="label label-info">Completed</label>';
        }

        if(orderObj.proccess == 'Canceled'){
            proccess='<label class="label label-danger">Cancelled</label>';
        }else if(orderObj.proccess == 'In Progress'){
            proccess='<label class="label label-primary">In Progress</label>';
        }else if(orderObj.proccess == 'Completed'){
            proccess='<label class="label label-info">Completed</label>';
        }else if(orderObj.proccess == 'Confirmed'){
            proccess='<label class="label label-dark">Confirmed</label>';
        }else if(orderObj.proccess == 'Out Of Delivery'){
            proccess='<label class="label label-warning">Out Of Delivery</label>';
        }
        var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
        itemCount+=1;

        var myElement = '<tr class="tr" id="'+orderObj.id+'">'+
                            '<td>'+ userSnapshot.key +'</td>'+
                            '<td>'+
                                '<img src="'+orderObj.photo+'" alt="">'+
                                '<span>'+orderObj.orderNo+'</span>'+
                            '</td>'+
                            '<td>'+
                                '<img src="'+orderObj.customer.photoURL+'" alt="">'+
                                '<span>'+orderObj.customer.displayName+'</span>'+
                            '</td>'+
                            '<td>'+
                                '<img src="'+orderObj.restaurant.photo+'" alt="">'+
                                '<span>'+orderObj.restaurant.name+'</span>'+
                            '</td>'+
                            '<td>'+dishName+'</td>'+
                            '<td>'+
                                '<p>'+orderDate+'</p>'+
                                '<p>'+orderObj.time+'</p>'+
                            '</td>'+
                            '<td>'+
                                '<p>'+orderObj.totalPrice+'</p>'+
                                '<p>'+orderObj.paymentMethod+'</p>'+
                            '</td>'+
                            '<td>'+proccess+'</td>'+
                            '<td>'+status+'</td>'+
                            '<td>'+
                                '<button class="btn btn-xs btn-default view" data-area="'+userSnapshot.key+'">View</button>'+
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

$(document).on('click','tr.tr td .view',function(){
    var order_id = $(this).data('area');
    setCookie('order_id', order_id,1);
    window.location.href = '/order-profile';
});
