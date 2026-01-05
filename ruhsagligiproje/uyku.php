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
<li class="list-group-item"><a href="egzersiz.php">Pratik Egzersizler</a></li> 
<li class="list-group-item"><a href="minitest.php">Mini Testler</a></li> 

</ul> 
</aside> 



<main class="col-md-8 p-3">


<h1 class="baslik">Uyku Bozuklukları</h1>
<hr>

<p>
Uyku, fiziksel ve ruhsal sağlığın korunmasında temel bir role sahiptir. <br>
Yetersiz veya kalitesiz uyku, kişinin günlük işlevselliğini, dikkatini
ve duygusal dengesini olumsuz etkileyebilir.
</p>
<br>

<p>
Uyku bozuklukları, uykuya dalmada güçlük, gece sık uyanma,
erken uyanma veya dinlenmemiş hissetme gibi farklı şekillerde
ortaya çıkabilir.
</p>

<br>
<br>

<h4>Temel Başlıklar</h4>

<table class="table table-bordered">
  <tr>
    <th class="underline">Başlık</th>
    <th class="underline">Açıklama</th>
  </tr>
  <tr>
    <td class="italic">Belirtiler</td>
    <td>Uykuya dalmada zorluk, gece uyanmaları, gündüz yorgunluğu.</td>
  </tr>
  <tr>
    <td class="italic">Nedenler</td>
    <td>Stres, kaygı, düzensiz uyku saatleri, ekran kullanımı.</td>
  </tr>
  <tr>
    <td class="italic">Sonuçlar</td>
    <td>Dikkat dağınıklığı, ruh hali değişimleri, verimlilik düşüşü.</td>
  </tr>
</table>

<br>
<br>

<h4>→ Uyku Bozukluklarının Yaygın Belirtileri</h4>
<p>
Uyku bozuklukları yaşayan kişiler genellikle gece boyunca
kesintisiz uyuyamaz ve sabah dinlenmiş hissetmez. <br>
Bu durum zamanla fiziksel yorgunluğun yanı sıra
duygusal hassasiyet ve odaklanma sorunlarına yol açabilir.
</p>
<br>
<br>

<ul>
  <li>Sürekli uykulu hissetme</li>
  <li>Gece sık uyanma</li>
  <li>Sabah erken uyanıp tekrar uyuyamama</li>
  <li>Gündüz dikkat dağınıklığı</li>
</ul>

<br>
<br>

<h4>→ Uyku Bozukluklarının Nedenleri</h4>
<p>
Uyku problemlerinin birçok farklı nedeni olabilir.
Yoğun stres, kaygı bozuklukları ve düzensiz yaşam alışkanlıkları
uyku kalitesini doğrudan etkileyen faktörler arasında yer alır.
</p>

<p>
Ayrıca yatmadan önce ekran kullanımı, kafein tüketimi
ve düzensiz uyku saatleri de uyku bozukluklarını
şiddetlendirebilir.
</p>

<br>
<br>

<h4>→ Uyku Kalitesini Artırmak İçin Öneriler</h4>
<ul>
  <li>Her gün aynı saatte yatıp kalkmaya çalışın</li>
  <li>Yatmadan önce ekran kullanımını azaltın</li>
  <li>Rahatlatıcı bir gece rutini oluşturun</li>
  <li>Gün içinde kısa yürüyüşler yapın</li>
</ul>

<br>
<br>

<h4>Yanlış Bilinenler</h4>

<table>
  <tr>
    <td class="line-through">Uykusuzluk sadece geçici bir durumdur</td>
    <td class="line-through">Uzun süreli uykusuzluk sağlık sorunlarına yol açabilir.</td>
  </tr>
</table>

<br>
<br>

<div class="uyarikutusu">
  Uyku düzeniniz hakkında daha fazla fikir edinmek için
  <a href="minitest.php">Mini Ruh Hali Testi</a>ni çözebilirsiniz.

</div>

<br>
<br>

<div class="dep-kutu">
  Uyku problemleri uzun süredir devam ediyorsa,
  bir uzmandan destek almak önemlidir.
</div>

<br>
<br>

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




