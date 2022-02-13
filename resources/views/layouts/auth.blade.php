<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    .main-wrapper {
        height: 100vh;  
    }
  </style>
</head>
<body class="hold-transition login-page " style="height: 100vh !important">
    <div class="main-wrapper w-100 d-flex align-items-center justify-content-center">
        <div class="auth-wrapper w-100">   
            @yield('content')
        </div>
    </div>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
