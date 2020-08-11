  var cb = function(start, end, label) {
  // console.log(start.toISOString(), end.toISOString(), label);
  $('#reportrange20 span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
};

var optionSet1 = {
  startDate: moment().subtract(29, 'days'),
  endDate: moment(),
  minDate: '01/01/2019',
  maxDate: '12/31/2030',
  dateLimit: {
  days: 60
  },
  showDropdowns: true,
  showWeekNumbers: true,
  timePicker: false,
  timePickerIncrement: 1,
  timePicker12Hour: true,
  ranges: {
  'Today': [moment(), moment()],
  'Yesterday': [moment().subtract(1, 'days'), moment()],
  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
  'This Month': [moment().startOf('month'), moment().endOf('month')],
  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
  },
  opens: 'right',
  buttonClasses: ['btn btn-default'],
  applyClass: 'btn-small btn-primary',
  cancelClass: 'btn-small',
  format: 'MM/DD/YYYY',
  separator: ' to ',
  locale: {
  applyLabel: 'Submit',
  cancelLabel: 'Clear',
  fromLabel: 'From',
  toLabel: 'To',
  customRangeLabel: 'Custom',
  daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
  monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
  firstDay: 1
  }
};

$('#reportrange20 span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
$('#reportrange20').daterangepicker(optionSet1, cb);
$('#options1').click(function() {
  $('#reportrange20').data('daterangepicker').setOptions(optionSet1, cb);
});
$('#options2').click(function() {
  $('#reportrange20').data('daterangepicker').setOptions(optionSet2, cb);
});
$('#destroy').click(function() {
  $('#reportrange20').data('daterangepicker').remove();
});

$('#reportrange20').on('apply.daterangepicker', function(ev, picker) {
    var from = picker.startDate.format('DD/MM/YYYY');
    var to = picker.endDate.format('DD/MM/YYYY');
    $('#example').DataTable().destroy();
    database.child('restaurants/profile/').once('value', function (snapshot) {
        var i = 0;
        var itemCount = 0;
        $('#example tbody').empty();
        
        snapshot.forEach(function(userSnapshot) {
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
                        paidButton = '<button class="btn-xs btn-info remove-pay" data-area="'+restUID+'" data-area2="'+index+'"> Paid</button>';
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
                                '<td>'+0+'</td>'+
                                '<td>'+0+'</td>'+
                                '<td>'+restaurantObj.startDate+'</td>'+
                                '<td>'+statusLabel+'</td>'+
                                '<td>'+
                                    '<button class="btn btn-xs btn-primary view" data-area="'+restUID+'"><i class="fa fa-eye"></i></button>'+
                                    statusButton+
                                    paidButton+
                                '</td>'+
                            '</tr>';
            $('#example tbody').append(myElement);
            getNewInfo(restUID,from,to);
            $('.extra_title span.item-counts').html(' ('+itemCount+')');
        });
        oTable = $('#example').DataTable({
            'pageLength': 10,
        });
        $('.search-data').keyup(function(){
              oTable.search($(this).val()).draw() ;
        });
    });
});


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
                    paidButton = '<button class="btn-xs btn-info remove-pay" data-area="'+restUID+'" data-area2="'+index+'"> Paid</button>';
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

function getNewInfo(restUID,from,to){
    var orderCount = 0;
    var total = 0;
    database.child('customers/orders/').on('value', function (snapshot2) {
        snapshot2.forEach(function(orderSnapshot) {
            var orderObj = orderSnapshot.val();
            var orderDate = orderObj.dateComponents.day+'/'+orderObj.dateComponents.month+'/'+orderObj.dateComponents.year;
            if(orderObj.restaurantUid == restUID && moment(orderDate,'DD/MM/YYYY')  >= moment(from,'DD/MM/YYYY') && moment(orderDate,'DD/MM/YYYY') <= moment(to,'DD/MM/YYYY')  ){
                if(orderObj.status == 'Completed'){
                    total+= orderObj.totalPrice;   
                }
                orderCount+=1;
            }
        });
        $('tr#'+restUID+' td:nth-of-type(7)').html(orderCount);
        $('tr#'+restUID+' td:nth-of-type(6)').html(total.toFixed(2));
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
    var elemParent = $(this).parent('td');
    var myElem = $(this);
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
        var myQuery = database.child('restaurants/profile/'+restUID+'/paids').push({
            date: today.toString(),
            total: total.toString(),
            paid: true,
            paidForMonth: new Date().getMonth()+1,
            paidForYear: moment().format('YYYY'),
        });
        var myKey = myQuery.getKey();
        myElem.remove();
        var paidButton = '<button class="btn-xs btn-info remove-pay" data-area="'+restUID+'" data-area2="'+myKey+'"> Paid</button>';
        elemParent.append(paidButton);
    });
});

$(document).on('click','.remove-pay',function(e){
    e.preventDefault();
    e.stopPropagation();
    var restUID = $(this).data('area');
    var payID = $(this).data('area2');

    database.child('restaurants/profile/'+restUID+'/paids'+'/'+payID).remove();
    var elemParent = $(this).parent('td');
    $(this).remove();
    elemParent.append( '<button class="btn-xs btn-warning paid" data-area="'+restUID+'"> Pay</button>');
});