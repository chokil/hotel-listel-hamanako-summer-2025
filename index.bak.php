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

<!-- OGP -->
<meta property="og:title" content="浜名湖の夏2025 | ホテルリステル浜名湖">
<meta property="og:description" content="2025年6月28日スカイプールOPEN！">
<meta property="og:image" content="images/hero-bg.jpg">
<meta property="og:type" content="website">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>

<style>

/* ========================
   Base Styles
======================== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  overflow: hidden;
  font-family: 'Noto Sans JP', -apple-system, BlinkMacSystemFont, sans-serif;
  color: #1a1a1a;
  background: #000;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Variables */
:root {
  --primary: #0a5298;
  --secondary: #f47e20;
  --accent: #00a0e9;
  --dark: #1a1a1a;
  --light: #ffffff;
  --gray: #666666;
  --light-gray: #f5f5f5;
  --transition: cubic-bezier(0.25, 0.46, 0.45, 0.94);
  --ease-out-expo: cubic-bezier(0.19, 1, 0.22, 1);
}

/* ========================
   Swiper Container
======================== */
.swiper {
  width: 100%;
  height: 100vh;
}

.swiper-slide {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

/* Modern Swipe Animations */
.swiper-slide > * {
  opacity: 0;
  transform: scale(0.9);
  transition: all 1.2s var(--ease-out-expo);
}

.swiper-slide-active > * {
  opacity: 1;
  transform: scale(1);
}

/* Content animations */
.swiper-slide h1,
.swiper-slide h2,
.swiper-slide h3 {
  transform: translateY(50px);
  opacity: 0;
  transition: all 1s var(--ease-out-expo);
}

.swiper-slide-active h1,
.swiper-slide-active h2,
.swiper-slide-active h3 {
  transform: translateY(0);
  opacity: 1;
}

.swiper-slide p {
  transform: translateY(30px);
  opacity: 0;
  transition: all 1s var(--ease-out-expo) 0.2s;
}

.swiper-slide-active p {
  transform: translateY(0);
  opacity: 1;
}

/* Image animations */
.swiper-slide img {
  transform: scale(1.2);
  transition: transform 2s var(--ease-out-expo);
}

.swiper-slide-active img {
  transform: scale(1);
}

/* Parallax effect */
[data-swiper-parallax] {
  transition: transform 1.5s var(--ease-out-expo);
}

/* Swiper Pagination */
.swiper-pagination {
  right: 40px !important;
  left: auto !important;
  width: auto !important;
  z-index: 100;
}

.swiper-pagination-bullet {
  position: relative;
  width: 14px;
  height: 14px;
  background: rgba(255, 255, 255, 0.2);
  border: 2px solid rgba(255, 255, 255, 0.4);
  opacity: 1;
  transition: all 0.4s var(--ease-out-expo);
  margin: 8px 0 !important;
}

.swiper-pagination-bullet::before {
  content: attr(data-section);
  position: absolute;
  right: 25px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  color: #fff;
  opacity: 0;
  transition: opacity 0.3s ease;
  white-space: nowrap;
}

.swiper-pagination-bullet:hover::before {
  opacity: 0.7;
}

.swiper-pagination-bullet-active {
  background: #fff;
  border-color: #fff;
  transform: scale(1.3);
}

.swiper-pagination-bullet-active::before {
  opacity: 1;
}

/* Swiper Navigation */
.swiper-button-next,
.swiper-button-prev {
  color: #fff;
  width: 50px;
  height: 50px;
  margin-top: -25px;
  transition: all 0.3s ease;
}

.swiper-button-next:after,
.swiper-button-prev:after {
  font-size: 20px;
  font-weight: bold;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
  transform: scale(1.1);
}

/* Hide navigation arrows on mobile */
@media (max-width: 768px) {
  .swiper-button-next,
  .swiper-button-prev {
    display: none;
  }
}

/* ========================
   Loading Screen
======================== */
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
  transition: opacity 0.8s ease;
}

.loading-screen.loaded {
  opacity: 0;
  pointer-events: none;
}


.loading-content {
  text-align: center;
}

.loading-logo {
  font-family: 'Noto Serif JP', serif;
  font-size: 2rem;
  font-weight: 300;
  color: #fff;
  letter-spacing: 0.3em;
  opacity: 0;
  animation: fadeInOut 2s ease infinite;
}

.loading-bar {
  width: 200px;
  height: 2px;
  background: rgba(255, 255, 255, 0.2);
  margin: 20px auto;
  position: relative;
  overflow: hidden;
}

.loading-progress {
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: #fff;
  animation: loadingProgress 2s ease infinite;
}

@keyframes fadeInOut {
  0%, 100% { opacity: 0; }
  50% { opacity: 1; }
}

@keyframes loadingProgress {
  0% { left: -100%; }
  50% { left: 0; }
  100% { left: 100%; }
}

/* ========================
   Fixed Booking Button
======================== */
.fixed-booking-btn {
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 1000;
}

.booking-float-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  background: var(--secondary);
  color: #fff;
  padding: 15px 25px;
  border-radius: 50px;
  text-decoration: none;
  font-size: 0.95rem;
  font-weight: 600;
  box-shadow: 0 4px 20px rgba(0,0,0,0.25);
  transition: all 0.3s ease;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { box-shadow: 0 4px 20px rgba(0,0,0,0.25); }
  50% { box-shadow: 0 4px 30px rgba(244, 126, 32, 0.4); }
  100% { box-shadow: 0 4px 20px rgba(0,0,0,0.25); }
}

.booking-float-btn:hover {
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 8px 35px rgba(0,0,0,0.3);
  background: var(--primary);
}

.booking-float-btn svg {
  width: 22px;
  height: 22px;
}

/* ========================
   Header
======================== */
.header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  padding: 15px 30px;
  transition: all 0.5s ease;
  background: transparent;
}

.header.scrolled {
  background: rgba(0, 0, 0, 0.8);
  backdrop-filter: blur(10px);
  padding: 10px 30px;
}

/* Hide header background on mobile */
@media (max-width: 768px) {
  .header {
    background: transparent !important;
    backdrop-filter: none !important;
  }
  
  .header.scrolled {
    background: transparent !important;
    backdrop-filter: none !important;
  }
}

.header-inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1400px;
  margin: 0 auto;
}

.logo {
  font-family: 'Bebas Neue', sans-serif;
  font-size: 1.4rem;
  color: #fff;
  text-decoration: none;
  letter-spacing: 0.05em;
  transition: opacity 0.3s ease;
}

.logo:hover {
  opacity: 0.8;
}

.nav-toggle {
  width: 30px;
  height: 22px;
  position: relative;
  cursor: pointer;
  z-index: 1001;
}

.nav-toggle span {
  position: absolute;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  transition: all 0.3s ease;
}

.nav-toggle span:nth-child(1) { top: 0; }
.nav-toggle span:nth-child(2) { top: 10px; }
.nav-toggle span:nth-child(3) { bottom: 0; }

.nav-toggle.active span:nth-child(1) {
  transform: rotate(45deg);
  top: 10px;
}

.nav-toggle.active span:nth-child(2) {
  opacity: 0;
}

.nav-toggle.active span:nth-child(3) {
  transform: rotate(-45deg);
  bottom: 10px;
}

/* Navigation Menu */
.nav-menu {
  position: fixed;
  top: 0;
  right: -100%;
  width: 400px;
  height: 100vh;
  background: rgba(0, 0, 0, 0.95);
  backdrop-filter: blur(20px);
  transition: right 0.5s var(--ease-out-expo);
  z-index: 999;
  overflow-y: auto;
}

.nav-menu.active {
  right: 0;
}

.nav-content {
  padding: 100px 60px;
}

.nav-list {
  list-style: none;
}

.nav-item {
  margin-bottom: 30px;
  overflow: hidden;
}

.nav-link {
  display: block;
  font-size: 1.8rem;
  font-weight: 300;
  color: #fff;
  text-decoration: none;
  letter-spacing: 0.05em;
  transform: translateY(100%);
  transition: all 0.5s ease;
}

.nav-menu.active .nav-link {
  transform: translateY(0);
  transition-delay: calc(var(--i) * 0.1s);
}

.nav-link:hover {
  color: var(--accent);
  transform: translateX(10px);
}

/* ========================
   Slide 1 - Hero
======================== */
.slide-hero {
  position: relative;
  background: #000;
}

/* Hero animations */
.hero-content > * {
  opacity: 0;
  transform: translateY(40px);
}

.swiper-slide-active .hero-content > * {
  opacity: 1;
  transform: translateY(0);
  transition: all 1s var(--ease-out-expo) calc(var(--i) * 0.1s);
}

.hero-scroll {
  opacity: 0;
  transform: translateY(20px);
}

.swiper-slide-active .hero-scroll {
  opacity: 1;
  transform: translateY(0);
  transition: all 1s var(--ease-out-expo) 0.8s;
}

.hero-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.hero-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.hero-video iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100vw;
  height: 56.25vw; /* 16:9 Aspect Ratio */
  min-width: 177.77vh;
  min-height: 100vh;
  pointer-events: none;
}

/* Ensure video covers full screen */
@media (max-aspect-ratio: 16/9) {
  .hero-video iframe {
    width: 177.77vh;
    height: 100vh;
  }
}

.hero-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: scale(1.1);
  animation: heroScale 20s ease infinite alternate;
}

@keyframes heroScale {
  0% { transform: scale(1.1); }
  100% { transform: scale(1); }
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, 
    rgba(0,0,0,0.3) 0%, 
    rgba(0,0,0,0.5) 100%);
}

.hero-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 90%;
  max-width: 1000px;
  z-index: 2;
}

.hero-date {
  font-family: 'Bebas Neue', sans-serif;
  font-size: 1.2rem;
  letter-spacing: 0.3em;
  color: var(--secondary);
  margin-bottom: 20px;
  opacity: 0;
  animation: fadeInUp 1s ease 0.3s forwards;
}

.hero-title {
  font-family: 'Noto Sans JP', sans-serif;
  font-size: clamp(3rem, 8vw, 7rem);
  font-weight: 700;
  line-height: 1.2;
  color: #fff;
  margin-bottom: 30px;
  opacity: 0;
  animation: fadeInUp 1s ease 0.5s forwards;
}

.hero-subtitle {
  font-size: clamp(1rem, 2vw, 1.4rem);
  font-weight: 300;
  line-height: 1.8;
  color: #fff;
  margin-bottom: 50px;
  opacity: 0;
  animation: fadeInUp 1s ease 0.7s forwards;
}

.hero-cta {
  display: inline-block;
  padding: 15px 50px;
  background: var(--secondary);
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 0.05em;
  transition: all 0.3s ease;
  opacity: 0;
  animation: fadeInUp 1s ease 0.9s forwards;
}

.hero-cta:hover {
  background: var(--primary);
  transform: translateY(-3px);
}

.hero-scroll {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  opacity: 0;
  animation: fadeIn 1s ease 1.2s forwards;
}

.scroll-text {
  font-size: 0.8rem;
  letter-spacing: 0.2em;
  color: #fff;
  writing-mode: vertical-rl;
  margin-bottom: 20px;
}

.scroll-line {
  width: 1px;
  height: 60px;
  background: rgba(255, 255, 255, 0.3);
  margin: 0 auto;
  position: relative;
  overflow: hidden;
}

.scroll-line::after {
  content: '';
  position: absolute;
  top: -100%;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
  animation: scrollLine 2s ease infinite;
}

@keyframes scrollLine {
  0% { top: -100%; }
  50% { top: 100%; }
  100% { top: 100%; }
}

/* ========================
   Slide 2 - Sky Pool
======================== */
.slide-skypool {
  background: var(--primary);
  color: #fff;
}

/* Sky Pool animations */
.skypool-content > * {
  opacity: 0;
  transform: translateY(40px);
}

.swiper-slide-active .skypool-content > * {
  opacity: 1;
  transform: translateY(0);
  transition: all 1s var(--ease-out-expo) calc(var(--i, 0) * 0.1s);
}

.skypool-badge {
  opacity: 0;
  transform: scale(0.8) translateY(20px);
}

.swiper-slide-active .skypool-badge {
  opacity: 1;
  transform: scale(1) translateY(0);
  transition: all 0.8s var(--ease-out-expo);
  animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.05); }
}

.skypool-image {
  overflow: hidden;
}

.skypool-image img {
  transform: scale(1.2);
  transition: transform 2s var(--ease-out-expo);
}

.swiper-slide-active .skypool-image img {
  transform: scale(1);
}

.skypool-container {
  height: 100vh;
  position: relative;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.skypool-wrapper {
  width: 100%;
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
}

.skypool-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.skypool-text {
  color: #fff;
}

.skypool-badge {
  display: inline-block;
  padding: 6px 20px;
  background: transparent;
  border: 1px solid var(--secondary);
  color: var(--secondary);
  font-size: 0.7rem;
  font-weight: 400;
  letter-spacing: 0.15em;
  margin-bottom: 20px;
  border-radius: 3px;
  text-transform: uppercase;
}

.skypool-title {
  font-family: 'Noto Serif JP', serif;
  font-size: clamp(3rem, 5vw, 5rem);
  font-weight: 300;
  line-height: 1.2;
  margin-bottom: 20px;
}

.skypool-subtitle {
  font-size: clamp(1.5rem, 3vw, 2.5rem);
  font-weight: 700;
  margin-bottom: 30px;
}

.skypool-desc {
  font-size: 1.1rem;
  line-height: 1.8;
  margin-bottom: 40px;
  opacity: 0.9;
}

.skypool-features {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}

.feature-item {
  display: flex;
  align-items: center;
  gap: 15px;
}

.feature-icon {
  width: 40px;
  height: 40px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.skypool-image {
  position: relative;
  height: 500px;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.skypool-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.image-caption {
  position: absolute;
  bottom: 30px;
  left: 30px;
  background: rgba(0, 0, 0, 0.8);
  padding: 15px 30px;
  backdrop-filter: blur(10px);
  color: #fff;
  border-radius: 8px;
}



/* ========================
   Slide 3 - Gourmet
======================== */
.slide-gourmet {
  background: #fff;
}

.slide-gourmet-2 {
  background: linear-gradient(135deg, #fff 0%, #f8f8f8 100%);
}

.gourmet-container {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 80px 40px;
}

.gourmet-content {
  text-align: center;
  max-width: 1200px;
  width: 100%;
}

.gourmet-title {
  font-family: 'Noto Sans JP', sans-serif;
  font-size: clamp(3rem, 5vw, 5rem);
  font-weight: 700;
  color: var(--dark);
  margin-bottom: 20px;
  opacity: 0;
  transform: translateY(30px);
}

.swiper-slide-active .gourmet-title {
  animation: fadeInUp 1s ease forwards;
}

.gourmet-subtitle {
  font-size: 1.4rem;
  color: var(--gray);
  margin-bottom: 60px;
  opacity: 0;
  transform: translateY(30px);
}

.swiper-slide-active .gourmet-subtitle {
  animation: fadeInUp 1s ease 0.2s forwards;
}

.cuisine-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 40px;
}

.swiper-slide-active .cuisine-grid .cuisine-card {
  opacity: 0;
  transform: translateY(30px) scale(0.95);
  animation: fadeInUpScale 0.8s var(--ease-out-expo) calc(var(--i) * 0.1s) forwards;
}

@keyframes fadeInUpScale {
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Cuisine card hover effects */
.cuisine-card {
  transition: all 0.4s var(--ease-out-expo);
}

.cuisine-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.cuisine-card:hover .cuisine-image img {
  transform: scale(1.2);
  filter: brightness(1.1);
}

.cuisine-card {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  transition: all 0.3s ease;
  border-radius: 8px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.cuisine-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.cuisine-image {
  position: relative;
  height: 200px;
  overflow: hidden;
}

.cuisine-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.cuisine-card:hover .cuisine-image img {
  transform: scale(1.1);
}

.cuisine-info {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
  color: #fff;
  padding: 30px 20px 20px;
  transform: translateY(100%);
  transition: transform 0.3s ease;
}

.cuisine-card:hover .cuisine-info {
  transform: translateY(0);
}

.cuisine-name {
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 5px;
}

.cuisine-desc {
  font-size: 0.9rem;
  opacity: 0.9;
}

/* Buffet Info */
.buffet-info {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 40px;
  margin-top: 50px;
  padding: 40px;
  background: rgba(0,0,0,0.03);
  border-radius: 12px;
}

.buffet-time,
.buffet-feature {
  text-align: center;
}

.buffet-info h4 {
  font-size: 1.2rem;
  color: var(--primary);
  margin-bottom: 15px;
  font-weight: 600;
}

.buffet-info p {
  font-size: 1rem;
  line-height: 1.6;
  color: var(--dark);
}

.buffet-info small {
  display: block;
  margin-top: 8px;
  font-size: 0.85rem;
  color: var(--gray);
}


/* ========================
   Slide 4 - Activities
======================== */
.slide-activities {
  background: var(--light-gray);
}

.activities-container {
  height: 100%;
  position: relative;
  overflow: hidden;
}

.activities-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}

.activity-panel {
  position: relative;
  overflow: hidden;
  transition: all 0.5s ease;
}

.activity-panel:hover {
  flex: 2;
}

.activity-bg-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.activity-bg-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.activity-panel:hover .activity-bg-image img {
  transform: scale(1.05);
}

.activity-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  transition: background 0.5s ease;
}

.activity-panel:hover .activity-overlay {
  background: rgba(0, 0, 0, 0.3);
}

.activity-content {
  position: absolute;
  bottom: 40px;
  left: 40px;
  right: 40px;
  color: #fff;
  z-index: 2;
}

.activity-title {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 15px;
  transform: translateY(20px);
  opacity: 0;
}

.swiper-slide-active .activity-title {
  animation: fadeInUp 0.8s var(--ease-out-expo) calc(var(--i) * 0.2s) forwards;
}

/* Activity panel slide animations */
.activity-panel {
  transform: translateY(100%);
  opacity: 0;
}

.swiper-slide-active .activity-panel {
  transform: translateY(0);
  opacity: 1;
  transition: all 1.2s var(--ease-out-expo) calc(var(--i, 0) * 0.2s);
}

.activity-panel:nth-child(1) { --i: 0; }
.activity-panel:nth-child(2) { --i: 1; }
.activity-panel:nth-child(3) { --i: 2; }

.activity-desc {
  font-size: 1rem;
  line-height: 1.6;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.3s ease;
}

.activity-panel:hover .activity-desc {
  opacity: 1;
  transform: translateY(0);
}

.activity-link {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 30px;
  border: 2px solid #fff;
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.3s ease;
}

.activity-panel:hover .activity-link {
  opacity: 1;
  transform: translateY(0);
}

.activity-link:hover {
  background: #fff;
  color: var(--dark);
}

/* ========================
   Slide 5 - Gallery
======================== */
.slide-gallery {
  background: #000;
}

.gallery-container {
  height: 100%;
  position: relative;
  overflow: hidden;
}

.gallery-grid {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(2, 1fr);
  gap: 2px;
}

.gallery-item {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

.gallery-item:nth-child(1) {
  grid-column: span 2;
  grid-row: span 2;
}

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s ease;
  opacity: 0;
  transform: scale(1.1);
}

.swiper-slide-active .gallery-item img {
  animation: galleryFadeIn 1s ease calc(var(--i) * 0.1s) forwards;
}

@keyframes galleryFadeIn {
  to {
    opacity: 1;
    transform: scale(1);
  }
}

.gallery-item:hover img {
  transform: scale(1.05);
}

.gallery-caption {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
  color: #fff;
  padding: 20px;
  transform: translateY(100%);
  transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-caption {
  transform: translateY(0);
}

.gallery-center-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
  z-index: 10;
  pointer-events: none;
}

.gallery-title {
  font-family: 'Noto Serif JP', serif;
  font-size: clamp(3rem, 5vw, 5rem);
  font-weight: 300;
  margin-bottom: 20px;
  opacity: 0;
  transform: translateY(30px);
}

.swiper-slide-active .gallery-title {
  animation: fadeInUp 1s ease 0.5s forwards;
}

/* ========================
   Slide 6 - Booking
======================== */
.slide-booking {
  background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
  color: #fff;
}

.booking-container {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.booking-content {
  text-align: center;
  max-width: 1000px;
  padding: 0 40px;
}

.booking-title {
  font-family: 'Noto Serif JP', serif;
  font-size: clamp(3rem, 5vw, 5rem);
  font-weight: 300;
  margin-bottom: 30px;
  opacity: 0;
  transform: translateY(30px);
}

.swiper-slide-active .booking-title {
  animation: fadeInUp 1s ease forwards;
}

.booking-desc {
  font-size: 1.2rem;
  line-height: 1.8;
  margin-bottom: 50px;
  opacity: 0;
  transform: translateY(30px);
}

.swiper-slide-active .booking-desc {
  animation: fadeInUp 1s ease 0.2s forwards;
}

.booking-buttons {
  display: flex;
  gap: 30px;
  justify-content: center;
  flex-wrap: wrap;
  opacity: 0;
  transform: translateY(30px);
}

.swiper-slide-active .booking-buttons {
  animation: fadeInUp 1s ease 0.4s forwards;
}

.btn {
  display: inline-block;
  padding: 18px 50px;
  font-size: 1.1rem;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.3s ease;
  letter-spacing: 0.05em;
}

.btn-primary {
  background: #fff;
  color: var(--primary);
}

.btn-primary:hover {
  background: var(--secondary);
  color: #fff;
  transform: translateY(-3px);
}

.btn-secondary {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
}

.btn-secondary:hover {
  background: #fff;
  color: var(--primary);
  transform: translateY(-3px);
}

.contact-info {
  margin-top: 60px;
  opacity: 0;
  transform: translateY(30px);
}

.swiper-slide-active .contact-info {
  animation: fadeInUp 1s ease 0.6s forwards;
}

.contact-info p {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

/* ========================
   Animations
======================== */
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

/* Japanese-style fade animations */
@keyframes jpFadeIn {
  0% {
    opacity: 0;
    filter: blur(10px);
  }
  100% {
    opacity: 1;
    filter: blur(0);
  }
}

@keyframes jpSlideUp {
  0% {
    opacity: 0;
    transform: translateY(60px) scale(0.95);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

@keyframes floatAnimation {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

/* Slide transition animations */
.swiper-slide {
  opacity: 0.4;
  transform: scale(0.95);
  transition: all 0.6s var(--ease-out-expo);
}

.swiper-slide-active {
  opacity: 1;
  transform: scale(1);
}

/* Enhanced entrance animations */
.swiper-slide-active .hero-content > * {
  animation: heroEntrance 1s var(--ease-out-expo) forwards;
  animation-delay: calc(var(--i) * 100ms);
}

@keyframes heroEntrance {
  from {
    opacity: 0;
    transform: translateY(40px) scale(0.95);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Floating animation for elements */
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

.floating {
  animation: float 3s ease-in-out infinite;
}

/* ========================
   Responsive
======================== */
@media (max-width: 1024px) {
  .skypool-content {
    grid-template-columns: 1fr;
    gap: 40px;
    padding: 80px 40px;
    min-height: auto;
  }
  
  .skypool-image {
    height: 400px;
  }
  
  .skypool-extra-content {
    grid-template-columns: 1fr;
    margin-top: 40px;
  }
  
  .cuisine-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .gallery-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 768px) {
  .fixed-booking-btn {
    bottom: 20px;
    right: 20px;
  }
  
  .booking-float-btn {
    padding: 10px 16px;
    font-size: 0.85rem;
  }
  
  .booking-float-btn span {
    display: none;
  }
  
  .booking-float-btn svg {
    width: 24px;
    height: 24px;
  }
  
  /* Sky Pool Mobile */
  .skypool-container {
    padding: 40px 20px;
    height: 100vh;
    display: flex;
    align-items: center;
  }
  
  .skypool-wrapper {
    width: 100%;
    padding: 0;
  }
  
  .skypool-content {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  
  .skypool-text {
    text-align: center;
  }
  
  .skypool-title {
    font-size: 2.5rem;
    margin-bottom: 15px;
  }
  
  .skypool-subtitle {
    font-size: 1.2rem;
    margin-bottom: 20px;
  }
  
  .skypool-desc {
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 25px;
  }
  
  .skypool-features {
    grid-template-columns: 1fr;
    gap: 12px;
  }
  
  .feature-item {
    font-size: 0.9rem;
  }
  
  .feature-icon {
    width: 35px;
    height: 35px;
  }
  
  .skypool-image {
    height: 250px;
  }
  
  .image-caption {
    bottom: 20px;
    left: 20px;
    padding: 10px 20px;
    font-size: 0.9rem;
  }
  
  /* Gourmet Mobile */
  .gourmet-container {
    padding: 40px 20px;
    height: 100vh;
    display: flex;
    align-items: center;
  }
  
  .gourmet-content {
    width: 100%;
  }
  
  .gourmet-title {
    font-size: 2rem;
    margin-bottom: 15px;
  }
  
  .gourmet-subtitle {
    font-size: 1rem;
    margin-bottom: 25px;
  }
  
  .cuisine-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }
  
  .cuisine-card {
    border-radius: 6px;
  }
  
  .cuisine-image {
    height: 120px;
  }
  
  .cuisine-info {
    padding: 20px 15px 15px;
  }
  
  .cuisine-name {
    font-size: 1rem;
    margin-bottom: 3px;
  }
  
  .cuisine-desc {
    font-size: 0.75rem;
  }
  
  .buffet-info {
    grid-template-columns: 1fr;
    gap: 20px;
    margin-top: 30px;
    padding: 20px;
  }
  
  .buffet-info h4 {
    font-size: 1rem;
    margin-bottom: 10px;
  }
  
  .buffet-info p {
    font-size: 0.9rem;
  }
  
  .buffet-info small {
    font-size: 0.75rem;
  }
  
  /* Activities Mobile */
  .activities-bg {
    grid-template-columns: 1fr;
    grid-template-rows: repeat(3, 1fr);
  }
  
  .activity-panel {
    height: 33.33vh;
  }
  
  .activity-content {
    bottom: 20px;
    left: 20px;
    right: 20px;
  }
  
  .activity-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
  }
  
  .activity-desc {
    font-size: 0.85rem;
    line-height: 1.4;
  }
  
  .activity-link {
    padding: 8px 20px;
    font-size: 0.85rem;
    margin-top: 15px;
  }
  
  /* Gallery Mobile */
  .gallery-grid {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(4, 1fr);
  }
  
  .gallery-item:nth-child(1) {
    grid-column: span 2;
    grid-row: span 1;
  }
  
  /* Other adjustments */
  .header {
    padding: 15px 20px;
  }
  
  .nav-menu {
    width: 100%;
  }
  
  .nav-content {
    padding: 80px 40px;
  }
  
  .hero-title {
    font-size: 3rem;
  }
  
  .booking-buttons {
    flex-direction: column;
    align-items: center;
  }
  
  .btn {
    width: 100%;
    max-width: 300px;
  }
  
  /* Hide swiper navigation arrows on mobile */
  .swiper-button-next,
  .swiper-button-prev {
    display: none !important;
  }
}

@media (max-width: 480px) {
  .swiper-pagination {
    right: 20px !important;
  }
  
  .swiper-pagination-bullet::before {
    display: none;
  }
  
  /* Hero adjustments */
  .hero-title {
    font-size: 2rem;
    line-height: 1.3;
  }
  
  .hero-subtitle {
    font-size: 0.9rem;
    line-height: 1.5;
  }
  
  .hero-cta {
    padding: 12px 30px;
    font-size: 0.9rem;
  }
  
  /* Sky Pool Mobile Small */
  .skypool-container {
    padding: 30px 15px;
  }
  
  .skypool-badge {
    font-size: 0.8rem;
    padding: 6px 18px;
  }
  
  .skypool-title {
    font-size: 2rem;
    margin-bottom: 10px;
  }
  
  .skypool-subtitle {
    font-size: 1.1rem;
    margin-bottom: 15px;
  }
  
  .skypool-desc {
    font-size: 0.85rem;
    line-height: 1.5;
    margin-bottom: 20px;
  }
  
  .skypool-features {
    gap: 10px;
  }
  
  .feature-item {
    font-size: 0.8rem;
  }
  
  .feature-icon {
    width: 30px;
    height: 30px;
  }
  
  .skypool-image {
    height: 200px;
  }
  
  /* Gourmet Mobile Small */
  .gourmet-container {
    padding: 30px 15px;
  }
  
  .gourmet-title {
    font-size: 1.8rem;
    margin-bottom: 10px;
  }
  
  .gourmet-subtitle {
    font-size: 0.9rem;
    margin-bottom: 20px;
  }
  
  .cuisine-grid {
    grid-template-columns: 1fr;
    gap: 10px;
  }
  
  .cuisine-image {
    height: 150px;
  }
  
  .cuisine-info {
    padding: 15px;
  }
  
  .cuisine-name {
    font-size: 0.95rem;
  }
  
  .cuisine-desc {
    font-size: 0.7rem;
  }
  
  .buffet-info {
    gap: 15px;
    padding: 15px;
    margin-top: 20px;
  }
  
  .buffet-info h4 {
    font-size: 0.9rem;
    margin-bottom: 8px;
  }
  
  .buffet-info p {
    font-size: 0.8rem;
  }
  
  .buffet-info small {
    font-size: 0.7rem;
    margin-top: 5px;
  }
  
  /* Activities Mobile Small */
  .activity-content {
    bottom: 15px;
    left: 15px;
    right: 15px;
  }
  
  .activity-title {
    font-size: 1.2rem;
    margin-bottom: 8px;
  }
  
  .activity-desc {
    font-size: 0.75rem;
    line-height: 1.3;
  }
  
  .activity-link {
    padding: 6px 15px;
    font-size: 0.75rem;
    margin-top: 10px;
  }
  
  /* Booking adjustments */
  .booking-content {
    padding: 0 15px;
  }
  
  .booking-title {
    font-size: 1.8rem;
  }
  
  .booking-desc {
    font-size: 0.85rem;
    line-height: 1.5;
  }
  
  .contact-info {
    font-size: 0.8rem;
  }
  
  .btn {
    font-size: 0.9rem;
    padding: 12px 20px;
  }
  
  /* Also hide swiper navigation arrows on smaller mobile */
  .swiper-button-next,
  .swiper-button-prev {
    display: none !important;
  }
}

/* Accessibility */
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

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_js.php"; ?>

</head>

<body id="<?php echo $page; ?>">
<?php include LOCATION_ROOT_DIR."/templates/gtm.php"; ?>

<!-- Loading Screen -->
<div class="loading-screen" id="loadingScreen">
  <div class="loading-content">
    <h2 class="loading-logo">浜名湖の夏</h2>
    <div class="loading-bar">
      <div class="loading-progress"></div>
    </div>
  </div>
</div>

<!-- Header -->
<header class="header" id="header">
  <div class="header-inner">
    <a href="<?php echo LOCATION; ?>" class="logo"></a>
    
    <div class="nav-toggle" id="navToggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>

<!-- Fixed Booking Button -->
<div class="fixed-booking-btn">
  <a href="https://asp.hotel-story.ne.jp/ver3d/ASPP0200.asp?hidSELECTPLAN=A5NEB&hidSELECTCOD1=04090&hidSELECTCOD2=001&packnm=&rooms=1&selectptyp=&selectroom=&selectrmtyp=&rcp=" target="_blank" class="booking-float-btn">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
      <polyline points="9 22 9 12 15 12 15 22"/>
      <circle cx="12" cy="8" r="1" fill="currentColor"/>
    </svg>
    <span>予約</span>
  </a>
</div>

<!-- Navigation Menu -->
<nav class="nav-menu" id="navMenu">
  <div class="nav-content">
    <ul class="nav-list">
      <li class="nav-item">
        <a href="#" class="nav-link" style="--i: 1">TOP</a>
      </li>
      <li class="nav-item">
        <a href="#skypool" class="nav-link" style="--i: 2">SKYPOOL</a>
      </li>
      <li class="nav-item">
        <a href="#gourmet" class="nav-link" style="--i: 3">GOURMET</a>
      </li>
      <li class="nav-item">
        <a href="#activities" class="nav-link" style="--i: 4">ACTIVITIES</a>
      </li>
      <li class="nav-item">
        <a href="#gallery" class="nav-link" style="--i: 5">GALLERY</a>
      </li>
      <li class="nav-item">
        <a href="#booking" class="nav-link" style="--i: 6">BOOKING</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Swiper Container -->
<div class="swiper" id="mainSwiper">
  <div class="swiper-wrapper">
    
    <!-- Slide 1: Hero -->
    <div class="swiper-slide slide-hero">
      <div class="hero-bg">
        <div class="hero-video">
          <iframe 
            src="https://www.youtube.com/embed/uRp_W_8wRYk?autoplay=1&mute=1&loop=1&playlist=uRp_W_8wRYk&controls=0&showinfo=0&rel=0&modestbranding=1&playsinline=1"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
          </iframe>
        </div>
      </div>
      <div class="hero-overlay"></div>
      
      <div class="hero-content">
        <div class="hero-date" style="--i: 0">2025 SUMMER</div>
        <h1 class="hero-title" style="--i: 1">
          湖を渡る風も涼しい<br>
          浜名湖の夏
        </h1>
        <p class="hero-subtitle" style="--i: 2">
          新しい夏の体験が始まる<br>
          全室、正面に湖を臨む絶景の宿
        </p>
        <a href="https://asp.hotel-story.ne.jp/ver3d/ASPP0200.asp?hidSELECTPLAN=A5NEB&hidSELECTCOD1=04090&hidSELECTCOD2=001&packnm=&rooms=1&selectptyp=&selectroom=&selectrmtyp=&rcp=" target="_blank" class="hero-cta" style="--i: 3">宿泊プランを見る</a>
      </div>
      
      <div class="hero-scroll">
        <p class="scroll-text">SCROLL</p>
        <div class="scroll-line"></div>
      </div>
    </div>
    
    <!-- Slide 2: Sky Pool -->
    <div class="swiper-slide slide-skypool">
      <div class="skypool-container">
        <div class="skypool-wrapper">
          <div class="skypool-content">
            <div class="skypool-text">
              <div class="skypool-badge">Renewal</div>
              <h2 class="skypool-title">Sky Pool</h2>
              <p class="skypool-subtitle">2025.6.28 OPEN</p>
              <p class="skypool-desc">
                ルーフトップテラスのスカイプールをリニューアル<br>
                インフィニティチェアのレンタルもスタート<br>
                空と湖が一体化する360°パノラマビューのなか、<br>
                リラックスした休日をお過ごしください。
              </p>
              <div class="skypool-features">
                <div class="feature-item">
                  <div class="feature-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" y1="8" x2="12" y2="16"></line>
                      <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                  </div>
                  <span>新素材プールサイドで熱を低減</span>
                </div>
                <div class="feature-item">
                  <div class="feature-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </div>
                  <span>宿泊者限定、無料</span>
                </div>
                <div class="feature-item">
                  <div class="feature-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                      <path d="M2 17l10 5 10-5"></path>
                      <path d="M2 12l10 5 10-5"></path>
                    </svg>
                  </div>
                  <span>日除け付きレンタルチェア</span>
                </div>
                <div class="feature-item">
                  <div class="feature-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                      <rect x="9" y="9" width="6" height="6"></rect>
                      <line x1="9" y1="1" x2="9" y2="4"></line>
                      <line x1="15" y1="1" x2="15" y2="4"></line>
                      <line x1="9" y1="20" x2="9" y2="23"></line>
                      <line x1="15" y1="20" x2="15" y2="23"></line>
                      <line x1="20" y1="9" x2="23" y2="9"></line>
                      <line x1="20" y1="14" x2="23" y2="14"></line>
                      <line x1="1" y1="9" x2="4" y2="9"></line>
                      <line x1="1" y1="14" x2="4" y2="14"></line>
                    </svg>
                  </div>
                  <span>8月は水泳教室開催</span>
                </div>
              </div>
            </div>
            
            <div class="skypool-image">
              <img src="images/skypool-main.jpg" alt="スカイプール">
            </div>
          </div>
          
          <div class="skypool-cta">
            <a href="https://asp.hotel-story.ne.jp/ver3d/ASPP0200.asp?hidSELECTPLAN=A5NEB&hidSELECTCOD1=04090&hidSELECTCOD2=001&packnm=&rooms=1&selectptyp=&selectroom=&selectrmtyp=&rcp=" target="_blank" class="btn btn-primary">夏休みプランはこちら</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slide 3: Gourmet Part 1 -->
    <div class="swiper-slide slide-gourmet">
      <div class="gourmet-container">
        <div class="gourmet-content">
          <h2 class="gourmet-title">夏のビュッフェ・メニュー（例）</h2>
          <p class="gourmet-subtitle">滋養豊かな夏料理と、食欲をそそる夏彩の涼味。</p>
          
          <div class="cuisine-grid">
            <div class="cuisine-card" style="--i: 1">
              <div class="cuisine-image">
                <img src="images/korean-pork.jpg" alt="地元銘柄豚のサムギョプサル">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">韓国フェア</h3>
                <p class="cuisine-desc">地元銘柄豚のサムギョプサル</p>
              </div>
            </div>
            
            <div class="cuisine-card" style="--i: 2">
              <div class="cuisine-image">
                <img src="images/seafood-vegetables.jpg" alt="夏野菜と地魚のオーブン焼き">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">地元の恵み</h3>
                <p class="cuisine-desc">夏野菜と地魚のオーブン焼き</p>
              </div>
            </div>
            
            <div class="cuisine-card" style="--i: 3">
              <div class="cuisine-image">
                <img src="images/somen-pasta.jpg" alt="浜松そうめんの静岡茶ッペリーニ">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">創作料理</h3>
                <p class="cuisine-desc">浜松そうめんの静岡茶ッペリーニ</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slide 4: Gourmet Part 2 -->
    <div class="swiper-slide slide-gourmet-2">
      <div class="gourmet-container">
        <div class="gourmet-content">
          <h2 class="gourmet-title">夏のビュッフェ・メニュー（例）</h2>
          <p class="gourmet-subtitle">滋養豊かな夏料理と、食欲をそそる夏彩の涼味。</p>
          
          <div class="cuisine-grid">
            <div class="cuisine-card" style="--i: 1">
              <div class="cuisine-image">
                <img src="images/unagi.jpg" alt="鰻">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">浜名湖名物</h3>
                <p class="cuisine-desc">鰻の蒲焼</p>
              </div>
            </div>
            
            <div class="cuisine-card" style="--i: 2">
              <div class="cuisine-image">
                <img src="images/gyoza.jpg" alt="餃子">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">浜松名物</h3>
                <p class="cuisine-desc">浜松餃子</p>
              </div>
            </div>
            
            <div class="cuisine-card" style="--i: 3">
              <div class="cuisine-image">
                <img src="images/sashimi.jpg" alt="地魚のお造り七点盛り">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">地魚のお造り</h3>
                <p class="cuisine-desc">地魚のお造り七点盛り</p>
              </div>
            </div>
          </div>
          
          <div class="buffet-info">
            <div class="sashimi-description">
              <h4>地魚七点盛り</h4>
              <p>その日に仕入れた地元遠州・三河産の地魚をお造りでご提供</p>
              <p class="fish-list">地魚例：鯵・鯛・スズキ・イサキ・太刀魚・黒ムツ・金目鯛・平目・コチ・鱈・鰹・生しらす・車えび・かんぱち等</p>
            </div>
          </div>
          
          <div class="gourmet-buttons">
            <a href="https://asp.hotel-story.ne.jp/ver3d/ASPP0200.asp?hidSELECTPLAN=A5NEB&hidSELECTCOD1=04090&hidSELECTCOD2=001&packnm=&rooms=1&selectptyp=&selectroom=&selectrmtyp=&rcp=" target="_blank" class="btn btn-primary">夕・朝ビュッフェ付きプランはこちら</a>
            <a href="https://asp.hotel-story.ne.jp/ver3d/ASPP0200.asp?hidSELECTPLAN=A5NEB&hidSELECTCOD1=04090&hidSELECTCOD2=001&packnm=&rooms=1&selectptyp=&selectroom=&selectrmtyp=&rcp=" target="_blank" class="btn btn-secondary">地魚のお造り七点盛り付きプランはこちら</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slide 5: Activities -->
    <div class="swiper-slide slide-activities">
      <div class="activities-container">
        <div class="activities-header">
          <h2 class="activities-title">夏のアクティビティー</h2>
        </div>
        <div class="activities-bg">
          <div class="activity-panel">
            <div class="activity-bg-image">
              <img src="images/marine-sports.jpg" alt="マリンスポーツ">
            </div>
            <div class="activity-overlay"></div>
            <div class="activity-content">
              <h3 class="activity-title" style="--i: 1">Marine Sports</h3>
              <p class="activity-desc">
                プライベートビーチから出発。<br>
                気軽にマリンスポーツ体験
              </p>
              <a href="<?php echo LOCATION; ?>activities/#marine" class="activity-link">詳細を見る</a>
            </div>
          </div>
          
          <div class="activity-panel">
            <div class="activity-bg-image">
              <img src="images/cycling.jpg" alt="サイクリング">
            </div>
            <div class="activity-overlay"></div>
            <div class="activity-content">
              <h3 class="activity-title" style="--i: 2">Cycling Tour</h3>
              <p class="activity-desc">
                ホテルスタッフが地元の魅力をご案内<br>
                電気自転車でめぐる湖畔の散策
              </p>
              <a href="<?php echo LOCATION; ?>activities/#cycling" class="activity-link">詳細を見る</a>
            </div>
          </div>
          
          <div class="activity-panel">
            <div class="activity-bg-image">
              <img src="images/fishing.jpg" alt="釣り体験">
            </div>
            <div class="activity-overlay"></div>
            <div class="activity-content">
              <h3 class="activity-title" style="--i: 3">Fishing Experience</h3>
              <p class="activity-desc">
                ホテル前の桟橋で楽しむ釣り体験<br>
                夏はハゼ釣りが人気
              </p>
              <a href="<?php echo LOCATION; ?>activities/#fishing" class="activity-link">詳細を見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slide 6: Gallery -->
    <div class="swiper-slide slide-gallery">
      <div class="gallery-container">
        <div class="gallery-grid">
          <div class="gallery-item" style="--i: 1">
            <img src="images/gallery-01.jpg" alt="浜名湖の風景">
            <div class="gallery-caption">
              <p>浜名湖の美しい風景</p>
            </div>
          </div>
          
          <div class="gallery-item" style="--i: 2">
            <img src="images/gallery-02.jpg" alt="露天風呂">
            <div class="gallery-caption">
              <p>湖畔の絶景露天風呂</p>
            </div>
          </div>
          
          <div class="gallery-item" style="--i: 3">
            <img src="images/seven-points.jpg" alt="七点盛り">
            <div class="gallery-caption">
              <p>遠州灘の恵み 七点盛り</p>
            </div>
          </div>
          
          <div class="gallery-item" style="--i: 4">
            <img src="images/dining-01.jpg" alt="ダイニング">
            <div class="gallery-caption">
              <p>開放的なダイニング</p>
            </div>
          </div>
          
          <div class="gallery-item" style="--i: 5">
            <img src="images/dining-02.jpg" alt="朝食">
            <div class="gallery-caption">
              <p>地元食材の朝食</p>
            </div>
          </div>
          
          <div class="gallery-item" style="--i: 6">
            <img src="images/room-view.jpg" alt="客室">
            <div class="gallery-caption">
              <p>湖畔を望む客室</p>
            </div>
          </div>
        </div>
        
        <div class="gallery-center-text">
          <h2 class="gallery-title">Gallery</h2>
        </div>
      </div>
    </div>
    
    <!-- Slide 7: Booking -->
    <div class="swiper-slide slide-booking">
      <div class="booking-container">
        <div class="booking-content">
          <h2 class="booking-title">
            お得な直予約特典
          </h2>
          
          <div class="booking-benefits">
            <div class="benefit-item">
              <h3>直予約会員5大特典</h3>
              <p>直予約サイトは最低価格保証</p>
            </div>
            <div class="benefit-item">
              <h3>2泊以上の連泊特典</h3>
              <p>連泊クーポンが適用されます</p>
            </div>
          </div>
          
          <div class="booking-buttons">
            <a href="https://asp.hotel-story.ne.jp/ver3d/ASPP0200.asp?hidSELECTPLAN=A5NEB&hidSELECTCOD1=04090&hidSELECTCOD2=001&packnm=&rooms=1&selectptyp=&selectroom=&selectrmtyp=&rcp=" target="_blank" class="btn btn-primary">直予約サイトで予約</a>
            <a href="tel:0535251222" class="btn btn-secondary">電話で予約</a>
          </div>
          
          <div class="access-info">
            <h3>アクセス</h3>
            <div class="access-items">
              <div class="access-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M9 11H3v10h6m0-10v10m0-10l3 3m6 0l3-3m0 0v10h6V11h-6"/>
                </svg>
                <p>JR東海道本線鷲津駅から無料送迎バスあり（要予約）</p>
              </div>
              <div class="access-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"/>
                  <path d="M12 6v6l4 2"/>
                </svg>
                <p>東名三ヶ日ICより10分</p>
              </div>
            </div>
          </div>
          
          <div class="contact-info">
            <p>TEL: 053-525-1222</p>
            <p>〒431-1424 静岡県浜松市北区三ヶ日町下尾奈375</p>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
  <!-- Swiper Pagination -->
  <div class="swiper-pagination"></div>
  
  <!-- Swiper Navigation -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
// Simple loading screen - hide after DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  const loadingScreen = document.getElementById('loadingScreen');
  const progressBar = document.querySelector('.loading-progress');
  
  if (loadingScreen) {
    // Quick progress animation
    if (progressBar) {
      progressBar.style.transition = 'width 0.8s ease';
      progressBar.style.width = '100%';
    }
    
    // Hide loading screen quickly
    setTimeout(() => {
      loadingScreen.style.opacity = '0';
      loadingScreen.style.transition = 'opacity 0.5s ease';
      
      setTimeout(() => {
        loadingScreen.style.display = 'none';
      }, 500);
    }, 500);
  }
});

// Navigation Toggle
const navToggle = document.getElementById('navToggle');
const navMenu = document.getElementById('navMenu');

navToggle.addEventListener('click', () => {
  navToggle.classList.toggle('active');
  navMenu.classList.toggle('active');
});

// Close menu when clicking nav links
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', () => {
    navToggle.classList.remove('active');
    navMenu.classList.remove('active');
  });
});


// Wait for Swiper to load then initialize
let swiper;
document.addEventListener('DOMContentLoaded', () => {
  // Initialize Swiper with modern animations
  swiper = new Swiper('#mainSwiper', {
  direction: 'vertical',
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 1200,
  parallax: true,
  effect: 'creative',
  creativeEffect: {
    prev: {
      shadow: false,
      translate: [0, '-20%', -1],
      opacity: 0,
    },
    next: {
      translate: [0, '100%', 0],
      opacity: 0,
    },
  },
  mousewheel: {
    invert: false,
    sensitivity: 1,
    thresholdDelta: 50,
    thresholdTime: 500,
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    renderBullet: function (index, className) {
      const sections = ['TOP', 'POOL', 'GOURMET1', 'GOURMET2', 'ACTIVITY', 'GALLERY', 'BOOKING'];
      return '<span class="' + className + '" data-section="' + sections[index] + '"></span>';
    },
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  touchRatio: 1,
  touchAngle: 45,
  grabCursor: true,
  resistance: true,
  resistanceRatio: 0.85,
  allowTouchMove: true,
  threshold: 5,
  preventInteractionOnTransition: true,
  on: {
    init: function() {
      // Add loaded class for initial animations
      document.body.classList.add('loaded');
    },
    slideChange: function () {
      // Header style change
      const header = document.getElementById('header');
      if (this.activeIndex > 0) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
      
      // Trigger animations on slide change
      const activeSlide = this.slides[this.activeIndex];
      activeSlide.classList.add('animate-in');
    },
    slideChangeTransitionEnd: function() {
      // Clean up animation classes
      this.slides.forEach((slide, index) => {
        if (index !== this.activeIndex) {
          slide.classList.remove('animate-in');
        }
      });
    },
  },
});
}); // End of DOMContentLoaded

// Preload images for smooth transitions
const preloadImages = () => {
  const images = [
    'images/hero-bg.jpg',
    'images/skypool-main.jpg',
    'images/korean-pork.jpg',
    'images/seafood-vegetables.jpg',
    'images/somen-pasta.jpg',
    'images/hawaiian-chicken.jpg',
    'images/chinese-chicken.jpg',
    'images/tuna-spareribs.jpg',
    'images/marine-sports.jpg',
    'images/cycling.jpg',
    'images/fishing.jpg'
  ];
  
  images.forEach(src => {
    const img = new Image();
    img.src = src;
  });
};

preloadImages();





// Connection speed detection and video control
function handleVideoBasedOnConnection() {
  const heroVideo = document.querySelector('.hero-video');
  const heroBg = document.querySelector('.hero-bg');
  
  if (!heroVideo || !heroBg) return;
  
  // Check if Network Information API is available
  if ('connection' in navigator && navigator.connection) {
    const connection = navigator.connection;
    const effectiveType = connection.effectiveType;
    const saveData = connection.saveData;
    
    // Hide video on slow connections (2g, slow-2g) or when save data is enabled
    if (saveData || effectiveType === 'slow-2g' || effectiveType === '2g') {
      heroVideo.style.display = 'none';
      heroBg.style.background = "url('images/hero-bg.jpg') center/cover";
    } else {
      heroVideo.style.display = 'block';
      heroBg.style.background = 'none';
    }
    
    // Listen for connection changes
    connection.addEventListener('change', handleVideoBasedOnConnection);
  } else {
    // Fallback: Check screen width for very small devices
    if (window.innerWidth <= 480) {
      heroVideo.style.display = 'none';
      heroBg.style.background = "url('images/hero-bg.jpg') center/cover";
    }
  }
}

// Call on load and resize
handleVideoBasedOnConnection();
window.addEventListener('resize', handleVideoBasedOnConnection);

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href').substring(1);
    const slideMap = {
      'booking': 6,
      'skypool': 1,
      'gourmet': 2,
      'activities': 4,
      'gallery': 5
    };
    
    if (slideMap[targetId] !== undefined) {
      swiper.slideTo(slideMap[targetId]);
    }
  });
});


// Parallax effect for hero background
window.addEventListener('mousemove', (e) => {
  const heroSlide = document.querySelector('.slide-hero');
  if (!heroSlide || !heroSlide.classList.contains('swiper-slide-active')) return;
  
  const heroBg = heroSlide.querySelector('.hero-bg img');
  const x = (e.clientX / window.innerWidth - 0.5) * 20;
  const y = (e.clientY / window.innerHeight - 0.5) * 20;
  
  heroBg.style.transform = `scale(1.1) translate(${x}px, ${y}px)`;
});
</script>

</body>
</html>