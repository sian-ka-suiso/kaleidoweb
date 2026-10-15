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
                    <span class="work-period">2026.03</span>
                </div>
                <dl class="work-meta">
                    <div class="work-meta-item">
                        <dt>Role</dt>
                        <dd class="work-role" data-label="└ Role">Site Update</dd>
                    </div>
                    <div class="work-meta-item">
                        <dt>Stack</dt>
                        <dd class="tech-stack" data-label="└ Tech Stack">HTML, CSS, WordPress</dd>
                    </div>
                </dl>
            </div>
            <div class="work-description">
                <p>石川県の日帰り入浴施設「比咩の湯」が2026年4月にリニューアルオープンするのに伴い、ホームページの内容更新を担当。</p>
                <p>既存のUIやデザインは大きく変更せず、営業時間の変更対応や、新たに営業を再開する「お風呂」「お食事等」の紹介セクションを新規追加。</p>
            </div>
            <!-- リンクが無い場合は該当の <a> を削除。両方無ければ div ごと削除 -->
            <div class="work-link">
                <a href="https://himenoyu.jp/" target="_blank" rel="noopener">View Live ↗</a>
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
