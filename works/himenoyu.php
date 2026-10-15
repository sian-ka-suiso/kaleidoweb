<?php
$base = '../';
$current = 'works';
$pageTitle = 'Himenoyu';
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
                    <h1>比咩の湯 - 白山市</h1>
                    <span class="work-period">2026.03</span><!-- 終了している場合は YYYY.MM - YYYY.MM -->
                </div>
                <div class="work-meta">
                    <div class="work-role">Partial Renewal</div>
                    <div class="tech-stack">HTML, CSS, WordPress</div>
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
                <!-- １枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Updated part</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/Himenoyu/preview1.webp" alt="〇〇画面" class="work-screenshot">
                </figure>
                <!-- ２枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Updated part</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/Himenoyu/preview2.webp" alt="〇〇画面" class="work-screenshot">
                </figure>
                <!-- ３枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Updated part</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/Himenoyu/preview3.webp" alt="〇〇画面" class="work-screenshot">
                </figure>
                <!-- ４枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Updated part</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/Himenoyu/preview4.webp" alt="〇〇画面" class="work-screenshot">
                </figure>
                <!-- ５枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Updated part</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/Himenoyu/preview5.webp" alt="〇〇画面" class="work-screenshot">
                </figure>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>
