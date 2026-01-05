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

<!-- Üst Menü Ortada -->
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
<li class="list-group-item"><a href="egzersiz.php">Pratik Egzersizler</a></li> 
<li class="list-group-item"><a href="minitest.php">Mini Testler</a></li> 

</ul> 
</aside> 


<main class="col-md-8 p-3">

<h2 class="baslik">Panik Atak</h2>
<hr>

<p>
Panik atak, aniden ortaya çıkan yoğun korku ve bedensel belirtilerle kendini gösteren,
kişinin kontrolünü kaybedeceğini ya da ciddi bir tehlike altında olduğunu düşündüğü
zorlayıcı bir deneyimdir. Ataklar genellikle birkaç dakika sürer ancak etkisi çok güçlü olabilir.
</p>

<p>
Panik atak yaşamak tehlikeli değildir ancak tekrar yaşanacağı korkusu günlük yaşamı
olumsuz etkileyebilir. Doğru bilgi ve destekle kontrol altına alınabilir.
</p>

<br>
<br>

<h4>Temel Bilgiler</h4>

<table class="border">
  <tr>
    <th><u>Başlık</u></th>
    <th><u>Açıklama</u></th>
  </tr>
  <tr>
    <td><i>Belirtiler</i></td>
    <td>Çarpıntı, nefes darlığı, baş dönmesi, titreme, yoğun korku.</td>
  </tr>
  <tr>
    <td><i>Nedenleri</i></td>
    <td>Kaygı bozuklukları, stres, travmalar, bedensel duyumlara aşırı odaklanma.</td>
  </tr>
  <tr>
    <td><i>Başa Çıkma</i></td>
    <td>Nefes egzersizleri, farkındalık, profesyonel destek.</td>
  </tr>
</table>

<br>
<br>

<h4>→ Panik Atak Sırasında Ne Yapabilirim?</h4>
<ul>
  <li>Nefesine odaklan ve yavaşlatmaya çalış.</li>
  <li>Yaşadığın durumun geçici olduğunu kendine hatırlat.</li>
  <li>Etrafındaki 5 şeyi sayarak dikkatini dışarı yönlendir.</li>
  <li>Yalnız değilsin, yardım isteyebilirsin.</li>
  <li class="line-through"> Panik atak tehlikelidir</li>
</ul>


<br>
<br>
<br>

<div class="uyarikutusu">
  <strong>Bu önemli:</strong>
  Panik atak sırasında hissedilen belirtiler korkutucu olsa da hayati tehlike oluşturmaz.
  Ancak sık tekrarlıyorsa destek almak önemlidir.
</div>



<br>
<br>
<br>



<h4>Bilgilendirici Video</h4>

<iframe 
class="info-frame"
  src="https://www.youtube.com/embed/4pLUleLdwY4"
  title="Panik Atak Nedir?"
  frameborder="0"
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen>
</iframe>

<br>
<br>

<div class="alert alert-info mt-4">
  <strong>Kendinizi değerlendirmek ister misiniz?</strong><br>
  Panik ve kaygı düzeyiniz hakkında fikir edinmek için
  <a href="minitest.php">Mini Ruh Hali Testi</a>ni çözebilirsiniz.
</div>



<div class="alert alert-danger mt-4">
  <strong>Acil destek gerekirse:</strong><br>
  <ul class="mb-0">
    <li><a href="yardim-hatlari.php">📞 Yardım Hatları</a> sayfasını inceleyin</li>
    <li>112 Acil – acil durumlarda</li>
    <li>Alo 183 – sosyal ve psikolojik destek</li>
  </ul>
</div>

<a href="#top">↑ Yukarı Çık</a>




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




