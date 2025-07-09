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
   Scroll Animations
======================== */
.scroll-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.8s var(--ease-out-expo);
}

.scroll-reveal.active {
  opacity: 1;
  transform: translateY(0);
}

.scroll-reveal-left {
  opacity: 0;
  transform: translateX(-30px);
  transition: all 0.8s var(--ease-out-expo);
}

.scroll-reveal-left.active {
  opacity: 1;
  transform: translateX(0);
}

.scroll-reveal-right {
  opacity: 0;
  transform: translateX(30px);
  transition: all 0.8s var(--ease-out-expo);
}

.scroll-reveal-right.active {
  opacity: 1;
  transform: translateX(0);
}

.scroll-reveal-scale {
  opacity: 0;
  transform: scale(0.9) translateY(20px);
  transition: all 0.8s var(--ease-out-expo);
}

.scroll-reveal-scale.active {
  opacity: 1;
  transform: scale(1) translateY(0);
}

/* Stagger animation for multiple items */
.scroll-reveal[data-delay] {
  transition-delay: calc(var(--delay, 0) * 1ms);
}

/* Parallax layers */
.parallax-layer {
  position: absolute;
  width: 100%;
  height: 100%;
  will-change: transform;
}

.parallax-bg {
  transform: translateY(0);
  transition: transform 0.5s ease-out;
}

.parallax-fg {
  transform: translateY(0);
  transition: transform 0.3s ease-out;
}

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
   Header
======================== */
.header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  padding: 20px 40px;
  transition: all 0.5s ease;
}

.header.scrolled {
  background: rgba(0, 0, 0, 0.8);
  backdrop-filter: blur(10px);
  padding: 15px 40px;
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
  font-size: 1.8rem;
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
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100vw;
  height: 100vh;
  min-width: 100%;
  min-height: 100%;
}

.hero-video iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 177.77vh; /* 16:9 aspect ratio */
  height: 100vh;
  min-width: 100%;
  min-height: 56.25vw; /* 16:9 aspect ratio */
  pointer-events: none;
}

@media (max-aspect-ratio: 16/9) {
  .hero-video iframe {
    width: 100vw;
    height: 56.25vw;
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
  font-family: 'Noto Serif JP', serif;
  font-size: clamp(3rem, 8vw, 7rem);
  font-weight: 300;
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

.skypool-container {
  height: 100vh;
  overflow-y: auto;
  overflow-x: hidden;
  position: relative;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
  /* Hide scrollbar but keep functionality */
  scrollbar-width: none;
  -ms-overflow-style: none;
}

.skypool-container::-webkit-scrollbar {
  display: none;
}

.skypool-wrapper {
  min-height: 100vh;
  padding: 80px 40px 60px;
  max-width: 1400px;
  margin: 0 auto;
  width: 100%;
  position: relative;
}

.skypool-main {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 60px;
  align-items: flex-start;
  margin-bottom: 80px;
}

.skypool-text {
  color: #fff;
}

.skypool-badge {
  display: inline-block;
  padding: 8px 24px;
  background: var(--secondary);
  font-size: 0.9rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  margin-bottom: 20px;
}

.skypool-title {
  font-family: 'Noto Serif JP', serif;
  font-size: clamp(2.5rem, 4vw, 4rem);
  font-weight: 300;
  line-height: 1.2;
  margin-bottom: 15px;
}

.skypool-subtitle {
  font-size: clamp(1.2rem, 2vw, 2rem);
  font-weight: 700;
  margin-bottom: 20px;
}

.skypool-desc {
  font-size: 1rem;
  line-height: 1.7;
  margin-bottom: 30px;
  opacity: 0.9;
}

.skypool-info-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.info-item dt {
  font-size: 0.8rem;
  color: var(--secondary);
  font-weight: 700;
  margin-bottom: 5px;
}

.info-item dd {
  font-size: 0.95rem;
  color: #fff;
}

.skypool-visual {
  position: relative;
}

.skypool-image-main {
  width: 100%;
  height: 400px;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.skypool-image-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.skypool-features {
  position: absolute;
  bottom: -30px;
  right: -30px;
  display: flex;
  gap: 15px;
}

.feature-card {
  background: rgba(0, 0, 0, 0.8);
  backdrop-filter: blur(10px);
  padding: 15px 20px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 0.9rem;
}

.feature-card svg {
  width: 20px;
  height: 20px;
  stroke: var(--secondary);
}

.skypool-bottom {
  margin-top: 40px;
}

.skypool-extra-sections {
  margin-top: 120px;
}

.section-divider {
  width: 100px;
  height: 1px;
  background: rgba(255, 255, 255, 0.3);
  margin: 80px auto;
}

.pool-details {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 60px;
  margin-bottom: 80px;
}

.detail-block {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  padding: 40px;
  border-radius: 16px;
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.detail-block h3 {
  font-size: 1.8rem;
  margin-bottom: 20px;
  color: var(--secondary);
}

.detail-block p {
  line-height: 1.8;
  opacity: 0.9;
}

.mini-gallery-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-bottom: 60px;
}

.mini-gallery-row img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  transition: all 0.5s ease;
  cursor: pointer;
}

.mini-gallery-row img:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

/* Scroll progress indicator */
.scroll-progress {
  position: fixed;
  right: 50px;
  top: 50%;
  transform: translateY(-50%);
  width: 4px;
  height: 200px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 2px;
  z-index: 100;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.scroll-progress.visible {
  opacity: 1;
}

.scroll-progress-bar {
  width: 100%;
  background: var(--secondary);
  border-radius: 2px;
  transition: height 0.1s ease;
  transform-origin: top;
}

/* Scroll hint animation */
.scroll-hint {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  opacity: 1;
  transition: opacity 0.3s ease;
  animation: scrollHintBounce 2s ease-in-out infinite;
}

.scroll-hint.hidden {
  opacity: 0;
  pointer-events: none;
}

@keyframes scrollHintBounce {
  0%, 100% { transform: translateX(-50%) translateY(0); }
  50% { transform: translateX(-50%) translateY(10px); }
}

.scroll-hint span {
  font-size: 0.8rem;
  color: rgba(255, 255, 255, 0.7);
  margin-bottom: 10px;
  letter-spacing: 0.2em;
}

.scroll-hint svg {
  width: 24px;
  height: 24px;
  stroke: rgba(255, 255, 255, 0.7);
  animation: scrollArrowPulse 2s ease-in-out infinite;
}

@keyframes scrollArrowPulse {
  0%, 100% { opacity: 0.7; }
  50% { opacity: 1; }
}

.event-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}

.event-card {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  padding: 30px;
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.1);
  text-align: center;
  transition: all 0.3s ease;
}

.event-card:hover {
  transform: translateY(-5px);
  background: rgba(255, 255, 255, 0.08);
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.event-date {
  font-size: 0.85rem;
  color: var(--secondary);
  font-weight: 700;
  margin-bottom: 10px;
  letter-spacing: 0.1em;
}

.event-card h4 {
  font-size: 1.2rem;
  margin-bottom: 10px;
  color: #fff;
}

.event-card p {
  font-size: 0.9rem;
  opacity: 0.8;
}


/* ========================
   Slide 3 - Gourmet
======================== */
.slide-gourmet {
  background: #fff;
}

.gourmet-container {
  height: 100vh;
  overflow-y: auto;
  overflow-x: hidden;
  position: relative;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
  /* Hide scrollbar but keep functionality */
  scrollbar-width: none;
  -ms-overflow-style: none;
}

.gourmet-container::-webkit-scrollbar {
  display: none;
}

.gourmet-wrapper {
  min-height: 100vh;
  padding: 80px 40px 60px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.gourmet-content {
  text-align: center;
  max-width: 1200px;
  width: 100%;
}

.gourmet-title {
  font-family: 'Noto Serif JP', serif;
  font-size: clamp(3rem, 5vw, 5rem);
  font-weight: 300;
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
  gap: 30px;
  opacity: 0;
  transform: translateY(50px);
}

.swiper-slide-active .cuisine-grid {
  animation: fadeInUp 1s ease 0.4s forwards;
}

.cuisine-card {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  transition: all 0.3s ease;
}

.cuisine-card:hover {
  transform: translateY(-10px);
}

.cuisine-image {
  position: relative;
  height: 300px;
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

/* Gourmet extra content */
.gourmet-extra-content {
  margin-top: 80px;
  padding-bottom: 80px;
}

.gourmet-details {
  margin-top: 60px;
}

.gourmet-details h3 {
  font-size: 2rem;
  color: var(--dark);
  margin-bottom: 40px;
}

.menu-highlights {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  max-width: 1000px;
  margin: 0 auto;
}

.highlight-card {
  background: #f8f8f8;
  padding: 30px;
  border-radius: 12px;
  text-align: left;
}

.highlight-card h4 {
  font-size: 1.3rem;
  color: var(--primary);
  margin-bottom: 15px;
}

.highlight-card p {
  line-height: 1.7;
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
  animation: fadeInUp 0.8s ease calc(var(--i) * 0.2s) forwards;
}

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
  .skypool-wrapper {
    padding: 60px 20px 40px;
  }
  
  .skypool-main {
    grid-template-columns: 1fr;
    gap: 30px;
    margin-bottom: 60px;
  }
  
  .skypool-text {
    text-align: center;
  }
  
  .skypool-info-grid {
    grid-template-columns: 1fr;
    gap: 15px;
    text-align: left;
    max-width: 300px;
    margin: 0 auto;
  }
  
  .skypool-image-main {
    height: 300px;
  }
  
  .skypool-features {
    position: static;
    flex-direction: column;
    gap: 10px;
    margin-top: 20px;
  }
  
  .feature-card {
    width: 100%;
  }
  
  .mini-gallery-row {
    grid-template-columns: 1fr;
    gap: 15px;
  }
  
  .mini-gallery-row img {
    height: 180px;
  }
  
  .pool-details {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  
  .detail-block {
    padding: 30px 20px;
  }
  
  .event-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  
  .scroll-progress {
    right: 20px;
    height: 150px;
  }
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
  
  .cuisine-grid {
    grid-template-columns: 1fr;
  }
  
  .gourmet-wrapper {
    padding: 60px 20px 40px;
  }
  
  .menu-highlights {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  
  .highlight-card {
    padding: 20px;
  }
  
  .activities-bg {
    grid-template-columns: 1fr;
    grid-template-rows: repeat(3, 1fr);
  }
  
  .gallery-grid {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(4, 1fr);
  }
  
  .gallery-item:nth-child(1) {
    grid-column: span 2;
    grid-row: span 1;
  }
  
  .booking-buttons {
    flex-direction: column;
    align-items: center;
  }
  
  .btn {
    width: 100%;
    max-width: 300px;
  }
}

@media (max-width: 480px) {
  .swiper-pagination {
    right: 20px !important;
  }
  
  .swiper-pagination-bullet::before {
    display: none;
  }
  
  .hero-title {
    font-size: 2.5rem;
  }
  
  .hero-subtitle {
    font-size: 1rem;
  }
  
  .section-title {
    font-size: 2.5rem;
  }
  
  .skypool-title {
    font-size: 2rem;
  }
  
  .skypool-subtitle {
    font-size: 1.3rem;
  }
  
  .skypool-desc {
    font-size: 0.9rem;
  }
  
  .skypool-image-main {
    height: 200px;
  }
  
  .feature-card {
    font-size: 0.8rem;
    padding: 10px 15px;
  }
  
  .mini-gallery-row img {
    height: 100px;
  }
  
  .cuisine-card {
    height: 250px;
  }
  
  .activity-content {
    bottom: 20px;
    left: 20px;
    right: 20px;
  }
  
  .booking-content {
    padding: 0 20px;
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
    <a href="<?php echo LOCATION; ?>" class="logo">LISTEL HAMANAKO</a>
    
    <div class="nav-toggle" id="navToggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>

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
          涼やかな風が吹く<br>
          浜名湖の夏
        </h1>
        <p class="hero-subtitle" style="--i: 2">
          2025年6月28日、新しい夏の体験が始まる<br>
          スカイプールから望む絶景と特別な時間
        </p>
        <a href="#booking" class="hero-cta" style="--i: 3">宿泊プランを見る</a>
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
          <div class="skypool-main">
            <div class="skypool-text">
              <div class="skypool-badge scroll-reveal">NEW OPEN</div>
              <h2 class="skypool-title scroll-reveal" data-delay="100">Sky Pool</h2>
              <p class="skypool-subtitle scroll-reveal" data-delay="200">2025.6.28 OPEN</p>
              <p class="skypool-desc scroll-reveal" data-delay="300">
                ホテル最上階のルーフトップに誕生する<br>
                浜名湖を一望できるインフィニティプール。<br>
                まるで空と湖が一体化したような絶景の中で、<br>
                特別な夏のひとときをお過ごしください。
              </p>
              
              <div class="skypool-info-grid scroll-reveal" data-delay="400">
                <div class="info-item">
                  <dt>営業期間</dt>
                  <dd>2025年6月28日(土)～9月7日(日)</dd>
                </div>
                <div class="info-item">
                  <dt>営業時間</dt>
                  <dd>9:00～17:00</dd>
                </div>
                <div class="info-item">
                  <dt>料金</dt>
                  <dd>宿泊者無料</dd>
                </div>
              </div>
            </div>
            
            <div class="skypool-visual">
              <div class="skypool-image-main scroll-reveal-scale">
                <img src="images/skypool-main.jpg" alt="スカイプール">
              </div>
              <div class="skypool-features">
                <div class="feature-card scroll-reveal" data-delay="500">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                  </svg>
                  <span>新素材で熱を低減</span>
                </div>
                <div class="feature-card scroll-reveal" data-delay="600">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span>宿泊者限定</span>
                </div>
                <div class="feature-card scroll-reveal" data-delay="700">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                    <path d="M2 17l10 5 10-5"></path>
                  </svg>
                  <span>レンタルチェア完備</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="skypool-bottom">
            <div class="mini-gallery-row">
              <img src="images/skypool/sky_pool.jpg" alt="スカイプール全景" class="scroll-reveal">
              <img src="images/skypool/hamanakopool.jpg" alt="浜名湖ビュー" class="scroll-reveal" data-delay="100">
              <img src="images/skypool/sky_pool_re.jpg" alt="プールサイド" class="scroll-reveal" data-delay="200">
            </div>
          </div>
          
          <div class="section-divider scroll-reveal"></div>
          
          <div class="skypool-extra-sections">
            <div class="pool-details">
              <div class="detail-block scroll-reveal">
                <h3>プール仕様</h3>
                <p>
                  最新の循環システムと温度管理により、<br>
                  常に清潔で快適な水温を保ちます。<br>
                  水深：1.2m / 長さ：25m<br>
                  特殊コーティングで熱さを軽減
                </p>
              </div>
              <div class="detail-block scroll-reveal" data-delay="200">
                <h3>設備・サービス</h3>
                <p>
                  更衣室・シャワー完備<br>
                  レンタルタオル無料<br>
                  プールサイドバー営業（11:00-16:00）<br>
                  フロート・浮き輪の貸出あり
                </p>
              </div>
            </div>
            
            <div class="section-divider scroll-reveal"></div>
            
            <div class="special-events scroll-reveal">
              <h3 style="font-size: 2rem; text-align: center; margin-bottom: 40px; color: #fff;">
                Summer Special Events
              </h3>
              <div class="event-grid">
                <div class="event-card scroll-reveal" data-delay="100">
                  <div class="event-date">7月毎週土曜</div>
                  <h4>サンセットプール</h4>
                  <p>17:00-19:00 特別延長営業</p>
                </div>
                <div class="event-card scroll-reveal" data-delay="200">
                  <div class="event-date">8月1日-31日</div>
                  <h4>キッズ水泳教室</h4>
                  <p>朝9:00-10:00 プロによる指導</p>
                </div>
                <div class="event-card scroll-reveal" data-delay="300">
                  <div class="event-date">期間中毎日</div>
                  <h4>アクアビクス</h4>
                  <p>16:00-16:30 楽しく運動</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Scroll hint -->
          <div class="scroll-hint">
            <span>SCROLL</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
        </div>
        
        <!-- Scroll progress indicator -->
        <div class="scroll-progress">
          <div class="scroll-progress-bar"></div>
        </div>
      </div>
    </div>
    
    <!-- Slide 3: Gourmet -->
    <div class="swiper-slide slide-gourmet">
      <div class="gourmet-container">
        <div class="gourmet-wrapper">
          <div class="gourmet-content">
            <h2 class="gourmet-title">夏のグルメ特集</h2>
            <p class="gourmet-subtitle">遠州＆浜名湖 美味しいものEXPO</p>
            
            <div class="cuisine-grid">
            <div class="cuisine-card scroll-reveal" data-delay="0">
              <div class="cuisine-image">
                <img src="images/korean-pork.jpg" alt="地元銘柄豚のサムギョプサル">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">韓国フェア</h3>
                <p class="cuisine-desc">地元銘柄豚のサムギョプサル</p>
              </div>
            </div>
            
            <div class="cuisine-card scroll-reveal" data-delay="100">
              <div class="cuisine-image">
                <img src="images/seafood-vegetables.jpg" alt="夏野菜と地魚のオーブン焼き">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">地元の恵み</h3>
                <p class="cuisine-desc">夏野菜と地魚のオーブン焼き</p>
              </div>
            </div>
            
            <div class="cuisine-card scroll-reveal" data-delay="200">
              <div class="cuisine-image">
                <img src="images/somen-pasta.jpg" alt="浜松そうめんの静岡茶ッペリーニ">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">創作料理</h3>
                <p class="cuisine-desc">浜松そうめんの静岡茶ッペリーニ</p>
              </div>
            </div>
            
            <div class="cuisine-card scroll-reveal" data-delay="300">
              <div class="cuisine-image">
                <img src="images/hawaiian-chicken.jpg" alt="フリフリチキン">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">ハワイアン</h3>
                <p class="cuisine-desc">フリフリチキン 三ヶ日みかん風味</p>
              </div>
            </div>
            
            <div class="cuisine-card scroll-reveal" data-delay="400">
              <div class="cuisine-image">
                <img src="images/chinese-chicken.jpg" alt="棒々鶏">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">中華料理</h3>
                <p class="cuisine-desc">本格四川風棒々鶏</p>
              </div>
            </div>
            
            <div class="cuisine-card scroll-reveal" data-delay="500">
              <div class="cuisine-image">
                <img src="images/tuna-spareribs.jpg" alt="鮪のカマ">
              </div>
              <div class="cuisine-info">
                <h3 class="cuisine-name">スペシャル</h3>
                <p class="cuisine-desc">鮪のカマのスペアリブ風焼き</p>
              </div>
            </div>
            
            <!-- Additional content for scrolling -->
            <div class="gourmet-extra-content">
              <div class="section-divider"></div>
              
              <div class="gourmet-details">
                <h3>夏限定メニュー詳細</h3>
                <div class="menu-highlights">
                  <div class="highlight-card scroll-reveal">
                    <h4>韓国フェア特集</h4>
                    <p>本場韓国の味を浜名湖で。地元産の豚肉を使用した本格サムギョプサルをお楽しみください。</p>
                  </div>
                  <div class="highlight-card scroll-reveal" data-delay="100">
                    <h4>地産地消メニュー</h4>
                    <p>浜名湖の新鮮な魚介と遠州の夏野菜を使った、ここでしか味わえない特別料理。</p>
                  </div>
                  <div class="highlight-card scroll-reveal" data-delay="200">
                    <h4>ビュッフェ営業時間</h4>
                    <p>朝食: 7:00-10:00 / 夕食: 17:30-21:00<br>※最終入場は終了30分前</p>
                  </div>
                </div>
              </div>
              
              <!-- Scroll hint -->
              <div class="scroll-hint">
                <span>SCROLL</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Scroll progress indicator -->
        <div class="scroll-progress">
          <div class="scroll-progress-bar"></div>
        </div>
      </div>
    </div>
    
    <!-- Slide 4: Activities -->
    <div class="swiper-slide slide-activities">
      <div class="activities-container">
        <div class="activities-bg">
          <div class="activity-panel">
            <div class="activity-bg-image">
              <img src="images/marine-sports.jpg" alt="マリンスポーツ">
            </div>
            <div class="activity-overlay"></div>
            <div class="activity-content">
              <h3 class="activity-title" style="--i: 1">Marine Sports</h3>
              <p class="activity-desc">
                ウェイクボード、ウェイクサーフィン、<br>
                トーイングチューブで湖上のアドベンチャー
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
                電動自転車でめぐる浜名湖周遊ツアー<br>
                ガイド付きで地元の魅力を発見
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
    
    <!-- Slide 5: Gallery -->
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
    
    <!-- Slide 6: Booking -->
    <div class="swiper-slide slide-booking">
      <div class="booking-container">
        <div class="booking-content">
          <h2 class="booking-title">
            この夏だけの<br>
            特別な体験を
          </h2>
          <p class="booking-desc">
            2025年6月28日オープンのスカイプールと<br>
            浜名湖の美しい自然、地元の美食を堪能する<br>
            特別な夏の宿泊プランをご用意しました
          </p>
          
          <div class="booking-buttons">
            <a href="<?php echo LOCATION; ?>plan/" class="btn btn-primary">宿泊プランを見る</a>
            <a href="tel:0535251222" class="btn btn-secondary">電話で予約</a>
          </div>
          
          <div class="contact-info">
            <p>TEL: 053-525-1222</p>
            <p>営業時間: 9:00-18:00</p>
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
// Loading Screen
window.addEventListener('load', () => {
  setTimeout(() => {
    document.getElementById('loadingScreen').classList.add('loaded');
  }, 2000);
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

// Advanced scroll state management
const scrollState = {
  currentSlide: 0,
  isScrolling: false,
  canSwipeNext: {},
  canSwipePrev: {},
  scrollProgress: {},
  lastScrollTime: 0,
  scrollThreshold: 150
};

// Check if element is in viewport
const isInViewport = (element, threshold = 0) => {
  const rect = element.getBoundingClientRect();
  return (
    rect.top <= (window.innerHeight - threshold) &&
    rect.bottom >= threshold
  );
};

// Animate elements on scroll
const animateOnScroll = (container) => {
  const scrollElements = container.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .scroll-reveal-scale');
  
  scrollElements.forEach(element => {
    if (isInViewport(element, 100) && !element.classList.contains('active')) {
      const delay = element.dataset.delay || 0;
      setTimeout(() => {
        element.classList.add('active');
      }, delay);
    }
  });
};

// Update scroll progress indicator
const updateScrollProgress = (container, slideIndex) => {
  const scrollTop = container.scrollTop;
  const scrollHeight = container.scrollHeight - container.clientHeight;
  const progress = scrollHeight > 0 ? (scrollTop / scrollHeight) * 100 : 0;
  
  scrollState.scrollProgress[slideIndex] = progress;
  
  // Update visual progress bar
  const progressBar = container.querySelector('.scroll-progress-bar');
  if (progressBar) {
    progressBar.style.height = `${progress}%`;
  }
  
  // Show/hide scroll hint
  const scrollHint = container.querySelector('.scroll-hint');
  if (scrollHint) {
    if (progress > 10) {
      scrollHint.classList.add('hidden');
    } else {
      scrollHint.classList.remove('hidden');
    }
  }
  
  // Show progress indicator when scrollable
  const scrollProgress = container.querySelector('.scroll-progress');
  if (scrollProgress && scrollHeight > 0) {
    scrollProgress.classList.add('visible');
  }
};

// Check scroll boundaries
const checkScrollBoundaries = (container) => {
  const scrollTop = container.scrollTop;
  const scrollHeight = container.scrollHeight;
  const clientHeight = container.clientHeight;
  const threshold = 10;
  
  const isAtTop = scrollTop <= threshold;
  const isAtBottom = scrollTop + clientHeight >= scrollHeight - threshold;
  const hasScroll = scrollHeight > clientHeight + 50; // Increased threshold
  
  // Debug log removed for production
  
  return { isAtTop, isAtBottom, hasScroll, scrollTop, scrollHeight, clientHeight };
};

// Initialize Swiper
const swiper = new Swiper('#mainSwiper', {
  direction: 'vertical',
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 1200,
  parallax: true,
  mousewheel: {
    invert: false,
    sensitivity: 1,
    thresholdDelta: 50,
    thresholdTime: 500,
    forceToAxis: true,
    releaseOnEdges: false,
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    renderBullet: function (index, className) {
      const sections = ['TOP', 'POOL', 'GOURMET', 'ACTIVITY', 'GALLERY', 'BOOKING'];
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
  touchStartPreventDefault: false,
  touchMoveStopPropagation: false,
  simulateTouch: true,
  allowSlideNext: true,
  allowSlidePrev: true,
  // Mobile scroll handling
  nested: true,
  passiveListeners: true,
  on: {
    init: function() {
      // Initialize scroll handling for each slide
      this.slides.forEach((slide, index) => {
        const container = slide.querySelector('.skypool-container, .gourmet-container, .activities-container');
        
        if (container) {
          // Initial state
          const { isAtTop, isAtBottom, hasScroll } = checkScrollBoundaries(container);
          scrollState.canSwipeNext[index] = !hasScroll || isAtBottom;
          scrollState.canSwipePrev[index] = !hasScroll || isAtTop;
          
          // Scroll event listener
          container.addEventListener('scroll', () => {
            const bounds = checkScrollBoundaries(container);
            scrollState.canSwipeNext[index] = !bounds.hasScroll || bounds.isAtBottom;
            scrollState.canSwipePrev[index] = !bounds.hasScroll || bounds.isAtTop;
            
            // Update progress and animations
            updateScrollProgress(container, index);
            animateOnScroll(container);
            
            // Smooth scroll handling
            scrollState.lastScrollTime = Date.now();
          });
          
          // Initial animation check
          setTimeout(() => animateOnScroll(container), 100);
        } else {
          // Non-scrollable slides
          scrollState.canSwipeNext[index] = true;
          scrollState.canSwipePrev[index] = true;
        }
      });
    },
    
    slideChange: function () {
      scrollState.currentSlide = this.activeIndex;
      
      // Header style change
      const header = document.getElementById('header');
      if (this.activeIndex > 0) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    },
    
    slideChangeTransitionEnd: function() {
      const activeSlide = this.slides[this.activeIndex];
      const container = activeSlide.querySelector('.skypool-container, .gourmet-container, .activities-container');
      
      if (container) {
        // Reset animations for new slide
        setTimeout(() => animateOnScroll(container), 100);
      }
    },
    
    // Remove problematic slide transition controls
  },
});

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



// Enhanced wheel handling
let isScrolling = false;
let scrollEndTimer;
let lastWheelTime = 0;
const WHEEL_THRESHOLD = 100; // ms between wheel events

swiper.mousewheel.disable(); // Disable default Swiper mousewheel

document.addEventListener('wheel', (e) => {
  const now = Date.now();
  const timeDiff = now - lastWheelTime;
  
  // Debounce rapid wheel events
  if (timeDiff < WHEEL_THRESHOLD) {
    e.preventDefault();
    return;
  }
  
  const activeSlide = swiper.slides[swiper.activeIndex];
  const container = activeSlide.querySelector('.skypool-container, .gourmet-container, .activities-container');
  
  if (!container) {
    // No scrollable content, use swiper
    e.preventDefault();
    if (!isScrolling) {
      if (e.deltaY > 0) {
        swiper.slideNext();
      } else if (e.deltaY < 0) {
        swiper.slidePrev();
      }
      isScrolling = true;
      lastWheelTime = now;
      clearTimeout(scrollEndTimer);
      scrollEndTimer = setTimeout(() => {
        isScrolling = false;
      }, 800);
    }
    return;
  }
  
  const bounds = checkScrollBoundaries(container);
  
  // If container has scrollable content
  if (bounds.hasScroll) {
    // Can scroll within container
    if ((e.deltaY > 0 && !bounds.isAtBottom) || (e.deltaY < 0 && !bounds.isAtTop)) {
      // Let container scroll naturally - don't prevent default
      lastWheelTime = now;
      return;
    }
    
    // At boundaries
    e.preventDefault();
    if (!isScrolling && timeDiff > 300) { // Additional delay at boundaries
      if (e.deltaY > 0 && bounds.isAtBottom) {
        swiper.slideNext();
        isScrolling = true;
      } else if (e.deltaY < 0 && bounds.isAtTop) {
        swiper.slidePrev();
        isScrolling = true;
      }
      lastWheelTime = now;
      clearTimeout(scrollEndTimer);
      scrollEndTimer = setTimeout(() => {
        isScrolling = false;
      }, 800);
    }
  } else {
    // No scroll needed, just swipe
    e.preventDefault();
    if (!isScrolling) {
      if (e.deltaY > 0) {
        swiper.slideNext();
      } else if (e.deltaY < 0) {
        swiper.slidePrev();
      }
      isScrolling = true;
      lastWheelTime = now;
      clearTimeout(scrollEndTimer);
      scrollEndTimer = setTimeout(() => {
        isScrolling = false;
      }, 800);
    }
  }
}, { passive: false });

// Touch handling for mobile
let touchStartY = 0;
let touchStartScroll = 0;
let isTouchScrolling = false;

const setupTouchHandling = () => {
  swiper.slides.forEach((slide, index) => {
    const container = slide.querySelector('.skypool-container, .gourmet-container, .activities-container');
    if (!container) return;
    
    container.addEventListener('touchstart', (e) => {
      touchStartY = e.touches[0].clientY;
      touchStartScroll = container.scrollTop;
      isTouchScrolling = false;
    }, { passive: true });
    
    container.addEventListener('touchmove', (e) => {
      const touchY = e.touches[0].clientY;
      const deltaY = touchStartY - touchY;
      const bounds = checkScrollBoundaries(container);
      
      // Determine if we should scroll or swipe
      if (bounds.hasScroll) {
        if ((deltaY > 0 && !bounds.isAtBottom) || (deltaY < 0 && !bounds.isAtTop)) {
          isTouchScrolling = true;
          swiper.allowTouchMove = false;
        } else {
          swiper.allowTouchMove = true;
        }
      }
    }, { passive: true });
    
    container.addEventListener('touchend', () => {
      setTimeout(() => {
        swiper.allowTouchMove = true;
        isTouchScrolling = false;
      }, 50);
    }, { passive: true });
  });
};

setupTouchHandling();

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href').substring(1);
    const slideMap = {
      'booking': 5,
      'skypool': 1,
      'gourmet': 2,
      'activities': 3,
      'gallery': 4
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