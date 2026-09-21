<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>「よくある間違い〇✕クイズ」開発・運用｜kaleidoweb</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/variables.css">
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/works_subpage.css">
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <meta property="og:title" content="「よくある間違い〇✕クイズ」開発・運用｜kaleidoweb" />
    <meta property="og:description" content="ポートフォリオ：「よくある間違い〇✕クイズ」の開発・運用" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />
</head>
<body>
    <?php $base = '../../'; include __DIR__ . '/../../parts/header.php'; ?>
    <main>
        <div class="work-hero">
            <img src="../../images/oxquiz.webp" alt="「よくある間違い〇✕クイズ」">
        </div>
        <div class="breadcrumb"><a href="../../">Top</a> &gt; <a href="../../#works-web">Works</a> &gt; 「よくある間違い〇✕クイズ」開発・運用</div>

        <div class="work-heading">
            <h1 class="work-heading-title">「よくある間違い〇✕クイズ」開発・運用</h1>
            <time class="work-heading-date">2024.06 - Present</time>
        </div>

        <div class="work-overview">
            <h2 class="work-overview-heading">Overview</h2>
            <div class="work-overview-grid">
                <div class="work-overview-item">
                    <span class="label">カテゴリ</span>
                    <span class="value">Web</span>
                </div>
                <div class="work-overview-item">
                    <span class="label">制作期間</span>
                    <span class="value">2024年6月〜現在</span>
                </div>
                <div class="work-overview-item">
                    <span class="label">担当範囲</span>
                    <span class="value">デザイン・コーディング</span>
                </div>
                <div class="work-overview-item">
                    <span class="label">アプリURL</span>
                    <span class="value"><a href="https://www.kaleidoweb.net/oxquiz/ctrl/index.php" target="_blank" rel="noopener noreferrer">よくある間違い〇✕クイズ</a></span>
                </div>
                <div class="work-overview-item">
                    <span class="label">GitHub</span>
                    <span class="value"><a href="https://github.com/sian-ka-suiso/OXquiz" target="_blank" rel="noopener noreferrer">OXquiz</a></span>
                </div>
                <div class="work-overview-item">
                    <span class="label">事例紹介ページ</span>
                    <span class="value"><a href="https://www.kanazawa-it.ac.jp/jigyo/dx/example/exa09.html" target="_blank" rel="noopener noreferrer">オンライン・オンデマンド教材の活用｜金沢工業大学の教育DX</a></span>
                </div>
                <div class="work-overview-item wide">
                    <span class="label">使用技術・ツール</span>
                    <span class="value">HTML、CSS、JavaScript、PHP、SQL</span>
                </div>
            </div>
        </div>

        <div class="work-description">
            <h2 class="work-description-heading">Details</h2>
            <p>「よくある間違い○✕クイズ」は、高校～大学数学でつまずきやすい典型的な誤答をテーマにした、選択式のクイズWebアプリケーションです。金沢工業大学 数理工教育研究センターの学生スタッフ業務として開発に取り組みました。</p>
            <p>フロントエンドからバックエンド、DB設計まで1人で担当しました。章・節ごとの進捗表示や、間違えた問題をブックマークして後から解き直せる復習リスト機能などを実装したほか、教員・管理者向けの管理画面（ユーザー管理、問題の追加・編集・削除など）も実装しています。</p>
            <p>2025年4月より実際の授業で使用されています。</p>
            <p>なお、本来のアプリは金沢工業大学の学内ネットワークからのみ接続可能なため、ここで紹介しているのは、学内サーバーで公開しているものと同じアプリをKaleidowebに再実装したバージョンです。このバージョンでは、ログインせずにログイン後の機能を確認できるよう、デモアカウントによるログイン機能を実装しています。デモアカウントの情報は、cron設定により10分ごとにリセットされます。</p>
        </div>

        <div class="work-back">
            <a href="../../#works-web">&larr; Works へ戻る</a>
        </div>
    </main>
    <?php $base = '../../'; include __DIR__ . '/../../parts/footer.php'; ?>
</body>
</html>
