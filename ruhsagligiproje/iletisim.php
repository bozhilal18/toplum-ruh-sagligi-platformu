
<?php
session_start();
require_once __DIR__ . "/classes/Iletisim.php";

$iletisim = new Iletisim();

$hata = "";
$basarili = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ad    = trim($_POST["ad"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $konu  = trim($_POST["konu"] ?? "");
    $mesaj = trim($_POST["mesaj"] ?? "");

    if ($ad === "" || $email === "" || $mesaj === "") {
        $hata = "Lütfen gerekli alanları doldurun.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $hata = "Lütfen geçerli bir e-posta adresi girin.";
    } else {
        $adTemiz    = htmlspecialchars($ad, ENT_QUOTES, "UTF-8");
        $mesajTemiz = htmlspecialchars($mesaj, ENT_QUOTES, "UTF-8");

        // konu boş gelirse varsayılan
        if ($konu === "") $konu = "Bilgi";

        $iletisim->ekle($adTemiz, $email, $konu, $mesajTemiz);
        $basarili = true;
    }
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

    <h2 class="baslik">İletişim Formu</h2>
    
<hr>
<br>
<br>

<p>
Bu sayfa üzerinden bizimle iletişime geçebilir, görüş ve önerilerinizi
bizimle paylaşabilirsiniz. <br>
Gönderilen mesajlar bilgilendirme amaçlıdır
ve acil durumlar için kullanılmamalıdır. <br>
</p>

<br>
<br>



    <h4>Mesajlar Nasıl Değerlendirilir?</h4>

<ul>
  <li>Gönderilen mesajlar bilgilendirme ve geri bildirim amaçlıdır.</li>
  <li>Mesajlar gizlilik çerçevesinde değerlendirilir.</li>
  <li>Acil durumlar için bu form kullanılmamalıdır.</li>
</ul>


<br>
<br>

    <hr>
    <h3>İletişim</h3>

    <?php if(!empty($hata)): ?>
  <div class="alert alert-danger"><?php echo $hata; ?></div>
<?php endif; ?>

<?php if($basarili): ?>
  <div class="alert alert-success">Mesajınız başarıyla gönderildi 🌿</div>
<?php endif; ?>


    <form method="post" class="iletisim-form">

  <div class="form-grup">
    <label for="ad">Ad Soyad</label>
    <input type="text" id="ad" name="ad" required>
  </div>

  <div class="form-grup">
    <label for="email">E-posta</label>
    <input type="email" id="email" name="email" required autocomplete="email" placeholder="ornek@mail.com">

  </div>

  <div class="form-grup">
    <label for="konu">Konu</label>
    <select id="konu" name="konu">
      <option>Bilgi</option>
      <option>Destek</option>
      <option>Geri Bildirim</option>
    </select>
  </div>

  <div class="form-grup">
    <label for="mesaj">Mesaj</label>
    <textarea id="mesaj" name="mesaj" rows="4" required></textarea>
  </div>

  <button type="submit" class="form-btn">Gönder</button>

  <p class="form-bilgi">
    <i><b>Bu form aracılığıyla paylaştığınız veriler gizlilik politikamız çerçevesinde korunur.</b></i>
  </p>

</form>
       
    </form>
    <br>
    <br>



   <div class="bilgikutusu"> <h5 style="color:red"> önemli!</h5>
  <p>
    Ruh sağlığı ile ilgili konularda doğru bilgiye ulaşmak önemlidir. <br>
    Bu platform bilgilendirme amacı taşımaktadır ve profesyonel tanı
    veya tedavi yerine geçmez.
  </p>

  <b> <p>
    Acil durumlarda lütfen

    <a href="yardim-hatlari.php">Yardım Hatları</a> sayfasını inceleyiniz. 
  </p> </b>
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