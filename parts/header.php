<?php
/**
 * 共通ヘッダー
 * サブページからincludeする場合は、呼び出し側で先に以下を定義すること
 *   $base : ルート直下のページは ''（省略可）、works/web/ など2階層下のページは '../../'
 */
$base = $base ?? '';
$home = $base === '' ? '.' : $base;
?>
<header>
    <div class="logo"><a href="<?= $home ?>">Keleido Web</a></div>
    <nav>
        <!-- <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Works</a></li>
        <li><a href="#">Contact</a></li> -->
    </nav>
</header>