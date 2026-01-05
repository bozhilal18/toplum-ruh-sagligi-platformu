<?php session_start(); ?> 
<!DOCTYPE html> 
<html lang="tr"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Toplum Ruh Sağlığı Platformu</title> 
<!-- Bootstrap CSS --> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
<!-- Harici CSS --> 
<link rel="stylesheet" href="css/site.css"> 
</head> 
<body id="top"> 
<!-- Üst Başlık --> 
<header class="bg-primary text-white text-center p-4"> 
<h1>🌿 Toplum Ruh Sağlığı Platformu</h1> 
<hr> 
</header> 

<nav class="navbar navbar-expand-lg justify-content-center">
  <div class="container-fluid">
    <ul class="navbar-nav">

      <li class="nav-item mx-2">
        <a class="nav-link" href="index.php">Anasayfa</a>
      </li>

      <li class="nav-item mx-2 dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Hakkında
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="icerik.php">Site İçeriği</a></li>
        </ul>
      </li>

      <li class="nav-item mx-2">
        <a class="nav-link" href="iletisim.php">İletişim</a>
      </li>

      <li class="nav-item mx-2 dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Destek ve Yardım
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="yardim-hatlari.php">Yardım Hatları</a></li>
        </ul>
      </li>

      <?php if(isset($_SESSION["user_id"])): ?>
        <li class="nav-item mx-2">
          <a class="nav-link" href="user/profil.php">Profilim</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="auth/logout.php">Çıkış</a>
        </li>
      <?php else: ?>
        <li class="nav-item mx-2">
          <a class="nav-link" href="auth/login.php">Giriş</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="auth/register.php">Kayıt Ol</a>
        </li>
      <?php endif; ?>

    </ul>
  </div>
</nav>


<br> 
<br> 
<br> 

<!-- Ana Grid --> 
<div class="container-fluid mt-3"> 
<div class="row"> 
    
<!-- Sol Menü --> 
<aside class="col-md-2 p-3" id="sol-menu"> 
<h5>Ruh Sağlığı Konuları</h5> 
<ul class="list-group"> 
<li class="list-group-item"><a href="depresyon.php">Depresyon</a></li> 
<li class="list-group-item"><a href="anksiyete.php">Anksiyete</a></li> 
<li class="list-group-item"><a href="stres.php">Stres</a></li> 
<li class="list-group-item"><a href="panik.php">Panik Atak</a> 
<li class="list-group-item"><a href="uyku.php">Uyku Bozuklukları</a></li> 
<li class="list-group-item"><a href="mind.php">Mindfulness/Duygu Düzenleme</a></li> 
<li class="list-group-item"><a href="ozguven.php">Özgüven</a></li> 
<li class="list-group-item"><a href="egzersiz.php">Pratik Egzersizleri</a></li> 
<li class="list-group-item"><a href="minitest.php">Mini Testler</a></li> 

</ul> 
</aside> 



<main class="col-md-8 p-3">

<h2 class="baslik"> Sitenin İçeriği</h2>
<br>
<br>

<p>
Toplum Ruh Sağlığı Farkındalık Platformu, bireylerin ruh sağlığı ile ilgili
konularda doğru ve güvenilir bilgilere ulaşabilmesi amacıyla hazırlanmıştır.
Site içeriği, bilgilendirme, farkındalık ve yönlendirme odaklıdır.
</p>

<hr>
<br>

<h4>🧠 Bilgilendirme İçerikleri</h4>
<p>
Sitede yer alan bilgilendirme sayfaları; depresyon, anksiyete, stres,
panik atak ve uyku bozuklukları gibi yaygın ruh sağlığı konularını kapsar.
Her konu başlığı altında:
</p>
<br>

<ul>
  <li class="italic">Tanım ve temel bilgiler</li>
  <li class="underline">Belirtiler ve yaygın nedenler</li>
  <li class="line-through">Yanlış bilinen düşünceler</li>
  <li class="bottom-align">Destekleyici öneriler</li>
</ul>

<p>
Amaç, kullanıcıların yaşadıkları duygusal durumları daha iyi
anlayabilmelerini sağlamaktır.
</p>

<br>
<hr>

<h4>🌿 Egzersizler ve Pratik Araçlar</h4>
<p>
Platformda yer alan egzersiz bölümü, günlük hayatta uygulanabilecek
basit ve etkili pratiklerden oluşur. Bu bölümde:
</p>

<ul>
  <li>Nefes egzersizleri</li>
  <li>Topraklama teknikleri</li>
  <li>Kas gevşetme çalışmaları</li>
  <li>Mindfulness mini pratikleri</li>
  <li>Duygu günlüğü aracı</li>
</ul>

<p>
Bu egzersizler, kullanıcıların kendilerini daha sakin ve dengeli
hissetmelerine yardımcı olmayı amaçlar.
</p>
 <br>
<hr>

<h4>📝 Mini Testler</h4>
<p>
Mini testler bölümü, kullanıcıların kendi ruh hallerini değerlendirebilmeleri
için hazırlanmış kısa testlerden oluşur.
Test sonuçları bilgilendirme amaçlıdır ve:
</p>

<ul>
  <li>Kısa açıklamalar</li>
  <li>Yönlendirici öneriler</li>
  <li>İlgili sayfalara bağlantılar</li>
</ul>

<p>
içermektedir.
</p>
<br>

<hr>

<h4>📞 Destek ve Yardım Bölümü</h4>
<p>
Destek ve yardım alanında, acil durumlarda başvurulabilecek yardım hatları
ve rehber bilgiler yer almaktadır.
Bu bölüm, kullanıcıların ihtiyaç duyduklarında doğru kaynaklara
ulaşabilmelerini amaçlar.
</p>

<hr>

<div class="saydam-kutu icerik-karti">
<p> Bu platform bilgilendirme amaçlıdır ve profesyonel tanı veya tedavi yerine geçmez.
Acil durumlarda mutlaka uzman desteğine başvurulmalıdır. </p>
</div>













</main>










<!-- Sağ Panel -->
<aside class="col-md-2 p-3" id="sag-panel">           <!--Sağ tarafta ek bilgi / reklam / duyuru   
                                                        Sol menüyle denge sağlar-->
  <div class="card sag-kart p-3 mb-3">
    <h6>📞 Hızlı Destek</h6>
  <p class="mb-1"><strong>Telefon:</strong> 123-456-7890</p>
  <p class="mb-1"><strong>E-posta:</strong> destek@ruhsagligi.com</p>
  <small class="text-muted">
    Acil durumlarda Yardım Hatları sayfasını inceleyin.
  </small>
  </div>


  <div class="card sag-kart p-3">
    <h6>Reklam Panosu</h6>
  
  </div>



<div class="motivasyon-kutu mt-4">
    <div class="motivasyon-title">💬 Bugünün Notu</div>

    <div class="motivasyon-marquee">
      <span>
        Küçük adımlar da ilerlemedir • 
        Bugün kendin için bir şey yap • 
        Hissettiklerin geçici olabilir • 
        Yardım istemek güçsüzlük değildir •
      </span>
    </div>
  </div>
</aside>
</div>
</div>



<footer class="footer">
    <p>&copy; 2025 Toplum Ruh Sağlığı Platformu. Tüm Hakları Saklıdır.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
<script src="js/main.js"></script> 

</body> 
</html>











