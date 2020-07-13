<script src="{{ URL::to('/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/js/datatable.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/js/uikit.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/js/raphael.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/js/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/js/swiper.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/js/swiper.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/js/chart.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/plugins/bootstrap/js/bootstrap.bundle.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('/assets/plugins/moment/min/moment.min.js')}}"></script>
<script src="{{ URL::to('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="https://www.gstatic.com/firebasejs/7.16.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.16.0/firebase-analytics.js"></script>
<script src="{{ URL::to('/assets/js/main.js') }}" type="text/javascript"></script>

<script type="text/javascript">
	var firebaseConfig = {
        apiKey: "AIzaSyABT2CyTYpOeQPhBSmA_rSgbO_mjZlXBVU",
        authDomain: "mejunje.firebaseapp.com",
        databaseURL: "https://mejunje.firebaseio.com",
        projectId: "mejunje",
        storageBucket: "mejunje.appspot.com",
        messagingSenderId: "120580915213",
        appId: "1:120580915213:web:5acc9851829e00b3",
        measurementId: "G-X0SJFZW94Z"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    var database = firebase.database().ref();
</script>
@yield('scripts')