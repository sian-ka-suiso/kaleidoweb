<?php
$base = '../';
$current = 'works';
$pageTitle = 'Kaleido Web';
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
                    <h1>Kaleido Web</h1>
                    <span class="work-period">2026.09 - Present</span>
                </div>
                <div class="tech-stack">HTML, CSS, JavaScript, PHP</div>
            </div>
            <div class="work-description">
                <p>本サイト。Kaleido（カレイド）のポートフォリオサイト。</p>
                <p>更新履歴を <a href="<?= $base ?>updates">Updates</a> ページで公開。</p>
            </div>
            <div class="work-link">
                <a href="https://www.kaleidoweb.net/" target="_blank" rel="noopener">View Live ↗</a>
                <a href="https://github.com/sian-ka-suiso/kaleidoweb" target="_blank" rel="noopener">Source Code ↗</a>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>
