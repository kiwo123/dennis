<?php
require_once("func.php");

/*
För att sortera behöver vi funktionerna för varje kategori
och samma hör require_once ist för include

*/

?>





<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Uber bloggen</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>

		<div id="wrapper">

			<div id="header">

				<div id="menu">
				<ul>
					<li><a href="start.php">| Läs blogginlägg |</a></li>
					<li><a href="add-post.php">Skriv en bloggpost |</a></li>
				</ul>
				</div>	
							
			</div>


			<div id="content">


				<h1>mina blog posts</h1>

				<form action="sk.php" method="post">
              Sök post efter kategori <select name="kategori">
                       <option value="skitsnack">skitsnack</option>
                       <option value="blandat">blandat</option>
                       <option value="random">random</option>
                    </select>
                    <input type="submit" value="sök">
               </form>

				<!-- mina posts ska in med php här-->
			

		<?php
		$katten = $_POST['kategori'];
		if (isset($katten)){



		if ( $_POST['kategori'] == "skitsnack" ) {

			echo skitsnack();
			
		}elseif ( $_POST['kategori'] == "blandat" ){

			echo blandat();

		}elseif( $_POST['kategori'] == "random" ){

			echo random();
		}

	}


		?>



			</div>	<!-- mina posts -->







	</div>		
		
	</body>
</html>


