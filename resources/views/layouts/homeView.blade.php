<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="padding: 0 0 0 15px;">Sistema piezas</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/piezas">Piezas</a></li>
      </ul>
    </div>
  </nav>
   @yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>