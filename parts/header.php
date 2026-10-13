<?php
/**
 * 共通ヘッダー
 * サブページからincludeする場合は、呼び出し側で先に以下を定義すること
 * $base    : ルートまでの相対パス。ルート直下のページは ''（省略可）、works/oxquiz.php など1階層下のページは '../'
 * $current : 現在地のメニュー（'top' / 'works' / 'updates'）
 */
$base = $base ?? '';
$current = $current ?? '';
?>
<header>
    <nav>
        <ul>
            <li class="<?= $current === 'top' ? 'current-location' : '' ?>"><a href="<?= $base === '' ? './' : $base ?>">Top</a></li>
            <li class="<?= $current === 'works' ? 'current-location' : '' ?>"><a href="<?= $base ?>works">Works</a></li>
            <li class="<?= $current === 'updates' ? 'current-location' : '' ?>"><a href="<?= $base ?>updates">Updates</a></li>
        </ul>
    </nav>
</header>