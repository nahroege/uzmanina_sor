<form action= 'giris.php' method='POST'>
<br><br><table border = 0 >
<tr><td width = 100>E-posta: </td><td><input type = 'text' name='e-posta' > </td></tr>
<tr><td width = 100>Parola: </td><td><input type = 'password' name='parola' > </td></tr> <!- Kullanıcı girişi ->
<tr><td colspan = 2 height=30><center><input type = 'submit' value= 'GİRİŞ YAP!'></td></tr>
</table></center></form>

<form action = 'kullanicikaydet.php' method = 'POST'> <!- Kullanıcı kayıt sistemi->
<br><br><table border = 0 >
<tr><td width = 100>İsim: </td><td><input type = 'text' name='isim' > </td></tr>
<tr><td width = 100>Soyisim: </td><td><input type = 'text' name='soyisim' > </td></tr>
<tr><td width = 100>E-posta: </td><td><input type = 'text' name='e-posta' > </td></tr>
<tr><td width = 100>Parola: </td><td><input type = 'password' name='parola' > </td></tr>
<tr><td width = 100>Telefon: </td><td><input type = 'text' name='telefon' > </td></tr>
<tr><td colspan = 2 height=30><center><input type = 'submit' value= 'KAYDET!'></td></tr>
</table></center></form>

<form action= 'uzmanbasvuru.php' method='POST'>
<br><br><table border = 0 >
<tr><td colspan = 2 height=30><center><input type = 'submit' value= 'BAŞVUR!'></td></tr> <!-Uzman başvuru butonu->
</table></center></form>
<?php


?>