<?php
# mysql baglantisi, sesion_start yapilmis varsayiyoruz
# bilgiler
  $e-posta  = $_POST["e-posta"];
  $parola = $_POST["parola"];
# kullanici bilgisi alalim
  $sorgu = mysql_query("select parola from uyeler where e-posta = '".$kadi."'");
  if( mysql_num_rows($sorgu) != 1 ){
    print '<script>alert("Kullanıcı bulunamadı!");history.back(-1);</script>';
    exit;
  }else{
    # veriyi alıyoruz
      $bilgi = mysql_fetch_assoc($sorgu);
  }
# sifre eslestirmesi
  if( md5( trim($parola) ) != $bilgi["parola"] ){
    print '<script>alert("Yanlış şifre girdiniz!");history.back(-1);</script>';
    exit;
  }
# başarılı giriş yapıldı
# oturuma kaydedip anasayfaya gidelim
  $_SESSION["giris"] = md5( "kullanic_oturum_" . md5( $bilgi["sifre"] ) . "_ds785667f5e67w423yjgty" );
  $_SESSION["kadi"]  = $kadi;
?>
<script>
  alert("Başarıyla giriş yaptınız! Şimdi anasayfaya yönlendiriliyorsunuz.");
  window.top.location = './';
</script>