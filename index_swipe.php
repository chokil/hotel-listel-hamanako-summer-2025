<?php
	$page = 'summer';
	include realpath(__DIR__.'/../config/include.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>浜名湖の夏2025 | ホテルリステル浜名湖【公式】</title>
<meta name="description" content="2025年6月28日スカイプールOPEN！浜名湖を一望できる屋上プールと湖畔のマリンアクティビティで特別な夏をお過ごしください。">

<!-- 日本語に最適化されたフォント -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">

<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>

<style>
/* リセットとベース設定 */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  overflow: hidden;
  height: 100%;
}

body {
  font-family: 'M PLUS Rounded 1c', 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', sans-serif;
  color: #333;
  line-height: 1.8;
  overflow: hidden;
  height: 100%;
  position: fixed;
  width: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* カラー変数 */
:root {
  --primary-blue: #0277bd;
  --light-blue: #4fc3f7;
  --deep-blue: #01579b;
  --sunset-gold: #ffb300;
  --sunrise-pink: #ff6f61;
  --pearl-white: #fafafa;
  --sand-beige: #fff8e1;
  --text-dark: #333;
  --text-light: #666;
  --shadow: rgba(0, 0, 0, 0.1);
  --transition: cubic-bezier(0.4, 0, 0.2, 1);
}

/* メインコンテナ */
.swipe-container {
  height: 100vh;
  width: 100%;
  position: relative;
  overflow-y: auto;
  overflow-x: hidden;
  scroll-snap-type: y mandatory;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
}

/* セクション基本スタイル */
.section {
  height: 100vh;
  width: 100%;
  position: relative;
  scroll-snap-align: start;
  scroll-snap-stop: always;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

/* ナビゲーションドット */
.nav-dots {
  position: fixed;
  right: 30px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 100;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.nav-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
  border: 2px solid rgba(255, 255, 255, 0.6);
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
}

.nav-dot.active {
  background: var(--pearl-white);
  transform: scale(1.3);
}

.nav-dot:hover {
  transform: scale(1.2);
}

.nav-dot .tooltip {
  position: absolute;
  right: 25px;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.8);
  color: white;
  padding: 5px 12px;
  border-radius: 4px;
  font-size: 0.85rem;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s;
}

.nav-dot:hover .tooltip {
  opacity: 1;
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
  flex-direction: column;
  justify-content: center;
  align-items: center;
  transition: opacity 0.5s ease, visibility 0.5s ease;
}

.loading-screen.loaded {
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
}

.loading-wave {
  width: 80px;
  height: 80px;
  position: relative;
  margin-bottom: 20px;
}

.loading-wave::before,
.loading-wave::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 3px solid var(--primary-blue);
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

.loading-text {
  font-size: 1.1rem;
  color: var(--primary-blue);
  letter-spacing: 0.1em;
}

/* Section 1: オープニング（動画背景） */
.section-opening {
  background: #000;
}

.video-background {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 100%;
  transform: translate(-50%, -50%);
  object-fit: cover;
  z-index: 1;
}

.video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.youtube-container {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100vw;
  height: 56.25vw; /* 16:9 Aspect Ratio */
  min-height: 100vh;
  min-width: 177.77vh; /* 16:9 Aspect Ratio */
  transform: translate(-50%, -50%);
  pointer-events: none;
}

.youtube-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.5) 100%);
  z-index: 2;
}

.opening-content {
  position: relative;
  z-index: 3;
  text-align: center;
  color: var(--pearl-white);
  padding: 0 20px;
  max-width: 800px;
}

.opening-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3rem, 8vw, 6rem);
  font-weight: 400;
  letter-spacing: 0.2em;
  line-height: 1.4;
  margin-bottom: 2rem;
  opacity: 0;
  transform: translateY(50px);
  animation: fadeInUp 1.5s ease forwards;
  animation-delay: 0.5s;
}

.opening-subtitle {
  font-size: clamp(1.2rem, 3vw, 1.8rem);
  font-weight: 300;
  letter-spacing: 0.1em;
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1.5s ease forwards;
  animation-delay: 0.8s;
}

.scroll-indicator {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 3;
  opacity: 0;
  animation: fadeIn 1s ease forwards;
  animation-delay: 1.5s;
}

.scroll-text {
  color: var(--pearl-white);
  font-size: 0.9rem;
  letter-spacing: 0.15em;
  margin-bottom: 10px;
}

.scroll-arrow {
  width: 24px;
  height: 24px;
  margin: 0 auto;
  border-right: 2px solid var(--pearl-white);
  border-bottom: 2px solid var(--pearl-white);
  transform: rotate(45deg);
  animation: scrollBounce 2s infinite;
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

/* Section 2: スカイプールOPEN */
.section-skypool {
  background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
}

.skypool-content {
  text-align: center;
  padding: 0 20px;
  max-width: 1000px;
}

.skypool-badge {
  display: inline-block;
  background: linear-gradient(135deg, var(--sunset-gold), var(--sunrise-pink));
  color: var(--pearl-white);
  padding: 0.8rem 2.5rem;
  font-weight: 700;
  font-size: 1.1rem;
  letter-spacing: 0.1em;
  border-radius: 50px;
  margin-bottom: 2rem;
  box-shadow: 0 10px 30px rgba(255, 179, 0, 0.3);
  opacity: 0;
  transform: translateY(30px) scale(0.9);
}

.skypool-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3rem, 7vw, 5rem);
  font-weight: 500;
  color: var(--deep-blue);
  letter-spacing: 0.15em;
  margin-bottom: 1rem;
  line-height: 1.2;
  opacity: 0;
  transform: translateY(50px);
}

.skypool-date {
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 300;
  color: var(--primary-blue);
  letter-spacing: 0.2em;
  margin-bottom: 3rem;
  opacity: 0;
  transform: translateY(30px);
}

.skypool-description {
  font-size: clamp(1.1rem, 2.5vw, 1.4rem);
  line-height: 1.8;
  color: var(--text-dark);
  max-width: 700px;
  margin: 0 auto;
  opacity: 0;
  transform: translateY(30px);
}

.wave-decoration {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 150px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,133.3C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") no-repeat;
  background-size: cover;
}

/* Section 3: ルーフトップビュー */
.section-rooftop {
  background: var(--pearl-white);
  position: relative;
}

.rooftop-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.rooftop-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: scale(1.1);
  transition: transform 10s ease;
}

.rooftop-image.active img {
  transform: scale(1);
}

.rooftop-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(ellipse at center, transparent 0%, rgba(0,0,0,0.4) 100%);
}

.rooftop-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: var(--pearl-white);
  padding: 0 20px;
  max-width: 800px;
}

.rooftop-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 6vw, 4rem);
  font-weight: 400;
  letter-spacing: 0.15em;
  margin-bottom: 2rem;
  text-shadow: 2px 4px 8px rgba(0,0,0,0.3);
  opacity: 0;
  transform: translateY(50px);
}

.rooftop-features {
  display: flex;
  justify-content: center;
  gap: 3rem;
  margin-top: 3rem;
  flex-wrap: wrap;
}

.feature-item {
  text-align: center;
  opacity: 0;
  transform: translateY(30px);
}

.feature-icon {
  width: 60px;
  height: 60px;
  margin: 0 auto 1rem;
  background: rgba(255,255,255,0.2);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  backdrop-filter: blur(10px);
  border: 2px solid rgba(255,255,255,0.3);
}

.feature-text {
  font-size: 1.1rem;
  letter-spacing: 0.05em;
}

/* Section 4: グルメ */
.section-gourmet {
  background: linear-gradient(180deg, var(--sand-beige) 0%, var(--pearl-white) 100%);
}

.gourmet-content {
  text-align: center;
  padding: 0 20px;
  max-width: 1200px;
}

.gourmet-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 6vw, 4rem);
  font-weight: 500;
  color: var(--text-dark);
  letter-spacing: 0.1em;
  margin-bottom: 1rem;
  opacity: 0;
  transform: translateY(50px);
}

.gourmet-subtitle {
  font-size: clamp(1.8rem, 4vw, 2.5rem);
  color: var(--primary-blue);
  margin-bottom: 3rem;
  letter-spacing: 0.08em;
  opacity: 0;
  transform: translateY(30px);
}

.cuisine-carousel {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.15);
  opacity: 0;
  transform: translateY(50px);
}

.cuisine-slider {
  display: flex;
  transition: transform 0.5s ease;
}

.cuisine-slide {
  min-width: 100%;
  position: relative;
}

.cuisine-slide img {
  width: 100%;
  height: 500px;
  object-fit: cover;
}

.cuisine-info {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
  color: white;
  padding: 2rem;
  text-align: left;
}

.cuisine-name {
  font-size: 1.8rem;
  font-weight: 500;
  margin-bottom: 0.5rem;
}

.cuisine-description {
  font-size: 1.1rem;
  opacity: 0.9;
}

.carousel-controls {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  display: flex;
  justify-content: space-between;
  padding: 0 20px;
  pointer-events: none;
}

.carousel-btn {
  width: 50px;
  height: 50px;
  background: rgba(255,255,255,0.9);
  border: none;
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  pointer-events: all;
  box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}

.carousel-btn:hover {
  transform: scale(1.1);
  background: white;
}

.carousel-indicators {
  position: absolute;
  bottom: -30px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 10px;
}

.indicator {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: rgba(0,0,0,0.3);
  cursor: pointer;
  transition: all 0.3s ease;
}

.indicator.active {
  background: var(--primary-blue);
  width: 30px;
  border-radius: 5px;
}

/* Section 5: 七点盛り */
.section-seven {
  background: var(--deep-blue);
  color: var(--pearl-white);
}

.seven-content {
  text-align: center;
  padding: 0 20px;
  max-width: 1000px;
}

.seven-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 6vw, 4rem);
  font-weight: 400;
  letter-spacing: 0.15em;
  margin-bottom: 1rem;
  opacity: 0;
  transform: translateY(50px);
}

.seven-subtitle {
  font-size: clamp(1.5rem, 4vw, 2.2rem);
  font-weight: 300;
  margin-bottom: 3rem;
  letter-spacing: 0.1em;
  opacity: 0;
  transform: translateY(30px);
}

.seven-image-wrapper {
  position: relative;
  max-width: 700px;
  margin: 0 auto 3rem;
  opacity: 0;
  transform: scale(0.8);
}

.seven-image {
  width: 100%;
  border-radius: 20px;
  box-shadow: 0 30px 80px rgba(0,0,0,0.3);
}

.fish-points {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.fish-point {
  position: absolute;
  width: 40px;
  height: 40px;
  background: var(--sunset-gold);
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--deep-blue);
  font-weight: 700;
  box-shadow: 0 4px 15px rgba(255,179,0,0.5);
  transition: all 0.3s ease;
  animation: pulse 2s infinite;
}

.fish-point:hover {
  transform: scale(1.2);
}

@keyframes pulse {
  0%, 100% {
    box-shadow: 0 4px 15px rgba(255,179,0,0.5);
  }
  50% {
    box-shadow: 0 4px 25px rgba(255,179,0,0.8);
  }
}

.fish-tooltip {
  position: absolute;
  bottom: 50px;
  left: 50%;
  transform: translateX(-50%);
  background: rgba(0,0,0,0.9);
  color: white;
  padding: 10px 20px;
  border-radius: 8px;
  font-size: 1.1rem;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s;
}

.fish-point:hover .fish-tooltip {
  opacity: 1;
}

.seven-description {
  font-size: 1.2rem;
  line-height: 1.8;
  max-width: 600px;
  margin: 0 auto;
  opacity: 0;
  transform: translateY(30px);
}

/* Section 6: アクティビティ&ウェルビーイング */
.section-activities {
  background: var(--pearl-white);
}

.activities-content {
  width: 100%;
  height: 100%;
  display: flex;
}

.activity-split {
  flex: 1;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.marine-side {
  background: linear-gradient(135deg, #0277bd 0%, #01579b 100%);
  color: white;
}

.wellbeing-side {
  background: linear-gradient(135deg, #81c784 0%, #4caf50 100%);
  color: white;
}

.activity-content {
  text-align: center;
  padding: 0 40px;
  max-width: 500px;
  opacity: 0;
  transform: translateX(-50px);
}

.wellbeing-side .activity-content {
  transform: translateX(50px);
}

.activity-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 500;
  letter-spacing: 0.1em;
  margin-bottom: 2rem;
}

.activity-list {
  list-style: none;
  margin-bottom: 2rem;
}

.activity-list li {
  font-size: 1.2rem;
  margin-bottom: 1rem;
  position: relative;
  padding-left: 30px;
}

.activity-list li::before {
  content: '▸';
  position: absolute;
  left: 0;
  font-size: 1.5rem;
}

.activity-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.1;
  z-index: 0;
}

.activity-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.activity-cta {
  display: inline-block;
  padding: 1rem 2.5rem;
  background: rgba(255,255,255,0.2);
  border: 2px solid white;
  color: white;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 500;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.activity-cta:hover {
  background: rgba(255,255,255,0.3);
  transform: translateY(-2px);
}

/* Section 7: 予約CTA */
.section-cta {
  background: linear-gradient(135deg, var(--deep-blue) 0%, var(--primary-blue) 100%);
  color: white;
}

.cta-content {
  text-align: center;
  padding: 0 20px;
  max-width: 1000px;
}

.cta-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 6vw, 4rem);
  font-weight: 400;
  letter-spacing: 0.15em;
  margin-bottom: 3rem;
  opacity: 0;
  transform: translateY(50px);
}

.plan-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-bottom: 4rem;
}

.plan-card {
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(10px);
  border-radius: 15px;
  padding: 2rem;
  border: 1px solid rgba(255,255,255,0.2);
  transition: all 0.3s ease;
  opacity: 0;
  transform: translateY(50px);
}

.plan-card:hover {
  background: rgba(255,255,255,0.15);
  transform: translateY(-5px);
  box-shadow: 0 10px 40px rgba(0,0,0,0.2);
}

.plan-name {
  font-size: 1.4rem;
  font-weight: 500;
  margin-bottom: 1rem;
}

.plan-price {
  font-size: 1.8rem;
  color: var(--sunset-gold);
  margin-bottom: 1rem;
}

.plan-features {
  font-size: 0.95rem;
  line-height: 1.6;
  opacity: 0.9;
}

.cta-buttons {
  display: flex;
  gap: 2rem;
  justify-content: center;
  flex-wrap: wrap;
}

.cta-button {
  display: inline-block;
  padding: 1.2rem 3rem;
  background: var(--sunset-gold);
  color: var(--deep-blue);
  text-decoration: none;
  border-radius: 50px;
  font-weight: 700;
  font-size: 1.2rem;
  transition: all 0.3s ease;
  opacity: 0;
  transform: translateY(30px);
}

.cta-button:hover {
  background: var(--pearl-white);
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(255,255,255,0.3);
}

.cta-button.secondary {
  background: transparent;
  border: 2px solid var(--pearl-white);
  color: var(--pearl-white);
}

.cta-button.secondary:hover {
  background: var(--pearl-white);
  color: var(--deep-blue);
}

.contact-info {
  margin-top: 3rem;
  font-size: 1.2rem;
  opacity: 0;
  transform: translateY(30px);
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

@keyframes scaleIn {
  to {
    opacity: 1;
    transform: scale(1);
  }
}

@keyframes slideInLeft {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideInRight {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* スクロールトリガーアニメーション */
.animate-fadeInUp {
  animation: fadeInUp 1s ease forwards;
}

.animate-fadeIn {
  animation: fadeIn 1s ease forwards;
}

.animate-scaleIn {
  animation: scaleIn 1s ease forwards;
}

.animate-slideInLeft {
  animation: slideInLeft 1s ease forwards;
}

.animate-slideInRight {
  animation: slideInRight 1s ease forwards;
}

/* レスポンシブ */
@media (max-width: 768px) {
  .nav-dots {
    right: 15px;
  }
  
  .nav-dot {
    width: 10px;
    height: 10px;
  }
  
  .nav-dot .tooltip {
    display: none;
  }
  
  .activities-content {
    flex-direction: column;
  }
  
  .activity-split {
    min-height: 50vh;
  }
  
  .cuisine-slide img {
    height: 350px;
  }
  
  .plan-grid {
    grid-template-columns: 1fr;
  }
  
  .cta-buttons {
    flex-direction: column;
    align-items: center;
  }
  
  .cta-button {
    width: 100%;
    max-width: 300px;
  }
}

@media (max-width: 480px) {
  .opening-title {
    font-size: 2.5rem;
  }
  
  .section {
    padding: 20px;
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
  
  .swipe-container {
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
<div class="loading-screen">
  <div class="loading-wave"></div>
  <p class="loading-text">読み込み中...</p>
</div>

<!-- ナビゲーションドット -->
<nav class="nav-dots" aria-label="セクションナビゲーション">
  <div class="nav-dot active" data-section="0" role="button" tabindex="0" aria-label="セクション1">
    <span class="tooltip">オープニング</span>
  </div>
  <div class="nav-dot" data-section="1" role="button" tabindex="0" aria-label="セクション2">
    <span class="tooltip">スカイプール</span>
  </div>
  <div class="nav-dot" data-section="2" role="button" tabindex="0" aria-label="セクション3">
    <span class="tooltip">ルーフトップ</span>
  </div>
  <div class="nav-dot" data-section="3" role="button" tabindex="0" aria-label="セクション4">
    <span class="tooltip">グルメ</span>
  </div>
  <div class="nav-dot" data-section="4" role="button" tabindex="0" aria-label="セクション5">
    <span class="tooltip">七点盛り</span>
  </div>
  <div class="nav-dot" data-section="5" role="button" tabindex="0" aria-label="セクション6">
    <span class="tooltip">アクティビティ</span>
  </div>
  <div class="nav-dot" data-section="6" role="button" tabindex="0" aria-label="セクション7">
    <span class="tooltip">予約</span>
  </div>
</nav>

<!-- メインコンテナ -->
<main class="swipe-container" id="swipeContainer">
  
  <!-- Section 1: オープニング -->
  <section class="section section-opening" data-section="0">
    <div class="video-container">
      <div class="youtube-container" id="youtubePlayer"></div>
    </div>
    <div class="video-overlay"></div>
    
    <div class="opening-content">
      <h1 class="opening-title">
        涼やかな風が吹く<br>
        浜名湖の夏
      </h1>
      <p class="opening-subtitle">
        2025年夏、新たな体験が始まる
      </p>
    </div>
    
    <div class="scroll-indicator">
      <p class="scroll-text">SCROLL</p>
      <div class="scroll-arrow"></div>
    </div>
  </section>
  
  <!-- Section 2: スカイプールOPEN -->
  <section class="section section-skypool" data-section="1">
    <div class="skypool-content">
      <div class="skypool-badge">NEW OPEN</div>
      <h2 class="skypool-title">SKYPOOL OPEN</h2>
      <p class="skypool-date">2025.6.28</p>
      <p class="skypool-description">
        ホテル最上階のルーフトップに<br>
        浜名湖を一望できる特別な空間が誕生<br><br>
        青い空と湖が溶け合う<br>
        インフィニティプールで<br>
        忘れられない夏の思い出を
      </p>
    </div>
    <div class="wave-decoration"></div>
  </section>
  
  <!-- Section 3: ルーフトップビュー -->
  <section class="section section-rooftop" data-section="2">
    <div class="rooftop-image">
      <img src="images/img_picup_spot.jpg" alt="ルーフトップからの眺望">
    </div>
    <div class="rooftop-overlay"></div>
    
    <div class="rooftop-content">
      <h2 class="rooftop-title">
        空と湖に包まれる<br>
        360°パノラマビュー
      </h2>
      
      <div class="rooftop-features">
        <div class="feature-item">
          <div class="feature-icon">☀️</div>
          <p class="feature-text">直射日光を<br>低減する新素材</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon">💺</div>
          <p class="feature-text">日除け付き<br>リクライニングチェア</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon">🏊</div>
          <p class="feature-text">8月は<br>水泳教室開催</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section 4: グルメ -->
  <section class="section section-gourmet" data-section="3">
    <div class="gourmet-content">
      <h2 class="gourmet-title">夏のグルメ特集</h2>
      <p class="gourmet-subtitle">遠州＆浜名湖<br>美味しいものEXPO</p>
      
      <div class="cuisine-carousel">
        <div class="cuisine-slider" id="cuisineSlider">
          <div class="cuisine-slide">
            <img src="images/img_slide_stay01-01.jpg" alt="韓国料理">
            <div class="cuisine-info">
              <h3 class="cuisine-name">韓国フェア</h3>
              <p class="cuisine-description">遠州ポークのサムギョプサル（地元みかんジュース添え）</p>
            </div>
          </div>
          <div class="cuisine-slide">
            <img src="images/img_osusume_plan01.jpg" alt="中華料理">
            <div class="cuisine-info">
              <h3 class="cuisine-name">四川・中華</h3>
              <p class="cuisine-description">本格麻婆豆腐と点心の数々</p>
            </div>
          </div>
          <div class="cuisine-slide">
            <img src="images/img_osusume_plan02.jpg" alt="地元料理">
            <div class="cuisine-info">
              <h3 class="cuisine-name">地元の恵み</h3>
              <p class="cuisine-description">浜名湖産うなぎ・浜松餃子</p>
            </div>
          </div>
        </div>
        
        <div class="carousel-controls">
          <button class="carousel-btn" id="prevBtn" aria-label="前へ">‹</button>
          <button class="carousel-btn" id="nextBtn" aria-label="次へ">›</button>
        </div>
        
        <div class="carousel-indicators">
          <span class="indicator active" data-slide="0"></span>
          <span class="indicator" data-slide="1"></span>
          <span class="indicator" data-slide="2"></span>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section 5: 七点盛り -->
  <section class="section section-seven" data-section="4">
    <div class="seven-content">
      <h2 class="seven-title">遠州灘の恵み</h2>
      <p class="seven-subtitle">豪華七点盛り</p>
      
      <div class="seven-image-wrapper">
        <img src="images/img_intro03.jpg" alt="七点盛り" class="seven-image">
        <div class="fish-points">
          <div class="fish-point" style="top: 20%; left: 30%;">1
            <span class="fish-tooltip">マダイ</span>
          </div>
          <div class="fish-point" style="top: 30%; left: 60%;">2
            <span class="fish-tooltip">スズキ</span>
          </div>
          <div class="fish-point" style="top: 50%; left: 40%;">3
            <span class="fish-tooltip">カンパチ</span>
          </div>
          <div class="fish-point" style="top: 60%; left: 70%;">4
            <span class="fish-tooltip">アジ</span>
          </div>
          <div class="fish-point" style="top: 70%; left: 25%;">5
            <span class="fish-tooltip">カマス</span>
          </div>
          <div class="fish-point" style="top: 65%; left: 50%;">6
            <span class="fish-tooltip">イサキ</span>
          </div>
          <div class="fish-point" style="top: 80%; left: 65%;">7
            <span class="fish-tooltip">太刀魚</span>
          </div>
        </div>
      </div>
      
      <p class="seven-description">
        遠州灘で獲れた新鮮な地魚を<br>
        贅沢に七種盛り合わせ<br><br>
        その日の最高の素材を<br>
        料理長が厳選してご提供
      </p>
    </div>
  </section>
  
  <!-- Section 6: アクティビティ&ウェルビーイング -->
  <section class="section section-activities" data-section="5">
    <div class="activities-content">
      <div class="activity-split marine-side">
        <div class="activity-image">
          <img src="images/img_activity01.jpg" alt="マリンスポーツ">
        </div>
        <div class="activity-content">
          <h2 class="activity-title">湖上の<br>アドベンチャー</h2>
          <ul class="activity-list">
            <li>ウェイクボード</li>
            <li>ウェイクサーフィン</li>
            <li>トーイングチューブ</li>
          </ul>
          <a href="#" class="activity-cta">詳細を見る</a>
        </div>
      </div>
      
      <div class="activity-split wellbeing-side">
        <div class="activity-image">
          <img src="images/img_activity02.jpg" alt="サイクリング">
        </div>
        <div class="activity-content">
          <h2 class="activity-title">地元を巡る<br>ウェルビーイング</h2>
          <ul class="activity-list">
            <li>ガイド付きサイクリング</li>
            <li>フルーツ大福作り体験</li>
            <li>地元カフェ巡り</li>
          </ul>
          <a href="#" class="activity-cta">詳細を見る</a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section 7: 予約CTA -->
  <section class="section section-cta" data-section="6">
    <div class="cta-content">
      <h2 class="cta-title">
        この夏だけの特別な体験を<br>
        今すぐ予約
      </h2>
      
      <div class="plan-grid">
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
      
      <div class="cta-buttons">
        <a href="#" class="cta-button">オンライン予約</a>
        <a href="tel:0535251222" class="cta-button secondary">電話で予約</a>
      </div>
      
      <div class="contact-info">
        <p>TEL: 053-525-1222</p>
        <p>営業時間: 9:00-18:00</p>
      </div>
    </div>
  </section>
  
</main>

<script>
// グローバル変数
let currentSection = 0;
let isAnimating = false;
let touchStartY = 0;
let touchEndY = 0;
const sections = document.querySelectorAll('.section');
const navDots = document.querySelectorAll('.nav-dot');
const container = document.getElementById('swipeContainer');

// YouTube Player API
let player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('youtubePlayer', {
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
      iv_load_policy: 3
    },
    events: {
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {
  event.target.playVideo();
}

// セクション移動関数
function goToSection(index, immediate = false) {
  if (index < 0 || index >= sections.length || isAnimating) return;
  
  isAnimating = true;
  currentSection = index;
  
  // スクロール実行
  if (immediate) {
    container.scrollTo({
      top: sections[index].offsetTop,
      behavior: 'auto'
    });
  } else {
    container.scrollTo({
      top: sections[index].offsetTop,
      behavior: 'smooth'
    });
  }
  
  // ナビゲーション更新
  updateNavigation();
  
  // アニメーション開始
  animateSection(index);
  
  // アニメーションフラグリセット
  setTimeout(() => {
    isAnimating = false;
  }, 1000);
}

// ナビゲーション更新
function updateNavigation() {
  navDots.forEach((dot, index) => {
    if (index === currentSection) {
      dot.classList.add('active');
    } else {
      dot.classList.remove('active');
    }
  });
}

// セクションアニメーション
function animateSection(index) {
  const section = sections[index];
  
  switch(index) {
    case 0: // オープニング
      // 動画は自動再生されている
      break;
      
    case 1: // スカイプール
      animateWithDelay(section.querySelector('.skypool-badge'), 'animate-scaleIn', 100);
      animateWithDelay(section.querySelector('.skypool-title'), 'animate-fadeInUp', 300);
      animateWithDelay(section.querySelector('.skypool-date'), 'animate-fadeInUp', 500);
      animateWithDelay(section.querySelector('.skypool-description'), 'animate-fadeInUp', 700);
      break;
      
    case 2: // ルーフトップ
      section.querySelector('.rooftop-image').classList.add('active');
      animateWithDelay(section.querySelector('.rooftop-title'), 'animate-fadeInUp', 300);
      section.querySelectorAll('.feature-item').forEach((item, i) => {
        animateWithDelay(item, 'animate-fadeInUp', 500 + (i * 200));
      });
      break;
      
    case 3: // グルメ
      animateWithDelay(section.querySelector('.gourmet-title'), 'animate-fadeInUp', 100);
      animateWithDelay(section.querySelector('.gourmet-subtitle'), 'animate-fadeInUp', 300);
      animateWithDelay(section.querySelector('.cuisine-carousel'), 'animate-fadeInUp', 500);
      break;
      
    case 4: // 七点盛り
      animateWithDelay(section.querySelector('.seven-title'), 'animate-fadeInUp', 100);
      animateWithDelay(section.querySelector('.seven-subtitle'), 'animate-fadeInUp', 300);
      animateWithDelay(section.querySelector('.seven-image-wrapper'), 'animate-scaleIn', 500);
      animateWithDelay(section.querySelector('.seven-description'), 'animate-fadeInUp', 700);
      break;
      
    case 5: // アクティビティ
      animateWithDelay(section.querySelectorAll('.activity-content')[0], 'animate-slideInLeft', 300);
      animateWithDelay(section.querySelectorAll('.activity-content')[1], 'animate-slideInRight', 500);
      break;
      
    case 6: // CTA
      animateWithDelay(section.querySelector('.cta-title'), 'animate-fadeInUp', 100);
      section.querySelectorAll('.plan-card').forEach((card, i) => {
        animateWithDelay(card, 'animate-fadeInUp', 300 + (i * 100));
      });
      section.querySelectorAll('.cta-button').forEach((btn, i) => {
        animateWithDelay(btn, 'animate-fadeInUp', 700 + (i * 100));
      });
      animateWithDelay(section.querySelector('.contact-info'), 'animate-fadeInUp', 900);
      break;
  }
}

// アニメーションヘルパー関数
function animateWithDelay(element, animationClass, delay) {
  if (!element) return;
  setTimeout(() => {
    element.classList.add(animationClass);
  }, delay);
}

// スクロールイベント処理
let scrollTimeout;
container.addEventListener('scroll', () => {
  clearTimeout(scrollTimeout);
  scrollTimeout = setTimeout(() => {
    const scrollPosition = container.scrollTop;
    const windowHeight = window.innerHeight;
    
    // 現在のセクションを判定
    sections.forEach((section, index) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      
      if (scrollPosition >= sectionTop - windowHeight / 2 && 
          scrollPosition < sectionTop + sectionHeight - windowHeight / 2) {
        if (currentSection !== index) {
          currentSection = index;
          updateNavigation();
          animateSection(index);
        }
      }
    });
  }, 100);
});

// マウスホイールイベント
let wheelTimeout;
container.addEventListener('wheel', (e) => {
  e.preventDefault();
  
  if (isAnimating) return;
  
  clearTimeout(wheelTimeout);
  wheelTimeout = setTimeout(() => {
    if (e.deltaY > 50) {
      goToSection(currentSection + 1);
    } else if (e.deltaY < -50) {
      goToSection(currentSection - 1);
    }
  }, 50);
}, { passive: false });

// タッチイベント
container.addEventListener('touchstart', (e) => {
  touchStartY = e.touches[0].clientY;
});

container.addEventListener('touchend', (e) => {
  touchEndY = e.changedTouches[0].clientY;
  handleSwipe();
});

function handleSwipe() {
  const swipeDistance = touchStartY - touchEndY;
  const minSwipeDistance = 50;
  
  if (Math.abs(swipeDistance) > minSwipeDistance && !isAnimating) {
    if (swipeDistance > 0) {
      goToSection(currentSection + 1);
    } else {
      goToSection(currentSection - 1);
    }
  }
}

// ナビゲーションドットクリック
navDots.forEach((dot, index) => {
  dot.addEventListener('click', () => {
    goToSection(index);
  });
  
  // キーボードアクセシビリティ
  dot.addEventListener('keypress', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      goToSection(index);
    }
  });
});

// キーボードナビゲーション
document.addEventListener('keydown', (e) => {
  if (isAnimating) return;
  
  switch(e.key) {
    case 'ArrowDown':
    case ' ':
      e.preventDefault();
      goToSection(currentSection + 1);
      break;
    case 'ArrowUp':
      e.preventDefault();
      goToSection(currentSection - 1);
      break;
    case 'Home':
      e.preventDefault();
      goToSection(0);
      break;
    case 'End':
      e.preventDefault();
      goToSection(sections.length - 1);
      break;
  }
});

// グルメカルーセル
const slider = document.getElementById('cuisineSlider');
const slides = slider.querySelectorAll('.cuisine-slide');
const indicators = document.querySelectorAll('.indicator');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let currentSlide = 0;

function updateCarousel() {
  slider.style.transform = `translateX(-${currentSlide * 100}%)`;
  
  indicators.forEach((indicator, index) => {
    if (index === currentSlide) {
      indicator.classList.add('active');
    } else {
      indicator.classList.remove('active');
    }
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  updateCarousel();
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  updateCarousel();
}

prevBtn.addEventListener('click', prevSlide);
nextBtn.addEventListener('click', nextSlide);

indicators.forEach((indicator, index) => {
  indicator.addEventListener('click', () => {
    currentSlide = index;
    updateCarousel();
  });
});

// 自動スライド
setInterval(nextSlide, 5000);

// ローディング画面処理
window.addEventListener('load', () => {
  setTimeout(() => {
    document.querySelector('.loading-screen').classList.add('loaded');
    
    // 初期アニメーション
    goToSection(0, true);
    
    // YouTube API読み込み
    const tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  }, 500);
});

// リサイズ処理
let resizeTimeout;
window.addEventListener('resize', () => {
  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(() => {
    goToSection(currentSection, true);
  }, 300);
});

// パフォーマンス最適化: Intersection Observer
const observerOptions = {
  root: container,
  threshold: 0.1
};

const sectionObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // 必要に応じて遅延読み込みなどを実装
    }
  });
}, observerOptions);

sections.forEach(section => {
  sectionObserver.observe(section);
});
</script>

</body>
</html>