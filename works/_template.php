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
                    <span class="work-period">YYYY.MM - Present</span>
                </div>
                <dl class="work-meta">
                    <div class="work-meta-item">
                        <dt>Role</dt>
                        <dd class="work-role" data-label="└ Role">Design, Development</dd>
                    </div>
                    <div class="work-meta-item">
                        <dt>Stack</dt>
                        <dd class="tech-stack" data-label="└ Tech Stack">HTML, CSS, JavaScript</dd>
                    </div>
                </dl>
            </div>
            <div class="work-description">
                <p>〇〇（作品の概要）</p>
                <p>〇〇（担当範囲・実装した機能）</p>
                <p>〇〇（補足・現在の状況など）</p>
            </div>
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
                        <span class="window-tab">〇〇 Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/〇〇/.webp" alt="〇〇画面" class="work-screenshot">
                </figure>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>
