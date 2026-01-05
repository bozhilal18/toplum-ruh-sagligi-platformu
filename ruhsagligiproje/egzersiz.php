<?php
session_start();

/* 🔹 URL'den test türünü al */
$tur = $_GET['tur'] ?? 'genel';

/* 🔹 Varsayılan başlık & açıklama */
$baslik = "🌿 Rehberli Nefes Egzersizi";
$aciklama = "Bu egzersiz, bilgilendirme amaçlıdır ve tedavi yerine geçmez. Bedeninizi sakinleştirmeye ve zihninizi rahatlatmaya yardımcı olabilir.";

/* 🔹 Test türüne göre kişiselleştirme */
if ($tur === "depresyon") {
    $baslik = "🌿 Depresyon İçin Nefes Egzersizi";
    $aciklama = "Enerji düşüklüğü ve iç sıkıntısı yaşanan dönemlerde nefesi düzenlemek destekleyici olabilir.";
}
elseif ($tur === "anksiyete") {
    $baslik = "🌿 Anksiyete İçin Nefes Egzersizi";
    $aciklama = "Kaygı anlarında nefesi yavaşlatmak, bedeni sakinleştirmeye yardımcı olabilir.";
}
elseif ($tur === "panik") {
    $baslik = "🌿 Panik Atak İçin Nefes Egzersizi";
    $aciklama = "Panik hissi sırasında nefese odaklanmak, bedensel belirtilerin azalmasına yardımcı olabilir.";
}
elseif ($tur === "uyku") {
    $baslik = "🌿 Uyku Öncesi Nefes Egzersizi";
    $aciklama = "Uyku öncesi nefesi yavaşlatmak gevşemeyi ve rahatlamayı destekleyebilir.";
}
?>

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
<li class="list-group-item"><a href="egzersiz.php">Pratik Egzersizler</a></li> 
<li class="list-group-item"><a href="minitest.php">Mini Testler</a></li> 

</ul> 
</aside> 

        <!-- ORTA ALAN -->
        <main class="col-md-8 p-3 text-center">
           


            <h3><?= $baslik ?></h3>

            <p class="mt-3">
                <?= $aciklama ?>
            </p>

            <!-- NEFES DAİRESİ -->
            <div id="nefes-daire" class="nefes-daire">
                Hazır mısınız?
            </div>
            <p id="tur-bilgi" class="fw-bold mt-2">Tur: 1 / 3</p>
            <p id="sayac" class="text-muted"></p>


            <!-- YÖNLENDİRME METNİ -->
            <p id="nefes-metin" class="mt-3 fw-bold"></p>

            
            <button id="nefes-btn" class="btn btn-success mt-3" onclick="nefesKontrol()">
    Egzersizi Başlat
</button>

        

            <div class="nefes-bilgi alert alert-info mt-4 mx-auto">
             Bu egzersiz sırasında nefesinize odaklanmanız yeterlidir. <br>
              Zihniniz dağılırsa nazikçe tekrar nefese dönün.
                 </div>

                 
          <div class="exercise-section">
                <div class="exercise-box">
  <h4>🌱 Topraklama Tekniği (5-4-3-2-1)</h4>

  <div class="grounding-box">
    <span>5 şey gör</span>
    <span>4 şeye dokun</span>
    <span>3 ses dinle</span>
    <span>2 koku fark et</span>
    <span>1 tat düşün</span>
  </div>
</div>

              
            <div class="exercise-box">

            <h4>💪 Kas Gevşetme Egzersizi</h4>

            <p id="muscle-text">Hazırsan başla.</p>
             <button onclick="nextMuscle()" class="btn btn-outline-success btn-sm">
              Devam Et
               </button>
</div>


                   
                     <div class="exercise-box">

                   <h4>🧘 Mindfulness Mini Pratiği</h4>

           <div class="mind-box">
                Bu yazıyı 30 saniye boyunca oku ve
               yalnızca nefesine odaklan.
              </div>
</div> 

            <div class="exercise-box">
  <h4>📓 Duygu Günlüğü</h4>
  <p>Duygularını yazmak farkındalık kazandırır.</p>

  <textarea
    rows="6"
    class="form-control"
    placeholder="Bugün nasıl hissediyorsun? Buraya yazabilirsin...">
  </textarea>
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
<script src="js/egzersiz.js"></script> 


</body> 
</html>


