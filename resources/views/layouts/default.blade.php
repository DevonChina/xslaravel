<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title', '细说laravel')-- 国内第一本实战Laravel书籍</title>
     <link rel="stylesheet" href="/css/app.css">
</head>
<body>
     @include('layouts.header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('home.users.messages')
        @yield('content')
        @include('layouts.footer')
      </div>
    </div>
</body>
</html>