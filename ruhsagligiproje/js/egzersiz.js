const daire = document.getElementById("nefes-daire");
const metin = document.getElementById("nefes-metin");
const turBilgi = document.getElementById("tur-bilgi");
const sayac = document.getElementById("sayac");

let tur = 1;
const maxTur = 3;

function nefesBaslat() {
  tur = 1;
  turBilgi.textContent = `Tur: ${tur} / ${maxTur}`;
  nefesDongu();
}

function nefesDongu() {
  geriSayim("Nefes al", 4, () => {
    geriSayim("Tut", 4, () => {
      geriSayim("Nefes ver", 4, () => {
        if (tur < maxTur) {
          tur++;
          turBilgi.textContent = `Tur: ${tur} / ${maxTur}`;
          nefesDongu();
        } else {
          metin.textContent = "Egzersiz tamamlandı 🌿";
          sayac.textContent = "";
          daire.classList.remove("nefes-al", "nefes-ver");
        }
      }, "nefes-ver");
    });
  }, "nefes-al");
}

function geriSayim(yazi, saniye, callback, sinif = "") {
  let kalan = saniye;
  metin.textContent = `${yazi} (${kalan})`;
  sayac.textContent = "";

  daire.classList.remove("nefes-al", "nefes-ver");
  if (sinif) daire.classList.add(sinif);


 aktifInterval = setInterval(() => {
  kalan--;
  metin.textContent = `${yazi} (${kalan})`;

  if (kalan === 0) {
    clearInterval(aktifInterval);
    callback();
  }
}, 1000);

}


let nefesCalisiyor = false;
let aktifInterval = null;

function nefesKontrol() {
  if (!nefesCalisiyor) {
    nefesCalisiyor = true;
    document.getElementById("nefes-btn").textContent = "Egzersizi Bitir";
    nefesBaslat();
  } else {
    nefesiBitir();
  }
}

function nefesiBitir() {
  nefesCalisiyor = false;

  document.getElementById("nefes-btn").textContent = "Egzersizi Başlat";
  metin.textContent = "Egzersiz durduruldu 🌿";
  sayac.textContent = "";
  daire.classList.remove("nefes-al", "nefes-ver");

  clearInterval(aktifInterval);
}


// kas gevsetme egzersizi

const muscles = [
  "Ayaklarını sık – gevşet",
  "Bacaklarını sık – gevşet",
  "Omuzlarını sık – gevşet",
  "Ellerini sık – gevşet",
  "Yüz kaslarını gevşet"
];

let muscleIndex = 0;

function nextMuscle() {
  try {
    const text = document.getElementById("muscle-text");
    if (!text) throw "Kas metni bulunamadı";

    text.textContent = muscles[muscleIndex];
    muscleIndex++;

  } catch (err) {
    console.error("Kas egzersizi hatası:", err);
  }
}

class Egzersiz {
  constructor(ad) {
    this.ad = ad;
  }

  baslat() {
    console.log(this.ad + " egzersizi başlatıldı");
  }
}

// kullanım
const nefesEgzersizi = new Egzersiz("Nefes");





// Topraklama 5-4-3-2-1 — Başlat / Durdur / Başa Dön kontrollü
document.querySelectorAll('.grounding-box').forEach((box) => {
  const items = Array.from(box.querySelectorAll('span'));
  if (!items.length) return;

  let idx = 0;
  let timer = null;

  // İpucu
  const hint = document.createElement('div');
  hint.className = 'grounding-hint';
  hint.style.textAlign = 'center';
  hint.style.marginTop = '10px';

  // Kontroller
  const controls = document.createElement('div');
  controls.className = 'grounding-controls';
  controls.style.display = 'flex';
  controls.style.gap = '10px';
  controls.style.justifyContent = 'center';
  controls.style.marginTop = '10px';

  const btnStart = document.createElement('button');
  btnStart.type = 'button';
  btnStart.className = 'btn btn-sm btn-primary';
  btnStart.textContent = 'Başlat';

  const btnStop = document.createElement('button');
  btnStop.type = 'button';
  btnStop.className = 'btn btn-sm btn-outline-primary';
  btnStop.textContent = 'Durdur';

  const btnReset = document.createElement('button');
  btnReset.type = 'button';
  btnReset.className = 'btn btn-sm btn-outline-secondary';
  btnReset.textContent = 'Başa Dön';

  controls.appendChild(btnStart);
  controls.appendChild(btnStop);
  controls.appendChild(btnReset);

  // HTML'e dokunmadan ekle
  box.parentElement.appendChild(hint);
  box.parentElement.appendChild(controls);

  function setActive(i) {
    items.forEach((el, j) => {
      el.classList.toggle('active', j === i);
      el.classList.toggle('done', j < i);
    });
    hint.textContent = "Şimdi: " + items[i].textContent + " (istersen tıklayıp seçebilirsin)";
  }

  function start() {
    if (timer) return; // zaten çalışıyorsa tekrar başlatma
    setActive(idx);

    timer = setInterval(() => {
      idx = (idx + 1) % items.length;
      if (idx === 0) items.forEach(el => el.classList.remove('done')); // döngü başa sarınca reset
      setActive(idx);
    }, 5000); // hız (ms) -> 6000 yaparsan daha da yavaşlar
  }

  function stop() {
    clearInterval(timer);
    timer = null;
    hint.textContent = "Durduruldu. Devam etmek için Başlat'a bas.";
  }

  function resetToStart() {
    stop(); // önce durdur
    idx = 0; // başa sar
    items.forEach(el => el.classList.remove('done'));
    setActive(0);
    hint.textContent = "Başa döndü. Hazır olduğunda Başlat'a bas.";
  }

  // İlk durum
  setActive(0);
  hint.textContent = "Hazır olduğunda Başlat'a bas.";

  btnStart.addEventListener('click', start);
  btnStop.addEventListener('click', stop);
  btnReset.addEventListener('click', resetToStart);

  // Span'a tıklayınca o adıma geçsin
  box.addEventListener('click', (e) => {
    const t = e.target;
    if (t && t.tagName === 'SPAN') {
      idx = items.indexOf(t);
      setActive(idx);
    }
  });
});
