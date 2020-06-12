<?php
 require 'connect.php';		//QUESTA RIGHA E IMPORTANTE
 $id=$_POST['id'];
 $prezzo=$_POST['prezzo'];
 $data=$_POST['data'];
 $stato=$_POST['stato'];
 //preparazione query
 $q=$db->prepare("INSERT INTO consegne(id,prezzo,data,stato)VALUES(:id,:prezzo,:data,:stato)");
 //binding
 $q->bindParam(':id',$id);
 $q->bindParam(':prezzo',$prezzo);
 $q->bindParam(':data',$data);
 $q->bindParam(':stato',$stato);
 //esecuzione
 $q->execute();
 print('<br>Dati inseriti con successo<br>');
 print("<link rel='stylesheet' href='css.css'>");
 print('<br><form class="button" action="index.html"><input type="submit" value="Home"></FORM>');
 $db=null;
?>