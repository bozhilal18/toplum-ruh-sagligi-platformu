
<?php
session_start();
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
<body>

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
<div class="container-fluid mt-3">    <!--sayfa tam genişlik-->
  <div class="row">                    <!--yatay satır -->

    <!-- Sol Menü -->
    <aside class="col-md-2 p-3" id="sol-menu">
      <h5>Ruh Sağlığı Konuları</h5>
      <ul class="list-group">
        <li class="list-group-item"><a href="depresyon.php">Depresyon</a></li>
        <li class="list-group-item"><a href="anksiyete.php">Anksiyete</a></li>
        <li class="list-group-item"><a href="stres.php">Stres</a></li>
        <li class="list-group-item"><a href="panik.php">Panik Atak</a> </li>
        <li class="list-group-item"><a href="uyku.php">Uyku Bozuklukları</a></li>
        <li class="list-group-item"><a href="mind.php">Mindfulness/Duygu Düzenleme</a></li>
        <li class="list-group-item"><a href="ozguven.php">Özgüven</a></li>
        <li class="list-group-item"><a href="egzersiz.php">Pratik Egzersizler</a></li>
        <li class="list-group-item"><a href="minitest.php">Mini Testler</a></li>
       
      </ul>
    </aside>

  

    <!-- Orta / Ana İçerik -->
    <main class="col-md-8 p-3" id="ana-icerik">   <!-- Sayfanın ana içeriği 12 sütunun 8’i -->
      <!-- Hero -->                                <!-- Ana içerik alanını ortada tuttum. -->
      <section class="hero text-white text-center mb-4">
        <div class="overlay p-4">
          <h5 style="text-align: center;">Depresyon, Anksiyete ve Stres Yönetimi İçin Bilgi ve Destek</h5>
         
        </div>
      </section>




        <br> <h2 style="text-align: center;">Toplum Ruh Sağlığı Farkındalık Platformu’na Hoş Geldiniz!🌿</h2> <br> <br>

    <p>
        Bu platform; <strong>anksiyete, depresyon, stres, panik atak, uyku sorunları</strong> gibi yaygın ruh sağlığı konularında 
        güvenilir, sade ve kolay anlaşılır bilgiler sunmak amacıyla hazırlanmıştır.
    </p> 
    <p> Soldaki menüden istediğin başlığa geçiş yapabilir, üst menüden ise 
        destek & yardım bölümlerine erişebilirsin!</p><br>

    <p>
        Amacımız, herkesin kendi ruh halini daha iyi tanıyabilmesi, zorlayıcı duygularla başa çıkabilmesi 
        ve gerektiğinde doğru desteğe ulaşabilmesi için <strong>bilgilendirme, yönlendirme ve pratik araçlar</strong> sağlamaktır.
    </p> <br>
    <br>
    

    <hr> 
<br>
<br>
    <h3>✨Sitede Neler Bulabilirsiniz?✨</h3>
    <br>

    <ul>
        <li><strong>Bilgilendirme Yazıları:</strong> Anksiyete, depresyon, panik atak, stres ve uyku bozukluklarına dair içerikler.</li> <br> 
        <li><strong>Egzersizler & Pratik Araçlar:</strong> Nefes teknikleri, duygu düzenleme çalışmaları ve özgüven geliştirme egzersizleri.</li> <br> 
        <li><strong>Mini Testler:</strong> Kaygı seviyesi ve duygu düzenleme üzerine kısa değerlendirme testleri.</li> <br> 
        <li><strong>Destek & Yardım:</strong> Kriz hatları, yönlendirmeler ve sık sorulan sorular.</li> <br> 
        <li><strong>Faydalı Linkler:</strong> Güvenilir kurumlar ve ek kaynaklar.</li> <br> <br>
    </ul>

    









        <!-- Ana Kartlar -->
      <div class="row">

        <div class="col-md-6 mb-3">
          <div class="card ana-kart p-3">
          <h5>📘 Ruh Sağlığı Bilgilendirme</h5>
      <p>
         Ruh sağlığı, bireyin duygu, düşünce ve davranışlarının dengede olmasıdır.
       Anksiyete, depresyon, stres ve panik atak gibi durumlar herkesin yaşamında
         farklı dönemlerde ortaya çıkabilir.
            </p>

       <ul>
          <li><i>Depresyon</i>: Uzun süreli mutsuzluk ve ilgi kaybı</li>
           <li><i>Anksiyete</i>: Sürekli kaygı ve huzursuzluk hali</li>
             <li><i>Stres</i>: Zorlayıcı durumlara verilen doğal tepki</li>
            </ul>

            <a href="depresyon.php">Detaylı Bilgi →</a>
</div>
        </div>

      

         <!--  DRAG & DROP KARTI  -->
        <div class="col-md-6 mb-3">
          <div class="card ana-kart p-3 draggable"> <h5>🧪 Kendini Değerlendir</h5>
<p>
Ruh haliniz hakkında fikir edinmek için kısa değerlendirme testlerini
çözebilir, ardından size özel önerilere ulaşabilirsiniz.
</p>

<ul>
  <li>Mini Ruh Hali Testi</li>
  <li>Kaygı & stres değerlendirmesi</li>
  <li>Egzersiz önerileri</li>
</ul>

<a href="minitest.php">Mini Teste Git →</a><br>
<a href="egzersiz.php">Egzersizleri İncele →</a>
          </div>    
         


           </div>  <!-- “Drag & Drop API kullanıldı.
                         Öğeler draggable olarak tanımlandı ve dragstart event’i ile sürükleme işlemi aktif.”-->
      </div>



<!-- KAYAN RESİMLER -->
<div class="image-marquee">
  <div class="kayan-resim">
    <img src="img/meditasyon.jpg"> 
    <img src="img/a.jpg">
    <img src="img/sunrise.jpg">
    <img src="img/yyyjpg.jpg">
    <img src="img/breath.jpg">
    
   
    
  </div>
</div>



      <!-- Kayan Yazılar -->
      <div class="marquee-container mb-4">
        <p id="marquee"></p>
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

