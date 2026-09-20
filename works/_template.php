<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>【作品名】｜kaleidoweb</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Orbitron:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/variables.css">
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/works_subpage.css">
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <meta property="og:title" content="【作品名】｜kaleidoweb" />
    <meta property="og:description" content="【作品の説明を1文で】" />
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
            <img src="../../images/【画像ファイル名】" alt="【作品名】">
        </div>

        <!-- 【必須】パンくず：category は works-web / works-image / works-video のいずれか -->
        <div class="breadcrumb"><a href="../../">Top</a> &gt; <a href="../../#works-【category】">Works</a> &gt; 【作品名】</div>

        <!-- ==============================================
             【必須】作品タイトル・制作年月
             ============================================== -->
        <div class="work-heading">
            <h1 class="work-heading-title">【作品名】</h1>
            <time class="work-heading-date">【制作年月（例：2025.10）】</time>
        </div>

        <!-- ==============================================
             【必須】作品概要
             項目は自由に増減してOK。不要な項目はdivごと削除
             幅いっぱいに使いたい項目は class="work-overview-item wide" に
             ============================================== -->
        <div class="work-overview">
            <div class="work-overview-grid">
                <div class="work-overview-item">
                    <span class="label"><span class="ja">カテゴリ</span><span class="en">Category</span></span>
                    <span class="value">【Web / Image / Video】</span>
                </div>
                <div class="work-overview-item">
                    <span class="label"><span class="ja">制作期間</span><span class="en">Period</span></span>
                    <span class="value">【制作期間（例：2025年8月〜10月）】</span>
                </div>
                <div class="work-overview-item">
                    <span class="label"><span class="ja">担当範囲</span><span class="en">Role</span></span>
                    <span class="value">【担当した範囲（例：デザイン・コーディング）】</span>
                </div>
                <!-- 公開URLがない場合はこの項目ごと削除 -->
                <div class="work-overview-item">
                    <span class="label"><span class="ja">公開URL</span><span class="en">URL</span></span>
                    <span class="value"><a href="【公開URL】" target="_blank" rel="noopener noreferrer">【公開URL（例：kaleidoweb.net）】</a></span>
                </div>
                <div class="work-overview-item wide">
                    <span class="label"><span class="ja">使用技術・ツール</span><span class="en">Tools</span></span>
                    <div class="value work-tags">
                        <span>【HTML】</span>
                        <span>【CSS】</span>
                        <span>【JavaScript】</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==============================================
             【必須】詳細説明
             制作背景・工夫した点・苦労した点などを自由に記述
             段落を分けたい場合は <p> を複製する
             ============================================== -->
        <div class="work-description">
            <p>【詳細な説明文をここに記載します。どんな課題を解決するために作ったか、制作背景などを書きます。】</p>
            <p>【工夫した点・苦労した点などがあれば、ここに追記します。不要であればこの行ごと削除してOKです。】</p>
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
