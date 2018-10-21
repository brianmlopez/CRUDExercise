<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sample Search</title>
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

<!-- BOOKS -->
<div class="jumbotron" style="margin-top: 2rem; margin-bottom: 2rem;">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: lightgrey;">
                <li class="breadcrumb-item"><a href="/lib-sys">Admin Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">List of books</li>
            </ol>
        </nav>

    @if(Session::has('message'))
        <div class="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    @yield('content')

    <h1 class="display-4" style="padding-bottom: 2rem;"><center>LIST OF BOOKS</center></h1>

    <form action="{{ URL::to('/sampleSearch') }}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="form-group row justify-content-center">
            <div class="form-group col-md-3">
                <input type="text" name="search" class="form-control" placeholder="Search here" required>
            </div>
            <div class="form-group col-md-3">
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Search">
            </div>
        </div>
    </form>

    @if(isset($details))
    <p>The search results for your query <b>{{ $query }}</b> are:</p>
    <h1>Sample Books Details:</h1>
    <table class="table table-bordered table-hover table-responsive-sm">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Library Section</th>
        </tr>
        </thead>
        <tbody>
            @foreach($details as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->book_title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->genre}}</td>
                    <td>{{$book->library_section}}</td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    @elseif(isset($message))
    <p>{{ $message }}</p>
    @endif
    
    {{-- <table class="table table-bordered table-hover table-responsive-sm">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Library Section</th>
        </tr>
        </thead>


        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->book_title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->genre}}</td>
            <td>{{$book->library_section}}</td>
        </tr>
        @endforeach

    </table>
    {{ $books->links() }} --}}
</div>
<!-- END OF BOOKS -->

<!-- Footer -->
<footer class="page-footer font-small blue bg-info">

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
