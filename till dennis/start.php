<?php
require_once("connect.php");

/*

Connectar till DB

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
				<p><a href="sk.php">| Klicka här för att söka bloggpost efter Kategori |</a></p>


				<!-- mina posts ska in med php här-->

    <?php
		
  $dbConn = mysqli_connect($db_hostname, $db_username, $db_password, "bloggen");


if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
}

// läser in host och databas
// visar fel meddelande samt orsak

$sql = sprintf("SELECT * FROM bloggcontent order by id DESC");


// utan mysql_query kan ni inte ta data från DB för att sedan printa ut den på sidan
// finns olika sätt, detta är bland det lättaste, gjorde en query sedan en array



$res = mysqli_query($dbConn, $sql);

 while ( $row = mysqli_fetch_assoc($res) )
 {	
 	 echo "<div id='posts'>";
	 echo  $row['namn']. " " . $row['efternamn'] . "<br>";
	 echo  "Kategori: ". $row['kategori'] . "<br>"; 
	 echo  $row['content'];
	 echo "</div>";
	
}
mysqli_close($dbConn) ;




?>




			</div>	<!-- mina posts -->







	</div>		
		
	</body>
</html>


