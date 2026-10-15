<?php
/**
 * 共通 <head>
 * 呼び出し側で先に以下を定義すること（$base の規則は header.php と同じ）
 *   $pageTitle : <title> の前半（例: 'Works'）。未定義ならサイト名のみ
 *   $pageCss   : ページ専用の CSS ファイル名（例: 'works.css'）。未定義なら読み込まない
 *   $ogImage   : OGP 画像の絶対 URL（省略可）
 */
$base = $base ?? '';
$siteName = "Kaleido's Portfolio Site";
$fullTitle = isset($pageTitle) ? "{$pageTitle}｜{$siteName}" : $siteName;
$ogImage = $ogImage ?? 'https://www.kaleidoweb.net/images/kaleidoweb_ss.webp';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($siteName) ?>">
    <meta property="og:title" content="Kaleido Web" />
    <meta property="og:description" content="<?= htmlspecialchars($siteName) ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@kaleidoweb" />
    <link rel="icon" type="image/png" href="<?= $base ?>images/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>css/common.css">
<?php if (isset($pageCss)): ?>
    <link rel="stylesheet" href="<?= $base ?>css/<?= $pageCss ?>">
<?php endif; ?>
    <link rel="stylesheet" href="<?= $base ?>css/variables.css">
    <title><?= htmlspecialchars($fullTitle) ?></title>
</head>
