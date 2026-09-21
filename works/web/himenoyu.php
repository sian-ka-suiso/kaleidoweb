<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>「比咩の湯」HPリニューアル対応｜kaleidoweb</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/variables.css">
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/works_subpage.css">
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <meta property="og:title" content="「比咩の湯」HPリニューアル対応｜kaleidoweb" />
    <meta property="og:description" content="ポートフォリオ：「比咩の湯」HPリニューアル対応" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />
</head>
<body>
    <?php $base = '../../'; include __DIR__ . '/../../parts/header.php'; ?>
    <main>
        <!-- ==============================================
             【必須】作品ヒーロー画像
             カード一覧のサムネと同じ画像を16:9で使用
             （引き伸ばし・トリミングなしでそのまま収まる）
             ============================================== -->
        <div class="work-hero">
            <img src="../../images/himenoyu.webp" alt="比咩の湯 HP">
        </div>

        <!-- 【必須】パンくず：category は works-web / works-image / works-video のいずれか -->
        <div class="breadcrumb"><a href="../../">Top</a> &gt; <a href="../../#works-web">Works</a> &gt; 「比咩の湯」HPリニューアル対応</div>

        <!-- ==============================================
             【必須】作品タイトル・制作年月
             ============================================== -->
        <div class="work-heading">
            <h1 class="work-heading-title">「比咩の湯」HPリニューアル対応</h1>
            <time class="work-heading-date">2026.03</time>
        </div>

        <!-- ==============================================
             【必須】作品概要
             項目は自由に増減してOK。不要な項目はdivごと削除
             幅いっぱいに使いたい項目は class="work-overview-item wide" に
             ============================================== -->
        <div class="work-overview">
            <h2 class="work-overview-heading">Overview</h2>
            <div class="work-overview-grid">
                <div class="work-overview-item">
                    <span class="label">カテゴリ</span>
                    <span class="value">Web</span>
                </div>
                <div class="work-overview-item">
                    <span class="label">制作期間</span>
                    <span class="value">2026年3月</span>
                </div>
                <div class="work-overview-item">
                    <span class="label">担当範囲</span>
                    <span class="value">コーディング</span>
                </div>
                <div class="work-overview-item">
                    <span class="label">サイトURL</span>
                    <span class="value"><a href="https://www.himenoyu.jp/" target="_blank" rel="noopener noreferrer">比咩の湯</a></span>
                </div>
                <div class="work-overview-item wide">
                    <span class="label">使用技術・ツール</span>
                    <span class="value">HTML、CSS、WordPress</span>
                </div>
            </div>
        </div>

        <!-- ==============================================
             【必須】詳細説明
             制作背景・工夫した点・苦労した点などを自由に記述
             段落を分けたい場合は <p> を複製する
             ============================================== -->
        <div class="work-description">
            <h2 class="work-description-heading">Details</h2>
            <p>石川県の日帰り入浴施設「比咩の湯」が2026年4月にリニューアルオープンするのに伴い、ホームページの内容更新をお仕事として担当しました。既存のUIやデザインは大きく変更せず、営業時間の変更対応や、新たに営業を再開する「お風呂」「お食事等」の紹介セクションをトップページ内に新規追加するなど、リニューアルに合わせた情報更新を行いました。</p>
        </div>

        <!-- ----------------------------------------
             YouTube動画埋め込み（紹介動画・VPなど）
             不要な場合はこのブロックごと削除
             動画IDはYouTubeの共有URL（youtu.be/【ここ】 または watch?v=【ここ】）の部分
        ---------------------------------------- -->
        <!--
        <div class="video-embed-wrap">
            <div class="figure-caption">【動画キャプション（例：紹介動画）】</div>
            <div class="video-embed">
                <iframe src="https://www.youtube.com/embed/【動画ID】" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        -->

        <!-- ----------------------------------------
             追加画像（複数枚をグリッドで並べる）
             不要な場合はこのブロックごと削除。枚数は自由に増減してOK
        ---------------------------------------- -->
        <!--
        <div class="work-figure">
            <div class="figure-caption">【キャプション】</div>
            <div class="gallery-grid">
                <img src="../../images/【画像ファイル名1】" alt="">
                <img src="../../images/【画像ファイル名2】" alt="">
            </div>
        </div>
        -->

        <div class="work-back">
            <a href="../../#works-【category】">&larr; Works へ戻る</a>
        </div>
    </main>
    <?php $base = '../../'; include __DIR__ . '/../../parts/footer.php'; ?>
</body>
</html>
