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
<br> 

<!-- Ana Grid --> 
<div class="container-fluid mt-3"> 
<div class="row"> 
    
<!-- Sol Menü --> 
<aside class="col-md-2 p-3" id="sol-menu"> 
<h5 class="baslik">Ruh Sağlığı Konuları</h5> 
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
<h2 class="baslik">Mini Testler </h2>
<hr>

  <!-- 🔹 TEST SEÇİM -->
  <div class="text-center mb-4">
    <h4>Hangi testi çözmek istiyorsunuz?</h4>
    <br>
    <br>

    <button class="btn btn-outline-primary m-1" onclick="testBaslat('depresyon')">Depresyon</button>
    <button class="btn btn-outline-success m-1" onclick="testBaslat('anksiyete')">Anksiyete</button>
    <button class="btn btn-outline-warning m-1" onclick="testBaslat('stres')">Stres</button>
    <button class="btn btn-outline-danger m-1" onclick="testBaslat('panik')">Panik Atak</button>
    <button class="btn btn-outline-secondary m-1" onclick="testBaslat('uyku')">Uyku Bozuklukları</button>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>








  <!-- 🔹 BİLGİ ALANI -->
  <div id="bilgi-alani" class="alert alert-info text-center" style="display:none;">
    <h5 id="bilgi-baslik"></h5>
    <p id="bilgi-icerik"></p>
  </div>

  <!-- 🔹 TEST -->
  <div id="test-alani" class="text-center" style="display:none;">
    <p id="soru" class="fw-bold fs-5"></p>

    <button class="btn btn-success m-2" onclick="cevapla(1)">Evet</button>
    <button class="btn btn-danger m-2" onclick="cevapla(0)">Hayır</button>
  </div>

  <!-- 🔹 SONUÇ -->
  <div id="sonuc" class="mt-4 p-3 text-center rounded" style="display:none;"></div>
  <!-- 🔹 ÖNERİLER (AYRI ALAN) -->
<div id="oneriler-alani" class="mt-4 text-center"></div>









  <br>
  <br>
  <br>

  <div class="mini-uyari">
  <h5> ! Önemli Bilgilendirme ! </h5>
  <p>
    Bu mini testler bilgilendirme amaçlıdır ve kesin tanı koymaz. <br>
    Ruh sağlığınızla ilgili endişeleriniz varsa bir uzmandan destek almanız önerilir.
  </p> 
  <small> <i>
    Test sonuçları yalnızca farkındalık oluşturmayı amaçlar.
</i> </small>
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