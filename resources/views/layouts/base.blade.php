<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">@yield('navTitle')</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('material.create') }}">Create</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="">Read</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Update</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Delete</a>
      </li>
    </ul>
</div>
<span class="navbar-text">
    @yield('navText')
</span> 
</nav>
    </header> 
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">@yield('mainTitle')</h1>
            <p class="lead">@yield('mainText')</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
           
                @yield('formCreate')            
        </div>
    </div>

    <footer class="footer">
        <div class="row align-items-end">
            <div class="container">
                <span class="text-muted font-weight-light">Victória Caetano <br> Análise e Desenvolvimento de Sistemas <br>Programação para Internet III <br> trabalho Laravel - Materiais <br> Jan/2023</span>
            </div>
        </div>
    </footer>
</body>
</html>