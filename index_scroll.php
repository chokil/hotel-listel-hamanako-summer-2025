<?php
	$page = 'summer';
	include realpath(__DIR__.'/../config/include.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>浜名湖の夏2025 | ホテルリステル浜名湖【公式】</title>
<meta name="description" content="2025年6月28日スカイプールOPEN！浜名湖を一望できる屋上プールと湖畔のマリンアクティビティで特別な夏をお過ごしください。">

<!-- 日本語に最適化されたフォント -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>

<style>
/* モダンスクロール型LP */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  font-family: 'M PLUS Rounded 1c', 'Hiragino Sans', sans-serif;
  color: #333;
  background: #000;
  overflow-x: hidden;
  line-height: 1.8;
}

/* カスタムプロパティ */
:root {
  --ocean-blue: #006994;
  --sky-blue: #4fc3f7;
  --sunset-orange: #ff6b35;
  --sand-beige: #ffeaa7;
  --night-blue: #001f3f;
  --pearl: #f8f9fa;
  --shadow: rgba(0, 0, 0, 0.3);
  --ease-out-expo: cubic-bezier(0.19, 1, 0.22, 1);
}

/* プログレスバー */
.progress-bar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: rgba(255, 255, 255, 0.1);
  z-index: 1000;
}

.progress-fill {
  height: 100%;
  background: linear-gradient(90deg, var(--sky-blue), var(--sunset-orange));
  width: 0;
  transition: width 0.3s linear;
}

/* ヘッダー */
.header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.9);
  backdrop-filter: blur(20px);
  z-index: 999;
  transition: all 0.3s ease;
  padding: 1rem 0;
}

.header.scrolled {
  background: rgba(0, 0, 0, 0.95);
  padding: 0.5rem 0;
}

.header-inner {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.5rem;
  font-weight: 700;
  color: #fff;
  text-decoration: none;
  transition: opacity 0.3s ease;
}

.logo:hover {
  opacity: 0.8;
}

.nav {
  display: flex;
  gap: 2rem;
  list-style: none;
}

.nav a {
  color: #fff;
  text-decoration: none;
  font-size: 0.95rem;
  transition: all 0.3s ease;
  position: relative;
}

.nav a::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--sky-blue);
  transition: width 0.3s ease;
}

.nav a:hover::after {
  width: 100%;
}

/* モバイルメニュー */
.mobile-menu-btn {
  display: none;
  width: 30px;
  height: 24px;
  position: relative;
  cursor: pointer;
}

.mobile-menu-btn span {
  position: absolute;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  transition: all 0.3s ease;
}

.mobile-menu-btn span:nth-child(1) { top: 0; }
.mobile-menu-btn span:nth-child(2) { top: 11px; }
.mobile-menu-btn span:nth-child(3) { bottom: 0; }

.mobile-menu-btn.active span:nth-child(1) {
  transform: rotate(45deg) translate(8px, 8px);
}

.mobile-menu-btn.active span:nth-child(2) {
  opacity: 0;
}

.mobile-menu-btn.active span:nth-child(3) {
  transform: rotate(-45deg) translate(8px, -8px);
}

/* セクション基本スタイル */
.section {
  min-height: 100vh;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  padding: 80px 20px;
}

/* ローディング画面 */
.loading-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000;
  z-index: 10000;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: opacity 0.8s ease, visibility 0.8s ease;
}

.loading-screen.hidden {
  opacity: 0;
  visibility: hidden;
}

.loader {
  text-align: center;
}

.loader-text {
  font-family: 'Shippori Mincho', serif;
  font-size: 1.5rem;
  color: #fff;
  letter-spacing: 0.2em;
  opacity: 0;
  animation: fadeInOut 2s ease infinite;
}

@keyframes fadeInOut {
  0%, 100% { opacity: 0; }
  50% { opacity: 1; }
}

/* Section 1: Hero */
.section-hero {
  height: 100vh;
  background: #000;
  position: relative;
}

.video-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.video-bg::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, 
    rgba(0,0,0,0.3) 0%, 
    rgba(0,0,0,0.5) 100%);
}

#bgVideo {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  transform: translate(-50%, -50%) scale(1.1);
}

.hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: #fff;
  max-width: 1000px;
  margin: 0 auto;
  padding: 0 20px;
}

.hero-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 7vw, 6rem);
  font-weight: 300;
  line-height: 1.3;
  letter-spacing: 0.1em;
  margin-bottom: 1.5rem;
  opacity: 0;
  transform: translateY(50px);
}

.hero-subtitle {
  font-size: clamp(1.1rem, 2.5vw, 1.6rem);
  font-weight: 300;
  letter-spacing: 0.15em;
  margin-bottom: 3rem;
  opacity: 0;
  transform: translateY(30px);
}

.hero-date {
  display: inline-block;
  font-family: 'Montserrat', sans-serif;
  font-size: 1.1rem;
  font-weight: 500;
  letter-spacing: 0.2em;
  padding: 1rem 2.5rem;
  border: 2px solid rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(10px);
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50px;
  margin-bottom: 2rem;
  opacity: 0;
  transform: scale(0.8);
}

.hero-cta {
  display: inline-block;
  padding: 1.2rem 3rem;
  background: var(--sunset-orange);
  color: #fff;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  transition: all 0.3s ease;
  opacity: 0;
  transform: translateY(30px);
}

.hero-cta:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 30px rgba(255, 107, 53, 0.4);
}

.scroll-indicator {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  animation: float 3s ease-in-out infinite;
}

.mouse {
  width: 26px;
  height: 40px;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  position: relative;
  margin: 0 auto;
}

.mouse::before {
  content: '';
  position: absolute;
  top: 8px;
  left: 50%;
  transform: translateX(-50%);
  width: 3px;
  height: 8px;
  background: rgba(255, 255, 255, 0.7);
  border-radius: 2px;
  animation: scroll-wheel 2s infinite;
}

@keyframes float {
  0%, 100% { transform: translateX(-50%) translateY(0); }
  50% { transform: translateX(-50%) translateY(-10px); }
}

@keyframes scroll-wheel {
  0% { transform: translateX(-50%) translateY(0); opacity: 1; }
  100% { transform: translateX(-50%) translateY(15px); opacity: 0; }
}

/* Section 2: Sky Pool */
.section-skypool {
  background: linear-gradient(135deg, #001f3f 0%, #006994 100%);
  position: relative;
}

.skypool-bg-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.2;
}

.skypool-bg-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.skypool-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: #fff;
  max-width: 1200px;
  margin: 0 auto;
}

.skypool-badge {
  display: inline-block;
  font-family: 'Montserrat', sans-serif;
  font-size: 0.9rem;
  font-weight: 600;
  letter-spacing: 0.3em;
  text-transform: uppercase;
  padding: 0.8rem 2rem;
  background: var(--sunset-orange);
  border-radius: 50px;
  margin-bottom: 2rem;
  opacity: 0;
  transform: translateY(30px);
}

.skypool-title {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(3rem, 8vw, 7rem);
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 1;
  margin-bottom: 0.5rem;
  background: linear-gradient(180deg, #fff 0%, var(--sky-blue) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  opacity: 0;
  transform: scale(0.8);
}

.skypool-date {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(1.5rem, 4vw, 3rem);
  font-weight: 300;
  letter-spacing: 0.2em;
  margin-bottom: 3rem;
  opacity: 0;
  transform: translateY(30px);
}

.skypool-text {
  font-size: clamp(1rem, 2vw, 1.2rem);
  line-height: 1.8;
  max-width: 800px;
  margin: 0 auto 3rem;
  opacity: 0;
  transform: translateY(30px);
}

.skypool-features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-top: 4rem;
  opacity: 0;
  transform: translateY(50px);
}

.feature-card {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 20px;
  padding: 2rem;
  transition: all 0.4s ease;
}

.feature-card:hover {
  transform: translateY(-10px);
  background: rgba(255, 255, 255, 0.15);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.feature-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.feature-title {
  font-size: 1.2rem;
  font-weight: 500;
  margin-bottom: 0.5rem;
}

.feature-text {
  font-size: 0.9rem;
  opacity: 0.8;
  line-height: 1.6;
}

/* Section 3: Rooftop */
.section-rooftop {
  background: #000;
  position: relative;
}

.rooftop-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 20px;
}

.rooftop-image {
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  opacity: 0;
  transform: translateX(-50px);
}

.rooftop-image img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.8s ease;
}

.rooftop-image:hover img {
  transform: scale(1.05);
}

.rooftop-content {
  color: #fff;
  opacity: 0;
  transform: translateX(50px);
}

.rooftop-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 400;
  letter-spacing: 0.1em;
  line-height: 1.3;
  margin-bottom: 2rem;
}

.rooftop-text {
  font-size: clamp(1rem, 2vw, 1.2rem);
  line-height: 1.8;
  margin-bottom: 2rem;
  opacity: 0.9;
}

.rooftop-features {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.rooftop-feature {
  display: flex;
  align-items: center;
  gap: 0.8rem;
  padding: 0.8rem 1.5rem;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border-radius: 50px;
  transition: all 0.3s ease;
}

.rooftop-feature:hover {
  background: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

/* Section 4: Gourmet */
.section-gourmet {
  background: var(--pearl);
  color: var(--night-blue);
  padding: 100px 20px;
}

.gourmet-header {
  text-align: center;
  margin-bottom: 5rem;
}

.gourmet-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 400;
  letter-spacing: 0.1em;
  margin-bottom: 1rem;
  opacity: 0;
  transform: translateY(50px);
}

.gourmet-subtitle {
  font-size: clamp(1.2rem, 3vw, 2rem);
  color: var(--ocean-blue);
  opacity: 0;
  transform: translateY(30px);
}

.cuisine-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  max-width: 1200px;
  margin: 0 auto;
  opacity: 0;
  transform: translateY(50px);
}

.cuisine-item {
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  cursor: pointer;
  background: #fff;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
}

.cuisine-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.cuisine-image {
  position: relative;
  padding-top: 75%;
  overflow: hidden;
}

.cuisine-image img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.cuisine-item:hover .cuisine-image img {
  transform: scale(1.1);
}

.cuisine-info {
  padding: 1.5rem;
}

.cuisine-name {
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 0.5rem;
  color: var(--night-blue);
}

.cuisine-desc {
  font-size: 0.9rem;
  color: #666;
  line-height: 1.6;
}

/* Section 5: Seven Fish */
.section-seven {
  background: linear-gradient(180deg, var(--night-blue) 0%, #000 100%);
  color: #fff;
  padding: 100px 20px;
}

.seven-content {
  text-align: center;
  max-width: 1200px;
  margin: 0 auto;
}

.seven-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 400;
  letter-spacing: 0.15em;
  margin-bottom: 1rem;
  opacity: 0;
  transform: translateY(50px);
}

.seven-subtitle {
  font-size: clamp(1.2rem, 3vw, 2rem);
  font-weight: 300;
  margin-bottom: 4rem;
  opacity: 0;
  transform: translateY(30px);
}

.seven-showcase {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
  opacity: 0;
  transform: scale(0.8);
}

.seven-main-image {
  width: 100%;
  border-radius: 30px;
  overflow: hidden;
  box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
}

.seven-main-image img {
  width: 100%;
  display: block;
}

.fish-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 1rem;
  margin-top: 3rem;
  opacity: 0;
  transform: translateY(30px);
}

.fish-item {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  padding: 1rem;
  border-radius: 15px;
  transition: all 0.3s ease;
}

.fish-item:hover {
  background: rgba(255, 255, 255, 0.15);
  transform: translateY(-5px);
}

.fish-number {
  display: inline-block;
  width: 30px;
  height: 30px;
  background: var(--sunset-orange);
  border-radius: 50%;
  line-height: 30px;
  font-weight: 700;
  margin-bottom: 0.5rem;
}

.fish-name {
  font-size: 1.1rem;
  font-weight: 500;
}

/* Section 6: Activities */
.section-activities {
  background: linear-gradient(to bottom, var(--pearl) 0%, #fff 100%);
  padding: 100px 20px;
}

.activities-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 3rem;
  max-width: 1200px;
  margin: 0 auto;
}

.activity-card {
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  background: #fff;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
  opacity: 0;
  transform: translateY(50px);
}

.activity-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.activity-image {
  position: relative;
  height: 300px;
  overflow: hidden;
}

.activity-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.activity-card:hover .activity-image img {
  transform: scale(1.1);
}

.activity-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.7) 100%);
  display: flex;
  align-items: flex-end;
  padding: 2rem;
}

.activity-tag {
  position: absolute;
  top: 20px;
  left: 20px;
  background: var(--sky-blue);
  color: #fff;
  padding: 0.5rem 1.5rem;
  border-radius: 50px;
  font-size: 0.9rem;
  font-weight: 500;
}

.activity-info {
  color: #fff;
}

.activity-title {
  font-size: 1.8rem;
  font-weight: 500;
  margin-bottom: 0.5rem;
}

.activity-desc {
  font-size: 1rem;
  opacity: 0.9;
  margin-bottom: 1.5rem;
}

.activity-btn {
  display: inline-block;
  padding: 0.8rem 2rem;
  background: #fff;
  color: var(--night-blue);
  text-decoration: none;
  border-radius: 50px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.activity-btn:hover {
  transform: translateX(5px);
}

/* Section 7: Booking */
.section-booking {
  background: linear-gradient(135deg, var(--night-blue) 0%, var(--ocean-blue) 100%);
  color: #fff;
  padding: 100px 20px;
}

.booking-content {
  text-align: center;
  max-width: 1200px;
  margin: 0 auto;
}

.booking-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 400;
  letter-spacing: 0.1em;
  margin-bottom: 4rem;
  opacity: 0;
  transform: translateY(50px);
}

.plans-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
  margin-bottom: 4rem;
  opacity: 0;
  transform: translateY(50px);
}

.plan-card {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 20px;
  padding: 2.5rem;
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

.plan-card::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
  opacity: 0;
  transition: opacity 0.4s ease;
}

.plan-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.plan-card:hover::before {
  opacity: 1;
}

.plan-name {
  font-size: 1.5rem;
  font-weight: 500;
  margin-bottom: 1rem;
}

.plan-price {
  font-size: 2.2rem;
  color: var(--sunset-orange);
  font-weight: 700;
  margin-bottom: 1.5rem;
}

.plan-features {
  font-size: 0.95rem;
  line-height: 1.8;
  opacity: 0.9;
}

.booking-cta {
  display: flex;
  gap: 2rem;
  justify-content: center;
  flex-wrap: wrap;
  opacity: 0;
  transform: translateY(30px);
}

.btn-primary {
  display: inline-block;
  padding: 1.3rem 3.5rem;
  background: var(--sunset-orange);
  color: #fff;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.btn-primary::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  transition: width 0.6s, height 0.6s;
}

.btn-primary:hover::before {
  width: 300px;
  height: 300px;
}

.btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 30px rgba(255, 107, 53, 0.4);
}

.btn-secondary {
  display: inline-block;
  padding: 1.3rem 3.5rem;
  background: transparent;
  color: #fff;
  text-decoration: none;
  border: 2px solid #fff;
  border-radius: 50px;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.3s ease;
}

.btn-secondary:hover {
  background: #fff;
  color: var(--night-blue);
  transform: translateY(-3px);
  box-shadow: 0 15px 30px rgba(255, 255, 255, 0.3);
}

.contact-info {
  margin-top: 3rem;
  font-size: 1.2rem;
  opacity: 0;
  transform: translateY(30px);
}

/* フッター */
.footer {
  background: #000;
  color: #fff;
  padding: 3rem 20px;
  text-align: center;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
}

.footer-logo {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.8rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.footer-links {
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin-bottom: 2rem;
  flex-wrap: wrap;
}

.footer-links a {
  color: rgba(255, 255, 255, 0.7);
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-links a:hover {
  color: #fff;
}

.footer-copy {
  color: rgba(255, 255, 255, 0.5);
  font-size: 0.9rem;
}

/* アニメーションクラス */
.fade-up {
  opacity: 0;
  transform: translateY(50px);
  transition: all 0.8s ease;
}

.fade-up.animated {
  opacity: 1;
  transform: translateY(0);
}

.fade-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: all 0.8s ease;
}

.fade-left.animated {
  opacity: 1;
  transform: translateX(0);
}

.fade-right {
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.8s ease;
}

.fade-right.animated {
  opacity: 1;
  transform: translateX(0);
}

.scale-in {
  opacity: 0;
  transform: scale(0.8);
  transition: all 0.8s ease;
}

.scale-in.animated {
  opacity: 1;
  transform: scale(1);
}

/* レスポンシブ */
@media (max-width: 768px) {
  .header-inner {
    padding: 0 15px;
  }
  
  .nav {
    display: none;
    position: fixed;
    top: 60px;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.95);
    flex-direction: column;
    padding: 2rem;
    gap: 1.5rem;
  }
  
  .nav.active {
    display: flex;
  }
  
  .mobile-menu-btn {
    display: block;
  }
  
  .section {
    padding: 60px 15px;
  }
  
  .hero-title {
    font-size: 2.5rem;
  }
  
  .rooftop-container {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  
  .cuisine-gallery {
    grid-template-columns: 1fr;
  }
  
  .activities-grid {
    grid-template-columns: 1fr;
  }
  
  .plans-grid {
    grid-template-columns: 1fr;
  }
  
  .booking-cta {
    flex-direction: column;
    align-items: center;
  }
  
  .btn-primary,
  .btn-secondary {
    width: 100%;
    max-width: 300px;
  }
  
  .footer-links {
    flex-direction: column;
    gap: 1rem;
  }
}

@media (max-width: 480px) {
  .hero-title {
    font-size: 2rem;
    letter-spacing: 0.05em;
  }
  
  .section-title {
    font-size: 2rem;
  }
  
  .skypool-title {
    font-size: 3rem;
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
  }
  
  html {
    scroll-behavior: auto;
  }
}
</style>

<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_js.php"; ?>

</head>

<body id="<?php echo $page; ?>">
<?php include LOCATION_ROOT_DIR."/templates/gtm.php"; ?>

<!-- ローディング画面 -->
<div class="loading-screen" id="loadingScreen">
  <div class="loader">
    <p class="loader-text">浜名湖の夏へ</p>
  </div>
</div>

<!-- プログレスバー -->
<div class="progress-bar">
  <div class="progress-fill" id="progressFill"></div>
</div>

<!-- ヘッダー -->
<header class="header" id="header">
  <div class="header-inner">
    <a href="<?php echo LOCATION; ?>" class="logo">LISTEL HAMANAKO</a>
    
    <nav class="nav" id="nav">
      <a href="#hero">TOP</a>
      <a href="#skypool">スカイプール</a>
      <a href="#rooftop">ルーフトップ</a>
      <a href="#gourmet">グルメ</a>
      <a href="#seven">七点盛り</a>
      <a href="#activities">アクティビティ</a>
      <a href="#booking">予約</a>
    </nav>
    
    <div class="mobile-menu-btn" id="mobileMenuBtn">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>

<!-- Section 1: Hero -->
<section class="section section-hero" id="hero">
  <div class="video-bg">
    <div id="bgVideo"></div>
  </div>
  
  <div class="hero-content">
    <h1 class="hero-title fade-up">
      涼やかな風が吹く<br>
      浜名湖の夏
    </h1>
    <p class="hero-subtitle fade-up">
      2025年夏、新たな体験が始まる
    </p>
    <div class="hero-date scale-in">
      2025 SUMMER
    </div>
    <a href="#booking" class="hero-cta fade-up">宿泊プランを見る</a>
  </div>
  
  <div class="scroll-indicator">
    <div class="mouse"></div>
  </div>
</section>

<!-- Section 2: Sky Pool -->
<section class="section section-skypool" id="skypool">
  <div class="skypool-bg-img">
    <img src="images/skypool/sky_pool_re.jpg" alt="スカイプール">
  </div>
  
  <div class="skypool-content">
    <div class="skypool-badge fade-up">NEW OPEN</div>
    <h2 class="skypool-title scale-in">SKYPOOL</h2>
    <p class="skypool-date fade-up">2025.6.28</p>
    <p class="skypool-text fade-up">
      ホテル最上階のルーフトップに<br>
      浜名湖を一望できる特別な空間が誕生<br><br>
      青い空と湖が溶け合う<br>
      インフィニティプールで<br>
      忘れられない夏の思い出を
    </p>
    
    <div class="skypool-features fade-up">
      <div class="feature-card">
        <div class="feature-icon">🌊</div>
        <h3 class="feature-title">インフィニティプール</h3>
        <p class="feature-text">浜名湖と一体化した絶景プール</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">☀️</div>
        <h3 class="feature-title">新素材採用</h3>
        <p class="feature-text">直射日光の熱を低減</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🏊</div>
        <h3 class="feature-title">水泳教室</h3>
        <p class="feature-text">8月は有資格者による指導</p>
      </div>
    </div>
  </div>
</section>

<!-- Section 3: Rooftop -->
<section class="section section-rooftop" id="rooftop">
  <div class="rooftop-container">
    <div class="rooftop-image fade-left">
      <img src="images/skypool/hamanakopool.jpg" alt="ルーフトップからの眺望">
    </div>
    
    <div class="rooftop-content fade-right">
      <h2 class="rooftop-title">
        空と湖に包まれる<br>
        360°パノラマビュー
      </h2>
      <p class="rooftop-text">
        まるで空に浮かんでいるような感覚。<br>
        朝は朝日に輝く湖面、昼は青い空と白い雲、<br>
        夕方は黄金色に染まる絶景をお楽しみください。
      </p>
      <div class="rooftop-features">
        <div class="rooftop-feature">
          <span>🌅</span>
          <span>サンライズビュー</span>
        </div>
        <div class="rooftop-feature">
          <span>🌤️</span>
          <span>オールデイ利用可</span>
        </div>
        <div class="rooftop-feature">
          <span>🍹</span>
          <span>プールサイドバー</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: Gourmet -->
<section class="section section-gourmet" id="gourmet">
  <div class="gourmet-header">
    <h2 class="gourmet-title fade-up">夏のグルメ特集</h2>
    <p class="gourmet-subtitle fade-up">遠州＆浜名湖 美味しいものEXPO</p>
  </div>
  
  <div class="cuisine-gallery fade-up">
    <div class="cuisine-item">
      <div class="cuisine-image">
        <img src="images/buffet/地元銘柄豚のサムギョプサル.jpeg" alt="韓国料理">
      </div>
      <div class="cuisine-info">
        <h3 class="cuisine-name">韓国フェア</h3>
        <p class="cuisine-desc">地元銘柄豚のサムギョプサル</p>
      </div>
    </div>
    
    <div class="cuisine-item">
      <div class="cuisine-image">
        <img src="images/buffet/夏野菜と地魚のオーブン焼き ネギ塩風味 (1).jpeg" alt="地魚料理">
      </div>
      <div class="cuisine-info">
        <h3 class="cuisine-name">夏野菜と地魚</h3>
        <p class="cuisine-desc">オーブン焼き ネギ塩風味</p>
      </div>
    </div>
    
    <div class="cuisine-item">
      <div class="cuisine-image">
        <img src="images/buffet/浜松そうめんの静岡茶ッペリーニ (1).jpeg" alt="創作そうめん">
      </div>
      <div class="cuisine-info">
        <h3 class="cuisine-name">浜松そうめん</h3>
        <p class="cuisine-desc">静岡茶ッペリーニ</p>
      </div>
    </div>
    
    <div class="cuisine-item">
      <div class="cuisine-image">
        <img src="images/buffet/フリフリチキン 三ヶ日みかん風味 (1).jpeg" alt="フリフリチキン">
      </div>
      <div class="cuisine-info">
        <h3 class="cuisine-name">ハワイアン</h3>
        <p class="cuisine-desc">フリフリチキン 三ヶ日みかん風味</p>
      </div>
    </div>
    
    <div class="cuisine-item">
      <div class="cuisine-image">
        <img src="images/buffet/棒々鶏 (1).jpeg" alt="中華料理">
      </div>
      <div class="cuisine-info">
        <h3 class="cuisine-name">四川料理</h3>
        <p class="cuisine-desc">本格棒々鶏</p>
      </div>
    </div>
    
    <div class="cuisine-item">
      <div class="cuisine-image">
        <img src="images/buffet/鮪のカマのスペアリブ風焼き (1).jpeg" alt="創作料理">
      </div>
      <div class="cuisine-info">
        <h3 class="cuisine-name">創作料理</h3>
        <p class="cuisine-desc">鮪のカマのスペアリブ風焼き</p>
      </div>
    </div>
  </div>
</section>

<!-- Section 5: Seven Fish -->
<section class="section section-seven" id="seven">
  <div class="seven-content">
    <h2 class="seven-title fade-up">遠州灘の恵み</h2>
    <p class="seven-subtitle fade-up">豪華七点盛り</p>
    
    <div class="seven-showcase scale-in">
      <div class="seven-main-image">
        <img src="images/img_intro03.jpg" alt="七点盛り">
      </div>
    </div>
    
    <div class="fish-list fade-up">
      <div class="fish-item">
        <div class="fish-number">1</div>
        <p class="fish-name">マダイ</p>
      </div>
      <div class="fish-item">
        <div class="fish-number">2</div>
        <p class="fish-name">スズキ</p>
      </div>
      <div class="fish-item">
        <div class="fish-number">3</div>
        <p class="fish-name">カンパチ</p>
      </div>
      <div class="fish-item">
        <div class="fish-number">4</div>
        <p class="fish-name">アジ</p>
      </div>
      <div class="fish-item">
        <div class="fish-number">5</div>
        <p class="fish-name">カマス</p>
      </div>
      <div class="fish-item">
        <div class="fish-number">6</div>
        <p class="fish-name">イサキ</p>
      </div>
      <div class="fish-item">
        <div class="fish-number">7</div>
        <p class="fish-name">太刀魚</p>
      </div>
    </div>
  </div>
</section>

<!-- Section 6: Activities -->
<section class="section section-activities" id="activities">
  <div class="activities-grid">
    <div class="activity-card fade-up">
      <div class="activity-image">
        <img src="images/img_activity01.jpg" alt="マリンスポーツ">
        <div class="activity-overlay">
          <div class="activity-tag">Marine Sports</div>
          <div class="activity-info">
            <h3 class="activity-title">湖上のアドベンチャー</h3>
            <p class="activity-desc">ウェイクボード、ウェイクサーフィン、トーイングチューブ</p>
            <a href="<?php echo LOCATION; ?>activity/" class="activity-btn">詳細を見る →</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="activity-card fade-up">
      <div class="activity-image">
        <img src="images/img_activity02.jpg" alt="サイクリング">
        <div class="activity-overlay">
          <div class="activity-tag">Wellbeing</div>
          <div class="activity-info">
            <h3 class="activity-title">地元を巡るサイクリング</h3>
            <p class="activity-desc">ガイド付きツアー、電動自転車で楽々移動</p>
            <a href="<?php echo LOCATION; ?>activity/" class="activity-btn">詳細を見る →</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="activity-card fade-up">
      <div class="activity-image">
        <img src="images/img_activity03.jpg" alt="体験プログラム">
        <div class="activity-overlay">
          <div class="activity-tag">Experience</div>
          <div class="activity-info">
            <h3 class="activity-title">地元体験プログラム</h3>
            <p class="activity-desc">フルーツ大福作り、地元カフェ巡り</p>
            <a href="<?php echo LOCATION; ?>activity/" class="activity-btn">詳細を見る →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 7: Booking -->
<section class="section section-booking" id="booking">
  <div class="booking-content">
    <h2 class="booking-title fade-up">
      この夏だけの特別な体験を<br>
      今すぐ予約
    </h2>
    
    <div class="plans-grid fade-up">
      <div class="plan-card">
        <h3 class="plan-name">スカイプール満喫プラン</h3>
        <p class="plan-price">¥15,000〜</p>
        <p class="plan-features">
          1泊2食付き<br>
          プール利用無料<br>
          ウェルカムドリンク付き
        </p>
      </div>
      
      <div class="plan-card">
        <h3 class="plan-name">アクティビティ充実プラン</h3>
        <p class="plan-price">¥18,000〜</p>
        <p class="plan-features">
          マリンスポーツ1種体験付き<br>
          1泊2食付き<br>
          プール利用無料
        </p>
      </div>
      
      <div class="plan-card">
        <h3 class="plan-name">ウェルビーイングプラン</h3>
        <p class="plan-price">¥16,000〜</p>
        <p class="plan-features">
          サイクリングツアー付き<br>
          地元体験1種付き<br>
          1泊2食付き
        </p>
      </div>
      
      <div class="plan-card">
        <h3 class="plan-name">グルメ満喫プラン</h3>
        <p class="plan-price">¥20,000〜</p>
        <p class="plan-features">
          七点盛り付き<br>
          世界の料理ビュッフェ<br>
          1泊2食付き
        </p>
      </div>
    </div>
    
    <div class="booking-cta fade-up">
      <a href="<?php echo LOCATION; ?>plan/" class="btn-primary">オンライン予約</a>
      <a href="tel:0535251222" class="btn-secondary">電話で予約</a>
    </div>
    
    <div class="contact-info fade-up">
      <p>TEL: 053-525-1222</p>
      <p>営業時間: 9:00-18:00</p>
    </div>
  </div>
</section>

<!-- フッター -->
<footer class="footer">
  <div class="footer-content">
    <div class="footer-logo">HOTEL LISTEL HAMANAKO</div>
    <div class="footer-links">
      <a href="<?php echo LOCATION; ?>">ホーム</a>
      <a href="<?php echo LOCATION; ?>access/">アクセス</a>
      <a href="<?php echo LOCATION; ?>contact/">お問い合わせ</a>
      <a href="<?php echo LOCATION; ?>privacy/">プライバシーポリシー</a>
    </div>
    <p class="footer-copy">&copy; HOTEL LISTEL HAMANAKO All Rights Reserved.</p>
  </div>
</footer>

<script>
// ローディング画面
window.addEventListener('load', () => {
  setTimeout(() => {
    document.getElementById('loadingScreen').classList.add('hidden');
  }, 1000);
});

// プログレスバー
window.addEventListener('scroll', () => {
  const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrolled = (winScroll / height) * 100;
  document.getElementById('progressFill').style.width = scrolled + '%';
});

// ヘッダースクロール
const header = document.getElementById('header');
let lastScroll = 0;

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset;
  
  if (currentScroll > 100) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
  
  lastScroll = currentScroll;
});

// モバイルメニュー
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const nav = document.getElementById('nav');

mobileMenuBtn.addEventListener('click', () => {
  mobileMenuBtn.classList.toggle('active');
  nav.classList.toggle('active');
});

// スムーススクロール
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
      // モバイルメニューを閉じる
      mobileMenuBtn.classList.remove('active');
      nav.classList.remove('active');
    }
  });
});

// スクロールアニメーション
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animated');
      
      // 要素内の子要素にも遅延をつけてアニメーション
      const children = entry.target.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in');
      children.forEach((child, index) => {
        setTimeout(() => {
          child.classList.add('animated');
        }, index * 100);
      });
    }
  });
}, observerOptions);

// アニメーション対象要素を監視
document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in').forEach(el => {
  observer.observe(el);
});

// セクションごとのアニメーション
document.querySelectorAll('.section').forEach(section => {
  observer.observe(section);
});

// YouTube Player API
let player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('bgVideo', {
    height: '100%',
    width: '100%',
    videoId: 'uRp_W_8wRYk',
    playerVars: {
      autoplay: 1,
      mute: 1,
      controls: 0,
      loop: 1,
      playlist: 'uRp_W_8wRYk',
      playsinline: 1,
      rel: 0,
      showinfo: 0,
      modestbranding: 1,
      fs: 0,
      iv_load_policy: 3,
      disablekb: 1,
      origin: window.location.origin
    },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerReady(event) {
  event.target.playVideo();
  event.target.setPlaybackQuality('hd720');
}

function onPlayerStateChange(event) {
  if (event.data === YT.PlayerState.ENDED) {
    event.target.playVideo();
  }
}

// YouTube API読み込み
const tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
const firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// パララックス効果
window.addEventListener('scroll', () => {
  const scrolled = window.pageYOffset;
  const parallaxElements = document.querySelectorAll('.skypool-bg-img img, .rooftop-image img');
  
  parallaxElements.forEach(el => {
    const speed = 0.5;
    const yPos = -(scrolled * speed);
    el.style.transform = `translateY(${yPos}px)`;
  });
});
</script>

</body>
</html>