<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kaleidoのポートフォリオサイト">
    <meta property="og:title" content="KIT eSports Project" />
    <meta property="og:description" content="Kaleidoのポートフォリオサイト" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@kaleidoweb" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/variables.css">
    <title>kaleidoweb｜カレイドウェブ</title>
</head>
<body>
    <?php include 'parts/header.php'; ?>
    <main>
        <div class="hero-section">
            <p class="hero-text-en">MY WORK, IN ONE PLACE</p>
            <p class="hero-text-ja">これは Kaleido のポートフォリオサイトです。今まで作ったものをまとめています。</p>
        </div>

        <div class="works-tree">
            <div class="section-head tree-root">
                <h2>Works</h2>
                <nav class="category-tabs">
                    <a href="#works-web" class="tab-link">Web</a>
                    <a href="#works-image" class="tab-link">Image</a>
                    <a href="#works-video" class="tab-link">Video</a>
                </nav>
            </div>

            <section id="works-web" class="works-section">
                <h2 class="section-title">Web</h2>
                <ul class="card-list">
                    <li>
                        <a href="works/web/kiten_hp.php" class="work-card">
                            <div class="card-thumb">
                                <img src="images/kiten_hp.png" alt="「KIT eSports Project」ホームページ">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">「KIT eSports Project」ホームページ</h3>
                                    <time class="card-date">2025.10</time>
                                </div>
                                <ul class="card-tags">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="work-card">
                            <div class="card-thumb">
                                <img src="images/oxquiz.png" alt="よくある間違い〇✕クイズ">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">よくある間違い〇✕クイズ</h3>
                                    <time class="card-date">2025.08 - Now</time>
                                </div>
                                <ul class="card-tags">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                    <li>PHP</li>
                                    <li>SQL</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="work-card">
                            <div class="card-thumb">
                                <img src="images/himenoyu.png" alt="比咩の湯">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">比咩の湯</h3>
                                    <time class="card-date">2025.04</time>
                                </div>
                                <ul class="card-tags">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>WordPress</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>

            <section id="works-image" class="works-section">
                <h2 class="section-title">Image</h2>
                <ul class="card-list">
                    <li>
                        <a href="images/ssbu.png" class="work-card" target="_blank" rel="noopener noreferrer">
                            <div class="card-thumb">
                                <img src="images/ssbu.png" alt="工大祭スマブラ大会VPサムネイル">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">工大祭スマブラ大会VPサムネイル</h3>
                                    <time class="card-date">2025.09</time>
                                </div>
                                <ul class="card-tags">
                                    <li>Photoshop</li>
                                    <li>Illustrator</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="images/kiten_logo.png" class="work-card" target="_blank" rel="noopener noreferrer">
                            <div class="card-thumb">
                                <img src="images/kiten_logo.png" alt="「KIT eSports Project」ロゴ">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">「KIT eSports Project」ロゴ</h3>
                                    <time class="card-date">2025.06</time>
                                </div>
                                <ul class="card-tags">
                                    <li>Illustrator</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="images/meishi.png" class="work-card" target="_blank" rel="noopener noreferrer">
                            <div class="card-thumb">
                                <img src="images/meishi.png" alt="「KIT eSports Project」名刺">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">「KIT eSports Project」名刺</h3>
                                    <time class="card-date">2025.02</time>
                                </div>
                                <ul class="card-tags">
                                    <li>Photoshop</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>

            <section id="works-video" class="works-section">
                <h2 class="section-title">Video</h2>
                <ul class="card-list">
                    <li>
                        <a href="#" class="work-card" target="_blank" rel="noopener">
                            <div class="card-thumb">
                                <img src="images/no-image.webp" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">サンプル動画タイトル 01</h3>
                                    <time class="card-date">2025.11</time>
                                </div>
                                <ul class="card-tags">
                                    <li>Premiere Pro</li>
                                    <li>After Effects</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="work-card" target="_blank" rel="noopener">
                            <div class="card-thumb">
                                <img src="images/no-image.webp" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">サンプル動画タイトル 02</h3>
                                    <time class="card-date">2025.07</time>
                                </div>
                                <ul class="card-tags">
                                    <li>Premiere Pro</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="work-card" target="_blank" rel="noopener">
                            <div class="card-thumb">
                                <img src="images/no-image.webp" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-meta">
                                    <h3 class="card-title">サンプル動画タイトル 03</h3>
                                    <time class="card-date">2025.03</time>
                                </div>
                                <ul class="card-tags">
                                    <li>Premiere Pro</li>
                                    <li>After Effects</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </main>
    <?php include 'parts/footer.php'; ?>
</body>
</html>