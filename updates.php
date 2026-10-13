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
    <link rel="stylesheet" href="css/updates.css">
    <link rel="stylesheet" href="css/variables.css">
    <title>Updates｜Kaleido's Portfolio Site</title>
</head>
<body>
    <canvas id="electron-bg"></canvas>
    <?php $current='updates'; ?>
    <?php include 'parts/header.php'; ?>
    <main>
        <h1 class="page-title">Updates</h1>
        <section class="timeline">
            <div class="timeline-year">
                <h2 class="year">2026</h2>
                <ol class="events">
                    <li><time datetime="2026-09-22">09.22</time>Kaleido Web Launched</li>
                    <li><time datetime="2026-10-13">10.13</time>UI Redesign</li>
                </ol>
            </div>
            <!-- <div class="timeline-year">
                <h2 class="year">2027</h2>
                <ol class="events">
                    <li><time datetime=""></time></li>
                    <li><time datetime=""></time></li>
                </ol>
            </div> -->
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
    <script src="./js/background.js"></script>
</body>
</html>