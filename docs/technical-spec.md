# 技術仕様書 - スワイプ型LP

## 1. 基本アーキテクチャ

### フレームワーク選定
- **Vanilla JavaScript** + **CSS3**
- ライブラリ最小限使用でパフォーマンス最適化
- 必要に応じて**Intersection Observer API**活用

### ブラウザ対応
- Chrome (最新2バージョン)
- Safari (最新2バージョン)
- Firefox (最新2バージョン)
- Edge (最新2バージョン)
- iOS Safari 14+
- Android Chrome 90+

## 2. スワイプ実装仕様

### デスクトップ版
```javascript
// マウスホイールイベント
- スクロール量閾値: 50px
- アニメーション時間: 800ms
- イージング: cubic-bezier(0.4, 0, 0.2, 1)
- スクロール防止期間: 1000ms
```

### モバイル版
```javascript
// タッチイベント
- スワイプ検知閾値: 50px
- スワイプ速度: 0.3s以内
- 縦スワイプのみ検知
- 慣性スクロール無効化
```

### 実装方法
```css
/* セクション基本構造 */
.section {
  height: 100vh;
  width: 100%;
  position: relative;
  overflow: hidden;
}

/* スナップスクロール */
.container {
  scroll-snap-type: y mandatory;
  scroll-behavior: smooth;
}

.section {
  scroll-snap-align: start;
}
```

## 3. YouTube動画埋め込み仕様

### 埋め込みコード
```html
<!-- Facade Pattern で初期読み込み最適化 -->
<div class="youtube-container" data-video-id="uRp_W_8wRYk">
  <div class="youtube-thumbnail">
    <img src="thumbnail.jpg" alt="動画サムネイル" loading="lazy">
    <button class="play-button" aria-label="動画を再生"></button>
  </div>
</div>
```

### 自動再生設定
```javascript
// YouTube IFrame API
playerVars: {
  autoplay: 1,
  mute: 1,
  controls: 0,
  loop: 1,
  playlist: 'uRp_W_8wRYk',
  playsinline: 1,
  rel: 0,
  showinfo: 0
}
```

### モバイル対応
- 自動再生はミュート必須
- データセーバーモード検知
- WiFi環境でのみ自動読み込み

## 4. パフォーマンス最適化

### 画像最適化
```html
<!-- レスポンシブ画像 -->
<picture>
  <source srcset="image-mobile.webp" media="(max-width: 768px)" type="image/webp">
  <source srcset="image-desktop.webp" media="(min-width: 769px)" type="image/webp">
  <img src="image-fallback.jpg" alt="説明" loading="lazy">
</picture>
```

### Critical CSS
```css
/* インライン化する重要CSS */
- フォント定義
- 初期表示セクション
- ローディング画面
- 基本レイアウト
```

### JavaScript最適化
```javascript
// 遅延読み込み
- セクション毎にコンテンツを動的読み込み
- Intersection Observerで可視判定
- 次セクションの先読み込み
```

## 5. アニメーション仕様

### 基本トランジション
```css
/* GPU加速を使用 */
.animate-element {
  will-change: transform, opacity;
  transform: translateZ(0); /* Layer作成 */
}

/* パララックス効果 */
.parallax-bg {
  transform: translateY(calc(var(--scroll-progress) * -30%));
}
```

### セクション遷移
```javascript
// タイムライン
0ms    - フェードアウト開始
400ms  - スクロール開始
800ms  - スクロール完了
1000ms - フェードイン完了
```

### 波形アニメーション
```svg
<!-- SVGアニメーション -->
<svg class="wave-transition">
  <path d="M0,100 Q250,50 500,100 T1000,100">
    <animate attributeName="d" 
      values="M0,100 Q250,50 500,100 T1000,100;
              M0,100 Q250,150 500,100 T1000,100;
              M0,100 Q250,50 500,100 T1000,100"
      dur="3s" repeatCount="indefinite"/>
  </path>
</svg>
```

## 6. レスポンシブ設計

### ブレークポイント
```scss
$mobile: 480px;
$tablet: 768px;
$desktop: 1024px;
$wide: 1440px;
```

### ビューポート対応
```css
/* セーフエリア対応 */
.section {
  padding: env(safe-area-inset-top) env(safe-area-inset-right) 
           env(safe-area-inset-bottom) env(safe-area-inset-left);
}
```

## 7. 状態管理

### セクション管理
```javascript
const sectionState = {
  current: 0,
  total: 7,
  isAnimating: false,
  visited: new Set(),
  
  // メソッド
  goToSection(index) {},
  nextSection() {},
  prevSection() {},
  updateProgress() {}
};
```

### イベント管理
```javascript
// カスタムイベント
window.dispatchEvent(new CustomEvent('sectionChange', {
  detail: { from: 0, to: 1 }
}));
```

## 8. SEO対策

### 構造化データ
```json
{
  "@context": "https://schema.org",
  "@type": "Hotel",
  "name": "ホテルリステル浜名湖",
  "description": "浜名湖のリゾートホテル",
  "url": "https://www.listel-hamanako.jp/"
}
```

### メタタグ最適化
```html
<meta property="og:title" content="夏の特別プラン | ホテルリステル浜名湖">
<meta property="og:description" content="2025年夏、スカイプールOPEN">
<meta property="og:image" content="og-image.jpg">
<meta property="og:video" content="https://youtube.com/shorts/uRp_W_8wRYk">
```

## 9. アクセシビリティ

### キーボードナビゲーション
```javascript
// キーボードショートカット
ArrowDown / Space: 次のセクション
ArrowUp: 前のセクション
Home: 最初のセクション
End: 最後のセクション
Tab: フォーカス移動
```

### ARIA属性
```html
<main role="main" aria-label="メインコンテンツ">
  <section aria-label="セクション1: オープニング">
    <h2 id="section1-title">涼やかな風が吹く浜名湖</h2>
  </section>
</main>
```

## 10. エラーハンドリング

### フォールバック
- 動画読み込み失敗時は静止画表示
- WebP非対応時はJPEG表示
- JavaScript無効時は通常スクロール

### プログレッシブエンハンスメント
1. 基本: 通常の縦スクロール
2. 拡張: スナップスクロール
3. 完全: フルアニメーション体験