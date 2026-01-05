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

<h2 class="baslik">Stres</h2>
<hr>

<p>
Stres, bireyin karşılaştığı zorlayıcı yaşam olaylarına verdiği doğal
bir tepkidir. Kısa süreli stres motive edici olabilirken, uzun süreli
ve yoğun stres ruhsal ve fiziksel sağlığı olumsuz etkileyebilir.
</p>

<p>
Günlük yaşamda iş yükü, akademik baskı, zaman yönetimi sorunları,
ekonomik kaygılar ve sosyal beklentiler stres düzeyini artıran
başlıca faktörler arasında yer alır.
</p>

<br>
<br>
<br>

<div class="streskutulari">
  <div class="streskutusu">
    <h6><i > -Zihinsel Stres </i></h6>
    <p>Sürekli düşünme, karar verememe, zihinsel yorgunluk.</p> <br>
  </div>
  <br>

  <div class="streskutusu">
    <h6> <i> -Fiziksel Stres </i></h6>
    <p>Kas gerginliği, baş ağrısı, mide problemleri.</p> <br>
  </div>
<br>

  <div class="streskutusu">
    <h6><i> -Duygusal Stres </i></h6>
    <p>Sinirlilik, huzursuzluk, tükenmişlik hissi.</p> 
    <p class="line-through">Stres yaşayan kişi zayıftır.</p>
  </div>
</div>
<br>

<br>
<br>


<br>
<br>
<br>

<h4><i>→ Stresin Belirtileri</i></h4>
<p>
Stresin belirtileri kişiden kişiye değişebilir. <br>
En sık görülenbelirtiler arasında sürekli yorgunluk, kas ağrıları, baş ağrısı,
sinirlilik, uyku problemleri ve dikkat dağınıklığı yer alır. <br>
Uzun süreli stres bağışıklık sistemini de zayıflatabilir.
</p>

<br>
<br>

<h4><i>→ Stresin Nedenleri</i></h4>
<p>
Stres genellikle kişinin baş etme kapasitesini aşan durumlarla
karşılaştığında ortaya çıkar.<br>
 Aşırı sorumluluklar, kontrol edilemeyen
olaylar ve beklentiler stresin temel nedenleri arasında sayılabilir.

</p>



<br>
<br>

<h4><i>→ Stresle Baş Etme Yolları</i></h4>
<p>
Düzenli uyku, fiziksel hareket, nefes egzersizleri ve zaman
yönetimi stresle başa çıkmada önemli rol oynar. <br>
Kişinin
kendi sınırlarını fark etmesi ve mola vermeyi öğrenmesi de
stres düzeyini azaltabilir.
</p>

<br>
<br>
<br>

<h4>🗓 Günlük Stres Azaltma Planı</h4>

<table>
  <tr>
    <th>Saat</th>
    <th>Öneri</th>
  </tr>
  <tr>
    <td>Sabah</td>
    <td>Güne 5 dakikalık nefes egzersiziyle başla</td>
  </tr>
  <tr>
    <td>Öğle</td>
    <td>Kısa yürüyüş ve ekran molası</td>
  </tr>
  <tr>
    <td>Akşam</td>
    <td>Telefonu erken bırak, gevşeme egzersizi yap</td>
  </tr>
</table>

<br>
<br>
<br>

<div class="icerik-karti">
  <strong>Stres seviyenizi merak ediyor musunuz?</strong><br>
  Kendinizi daha iyi tanımak için
  <a href="minitest.php">Mini Ruh Hali Testi</a>ni çözebilirsiniz.
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




