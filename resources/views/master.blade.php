<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel  5</title>
</head>
<body>
	<h1>
		Templating
	</h1>

	<header>
 		<h2>Blog Dimas</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<br />
	<br />
		
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <i>DimasTyo</i> 2019</p>
	</footer>

</body>
</html>