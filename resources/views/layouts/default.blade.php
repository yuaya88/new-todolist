<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="content_box">
    <div class="text">
      <h1>@yield('title')</h1>
    </div>
    <div class="content">
      @yield('content')
    </div>
    
  </div>
</body>

</html>