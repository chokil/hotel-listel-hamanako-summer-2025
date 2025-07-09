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

<!-- 日本語に最適化されたフォント -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700;800&display=swap" rel="stylesheet">

<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>

<style>
/* 日本語最適化モダンスタイル */
:root {
  --primary-ocean: #0277bd;
  --light-ocean: #4fc3f7;
  --deep-ocean: #01579b;
  --sunset-gold: #ffb300;
  --sunrise-pink: #ff6f61;
  --pearl-white: #fafafa;
  --sand-beige: #fff8e1;
  --shadow-dark: #212121;
  --text-main: #424242;
  --text-light: #757575;
  --glass-white: rgba(255, 255, 255, 0.85);
  --glass-blur: blur(20px);
  --transition-smooth: cubic-bezier(0.4, 0, 0.2, 1);
}

* {
  box-sizing: border-box;
}

/* スムーススクロール */
html {
  scroll-behavior: smooth;
}

body {
  font-family: 'M PLUS Rounded 1c', 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', 'Noto Sans JP', sans-serif;
  color: var(--text-main);
  line-height: 1.8;
  background: var(--pearl-white);
  overflow-x: hidden;
  letter-spacing: 0.05em;
  font-feature-settings: "palt";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* ローディング画面 */
.loading-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: var(--pearl-white);
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: opacity 0.5s ease, visibility 0.5s ease;
}

.loading-screen.loaded {
  opacity: 0;
  visibility: hidden;
}

.loading-wave {
  width: 100px;
  height: 100px;
  position: relative;
}

.loading-wave::before,
.loading-wave::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 3px solid var(--primary-ocean);
  opacity: 0;
  animation: wave-loading 2s ease-out infinite;
}

.loading-wave::after {
  animation-delay: 1s;
}

@keyframes wave-loading {
  0% {
    transform: scale(0);
    opacity: 1;
  }
  100% {
    transform: scale(1.5);
    opacity: 0;
  }
}

/* スクロールプログレスバー */
.scroll-progress {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(90deg, var(--primary-ocean) 0%, var(--light-ocean) 50%, var(--sunset-gold) 100%);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.1s linear;
  z-index: 1001;
}

/* ヘッダー - グラスモーフィズム */
#header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background: var(--glass-white);
  backdrop-filter: var(--glass-blur);
  -webkit-backdrop-filter: var(--glass-blur);
  box-shadow: 0 8px 32px rgba(31, 38, 135, 0.05);
  z-index: 999;
  transition: all 0.4s var(--transition-smooth);
}

#header.scrolled {
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
}

#header.hide {
  transform: translateY(-100%);
}

.con_head {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.2rem 20px;
}

.logo img {
  height: 45px;
  width: auto;
  transition: transform 0.3s ease;
}

.logo:hover img {
  transform: scale(1.05);
}

#gnav {
  display: flex;
  gap: 2.5rem;
  margin: 0;
  padding: 0;
  list-style: none;
}

#gnav a {
  color: var(--text-main);
  text-decoration: none;
  font-weight: 500;
  font-size: 0.95rem;
  transition: all 0.3s ease;
  position: relative;
  padding: 0.5rem 0;
}

#gnav a::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--primary-ocean), var(--light-ocean));
  transform: translateX(-50%);
  transition: width 0.3s var(--transition-smooth);
}

#gnav a:hover {
  color: var(--primary-ocean);
}

#gnav a:hover::before {
  width: 100%;
}

/* モバイルメニュー */
.mobile-menu-toggle {
  display: none;
  width: 30px;
  height: 24px;
  position: relative;
  cursor: pointer;
}

.mobile-menu-toggle span {
  position: absolute;
  left: 0;
  width: 100%;
  height: 2px;
  background: var(--text-main);
  transition: all 0.3s ease;
}

.mobile-menu-toggle span:nth-child(1) {
  top: 0;
}

.mobile-menu-toggle span:nth-child(2) {
  top: 11px;
}

.mobile-menu-toggle span:nth-child(3) {
  bottom: 0;
}

.mobile-menu-toggle.active span:nth-child(1) {
  transform: rotate(45deg) translate(8px, 8px);
}

.mobile-menu-toggle.active span:nth-child(2) {
  opacity: 0;
}

.mobile-menu-toggle.active span:nth-child(3) {
  transform: rotate(-45deg) translate(8px, -8px);
}

/* ヒーローセクション - パララックス対応 */
.hero-section {
  position: relative;
  height: 100vh;
  min-height: 700px;
  width: 100%;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-bg {
  position: absolute;
  top: -10%;
  left: -10%;
  width: 120%;
  height: 120%;
  background-image: url('images/img_kv-pc.jpg');
  background-size: cover;
  background-position: center;
  will-change: transform;
  transition: transform 0.1s linear;
}

.hero-wave {
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  height: 150px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23fafafa' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,133.3C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") no-repeat;
  background-size: cover;
  z-index: 2;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(180deg, 
    rgba(0,0,0,0.1) 0%, 
    rgba(0,0,0,0.3) 50%, 
    rgba(0,0,0,0.5) 100%);
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 3;
  text-align: center;
  color: var(--pearl-white);
  max-width: 1000px;
  padding: 0 20px;
}

.hero-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3rem, 7vw, 5.5rem);
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 1.5rem;
  line-height: 1.4;
  text-shadow: 2px 4px 8px rgba(0,0,0,0.3);
  opacity: 0;
  transform: translateY(50px);
  animation: heroFadeInUp 1.2s ease forwards;
}

.hero-subtitle {
  font-size: clamp(1.2rem, 3vw, 1.6rem);
  font-weight: 300;
  margin-bottom: 3rem;
  text-shadow: 1px 2px 4px rgba(0,0,0,0.3);
  opacity: 0;
  transform: translateY(30px);
  animation: heroFadeInUp 1.2s ease 0.3s forwards;
  letter-spacing: 0.08em;
}

.hero-date {
  display: inline-block;
  background: linear-gradient(135deg, var(--sunset-gold), var(--sunrise-pink));
  color: var(--pearl-white);
  padding: 0.8rem 2.5rem;
  font-weight: 700;
  font-size: 1.1rem;
  margin-bottom: 3rem;
  border-radius: 50px;
  box-shadow: 0 10px 30px rgba(255, 179, 0, 0.3);
  opacity: 0;
  transform: translateY(30px) scale(0.9);
  animation: heroFadeInScale 1.2s ease 0.5s forwards;
  letter-spacing: 0.1em;
}

.hero-vertical {
  writing-mode: vertical-rl;
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2rem, 4vw, 3.2rem);
  letter-spacing: 0.6em;
  position: absolute;
  right: 3%;
  top: 50%;
  transform: translateY(-50%);
  color: var(--pearl-white);
  text-shadow: 2px 4px 8px rgba(0,0,0,0.3);
  opacity: 0;
  animation: fadeInRight 1.5s ease 0.8s forwards;
  font-weight: 300;
}

/* CTA ボタン - ニューモーフィズム */
.cta-button {
  display: inline-block;
  padding: 1.3rem 3.8rem;
  background: linear-gradient(135deg, var(--primary-ocean), var(--deep-ocean));
  color: var(--pearl-white);
  text-decoration: none;
  border-radius: 50px;
  font-weight: 700;
  font-size: 1.1rem;
  letter-spacing: 0.08em;
  transition: all 0.4s var(--transition-smooth);
  box-shadow: 
    0 10px 30px rgba(2, 119, 189, 0.3),
    inset 0 1px 0 rgba(255, 255, 255, 0.2);
  opacity: 0;
  transform: translateY(30px);
  animation: heroFadeInUp 1.2s ease 0.7s forwards;
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
  background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
  transform: translate(-50%, -50%);
  transition: width 0.8s ease, height 0.8s ease;
}

.cta-button:hover {
  transform: translateY(-3px);
  box-shadow: 
    0 15px 40px rgba(2, 119, 189, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.3);
}

.cta-button:hover::before {
  width: 300px;
  height: 300px;
}

/* スクロールヒント */
.scroll-hint {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  color: var(--pearl-white);
  font-size: 0.85rem;
  text-align: center;
  opacity: 0;
  animation: fadeIn 1s ease 1.2s forwards;
  letter-spacing: 0.15em;
}

.scroll-arrow {
  width: 24px;
  height: 24px;
  margin: 12px auto;
  border-right: 2px solid var(--pearl-white);
  border-bottom: 2px solid var(--pearl-white);
  transform: rotate(45deg);
  animation: scrollBounce 2s infinite;
}

/* 固定予約バー - グラスモーフィズム */
.fixed-booking {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: var(--glass-white);
  backdrop-filter: var(--glass-blur);
  -webkit-backdrop-filter: var(--glass-blur);
  box-shadow: 0 -8px 32px rgba(31, 38, 135, 0.1);
  z-index: 1000;
  transform: translateY(100%);
  transition: transform 0.4s var(--transition-smooth);
}

.fixed-booking.show {
  transform: translateY(0);
}

.fixed-booking-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.fixed-booking-text {
  font-weight: 500;
  color: var(--text-main);
  font-size: 0.95rem;
}

.fixed-booking-price {
  color: var(--primary-ocean);
  font-size: 1.3rem;
  font-weight: 700;
  letter-spacing: 0.05em;
}

/* セクション基本スタイル */
.section {
  padding: 120px 0;
  position: relative;
  overflow: hidden;
}

.section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(2, 119, 189, 0.2), transparent);
}

.section:nth-child(even) {
  background: linear-gradient(180deg, var(--pearl-white) 0%, var(--sand-beige) 50%, var(--pearl-white) 100%);
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.section-title {
  text-align: center;
  margin-bottom: 5rem;
}

.section-title h2 {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3rem, 6vw, 4.5rem);
  font-weight: 400;
  color: var(--text-main);
  margin-bottom: 1.5rem;
  position: relative;
  display: inline-block;
  letter-spacing: 0.1em;
}

.section-title h2::after {
  content: '';
  position: absolute;
  bottom: -20px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 3px;
  background: linear-gradient(90deg, var(--primary-ocean), var(--light-ocean));
  border-radius: 2px;
}

.section-subtitle {
  font-size: 1.15rem;
  color: var(--text-light);
  max-width: 800px;
  margin: 0 auto;
  line-height: 1.9;
  letter-spacing: 0.05em;
}

/* スカイプールセクション */
.skypool-section {
  position: relative;
}

.skypool-floating {
  position: absolute;
  width: 200px;
  height: 200px;
  background: radial-gradient(circle, var(--light-ocean) 0%, transparent 60%);
  border-radius: 50%;
  opacity: 0.1;
  filter: blur(40px);
  animation: float 15s infinite ease-in-out;
}

.skypool-floating:nth-child(1) {
  top: 10%;
  left: 10%;
  animation-delay: 0s;
}

.skypool-floating:nth-child(2) {
  top: 60%;
  right: 5%;
  animation-delay: 5s;
  animation-duration: 20s;
}

@keyframes float {
  0%, 100% {
    transform: translate(0, 0) scale(1);
  }
  33% {
    transform: translate(30px, -30px) scale(1.1);
  }
  66% {
    transform: translate(-20px, 20px) scale(0.9);
  }
}

.skypool-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 5rem;
  align-items: center;
}

.skypool-image {
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
  background: var(--pearl-white);
  padding: 10px;
}

.skypool-image img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 15px;
  transition: transform 0.8s var(--transition-smooth);
}

.skypool-image:hover img {
  transform: scale(1.05);
}

.skypool-badge {
  position: absolute;
  top: 30px;
  left: 30px;
  background: linear-gradient(135deg, var(--sunset-gold), var(--sunrise-pink));
  color: var(--pearl-white);
  padding: 0.6rem 2rem;
  font-weight: 700;
  font-size: 0.95rem;
  letter-spacing: 0.08em;
  border-radius: 30px;
  box-shadow: 0 8px 20px rgba(255, 179, 0, 0.3);
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% {
    box-shadow: 0 8px 20px rgba(255, 179, 0, 0.3);
  }
  50% {
    box-shadow: 0 8px 30px rgba(255, 179, 0, 0.5);
  }
  100% {
    box-shadow: 0 8px 20px rgba(255, 179, 0, 0.3);
  }
}

.skypool-info h3 {
  font-family: 'Shippori Mincho', serif;
  font-size: 2.2rem;
  margin-bottom: 1.8rem;
  color: var(--text-main);
  letter-spacing: 0.08em;
  font-weight: 500;
}

.skypool-info p {
  line-height: 1.9;
  margin-bottom: 2rem;
  color: var(--text-light);
}

.skypool-features {
  list-style: none;
  padding: 0;
  margin: 2.5rem 0;
}

.skypool-features li {
  padding: 1rem 0;
  padding-left: 2.5rem;
  position: relative;
  color: var(--text-main);
  transition: transform 0.3s ease;
}

.skypool-features li:hover {
  transform: translateX(5px);
}

.skypool-features li::before {
  content: '';
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 20px;
  height: 20px;
  background: linear-gradient(135deg, var(--primary-ocean), var(--light-ocean));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.skypool-features li::after {
  content: '✓';
  position: absolute;
  left: 6px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--pearl-white);
  font-weight: 700;
  font-size: 0.8rem;
}

/* カウントダウン */
.countdown {
  background: linear-gradient(135deg, var(--sand-beige), var(--pearl-white));
  padding: 1.5rem 2.5rem;
  border-radius: 15px;
  display: inline-block;
  box-shadow: 
    0 10px 30px rgba(0, 0, 0, 0.05),
    inset 0 1px 0 rgba(255, 255, 255, 0.8);
  font-weight: 500;
  letter-spacing: 0.05em;
}

.countdown-number {
  font-size: 1.8rem;
  font-weight: 700;
  color: var(--primary-ocean);
  margin: 0 0.3rem;
  display: inline-block;
  min-width: 2.5rem;
  text-align: center;
  background: var(--pearl-white);
  padding: 0.2rem 0.5rem;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* 特徴カード - ニューモーフィズム */
.feature-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2.5rem;
  margin-top: 5rem;
}

.feature-card {
  background: var(--pearl-white);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 
    20px 20px 60px rgba(0, 0, 0, 0.05),
    -20px -20px 60px rgba(255, 255, 255, 0.8);
  transition: all 0.4s var(--transition-smooth);
  cursor: pointer;
  position: relative;
}

.feature-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--primary-ocean), var(--light-ocean), var(--sunset-gold));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s var(--transition-smooth);
}

.feature-card:hover {
  transform: translateY(-10px);
  box-shadow: 
    25px 25px 80px rgba(0, 0, 0, 0.08),
    -25px -25px 80px rgba(255, 255, 255, 0.9);
}

.feature-card:hover::before {
  transform: scaleX(1);
}

.feature-card-image {
  position: relative;
  padding-top: 65%;
  overflow: hidden;
}

.feature-card-image img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s var(--transition-smooth);
}

.feature-card:hover .feature-card-image img {
  transform: scale(1.1);
}

.feature-card-content {
  padding: 2.5rem;
}

.feature-card-title {
  font-size: 1.7rem;
  font-weight: 500;
  margin-bottom: 1.2rem;
  color: var(--text-main);
  letter-spacing: 0.05em;
  font-family: 'Shippori Mincho', serif;
}

.feature-card-text {
  color: var(--text-light);
  line-height: 1.8;
  margin-bottom: 1.8rem;
}

.feature-card-link {
  color: var(--primary-ocean);
  text-decoration: none;
  font-weight: 500;
  display: inline-flex;
  align-items: center;
  gap: 0.8rem;
  transition: all 0.3s ease;
  position: relative;
  padding-bottom: 2px;
}

.feature-card-link::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background: var(--primary-ocean);
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.3s ease;
}

.feature-card-link:hover {
  gap: 1.2rem;
  color: var(--deep-ocean);
}

.feature-card-link:hover::after {
  transform: scaleX(1);
  transform-origin: left;
}

/* プランカルーセル */
.plan-carousel {
  position: relative;
  overflow: hidden;
  margin-top: 4rem;
  padding: 2rem 0;
}

.plan-cards {
  display: flex;
  gap: 2.5rem;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  scrollbar-width: none;
  -ms-overflow-style: none;
  padding: 1rem 0 3rem;
  scroll-behavior: smooth;
}

.plan-cards::-webkit-scrollbar {
  display: none;
}

.plan-card {
  flex: 0 0 380px;
  background: var(--pearl-white);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 
    0 15px 35px rgba(0, 0, 0, 0.08),
    0 5px 15px rgba(0, 0, 0, 0.05);
  scroll-snap-align: start;
  transition: all 0.4s var(--transition-smooth);
  position: relative;
}

.plan-card::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, transparent 30%, rgba(79, 195, 247, 0.1) 100%);
  opacity: 0;
  transition: opacity 0.4s ease;
  pointer-events: none;
}

.plan-card:hover {
  transform: translateY(-8px);
  box-shadow: 
    0 20px 45px rgba(0, 0, 0, 0.12),
    0 8px 20px rgba(0, 0, 0, 0.08);
}

.plan-card:hover::after {
  opacity: 1;
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
  transition: transform 0.6s var(--transition-smooth);
}

.plan-card:hover .plan-card-image img {
  transform: scale(1.08);
}

.plan-card-badge {
  position: absolute;
  top: 20px;
  right: 20px;
  background: linear-gradient(135deg, var(--sunset-gold), var(--sunrise-pink));
  color: var(--pearl-white);
  padding: 0.4rem 1.2rem;
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 0.05em;
  border-radius: 20px;
  box-shadow: 0 4px 15px rgba(255, 179, 0, 0.3);
}

.plan-card-content {
  padding: 2.5rem;
}

.plan-card-title {
  font-size: 1.4rem;
  font-weight: 500;
  margin-bottom: 1.2rem;
  color: var(--text-main);
  line-height: 1.6;
  letter-spacing: 0.03em;
}

.plan-card-price {
  font-size: 2rem;
  color: var(--primary-ocean);
  font-weight: 700;
  margin-bottom: 1.2rem;
  letter-spacing: 0.03em;
}

.plan-card-price small {
  font-size: 0.9rem;
  color: var(--text-light);
  font-weight: 400;
  margin-left: 0.3rem;
}

.plan-card p {
  color: var(--text-light);
  line-height: 1.7;
  margin-bottom: 1.8rem;
  font-size: 0.95rem;
}

.plan-card .cta-button {
  padding: 0.9rem 2.5rem;
  font-size: 0.95rem;
  letter-spacing: 0.05em;
}

/* フォトギャラリー */
.photo-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 1.5rem;
  margin-top: 4rem;
}

.photo-item {
  position: relative;
  overflow: hidden;
  border-radius: 15px;
  cursor: pointer;
  padding-top: 100%;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.4s var(--transition-smooth);
}

.photo-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.photo-item img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s var(--transition-smooth);
}

.photo-item:hover img {
  transform: scale(1.15);
}

.photo-item-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.7) 100%);
  opacity: 0;
  transition: opacity 0.4s ease;
  display: flex;
  align-items: flex-end;
  padding: 2rem;
}

.photo-item:hover .photo-item-overlay {
  opacity: 1;
}

.photo-item-title {
  color: var(--pearl-white);
  font-weight: 500;
  font-size: 1.2rem;
  letter-spacing: 0.05em;
  transform: translateY(20px);
  transition: transform 0.4s ease;
}

.photo-item:hover .photo-item-title {
  transform: translateY(0);
}

/* アニメーション */
@keyframes heroFadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes heroFadeInScale {
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

@keyframes fadeIn {
  to {
    opacity: 1;
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translateX(30px) translateY(-50%);
  }
  to {
    opacity: 1;
    transform: translateX(0) translateY(-50%);
  }
}

@keyframes scrollBounce {
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

/* スクロールアニメーション用クラス */
.fade-in-scroll {
  opacity: 0;
  transform: translateY(50px);
  transition: all 0.8s var(--transition-smooth);
}

.fade-in-scroll.visible {
  opacity: 1;
  transform: translateY(0);
}

.fade-in-left-scroll {
  opacity: 0;
  transform: translateX(-50px);
  transition: all 0.8s var(--transition-smooth);
}

.fade-in-left-scroll.visible {
  opacity: 1;
  transform: translateX(0);
}

.fade-in-right-scroll {
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.8s var(--transition-smooth);
}

.fade-in-right-scroll.visible {
  opacity: 1;
  transform: translateX(0);
}

.scale-in-scroll {
  opacity: 0;
  transform: scale(0.8);
  transition: all 0.8s var(--transition-smooth);
}

.scale-in-scroll.visible {
  opacity: 1;
  transform: scale(1);
}

/* パーティクル効果（オプション） */
.particles {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 1;
}

.particle {
  position: absolute;
  width: 4px;
  height: 4px;
  background: var(--light-ocean);
  border-radius: 50%;
  opacity: 0.3;
  animation: particleFloat 10s infinite linear;
}

@keyframes particleFloat {
  from {
    transform: translateY(100vh) translateX(0);
    opacity: 0;
  }
  10% {
    opacity: 0.3;
  }
  90% {
    opacity: 0.3;
  }
  to {
    transform: translateY(-100px) translateX(100px);
    opacity: 0;
  }
}

/* レスポンシブ */
@media (max-width: 768px) {
  #gnav {
    position: fixed;
    top: 70px;
    left: 0;
    right: 0;
    background: var(--glass-white);
    backdrop-filter: var(--glass-blur);
    flex-direction: column;
    padding: 2rem;
    gap: 1.5rem;
    transform: translateX(100%);
    transition: transform 0.3s ease;
    box-shadow: -5px 0 20px rgba(0, 0, 0, 0.1);
  }
  
  #gnav.active {
    transform: translateX(0);
  }
  
  .mobile-menu-toggle {
    display: block;
  }
  
  .hero-vertical {
    display: none;
  }
  
  .hero-title {
    font-size: 2.5rem;
  }
  
  .hero-subtitle {
    font-size: 1.1rem;
  }
  
  .skypool-content {
    grid-template-columns: 1fr;
    gap: 3rem;
  }
  
  .feature-cards {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  
  .plan-card {
    flex: 0 0 300px;
  }
  
  .photo-gallery {
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }
  
  .section {
    padding: 80px 0;
  }
  
  .section-title h2 {
    font-size: 2.5rem;
  }
  
  .fixed-booking-inner {
    flex-direction: column;
    gap: 1rem;
    text-align: center;
  }
}

@media (max-width: 480px) {
  .hero-title {
    font-size: 2rem;
  }
  
  .photo-gallery {
    grid-template-columns: 1fr;
  }
}

/* アクセシビリティ */
@media (prefers-reduced-motion: reduce) {
  *,
  *::before,
  *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
    scroll-behavior: auto !important;
  }
}

/* プリント対応 */
@media print {
  .fixed-booking,
  .scroll-progress,
  .mobile-menu-toggle,
  .particles {
    display: none;
  }
  
  body {
    background: white;
    color: black;
  }
}
</style>

<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_js.php"; ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // ローディング画面
  window.addEventListener('load', function() {
    setTimeout(function() {
      document.querySelector('.loading-screen').classList.add('loaded');
    }, 500);
  });
  
  // スクロールプログレスバー
  const scrollProgress = document.querySelector('.scroll-progress');
  window.addEventListener('scroll', () => {
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight - windowHeight;
    const scrolled = window.scrollY;
    const progress = (scrolled / documentHeight);
    scrollProgress.style.transform = `scaleX(${progress})`;
  });
  
  // ヘッダーの表示制御
  let lastScroll = 0;
  const header = document.querySelector('#header');
  
  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll <= 0) {
      header.classList.remove('scrolled');
      header.classList.remove('hide');
    } else if (currentScroll > lastScroll && currentScroll > 100) {
      header.classList.add('hide');
    } else if (currentScroll < lastScroll) {
      header.classList.remove('hide');
      header.classList.add('scrolled');
    }
    
    lastScroll = currentScroll;
  });
  
  // モバイルメニュー
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  const gnav = document.querySelector('#gnav');
  
  if (mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      gnav.classList.toggle('active');
    });
  }
  
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
        // モバイルメニューを閉じる
        if (mobileMenuToggle && gnav.classList.contains('active')) {
          mobileMenuToggle.classList.remove('active');
          gnav.classList.remove('active');
        }
      }
    });
  });
  
  // パララックス効果
  const heroBg = document.querySelector('.hero-bg');
  let ticking = false;
  
  function updateParallax() {
    const scrolled = window.pageYOffset;
    const speed = 0.5;
    heroBg.style.transform = `translateY(${scrolled * speed}px)`;
    ticking = false;
  }
  
  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(updateParallax);
      ticking = true;
    }
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
        // カウンターアニメーション
        if (entry.target.classList.contains('counter')) {
          animateCounter(entry.target);
        }
      }
    });
  }, observerOptions);
  
  // スクロールアニメーション要素を監視
  document.querySelectorAll('.fade-in-scroll, .fade-in-left-scroll, .fade-in-right-scroll, .scale-in-scroll, .counter').forEach(el => {
    observer.observe(el);
  });
  
  // カウンターアニメーション
  function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        element.textContent = target.toLocaleString();
        clearInterval(timer);
      } else {
        element.textContent = Math.floor(current).toLocaleString();
      }
    }, 16);
  }
  
  // 固定予約バー
  const fixedBooking = document.querySelector('.fixed-booking');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 800) {
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
  
  // パーティクル効果（オプション）
  function createParticles() {
    const particlesContainer = document.querySelector('.particles');
    if (!particlesContainer) return;
    
    for (let i = 0; i < 20; i++) {
      const particle = document.createElement('div');
      particle.className = 'particle';
      particle.style.left = Math.random() * 100 + '%';
      particle.style.animationDelay = Math.random() * 10 + 's';
      particle.style.animationDuration = (10 + Math.random() * 10) + 's';
      particlesContainer.appendChild(particle);
    }
  }
  
  // createParticles(); // 必要に応じてコメントアウトを解除
  
  // プランカルーセルのマウスドラッグスクロール
  const planCards = document.querySelector('.plan-cards');
  let isDown = false;
  let startX;
  let scrollLeft;
  
  planCards.addEventListener('mousedown', (e) => {
    isDown = true;
    planCards.style.cursor = 'grabbing';
    startX = e.pageX - planCards.offsetLeft;
    scrollLeft = planCards.scrollLeft;
  });
  
  planCards.addEventListener('mouseleave', () => {
    isDown = false;
    planCards.style.cursor = 'grab';
  });
  
  planCards.addEventListener('mouseup', () => {
    isDown = false;
    planCards.style.cursor = 'grab';
  });
  
  planCards.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - planCards.offsetLeft;
    const walk = (x - startX) * 2;
    planCards.scrollLeft = scrollLeft - walk;
  });
});
</script>

</head>

<body id="<?php echo $page; ?>">
<?php include LOCATION_ROOT_DIR."/templates/gtm.php"; ?>

<!-- ローディング画面 -->
<div class="loading-screen">
  <div class="loading-wave"></div>
</div>

<!-- スクロールプログレスバー -->
<div class="scroll-progress"></div>

<!-- パーティクル効果（オプション） -->
<div class="particles"></div>

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
    <div class="mobile-menu-toggle view_sp">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>

<!-- ヒーローセクション -->
<section class="hero-section">
  <div class="hero-bg"></div>
  <div class="hero-wave"></div>
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
  <div class="skypool-floating"></div>
  <div class="skypool-floating"></div>
  <div class="container">
    <div class="section-title fade-in-scroll">
      <h2>Sky Pool</h2>
      <p class="section-subtitle">
        浜名湖を一望できる屋上スカイプールが2025年6月28日にオープン。<br>
        青い空と湖が一体化した絶景の中で、特別なひとときをお過ごしください。
      </p>
    </div>
    
    <div class="skypool-content">
      <div class="skypool-image fade-in-left-scroll">
        <img src="images/img_picup_spot.jpg" alt="スカイプール">
        <div class="skypool-badge">NEW OPEN</div>
      </div>
      <div class="skypool-info fade-in-right-scroll">
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
    <div class="section-title fade-in-scroll">
      <h2>Marine Activities</h2>
      <p class="section-subtitle">
        ホテル前の穏やかな浜名湖で楽しむマリンスポーツ。<br>
        初心者から上級者まで、年齢を問わずお楽しみいただけます。
      </p>
    </div>
    
    <div class="feature-cards">
      <div class="feature-card fade-in-scroll">
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
      
      <div class="feature-card fade-in-scroll">
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
      
      <div class="feature-card fade-in-scroll">
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
    <div class="section-title fade-in-scroll">
      <h2>Summer Features</h2>
      <p class="section-subtitle">
        ホテルリステル浜名湖で過ごす夏の魅力をご紹介。<br>
        湖畔のリゾートならではの特別な体験をお楽しみください。
      </p>
    </div>
    
    <div class="feature-cards">
      <div class="feature-card fade-in-scroll">
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
      
      <div class="feature-card fade-in-scroll">
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
      
      <div class="feature-card fade-in-scroll">
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
    <div class="section-title fade-in-scroll">
      <h2>Summer Plans</h2>
      <p class="section-subtitle">
        この夏だけの特別な宿泊プランをご用意しました。<br>
        スカイプールやアクティビティを満喫できるお得なプランです。
      </p>
    </div>
    
    <div class="plan-carousel fade-in-scroll">
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
            <a href="#" class="cta-button">このプランを予約</a>
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
            <a href="#" class="cta-button">このプランを予約</a>
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
            <a href="#" class="cta-button">このプランを予約</a>
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
            <a href="#" class="cta-button">このプランを予約</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- フォトギャラリー -->
<section class="section">
  <div class="container">
    <div class="section-title fade-in-scroll">
      <h2>Photo Gallery</h2>
      <p class="section-subtitle">ホテルリステル浜名湖の夏の風景</p>
    </div>
    
    <div class="photo-gallery">
      <div class="photo-item fade-in-scroll">
        <img src="images/img_intro01.jpg" alt="夏の浜名湖">
        <div class="photo-item-overlay">
          <p class="photo-item-title">夏の浜名湖</p>
        </div>
      </div>
      <div class="photo-item fade-in-scroll">
        <img src="images/img_intro02.jpg" alt="露天風呂">
        <div class="photo-item-overlay">
          <p class="photo-item-title">絶景露天風呂</p>
        </div>
      </div>
      <div class="photo-item fade-in-scroll">
        <img src="images/img_intro03.jpg" alt="夏の料理">
        <div class="photo-item-overlay">
          <p class="photo-item-title">夏の特別料理</p>
        </div>
      </div>
      <div class="photo-item fade-in-scroll">
        <img src="images/img_slide_stay01-02.jpg" alt="朝食">
        <div class="photo-item-overlay">
          <p class="photo-item-title">朝食バイキング</p>
        </div>
      </div>
      <div class="photo-item fade-in-scroll">
        <img src="images/img_slide_stay01-03.jpg" alt="客室">
        <div class="photo-item-overlay">
          <p class="photo-item-title">湖畔の客室</p>
        </div>
      </div>
      <div class="photo-item fade-in-scroll">
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
    <div class="section-title fade-in-scroll">
      <h2>Access</h2>
      <p class="section-subtitle">ホテルリステル浜名湖へのアクセス</p>
    </div>
    
    <div style="text-align: center;" class="fade-in-scroll">
      <p style="margin-bottom: 2rem; font-size: 1.1rem; letter-spacing: 0.05em;">
        〒431-1424 静岡県浜松市北区三ヶ日町下尾奈375<br>
        TEL: 053-525-1222
      </p>
      <div style="background: var(--pearl-white); padding: 2.5rem; border-radius: 20px; max-width: 650px; margin: 0 auto; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
        <h3 style="margin-bottom: 1.2rem; font-family: 'Shippori Mincho', serif; font-size: 1.3rem;">お車でお越しの方</h3>
        <p style="color: var(--text-light); line-height: 1.8;">東名高速道路「三ヶ日IC」より約15分</p>
        <h3 style="margin-top: 2.5rem; margin-bottom: 1.2rem; font-family: 'Shippori Mincho', serif; font-size: 1.3rem;">電車でお越しの方</h3>
        <p style="color: var(--text-light); line-height: 1.8;">JR東海道本線「新所原駅」より送迎バスで約20分<br>
        （要予約）</p>
      </div>
    </div>
  </div>
</section>

<!-- フッター -->
<footer style="background: linear-gradient(135deg, var(--deep-ocean), var(--primary-ocean)); color: var(--pearl-white); padding: 4rem 0; text-align: center;">
  <div class="container">
    <p style="margin-bottom: 1.5rem;">
      <img src="images/logo.png" alt="ホテルリステル浜名湖" style="height: 60px; filter: brightness(0) invert(1);">
    </p>
    <p style="letter-spacing: 0.05em; font-size: 0.95rem;">&copy; HOTEL LISTEL HAMANAKO All Rights Reserved.</p>
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