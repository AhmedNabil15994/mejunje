var order_id = getCookie('order_id');

database.child('customers/orders/'+order_id).on('value', function (snapshot) {
    var orderObj = snapshot.val();
    $('.cust-profile h5').html(custObj.displayName);
    $('.cust-profile .row img').attr('src',custObj.photoURL);
    $('.cust-profile input.email').val(custObj.email);
    $('.cust-profile input.login_type').val(custObj.login);
    $('.cust-profile textarea.address').val(custObj.location.address);

});
