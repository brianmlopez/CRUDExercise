<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RLS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <!-- Brand -->
    <a class="navbar-brand" href="/">Rio's Library Sytem</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseElements" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div id="collapseElements" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/challenge">THE CHALLENGE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lib-sys">LIBRARY SYSTEM</a>
            </li>
        </ul>
    </div>
</nav>
<!-- END OF NAVIGATION -->

<!-- DASHBOARD -->
{{-- <div class="container-fluid" style="background-image: url(images/lib_bg.png); padding-top: 2rem;"> --}}
    <div class="jumbotron padding" style="margin-top: 2rem;">
    <h1 class="display-4" style="padding-bottom: 3rem;">ADMIN DASHBOARD</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 text-center" style="padding-bottom: 4rem;">
                <a href="/book-list" class="button"><i class="fas fa-book"></i>
                <h3>Lists of Books</h3></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 text-center">
                <a href="/borrowed" class="button"><i class="fas fa-clipboard"></i>
                <h3>Borrowed Books</h3></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 text-center">
                <a href="/books" class="button"><i class="fas fa-bars"></i>
                <h3>Edit Books</h3></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 text-center">
                <a href="/addbook" class="button"><i class="far fa-plus-square"></i>
                <h3>Add Book</h3></a>
            </div>
        </div>
    </div>
{{-- </div> --}}
<!-- END OF DASHBOARD -->

<!-- Footer -->
<footer class="page-footer font-small blue bg-info" style="margin-top: 5rem;" >

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="#"> brianlopez</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>
