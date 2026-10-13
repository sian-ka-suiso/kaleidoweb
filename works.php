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
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/works.css">
    <link rel="stylesheet" href="css/variables.css">
    <title>【Works】 Kaleido Web｜Kaleido's Portfolio Site</title>
</head>
<body>
    <canvas id="electron-bg"></canvas>
    <?php $current='works'; ?>
    <?php include 'parts/header.php'; ?>
    <main>
        <h1 class="page-title">Works</h1>
        <section class="works">
            <!-- １枚目 -->
            <figure class="work-item">
                <a href="./works/oxquiz"><img src="./images/oxquiz.png" alt="OXquiz"></a>
                <div class="work-title">よくある間違い〇✕クイズ</div>
            </figure>
            <!-- ２枚目 -->
            <figure class="work-item">
                <a href="./works/kiten-hp"><img src="./images/kiten_hp.webp" alt="kiten"></a>
                <div class="work-title">KIT eSports Project</div>
            </figure>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
    <script src="./js/background.js"></script>
</body>
</html>