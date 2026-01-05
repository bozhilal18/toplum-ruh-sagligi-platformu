
// index kısmında kayan yazılar

const mesajlar = [
  "Nefes egzersizi önerileri güncellendi!",
  "Egzersizler bölümünde nefes ve gevşeme çalışmaları!",
  "Kendinize her zaman iyi bakmayı unutmayın!",
  "Acil durumlarda Yardım Hatları sayfasını inceleyin!",
  "Mini testler tanı amacı taşımaz!",
  "Egzersizler farkındalık kazandırmayı hedefler!",
  
  
];

let i = 0;
const marquee = document.getElementById("marquee");

if (marquee) {
  function kaydir() {
    marquee.textContent = mesajlar[i];
    i = (i + 1) % mesajlar.length;
  }

  kaydir(); // ilk mesaj hemen gelsin
  setInterval(kaydir, 3000);
}



// Drag & Drop Kartlar
const draggables = document.querySelectorAll('.draggable');
draggables.forEach(el => {
    el.setAttribute('draggable', true);
    el.addEventListener('dragstart', e => e.dataTransfer.setData('text/plain', el.innerHTML));
});



// kutu icindeki değişen yazılar
const tips = [
    
    "Kaygılandığında bulunduğun ortamı fark et.",
    "Kendine kısa molalar vermeyi unutma.",
    "Kaygının geçici olduğunu hatırla."
];

let tipIndex = 0;
const tipText = document.getElementById("tip-text");

if (tipText) {
    setInterval(() => {
        tipText.textContent = tips[tipIndex];
        tipIndex = (tipIndex + 1) % tips.length;
    }, 3500); // 3.5 saniyede bir değişir

}






//mini test sistemi

// Test soruları
const testler = {
  depresyon: [
    "Son 2 haftadır kendinizi mutsuz hissettiniz mi?",
    "Günlük aktivitelerden eskisi kadar keyif almıyor musunuz?",
    "Enerjinizin azaldığını hissediyor musunuz?",
    "Uykuya dalmakta zorlanıyor musunuz?",
    "Sabahları yorgun uyanıyor musunuz?",
    "Konsantre olmakta zorlanıyor musunuz?",
    "Gelecek hakkında umutsuz hissediyor musunuz?",
    "Kendinizi değersiz hissettiğiniz oluyor mu?",
    "Sosyal ortamlardan kaçınma isteğiniz arttı mı?",
    "Günlük işleri ertelediğiniz oluyor mu?"
  ],

  anksiyete: [
    "Sık sık endişeli hissediyor musunuz?",
    "Nedensiz huzursuzluk yaşadığınız oluyor mu?",
    "Kalp çarpıntısı yaşıyor musunuz?",
    "Gerginlik hissiniz artıyor mu?",
    "Kötü bir şey olacakmış gibi hissediyor musunuz?",
    "Kaslarınızda sürekli bir gerginlik var mı?",
    "Uykuya dalmakta zorlanıyor musunuz?",
    "Kontrolü kaybedeceğinizi düşündüğünüz oluyor mu?",
    "Karar verirken aşırı zorlanıyor musunuz?",
    "Endişeler günlük hayatınızı etkiliyor mu?"
  ],

  stres: [
    "Günlük yaşamda baskı altında hissediyor musunuz?",
    "Zaman yetmiyormuş gibi hissediyor musunuz?",
    "Kolay sinirlendiğiniz oluyor mu?",
    "Sürekli yorgun musunuz?",
    "Baş ağrısı yaşıyor musunuz?",
    "Omuz-boyun gerginliği oluyor mu?",
    "Dinlenmekte zorlanıyor musunuz?",
    "İşleri ertelediğiniz oluyor mu?",
    "Kendinize zaman ayıramıyor musunuz?",
    "Stresle baş etmekte zorlanıyor musunuz?"
  ],

  panik: [
    "Ani korku atakları yaşıyor musunuz?",
    "Nefes almakta zorlandığınız oluyor mu?",
    "Kalp krizi geçiriyormuş gibi hissettiğiniz oldu mu?",
    "Baş dönmesi yaşıyor musunuz?",
    "Kontrolü kaybedeceğinizi düşündünüz mü?",
    "Terleme veya titreme oluyor mu?",
    "Göğüs sıkışması hissi yaşıyor musunuz?",
    "Ataklar aniden mi geliyor?",
    "Atak sonrası tekrarlar mı diye korkuyor musunuz?",
    "Yalnız kalmaktan çekiniyor musunuz?"
  ],

  uyku: [
    "Uykuya dalmakta zorlanıyor musunuz?",
    "Gece sık sık uyanıyor musunuz?",
    "Sabah erken uyanıp tekrar uyuyamıyor musunuz?",
    "Uykunuz dinlendirici değil mi?",
    "Gündüz uykulu hissediyor musunuz?",
    "Gece düşünceler uyumanızı engelliyor mu?",
    "Hafta sonu bile dinlenemiyor musunuz?",
    "Yatmadan önce telefon kullanıyor musunuz?",
    "Uyku saatleriniz düzensiz mi?",
    "Uyku problemleri günlük hayatınızı etkiliyor mu?"
  ]
};

// Global değişkenler
let aktifTur = "";
let aktifTest = [];
let index = 0;
let puan = 0;

// HTML alanları
const soruAlani = document.getElementById("soru");
const sonucAlani = document.getElementById("sonuc");
const onerilerAlani = document.getElementById("oneriler-alani");

// TEST BAŞLAT (🔥 TEMİZLEME BURADA)
function testBaslat(tur) {

  // 🔴 ESKİ SONUÇLARI TEMİZLE
  sonucAlani.style.display = "none";
  sonucAlani.innerHTML = "";
  onerilerAlani.innerHTML = "";

  // 🔵 TESTİ SIFIRDAN BAŞLAT
  aktifTur = tur;
  aktifTest = testler[tur];
  index = 0;
  puan = 0;

  document.getElementById("test-alani").style.display = "block";
  soruAlani.textContent = aktifTest[index];

  // (isteğe bağlı) yukarı kaydır
  window.scrollTo({ top: 0, behavior: "smooth" });
}

// CEVAPLA
function cevapla(deger) {
  puan += deger;
  index++;

  if (index < aktifTest.length) {
    soruAlani.textContent = aktifTest[index];
  } else {
    testiBitir();
  }
}
function testiBitir() {
  try {
    document.getElementById("test-alani").style.display = "none";
    sonucAlani.style.display = "block";

    let mesaj = "";
    let renk = "";
    let kisaOneri = "";
    let oneriler = "";

    // Risk seviyesi
    if (puan <= 3) {
      mesaj = "🟢 Düşük risk";
      renk = "#d4edda";
    } else if (puan <= 6) {
      mesaj = "🟡 Orta risk";
      renk = "#fff3cd";
    } else {
      mesaj = "🔴 Yüksek risk";
      renk = "#f8d7da";
    }

    // Test türüne göre içerik
    if (aktifTur === "depresyon") {
      kisaOneri = "Son zamanlarda ruh halinizde zorlanmalar olabilir. Küçük destekleyici adımlar faydalı olabilir.";
      oneriler = `
        <a href="depresyon.php">📘 Depresyon Bilgilendirme</a><br>
        <a href="egzersiz.php">🌿 Pratik Egzersizler</a><br>
      `;
    } else if (aktifTur === "anksiyete") {
      kisaOneri = "Kaygı düzeyiniz artmış olabilir. Nefes ve farkındalık çalışmaları rahatlamaya yardımcı olabilir.";
      oneriler = `
        <a href="anksiyete.php">📘 Anksiyete Bilgilendirme</a><br>
        <a href="egzersiz.php">🌿 Pratik Egzersizler</a><br>
      `;
    } else if (aktifTur === "stres") {
      kisaOneri = "Yoğun stres altında hissediyor olabilirsiniz. Kısa molalar ve gevşeme teknikleri faydalı olabilir.";
      oneriler = `
        <a href="stres.php">📘 Stres Yönetimi</a><br>
        <a href="egzersiz.php">🌿 Pratik Egzersizler</a><br>
      `;
    } else if (aktifTur === "panik") {
      kisaOneri = "Yaşadığınız belirtiler zorlayıcı olabilir. Panik belirtilerini tanımak ve destek almak önemlidir.";
      oneriler = `
        <a href="panik.php">📘 Panik Atak Bilgilendirme</a><br>
        <a href="yardim-hatlari.php">📞 Yardım Hatları</a><br>
      `;
    } else if (aktifTur === "uyku") {
      kisaOneri = "Uyku düzeninizde zorlanmalar olabilir. Rahatlatıcı rutinler uyku kalitesini artırabilir.";
      oneriler = `
        <a href="uyku.php">📘 Uyku Bozuklukları</a><br>
        <a href="egzersiz.php">🌿 Pratik Egzersizler</a><br>
      `;
    }

    // SONUCU YAZDIR
    sonucAlani.style.background = renk;
    sonucAlani.innerHTML = `
      <h5>${mesaj}</h5>
      <p class="mt-2">${kisaOneri}</p>
    `;

    onerilerAlani.innerHTML = `
      <h6><b>İlgili İçerikler</b></h6>
      ${oneriler}
    `;

    // localStorage (senin mevcut özelliğin)
    localStorage.setItem("sonTest", mesaj);

    // --- DB'ye kaydetme (analiz için) ---
    const maxScore = aktifTest.length;

    let levelText = "dusuk";
    if (puan <= 3) levelText = "dusuk";
    else if (puan <= 6) levelText = "orta";
    else levelText = "yuksek";

    // DB kaydı dene (giriş yoksa API false döner)
    sonucuKaydet(aktifTur, puan, maxScore, levelText);

  } catch (error) {
    console.error("Test sonucu oluşturulurken hata:", error);
    alert("Bir hata oluştu. Lütfen sayfayı yenileyin.");
  }
}


// Yardım Hatları - Açılır Bilgi
const accButtons = document.querySelectorAll(".accordion-btn");

accButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        const content = btn.nextElementSibling;

        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
});


async function sonucuKaydet(testKey, score, maxScore, level) {
  try {
    const res = await fetch("api/save_result.php", {
      method: "POST",
      headers: {"Content-Type":"application/json"},
      body: JSON.stringify({ testKey, score, maxScore, level })
    });
    const data = await res.json();

    if (data.ok === false) {
      onerilerAlani.innerHTML += `
        <div class="alert alert-warning mt-3">
          Sonuçlarınızı kaydetmek için <a href="auth/login.php">giriş yapmanız</a> gerekir.
        </div>
      `;
    }

    console.log("Kayıt:", data);
  } catch (e) {
    console.log("Kayıt hatası:", e);
  }
}
