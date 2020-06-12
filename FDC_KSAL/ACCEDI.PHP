<?php
$email=$_POST["email"];
$password=$_POST["password"];
$c=0;
require 'connect.php'; //richiede l'uso del file connect.php
 $sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$password'";
$q=$db->query($sql);
 while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
 if($r['email'] == $email && $r['password'] == $password) {		//num_rows è un metodo che restituisce il numero delle righe con la condizione della select
		$c=1;
	}
 }
	if($c==1){
		 print ("<br>ACCESSO EFFETTUATO,BENVENUTO");
		 print('<a HREF="lettura.html"> VISUALIZZA LO STATO DELLE CONSEGNE </a><BR>');
		 print('<a HREF="scrivi.html"> INSERISCI DATI NEL DATABASE </a><BR>');
	}
	else{
		echo "<br>ACCESSO NEGATO,errore nel inserire dati o dati inesistenti";
	}
 print('<br><form action="index.html"><input type="submit" value="Home"></FORM>');
 $db=null;
?>