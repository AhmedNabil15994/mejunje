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

    <style type="text/css" media="screen">
      body{
        background: linear-gradient(to right, #F14441 , #F95F55);
        color: #73879C;
        font-family: "Helvetica Neue",Roboto,Arial,"Droid Sans",sans-serif;
        font-size: 13px;
        font-weight: 400;
        line-height: 1.471;
        min-height: 100vh;
      }
      .login-form-2{
          background-color: #FFF;
          border-radius: 20px;
          box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
          padding: 50px 20px;
      }
      .login-form-2 img{
        display: block;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid #DDD;
        margin: auto;
        margin-bottom: 20px;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
      }
      .login-form-2 h3{
          text-align: center;
          margin-bottom:12%;
          font: 400 25px Helvetica,Arial,sans-serif;
          letter-spacing: -.05em;
          line-height: 20px;
          margin: 10px 0 30px;
          position: relative;
      }
      .login-form-2 h3:after, 
      .login-form-2 h3:before {
          content: "";
          height: 1px;
          position: absolute;
          top: 10px;
          width: 20%;
      }
      .login-form-2 h3:before {
          background: #ccc;
          background: linear-gradient(right,#7e7e7e 0,#fff 100%);
          left: 10%;
      }
      .login-form-2 h3:after {
          background: #ccc;
          background: linear-gradient(left,#7e7e7e 0,#fff 100%);
          right: 10%;
      }
      .form-controls{
        padding-left: 15px;
        height: 45px;
        width: 80%;
        display: block;
        margin: auto;
        border-radius: 50px;
        margin-top: 10px;
        border: 1px solid #ccc;
      }
      .form-controls:focus{
        outline: 0 !important;
        color: #F14441;
        border: 1px solid #F14441;
      }
      .form-controls:focus::placeholder{
        color: #F14441;
      }
      .btnSubmit{
          width: 80%;
          display: block;
          margin: auto;
          margin-top: 30px;
          border: 1px solid #DDD;
          color: #FFF;
          background-color: #F14441;
          padding: 10px 15px;
          font-size: 18px;
          border-radius: 50px;
          margin-bottom: 25px;
      }
      .row{
        margin: 0;
        padding-top: 25vh;
      }
    </style>
  </head>

  <body>
    <div class="row text-center">
        <div class="col-xs-12 col-md-4 col-md-offset-4 login-form-2">
          <div class="login-logo">
              <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt=""/>
          </div>
          <h3>Login To Mejunje</h3>
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