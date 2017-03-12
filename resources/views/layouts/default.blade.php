<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf" content="{!!csrf_token()!!}">

  <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/bootstrap.css">
  <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/style.css">
  <title>@yield('title','ELITE GENERATION')</title>
</head>
<body>
  <div class="bg">
    <div class="page">
      @yield('content')
    </div>
  </div>
  <script src="{!!asset('public/assets/frontend')!!}/js/jquery-1.11.2.min.js"></script>
  <script src="{!!asset('public/assets/frontend')!!}/js/bootstrap.min.js"></script>
  <script src="{!!asset('public/assets/frontend')!!}/js/matchHeight.js"></script>
  @yield('script')
</body>
</html>
