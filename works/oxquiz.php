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
    <title>OXquiz｜Kaleido's Portfolio Site</title>
</head>
<body>
    <canvas id="electron-bg"></canvas>
    <?php include __DIR__ . '/../parts/header.php'; ?>
    <main>
        <section>
            <div class="page-header">
                <div class="work-header">
                    <h1>よくある間違い ○×クイズ</h1>
                    <span class="work-period">2025.06 - Present</span>
                </div>
                <div class="tech-stack">HTML, CSS, JavaScript, PHP, MySQL</div>
            </div>
            <div class="work-description">
                <p>高校～大学数学でつまずきやすい典型的な誤答をテーマにした、選択式のクイズWebアプリケーション。</br>金沢工業大学 数理工教育研究センターの学生スタッフ業務として開発。</p>
                <p>フロントエンド、バックエンド、DB設計を担当。章・節ごとの進捗表示や、間違えた問題をブックマークして後から解き直せる復習リスト機能などを実装したほか、教員・管理者向けの管理画面（ユーザー管理、問題の追加・編集・削除など）も実装。</p>
                <p>2025年4月より実際の授業で利用されている。</p>
                <p>なお、本来のアプリは金沢工業大学の学内ネットワークからのみ接続可能なため、ここで紹介するのは、学内サーバーで公開しているものと同じアプリを「Kaleido Web」に再実装したバージョンである。</br>このバージョンでは、ログインせずにログイン後の機能を確認できるよう、デモアカウントによるログイン機能を実装。デモアカウントの情報は、cron設定により10分ごとにリセットされる。</p>
            </div>
            <div class="work-link">
                <a href="https://oxquiz.kaleidoweb.net/ctrl/index.php" target="_blank" rel="noopener">View Live ↗</a>
                <a href="https://github.com/sian-ka-suiso/OXquiz" target="_blank" rel="noopener">Source Code ↗</a>
            </div>
        </section>
        <section>
            <h2 class="preview-heading">Preview</h2>
            <div class="work-images">
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Chapter Page</span>
                        <div>
                            <img src="<?= $base ?>images/minimize.webp" alt="">
                            <img src="<?= $base ?>images/maximize.webp" alt="">
                            <img src="<?= $base ?>images/close.webp" alt="">
                        </div>
                    </figcaption>
                    <img src="<?= $base ?>images/oxquiz_ss1.png" alt="チャプター画面" class="work-screenshot">
                </figure>
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Section Page</span>
                        <div>
                            <img src="<?= $base ?>images/minimize.webp" alt="">
                            <img src="<?= $base ?>images/maximize.webp" alt="">
                            <img src="<?= $base ?>images/close.webp" alt="">
                        </div>
                    </figcaption>
                    <img src="<?= $base ?>images/oxquiz_ss2.png" alt="セクション画面" class="work-screenshot">
                </figure>
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Question Page</span>
                        <div>
                            <img src="<?= $base ?>images/minimize.webp" alt="">
                            <img src="<?= $base ?>images/maximize.webp" alt="">
                            <img src="<?= $base ?>images/close.webp" alt="">
                        </div>
                    </figcaption>
                    <img src="<?= $base ?>images/oxquiz_ss3.png" alt="クエスチョン画面" class="work-screenshot">
                </figure>
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Question Page</span>
                        <div>
                            <img src="<?= $base ?>images/minimize.webp" alt="">
                            <img src="<?= $base ?>images/maximize.webp" alt="">
                            <img src="<?= $base ?>images/close.webp" alt="">
                        </div>
                    </figcaption>
                    <img src="<?= $base ?>images/oxquiz_ss4.png" alt="クエスチョン画面" class="work-screenshot">
                </figure>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>