<?php
$current = 'works';
$pageTitle = 'Works';
$pageCss = 'works.css';

function work_number($n) {
    $num = (string)$n;
    $zeros = str_repeat('0', max(0, 3 - strlen($num)));
    return 'No.' . $zeros . '<span class="work-number-digit">' . $num . '</span>';
}
?>
<!DOCTYPE html>
<html lang="ja">
<?php include __DIR__ . '/parts/head.php'; ?>
<body>
    <canvas id="electron-bg"></canvas>
    <?php include 'parts/header.php'; ?>
    <main>
        <h1 class="page-title">Works</h1>
        <section class="works">
            <!-- No.1 -->
            <figure class="work-item">
                <span class="work-number"><?= work_number(1) ?></span>
                <a href="./works/kaleidoweb"><img src="./images/works/kaleidoweb.png" alt="KaleidoWeb"></a>
                <div class="work-title">Kaleido Web</div>
            </figure>
            <!-- No.2 -->
            <figure class="work-item">
                <span class="work-number"><?= work_number(2) ?></span>
                <a href="./works/oxquiz"><img src="./images/works/oxquiz.webp" alt="OXquiz"></a>
                <div class="work-title">よくある間違い〇&#10005;クイズ</div>
            </figure>
            <!-- No.3 -->
            <figure class="work-item">
                <span class="work-number"><?= work_number(3) ?></span>
                <a href="./works/kiten-hp"><img src="./images/works/kiten.webp" alt="KITeN-HP"></a>
                <div class="work-title">KIT eSports Project</div>
            </figure>
            <!-- No.4 -->
            <figure class="work-item">
                <span class="work-number"><?= work_number(4) ?></span>
                <a href="./works/himenoyu"><img src="./images/works/himenoyu.webp" alt="比咩の湯"></a>
                <div class="work-title">比咩の湯 - 白山市</div>
            </figure>
            <!-- No.5 2024年7月 -->
            <figure class="work-item">
                <span class="work-number"><?= work_number(5) ?></span>
                <a href="./works/himenoyu"><img src="./images/no-image.webp" alt="太陽系"></a>
                <div class="work-title"><span style="font-style: italic;">r=a&theta;</span> &#9472; Solar System</div>
            </figure>
        </section>
    </main>
    <?php include 'parts/footer.php'; ?>
    <script src="./js/background.js"></script>
</body>
</html>