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
    <nav>
        <ul>
            <li class="<?= $current === 'top' ? 'current-location' : '' ?>"><a href=".">Top</a></li>
            <li class="<?= $current === 'works' ? 'current-location' : '' ?>"><a href="./works">Works</a></li>
            <li class="<?= $current === 'updates' ? 'current-location' : '' ?>"><a href="./updates">Updates</a></li>
        </ul>
    </nav>
</header>