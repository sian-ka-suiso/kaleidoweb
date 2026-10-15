<?php
$base = '../';
$current = 'works';
$pageTitle = 'r=aθ ― Solar System';
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
                    <h1><span style="font-style: italic;">r=a&theta;</span> ― Solar System</h1>
                    <span class="work-period">2024.07</span>
                </div>
                <dl class="work-meta">
                    <div class="work-meta-item">
                        <dt>Role</dt>
                        <dd class="work-role" data-label="└ Role">Design, Development</dd>
                    </div>
                    <div class="work-meta-item">
                        <dt>Stack</dt>
                        <dd class="tech-stack" data-label="└ Tech Stack">p5.js, HTML, CSS</dd>
                    </div>
                </dl>
            </div>
            <div class="work-description">
                <p>大学の授業課題で制作。</p>
                <p>自然界には螺旋構造が広く見らるという内容から、螺旋構造と自然を関連付けたビジュアル作品として、アルキメデス螺旋を用いて太陽系の描画する作品を制作。</p>
            </div>
            <div class="work-link">
                <a href="https://solar-system.kaleidoweb.net/" target="_blank" rel="noopener">View Live ↗</a>
                <a href="https://github.com/sian-ka-suiso/archimedean-solar-system" target="_blank" rel="noopener">Source Code ↗</a>
            </div>
        </section>
        <section>
            <h2 class="preview-heading">Preview</h2>
            <div class="work-images">
                <!-- １枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Intor Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/solar-system/preview1.webp" alt="イントロ画面" class="work-screenshot">
                </figure>
                <!-- ２枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Main Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/solar-system/preview2.webp" alt="メイン画面" class="work-screenshot">
                </figure>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>
