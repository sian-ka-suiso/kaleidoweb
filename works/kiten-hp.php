<?php
$base = '../';
$current = 'works';
$pageTitle = 'KIT eSports Project';
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
                    <h1>KIT eSports Project</h1>
                    <span class="work-period">2025.04 - Present</span>
                </div>
                <dl class="work-meta">
                    <div class="work-meta-item">
                        <dt>Role</dt>
                        <dd class="work-role" data-label="└ Role">Logo Design, Web Design, Development, Content Update,</dd>
                    </div>
                    <div class="work-meta-item">
                        <dt>Stack</dt>
                        <dd class="tech-stack" data-label="└ Tech Stack">HTML, CSS, JavaScript, PHP</dd>
                    </div>
                </dl>
            </div>
            <div class="work-description">
                <p>金沢工業大学公式の課外活動団体「KIT eSports Project」の公式ホームページ。</p>
                <p>団体の紹介に加え、企業・団体との連携窓口や大会実績の発信にも使われている実運用サイトです。サイト全体の設計・実装から現在の保守までを、一貫して担当しています。</p>
            </div>
            <div class="work-link">
                <a href="https://kit-esports.jp/" target="_blank" rel="noopener">View Live ↗</a>
            </div>
        </section>
        <section>
            <h2 class="preview-heading">Preview</h2>
            <div class="work-images">
                <!-- １枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Top</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/KITeSportsProject/preview1.webp" alt="top-page画面" class="work-screenshot">
                </figure>
                <!-- ２枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">About</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/KITeSportsProject/preview2.webp" alt="about-page画面" class="work-screenshot">
                </figure>
                <!-- ３枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Division</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/KITeSportsProject/preview3.webp" alt="divition-page画面" class="work-screenshot">
                </figure>
                <!-- ４枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">News</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/KITeSportsProject/preview4.webp" alt="news-page画面" class="work-screenshot">
                </figure>
                <!-- ５枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Eagle Cup</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/KITeSportsProject/preview5.webp" alt="eagle-cup画面" class="work-screenshot">
                </figure>
                <!-- ６枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Contact</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/KITeSportsProject/preview6.webp" alt="contact-page画面" class="work-screenshot">
                </figure>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>
