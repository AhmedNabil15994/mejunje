database.child('customers/profiles/').once('value', function (snapshot) {
    var i = 0;
    var itemCount = 0;
    snapshot.forEach(function(userSnapshot) {
        $('#example tbody tr.odd').empty();
        var customerObj = userSnapshot.val();
        var custUID = customerObj.uid;
        if(custUID != null){
            itemCount+=1;
            var myElement = '<tr class="tr" id="'+custUID+'">'+
                            '<td>'+ custUID +'</td>'+
                            '<td>'+
                                '<img src="'+customerObj.photoURL+'" alt="">'+
                                '<span>'+customerObj.displayName+'</span>'+
                            '</td>'+
                            '<td>'+customerObj.email+'</td>'+
                            '<td><p>'+customerObj.location.address+'</p><p></p></td>'+
                            '<td>'+customerObj.login+'</td>'+
                            '<td>'+getCustInfo(custUID)+'</td>'+
                            '<td>'+getCustInfo(custUID)+'</td>'+
                            '<td>'+
                                '<button class="btn btn-xs btn-default view" data-area="'+customerObj.uid+'">View</button>'+
                            '</td>'+
                        '</tr>';
            $('#example tbody').append(myElement);
            $('.extra_title span.item-counts').html(' ('+itemCount+')');
        }
    });
    oTable = $('#example').DataTable();
    $('.search-data').keyup(function(){
          oTable.search($(this).val()).draw() ;
    })
});

function getCustInfo(custUID){
    var orderCount = 0;
    var total = 0;
    database.child('customers/orders/').on('value', function (snapshot2) {
        snapshot2.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;

            if(orderObj.customer.uid == custUID && moment(orderDate,'DD/MM/YYYY').month()+1  == new Date().getMonth()+1 ){
                if(orderObj.status == 'Completed'){
                    total+= orderObj.totalPrice;   
                }
                orderCount+=1;
            }
        });
        $('tr#'+custUID+' td:nth-of-type(6)').html(total);
        $('tr#'+custUID+' td:nth-of-type(7)').html(orderCount);
    });
}

$(document).on('click','tr.tr td .view',function(){
    var custUID = $(this).data('area');
    setCookie('cust_id', custUID,1);
    window.location.href = '/customer-profile';
});