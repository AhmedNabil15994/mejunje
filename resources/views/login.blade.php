<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mejunje | Login </title>
    <link rel="icon" href="{{ asset('assets/images/logo.jpeg') }}" type="image/ico" />
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/login.css') }}">
    <script type="text/javascript">
        var keyValue = document.cookie.match('(^|;) ?login_auth=([^;]*)(;|$)');
        var valValue = keyValue ? keyValue[2] : null;
        if(valValue == 1){
            window.location.href='/dashboard';
        }
    </script>

  </head>

  <body>
    <div class="row text-center">
        <div class="login-form-2">
          <div class="login-logo">
              <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt=""/>
          </div>
          <h3>Login To Mejunje</h3>
          <div class="form-group">
              <input type="text" class="form-controls email" placeholder="Your Email *" value="" />
          </div>
          <div class="form-group">
              <input type="password" class="form-controls password" placeholder="Your Password *" value="" />
          </div>
          <div class="form-group">
              <input type="submit" class="btnSubmit" value="Login" />
          </div>
        </div>
    </div>
    <script src="{{ URL::to('/assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/toastr.min.js')}}"></script>
    <script src="{{ URL::to('/assets/js/notify.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('/assets/js/login.js') }}" type="text/javascript"></script>
  </body>

</html>