<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./even">Even Numbers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./prime">Prime Numbers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./multi5">Multiplication Table</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="card m-4">
    <div class="card-body">
      Welcome to Home Page
    </div>
  </div>

</body>
</html>