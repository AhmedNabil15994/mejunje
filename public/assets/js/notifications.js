function getNots(myDate){
    $('.nots .col-md-10').empty();
    database.child('notification/adminNotification/').once('value', function (snapshot) {
        var i = 0;
        var itemCount = 0;
        var todayItemCount = 0;
        snapshot.forEach(function(userSnapshot) {
            $('#example tbody tr.odd').empty();
            var notificationObj = userSnapshot.val();
            var name = '';
            var photo = '';
            if(notificationObj.role == 'customer'){
                name = notificationObj.user.displayName;
                photo = notificationObj.user.photoURL;
            }else{
                name = notificationObj.user.name;
                photo = notificationObj.user.photo;
            }

            if(myDate != null){
                if(notificationObj.date == myDate){
                    todayItemCount+=1;
                    var myElement = '<div class="chart chart6 notif">'+
                        '<div class="row notif_row">'+
                            '<span class="dot"></span>'+
                            '<img src="'+photo+'" alt="">'+
                            '<span class="name">'+name+'</span>'+
                            '<span class="desc">'+notificationObj.text+'</span>'+
                            '<span class="time">'+notificationObj.date +' '+notificationObj.time+'</span>'+
                            '<div class="clearfix"></div>'+
                        '</div>'+
                    '</div>';
                }            
                $('.nots .col-md-10').append(myElement);
                $('.extra_title span.item-counts').html(' ('+todayItemCount+')');    
            }else{
                itemCount+=1;
                var myElement = '<div class="chart chart6 notif">'+
                    '<div class="row notif_row">'+
                        '<span class="dot"></span>'+
                        '<img src="'+photo+'" alt="">'+
                        '<span class="name">'+name+'</span>'+
                        '<span class="desc">'+notificationObj.text+'</span>'+
                        '<span class="time">'+notificationObj.date +' '+notificationObj.time+'</span>'+
                        '<div class="clearfix"></div>'+
                    '</div>'+
                '</div>';
            $('.nots .col-md-10').append(myElement);
            $('.extra_title span.item-counts').html(' ('+itemCount+')');
            }
        });
    });
}

getNots(null);
$('.form-control').datetimepicker({
    format: 'DD/MM/YYYY',
    defaultDate: new Date(),
});
$('.form-control').on('dp.change', function(e){
    var myDate = moment(e.date).format('DD/MM/YYYY'); 
    if(myDate){
        getNots(myDate);
    }
});
