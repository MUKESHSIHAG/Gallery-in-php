<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Portfolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<a href="index.html" class="header-brand">mukesh</a>
		<nav>
			<ul>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="about.html">About me</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<a href="cases.html" class="header-cases">Cases</a>
		</nav>
	</header>
	<main>
		<section class="gallery-links">
			<div class="wrapper">
				<h2>Gallery</h2>
				<div class="gallery-container">
					<a href="#">
						<div></div>
						<h3>This is a title</h3>
						<p>This is a paragraph</p>
					</a>
					<a href="#">
						<div></div>
						<h3>This is a title</h3>
						<p>This is a paragraph</p>
					</a>
					<a href="#">
						<div></div>
						<h3>This is a title</h3>
						<p>This is a paragraph</p>
					</a>
					<a href="#">
						<div></div>
						<h3>This is a title</h3>
						<p>This is a paragraph</p>
					</a>
					<a href="#">
						<div></div>
						<h3>This is a title</h3>
						<p>This is a paragraph</p>
					</a>
				</div>
				<div class="gallery-upload">
					<form action="includes/gallery-upload.inc.php" method="POST" enctype="multipart/form-data">
						<input type="text" name="filename" placeholder="File name...">
						<input type="text" name="filetitle" placeholder="Image title...">
						<input type="text" name="filedesc" placeholder="Image description...">
						<input type="file" name="file">
						<button type="submit" name="submit">UPLOAD</button>
					</form>
				</div>
			</div>
		</section>
	</main>
</body>
</html>