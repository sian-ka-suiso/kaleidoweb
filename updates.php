<?php
$current = 'updates';
$pageTitle = 'Updates';
$pageCss = 'updates.css';
?>
<!DOCTYPE html>
<html lang="ja">
<?php include __DIR__ . '/parts/head.php'; ?>
<body>
    <canvas id="electron-bg"></canvas>
    <?php include 'parts/header.php'; ?>
    <main>
        <h1 class="page-title">Updates</h1>
        <section class="timeline">
            <div class="timeline-year">
                <h2 class="year">2026</h2>
                <ol class="events">
                    <li><time datetime="2026-09-22">09.22</time>Kaleido Web Launched</li>
                    <li><time datetime="2026-10-13">10.16</time>UI Redesign</li>
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