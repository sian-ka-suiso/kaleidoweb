<?php
$base = '../';
$current = 'works';
$pageTitle = 'よくある間違い ○×クイズ';
$pageCss = 'works-sub.css';
?>
<!DOCTYPE html>
<html lang="ja">
<?php include __DIR__ . '/../parts/head.php'; ?>
<body>
    <canvas id="electron-bg"></canvas>
    <?php include __DIR__ . '/../parts/header.php'; ?>
    <main>
        <section>
            <div class="page-header">
                <div class="work-header">
                    <h1>よくある間違い ○×クイズ</h1>
                    <span class="work-period">2024.06 - Present</span>
                </div>
                <div class="work-meta">
                    <div class="work-role">Design, Development</div>
                    <div class="tech-stack">HTML, CSS, JavaScript, PHP, MySQL</div>
                </div>
            </div>
            <div class="work-description">
                <p>高校～大学数学でつまずきやすい典型的な誤答をテーマにした、選択式のクイズWebアプリケーション。<br>金沢工業大学 数理工教育研究センターの学生スタッフ業務として開発。</p>
                <p>フロントエンド、バックエンド、DB設計を担当。章・節ごとの進捗表示や、間違えた問題をブックマークして後から解き直せる復習リスト機能などを実装したほか、教員・管理者向けの管理画面（ユーザー管理、問題の追加・編集・削除など）も実装。</p>
                <p>2025年4月より実際の授業で利用されている。</p>
                <p>なお、本来のアプリは金沢工業大学の学内ネットワークからのみ接続可能なため、ここで紹介するのは、学内サーバーで公開しているものと同じアプリを「Kaleido Web」に再実装したバージョンである。<br>このバージョンでは、ログインせずにログイン後の機能を確認できるよう、デモアカウントによるログイン機能を実装。デモアカウントの情報は、cron設定により10分ごとにリセットされる。</p>
            </div>
            <div class="work-link">
                <a href="https://oxquiz.kaleidoweb.net/ctrl/index.php" target="_blank" rel="noopener">View Live ↗</a>
                <a href="https://github.com/sian-ka-suiso/OXquiz" target="_blank" rel="noopener">Source Code ↗</a>
            </div>
        </section>
        <section>
            <h2 class="preview-heading">Preview</h2>
            <div class="work-images">
                <!-- １枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Chapter Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/OXquiz/preview1.webp" alt="チャプター画面" class="work-screenshot">
                </figure>
                <!-- ２枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Section Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/OXquiz/preview2.webp" alt="セクション画面" class="work-screenshot">
                </figure>
                <!-- ３枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Question Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/OXquiz/preview3.webp" alt="クエスチョン画面" class="work-screenshot">
                </figure>
                <!-- ４枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Question Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/OXquiz/preview4.webp" alt="クエスチョン画面" class="work-screenshot">
                </figure>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>