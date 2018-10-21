<!DOCTYPE html>
<html>
<head>
	<title>Borrowed Books</title>
	<link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
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
                <a class="nav-link" href="/lib-sys">LIBRARY SYSTEM</a>
            </li>
        </ul>
    </div>
</nav>
<!-- END OF NAVIGATION -->

<!-- BORROWED BOOKS -->
<div class="jumbotron" style="margin-top: 2rem; margin-bottom: 2rem;">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: lightgrey;">
                <li class="breadcrumb-item"><a href="/lib-sys">Admin Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Borrowed Books</li>
            </ol>
    </nav>

    <h1 class="display-4" style="padding-bottom: 2rem;"><center>LIST OF BORROWED BOOKS</center></h1>
    <table class="table table-bordered table-hover table-responsive-sm">
        <thead class="thead-dark">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Library Section</th>
        </tr>
        </thead>

        @php
        $i = 1;
        @endphp
        
        @foreach($books as $borrowed)
       
        <tr>
            <td> {{ $i++ }} </td>
            <td>{{$borrowed->id}}</td>
            <td>{{$borrowed->book_title}}</td>
            <td>{{$borrowed->author}}</td>
            <td>{{$borrowed->genre}}</td>
            <td>{{$borrowed->library_section}}</td>
        </tr>

        @endforeach
        

    </table>
    {{ $books->links() }}
</div>
<!-- END OF BORROWED BOOKS -->

<!-- Footer -->
<footer class="page-footer font-small blue bg-info" style="bottom: 0; width: 100%; margin-top: 3rem;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="#"> brianlopez</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script type="text/javascript" src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>