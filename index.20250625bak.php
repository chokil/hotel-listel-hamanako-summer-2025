<?php
	$page = 'summer';
	include realpath(__DIR__.'/../config/include.php');
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Bebas+Neue&family=Playfair+Display:wght@400;700;900&display=swap" rel="stylesheet">

<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>
<!-- *** stylesheet *** -->
<link href="<?php echo echo_version(LOCATION_FILE.'css/'. $page .'.css',LOCATION_FILE_DIR);?>" rel="stylesheet" media="all">
<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_js.php"; ?>

<!-- 超モダンなデザインCSS -->
<style>
/* ===== CSS変数定義 ===== */
:root {
	/* カラーパレット - ホテルリステル浜名湖ブランドカラー */
	--primary: #1e88e5; /* メインブルー */
	--primary-dark: #0d47a1; /* 濃い青 */
	--secondary: #4fc3f7; /* 水色 */
	--accent: #29b6f6; /* 明るい青 */
	--summer-yellow: #ffd54f; /* 太陽の黄色 */
	--summer-green: #81c784; /* 夏の緑 */
	--dark: #333333; /* 濃いグレー（テキスト用） */
	--light: #FFFFFF; /* 白 */
	--bg-light: #f5f5f5; /* 薄いグレー背景 */
	--text-gray: #666666; /* グレーテキスト */
	
	/* グラデーション - 青系をメインに夏らしく */
	--gradient-primary: linear-gradient(135deg, #1e88e5 0%, #29b6f6 50%, #4fc3f7 100%);
	--gradient-secondary: linear-gradient(135deg, #0d47a1 0%, #1e88e5 100%);
	--gradient-summer: linear-gradient(135deg, #4fc3f7 0%, #ffd54f 100%);
	--gradient-mesh: radial-gradient(at 40% 20%, rgba(255, 213, 79, 0.3) 0px, transparent 50%),
					radial-gradient(at 80% 0%, rgba(79, 195, 247, 0.4) 0px, transparent 50%),
					radial-gradient(at 0% 50%, rgba(30, 136, 229, 0.3) 0px, transparent 50%),
					radial-gradient(at 80% 50%, rgba(129, 199, 132, 0.3) 0px, transparent 50%),
					radial-gradient(at 0% 100%, rgba(41, 182, 246, 0.3) 0px, transparent 50%),
					radial-gradient(at 80% 100%, rgba(30, 136, 229, 0.2) 0px, transparent 50%),
					radial-gradient(at 0% 0%, rgba(255, 255, 255, 0.8) 0px, transparent 50%);
	
	/* フォント */
	--font-primary: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
	--font-display: 'Bebas Neue', sans-serif;
	--font-accent: 'Playfair Display', serif;
	
	/* アニメーション */
	--transition-smooth: cubic-bezier(0.4, 0, 0.2, 1);
	--transition-bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}


/* ===== ベーススタイル ===== */
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

html {
	scroll-behavior: smooth;
	font-size: 16px;
}

body {
	font-family: var(--font-primary);
	background: var(--light);
	color: var(--dark);
	overflow-x: hidden;
	position: relative;
}

/* ===== カスタムカーソル ===== */
.cursor {
	width: 40px;
	height: 40px;
	border: 2px solid var(--primary);
	border-radius: 50%;
	position: fixed;
	pointer-events: none;
	z-index: 9999;
	transition: all 0.1s ease;
	transform: translate(-50%, -50%);
	mix-blend-mode: difference;
}

.cursor-dot {
	width: 8px;
	height: 8px;
	background: var(--primary);
	border-radius: 50%;
	position: fixed;
	pointer-events: none;
	z-index: 9999;
	transform: translate(-50%, -50%);
}

.cursor.hover {
	transform: translate(-50%, -50%) scale(1.5);
	background: rgba(0, 212, 255, 0.1);
}

/* ===== ローディング画面 ===== */
.loading-screen {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100vh;
	background: var(--light);
	z-index: 10000;
	display: flex;
	align-items: center;
	justify-content: center;
	transition: opacity 0.5s ease, visibility 0.5s ease;
}

.loading-screen.loaded {
	opacity: 0;
	visibility: hidden;
}

.loader {
	position: relative;
	width: 150px;
	height: 150px;
}

.loader-circle {
	position: absolute;
	width: 100%;
	height: 100%;
	border: 3px solid transparent;
	border-top-color: var(--primary);
	border-radius: 50%;
	animation: rotate 1.5s linear infinite;
}

.loader-circle:nth-child(2) {
	width: 80%;
	height: 80%;
	top: 10%;
	left: 10%;
	border-top-color: var(--secondary);
	animation-duration: 1s;
	animation-direction: reverse;
}

.loader-circle:nth-child(3) {
	width: 60%;
	height: 60%;
	top: 20%;
	left: 20%;
	border-top-color: var(--accent);
	animation-duration: 0.75s;
}

@keyframes rotate {
	100% { transform: rotate(360deg); }
}

/* ===== ヘッダー ===== */
#header {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 1000;
	backdrop-filter: blur(20px) saturate(180%);
	background: rgba(255, 255, 255, 0.9);
	border-bottom: 1px solid rgba(30, 136, 229, 0.2);
	transition: all 0.3s var(--transition-smooth);
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

#header.scrolled {
	backdrop-filter: blur(30px) saturate(200%);
	background: rgba(255, 255, 255, 0.98);
	box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

.con_head {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 1rem 2rem;
	max-width: 1400px;
	margin: 0 auto;
}

.logo img {
	height: 50px;
	transition: transform 0.3s var(--transition-bounce);
}

.logo:hover img {
	transform: scale(1.05) rotate(-2deg);
}

/* ===== ナビゲーション ===== */
#gnav {
	display: flex;
	gap: 2rem;
	list-style: none;
}

#gnav a {
	color: var(--dark);
	text-decoration: none;
	font-weight: 500;
	font-size: 0.9rem;
	letter-spacing: 0.05em;
	position: relative;
	padding: 0.5rem 0;
	transition: all 0.3s ease;
}

#gnav a::before {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	width: 0;
	height: 2px;
	background: var(--gradient-primary);
	transition: width 0.3s var(--transition-smooth);
}

#gnav a:hover::before {
	width: 100%;
}

#gnav a:hover {
	color: var(--primary);
	transform: translateY(-2px);
}

/* ===== ヒーローセクション ===== */
.hero-section {
	position: relative;
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	overflow: hidden;
	background: linear-gradient(180deg, #e3f2fd 0%, #ffffff 100%);
}

/* グラデーションメッシュ背景 */
.gradient-mesh {
	position: absolute;
	width: 200%;
	height: 200%;
	top: -50%;
	left: -50%;
	background: var(--gradient-mesh);
	animation: meshMove 20s ease-in-out infinite;
	opacity: 0.8;
}

@keyframes meshMove {
	0%, 100% { transform: translate(0, 0) rotate(0deg); }
	33% { transform: translate(-10%, -10%) rotate(120deg); }
	66% { transform: translate(10%, -10%) rotate(240deg); }
}

/* パーティクル背景 */
.particles {
	position: absolute;
	width: 100%;
	height: 100%;
	overflow: hidden;
}

.particle {
	position: absolute;
	width: 4px;
	height: 4px;
	background: var(--accent);
	border-radius: 50%;
	opacity: 0;
	animation: particleFloat 10s linear infinite;
}

@keyframes particleFloat {
	0% {
		opacity: 0;
		transform: translateY(100vh) scale(0);
	}
	10% {
		opacity: 1;
		transform: translateY(90vh) scale(1);
	}
	90% {
		opacity: 1;
		transform: translateY(10vh) scale(1);
	}
	100% {
		opacity: 0;
		transform: translateY(0) scale(0);
	}
}

/* 3Dテキスト */
.hero-title {
	font-family: var(--font-display);
	font-size: clamp(4rem, 15vw, 12rem);
	line-height: 0.9;
	letter-spacing: -0.02em;
	text-transform: uppercase;
	background: var(--gradient-primary);
	background-clip: text;
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	position: relative;
	z-index: 2;
	transform-style: preserve-3d;
	animation: floatText 6s ease-in-out infinite;
}

@keyframes floatText {
	0%, 100% { transform: translateY(0) rotateX(0) rotateY(0); }
	50% { transform: translateY(-20px) rotateX(10deg) rotateY(5deg); }
}

.hero-title::before {
	content: attr(data-text);
	position: absolute;
	left: 2px;
	top: 2px;
	z-index: -1;
	background: linear-gradient(135deg, rgba(30, 136, 229, 0.5) 0%, rgba(79, 195, 247, 0.5) 100%);
	background-clip: text;
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	filter: blur(4px);
}

/* グラスモーフィズムカード */
.glass-card {
	background: rgba(255, 255, 255, 0.8);
	backdrop-filter: blur(10px) saturate(180%);
	border: 1px solid rgba(30, 136, 229, 0.2);
	border-radius: 20px;
	padding: 2rem;
	box-shadow: 0 8px 32px rgba(30, 136, 229, 0.1);
	transition: all 0.3s var(--transition-smooth);
	position: relative;
	overflow: hidden;
}

.glass-card::before {
	content: '';
	position: absolute;
	top: -50%;
	left: -50%;
	width: 200%;
	height: 200%;
	background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
	transform: rotate(45deg);
	transition: all 0.5s ease;
	opacity: 0;
}

.glass-card:hover {
	transform: translateY(-5px);
	box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
}

.glass-card:hover::before {
	animation: shimmer 0.5s ease;
}

@keyframes shimmer {
	0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
	100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
}

/* ニューモーフィズムボタン */
.neu-button {
	background: linear-gradient(145deg, #ffffff, #f5f5f5);
	box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1), -5px -5px 15px rgba(255, 255, 255, 0.9);
	border: 1px solid rgba(30, 136, 229, 0.1);
	border-radius: 50px;
	padding: 1rem 3rem;
	color: var(--primary);
	font-weight: 600;
	letter-spacing: 0.05em;
	cursor: pointer;
	transition: all 0.3s ease;
	position: relative;
	overflow: hidden;
}

.neu-button::before {
	content: '';
	position: absolute;
	top: 50%;
	left: 50%;
	width: 0;
	height: 0;
	background: var(--gradient-primary);
	border-radius: 50%;
	transform: translate(-50%, -50%);
	transition: all 0.6s ease;
}

.neu-button:hover {
	box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1), inset -2px -2px 5px rgba(255, 255, 255, 0.9);
	color: var(--primary-dark);
	background: linear-gradient(145deg, #f5f5f5, #ffffff);
}

.neu-button:hover::before {
	width: 300px;
	height: 300px;
	opacity: 0.3;
}

/* マグネティックボタン */
.magnetic-button {
	position: relative;
	display: inline-block;
	padding: 1.2rem 3rem;
	background: var(--gradient-primary);
	color: var(--light);
	text-decoration: none;
	font-weight: 700;
	border-radius: 50px;
	overflow: hidden;
	transition: all 0.3s ease;
	box-shadow: 0 4px 15px rgba(30, 136, 229, 0.3);
}

.magnetic-button span {
	position: relative;
	z-index: 1;
}

.magnetic-button::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: var(--gradient-summer);
	transform: translateX(-100%);
	transition: transform 0.3s ease;
}

.magnetic-button:hover::before {
	transform: translateX(0);
}

/* ベントグリッドレイアウト */
.bento-grid {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	gap: 2rem;
	padding: 2rem;
}

.bento-item {
	background: rgba(255, 255, 255, 0.9);
	backdrop-filter: blur(10px);
	border: 1px solid rgba(30, 136, 229, 0.1);
	border-radius: 20px;
	padding: 2rem;
	position: relative;
	overflow: hidden;
	transition: all 0.3s ease;
	box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
}

.bento-item:nth-child(1) {
	grid-column: span 2;
	grid-row: span 2;
}

.bento-item:hover {
	transform: scale(1.02);
	background: rgba(255, 255, 255, 1);
	box-shadow: 0 8px 30px rgba(30, 136, 229, 0.2);
}

/* リキッドアニメーション */
.liquid-shape {
	position: absolute;
	width: 300px;
	height: 300px;
	background: var(--gradient-primary);
	border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
	opacity: 0.8;
	animation: liquidMorph 8s ease-in-out infinite;
}

@keyframes liquidMorph {
	0%, 100% {
		border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
		transform: rotate(0deg) scale(1);
	}
	25% {
		border-radius: 70% 30% 50% 50% / 50% 70% 30% 70%;
		transform: rotate(90deg) scale(1.1);
	}
	50% {
		border-radius: 50% 50% 30% 70% / 70% 50% 50% 30%;
		transform: rotate(180deg) scale(1);
	}
	75% {
		border-radius: 30% 70% 50% 50% / 70% 30% 70% 30%;
		transform: rotate(270deg) scale(0.9);
	}
}

/* タイプライターエフェクト */
.typewriter {
	overflow: hidden;
	border-right: 3px solid var(--primary);
	white-space: nowrap;
	animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
}

@keyframes typing {
	from { width: 0 }
	to { width: 100% }
}

@keyframes blink-caret {
	from, to { border-color: transparent }
	50% { border-color: var(--primary) }
}

/* カウンターアニメーション */
.counter {
	font-family: var(--font-display);
	font-size: 4rem;
	color: var(--primary);
	text-shadow: 0 0 20px rgba(0, 212, 255, 0.5);
}

/* SVGパスアニメーション */
.svg-path {
	stroke-dasharray: 1000;
	stroke-dashoffset: 1000;
	animation: drawPath 2s ease forwards;
}

@keyframes drawPath {
	to { stroke-dashoffset: 0; }
}

/* スクロールプログレス */
.scroll-progress {
	position: fixed;
	top: 0;
	left: 0;
	width: 0%;
	height: 3px;
	background: var(--gradient-primary);
	z-index: 10000;
	transition: width 0.1s ease;
}

/* フローティングナビゲーション */
.floating-nav {
	position: fixed;
	bottom: 2rem;
	left: 50%;
	transform: translateX(-50%);
	background: rgba(255, 255, 255, 0.95);
	backdrop-filter: blur(20px);
	border: 1px solid rgba(30, 136, 229, 0.2);
	border-radius: 50px;
	padding: 1rem 2rem;
	display: flex;
	gap: 2rem;
	box-shadow: 0 5px 25px rgba(30, 136, 229, 0.2);
	z-index: 999;
}

.floating-nav a {
	color: var(--dark);
	text-decoration: none;
	transition: all 0.3s ease;
	position: relative;
}

.floating-nav a::after {
	content: '';
	position: absolute;
	bottom: -5px;
	left: 50%;
	transform: translateX(-50%);
	width: 5px;
	height: 5px;
	background: var(--primary);
	border-radius: 50%;
	opacity: 0;
	transition: all 0.3s ease;
}

.floating-nav a:hover::after,
.floating-nav a.active::after {
	opacity: 1;
}

/* ホログラフィック効果 */
.holographic {
	position: relative;
	background: linear-gradient(45deg, #1e88e5, #29b6f6, #4fc3f7, #ffd54f, #81c784, #29b6f6, #1e88e5);
	background-size: 400% 400%;
	animation: holographicShift 3s ease infinite;
	background-clip: text/;
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}

@keyframes holographicShift {
	0%, 100% { background-position: 0% 50%; }
	50% { background-position: 100% 50%; }
}

/* ウォーターエフェクト */
.water-effect {
	position: relative;
	overflow: hidden;
}

.water-effect::before,
.water-effect::after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	width: 200%;
	height: 100px;
	background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%234fc3f7" opacity="0.3"></path></svg>') repeat-x;
	animation: wave 10s linear infinite;
}

.water-effect::after {
	bottom: 10px;
	opacity: 0.5;
	animation-duration: 15s;
	animation-direction: reverse;
}

@keyframes wave {
	0% { transform: translateX(0); }
	100% { transform: translateX(-50%); }
}

/* サンフレアエフェクト */
.sun-flare {
	position: absolute;
	width: 200px;
	height: 200px;
	background: radial-gradient(circle, rgba(255, 213, 79, 0.6) 0%, rgba(255, 213, 79, 0.3) 30%, transparent 70%);
	border-radius: 50%;
	filter: blur(20px);
	animation: flareGlow 4s ease-in-out infinite;
}

@keyframes flareGlow {
	0%, 100% { transform: scale(1); opacity: 0.6; }
	50% { transform: scale(1.2); opacity: 1; }
}

/* バブルアニメーション */
.bubble {
	position: absolute;
	background: radial-gradient(circle, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.1) 70%);
	border-radius: 50%;
	opacity: 0.6;
	animation: bubbleRise 8s ease-in-out infinite;
}

@keyframes bubbleRise {
	0% {
		transform: translateY(100vh) scale(0);
		opacity: 0;
	}
	10% {
		opacity: 0.6;
	}
	90% {
		opacity: 0.6;
	}
	100% {
		transform: translateY(-100vh) scale(1.5);
		opacity: 0;
	}
}

/* レスポンシブ対応 */
@media (max-width: 768px) {
	.hero-title {
		font-size: clamp(3rem, 12vw, 6rem);
	}
	
	.bento-grid {
		grid-template-columns: 1fr;
		gap: 1rem;
		padding: 1rem;
	}
	
	.bento-item:nth-child(1) {
		grid-column: span 1;
		grid-row: span 1;
	}
	
	#gnav {
		display: none;
	}
	
	.floating-nav {
		bottom: 1rem;
		padding: 0.75rem 1.5rem;
		gap: 1rem;
		font-size: 0.875rem;
	}
}

/* パフォーマンス最適化 */
.will-change-transform {
	will-change: transform;
}

.will-change-opacity {
	will-change: opacity;
}

.gpu-accelerated {
	transform: translateZ(0);
	backface-visibility: hidden;
}
</style>

<script>
// グローバル変数
let mouseX = 0;
let mouseY = 0;

document.addEventListener("DOMContentLoaded", function() {
	// ローディング画面
	setTimeout(() => {
		document.querySelector('.loading-screen').classList.add('loaded');
	}, 2000);
	
	// カスタムカーソル
	const cursor = document.createElement('div');
	cursor.className = 'cursor';
	const cursorDot = document.createElement('div');
	cursorDot.className = 'cursor-dot';
	document.body.appendChild(cursor);
	document.body.appendChild(cursorDot);
	
	document.addEventListener('mousemove', (e) => {
		mouseX = e.clientX;
		mouseY = e.clientY;
		
		cursor.style.left = mouseX + 'px';
		cursor.style.top = mouseY + 'px';
		cursorDot.style.left = mouseX + 'px';
		cursorDot.style.top = mouseY + 'px';
	});
	
	// ホバー効果
	const hoverElements = document.querySelectorAll('a, button, .magnetic-button');
	hoverElements.forEach(el => {
		el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
		el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
	});
	
	// マグネティックボタン効果
	const magneticButtons = document.querySelectorAll('.magnetic-button');
	magneticButtons.forEach(button => {
		button.addEventListener('mousemove', (e) => {
			const rect = button.getBoundingClientRect();
			const x = e.clientX - rect.left - rect.width / 2;
			const y = e.clientY - rect.top - rect.height / 2;
			
			button.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
		});
		
		button.addEventListener('mouseleave', () => {
			button.style.transform = 'translate(0, 0)';
		});
	});
	
	// スクロールプログレス
	const scrollProgress = document.createElement('div');
	scrollProgress.className = 'scroll-progress';
	document.body.appendChild(scrollProgress);
	
	window.addEventListener('scroll', () => {
		const scrollTop = window.pageYOffset;
		const docHeight = document.documentElement.scrollHeight - window.innerHeight;
		const scrollPercent = (scrollTop / docHeight) * 100;
		scrollProgress.style.width = scrollPercent + '%';
		
		// ヘッダーのスクロール効果
		const header = document.getElementById('header');
		if (scrollTop > 50) {
			header.classList.add('scrolled');
		} else {
			header.classList.remove('scrolled');
		}
	});
	
	// パーティクル生成
	function createParticle() {
		const particle = document.createElement('div');
		particle.className = 'particle';
		particle.style.left = Math.random() * window.innerWidth + 'px';
		particle.style.animationDelay = Math.random() * 10 + 's';
		particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
		document.querySelector('.particles').appendChild(particle);
		
		setTimeout(() => particle.remove(), 20000);
	}
	
	// パーティクルを定期的に生成
	setInterval(createParticle, 500);
	
	// バブル生成
	function createBubble() {
		const bubble = document.createElement('div');
		bubble.className = 'bubble';
		const size = Math.random() * 60 + 20;
		bubble.style.width = size + 'px';
		bubble.style.height = size + 'px';
		bubble.style.left = Math.random() * window.innerWidth + 'px';
		bubble.style.animationDelay = Math.random() * 5 + 's';
		bubble.style.animationDuration = (Math.random() * 5 + 8) + 's';
		document.querySelector('.water-section').appendChild(bubble);
		
		setTimeout(() => bubble.remove(), 13000);
	}
	
	// カウンターアニメーション
	function animateCounter(element, target, duration = 2000) {
		const start = 0;
		const increment = target / (duration / 16);
		let current = start;
		
		const updateCounter = () => {
			current += increment;
			if (current < target) {
				element.textContent = Math.floor(current);
				requestAnimationFrame(updateCounter);
			} else {
				element.textContent = target;
			}
		};
		
		updateCounter();
	}
	
	// Intersection Observer for animations
	const observerOptions = {
		threshold: 0.1,
		rootMargin: '0px 0px -100px 0px'
	};
	
	const observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('animate-in');
				
				// カウンターアニメーション
				if (entry.target.classList.contains('counter')) {
					const target = parseInt(entry.target.getAttribute('data-target'));
					animateCounter(entry.target, target);
				}
			}
		});
	}, observerOptions);
	
	// アニメーション要素を監視
	document.querySelectorAll('.animate-on-scroll').forEach(el => {
		observer.observe(el);
	});
	
	// スムーススクロール
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function(e) {
			e.preventDefault();
			const target = document.querySelector(this.getAttribute('href'));
			if (target) {
				const headerHeight = document.getElementById('header').offsetHeight;
				const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
				
				window.scrollTo({
					top: targetPosition,
					behavior: 'smooth'
				});
			}
		});
	});
	
	// GSAP風のアニメーション実装
	function parallaxEffect() {
		const scrolled = window.pageYOffset;
		const parallaxElements = document.querySelectorAll('.parallax');
		
		parallaxElements.forEach(el => {
			const speed = el.getAttribute('data-speed') || 0.5;
			const yPos = -(scrolled * speed);
			el.style.transform = `translateY(${yPos}px)`;
		});
	}
	
	window.addEventListener('scroll', parallaxEffect);
	
	// タイプライター効果
	function typeWriter(element, text, speed = 100) {
		let i = 0;
		element.textContent = '';
		
		function type() {
			if (i < text.length) {
				element.textContent += text.charAt(i);
				i++;
				setTimeout(type, speed);
			}
		}
		
		type();
	}
	
	// ページロード時のアニメーション
	window.addEventListener('load', () => {
		// タイトルアニメーション
		const heroTitle = document.querySelector('.hero-title');
		if (heroTitle) {
			heroTitle.style.opacity = '0';
			heroTitle.style.transform = 'translateY(50px)';
			
			setTimeout(() => {
				heroTitle.style.transition = 'all 1s cubic-bezier(0.4, 0, 0.2, 1)';
				heroTitle.style.opacity = '1';
				heroTitle.style.transform = 'translateY(0)';
			}, 500);
		}
	});
});

// パフォーマンス最適化：requestAnimationFrame使用
let ticking = false;
function requestTick() {
	if (!ticking) {
		requestAnimationFrame(updateAnimations);
		ticking = true;
	}
}

function updateAnimations() {
	// アニメーション更新処理
	ticking = false;
}

window.addEventListener('scroll', requestTick);
window.addEventListener('resize', requestTick);
</script>
</head>

<body id="<?php echo $page; ?>">
<?php include LOCATION_ROOT_DIR."/templates/gtm.php"; ?>

<!-- ローディング画面 -->
<div class="loading-screen">
	<div class="loader">
		<div class="loader-circle"></div>
		<div class="loader-circle"></div>
		<div class="loader-circle"></div>
	</div>
</div>

<div id="abi_page">

	<!-- ヘッダー -->
	<header id="header">
		<div class="con_head">
			<p class="logo">
				<a href="<?php echo LOCATION; ?>" class="over">
					<img src="<?php echo LOCATION_FILE; ?>images/header/logo.png" alt="<?php echo $meta['h1']; ?>">
				</a>
			</p>
			<nav class="view_pc-tab">
				<ul id="gnav">
					<li><a href="#section-pool">Sky Pool</a></li>
					<li><a href="#section-marine">Marine Activity</a></li>
					<li><a href="#section-cuisine">Summer Cuisine</a></li>
					<li><a href="#section-plans">Special Plans</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main id="contents">

		<!-- ヒーローセクション -->
		<section class="hero-section">
			<div class="gradient-mesh"></div>
			<div class="particles"></div>
			
			<div class="hero-content">
				<h1 class="hero-title animate-on-scroll" data-text="SUMMER 2025">
					SUMMER 2025
				</h1>
				<p class="hero-subtitle typewriter" style="color: var(--dark);">
					浜名湖で過ごす、特別な夏の体験
				</p>
				
				<div class="glass-card animate-on-scroll" style="max-width: 600px; margin: 2rem auto;">
					<h2 class="holographic" style="font-size: 2rem; margin-bottom: 1rem;">
						SKYPOOL OPEN
					</h2>
					<p style="font-size: 1.2rem; margin-bottom: 2rem; color: var(--dark);">
						2025.6.28 Grand Opening
					</p>
					
					<!-- カウントダウン -->
					<div class="countdown-container" style="display: flex; justify-content: center; gap: 2rem;">
						<div class="countdown-item">
							<div class="counter" data-target="0" id="days">0</div>
							<div style="color: var(--text-gray);">DAYS</div>
						</div>
						<div class="countdown-item">
							<div class="counter" data-target="0" id="hours">0</div>
							<div style="color: var(--text-gray);">HOURS</div>
						</div>
						<div class="countdown-item">
							<div class="counter" data-target="0" id="minutes">0</div>
							<div style="color: var(--text-gray);">MINUTES</div>
						</div>
						<div class="countdown-item">
							<div class="counter" data-target="0" id="seconds">0</div>
							<div style="color: var(--text-gray);">SECONDS</div>
						</div>
					</div>
					
					<div style="margin-top: 2rem;">
						<a href="#section-plans" class="magnetic-button">
							<span>特別プランを見る</span>
						</a>
					</div>
				</div>
			</div>
			
			<!-- サンフレア -->
			<div class="sun-flare" style="top: 10%; right: 10%;"></div>
		</section>

		<!-- スカイプールセクション -->
		<section id="section-pool" class="section-container" style="position: relative; padding: 100px 0; background: #f5f5f5;">
			<div class="liquid-shape" style="top: -100px; right: -100px;"></div>
			
			<div class="section-header animate-on-scroll">
				<h2 class="section-title holographic" style="font-family: var(--font-display); font-size: 4rem; text-align: center;">
					ROOFTOP SKY POOL
				</h2>
				<p style="text-align: center; font-size: 1.2rem; margin-top: 1rem; color: var(--text-gray);">
					浜名湖を一望する、天空のプール体験
				</p>
			</div>
			
			<div class="bento-grid" style="max-width: 1200px; margin: 0 auto;">
				<div class="bento-item animate-on-scroll">
					<img src="images/img_osusume_spot01.jpg" alt="スカイプール" style="width: 100%; border-radius: 10px;">
					<h3 style="font-size: 2rem; margin: 1rem 0; color: var(--primary-dark);">
						絶景の屋上プール
					</h3>
					<p style="line-height: 1.8; color: var(--text-gray);">
						地上40mから浜名湖を一望。まるで空に浮かんでいるような感覚を味わえる、特別なプール体験をお楽しみください。
					</p>
					<div style="margin-top: 2rem;">
						<div class="glass-card" style="display: inline-block;">
							<p><strong>営業期間</strong></p>
							<p>6/28〜7/18 土日のみ</p>
							<p>7/19〜8/31 毎日営業</p>
						</div>
					</div>
				</div>
				
				<div class="bento-item animate-on-scroll">
					<h4 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--primary-dark);">宿泊者限定特典</h4>
					<ul style="list-style: none; color: var(--text-gray);">
						<li>✓ プール利用無料</li>
						<li>✓ タオル無料レンタル</li>
						<li>✓ ウェルカムドリンク</li>
					</ul>
				</div>
				
				<div class="bento-item animate-on-scroll">
					<h4 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--primary-dark);">設備情報</h4>
					<ul style="list-style: none; color: var(--text-gray);">
						<li>✓ 温水プール完備</li>
						<li>✓ ジャグジー併設</li>
						<li>✓ プールサイドバー</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- マリンアクティビティセクション -->
		<section id="section-marine" class="section-container water-section" style="position: relative; padding: 100px 0; background: linear-gradient(180deg, #e3f2fd 0%, #bbdefb 100%);">
			<div class="water-effect"></div>
			
			<div class="section-header animate-on-scroll">
				<h2 class="section-title" style="font-family: var(--font-display); font-size: 4rem; text-align: center; color: var(--primary-dark);">
					MARINE ACTIVITIES
				</h2>
				<p style="text-align: center; font-size: 1.2rem; margin-top: 1rem; color: var(--text-gray);">
					浜名湖で楽しむ、最高のマリン体験
				</p>
			</div>
			
			<div class="activities-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 3rem; max-width: 1200px; margin: 3rem auto; padding: 0 2rem;">
				<!-- SUP体験 -->
				<div class="glass-card animate-on-scroll" style="position: relative; overflow: hidden;">
					<div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: var(--gradient-primary); border-radius: 50%; opacity: 0.2;"></div>
					<img src="images/img_activity01.jpg" alt="SUP体験" style="width: 100%; border-radius: 10px; margin-bottom: 1rem;">
					<h3 style="font-size: 1.8rem; margin-bottom: 1rem; color: var(--primary-dark);">SUP Experience</h3>
					<p style="margin-bottom: 1rem; color: var(--text-gray);">
						穏やかな浜名湖の上を、SUPボードで優雅にクルージング。初心者でも安心のレッスン付き。
					</p>
					<div class="neu-button" style="display: inline-block;">
						詳細を見る
					</div>
				</div>
				
				<!-- カヌー体験 -->
				<div class="glass-card animate-on-scroll" style="position: relative; overflow: hidden;">
					<div style="position: absolute; top: -50px; left: -50px; width: 150px; height: 150px; background: var(--gradient-summer); border-radius: 50%; opacity: 0.2;"></div>
					<img src="images/img_activity02.jpg" alt="アウトリガーカヌー" style="width: 100%; border-radius: 10px; margin-bottom: 1rem;">
					<h3 style="font-size: 1.8rem; margin-bottom: 1rem; color: var(--primary-dark);">Outrigger Canoe</h3>
					<p style="margin-bottom: 1rem; color: var(--text-gray);">
						安定性抜群のアウトリガーカヌーで、家族みんなで楽しめる湖上散歩。
					</p>
					<div class="neu-button" style="display: inline-block;">
						詳細を見る
					</div>
				</div>
			</div>
		</section>

		<!-- 夏の料理セクション -->
		<section id="section-cuisine" class="section-container" style="position: relative; padding: 100px 0; background: #ffffff;">
			<div class="section-header animate-on-scroll">
				<h2 class="section-title holographic" style="font-family: var(--font-display); font-size: 4rem; text-align: center;">
					SUMMER CUISINE
				</h2>
				<p style="text-align: center; font-size: 1.2rem; margin-top: 1rem; color: var(--text-gray);">
					浜名湖の恵みを味わう、夏の特別メニュー
				</p>
			</div>
			
			<div style="max-width: 1200px; margin: 3rem auto; padding: 0 2rem;">
				<div class="glass-card animate-on-scroll" style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
					<div>
						<h3 style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--primary-dark);">
							浜名湖産うなぎ
						</h3>
						<p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem; color: var(--text-gray);">
							地元浜名湖で獲れた新鮮なうなぎを、伝統の技法で丁寧に焼き上げました。
							夏バテ防止にも最適な、スタミナ満点の逸品です。
						</p>
						<div class="magnetic-button">
							<span>メニューを見る</span>
						</div>
					</div>
					<div class="parallax" data-speed="0.5">
						<img src="images/img_slide_stay01-01.jpg" alt="夏の料理" style="width: 100%; border-radius: 20px;">
					</div>
				</div>
			</div>
		</section>

		<!-- 宿泊プランセクション -->
		<section id="section-plans" class="section-container" style="position: relative; padding: 100px 0; background: linear-gradient(180deg, #f5f5f5 0%, #e1f5fe 100%);">
			<div class="section-header animate-on-scroll">
				<h2 class="section-title" style="font-family: var(--font-display); font-size: 4rem; text-align: center; background: var(--gradient-primary); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
					SPECIAL PLANS
				</h2>
				<p style="text-align: center; font-size: 1.2rem; margin-top: 1rem; color: var(--text-gray);">
					この夏だけの特別な宿泊プラン
				</p>
			</div>
			
			<div class="plans-container" style="max-width: 1200px; margin: 3rem auto; padding: 0 2rem;">
				<!-- メインプラン -->
				<div class="glass-card animate-on-scroll" style="margin-bottom: 3rem; position: relative; overflow: hidden;">
					<div class="liquid-shape" style="width: 200px; height: 200px; top: -100px; right: -100px; opacity: 0.2;"></div>
					<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
						<div>
							<div style="display: inline-block; background: var(--gradient-summer); padding: 0.5rem 1rem; border-radius: 50px; margin-bottom: 1rem;">
								<span style="color: var(--light); font-weight: bold;">期間限定</span>
							</div>
							<h3 style="font-size: 2rem; margin-bottom: 1rem; color: var(--primary-dark);">
								スカイプール＆浜名湖産うなぎ付き<br>
								バイキング2食付きプラン
							</h3>
							<p style="line-height: 1.8; margin-bottom: 2rem; color: var(--text-gray);">
								屋上スカイプール利用付きの特別プラン。プールで遊び、温泉で癒され、美食を堪能する、最高の夏休みをお約束します。
							</p>
							<a href="https://go-listel.reservation.jp/ja/hotels/listel-hamanako/plans/10127450" target="_blank" class="magnetic-button">
								<span>このプランを予約</span>
							</a>
						</div>
						<div>
							<img src="images/img_picup_plan.jpg" alt="プランイメージ" style="width: 100%; border-radius: 20px;">
						</div>
					</div>
				</div>
				
				<!-- その他のプラン -->
				<div class="bento-grid">
					<div class="bento-item animate-on-scroll">
						<img src="images/img_osusume_plan01.jpg" alt="プラン1" style="width: 100%; border-radius: 10px; margin-bottom: 1rem;">
						<h4 style="margin-bottom: 1rem; color: var(--primary-dark);">尾奈駅ネーミングライツ1周年記念プラン</h4>
						<a href="https://go-listel.reservation.jp/ja/hotels/listel-hamanako/plans/10116808" target="_blank" class="neu-button">
							詳細を見る
						</a>
					</div>
					
					<div class="bento-item animate-on-scroll">
						<img src="images/img_osusume_plan02.jpg" alt="プラン2" style="width: 100%; border-radius: 10px; margin-bottom: 1rem;">
						<h4 style="margin-bottom: 1rem; color: var(--primary-dark);">グレードアップ客室プラン</h4>
						<a href="https://go-listel.reservation.jp/ja/hotels/listel-hamanako/plans/10114156" target="_blank" class="neu-button">
							詳細を見る
						</a>
					</div>
					
					<div class="bento-item animate-on-scroll">
						<img src="images/img_osusume_plan03.jpg" alt="プラン3" style="width: 100%; border-radius: 10px; margin-bottom: 1rem;">
						<h4 style="margin-bottom: 1rem; color: var(--primary-dark);">地魚のお造り七点盛りプラン</h4>
						<a href="https://go-listel.reservation.jp/ja/hotels/listel-hamanako/plans/10114160" target="_blank" class="neu-button">
							詳細を見る
						</a>
					</div>
				</div>
			</div>
		</section>

	</main>

	<!-- フッター -->
	<footer id="footer" style="background: var(--primary-dark); padding: 3rem 0; text-align: center; color: var(--light);">
		<div class="con_footer">
			<p class="logo">
				<a href="<?php echo LOCATION; ?>">
					<img src="<?php echo LOCATION . $page ?>/images/logo.png" alt="<?php echo hotel_name_en; ?>" style="filter: brightness(0) invert(1);">
				</a>
			</p>
			<address style="margin: 2rem 0; font-style: normal;">
				<em style="font-size: 1.2rem;"><?php echo hotel_name; ?></em><br>
				<span><?php echo address_num; ?> <?php echo address_txt; ?></span><br>
				<span style="font-size: 1.2rem; margin-top: 1rem; display: block;">Tel.<?php echo LOCATION_TEL; ?></span>
			</address>
			<p id="copyright" style="opacity: 0.6;">&copy; HOTEL LISTEL HAMANAKO All Rights Reserved</p>
		</div>
	</footer>

	<!-- フローティングナビゲーション -->
	<nav class="floating-nav">
		<a href="#section-pool" class="active">Pool</a>
		<a href="#section-marine">Marine</a>
		<a href="#section-cuisine">Cuisine</a>
		<a href="#section-plans">Plans</a>
		<a href="#abi_page">TOP</a>
	</nav>

</div>

<script>
// カウントダウンタイマー
function updateCountdown() {
	const targetDate = new Date('2025-06-28T00:00:00+09:00');
	const now = new Date();
	const difference = targetDate - now;
	
	if (difference > 0) {
		const days = Math.floor(difference / (1000 * 60 * 60 * 24));
		const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
		const seconds = Math.floor((difference % (1000 * 60)) / 1000);
		
		document.getElementById('days').textContent = days;
		document.getElementById('days').setAttribute('data-target', days);
		document.getElementById('hours').textContent = hours;
		document.getElementById('hours').setAttribute('data-target', hours);
		document.getElementById('minutes').textContent = minutes;
		document.getElementById('minutes').setAttribute('data-target', minutes);
		document.getElementById('seconds').textContent = seconds;
		document.getElementById('seconds').setAttribute('data-target', seconds);
	}
}

setInterval(updateCountdown, 1000);
updateCountdown();

// フローティングナビゲーションのアクティブ状態
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.floating-nav a');

window.addEventListener('scroll', () => {
	let current = '';
	
	sections.forEach(section => {
		const sectionTop = section.offsetTop;
		const sectionHeight = section.clientHeight;
		if (pageYOffset >= sectionTop - 200) {
			current = section.getAttribute('id');
		}
	});
	
	navLinks.forEach(link => {
		link.classList.remove('active');
		if (link.getAttribute('href').substring(1) === current) {
			link.classList.add('active');
		}
	});
});

// バブル生成（水のセクション）
const waterSection = document.querySelector('.water-section');
if (waterSection) {
	setInterval(() => {
		createBubble();
	}, 2000);
}

// slickスライダーの初期化
document.addEventListener("DOMContentLoaded", function() {
	if (typeof jQuery !== 'undefined' && jQuery.fn.slick) {
		jQuery('.c_slider').slick({
			dots: true,
			infinite: true,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: false,
			fade: true,
			cssEase: 'cubic-bezier(0.4, 0, 0.2, 1)'
		});
	}
});
</script>

</body>
</html>