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
<li class="list-group-item"><a href="egzersiz.php">Nefes Egzersizleri</a></li> 
<li class="list-group-item"><a href="minitest.php">Mini Testler</a></li> 

</ul> 
</aside> 






<main class="col-md-8 p-3">

    <h2 class="baslik">🆘 Destek ve Yardım Hatları</h2>

    <p class="mb-4">
        Eğer şu anda kendinizi iyi hissetmiyorsanız, yalnız değilsiniz.
        Aşağıdaki hatlar ücretsiz ve gizli destek sunmaktadır.
    </p>

    <!-- YARDIM HATLARI KARTLARI -->
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 p-3">
                <h5>112 Acil</h5>
                <p>Acil kriz ve hayati tehlike durumları.</p>
                <a href="tel:112" class="btn btn-danger mt-auto">Hemen Ara</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 p-3">
                <h5>YEDAM (Yeşilay)</h5>
                <p>Psikolojik ve bağımlılık danışmanlığı.</p>
                <a href="https://www.yedam.org.tr" target="_blank" class="btn btn-success mt-auto">
                    Siteye Git
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 p-3">
                <h5>ALO 183</h5>
                <p>Sosyal destek ve danışmanlık hattı.</p>
                <a href="tel:183" class="btn btn-primary mt-auto">Ara</a>
            </div>
        </div>

    </div>

    <!-- AYIRICI -->
    <hr class="my-5">

    <!-- AÇILIR BİLGİLER -->
    <h4 class="mb-3">❓ Ne zaman destek almalıyım?</h4>

    <div class="accordion-box">

        <button class="accordion-btn">112’yi ne zaman aramalıyım?</button>
        <div class="accordion-content">
            <p>
                Kendinize veya başkalarına zarar verme düşünceleri varsa,
                panik atak kontrol edilemiyorsa veya hayati risk söz konusuysa
                112 Acil aranmalıdır.
            </p>
        </div>

        <button class="accordion-btn">YEDAM kimler için uygundur?</button>
        <div class="accordion-content">
            <p>
                Stres, bağımlılık, duygusal zorlanma yaşayan herkes
                ücretsiz ve gizli danışmanlık alabilir.
            </p>
        </div>

        <button class="accordion-btn">ALO 183 hangi konularda destek verir?</button>
        <div class="accordion-content">
            <p>
                Sosyal destek, psikolojik danışmanlık ve yönlendirme
                hizmetleri sunar.
            </p>
        </div>

    </div>

    <!-- HARİTA BÖLÜMÜ -->
<hr class="my-5">

<h4 class="mb-3">📍 Yakın Destek Merkezleri</h4>

<p class="mb-4">
    Bulunduğunuz bölgeye en yakın ruh sağlığı ve danışmanlık
    merkezlerini harita üzerinden inceleyebilirsiniz.
</p>

<div class="map-container">
    <iframe
        src="https://www.google.com/maps?q=ruh%20sagligi%20merkezi&t=&z=12&ie=UTF8&iwloc=&output=embed"
        width="100%"
        height="320"
        style="border:0;"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Harici JS -->
<script src="js/main.js"></script>
</body>
</html>







