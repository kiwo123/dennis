<?php

/*

Jag gjorde en så enkel funktion som möjligt för att sortera inlägg med hjälp av dropdown-menyn
Varje kategori kör en egen connection med en egen unik sql-query

tex:

kategori=skitsnack
kategori=blandat
osv

Blir 3 olika functioner en för varje kategori


*/



function skitsnack(){

	require("connect.php");
	
  $dbConn = mysqli_connect($db_hostname, $db_username, $db_password, "bloggen");


if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
}

// läser in host och databas
// visar fel meddelande samt orsak

$sql = sprintf("SELECT * FROM bloggcontent WHERE kategori='skitsnack' order by id DESC");


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



}




function blandat(){

	require("connect.php");
	
  $dbConn = mysqli_connect($db_hostname, $db_username, $db_password, "bloggen");


if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
}

// läser in host och databas
// visar fel meddelande samt orsak

$sql = sprintf("SELECT * FROM bloggcontent WHERE kategori='blandat' order by id DESC");


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



}



function random(){

	require("connect.php");
	
  $dbConn = mysqli_connect($db_hostname, $db_username, $db_password, "bloggen");


if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
}

// läser in host och databas
// visar fel meddelande samt orsak

$sql = sprintf("SELECT * FROM bloggcontent WHERE kategori='random' order by id DESC");


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



}
































?>