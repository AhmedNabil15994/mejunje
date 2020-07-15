database.child('notification/adminNotification/').once('value', function (snapshot) {
    var i = 0;
    var itemCount = 0;
    snapshot.forEach(function(userSnapshot) {
        $('#example tbody tr.odd').empty();
        var notificationObj = userSnapshot.val();
        var name = '';
        var photo = '';
        itemCount+=1;
        if(notificationObj.role == 'customer'){
            name = notificationObj.user.displayName;
            photo = notificationObj.user.photoURL;
        }else{
            name = notificationObj.user.name;
            photo = notificationObj.user.photo;
        }
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
    });
});
