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

<h2 class="baslik">Anksiyete</h2>
<hr>

<p>
Anksiyete, kişinin geleceğe yönelik yoğun kaygı, endişe ve gerginlik
hissetmesiyle ortaya çıkan bir ruhsal durumdur. 
<br> Zaman zaman kaygı
yaşamak normaldir; ancak bu kaygı sürekli hale geldiğinde günlük
yaşamı zorlaştırabilir.
</p>

<br>
<br>

<h4>Günlük Hayatta Anksiyete Nasıl Hissedilir?</h4>

<ul>
  <li>Sürekli kötü bir şey olacakmış gibi düşünme</li>
  <li>Kalp çarpıntısı ve nefes darlığı</li>
  <li>Dikkatini toplamakta zorlanma</li>
  <li>Kaslarda gerginlik ve huzursuzluk</li>
</ul>

<br>
<br>
<br>

<h4>Temel Bilgiler</h4>

<table>
    <tr>
        <th class="underline">Başlık</th>
        <th class="underline">Açıklama</th>
    </tr>
    <tr>
        <td class="italic">Belirtiler</td>
        <td>Sürekli kaygı, çarpıntı, huzursuzluk ve gerginlik.</td>
    </tr>
    <tr>
        <td class="italic">Olası Nedenler</td>
        <td>Stres, travmatik deneyimler, genetik yatkınlık.</td>
    </tr>
    <tr>
        <td class="italic">Baş Etme</td>
        <td>Nefes egzersizleri, farkındalık ve destek almak.</td>
    </tr>
</table>

<br>
<br>
<br>
<br>


<div class="bilginotu">
    <strong class="underline">Bu normal mi?</strong> <br> 
    <br>
    Zaman zaman kaygı hissetmek normaldir. <br>
    Sürekli hale geliyorsa destek almak önemlidir.
</div>


<div class="floating-tip-box">
    <h6> <i>🧠 Ne Yapabilirim? </i></h6>
    <p id="tip-text">
        <br>
        <br>
        Nefesine odaklanarak yavaşlamaya çalış.
    </p>
</div>

<br>
<br>
<br>

<p>  <i>
Anksiyete ile baş etmek zaman alabilir; <br>
 ancak doğru yöntemlerle
kontrol altına alınabilir. <br>
 Belirtiler uzun süredir devam ediyorsa
bir uzmandan destek almak önemlidir.
</p> </i> 

<br>
<br>
<br>


<div class="bilginotu saydam-kutu">
    Kendinizi değerlendirmek ister misiniz?
    <a href="minitest.php">Mini Ruh Hali Testi</a>ne buradan ulaşabilirsiniz.


<p>
Kaygı düzeyiniz günlük yaşamınızı etkiliyorsa
<a href="yardim-hatlari.php">destek ve yardım kaynaklarını</a>
inceleyebilirsiniz.
</p>

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











