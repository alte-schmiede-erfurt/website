<?php


$empfaenger = "alte.schmiede.erfurt@gmail.com";
$betreff = 'Buchungsanfrage'.$_POST["lname"].' ';
$from = "From: Website Formular <info@alte-schmiede-buessleben.de>\n";
$from .= "Reply-To: noreply@alte-schmiede-buessleben.de\n";
$from .= "Content-Type: text/html\n";
$text .= 'Name '.$_POST["fname"].' '.$_POST["lname"].' <br> Von '.$_POST["anreise"].' bis '.$_POST["abreise"].' <br> Erwachsene '.$_POST["persons"].' Kinder '.$_POST["childrens"].' Kinderbett '.$_POST["kbett"].' <br> Anschrift: '.$_POST["strasse"].' '.$_POST["hausnr"].' , '.$_POST["plz"].' '.$_POST["ort"].' <br> Email: '.$_POST["email"].' <br> Tel.: '.$_POST["phone"].' <br> Kommentar: <br> '.$_POST["kommentar"].' ';



mail($empfaenger, $betreff, $text, $from);


echo "<head>";
echo "<meta http-equiv=",chr(34),"refresh",chr(34)," content=",chr(34),"10; URL=https://www.alte-schmiede-buessleben.de/",chr(34),">";
echo "</head>";
echo "<body>";
echo "<center>";
echo "<div style=",chr(34),"height:48%",chr(34),">";
echo "</div>";
echo "<p> ihre Daten:";
echo $text;
echo "</p><br><br>";
echo "Vielen Dank, wir melden uns bald bei Ihnen.";
echo "</center>";
echo "</body>";





?>
