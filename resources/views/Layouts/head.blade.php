<link rel="icon" href="{{ URL::to('assets/images/logo.jpeg') }}" type="image/ico" />
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/all.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/morris.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/swiper.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/swiper.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/uikit.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/datatable.min.css') }}">
<link href="{{ URL::to('/assets/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
<link href="{{ URL::to('/assets/css/main.css')}}" rel="stylesheet">
<link href="{{ URL::to('/assets/css/responsive.css')}}" rel="stylesheet">
<script type="text/javascript">
    var keyValue = document.cookie.match('(^|;) ?login_auth=([^;]*)(;|$)');
    var valValue = keyValue ? keyValue[2] : null;
	if(valValue != 1){
        window.location.href='/login';
    }
</script>
