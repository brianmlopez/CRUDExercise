<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
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

<div class="jumbotron" style="margin-top: 2rem;">

    <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: lightgrey;">
                <li class="breadcrumb-item"><a href="/lib-sys">Admin Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Book</li>
            </ol>
        </nav>

    <h1 class="display-4"><center>ADD BOOK</center></h1>
	<form action="/addbook" method="POST" style="margin-top: 2rem;">
		@csrf
        <div class="form-group">
		  <input type="text" name="book_title" class="form-control" placeholder="Book Title" value="{{old('book_title')}}">
        </div>
        <div class="form-group">
		  <input type="text" name="author" class="form-control" placeholder="Author" value="{{old('author')}}">
        </div>
        <div class="form-group">
		  <input type="text" name="genre" class="form-control" placeholder="Genre" value="{{old('genre')}}">
        </div>
        <div class="form-group">
		  <input type="text" name="library_section" class="form-control" placeholder="Library Section" value="{{old('library_section')}}">
        </div>
        <p class="lead">
		  <input type="submit" name="submit" class="btn btn-primary" style="float: right;" value="Submit">
        </p>
	</form>

	@if($errors->any())
		<div>
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
</div>
<!-- Footer -->
<footer class="page-footer font-small blue bg-info" id="footer">

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