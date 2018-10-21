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

<!-- CONTENTS -->
<div id="bg-color" style="background-image: linear-gradient(-90deg, skyblue, lightgrey);">
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">CRUD EXERCISE</h1>
        <h1 class="display-4">Rio's Library</h1>
        <p class="lead">Rio has recently opened his new library, and he has just got his first set of book. He wants to be able to catalouge all books coming in and out of his library.</p>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">MAIN OBJECTIVE:</h1>
        <p class="lead">Create an application that displays and stores all the book information (Title, Author, Genre and Library Section) that's currently in the catalouge of Rio's Library.</p>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">ADDITIONAL INFO:</h1>
        <p class="lead"><strong>Genre Examples:</strong> Horror, Romance, Thriller, etc.</p>

        <h1 class="display-4">IMPRESS US:</h1>
        <ul style="list-style-type: circle;">
            <li><p class="lead">Add in a searching/filtering feature where users could check all books under a specific filter. (Search/Filter by Book Title, Author, Library Section).</p></li>
            <li><p class="lead">Add a book borrowing feature, where the user can mark a book as borrowed/returned. If a book is borrowed, it will not display in any search/filter results.</p></li>
        </ul>

        <h1 class="display-4">NOTES:</h1>
        <ol>
            <li>    <p class="lead">The UI design of the app is up to you, but use Twitter Bootstrap.</p></li>
            <li>    <p class="lead">Use a PHP MVC framework of your preference.</p></li>
            <li>    <p class="lead">Local-dev environment setup shoul not take more than 5 mins.</p></li>
            <li>    <p class="lead">Put your project into a repository of your choice. (GitHub, Bitbucket, etc.)</p></li>
            <li>    <p class="lead">Prepare a Readme.md with instructions on how to locally set up the project.</p></li>
            <li>    <p class="lead"><i>Impress Us</i> section is optional but it would definitely impress us if accomplished. ;)</p></li>
        </ol>
    </div>
</div>
</div>
<!-- END OF CONTENTS -->

<!-- Footer -->
<footer class="page-footer font-small blue bg-info">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="#"> brianlopez</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>