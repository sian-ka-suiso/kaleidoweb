<?php
$base = '../';
$current = 'works';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kaleido's Portfolio Site">
    <meta property="og:title" content="Kaleido Web" />
    <meta property="og:description" content="Kaleido's Portfolio Site" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@kaleidoweb" />
    <link rel="icon" type="image/x-icon" href="<?= $base ?>images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>css/common.css">
    <link rel="stylesheet" href="<?= $base ?>css/works-sub.css">
    <link rel="stylesheet" href="<?= $base ?>css/variables.css">
    <title>OXquiz｜Kaleido's Portfolio Site</title>
</head>
<body>
    <canvas id="electron-bg"></canvas>
    <?php include __DIR__ . '/../parts/header.php'; ?>
    <main>
        <h1 class="page-title">よくある間違い〇✕クイズ</h1>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>