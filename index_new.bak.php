<?php
	$page = 'summer';
	include realpath(__DIR__.'/../config/include.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>夏の特別プラン | ホテルリステル浜名湖【公式】</title>
<meta name="description" content="2025年6月28日スカイプールOPEN！浜名湖を一望できる屋上プールと湖畔のマリンアクティビティで特別な夏をお過ごしください。">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;700&family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700&display=swap" rel="stylesheet">

<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>

<style>
/* 日本のホテルLPベストプラクティススタイル */
:root {
  --primary-blue: #1e88e5;
  --dark-blue: #0d47a1;
  --light-blue: #e3f2fd;
  --accent-blue: #29b6f6;
  --gold: #ffd54f;
  --green: #81c784;
  --dark-gray: #333333;
  --gray: #666666;
  --light-gray: #f5f5f5;
  --white: #ffffff;
  --shadow: 0 2px 20px rgba(0,0,0,0.1);
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  color: var(--dark-gray);
  line-height: 1.8;
  background: var(--white);
  overflow-x: hidden;
}

/* ヘッダー */
#header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background: rgba(255,255,255,0.95);
  backdrop-filter: blur(10px);
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  z-index: 999;
  transition: all 0.3s ease;
}

#header.scrolled {
  background: rgba(255,255,255,0.98);
}

.con_head {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 20px;
}

.logo img {
  height: 40px;
  width: auto;
}

#gnav {
  display: flex;
  gap: 2rem;
  margin: 0;
  padding: 0;
  list-style: none;
}

#gnav a {
  color: var(--dark-gray);
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
  position: relative;
}

#gnav a::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--primary-blue);
  transition: width 0.3s ease;
}

#gnav a:hover::after {
  width: 100%;
}

/* ヒーローセクション */
.hero-section {
  position: relative;
  height: 100vh;
  min-height: 600px;
  width: 100%;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
}

.hero-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('images/img_kv-pc.jpg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  opacity: 0.9;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.4));
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: var(--white);
  max-width: 900px;
  padding: 0 20px;
}

.hero-title {
  font-family: 'Noto Serif JP', serif;
  font-size: clamp(2.5rem, 6vw, 4.5rem);
  font-weight: 300;
  letter-spacing: 0.1em;
  margin-bottom: 1rem;
  line-height: 1.3;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease forwards;
}

.hero-subtitle {
  font-size: clamp(1.1rem, 2.5vw, 1.4rem);
  margin-bottom: 2rem;
  text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease 0.3s forwards;
}

.hero-date {
  display: inline-block;
  background: var(--gold);
  color: var(--dark-gray);
  padding: 0.5rem 2rem;
  font-weight: 700;
  margin-bottom: 2rem;
  border-radius: 30px;
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease 0.5s forwards;
}

.hero-vertical {
  writing-mode: vertical-rl;
  font-family: 'Zen Kaku Gothic New', sans-serif;
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  letter-spacing: 0.5em;
  position: absolute;
  right: 5%;
  top: 50%;
  transform: translateY(-50%);
  color: var(--white);
  text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  opacity: 0;
  animation: fadeIn 1.5s ease 0.8s forwards;
}

.cta-button {
  display: inline-block;
  padding: 1.2rem 3.5rem;
  background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
  color: var(--white);
  text-decoration: none;
  border-radius: 50px;
  font-weight: 700;
  font-size: 1.1rem;
  transition: all 0.3s ease;
  box-shadow: 0 4px 20px rgba(30, 136, 229, 0.4);
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease 0.7s forwards;
  position: relative;
  overflow: hidden;
}

.cta-button::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(255,255,255,0.2);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  transition: width 0.6s, height 0.6s;
}

.cta-button:hover::before {
  width: 300px;
  height: 300px;
}

.cta-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 30px rgba(30, 136, 229, 0.5);
}

/* スクロールヒント */
.scroll-hint {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  color: var(--white);
  font-size: 0.9rem;
  text-align: center;
  opacity: 0;
  animation: fadeIn 1s ease 1s forwards;
}

.scroll-arrow {
  width: 30px;
  height: 30px;
  margin: 10px auto;
  border-right: 2px solid var(--white);
  border-bottom: 2px solid var(--white);
  transform: rotate(45deg);
  animation: bounce 2s infinite;
}

/* 固定予約バー */
.fixed-booking {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: var(--white);
  box-shadow: 0 -2px 20px rgba(0,0,0,0.1);
  z-index: 1000;
  transform: translateY(100%);
  transition: transform 0.3s ease;
}

.fixed-booking.show {
  transform: translateY(0);
}

.fixed-booking-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem;
  max-width: 1200px;
  margin: 0 auto;
}

.fixed-booking-text {
  font-weight: 500;
  color: var(--dark-gray);
}

.fixed-booking-price {
  color: var(--primary-blue);
  font-size: 1.2rem;
  font-weight: 700;
}

/* セクション基本スタイル */
.section {
  padding: 100px 0;
  position: relative;
}

.section:nth-child(even) {
  background: var(--light-gray);
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.section-title {
  text-align: center;
  margin-bottom: 4rem;
}

.section-title h2 {
  font-family: 'Noto Serif JP', serif;
  font-size: clamp(2.5rem, 5vw, 3.5rem);
  font-weight: 400;
  color: var(--dark-gray);
  margin-bottom: 1rem;
  position: relative;
  display: inline-block;
}

.section-title h2::after {
  content: '';
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 3px;
  background: var(--primary-blue);
}

.section-subtitle {
  font-size: 1.1rem;
  color: var(--gray);
  max-width: 700px;
  margin: 0 auto;
  line-height: 1.8;
}

/* スカイプールセクション */
.skypool-section {
  position: relative;
  overflow: hidden;
}

.skypool-bg-pattern {
  position: absolute;
  top: -50px;
  right: -50px;
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, var(--light-blue) 0%, transparent 70%);
  border-radius: 50%;
  opacity: 0.5;
}

.skypool-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}

.skypool-image {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.skypool-image img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.8s ease;
}

.skypool-image:hover img {
  transform: scale(1.05);
}

.skypool-badge {
  position: absolute;
  top: 20px;
  left: 20px;
  background: var(--gold);
  color: var(--dark-gray);
  padding: 0.5rem 1.5rem;
  font-weight: 700;
  border-radius: 30px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.skypool-info h3 {
  font-size: 2rem;
  margin-bottom: 1.5rem;
  color: var(--dark-gray);
}

.skypool-features {
  list-style: none;
  padding: 0;
  margin: 2rem 0;
}

.skypool-features li {
  padding: 0.8rem 0;
  padding-left: 2rem;
  position: relative;
  color: var(--gray);
}

.skypool-features li::before {
  content: '✓';
  position: absolute;
  left: 0;
  color: var(--primary-blue);
  font-weight: 700;
  font-size: 1.2rem;
}

/* 特徴カード */
.feature-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2rem;
  margin-top: 4rem;
}

.feature-card {
  background: var(--white);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
  cursor: pointer;
}

.feature-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 40px rgba(0,0,0,0.12);
}

.feature-card-image {
  position: relative;
  padding-top: 60%;
  overflow: hidden;
}

.feature-card-image img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.feature-card:hover .feature-card-image img {
  transform: scale(1.1);
}

.feature-card-content {
  padding: 2.5rem;
}

.feature-card-title {
  font-size: 1.6rem;
  font-weight: 500;
  margin-bottom: 1rem;
  color: var(--dark-gray);
}

.feature-card-text {
  color: var(--gray);
  line-height: 1.7;
  margin-bottom: 1.5rem;
}

.feature-card-link {
  color: var(--primary-blue);
  text-decoration: none;
  font-weight: 500;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  transition: gap 0.3s ease;
}

.feature-card-link:hover {
  gap: 1rem;
}

/* プランセクション */
.plan-carousel {
  position: relative;
  overflow: hidden;
  margin-top: 3rem;
}

.plan-cards {
  display: flex;
  gap: 2rem;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  scrollbar-width: none;
  -ms-overflow-style: none;
  padding: 1rem 0 2rem;
}

.plan-cards::-webkit-scrollbar {
  display: none;
}

.plan-card {
  flex: 0 0 350px;
  background: var(--white);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
  scroll-snap-align: start;
  transition: all 0.3s ease;
}

.plan-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

.plan-card-image {
  position: relative;
  padding-top: 60%;
  overflow: hidden;
}

.plan-card-image img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.plan-card-badge {
  position: absolute;
  top: 20px;
  right: 20px;
  background: var(--gold);
  color: var(--dark-gray);
  padding: 0.3rem 1rem;
  font-size: 0.9rem;
  font-weight: 700;
  border-radius: 20px;
}

.plan-card-content {
  padding: 2rem;
}

.plan-card-title {
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 1rem;
  color: var(--dark-gray);
  line-height: 1.5;
}

.plan-card-price {
  font-size: 1.8rem;
  color: var(--primary-blue);
  font-weight: 700;
  margin-bottom: 1rem;
}

.plan-card-price small {
  font-size: 0.9rem;
  color: var(--gray);
  font-weight: 400;
}

/* フォトギャラリー */
.photo-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 1rem;
  margin-top: 3rem;
}

.photo-item {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  cursor: pointer;
  padding-top: 100%;
}

.photo-item img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.photo-item:hover img {
  transform: scale(1.1);
}

.photo-item-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.5) 100%);
  opacity: 0;
  transition: opacity 0.3s ease;
  display: flex;
  align-items: flex-end;
  padding: 1.5rem;
}

.photo-item:hover .photo-item-overlay {
  opacity: 1;
}

.photo-item-title {
  color: var(--white);
  font-weight: 500;
}

/* アニメーション */
@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeIn {
  to {
    opacity: 1;
  }
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0) rotate(45deg);
  }
  40% {
    transform: translateY(-10px) rotate(45deg);
  }
  60% {
    transform: translateY(-5px) rotate(45deg);
  }
}

/* フェードインアニメーション */
.fade-in {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.8s ease;
}

.fade-in.visible {
  opacity: 1;
  transform: translateY(0);
}

.fade-in-left {
  opacity: 0;
  transform: translateX(-30px);
  transition: all 0.8s ease;
}

.fade-in-left.visible {
  opacity: 1;
  transform: translateX(0);
}

.fade-in-right {
  opacity: 0;
  transform: translateX(30px);
  transition: all 0.8s ease;
}

.fade-in-right.visible {
  opacity: 1;
  transform: translateX(0);
}

/* レスポンシブ */
@media (max-width: 768px) {
  #gnav {
    display: none;
  }
  
  .hero-vertical {
    display: none;
  }
  
  .hero-title {
    font-size: 2rem;
  }
  
  .skypool-content {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  
  .feature-cards {
    grid-template-columns: 1fr;
  }
  
  .plan-card {
    flex: 0 0 280px;
  }
  
  .photo-gallery {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .section {
    padding: 60px 0;
  }
  
  .fixed-booking-inner {
    flex-direction: column;
    gap: 1rem;
    text-align: center;
  }
}
</style>

<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_js.php"; ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // スムーススクロール
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        const headerHeight = document.querySelector('#header').offsetHeight;
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
  
  // スクロールアニメーション
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, observerOptions);
  
  document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right').forEach(el => {
    observer.observe(el);
  });
  
  // ヘッダースクロール
  const header = document.querySelector('#header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
  
  // 固定予約バー
  const fixedBooking = document.querySelector('.fixed-booking');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 600) {
      fixedBooking.classList.add('show');
    } else {
      fixedBooking.classList.remove('show');
    }
  });
  
  // カウントダウンタイマー
  function updateCountdown() {
    const targetDate = new Date('2025-06-28');
    const now = new Date();
    const diff = targetDate - now;
    
    if (diff > 0) {
      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
      
      const countdownEl = document.querySelector('.countdown');
      if (countdownEl) {
        countdownEl.innerHTML = `オープンまで <span class="countdown-number">${days}</span>日 <span class="countdown-number">${hours}</span>時間 <span class="countdown-number">${minutes}</span>分`;
      }
    }
  }
  
  setInterval(updateCountdown, 60000);
  updateCountdown();
});
</script>

</head>

<body id="<?php echo $page; ?>">
<?php include LOCATION_ROOT_DIR."/templates/gtm.php"; ?>

<!-- ヘッダー -->
<header id="header">
  <div class="con_head">
    <p class="logo">
      <a href="<?php echo LOCATION; ?>">
        <img src="<?php echo LOCATION_FILE; ?>images/header/logo.png" alt="ホテルリステル浜名湖">
      </a>
    </p>
    <nav class="view_pc-tab">
      <ul id="gnav">
        <li><a href="#skypool">スカイプール</a></li>
        <li><a href="#activities">マリンアクティビティ</a></li>
        <li><a href="#features">夏の楽しみ方</a></li>
        <li><a href="#plans">宿泊プラン</a></li>
        <li><a href="#access">アクセス</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- ヒーローセクション -->
<section class="hero-section">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-date">2025.6.28 GRAND OPEN</div>
    <h1 class="hero-title">
      浜名湖の夏を、<br>
      最高の思い出に。
    </h1>
    <p class="hero-subtitle">
      新しくオープンする屋上スカイプールと<br>
      豊富なマリンアクティビティで特別な夏休みを
    </p>
    <a href="#plans" class="cta-button">宿泊プランを見る</a>
  </div>
  <div class="hero-vertical">湖畔で過ごす特別な夏</div>
  <div class="scroll-hint">
    <p>SCROLL</p>
    <div class="scroll-arrow"></div>
  </div>
</section>

<!-- スカイプールセクション -->
<section id="skypool" class="section skypool-section">
  <div class="skypool-bg-pattern"></div>
  <div class="container">
    <div class="section-title fade-in">
      <h2>Sky Pool</h2>
      <p class="section-subtitle">
        浜名湖を一望できる屋上スカイプールが2025年6月28日にオープン。<br>
        青い空と湖が一体化した絶景の中で、特別なひとときをお過ごしください。
      </p>
    </div>
    
    <div class="skypool-content">
      <div class="skypool-image fade-in-left">
        <img src="images/img_picup_spot.jpg" alt="スカイプール">
        <div class="skypool-badge">NEW OPEN</div>
      </div>
      <div class="skypool-info fade-in-right">
        <h3>浜名湖を眺める絶景プール</h3>
        <p>ホテル最上階に位置する屋上プールからは、360度のパノラマビューが広がります。まるで空に浮かんでいるような感覚で、浜名湖の美しい景色を堪能できます。</p>
        <ul class="skypool-features">
          <li>営業期間：6月28日〜8月31日</li>
          <li>営業時間：9:00〜18:00</li>
          <li>宿泊者限定（無料）</li>
          <li>更衣室・シャワー完備</li>
          <li>プールサイドバー併設</li>
        </ul>
        <div class="countdown"></div>
      </div>
    </div>
  </div>
</section>

<!-- マリンアクティビティセクション -->
<section id="activities" class="section">
  <div class="container">
    <div class="section-title fade-in">
      <h2>Marine Activities</h2>
      <p class="section-subtitle">
        ホテル前の穏やかな浜名湖で楽しむマリンスポーツ。<br>
        初心者から上級者まで、年齢を問わずお楽しみいただけます。
      </p>
    </div>
    
    <div class="feature-cards">
      <div class="feature-card fade-in">
        <div class="feature-card-image">
          <img src="images/img_activity01.jpg" alt="SUP体験">
        </div>
        <div class="feature-card-content">
          <h3 class="feature-card-title">SUP体験</h3>
          <p class="feature-card-text">
            穏やかな湖面を滑るように進むSUP（スタンドアップパドル）。初心者でも安心のレッスン付きで、浜名湖の自然を満喫できます。
          </p>
          <a href="#" class="feature-card-link">詳細を見る →</a>
        </div>
      </div>
      
      <div class="feature-card fade-in">
        <div class="feature-card-image">
          <img src="images/img_activity02.jpg" alt="カヌー体験">
        </div>
        <div class="feature-card-content">
          <h3 class="feature-card-title">アウトリガーカヌー</h3>
          <p class="feature-card-text">
            安定性の高いアウトリガーカヌーで湖上散歩。家族みんなで楽しめる人気のアクティビティです。
          </p>
          <a href="#" class="feature-card-link">詳細を見る →</a>
        </div>
      </div>
      
      <div class="feature-card fade-in">
        <div class="feature-card-image">
          <img src="images/img_activity03.jpg" alt="釣り体験">
        </div>
        <div class="feature-card-content">
          <h3 class="feature-card-title">釣り体験</h3>
          <p class="feature-card-text">
            ホテル前の桟橋から楽しめる釣り体験。夏はハゼ釣りが人気で、お子様でも簡単に釣ることができます。
          </p>
          <a href="#" class="feature-card-link">詳細を見る →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 夏の楽しみ方セクション -->
<section id="features" class="section">
  <div class="container">
    <div class="section-title fade-in">
      <h2>Summer Features</h2>
      <p class="section-subtitle">
        ホテルリステル浜名湖で過ごす夏の魅力をご紹介。<br>
        湖畔のリゾートならではの特別な体験をお楽しみください。
      </p>
    </div>
    
    <div class="feature-cards">
      <div class="feature-card fade-in">
        <div class="feature-card-image">
          <img src="images/img_stay02.jpg" alt="絶景温泉">
        </div>
        <div class="feature-card-content">
          <h3 class="feature-card-title">湖面すれすれの絶景温泉</h3>
          <p class="feature-card-text">
            まるで湖と一体化したような露天風呂。朝は朝日を、夕方は夕焼けを眺めながら、贅沢な湯浴みをお楽しみください。
          </p>
        </div>
      </div>
      
      <div class="feature-card fade-in">
        <div class="feature-card-image">
          <img src="images/img_slide_stay01-01.jpg" alt="夏の美食">
        </div>
        <div class="feature-card-content">
          <h3 class="feature-card-title">夏の味覚を堪能</h3>
          <p class="feature-card-text">
            浜名湖産うなぎをはじめ、地元の夏野菜や新鮮な魚介類を使った特別メニュー。シェフこだわりの夏限定料理をご用意。
          </p>
        </div>
      </div>
      
      <div class="feature-card fade-in">
        <div class="feature-card-image">
          <img src="images/img_picup_activity.jpg" alt="プライベートクルーズ">
        </div>
        <div class="feature-card-content">
          <h3 class="feature-card-title">プライベートクルーズ</h3>
          <p class="feature-card-text">
            ホテル専用桟橋から出発するボートクルーズ。夕暮れ時のサンセットクルーズは特におすすめです。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 宿泊プランセクション -->
<section id="plans" class="section">
  <div class="container">
    <div class="section-title fade-in">
      <h2>Summer Plans</h2>
      <p class="section-subtitle">
        この夏だけの特別な宿泊プランをご用意しました。<br>
        スカイプールやアクティビティを満喫できるお得なプランです。
      </p>
    </div>
    
    <div class="plan-carousel fade-in">
      <div class="plan-cards">
        <div class="plan-card">
          <div class="plan-card-image">
            <img src="images/img_picup_plan.jpg" alt="スカイプールプラン">
            <div class="plan-card-badge">人気No.1</div>
          </div>
          <div class="plan-card-content">
            <h3 class="plan-card-title">【開業記念】スカイプール満喫プラン</h3>
            <p class="plan-card-price">¥15,000〜 <small>/ 1名様</small></p>
            <p>スカイプール利用券＋うなぎ会席＋朝食付き</p>
            <a href="#" class="cta-button" style="padding: 0.8rem 2rem; font-size: 1rem;">このプランを予約</a>
          </div>
        </div>
        
        <div class="plan-card">
          <div class="plan-card-image">
            <img src="images/img_osusume_plan01.jpg" alt="マリンアクティビティプラン">
            <div class="plan-card-badge">体験付き</div>
          </div>
          <div class="plan-card-content">
            <h3 class="plan-card-title">SUP体験付き宿泊プラン</h3>
            <p class="plan-card-price">¥18,000〜 <small>/ 1名様</small></p>
            <p>SUP体験＋バイキング2食＋スカイプール利用付き</p>
            <a href="#" class="cta-button" style="padding: 0.8rem 2rem; font-size: 1rem;">このプランを予約</a>
          </div>
        </div>
        
        <div class="plan-card">
          <div class="plan-card-image">
            <img src="images/img_osusume_plan02.jpg" alt="ファミリープラン">
            <div class="plan-card-badge">家族旅行</div>
          </div>
          <div class="plan-card-content">
            <h3 class="plan-card-title">夏休みファミリープラン</h3>
            <p class="plan-card-price">¥13,000〜 <small>/ 1名様</small></p>
            <p>お子様半額＋アクティビティ割引＋朝食付き</p>
            <a href="#" class="cta-button" style="padding: 0.8rem 2rem; font-size: 1rem;">このプランを予約</a>
          </div>
        </div>
        
        <div class="plan-card">
          <div class="plan-card-image">
            <img src="images/img_osusume_plan03.jpg" alt="カップルプラン">
            <div class="plan-card-badge">期間限定</div>
          </div>
          <div class="plan-card-content">
            <h3 class="plan-card-title">サマーカップルプラン</h3>
            <p class="plan-card-price">¥20,000〜 <small>/ 1名様</small></p>
            <p>サンセットクルーズ＋ディナー＋朝食付き</p>
            <a href="#" class="cta-button" style="padding: 0.8rem 2rem; font-size: 1rem;">このプランを予約</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- フォトギャラリー -->
<section class="section">
  <div class="container">
    <div class="section-title fade-in">
      <h2>Photo Gallery</h2>
      <p class="section-subtitle">ホテルリステル浜名湖の夏の風景</p>
    </div>
    
    <div class="photo-gallery">
      <div class="photo-item fade-in">
        <img src="images/img_intro01.jpg" alt="夏の浜名湖">
        <div class="photo-item-overlay">
          <p class="photo-item-title">夏の浜名湖</p>
        </div>
      </div>
      <div class="photo-item fade-in">
        <img src="images/img_intro02.jpg" alt="露天風呂">
        <div class="photo-item-overlay">
          <p class="photo-item-title">絶景露天風呂</p>
        </div>
      </div>
      <div class="photo-item fade-in">
        <img src="images/img_intro03.jpg" alt="夏の料理">
        <div class="photo-item-overlay">
          <p class="photo-item-title">夏の特別料理</p>
        </div>
      </div>
      <div class="photo-item fade-in">
        <img src="images/img_slide_stay01-02.jpg" alt="朝食">
        <div class="photo-item-overlay">
          <p class="photo-item-title">朝食バイキング</p>
        </div>
      </div>
      <div class="photo-item fade-in">
        <img src="images/img_slide_stay01-03.jpg" alt="客室">
        <div class="photo-item-overlay">
          <p class="photo-item-title">湖畔の客室</p>
        </div>
      </div>
      <div class="photo-item fade-in">
        <img src="images/img_picup_activity.jpg" alt="アクティビティ">
        <div class="photo-item-overlay">
          <p class="photo-item-title">マリンアクティビティ</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- アクセス -->
<section id="access" class="section">
  <div class="container">
    <div class="section-title fade-in">
      <h2>Access</h2>
      <p class="section-subtitle">ホテルリステル浜名湖へのアクセス</p>
    </div>
    
    <div style="text-align: center;" class="fade-in">
      <p style="margin-bottom: 2rem;">
        〒431-1424 静岡県浜松市北区三ヶ日町下尾奈375<br>
        TEL: 053-525-1222
      </p>
      <div style="background: var(--light-gray); padding: 2rem; border-radius: 8px; max-width: 600px; margin: 0 auto;">
        <h3 style="margin-bottom: 1rem;">お車でお越しの方</h3>
        <p>東名高速道路「三ヶ日IC」より約15分</p>
        <h3 style="margin-top: 2rem; margin-bottom: 1rem;">電車でお越しの方</h3>
        <p>JR東海道本線「新所原駅」より送迎バスで約20分<br>
        （要予約）</p>
      </div>
    </div>
  </div>
</section>

<!-- フッター -->
<footer style="background: var(--dark-blue); color: var(--white); padding: 3rem 0; text-align: center;">
  <div class="container">
    <p style="margin-bottom: 1rem;">
      <img src="images/logo.png" alt="ホテルリステル浜名湖" style="height: 50px;">
    </p>
    <p>&copy; HOTEL LISTEL HAMANAKO All Rights Reserved.</p>
  </div>
</footer>

<!-- 固定予約バー -->
<div class="fixed-booking">
  <div class="fixed-booking-inner">
    <div>
      <p class="fixed-booking-text">夏の特別プラン受付中</p>
      <p class="fixed-booking-price">¥13,000〜 / 1名様</p>
    </div>
    <a href="#plans" class="cta-button" style="margin: 0;">今すぐ予約</a>
  </div>
</div>

</body>
</html>