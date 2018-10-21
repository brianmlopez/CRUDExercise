<!DOCTYPE html>
<html>
<head>
	<title>Edit Books</title>
	<link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
<style>
.alert {
background-color: #5cb85c;
color: #fff;
padding: 2rem;
margin-bottom: 3rem;
}

.alertDel {
background-color: #d9534f;
color: #fff;
padding: 2rem;
margin-bottom: 3rem;
}

.pagination {
	float: right;
}
</style>
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

<!-- BOOKS -->

	<div class="jumbotron" style="margin-top: 2rem;">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: lightgrey;">
				<li class="breadcrumb-item"><a href="/lib-sys">Admin Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Edit Books</li>
			</ol>
		</nav>

		@if(Session::has('message'))
			<div class="alert">
				{{ Session::get('message') }}
			</div>
		@endif

		@yield('content')

		@if(Session::has('messageDel'))
			<div class="alertDel">
				{{ Session::get('messageDel') }}
			</div>
		@endif

		@yield('content')
			
		        <h1 class="display-4"><center>EDIT BOOKS</center></h1>
				<table class="table table-bordered table-hover table-responsive-sm table-responsive-xs">
					<caption>For borrowed column. '0' means 'No' and '1' means 'Yes'.</caption>
					<thead class="thead-dark">
						<tr>
							<th>No.</th>
							<th>ID</th>
							<th>Book Title</th>
							<th>Author</th>
							<th>Genre</th>
							<th>Library Section</th>
							<th>Borrowed</th>
							<th colspan="2"><center>Actions</center></th>
						</tr>
					</thead>

					@php
					$i = 1;
					@endphp

					@foreach($books as $book)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{$book->id}}</td>
						<td>{{$book->book_title}}</td>
						<td>{{$book->author}}</td>
						<td>{{$book->genre}}</td>
						<td>{{$book->library_section}}</td>
						<td>{{$book->borrowed}}</td>
						<td>
							<center>
							<a href="/books/{{$book->id}}/edit" class="btn btn-warning">Edit</a>
							</center>
						</td>
						<td>
							<center>
							<form action="books/{{$book->id}}" method="POST">
								@csrf
								@method("DELETE")
								<input type="submit" name="submit" class="btn btn-danger" value="Delete">
							</form>
							</center>
						</td>
					</tr>
					@endforeach
				</table>
				{{ $books->links() }}	
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

<script type="text/javascript" src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>