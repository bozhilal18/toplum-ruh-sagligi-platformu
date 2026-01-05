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
<li class="list-group-item"><a href="linkler.php">Faydalı Linkler</a></li> 
</ul> 
</aside> 


<main class="col-md-8 p-3"> 
<h2 class="baslik">Mindfulness ve Duygu Düzenleme</h2>
<hr>

<p>
Mindfulness, bireyin bulunduğu ana yargılamadan odaklanması ve
düşüncelerini farkındalıkla gözlemleyebilmesidir.
Bu yaklaşım, zihnin geçmiş veya gelecek kaygılarından uzaklaşıp
şimdiki ana odaklanmasını sağlar.
</p>

<p>
Duygu düzenleme ise kişinin yoğun duygularla sağlıklı bir şekilde
baş edebilme becerisini ifade eder.
Bu beceri, stresli ve zorlayıcı durumlarda daha dengeli tepkiler
verilmesine yardımcı olur.
</p>

<h4>Mindfulness Ne Kazandırır?</h4>
<ul>
  <li>Kaygı ve stresi azaltır</li>
  <li>Dikkat ve odaklanmayı artırır</li>
  <li>Duygusal farkındalığı geliştirir</li>
</ul>

<h4>Duygu Düzenleme Yöntemleri</h4>
<p>
Duyguları bastırmak yerine fark etmek ve kabul etmek,
sağlıklı duygu düzenlemenin temelidir.
Nefese odaklanma, kısa molalar verme ve duygu günlüğü tutma
etkili yöntemler arasında yer alır.
</p>

<p>
Bu beceriler düzenli pratikle geliştirilebilir ve
günlük yaşamda psikolojik dayanıklılığı artırır.
</p>



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






