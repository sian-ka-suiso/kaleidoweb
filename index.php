<?php
$current = 'top';
$pageTitle = 'Kaleido Web';
$pageCss = 'index.css';
?>
<!DOCTYPE html>
<html lang="ja">
<?php include __DIR__ . '/parts/head.php'; ?>
<body>
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
</body>
</html>