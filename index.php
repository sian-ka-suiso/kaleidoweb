<?php
$current = 'top';
$pageTitle = 'Kaleido Web';
$pageCss = 'index.css';
?>
<!DOCTYPE html>
<html lang="ja">
<?php include __DIR__ . '/parts/head.php'; ?>
<body>
    <script>
        // イントロは1回の訪問で1度だけ。アニメーションを減らす設定の人には再生しない
        (function () {
            var seen = false;
            try {
                // seen = sessionStorage.getItem('kw-intro-seen') === '1';
                // sessionStorage.setItem('kw-intro-seen', '1');
            } catch (e) {}
            if (!seen && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                document.documentElement.classList.add('is-intro');
            }
        })();
    </script>
    <canvas id="electron-bg"></canvas>
    <?php include 'parts/header.php'; ?>
    <main>
        <section class="hero">
            <h1 class="hero-title">Kaleido Web</h1>
            <p class="hero-subtitle">Kaleido's Portfolio Site</p>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
    <script src="./js/background.js"></script>
    <script src="./js/intro.js"></script>
</body>
</html>