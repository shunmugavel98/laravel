<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

</head>
<body class="bg-gradient-primary">
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
                  </div>
               
                 <form class="" action="{{URL::to('/logs')}}" method="post">
                   {{ csrf_field() }}
                  <h1 class="login-title">Login</h1>
         <div class="form-group">
        <input type="text" class="login-input" name="name" placeholder="Username" autofocus="true"/></div>
         <div class="form-group">
        <input type="password" class="login-input" name="password" placeholder="Password"/></div>
         <div class="form-group">
         <input type="submit" value="Login" name="submit" class="login-button"/></div>
        <p class="link">Don't have an account? <a href="{{URL::to('/register')}}">Registration Now</a></p>
  </form>


<script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/bootstrap.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
