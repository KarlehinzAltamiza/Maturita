<?php
$col = 'mysql:host=localhost;dbname=my_karlehinzaltamiza';
 $user = "root";
 // PASSWORD PER L'AUTENTICAZIONE DELL'UTENTE
 $pass = "";
 $db = new PDO($col ,$user,$pass);
 // notifica in caso di connessione effettuata
 print("<br> Connessione a MySQL tramite PDO effettuata.");
if (!$db){
 print("<H1> CONNESSIONE AL DATABASE FALLITA</H1>");
 exit;
}
?>
