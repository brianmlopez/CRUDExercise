<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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

<!-- CONTENT -->
<div class="container">
	<div class="jumbotron" style="margin-top: 2rem;">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: lightgrey;">
                <li class="breadcrumb-item"><a href="/lib-sys">Admin Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/books">Edit Books</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit {{$books->book_title}}</li>
            </ol>
    </nav>

		<h1 class="display-4"><center>EDIT BOOK</center></h1>
	<form action="/books/{{$books->id}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<input type="text" name="book_title" class="form-control" placeholder="Book Title" value="{{$books->book_title}}" required><br>
		</div>
		<div class="form-group">
			<input type="text" name="author" class="form-control" placeholder="Author" value="{{$books->author}}" required><br>
		</div>
		<div class="form-group">
			<input type="text" name="genre" class="form-control" placeholder="Genre" value="{{$books->genre}}" required><br>
		</div>
		<div class="form-group">
			<input type="text" name="library_section" class="form-control" placeholder="Library Section" value="{{$books->library_section}}" required><br>
		</div>
        <div class="form-group">
            {{-- <input type="text" name="borrowed" class="form-control" value="{{$books->borrowed}}" required><br> --}}
            <p>Borrowed:</p>

            @if ($books->borrowed == '1')
                {{ Form::radio('borrowed', '1', true, ['checked' => 'checked']) }} Yes
                {{ Form::radio('borrowed', '0', false, []) }} No
            @else
                {{ Form::radio('borrowed', '1', false, []) }} Yes
                {{ Form::radio('borrowed', '0', true, ['checked' => 'checked']) }} No
            @endif
        </div>
        <div class="container">
        <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="float: right; margin-left: 2rem;">
        <a href="/books" class="btn btn-warning" style="float: right;">Cancel</a>
		
        </div>
	</form>
	</div>
</div>
<!-- END OF CONTENT -->

<!-- Footer -->
<footer class="page-footer font-small blue bg-info">

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