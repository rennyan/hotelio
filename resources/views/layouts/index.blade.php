<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotelio</title>
</head>
<body>
    <nav class="active" id="nav">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/hotels">Hotels</a></li>
        </ul>
      </nav>
       @yield('content')
</body>