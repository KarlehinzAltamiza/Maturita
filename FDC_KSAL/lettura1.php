<?php
 require 'connect.php'; //richiede l'uso del file connect.php
 print('<body bgcolor="black" text="white"><h1>CONSEGNE REGISTRATE</h1>');
 $sql = 'SELECT * FROM consegne';
 $q=$db->query($sql);
 print("<TABLE STYLE=border-style:double;border-width:5pt;border-color:green>");
 print("<TR STYLE=font-weight:bold><TD> Id </TD><TD> Prezzo </TD> <TD> data </TD> <TD> stato </TD>");
 while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
 print("<TR><TD>".$r['id']."</TD>");
 print("<TD>".$r['prezzo']."</TD>");
 print("<TD>".$r['data']."</TD>");
 print("<TD>".$r['stato']."</TD>");
 }
 print("</TR></TABLE>");
print('<BR><FORM action="index.html"><INPUT TYPE="submit"VALUE="Home"></FORM>');
$db=null;
?>