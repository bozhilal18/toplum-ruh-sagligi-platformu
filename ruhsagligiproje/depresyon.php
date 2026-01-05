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


<h2 class="baslik">Depresyon</h2> 
<hr>
    <p>
       Depresyon, kişinin duygularını, düşüncelerini, davranışlarını ve günlük işlevselliğini etkileyen ciddi fakat tedavi edilebilir bir ruh sağlığı durumudur. Sadece geçici bir üzgünlük hali değildir; en az iki hafta boyunca süren çökkün ruh hali, ilgi ve zevk kaybı, enerji düşüklüğü gibi belirtilerle kendini gösterir. </p> <br>

<p>Beyindeki kimyasal dengeler, kişinin yaşam deneyimleri, stres düzeyi, genetik yatkınlık gibi birçok etken bir araya gelerek depresyonun ortaya çıkmasına katkıda bulunabilir. Depresyon, kişinin işe odaklanmasını, sosyal ilişkilerini, fiziksel sağlığını ve günlük aktivitelerini belirgin şekilde bozabilir.</p> <br>

<p>Doğru müdahalelerle tamamen iyileşme mümkündür. Psikoterapi, ilaç tedavisi, yaşam tarzı değişiklikleri ve sosyal destek, iyileşme sürecine önemli katkı sağlar. Depresyon tedavi edilmediğinde kronikleşebilir, bu nedenle belirtilerin fark edilmesi ve destek alınması çok önemlidir.</p> <br>
    
   
<p>
Daha fazla bilgi için 
<a href="#video" class="metin-linki">tıklayarak
 videoya ulaşabilirsin!</a>
</p>


  <br>
    <br>
    <h4> Temel Başlıkları</h4>

    <table>
        <tr>
            <th class="underline">Başlık</th>
            <th class="underline">Kısa Açıklama</th>
        </tr>
        <tr>
            <td class="italic">Belirtiler</td>
            <td>Duygu durum değişiklikleri, enerji düşüklüğü ve günlük işlevlerde azalma.</td>
        </tr>
        <tr>
            <td class="italic">Nedenleri</td>
            <td>Genetik, biyolojik, psikolojik ve çevresel faktörlerin birleşimi.</td>
        </tr>
        <tr>
            <td class="italic ">Tedavi Yöntemleri</td>
            <td>Psikoterapi, ilaç tedavisi ve yaşam tarzı düzenlemeleri.</td>
        </tr>
        <tr>
            <td class="italic">Kendini İzleme</td>
            <td>Duygu takibi, günlük planlama ve düzenli alışkanlık oluşturma.</td>
        </tr>

        <tr> 
        <td class="italic">Yanlış Bilgi</td>
       <td class="line-through ">Depresyon sadece üzgün olmaktır. <br> İrade ile kolayca geçer</td>
        </tr>
       
    </table>

    <br>
    <br>
    <br>





<!-- TABLO --> 



    <h4> <i> → Belirtiler</i></h4>
    <p>
        Depresyonun belirtileri hem duygusal hem de fiziksel olarak ortaya çıkabilir. 
        En yaygın belirtiler arasında uzun süreli üzgünlük, umutsuzluk hissi, daha önce zevk veren 
        aktivitelere ilgi kaybı ve yoğun enerji düşüklüğü bulunur. Kişi günlük işlerini yapmakta 
        zorlanabilir, karar vermede güçlük yaşayabilir ve sosyal ortamlardan uzaklaşabilir.
        Fiziksel belirtiler arasında iştah değişimleri, uyku düzeninde bozulma, baş ağrıları ve 
        bedensel ağrılar görülebilir. Bu belirtiler en az iki hafta boyunca devam ediyorsa depresyon 
        açısından değerlendirilmesi önerilir.
    </p>
<br>
<br> 


    <h4> <i> → Nedenleri</i> </h4>
    <p>
        Depresyonun tek bir nedeni yoktur; genellikle birden fazla faktörün birleşimi sonucu ortaya çıkar.
        Genetik yatkınlık (ailede depresyon öyküsü bulunması), beyindeki kimyasal dengesizlikler
        ve hormonal değişiklikler biyolojik nedenler arasında yer alır. Psikolojik nedenler arasında 
        travmatik deneyimler, stresli yaşam olayları, kayıplar, özgüven düşüklüğü ve sürekli olumsuz düşünme
        kalıpları bulunur. Çevresel faktörler olarak ekonomik zorluklar, iş/okul baskısı, yalnızlık ve 
        sosyal destek eksikliği depresyonu tetikleyebilir. Genellikle bu faktörlerin birleşimi kişiyi 
        depresyona yatkın hale getirir.
    </p>
    <br>
    <br>

    <h4> <i> → Tedavi Yöntemleri</i></h4>
    <p>
        Depresyon tedavi edilebilir bir ruh sağlığı durumudur. En etkili tedavi yöntemlerinden biri 
        psikoterapidir; özellikle Bilişsel Davranışçı Terapi (BDT), kişinin olumsuz düşünce kalıplarını 
        fark etmesini ve daha sağlıklı başa çıkma yöntemleri geliştirmesini sağlar.
        Orta ve ağır depresyon türlerinde doktor tarafından antidepresan ilaçlar da reçete edilebilir.
        Bunun yanında düzenli uyku, dengeli beslenme, yürüyüş gibi hafif fiziksel aktiviteler, sosyal 
        destek almak ve günlük rutinler oluşturmak iyileşme sürecine büyük katkı sağlar.
        Tedavi süreci kişiye özeldir; en doğru yaklaşım bir uzman tarafından belirlenmelidir.
    </p>
    <br>
    <br>

    <h4> <i> → Kendini İzleme / Günlük Önerileri</i></h4>
    <p>
        Depresyonla başa çıkmanın önemli yollarından biri kişinin kendini düzenli olarak izlemesidir.
        Bunun için duygu günlüğü tutmak, gün içindeki ruh halini 1–10 arası değerlendirmek ve tetikleyici 
        olayları kaydetmek faydalıdır. Günlük küçük hedefler koymak (örneğin 10 dakikalık yürüyüş, 
        bir bardak su içmeyi hatırlamak, kısa bir nefes egzersizi yapmak) kişinin kontrol duygusunu 
        artırır. Ayrıca sosyal izolasyonu azaltmak için haftada en az bir kez kısa bir görüşme planlamak, 
        uyku-uyanıklık döngüsünü düzenlemek ve ekran süresini azaltmak da iyileşmeyi destekler.
        Kişi kendi ilerlemesini takip ederek hangi yöntemlerin işe yaradığını daha net görebilir.
    </p>

<br>

    <hr>
    

<div class="dep-kutu">
    <strong>Daha fazla bilgi almak ister misiniz?</strong><br>
    Depresyon belirtilerinizin şiddeti hakkında fikir edinmek için
    sitemizde yer alan <a href="minitest.php" class="metin-linki">Mini Ruh Hali Testi</a>ni çözebilirsiniz.
</div>


    <br>
    <br>
    <br>
    <br>
                                                                                                                                                                                                                                                                                                                                                                    






<h5 id="video" >Bilgilendirici Video</h5> 

<iframe 
    class="info-frame" 
    src="https://www.youtube.com/embed/Uq36_4qVBEY"  
    title="Depresyon Bilgilendirme"
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen> 
</iframe>
<br><br> 

<p>
Bu&nbsp;&nbsp;&nbsp;çoklu&nbsp;&nbsp;&nbsp;boşluk&nbsp;&nbsp;&nbsp;örneğidir.
</p>

<!-- YUKARI ÇIK --> 
<a href="#top">Yukarı Çık</a> 
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
