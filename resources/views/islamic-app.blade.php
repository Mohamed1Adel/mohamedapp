<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>ليالي - التطبيق الإسلامي</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400;500;600;700&family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;-webkit-tap-highlight-color:transparent}
:root{
  --green:#1a5c3a;--green2:#22734a;--green3:#2d8f5e;
  --gold:#c9952a;--gold2:#e8b84b;--gold3:#fde68a;
  --bg:#0b1610;--bg2:#101e16;--bg3:#162b1e;--bg4:#1c3826;
  --card:#1e3328;--card2:#243d2e;
  --text:#f0faf2;--text2:#86c49a;--text3:#4ade80;--text4:#d1fae5;
  --border:#2d6a4f30;--border2:#2d6a4f55;
  --r:14px;--r2:20px;
}
html,body{height:100%;overflow:hidden}
body{font-family:'Cairo',sans-serif;background:var(--bg);color:var(--text);position:relative}
.arabic{font-family:'Noto Naskh Arabic',serif}

/* SCREENS */
.screen,.screenx{display:none;height:100vh;flex-direction:column;overflow:hidden}
.screen.active,.screenx.active{display:flex}

/* SPLASH */
#splash{align-items:center;justify-content:center;gap:16px;background:var(--bg)}
.splash-logo{width:90px;height:90px;background:linear-gradient(135deg,var(--green2),var(--green3));border-radius:28px;display:flex;align-items:center;justify-content:center;font-size:44px;animation:breathe 2.5s ease-in-out infinite;box-shadow:0 0 40px #2d8f5e30}
.splash-title{font-size:38px;font-weight:700;color:var(--gold2);letter-spacing:6px}
.splash-sub{color:var(--text2);font-size:14px;letter-spacing:1px}
.splash-track{width:60px;height:3px;background:var(--bg3);border-radius:2px;overflow:hidden;margin-top:24px}
.splash-fill{height:100%;background:linear-gradient(90deg,var(--green3),var(--gold2));animation:load 2s ease-out forwards;width:0}
@keyframes breathe{0%,100%{transform:scale(1);box-shadow:0 0 40px #2d8f5e30}50%{transform:scale(1.04);box-shadow:0 0 60px #2d8f5e50}}
@keyframes load{to{width:100%}}
@keyframes spin{to{transform:rotate(360deg)}}
@keyframes fadeUp{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}

/* HEADER */
.header{background:var(--bg2);padding:52px 20px 20px;border-bottom:1px solid var(--border2)}
.header-row{display:flex;justify-content:space-between;align-items:center;margin-bottom:10px}
.header-date{font-size:12px;color:var(--text2);background:var(--bg3);padding:4px 10px;border-radius:20px;border:1px solid var(--border2)}
.header-logo{width:34px;height:34px;background:var(--green2);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:18px}
.header-greeting{font-size:13px;color:var(--text2);margin-bottom:2px}
.header-name{font-size:22px;font-weight:700;color:var(--text)}

/* PAGE HEADER */
.page-header{background:var(--bg2);padding:52px 16px 16px;border-bottom:1px solid var(--border2);display:flex;align-items:center;gap:12px;flex-shrink:0}
.back-btn{width:36px;height:36px;background:var(--bg3);border:1px solid var(--border2);border-radius:10px;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:18px;flex-shrink:0;color:var(--text2)}

/* SCROLL */
.scroll{flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch;padding-bottom:80px}
.scroll::-webkit-scrollbar{display:none}

/* PRAYER WIDGET */
.pw{margin:14px;background:var(--bg3);border-radius:var(--r2);padding:18px;border:1px solid var(--border2);cursor:pointer;position:relative;overflow:hidden}
.pw-glow{position:absolute;top:-30px;right:-30px;width:120px;height:120px;background:radial-gradient(circle,#2d8f5e25,transparent);pointer-events:none}
.pw-label{font-size:11px;color:var(--text2);letter-spacing:.5px;margin-bottom:6px}
.pw-next{font-size:20px;font-weight:700;color:var(--text);margin-bottom:2px}
.pw-time{font-size:42px;font-weight:300;color:var(--gold2);letter-spacing:3px;line-height:1}
.pw-cd{font-size:12px;color:var(--text2);margin-top:6px}
.pw-pills{display:flex;gap:6px;margin-top:14px}
.pw-pill{flex:1;background:var(--bg4);border:1px solid var(--border);border-radius:10px;padding:7px 4px;text-align:center;font-size:9px;color:var(--text2)}
.pw-pill.now{background:var(--green2);border-color:var(--green3);color:#fff}
.pw-pill span{display:block;font-size:11px;color:var(--gold3);margin-top:2px;font-weight:600}
.pw-pill.now span{color:#fff}

/* SECTION */
.sec-label{padding:16px 16px 8px;font-size:11px;color:var(--text2);letter-spacing:1.5px;font-weight:600;text-transform:uppercase}

/* QUICK GRID */
.qgrid{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;padding:0 14px}
.qi{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:12px 6px;text-align:center;cursor:pointer;transition:transform .1s,background .15s}
.qi:active{transform:scale(.94);background:var(--card2)}
.qi-icon{font-size:26px;margin-bottom:5px}
.qi-lbl{font-size:10px;color:var(--text2);font-weight:600}

/* DAILY CARD */
.day-card{margin:14px;background:var(--card);border:1px solid var(--border2);border-radius:var(--r2);padding:18px;cursor:pointer;position:relative;overflow:hidden}
.day-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--green2),var(--gold2),var(--green2))}
.dc-badge{display:inline-flex;align-items:center;gap:4px;font-size:11px;color:var(--text3);background:#4ade8015;border:1px solid #4ade8025;padding:3px 10px;border-radius:20px;margin-bottom:12px}
.dc-arabic{font-family:'Noto Naskh Arabic',serif;font-size:22px;color:var(--text);line-height:1.9;text-align:right;direction:rtl;margin-bottom:12px}
.dc-trans{font-size:13px;color:var(--text2);line-height:1.6;border-top:1px solid var(--border);padding-top:10px}
.dc-src{font-size:11px;color:var(--gold2);margin-top:8px}

/* SEARCH */
.search{margin:10px 14px;display:flex;background:var(--card);border:1px solid var(--border2);border-radius:12px;overflow:hidden;flex-shrink:0}
.search input{flex:1;padding:12px 14px;background:none;border:none;outline:none;color:var(--text);font-size:14px;font-family:'Cairo',sans-serif;direction:rtl;text-align:right}
.search input::placeholder{color:var(--text2);opacity:.5}
.search button{padding:12px 14px;background:var(--green2);border:none;color:#fff;cursor:pointer;font-size:16px}

/* SURAH */
.surah-item{display:flex;align-items:center;gap:12px;padding:13px 16px;border-bottom:1px solid var(--border);cursor:pointer;transition:background .1s}
.surah-item:active{background:var(--card)}
.s-num{width:36px;height:36px;background:var(--bg3);border:1px solid var(--border2);border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:12px;color:var(--text3);font-weight:700;flex-shrink:0}
.s-info{flex:1}
.s-en{font-size:15px;font-weight:600;color:var(--text)}
.s-meta{font-size:11px;color:var(--text2);margin-top:2px}
.s-ar{font-family:'Noto Naskh Arabic',serif;font-size:19px;color:var(--gold2)}

/* AYAH */
.bismillah{text-align:center;font-family:'Noto Naskh Arabic',serif;font-size:26px;color:var(--gold2);padding:20px;margin-bottom:8px}
.ayah-block{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:16px;margin:0 14px 10px}
.ayah-text{font-family:'Noto Naskh Arabic',serif;font-size:22px;line-height:2;direction:rtl;text-align:right;color:var(--text);margin-bottom:10px}
.ayah-tr{font-size:13px;color:var(--text2);line-height:1.6;border-top:1px solid var(--border);padding-top:10px}
.ayah-n{font-size:11px;color:var(--text3);margin-top:6px}

/* PRAYER PAGE */
.loc-bar{display:flex;align-items:center;gap:6px;margin:10px 14px;flex-shrink:0}
.loc-input{flex:1;padding:10px 12px;background:var(--card);border:1px solid var(--border2);border-radius:10px;outline:none;color:var(--text);font-size:13px;text-align:center;font-family:'Cairo',sans-serif}
.loc-input::placeholder{color:var(--text2);opacity:.5}
.loc-btn{padding:10px 14px;background:var(--green2);border:none;border-radius:10px;color:#fff;font-size:13px;cursor:pointer;white-space:nowrap;font-family:'Cairo',sans-serif;font-weight:600}
.p-card{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:15px 18px;display:flex;justify-content:space-between;align-items:center;margin:0 14px 8px}
.p-card.cur{border-color:var(--green3);background:var(--bg3)}
.p-name{font-size:17px;font-weight:600}
.p-time{font-size:22px;color:var(--gold2);font-weight:300}
.cur-pill{font-size:10px;color:var(--green3);background:#2d8f5e20;padding:2px 8px;border-radius:20px;margin-top:3px;display:inline-block}
.qibla-box{background:var(--card);border:1px solid var(--border);border-radius:var(--r2);padding:20px;text-align:center;margin:14px}
.qibla-lbl{font-size:13px;font-weight:600;margin-bottom:12px;color:var(--text2)}
.qibla-deg{font-size:34px;color:var(--gold2);font-weight:300}

/* PERMISSION BOX */
.perm-box{background:var(--card);border:1px solid var(--border2);border-radius:var(--r2);padding:24px;margin:14px;text-align:center}
.perm-icon{font-size:48px;margin-bottom:14px}
.perm-title{font-size:18px;font-weight:700;margin-bottom:8px}
.perm-desc{font-size:13px;color:var(--text2);line-height:1.6;margin-bottom:18px}
.perm-btn{width:100%;padding:14px;background:linear-gradient(135deg,var(--green2),var(--green3));border:none;border-radius:12px;color:#fff;font-size:16px;font-weight:700;cursor:pointer;font-family:'Cairo',sans-serif;letter-spacing:.5px}
.perm-skip{display:block;margin-top:12px;font-size:13px;color:var(--text2);cursor:pointer;text-decoration:underline;background:none;border:none;font-family:'Cairo',sans-serif;width:100%;text-align:center}

/* HADITH */
.h-card{background:var(--bg3);border:1px solid var(--border2);border-radius:var(--r2);padding:20px;margin:0 14px 14px}
.h-badge{font-size:11px;color:var(--text2);margin-bottom:10px}
.h-text{font-family:'Noto Naskh Arabic',serif;font-size:16px;line-height:1.9;direction:rtl;text-align:right;color:var(--text);margin-bottom:12px}
.h-tr{font-size:13px;color:var(--text2);line-height:1.6}
.h-src{font-size:11px;color:var(--gold2);margin-top:10px}
.refresh-btn{width:40px;height:40px;background:var(--card);border:1px solid var(--border);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:18px}
.refresh-btn.spin{animation:spin .6s linear}
.col-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:8px;padding:0 14px}
.col-card{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:14px;cursor:pointer;transition:background .1s}
.col-card:active{background:var(--card2)}
.col-icon{font-size:22px;margin-bottom:6px}
.col-name{font-size:14px;font-weight:600}
.col-cnt{font-size:11px;color:var(--text2);margin-top:2px}

/* DUA */
.cat-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:8px}
.cat-card{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:16px;cursor:pointer;text-align:center;transition:background .1s}
.cat-card:active{background:var(--card2)}
.cat-icon{font-size:30px;margin-bottom:8px}
.cat-name{font-size:13px;font-weight:600}
.dua-item{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:16px;margin-bottom:10px}
.dua-title{font-size:11px;color:var(--text3);font-weight:700;margin-bottom:10px;letter-spacing:.5px}
.dua-ar{font-family:'Noto Naskh Arabic',serif;font-size:20px;line-height:2;direction:rtl;text-align:right;color:var(--text);margin-bottom:10px}
.dua-tr{font-size:13px;color:var(--text2);line-height:1.6}
.dua-src{font-size:11px;color:var(--gold2);margin-top:8px}

/* NAMES */
.names-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:8px;padding:14px;overflow-y:auto;flex:1}
.name-card{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:14px;text-align:center}
.name-n{font-size:10px;color:var(--text2);margin-bottom:6px}
.name-ar{font-family:'Noto Naskh Arabic',serif;font-size:22px;color:var(--gold2);margin-bottom:4px}
.name-tr{font-size:12px;color:var(--text3);font-weight:600}
.name-en{font-size:11px;color:var(--text2);margin-top:3px;opacity:.8}

/* CAL */
.cal-hero{background:var(--bg3);margin:14px;border-radius:var(--r2);padding:24px;text-align:center;border:1px solid var(--border2)}
.cal-d{font-size:40px;font-weight:700;color:var(--gold2)}
.cal-m{font-size:16px;color:var(--text);margin-top:4px}
.cal-y{font-size:14px;color:var(--text2);margin-top:2px}
.cal-sep{width:40px;height:1px;background:var(--border2);margin:12px auto}
.cal-greg{font-size:13px;color:var(--text2)}
.ev-item{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:14px 16px;display:flex;gap:14px;align-items:center;margin:0 14px 8px}
.ev-icon{font-size:26px}
.ev-name{font-size:14px;font-weight:600}
.ev-date{font-size:12px;color:var(--text2);margin-top:2px}

/* LOADER */
.loader{flex:1;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:10px}
.spinner{width:30px;height:30px;border:2.5px solid var(--border2);border-top-color:var(--green3);border-radius:50%;animation:spin .7s linear infinite}
.loader-t{color:var(--text2);font-size:13px}

/* BOTTOM NAV */
.bnav{position:absolute;bottom:0;left:0;right:0;background:var(--bg2);border-top:1px solid var(--border2);display:flex;padding:8px 0 env(safe-area-inset-bottom,8px);z-index:100;flex-shrink:0}
.nv{flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;cursor:pointer;padding:4px}
.nv-icon{font-size:20px;line-height:1}
.nv-lbl{font-size:9px;color:var(--text2);font-weight:600;letter-spacing:.3px}
.nv.on .nv-lbl{color:var(--text3)}
.nv.on .nv-icon{filter:drop-shadow(0 0 6px #4ade8060)}

/* TOAST */
.toast{position:fixed;top:64px;left:50%;transform:translateX(-50%);background:var(--green2);color:#fff;padding:10px 20px;border-radius:24px;font-size:13px;z-index:999;opacity:0;transition:opacity .25s;pointer-events:none;white-space:nowrap;font-family:'Cairo',sans-serif}
.toast.show{opacity:1}

/* HADIth collection */
#hadith-collection-content{flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch}
#hadith-collection-content::-webkit-scrollbar{display:none}
</style>
</head>
<body>

<!-- SPLASH -->
<div class="screen active" id="splash">
  <div class="splash-logo">☪️</div>
  <div class="splash-title">ليالي</div>
  <div class="splash-sub">تطبيقك الإسلامي الشامل</div>
  <div class="splash-track"><div class="splash-fill"></div></div>
</div>

<div class="toast" id="toast"></div>

<!-- HOME -->
<div class="screen" id="home">
  <div class="header">
    <div class="header-row">
      <div class="header-date" id="home-date">جاري تحميل التاريخ...</div>
      <div class="header-logo">☪️</div>
    </div>
    <div class="header-greeting">السلام عليكم ورحمة الله</div>
    <div class="header-name">مرحباً بك في ليالي 🌿</div>
  </div>
  <div class="scroll">
    <div class="pw" onclick="showScreen('prayer')">
      <div class="pw-glow"></div>
      <div class="pw-label">الصلاة القادمة</div>
      <div class="pw-next" id="pw-name">جاري التحميل...</div>
      <div class="pw-time" id="pw-time">--:--</div>
      <div class="pw-cd" id="pw-cd">⏱ جاري الحساب...</div>
      <div class="pw-pills" id="pw-row"></div>
    </div>
    <div class="sec-label">🕌 الخدمات</div>
    <div class="qgrid">
      <div class="qi" onclick="showScreen('quran')"><div class="qi-icon">📖</div><div class="qi-lbl">القرآن</div></div>
      <div class="qi" onclick="showScreen('hadith')"><div class="qi-icon">📜</div><div class="qi-lbl">الحديث</div></div>
      <div class="qi" onclick="showScreen('dua')"><div class="qi-icon">🤲</div><div class="qi-lbl">الأدعية</div></div>
      <div class="qi" onclick="showScreen('names')"><div class="qi-icon">✨</div><div class="qi-lbl">أسماء الله</div></div>
      <div class="qi" onclick="showScreen('prayer')"><div class="qi-icon">🕌</div><div class="qi-lbl">مواقيت</div></div>
      <div class="qi" onclick="showScreen('calendar')"><div class="qi-icon">📅</div><div class="qi-lbl">التقويم</div></div>
      <div class="qi" onclick="showScreen('prayer')"><div class="qi-icon">🧭</div><div class="qi-lbl">القبلة</div></div>
      <div class="qi" onclick="goRandomDua()"><div class="qi-icon">🎲</div><div class="qi-lbl">دعاء</div></div>
    </div>
    <div class="sec-label">📿 آية اليوم</div>
    <div class="day-card" id="daily-ayah">
      <div class="dc-badge">📖 جاري التحميل...</div>
      <div class="dc-arabic arabic">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</div>
      <div class="dc-trans">بسم الله الرحمن الرحيم</div>
    </div>
  </div>
  <div class="bnav">
    <div class="nv on" onclick="showScreen('home')"><div class="nv-icon">🏠</div><div class="nv-lbl">الرئيسية</div></div>
    <div class="nv" onclick="showScreen('quran')"><div class="nv-icon">📖</div><div class="nv-lbl">القرآن</div></div>
    <div class="nv" onclick="showScreen('prayer')"><div class="nv-icon">🕌</div><div class="nv-lbl">الصلاة</div></div>
    <div class="nv" onclick="showScreen('dua')"><div class="nv-icon">🤲</div><div class="nv-lbl">الأدعية</div></div>
    <div class="nv" onclick="showScreen('hadith')"><div class="nv-icon">📜</div><div class="nv-lbl">الحديث</div></div>
  </div>
</div>

<!-- LOCATION PERMISSION -->
<div class="screen" id="location-perm">
  <div style="flex:1;display:flex;flex-direction:column;justify-content:center;padding:24px">
    <div class="perm-box">
      <div class="perm-icon">📍</div>
      <div class="perm-title">تحديد موقعك تلقائياً</div>
      <div class="perm-desc">لعرض مواقيت الصلاة الدقيقة لمنطقتك، نحتاج إذنك للوصول إلى موقعك الجغرافي.<br><br>لن نشارك موقعك مع أي طرف خارجي.</div>
      <button class="perm-btn" onclick="requestLocation()">📍 السماح بالوصول للموقع</button>
      <button class="perm-skip" onclick="skipLocation()">استخدام الموقع الافتراضي (القاهرة)</button>
    </div>
  </div>
</div>

<!-- QURAN -->
<div class="screen" id="quran">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('home')">←</div>
    <div style="font-size:18px;font-weight:700">القرآن الكريم 📖</div>
  </div>
  <div class="search">
    <input type="text" id="q-search" placeholder="ابحث في السور..." oninput="filterSurahs(this.value)">
    <button onclick="doSearch()">🔍</button>
  </div>
  <div style="flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch" id="surah-list">
    <div class="loader"><div class="spinner"></div><div class="loader-t">جاري تحميل السور...</div></div>
  </div>
  <div class="bnav">
    <div class="nv" onclick="showScreen('home')"><div class="nv-icon">🏠</div><div class="nv-lbl">الرئيسية</div></div>
    <div class="nv on" onclick="showScreen('quran')"><div class="nv-icon">📖</div><div class="nv-lbl">القرآن</div></div>
    <div class="nv" onclick="showScreen('prayer')"><div class="nv-icon">🕌</div><div class="nv-lbl">الصلاة</div></div>
    <div class="nv" onclick="showScreen('dua')"><div class="nv-icon">🤲</div><div class="nv-lbl">الأدعية</div></div>
    <div class="nv" onclick="showScreen('hadith')"><div class="nv-icon">📜</div><div class="nv-lbl">الحديث</div></div>
  </div>
</div>

<!-- SURAH VIEW -->
<div class="screen" id="surah-view">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('quran')">←</div>
    <div style="font-size:18px;font-weight:700" id="sv-title">السورة</div>
  </div>
  <div style="flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch;padding:14px 0 80px" id="ayah-c">
    <div class="loader"><div class="spinner"></div></div>
  </div>
</div>

<!-- PRAYER -->
<div class="screen" id="prayer">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('home')">←</div>
    <div style="font-size:18px;font-weight:700">مواقيت الصلاة 🕌</div>
  </div>
  <div class="loc-bar">
    <button class="loc-btn" onclick="handleLocationBtn()">📍 موقعي</button>
    <input type="number" id="lat-in" placeholder="خط العرض" step="any" value="30.0444" class="loc-input" style="width:88px">
    <input type="number" id="lng-in" placeholder="خط الطول" step="any" value="31.2357" class="loc-input" style="width:88px">
    <button class="loc-btn" onclick="loadPrayer()">بحث</button>
  </div>
  <div style="flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch" id="prayer-c">
    <div class="loader"><div class="spinner"></div><div class="loader-t">جاري التحميل...</div></div>
  </div>
  <div class="bnav">
    <div class="nv" onclick="showScreen('home')"><div class="nv-icon">🏠</div><div class="nv-lbl">الرئيسية</div></div>
    <div class="nv" onclick="showScreen('quran')"><div class="nv-icon">📖</div><div class="nv-lbl">القرآن</div></div>
    <div class="nv on" onclick="showScreen('prayer')"><div class="nv-icon">🕌</div><div class="nv-lbl">الصلاة</div></div>
    <div class="nv" onclick="showScreen('dua')"><div class="nv-icon">🤲</div><div class="nv-lbl">الأدعية</div></div>
    <div class="nv" onclick="showScreen('hadith')"><div class="nv-icon">📜</div><div class="nv-lbl">الحديث</div></div>
  </div>
</div>

<!-- HADITH -->
<div class="screen" id="hadith">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('home')">←</div>
    <div style="font-size:18px;font-weight:700">الحديث الشريف 📜</div>
  </div>
  <div style="flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch">
    <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 14px 4px">
      <div style="font-size:13px;color:var(--text2)">حديث عشوائي</div>
      <div class="refresh-btn" id="h-refresh" onclick="loadHadith()">🔄</div>
    </div>
    <div id="hadith-c"><div class="loader"><div class="spinner"></div></div></div>
    <div class="sec-label">📚 المجموعات</div>
    <div class="col-grid">
      <div class="col-card" onclick="loadHadithCollection('bukhari','البخاري')"><div class="col-icon">📘</div><div class="col-name">البخاري</div><div class="col-cnt">7563 حديث</div></div>
      <div class="col-card" onclick="loadHadithCollection('muslim','مسلم')"><div class="col-icon">📗</div><div class="col-name">مسلم</div><div class="col-cnt">3033 حديث</div></div>
      <div class="col-card" onclick="loadHadithCollection('abudawud','أبو داود')"><div class="col-icon">📙</div><div class="col-name">أبو داود</div><div class="col-cnt">5274 حديث</div></div>
      <div class="col-card" onclick="loadHadithCollection('tirmidhi','الترمذي')"><div class="col-icon">📕</div><div class="col-name">الترمذي</div><div class="col-cnt">3956 حديث</div></div>
      <div class="col-card" onclick="loadHadithCollection('ibnmajah','ابن ماجه')"><div class="col-icon">📓</div><div class="col-name">ابن ماجه</div><div class="col-cnt">4341 حديث</div></div>
      <div class="col-card" onclick="loadHadithCollection('nasai','النسائي')"><div class="col-icon">📔</div><div class="col-name">النسائي</div><div class="col-cnt">5761 حديث</div></div>
    </div>
    <div style="height:20px"></div>
  </div>
  <div class="bnav">
    <div class="nv" onclick="showScreen('home')"><div class="nv-icon">🏠</div><div class="nv-lbl">الرئيسية</div></div>
    <div class="nv" onclick="showScreen('quran')"><div class="nv-icon">📖</div><div class="nv-lbl">القرآن</div></div>
    <div class="nv" onclick="showScreen('prayer')"><div class="nv-icon">🕌</div><div class="nv-lbl">الصلاة</div></div>
    <div class="nv" onclick="showScreen('dua')"><div class="nv-icon">🤲</div><div class="nv-lbl">الأدعية</div></div>
    <div class="nv on" onclick="showScreen('hadith')"><div class="nv-icon">📜</div><div class="nv-lbl">الحديث</div></div>
  </div>
</div>

<!-- DUA -->
<div class="screen" id="dua">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('home')">←</div>
    <div style="font-size:18px;font-weight:700">الأدعية 🤲</div>
  </div>
  <div style="flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch;padding:12px 14px">
    <div id="dua-cats-c"><div class="loader"><div class="spinner"></div><div class="loader-t">جاري التحميل...</div></div></div>
  </div>
  <div class="bnav">
    <div class="nv" onclick="showScreen('home')"><div class="nv-icon">🏠</div><div class="nv-lbl">الرئيسية</div></div>
    <div class="nv" onclick="showScreen('quran')"><div class="nv-icon">📖</div><div class="nv-lbl">القرآن</div></div>
    <div class="nv" onclick="showScreen('prayer')"><div class="nv-icon">🕌</div><div class="nv-lbl">الصلاة</div></div>
    <div class="nv on" onclick="showScreen('dua')"><div class="nv-icon">🤲</div><div class="nv-lbl">الأدعية</div></div>
    <div class="nv" onclick="showScreen('hadith')"><div class="nv-icon">📜</div><div class="nv-lbl">الحديث</div></div>
  </div>
</div>

<!-- DUA LIST -->
<div class="screen" id="dua-list">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('dua')">←</div>
    <div style="font-size:18px;font-weight:700" id="dua-list-title">الأدعية</div>
  </div>
  <div style="flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch;padding:12px 14px" id="dua-items-c">
    <div class="loader"><div class="spinner"></div></div>
  </div>
</div>

<!-- NAMES -->
<div class="screen" id="names">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('home')">←</div>
    <div style="font-size:18px;font-weight:700">أسماء الله الحسنى ✨</div>
  </div>
  <div class="names-grid" id="names-grid">
    <div class="loader" style="grid-column:span 2"><div class="spinner"></div><div class="loader-t">جاري التحميل...</div></div>
  </div>
</div>

<!-- CALENDAR -->
<div class="screen" id="calendar">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('home')">←</div>
    <div style="font-size:18px;font-weight:700">التقويم الإسلامي 📅</div>
  </div>
  <div style="flex:1;overflow-y:auto;-webkit-overflow-scrolling:touch;padding-bottom:80px">
    <div class="cal-hero" id="cal-hero"><div class="spinner" style="margin:auto"></div></div>
    <div class="sec-label">🌙 المناسبات الإسلامية</div>
    <div id="events-list"><div class="loader"><div class="spinner"></div></div></div>
  </div>
  <div class="bnav">
    <div class="nv" onclick="showScreen('home')"><div class="nv-icon">🏠</div><div class="nv-lbl">الرئيسية</div></div>
    <div class="nv" onclick="showScreen('quran')"><div class="nv-icon">📖</div><div class="nv-lbl">القرآن</div></div>
    <div class="nv" onclick="showScreen('prayer')"><div class="nv-icon">🕌</div><div class="nv-lbl">الصلاة</div></div>
    <div class="nv" onclick="showScreen('dua')"><div class="nv-icon">🤲</div><div class="nv-lbl">الأدعية</div></div>
    <div class="nv" onclick="showScreen('hadith')"><div class="nv-icon">📜</div><div class="nv-lbl">الحديث</div></div>
  </div>
</div>

<!-- HADITH COLLECTION -->
<div class="screenx" id="hadith-collection">
  <div class="page-header">
    <div class="back-btn" onclick="showScreen('hadith')">←</div>
    <div style="font-size:18px;font-weight:700" id="hadith-collection-title">الأحاديث</div>
  </div>
  <div id="hadith-collection-content">
    <div class="loader"><div class="spinner"></div><div class="loader-t">جاري التحميل...</div></div>
  </div>
</div>

<script>
const API='https://ummahapi.com';
let allSurahs=[];
let userLat=30.0444,userLng=31.2357;
let locationAsked=false;

/* ── NAVIGATION ── */
function showScreen(id){
  document.querySelectorAll('.screen,.screenx').forEach(s=>s.classList.remove('active'));
  document.getElementById(id).classList.add('active');
  if(id!=='surah-view'&&id!=='dua-list'&&id!=='hadith-collection')window.scrollTo(0,0);
  if(id==='quran'&&!allSurahs.length)loadSurahs();
  if(id==='prayer')loadPrayer();
  if(id==='hadith')loadHadith();
  if(id==='dua')loadDuaCats();
  if(id==='names')loadNames();
  if(id==='calendar')loadCalendar();
}

function toast(msg){
  const t=document.getElementById('toast');
  t.textContent=msg;t.classList.add('show');
  setTimeout(()=>t.classList.remove('show'),2500);
}

/* ── SPLASH ── */
setTimeout(()=>{
  checkLocationPermission();
},2200);

/* ── LOCATION PERMISSION FLOW ── */
async function checkLocationPermission(){
  // Check if already answered before
  const saved=localStorage.getItem('leilaly_loc');
  if(saved){
    const {lat,lng}=JSON.parse(saved);
    userLat=lat;userLng=lng;
    document.getElementById('lat-in').value=lat;
    document.getElementById('lng-in').value=lng;
    showScreen('home');
    loadHome(lat,lng);
    return;
  }
  // Check permission state if API available
  if(navigator.permissions){
    try{
      const p=await navigator.permissions.query({name:'geolocation'});
      if(p.state==='granted'){
        // Already granted, get location silently
        autoGetLocation();
        return;
      }
    }catch(e){}
  }
  // Show permission screen
  showScreen('location-perm');
}

// function requestLocation(){
//   toast('📍 جاري تحديد موقعك...');
//   navigator.geolocation.getCurrentPosition(
//     pos=>{
//       const lat=parseFloat(pos.coords.latitude.toFixed(4));
//       const lng=parseFloat(pos.coords.longitude.toFixed(4));
//       userLat=lat;userLng=lng;
//       document.getElementById('lat-in').value=lat;
//       document.getElementById('lng-in').value=lng;
//       localStorage.setItem('leilaly_loc',JSON.stringify({lat,lng}));
//       showScreen('home');
//       loadHome(lat,lng);
//       toast('✅ تم تحديد موقعك بنجاح');
//     },
//     err=>{
//       toast('❌ تعذر تحديد الموقع، سيتم استخدام القاهرة');
//       skipLocation();
//     },
//     {enableHighAccuracy:true,timeout:10000}
//   );
// }

async function requestLocation(){
  toast('📍 جاري تحديد موقعك...');
  navigator.geolocation.getCurrentPosition(
    pos=>{
      const lat=parseFloat(pos.coords.latitude.toFixed(4));
      const lng=parseFloat(pos.coords.longitude.toFixed(4));
      userLat=lat;userLng=lng;
      document.getElementById('lat-in').value=lat;
      document.getElementById('lng-in').value=lng;
      localStorage.setItem('leilaly_loc',JSON.stringify({lat,lng}));
      showScreen('home');
      loadHome(lat,lng);
      toast('✅ تم تحديد موقعك بنجاح');
    },
    err=>{
      toast('❌ تعذر تحديد الموقع، سيتم استخدام القاهرة');
      skipLocation();
    },
    {enableHighAccuracy:true,timeout:10000}
  );
}

function skipLocation(){
  localStorage.setItem('leilaly_loc',JSON.stringify({lat:30.0444,lng:31.2357}));
  showScreen('home');
  loadHome(30.0444,31.2357);
}

function autoGetLocation(){
  navigator.geolocation.getCurrentPosition(
    pos=>{
      const lat=parseFloat(pos.coords.latitude.toFixed(4));
      const lng=parseFloat(pos.coords.longitude.toFixed(4));
      userLat=lat;userLng=lng;
      document.getElementById('lat-in').value=lat;
      document.getElementById('lng-in').value=lng;
      localStorage.setItem('leilaly_loc',JSON.stringify({lat,lng}));
      showScreen('home');
      loadHome(lat,lng);
    },
    ()=>{skipLocation();}
  );
}

/* ── PRAYER PAGE LOCATION BTN ── */
function handleLocationBtn(){
  toast('📍 جاري تحديد موقعك...');
  navigator.geolocation.getCurrentPosition(
    pos=>{
      const lat=parseFloat(pos.coords.latitude.toFixed(4));
      const lng=parseFloat(pos.coords.longitude.toFixed(4));
      document.getElementById('lat-in').value=lat;
      document.getElementById('lng-in').value=lng;
      userLat=lat;userLng=lng;
      localStorage.setItem('leilaly_loc',JSON.stringify({lat,lng}));
      loadPrayer();
      toast('✅ موقعك الحالي');
    },
    ()=>toast('❌ تعذر تحديد الموقع')
  );
}

/* ── HOME ── */
async function loadHome(lat,lng){
  lat=lat||userLat;lng=lng||userLng;
  try{
    const r=await fetch(`${API}/api/hijri-date`);
    const d=await r.json();
    const h=d.hijri||d;
    document.getElementById('home-date').textContent=`${h.day||''} ${h.month_name||''} ${h.year||''} هـ`;
  }catch(e){document.getElementById('home-date').textContent=new Date().toLocaleDateString('ar-EG');}

  try{
    const r=await fetch(`${API}/api/quran/random`);
    const d=await r.json();
    const a=d.data||d;
    document.getElementById('daily-ayah').innerHTML=`
      <div class="dc-badge">📖 آية اليوم</div>
      <div class="dc-arabic arabic">${a.text||a.arabic||''}</div>
      <div class="dc-trans">${a.translations?.en?.text||a.translation||''}</div>
      <div class="dc-src">سورة ${a.surah_name||''} — آية ${a.ayah_number||a.number||''}</div>`;
  }catch(e){}

  loadPrayerWidget(lat,lng);
}

/* ── PRAYER WIDGET ── */
async function loadPrayerWidget(lat,lng){
  try{
    const r=await fetch(`${API}/api/prayer-times?lat=${lat}&lng=${lng}`);
    const d=await r.json();
    const times=(d.data||d).prayer_times||{};
    const prayers=[
      {key:'fajr',name:'الفجر'},
      {key:'dhuhr',name:'الظهر'},
      {key:'asr',name:'العصر'},
      {key:'maghrib',name:'المغرب'},
      {key:'isha',name:'العشاء'}
    ];
    const nowM=new Date().getHours()*60+new Date().getMinutes();
    const toMin=t=>{if(!t)return 9999;const[h,m]=t.split(':').map(Number);return h*60+m;};
    let nxt=prayers.find(p=>toMin(times[p.key])>nowM)||prayers[0];
    let diff=toMin(times[nxt.key])-nowM;
    if(diff<0)diff+=1440;
    document.getElementById('pw-name').textContent=nxt.name;
    document.getElementById('pw-time').textContent=times[nxt.key]||'--:--';
    if(diff>0&&diff<9999){
      const h=Math.floor(diff/60),m=diff%60;
      document.getElementById('pw-cd').textContent=`⏱ بعد ${h>0?h+' ساعة و ':''}${m} دقيقة`;
    }
    document.getElementById('pw-row').innerHTML=prayers.map(p=>`
      <div class="pw-pill ${p.key===nxt.key?'now':''}">
        ${p.name}<span>${times[p.key]||'--'}</span>
      </div>`).join('');
  }catch(e){
    document.getElementById('pw-name').textContent='--';
    document.getElementById('pw-time').textContent='--:--';
  }
}

/* ── QURAN ── */
async function loadSurahs(){
  try{
    const r=await fetch(`${API}/api/quran/surahs`);
    const d=await r.json();
    allSurahs=d?.data?.surahs||d?.surahs||[];
    renderSurahs(allSurahs);
  }catch(e){
    document.getElementById('surah-list').innerHTML='<div style="padding:20px;text-align:center;color:var(--text2)">فشل تحميل السور</div>';
  }
}

function renderSurahs(list){
  const rv={Meccan:'مكية',Medinan:'مدنية'};
  document.getElementById('surah-list').innerHTML=list.map(s=>`
    <div class="surah-item" onclick="loadSurah(${s.number},'${(s.name_arabic||s.name||'').replace(/'/g,"\\'")}')">
      <div class="s-num">${s.number}</div>
      <div class="s-info">
        <div class="s-en">${s.englishName||s.name_english||s.name||''}</div>
        <div class="s-meta">${s.ayahCount||s.verses_count||s.numberOfAyahs||''} آية · ${rv[s.revelationType||s.revelation_type]||''}</div>
      </div>
      <div class="s-ar">${s.name_arabic||s.name||''}</div>
    </div>`).join('');
}

function filterSurahs(q){
  if(!q){renderSurahs(allSurahs);return;}
  renderSurahs(allSurahs.filter(s=>
    (s.name_arabic||'').includes(q)||
    (s.englishName||s.name_english||s.name||'').toLowerCase().includes(q.toLowerCase())||
    String(s.number).includes(q)
  ));
}

async function doSearch(){
  const q=document.getElementById('q-search').value.trim();
  if(!q)return;
  document.getElementById('surah-list').innerHTML=`<div class="loader"><div class="spinner"></div><div class="loader-t">جاري البحث...</div></div>`;
  try{
    const r=await fetch(`${API}/api/quran/search?q=${encodeURIComponent(q)}`);
    const d=await r.json();
    const results=d.results||d.data||d;
    if(!Array.isArray(results)||!results.length){
      document.getElementById('surah-list').innerHTML='<div style="padding:20px;text-align:center;color:var(--text2)">لا توجد نتائج</div>';
      return;
    }
    document.getElementById('surah-list').innerHTML=results.map(a=>`
      <div class="ayah-block" style="cursor:pointer" onclick="loadSurah(${a.surah_number||a.surah},'')">
        <div class="ayah-text">${a.text||a.arabic||''}</div>
        <div class="ayah-tr">${a.translations?.en?.text||a.translation||''}</div>
        <div class="ayah-n">📍 سورة ${a.surah_name||''} - آية ${a.ayah_number||a.number||''}</div>
      </div>`).join('');
  }catch(e){}
}

async function loadSurah(num,name){
  document.getElementById('sv-title').textContent=name||`سورة ${num}`;
  showScreen('surah-view');
  document.getElementById('ayah-c').innerHTML=`<div class="loader"><div class="spinner"></div><div class="loader-t">جاري تحميل الآيات...</div></div>`;
  try{
    const r=await fetch(`${API}/api/quran/surah/${num}`);
    const d=await r.json();
    const surah=d.data||d;
    const ayahs=surah.ayahs||surah.verses||surah.ayah||[];
    if(name&&surah.name_arabic)document.getElementById('sv-title').textContent=surah.name_arabic||name;
    let html=(num!==1&&num!==9)?`<div class="bismillah">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</div>`:'';
    html+=ayahs.map((a,i)=>`
      <div class="ayah-block">
        <div class="ayah-text">${a.text||a.arabic||''} ﴿${a.number_in_surah||a.numberInSurah||a.number||(i+1)}﴾</div>
        ${a.translations?.en?.text||a.translation?.text?`<div class="ayah-tr">${a.translations?.en?.text||a.translation?.text||''}</div>`:''}
        <div class="ayah-n">🔖 الآية ${a.number_in_surah||a.numberInSurah||a.number||(i+1)}</div>
      </div>`).join('');
    document.getElementById('ayah-c').innerHTML=html||'<div style="padding:20px;text-align:center;color:var(--text2)">لا توجد آيات</div>';
  }catch(e){
    document.getElementById('ayah-c').innerHTML='<div style="padding:20px;text-align:center;color:var(--text2)">فشل التحميل</div>';
  }
}

/* ── PRAYER PAGE ── */
async function loadPrayer(){
  const lat=parseFloat(document.getElementById('lat-in').value)||30.0444;
  const lng=parseFloat(document.getElementById('lng-in').value)||31.2357;
  userLat=lat;userLng=lng;
  const c=document.getElementById('prayer-c');
  c.innerHTML=`<div class="loader"><div class="spinner"></div><div class="loader-t">جاري التحميل...</div></div>`;
  try{
    const r=await fetch(`${API}/api/prayer-times?lat=${lat}&lng=${lng}&method=Egyptian`);
    const d=await r.json();
    const payload=d.data||d;
    const times=payload.prayer_times||{};
    const status=payload.current_status||{};
    const prayers=[
      {key:'fajr',name:'الفجر',icon:'🌙'},
      {key:'sunrise',name:'الشروق',icon:'🌅'},
      {key:'dhuhr',name:'الظهر',icon:'☀️'},
      {key:'asr',name:'العصر',icon:'🌤️'},
      {key:'maghrib',name:'المغرب',icon:'🌇'},
      {key:'isha',name:'العشاء',icon:'🌃'}
    ];
    const curKey=status.current_prayer||null;
    c.innerHTML=`
      <div style="padding:14px 0">
        ${prayers.map(p=>`
          <div class="p-card ${p.key===curKey?'cur':''}">
            <div>
              <div class="p-name">${p.icon} ${p.name}</div>
              ${p.key===curKey?'<span class="cur-pill">الوقت الحالي ✓</span>':''}
            </div>
            <div class="p-time">${times[p.key]||'--:--'}</div>
          </div>`).join('')}
      </div>
      <div class="qibla-box" id="qibla-s">
        <div class="qibla-lbl">🧭 اتجاه القبلة</div>
        <div class="spinner" style="margin:12px auto"></div>
      </div>
      <div style="height:20px"></div>`;
    loadQibla(lat,lng);
  }catch(e){
    c.innerHTML='<div style="padding:20px;text-align:center;color:var(--text2)">فشل التحميل. تحقق من القيم.</div>';
  }
}

async function loadQibla(lat,lng){
  try{
    const r=await fetch(`${API}/api/qibla?lat=${lat}&lng=${lng}`);
    const d=await r.json();
    const payload=d.data||d;
    const dir=Math.round(payload.direction||payload.qibla||0);
    const dist=payload.distance?Math.round(payload.distance).toLocaleString():'';
    document.getElementById('qibla-s').innerHTML=`
      <div class="qibla-lbl">🧭 اتجاه القبلة</div>
      <div style="font-size:54px;margin:10px auto;display:block;transition:transform 1s ease;transform:rotate(${dir}deg)">🧭</div>
      <div class="qibla-deg">${dir}°</div>
      ${dist?`<div style="font-size:13px;color:var(--text2);margin-top:6px">المسافة: ${dist} كم</div>`:''}`;
  }catch(e){}
}

/* ── HADITH ── */
async function loadHadith(){
  const btn=document.getElementById('h-refresh');
  if(btn)btn.classList.add('spin');
  setTimeout(()=>{if(btn)btn.classList.remove('spin');},700);
  try{
    const r=await fetch(`${API}/api/hadith/random`);
    const d=await r.json();
    const h=d.data||d;
    document.getElementById('hadith-c').innerHTML=`
      <div class="h-card">
        <div class="h-badge">📚 ${h.collection||h.book||''} ${h.hadith_number||h.number?'• رقم '+(h.hadith_number||h.number):''}</div>
        <div class="h-text arabic">${h.arabic||h.text||''}</div>
        ${h.english||h.translation?`<div class="h-tr">${h.english||h.translation||''}</div>`:''}
        ${h.chapter||h.grade?`<div class="h-src">📌 ${h.chapter||''} ${h.grade?'| درجة: '+h.grade:''}</div>`:''}
      </div>`;
  }catch(e){
    document.getElementById('hadith-c').innerHTML='<div style="padding:16px;text-align:center;color:var(--text2)">فشل التحميل</div>';
  }
}

let curCol='',curColTitle='',curPage=1,isLoading=false,hasMore=true;

async function loadHadithCollection(col,title){
  curCol=col;curColTitle=title;curPage=1;hasMore=true;
  document.getElementById('hadith-collection-title').textContent=title;
  showScreen('hadith-collection');
  const c=document.getElementById('hadith-collection-content');
  c.innerHTML=`<div class="loader"><div class="spinner"></div><div class="loader-t">جاري تحميل الأحاديث...</div></div>`;
  await loadMoreHadiths(true);
}

async function loadMoreHadiths(reset=false){
  if(isLoading||!hasMore)return;
  isLoading=true;
  const c=document.getElementById('hadith-collection-content');
  let loadEl=null;
  if(!reset){
    loadEl=document.createElement('div');
    loadEl.className='loader';
    loadEl.id='hload';
    loadEl.innerHTML='<div class="spinner"></div>';
    c.appendChild(loadEl);
  }
  try{
    const r=await fetch(`${API}/api/hadith/${curCol}?page=${curPage}&limit=20`);
    const data=await r.json();
    let hadiths=[];
    if(Array.isArray(data.hadiths))hadiths=data.hadiths;
    else if(Array.isArray(data.data?.hadiths))hadiths=data.data.hadiths;
    else if(Array.isArray(data.data))hadiths=data.data;
    if(loadEl)loadEl.remove();
    if(!hadiths.length){
      hasMore=false;
      if(curPage===1)c.innerHTML='<div style="text-align:center;padding:30px;color:var(--text2)">لا توجد أحاديث</div>';
      else c.insertAdjacentHTML('beforeend','<div style="text-align:center;padding:20px;color:var(--text2);font-size:13px">✅ تم تحميل جميع الأحاديث</div>');
      return;
    }
    const html=hadiths.map(h=>`
      <div class="h-card">
        <div class="h-badge">📖 ${curColTitle}${h.hadith_number||h.number?' • رقم '+(h.hadith_number||h.number):''}</div>
        <div class="h-text arabic">${h.arabic||h.hadith||h.text||h.body||''}</div>
        ${h.chapter||h.book?`<div class="h-src">${h.chapter||h.book}</div>`:''}
      </div>`).join('');
    if(reset)c.innerHTML=html;
    else c.insertAdjacentHTML('beforeend',html);
    curPage++;
  }catch(e){
    if(loadEl)loadEl.remove();
    if(curPage===1)c.innerHTML='<div style="text-align:center;padding:30px;color:var(--text2)">فشل تحميل الأحاديث</div>';
  }finally{isLoading=false;}
}

document.getElementById('hadith-collection-content').addEventListener('scroll',function(){
  if(this.scrollTop+this.clientHeight>=this.scrollHeight-400)loadMoreHadiths();
});

/* ── DUA ── */
const DUA_ICONS={morning:'🌅',evening:'🌆',sleep:'😴',waking:'🌄',food:'🍽️',travel:'✈️',mosque:'🕌',prayer:'🙏',quran:'📖',rain:'🌧️',distress:'💙',gratitude:'🤍',greeting:'👋',forgiveness:'🤍',family:'👨‍👩‍👧',home:'🏠',protection:'🛡️',health:'💚',default:'🤲'};

async function loadDuaCats(){
  try{
    const r=await fetch(`${API}/api/duas/categories`);
    const d=await r.json();
    const cats=d?.data?.categories||d?.categories||[];
    if(!Array.isArray(cats)||!cats.length)throw new Error();
    document.getElementById('dua-cats-c').innerHTML=`
      <div class="cat-grid">
        ${cats.map(c=>{
          const slug=(c.id||c.slug||c.name||'').toString().toLowerCase();
          const icon=Object.entries(DUA_ICONS).find(([k])=>slug.includes(k))?.[1]||DUA_ICONS.default;
          return `<div class="cat-card" onclick="loadDuaList('${c.id||c.slug||slug}','${(c.name||slug).replace(/'/g,"\\'")}')">
            <div class="cat-icon">${icon}</div>
            <div class="cat-name">${c.name}</div>
            <small style="opacity:.6;font-size:11px">${c.count||0} دعاء</small>
          </div>`;
        }).join('')}
      </div>`;
  }catch(e){
    document.getElementById('dua-cats-c').innerHTML='<div style="padding:20px;text-align:center;color:var(--text2)">فشل التحميل</div>';
  }
}

async function loadDuaList(catId,catName){
  document.getElementById('dua-list-title').textContent=catName;
  showScreen('dua-list');
  document.getElementById('dua-items-c').innerHTML=`<div class="loader"><div class="spinner"></div></div>`;
  try{
    const r=await fetch(`${API}/api/duas/category/${catId}`);
    const d=await r.json();
    renderDuas(d?.data?.duas||d?.duas||[]);
  }catch(e){
    document.getElementById('dua-items-c').innerHTML='<div style="padding:20px;text-align:center;color:var(--text2)">فشل التحميل</div>';
  }
}

function renderDuas(list){
  if(!Array.isArray(list)||!list.length){
    document.getElementById('dua-items-c').innerHTML='<div style="padding:20px;text-align:center;color:var(--text2)">لا توجد أدعية</div>';
    return;
  }
  document.getElementById('dua-items-c').innerHTML=list.map(du=>`
    <div class="dua-item">
      ${du.title||du.name?`<div class="dua-title">${du.title||du.name}</div>`:''}
      <div class="dua-ar arabic">${du.arabic||du.text||''}</div>
      ${du.translation||du.english?`<div class="dua-tr">${du.translation||du.english}</div>`:''}
      ${du.source||du.reference?`<div class="dua-src">📌 ${du.source||du.reference}</div>`:''}
    </div>`).join('');
}

async function goRandomDua(){
  toast('🤲 جاري تحميل دعاء...');
  try{
    const r=await fetch(`${API}/api/duas/random`);
    const d=await r.json();
    const du=d.data||d;
    document.getElementById('dua-list-title').textContent=du.title||du.category||'دعاء';
    showScreen('dua-list');
    renderDuas([du]);
  }catch(e){toast('فشل التحميل');}
}

/* ── NAMES ── */
async function loadNames(){
  try{
    const r=await fetch(`${API}/api/asma-ul-husna`);
    const d=await r.json();
    const names=d.data||d.names||d;
    document.getElementById('names-grid').innerHTML=names.map(n=>`
      <div class="name-card">
        <div class="name-n">${n.number||n.id||''}</div>
        <div class="name-ar">${n.arabic||n.name||''}</div>
        <div class="name-tr">${n.transliteration||n.name_en||''}</div>
        <div class="name-en">${n.meaning||n.english||''}</div>
      </div>`).join('');
  }catch(e){
    document.getElementById('names-grid').innerHTML='<div style="padding:20px;text-align:center;color:var(--text2);grid-column:span 2">فشل التحميل</div>';
  }
}

/* ── CALENDAR ── */
async function loadCalendar(){
  try{
    const r=await fetch(`${API}/api/hijri-date`);
    const d=await r.json();
    const h=d.hijri||d.data?.hijri||d;
    const g=d.gregorian||d.data?.gregorian||{};
    document.getElementById('cal-hero').innerHTML=`
      <div style="font-size:12px;color:var(--text2);margin-bottom:10px;letter-spacing:1px">التاريخ الهجري</div>
      <div class="cal-d">${h.day||''}</div>
      <div class="cal-m">${h.month_name||''}</div>
      <div class="cal-y">${h.year||''} هجري</div>
      <div class="cal-sep"></div>
      <div class="cal-greg">📅 ${g.date||new Date().toLocaleDateString('ar-EG')}</div>`;
  }catch(e){
    document.getElementById('cal-hero').innerHTML=`<div class="cal-d">اليوم</div><div class="cal-greg">${new Date().toLocaleDateString('ar-EG')}</div>`;
  }
  try{
    const r=await fetch(`${API}/api/hijri-date/events`);
    const d=await r.json();
    const evts=d.data||d.events||d;
    const icons=['🌙','⭐','🕌','🎉','✨','📿','🌿','🌸'];
    document.getElementById('events-list').innerHTML=Array.isArray(evts)&&evts.length
      ?evts.map((e,i)=>`
        <div class="ev-item">
          <div class="ev-icon">${icons[i%icons.length]}</div>
          <div>
            <div class="ev-name">${e.name||e.title||e.event||''}</div>
            <div class="ev-date">${e.hijri_date||e.date||e.month||''}</div>
          </div>
        </div>`).join('')
      :'<div style="padding:20px;text-align:center;color:var(--text2)">لا توجد مناسبات</div>';
  }catch(e){
    document.getElementById('events-list').innerHTML='<div style="padding:20px;text-align:center;color:var(--text2)">فشل تحميل المناسبات</div>';
  }
}
</script>
</body>
</html>