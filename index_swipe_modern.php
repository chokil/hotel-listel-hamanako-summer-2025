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
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>

<style>
/* モダンなスワイプ型LP */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  overflow: hidden;
}

body {
  font-family: 'M PLUS Rounded 1c', 'Hiragino Sans', sans-serif;
  color: #333;
  background: #000;
  position: relative;
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

/* フルページコンテナ */
.fullpage-container {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

/* セクションラッパー */
.sections-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 1.2s var(--ease-out-expo);
  will-change: transform;
}

/* 各セクション */
.fp-section {
  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background-size: cover;
  background-position: center;
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
  transition: width 1s var(--ease-out-expo);
}

/* モダンなナビゲーション */
.fp-nav {
  position: fixed;
  right: 40px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 100;
}

.fp-nav ul {
  list-style: none;
}

.fp-nav li {
  margin: 20px 0;
  position: relative;
}

.fp-nav a {
  display: block;
  width: 10px;
  height: 10px;
  background: rgba(255, 255, 255, 0.3);
  border-radius: 50%;
  transition: all 0.4s ease;
  position: relative;
}

.fp-nav a::before {
  content: '';
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 50%;
  opacity: 0;
  transform: scale(0.8);
  transition: all 0.4s ease;
}

.fp-nav a.active {
  background: #fff;
  transform: scale(1.2);
}

.fp-nav a.active::before {
  opacity: 1;
  transform: scale(1);
}

.fp-nav .tooltip {
  position: absolute;
  right: 30px;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.8);
  color: #fff;
  padding: 8px 16px;
  border-radius: 4px;
  font-size: 0.85rem;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s ease;
  backdrop-filter: blur(10px);
}

.fp-nav li:hover .tooltip {
  opacity: 1;
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
  position: relative;
  width: 100px;
  height: 100px;
}

.loader-circle {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 2px solid var(--sky-blue);
  border-radius: 50%;
  opacity: 0;
  animation: ripple 2s infinite;
}

.loader-circle:nth-child(2) {
  animation-delay: 0.5s;
}

.loader-circle:nth-child(3) {
  animation-delay: 1s;
}

@keyframes ripple {
  0% {
    transform: scale(0);
    opacity: 1;
  }
  100% {
    transform: scale(2);
    opacity: 0;
  }
}

/* Section 1: Hero with Video */
.section-hero {
  position: relative;
  background: #000;
}

.video-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.video-wrapper::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, 
    rgba(0,0,0,0.3) 0%, 
    rgba(0,0,0,0.5) 100%);
  z-index: 1;
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
  z-index: 0;
}

.hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: #fff;
  max-width: 1000px;
  padding: 0 40px;
}

.hero-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3.5rem, 8vw, 7rem);
  font-weight: 300;
  line-height: 1.2;
  letter-spacing: 0.1em;
  margin-bottom: 1.5rem;
  opacity: 0;
  transform: translateY(50px);
}

.hero-subtitle {
  font-size: clamp(1.2rem, 2.5vw, 1.8rem);
  font-weight: 300;
  letter-spacing: 0.15em;
  opacity: 0;
  transform: translateY(30px);
  margin-bottom: 3rem;
}

.hero-date {
  display: inline-block;
  font-family: 'Montserrat', sans-serif;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 0.2em;
  padding: 1rem 2.5rem;
  border: 2px solid rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(10px);
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50px;
  opacity: 0;
  transform: scale(0.8);
}

.scroll-indicator {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  opacity: 0;
  animation: float 3s ease-in-out infinite;
}

.scroll-indicator span {
  display: block;
  font-size: 0.85rem;
  letter-spacing: 0.2em;
  margin-bottom: 10px;
  color: rgba(255, 255, 255, 0.7);
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
  0%, 100% {
    transform: translateX(-50%) translateY(0);
  }
  50% {
    transform: translateX(-50%) translateY(-10px);
  }
}

@keyframes scroll-wheel {
  0% {
    transform: translateX(-50%) translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateX(-50%) translateY(15px);
    opacity: 0;
  }
}

/* Section 2: Sky Pool */
.section-skypool {
  background: linear-gradient(135deg, #001f3f 0%, #006994 100%);
  position: relative;
  overflow: hidden;
}

.skypool-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.3;
  background-image: url('images/skypool-hero.jpg');
  background-size: cover;
  background-position: center;
  transform: scale(1.1);
  transition: transform 8s ease;
}

.section-skypool.active .skypool-bg {
  transform: scale(1);
}

.skypool-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: #fff;
  max-width: 900px;
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
  font-size: clamp(4rem, 10vw, 8rem);
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 0.9;
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
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 300;
  letter-spacing: 0.2em;
  margin-bottom: 2rem;
  opacity: 0;
  transform: translateY(30px);
}

.skypool-features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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

/* Section 3: Rooftop View */
.section-rooftop {
  position: relative;
  background: #000;
}

.rooftop-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.rooftop-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.7;
}

.rooftop-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(ellipse at center, 
    transparent 0%, 
    rgba(0,0,0,0.7) 100%);
}

.rooftop-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: #fff;
  max-width: 800px;
}

.rooftop-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 400;
  letter-spacing: 0.15em;
  line-height: 1.3;
  margin-bottom: 2rem;
  opacity: 0;
  transform: translateY(50px);
}

.rooftop-text {
  font-size: 1.2rem;
  line-height: 1.8;
  opacity: 0;
  transform: translateY(30px);
}

.panorama-indicator {
  position: absolute;
  bottom: 80px;
  left: 50%;
  transform: translateX(-50%);
  opacity: 0;
}

.panorama-icon {
  width: 60px;
  height: 60px;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  animation: rotate 10s linear infinite;
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Section 4: Gourmet */
.section-gourmet {
  background: var(--pearl);
  color: var(--night-blue);
  position: relative;
  overflow: hidden;
}

.gourmet-content {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
}

.gourmet-header {
  text-align: center;
  margin-bottom: 4rem;
}

.gourmet-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 400;
  letter-spacing: 0.1em;
  margin-bottom: 1rem;
  opacity: 0;
  transform: translateY(50px);
}

.gourmet-subtitle {
  font-size: clamp(1.5rem, 3vw, 2.5rem);
  color: var(--ocean-blue);
  opacity: 0;
  transform: translateY(30px);
}

.cuisine-gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
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
  position: relative;
}

.seven-content {
  position: relative;
  z-index: 2;
  text-align: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

.seven-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 400;
  letter-spacing: 0.15em;
  margin-bottom: 1rem;
  opacity: 0;
  transform: translateY(50px);
}

.seven-subtitle {
  font-size: clamp(1.5rem, 3vw, 2.5rem);
  font-weight: 300;
  opacity: 0;
  transform: translateY(30px);
  margin-bottom: 3rem;
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

.fish-dots {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.fish-dot {
  position: absolute;
  width: 50px;
  height: 50px;
  background: var(--sunset-orange);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  color: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(255, 107, 53, 0.5);
}

.fish-dot:hover {
  transform: scale(1.2);
  box-shadow: 0 8px 25px rgba(255, 107, 53, 0.7);
}

.fish-dot.active {
  background: var(--sky-blue);
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
    box-shadow: 0 5px 15px rgba(79, 195, 247, 0.5);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(79, 195, 247, 0.7);
  }
}

.fish-info {
  position: absolute;
  bottom: -80px;
  left: 50%;
  transform: translateX(-50%);
  background: rgba(0, 0, 0, 0.9);
  backdrop-filter: blur(20px);
  padding: 1.5rem 2.5rem;
  border-radius: 15px;
  min-width: 300px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.fish-info.active {
  opacity: 1;
  visibility: visible;
}

.fish-name {
  font-size: 1.5rem;
  font-weight: 500;
  margin-bottom: 0.5rem;
}

.fish-desc {
  font-size: 0.95rem;
  opacity: 0.8;
}

/* Section 6: Activities */
.section-activities {
  position: relative;
  background: var(--pearl);
  color: var(--night-blue);
}

.activities-container {
  display: flex;
  height: 100%;
  width: 100%;
}

.activity-panel {
  flex: 1;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: flex 0.5s ease;
}

.activity-panel:hover {
  flex: 1.5;
}

.marine-panel {
  background: linear-gradient(135deg, var(--ocean-blue) 0%, var(--sky-blue) 100%);
  color: #fff;
}

.wellbeing-panel {
  background: linear-gradient(135deg, #81c784 0%, #4caf50 100%);
  color: #fff;
}

.activity-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.2;
}

.activity-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.activity-content {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: 0 40px;
  opacity: 0;
  transform: translateX(-50px);
}

.wellbeing-panel .activity-content {
  transform: translateX(50px);
}

.activity-icon {
  font-size: 4rem;
  margin-bottom: 2rem;
}

.activity-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(2.5rem, 4vw, 3.5rem);
  font-weight: 400;
  letter-spacing: 0.1em;
  margin-bottom: 1.5rem;
}

.activity-list {
  list-style: none;
  font-size: 1.2rem;
  line-height: 2;
  margin-bottom: 2rem;
}

.activity-list li {
  position: relative;
  padding-left: 30px;
}

.activity-list li::before {
  content: '▸';
  position: absolute;
  left: 0;
  font-size: 1.5rem;
}

.activity-btn {
  display: inline-block;
  padding: 1rem 2.5rem;
  background: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(10px);
  border: 2px solid rgba(255, 255, 255, 0.5);
  color: #fff;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.activity-btn:hover {
  background: rgba(255, 255, 255, 0.3);
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

/* Section 7: Booking */
.section-booking {
  background: linear-gradient(135deg, var(--night-blue) 0%, var(--ocean-blue) 100%);
  color: #fff;
  position: relative;
  overflow: hidden;
}

.booking-bg-pattern {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.1;
  background-image: repeating-linear-gradient(
    45deg,
    transparent,
    transparent 35px,
    rgba(255, 255, 255, 0.1) 35px,
    rgba(255, 255, 255, 0.1) 70px
  );
}

.booking-content {
  position: relative;
  z-index: 2;
  text-align: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

.booking-title {
  font-family: 'Shippori Mincho', serif;
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 400;
  letter-spacing: 0.1em;
  margin-bottom: 3rem;
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
  background: radial-gradient(circle, 
    rgba(255, 255, 255, 0.1) 0%, 
    transparent 70%);
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

/* アニメーションクラス */
.animate-fade-up {
  animation: fadeUp 1s ease forwards;
}

.animate-fade-in {
  animation: fadeIn 1s ease forwards;
}

.animate-scale-in {
  animation: scaleIn 1s ease forwards;
}

.animate-slide-left {
  animation: slideLeft 1s ease forwards;
}

.animate-slide-right {
  animation: slideRight 1s ease forwards;
}

@keyframes fadeUp {
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

@keyframes slideLeft {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideRight {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* レスポンシブ */
@media (max-width: 768px) {
  .fp-nav {
    right: 20px;
  }
  
  .activities-container {
    flex-direction: column;
  }
  
  .activity-panel:hover {
    flex: 1;
  }
  
  .cuisine-gallery {
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
}

/* タッチデバイス対応 */
@media (hover: none) {
  .fp-nav a::before {
    display: none;
  }
  
  .cuisine-item:active {
    transform: scale(0.98);
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
    <div class="loader-circle"></div>
    <div class="loader-circle"></div>
    <div class="loader-circle"></div>
  </div>
</div>

<!-- プログレスバー -->
<div class="progress-bar">
  <div class="progress-fill" id="progressFill"></div>
</div>

<!-- ナビゲーション -->
<nav class="fp-nav" id="fpNav">
  <ul>
    <li>
      <a href="#" data-section="0" class="active"></a>
      <span class="tooltip">オープニング</span>
    </li>
    <li>
      <a href="#" data-section="1"></a>
      <span class="tooltip">スカイプール</span>
    </li>
    <li>
      <a href="#" data-section="2"></a>
      <span class="tooltip">ルーフトップ</span>
    </li>
    <li>
      <a href="#" data-section="3"></a>
      <span class="tooltip">グルメ</span>
    </li>
    <li>
      <a href="#" data-section="4"></a>
      <span class="tooltip">七点盛り</span>
    </li>
    <li>
      <a href="#" data-section="5"></a>
      <span class="tooltip">アクティビティ</span>
    </li>
    <li>
      <a href="#" data-section="6"></a>
      <span class="tooltip">予約</span>
    </li>
  </ul>
</nav>

<!-- メインコンテナ -->
<div class="fullpage-container" id="fullpage">
  <div class="sections-wrapper" id="sectionsWrapper">
    
    <!-- Section 1: Hero -->
    <section class="fp-section section-hero" data-index="0">
      <div class="video-wrapper">
        <div id="bgVideo"></div>
      </div>
      
      <div class="hero-content">
        <h1 class="hero-title">
          涼やかな風が吹く<br>
          浜名湖の夏
        </h1>
        <p class="hero-subtitle">
          2025年夏、新たな体験が始まる
        </p>
        <div class="hero-date">
          2025 SUMMER
        </div>
      </div>
      
      <div class="scroll-indicator">
        <span>SCROLL</span>
        <div class="mouse">
          <div class="wheel"></div>
        </div>
      </div>
    </section>
    
    <!-- Section 2: Sky Pool -->
    <section class="fp-section section-skypool" data-index="1">
      <div class="skypool-bg"></div>
      
      <div class="skypool-content">
        <div class="skypool-badge">NEW OPEN</div>
        <h2 class="skypool-title">SKYPOOL</h2>
        <p class="skypool-date">2025.6.28</p>
        
        <div class="skypool-features">
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
    
    <!-- Section 3: Rooftop View -->
    <section class="fp-section section-rooftop" data-index="2">
      <div class="rooftop-image">
        <img src="images/rooftop-view.jpg" alt="ルーフトップからの眺望">
      </div>
      <div class="rooftop-overlay"></div>
      
      <div class="rooftop-content">
        <h2 class="rooftop-title">
          空と湖に包まれる<br>
          360°パノラマビュー
        </h2>
        <p class="rooftop-text">
          まるで空に浮かんでいるような感覚<br>
          朝は朝日に輝く湖面<br>
          昼は青い空と白い雲<br>
          夕方は黄金色に染まる絶景
        </p>
      </div>
      
      <div class="panorama-indicator">
        <div class="panorama-icon">360°</div>
      </div>
    </section>
    
    <!-- Section 4: Gourmet -->
    <section class="fp-section section-gourmet" data-index="3">
      <div class="gourmet-content">
        <div class="gourmet-header">
          <h2 class="gourmet-title">夏のグルメ特集</h2>
          <p class="gourmet-subtitle">遠州＆浜名湖 美味しいものEXPO</p>
        </div>
        
        <div class="cuisine-gallery">
          <div class="cuisine-item">
            <div class="cuisine-image">
              <img src="images/gourmet-korean.jpg" alt="韓国料理">
            </div>
            <div class="cuisine-info">
              <h3 class="cuisine-name">韓国フェア</h3>
              <p class="cuisine-desc">遠州ポークのサムギョプサル</p>
            </div>
          </div>
          
          <div class="cuisine-item">
            <div class="cuisine-image">
              <img src="images/gourmet-seafood.jpg" alt="地魚料理">
            </div>
            <div class="cuisine-info">
              <h3 class="cuisine-name">夏野菜と地魚</h3>
              <p class="cuisine-desc">オーブン焼き ネギ塩風味</p>
            </div>
          </div>
          
          <div class="cuisine-item">
            <div class="cuisine-image">
              <img src="images/gourmet-somen.jpg" alt="創作そうめん">
            </div>
            <div class="cuisine-info">
              <h3 class="cuisine-name">浜松そうめん</h3>
              <p class="cuisine-desc">静岡茶ッペリーニ</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section 5: Seven Fish -->
    <section class="fp-section section-seven" data-index="4">
      <div class="seven-content">
        <h2 class="seven-title">遠州灘の恵み</h2>
        <p class="seven-subtitle">豪華七点盛り</p>
        
        <div class="seven-showcase">
          <div class="seven-main-image">
            <img src="images/seven-fish.jpg" alt="七点盛り">
          </div>
          
          <div class="fish-dots">
            <div class="fish-dot active" style="top: 20%; left: 25%;" data-fish="1">1</div>
            <div class="fish-dot" style="top: 30%; left: 60%;" data-fish="2">2</div>
            <div class="fish-dot" style="top: 45%; left: 35%;" data-fish="3">3</div>
            <div class="fish-dot" style="top: 55%; left: 70%;" data-fish="4">4</div>
            <div class="fish-dot" style="top: 70%; left: 20%;" data-fish="5">5</div>
            <div class="fish-dot" style="top: 65%; left: 50%;" data-fish="6">6</div>
            <div class="fish-dot" style="top: 80%; left: 65%;" data-fish="7">7</div>
          </div>
          
          <div class="fish-info active" id="fishInfo">
            <h3 class="fish-name">マダイ</h3>
            <p class="fish-desc">遠州灘の代表的な高級魚</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section 6: Activities -->
    <section class="fp-section section-activities" data-index="5">
      <div class="activities-container">
        <div class="activity-panel marine-panel">
          <div class="activity-bg">
            <img src="images/marine-sports.jpg" alt="マリンスポーツ">
          </div>
          
          <div class="activity-content">
            <div class="activity-icon">🏄</div>
            <h2 class="activity-title">
              湖上の<br>
              アドベンチャー
            </h2>
            <ul class="activity-list">
              <li>ウェイクボード</li>
              <li>ウェイクサーフィン</li>
              <li>トーイングチューブ</li>
            </ul>
            <a href="#" class="activity-btn">詳細を見る</a>
          </div>
        </div>
        
        <div class="activity-panel wellbeing-panel">
          <div class="activity-bg">
            <img src="images/wellbeing-cycle.jpg" alt="サイクリング">
          </div>
          
          <div class="activity-content">
            <div class="activity-icon">🚴</div>
            <h2 class="activity-title">
              地元を巡る<br>
              ウェルビーイング
            </h2>
            <ul class="activity-list">
              <li>ガイド付きサイクリング</li>
              <li>フルーツ大福作り体験</li>
              <li>地元カフェ巡り</li>
            </ul>
            <a href="#" class="activity-btn">詳細を見る</a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section 7: Booking -->
    <section class="fp-section section-booking" data-index="6">
      <div class="booking-bg-pattern"></div>
      
      <div class="booking-content">
        <h2 class="booking-title">
          この夏だけの特別な体験を<br>
          今すぐ予約
        </h2>
        
        <div class="plans-grid">
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
        
        <div class="booking-cta">
          <a href="#" class="btn-primary">オンライン予約</a>
          <a href="tel:0535251222" class="btn-secondary">電話で予約</a>
        </div>
      </div>
    </section>
    
  </div>
</div>

<script>
// Fullpage.js風の実装
class ModernFullpage {
  constructor() {
    this.currentIndex = 0;
    this.isAnimating = false;
    this.sections = document.querySelectorAll('.fp-section');
    this.totalSections = this.sections.length;
    this.wrapper = document.getElementById('sectionsWrapper');
    this.navLinks = document.querySelectorAll('.fp-nav a');
    
    this.init();
  }
  
  init() {
    this.updateSectionPositions();
    this.bindEvents();
    this.initYouTube();
    this.showSection(0);
    
    // ローディング画面を非表示
    setTimeout(() => {
      document.getElementById('loadingScreen').classList.add('hidden');
    }, 1000);
  }
  
  updateSectionPositions() {
    this.sections.forEach((section, index) => {
      section.style.position = 'absolute';
      section.style.top = `${index * 100}%`;
      section.style.left = 0;
      section.style.width = '100%';
      section.style.height = '100%';
    });
  }
  
  bindEvents() {
    // マウスホイール
    let wheelTimeout;
    document.addEventListener('wheel', (e) => {
      e.preventDefault();
      
      if (this.isAnimating) return;
      
      clearTimeout(wheelTimeout);
      wheelTimeout = setTimeout(() => {
        if (e.deltaY > 0) {
          this.nextSection();
        } else {
          this.prevSection();
        }
      }, 50);
    }, { passive: false });
    
    // タッチイベント
    let touchStartY = 0;
    let touchEndY = 0;
    
    document.addEventListener('touchstart', (e) => {
      touchStartY = e.touches[0].clientY;
    });
    
    document.addEventListener('touchend', (e) => {
      touchEndY = e.changedTouches[0].clientY;
      const diff = touchStartY - touchEndY;
      
      if (Math.abs(diff) > 50 && !this.isAnimating) {
        if (diff > 0) {
          this.nextSection();
        } else {
          this.prevSection();
        }
      }
    });
    
    // キーボード
    document.addEventListener('keydown', (e) => {
      if (this.isAnimating) return;
      
      switch(e.key) {
        case 'ArrowDown':
        case ' ':
          e.preventDefault();
          this.nextSection();
          break;
        case 'ArrowUp':
          e.preventDefault();
          this.prevSection();
          break;
        case 'Home':
          e.preventDefault();
          this.goToSection(0);
          break;
        case 'End':
          e.preventDefault();
          this.goToSection(this.totalSections - 1);
          break;
      }
    });
    
    // ナビゲーションクリック
    this.navLinks.forEach((link, index) => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        this.goToSection(index);
      });
    });
    
    // リサイズ
    window.addEventListener('resize', () => {
      this.updateSectionPositions();
      this.showSection(this.currentIndex, true);
    });
  }
  
  nextSection() {
    if (this.currentIndex < this.totalSections - 1) {
      this.goToSection(this.currentIndex + 1);
    }
  }
  
  prevSection() {
    if (this.currentIndex > 0) {
      this.goToSection(this.currentIndex - 1);
    }
  }
  
  goToSection(index) {
    if (index < 0 || index >= this.totalSections || index === this.currentIndex) return;
    
    this.isAnimating = true;
    this.currentIndex = index;
    this.showSection(index);
    
    setTimeout(() => {
      this.isAnimating = false;
    }, 1200);
  }
  
  showSection(index, immediate = false) {
    const translateY = -index * 100;
    this.wrapper.style.transition = immediate ? 'none' : 'transform 1.2s cubic-bezier(0.19, 1, 0.22, 1)';
    this.wrapper.style.transform = `translateY(${translateY}%)`;
    
    // ナビゲーション更新
    this.updateNavigation();
    
    // プログレスバー更新
    this.updateProgressBar();
    
    // セクションアニメーション
    this.animateSection(index);
    
    // アクティブクラスの更新
    this.sections.forEach((section, i) => {
      if (i === index) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    });
  }
  
  updateNavigation() {
    this.navLinks.forEach((link, index) => {
      if (index === this.currentIndex) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }
  
  updateProgressBar() {
    const progress = ((this.currentIndex + 1) / this.totalSections) * 100;
    document.getElementById('progressFill').style.width = `${progress}%`;
  }
  
  animateSection(index) {
    const section = this.sections[index];
    const elements = section.querySelectorAll('[class*="animate-"]');
    
    // アニメーションクラスをリセット
    elements.forEach(el => {
      el.style.animationDelay = '';
    });
    
    // セクション別のアニメーション
    switch(index) {
      case 0: // Hero
        this.animateWithDelay(section.querySelector('.hero-title'), 'animate-fade-up', 300);
        this.animateWithDelay(section.querySelector('.hero-subtitle'), 'animate-fade-up', 500);
        this.animateWithDelay(section.querySelector('.hero-date'), 'animate-scale-in', 700);
        this.animateWithDelay(section.querySelector('.scroll-indicator'), 'animate-fade-in', 900);
        break;
        
      case 1: // Sky Pool
        this.animateWithDelay(section.querySelector('.skypool-badge'), 'animate-scale-in', 200);
        this.animateWithDelay(section.querySelector('.skypool-title'), 'animate-scale-in', 400);
        this.animateWithDelay(section.querySelector('.skypool-date'), 'animate-fade-up', 600);
        this.animateWithDelay(section.querySelector('.skypool-features'), 'animate-fade-up', 800);
        break;
        
      case 2: // Rooftop
        this.animateWithDelay(section.querySelector('.rooftop-title'), 'animate-fade-up', 300);
        this.animateWithDelay(section.querySelector('.rooftop-text'), 'animate-fade-up', 500);
        this.animateWithDelay(section.querySelector('.panorama-indicator'), 'animate-fade-in', 700);
        break;
        
      case 3: // Gourmet
        this.animateWithDelay(section.querySelector('.gourmet-title'), 'animate-fade-up', 200);
        this.animateWithDelay(section.querySelector('.gourmet-subtitle'), 'animate-fade-up', 400);
        this.animateWithDelay(section.querySelector('.cuisine-gallery'), 'animate-fade-up', 600);
        break;
        
      case 4: // Seven Fish
        this.animateWithDelay(section.querySelector('.seven-title'), 'animate-fade-up', 200);
        this.animateWithDelay(section.querySelector('.seven-subtitle'), 'animate-fade-up', 400);
        this.animateWithDelay(section.querySelector('.seven-showcase'), 'animate-scale-in', 600);
        break;
        
      case 5: // Activities
        this.animateWithDelay(section.querySelectorAll('.activity-content')[0], 'animate-slide-left', 300);
        this.animateWithDelay(section.querySelectorAll('.activity-content')[1], 'animate-slide-right', 500);
        break;
        
      case 6: // Booking
        this.animateWithDelay(section.querySelector('.booking-title'), 'animate-fade-up', 200);
        this.animateWithDelay(section.querySelector('.plans-grid'), 'animate-fade-up', 400);
        this.animateWithDelay(section.querySelector('.booking-cta'), 'animate-fade-up', 600);
        break;
    }
  }
  
  animateWithDelay(element, className, delay) {
    if (!element) return;
    element.classList.add(className);
    element.style.animationDelay = `${delay}ms`;
  }
  
  initYouTube() {
    // YouTube Player APIの読み込み
    const tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  }
}

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
      disablekb: 1
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

// 七点盛りインタラクション
document.addEventListener('DOMContentLoaded', () => {
  const fishDots = document.querySelectorAll('.fish-dot');
  const fishInfo = document.getElementById('fishInfo');
  
  const fishData = {
    1: { name: 'マダイ', desc: '遠州灘の代表的な高級魚' },
    2: { name: 'スズキ', desc: '夏が旬の白身魚' },
    3: { name: 'カンパチ', desc: '脂ののった極上の味' },
    4: { name: 'アジ', desc: '地元で獲れた新鮮なアジ' },
    5: { name: 'カマス', desc: '上品な甘みが特徴' },
    6: { name: 'イサキ', desc: '夏に美味しい高級魚' },
    7: { name: '太刀魚', desc: '銀色に輝く美しい魚' }
  };
  
  fishDots.forEach(dot => {
    dot.addEventListener('click', () => {
      // アクティブ状態の切り替え
      fishDots.forEach(d => d.classList.remove('active'));
      dot.classList.add('active');
      
      // 情報更新
      const fishNum = dot.dataset.fish;
      const data = fishData[fishNum];
      
      fishInfo.classList.remove('active');
      setTimeout(() => {
        fishInfo.querySelector('.fish-name').textContent = data.name;
        fishInfo.querySelector('.fish-desc').textContent = data.desc;
        fishInfo.classList.add('active');
      }, 300);
    });
  });
});

// 初期化
const fullpage = new ModernFullpage();
</script>

</body>
</html>