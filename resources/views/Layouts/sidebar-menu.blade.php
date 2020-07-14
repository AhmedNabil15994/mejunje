<div id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
            <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="..." class="img-circle">
        </div>
        <div class="list-group list-group-flush">
            <div class="li-wrapper {{ Active(URL::to('/dashboard')) }}">
                <span class="pull-left"><i class="fas fa-chart-bar"></i></span>
                <a href="{{ URL::to('/dashboard') }}" class="pull-left {{ Active(URL::to('/dashboard')) }}">Dashboard </a>
                <i class="fa fa-chevron-right"></i>
                <div class="clearfix"></div>
            </div>
            <div class="li-wrapper {{ Active(URL::to('/rests')) }}">
                <span class="pull-left"><i class="fas fa-comment-dots"></i></span>
                <a href="{{ URL::to('/rests') }}" class="pull-left {{ Active(URL::to('/rests')) }}">Restaurant List</a>
                <i class="fa fa-chevron-right"></i>
                <div class="clearfix"></div>
            </div>
            <div class="li-wrapper {{ Active(URL::to('/customers')) }}">
                <span class="pull-left"><i class="fas fa-user"></i></span>
                <a href="{{ URL::to('/customers') }}" class="pull-left {{ Active(URL::to('/customers')) }}">Customer List</a>
                <i class="fa fa-chevron-right"></i>
                <div class="clearfix"></div>
            </div>
            <div class="li-wrapper {{ Active(URL::to('/orders')) }}">
                <span class="pull-left"><i class="fas fa-receipt"></i></span>
                <a href="{{ URL::to('/orders') }}" class="pull-left {{ Active(URL::to('/orders')) }}">Order List</a>
                <i class="fa fa-chevron-right"></i>
                <div class="clearfix"></div>
            </div>
            <div class="li-wrapper {{ Active(URL::to('/food-types')) }}">
                <span class="pull-left"><i class="fas fa-concierge-bell"></i></span>
                <a href="{{ URL::to('/food-types') }}" class="pull-left {{ Active(URL::to('/food-types')) }}">Food Types</a>
                <i class="fa fa-chevron-right"></i>
                <div class="clearfix"></div>
            </div>
            <div class="li-wrapper {{ Active(URL::to('/notifications')) }}">
                <span class="pull-left"><i class="fas fa-bell"></i></span>
                <a href="{{ URL::to('/notifications') }}" class="pull-left {{ Active(URL::to('/notifications')) }}">Notifications</a>
                <i class="fa fa-chevron-right"></i>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
