<?php
$base = '../';
$current = 'works';
$pageTitle = '〇〇';
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
                    <h1>〇〇（作品名）</h1>
                    <span class="work-period">YYYY.MM - Present</span><!-- 終了している場合は YYYY.MM - YYYY.MM -->
                </div>
                <div class="work-meta">
                    <div class="work-role">Design, Development</div>
                    <div class="tech-stack">HTML, CSS, JavaScript</div>
                </div>
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
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/〇〇/.webp" alt="〇〇画面" class="work-screenshot">
                </figure>
                <!-- ↑ ここまで -->
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>
