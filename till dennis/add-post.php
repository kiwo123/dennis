<?php
require_once("connect.php");

/*

Connectar till Mysql
Och "require_once" ist för include så det inte strular

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

				<form method="post" action="add-post.php" class="box">
                      Namn: <br><input type="text" name="namn"><br>
                      Efternamn: <br><input type="text" name="efternamn"><br>
           Kategori:<br><select name="kategori">
                       <option value="skitsnack">skitsnack</option>
                       <option value="blandat">blandat</option>
                       <option value="random">random</option>
                    </select><br>
                     Kommentar<br><textarea name="content"></textarea><br>
                     <input type="submit" value="skicka">
        
        </form>

				<!-- mina posts ska in med php här-->

    <?php
		
  $dbConn = mysqli_connect($db_hostname, $db_username, $db_password, "bloggen");


if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
}

// Connection till databasen, jag använder "mysqli" lite nyare än mysql så kör på det,
//Den connectar till databasen, eller visar en error ifall det blev fel
// Ni kan ändra på uppgifterna i connect.php för att se så det funkar, så fall får ni ett
// felmeddelande

	// isset kollar så att rutan "namn" är ifyllt, om inte så går det inte att posta

if (isset($_POST['namn']))
{
	$posterNamn = $_POST['namn'];
	$efterNamn = $_POST['efternamn'];
	$theKategori = $_POST['kategori'];
	$theContent = $_POST['content'];
	
	$insertSQL = "INSERT INTO bloggcontent (namn, efternamn, kategori, content) VALUE ('$posterNamn', '$efterNamn', '$theKategori', '$theContent' ) ";
	
	mysqli_query($dbConn, $insertSQL);
	
}


//skickar data från formen till DB, ni ser mitt tables samt vilka variablar jag användt för varje sak
// text namn är $posterNamn etc



$sql = sprintf("SELECT * FROM bloggcontent order by id DESC");


$res = mysqli_query($dbConn, $sql);

 while ( $row = mysqli_fetch_assoc($res) )
 {	
 	 echo "<div id='posts'>";
	 echo  $row['namn']. " " . $row['efternamn'] . "<br>";
	 echo  "Kategori: ". $row['kategori'] . "<br>"; 
	 echo  $row['content'];
	 echo "</div>";
	
}

//Här gjorde jag en array för att ta data från DB sedan echo ut den blandat med html/php kod,
// row har ett value sedan är "[]" beroende det ni vill visa utt på sidan från DB
// $row['content'] blir tex texten ni skrev in

mysqli_close($dbConn) ;

// sedan stänger jag DB connection, vilket ni alltid ska göra när ni inte behöver vara uppkopplade mer



?>




			</div>	<!-- mina posts -->







	</div>		
		
	</body>
</html>


