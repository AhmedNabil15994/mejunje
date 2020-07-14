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

    <link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/login.css') }}">
  </head>

  <body>
    <div class="row text-center">
        <div class="login-form-2">
          <div class="login-logo">
              <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt=""/>
          </div>
          <h3>Login To Mejunje</h3>
            <form method="get" action="{{ URL::to('/dashboard') }}">
              <div class="form-group">
                  <input type="text" class="form-controls" placeholder="Your Email *" value="" />
              </div>
              <div class="form-group">
                  <input type="password" class="form-controls" placeholder="Your Password *" value="" />
              </div>
              <div class="form-group">
                  <input type="submit" class="btnSubmit" value="Login" />
              </div>
          </form>
        </div>
    </div>
  </body>

</html>