<?php
require "config.php";
mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
mysql_select_db(sun);

$sql="SELECT * From commentaire";
$req=mysql_query($sql) or die ('Erreur SQL!<br/>'.$sql.

while ($data=mysql_fetch_assoc($req)) {
	echo "<h1>{$data["titre"]}</h1>";
	echo "<p>{$data["contenu"]}</p>";
	echo "<p align\"right\">".date("j/n/Y G:i",strtotime($date))"</p>
	
	
	
};

  ?>
  <form action="addcomhp" method="post">

  Pseudo:<input type="text" name="pseudo"/><br/>
  URL:<input type="text" name="url"/><br/>
  Mail:<input type="text" name="mail"/><br>
  <textarea name="contenu" style= "width:500px;height:200px></textarea>
  <form>