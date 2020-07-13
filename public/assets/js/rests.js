database.child('restaurants/profile/').once('value', function (snapshot) {
    var i = 0;
    snapshot.forEach(function(userSnapshot) {
        $('#example tbody tr.odd').empty();
        var restaurantObj = userSnapshot.val();
        var restUID = restaurantObj.uid;

        var statusButton = '<button class="btn-xs btn-success" data-area="'+restUID+'"> <i class="fa fa-check"></i></button>';
        var statusLabel = '<label class="label label-danger">In Active</label>';
        if(restaurantObj.status == 'active'){
            statusButton = '<button class="btn-xs btn-danger" data-area="'+restUID+'"> <i class="fa fa-times"></i></button>';
            statusLabel = '<label class="label label-success">Active</label>';
        }

        var myElement = '<tr class="tr" id="'+restUID+'">'+
                            '<td>'+ ++i +'</td>'+
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
                                '<button class="btn-xs btn-warning"> Paid</button>'+
                            '</td>'+
                        '</tr>';
        $('#example tbody').append(myElement);
    });
    $('#example').DataTable();
});

function getRestInfo(restUID){
    var orderCount = 0;
    var total = 0;
    database.child('customers/orders/').on('value', function (snapshot2) {
        snapshot2.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            if(orderObj.restaurantUid == restUID && moment(orderObj.date,'DD/MM/YYYY').month()+1  == new Date().getMonth()+1 ){
                total+= orderObj.totalPrice;
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