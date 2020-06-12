<?php
 require 'connect.php';
 $nome=$_POST['nome'];
 $cognome=$_POST['cognome'];
 $sesso=$_POST['sesso'];
 $eta=$_POST['eta'];
 $email=$_POST['email'];
 $telefono=$_POST['telefono'];
 $password=$_POST['password'];
 //preparazione query
 $q=$db->prepare("INSERT INTO utenti(nome,cognome,sesso,eta,email,telefono,password)VALUES(:nome,:cognome,:sesso,:eta,:email,:telefono,:password)");
 //binding
 $q->bindParam(':nome',$nome);
 $q->bindParam(':cognome',$cognome);
 $q->bindParam(':sesso',$sesso);
 $q->bindParam(':eta',$eta);
 $q->bindParam(':email',$email);
 $q->bindParam(':telefono',$telefono);
 $q->bindParam(':password',$password);
 //esecuzione
 $q->execute();
 print('<br>Dati inseriti con successo<br>');
 print('<br><form action="index.html"><input type="submit" value="Home"></FORM>');
 $db=null;
?>