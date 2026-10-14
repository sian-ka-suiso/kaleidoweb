<?php
$base = '../';
$current = 'works';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kaleido's Portfolio Site">
    <meta property="og:title" content="Kaleido Web" />
    <meta property="og:description" content="Kaleido's Portfolio Site" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@kaleidoweb" />
    <link rel="icon" type="image/x-icon" href="<?= $base ?>images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>css/common.css">
    <link rel="stylesheet" href="<?= $base ?>css/works-sub.css">
    <link rel="stylesheet" href="<?= $base ?>css/variables.css">
    <title>〇〇｜Kaleido's Portfolio Site</title>
</head>
<body>
    <canvas id="electron-bg"></canvas>
    <?php include __DIR__ . '/../parts/header.php'; ?>
    <main>
        <section>
            <div class="page-header">
                <div class="work-header">
                    <h1>〇〇（作品名）</h1>
                    <span class="work-period">YYYY.MM - Present</span><!-- 終了している場合は YYYY.MM - YYYY.MM -->
                </div>
                <div class="tech-stack">HTML, CSS, JavaScript</div>
            </div>
            <div class="work-description">
                <p>〇〇（作品の概要）</p>
                <p>〇〇（担当範囲・実装した機能）</p>
                <p>〇〇（補足・現在の状況など）</p>
            </div>
            <!-- リンクが無い場合は該当の <a> を削除。両方無ければ div ごと削除 -->
            <div class="work-link">
                <a href="https://〇〇" target="_blank" rel="noopener">View Live ↗</a>
                <a href="https://github.com/〇〇" target="_blank" rel="noopener">Source Code ↗</a>
            </div>
        </section>
        <section>
            <h2 class="preview-heading">Preview</h2>
            <div class="work-images">
                <!-- ↓ スクリーンショット1枚分。必要な枚数だけ複製する -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">〇〇 Page</span>
                        <div>
                            <img src="<?= $base ?>images/minimize.webp" alt="">
                            <img src="<?= $base ?>images/maximize.webp" alt="">
                            <img src="<?= $base ?>images/close.webp" alt="">
                        </div>
                    </figcaption>
                    <img src="<?= $base ?>images/〇〇.png" alt="〇〇画面" class="work-screenshot">
                </figure>
                <!-- ↑ ここまで -->
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>
