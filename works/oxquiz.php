<?php
$base = '../';
$current = 'works';
$pageTitle = 'よくある間違い ○×クイズ';
$pageCss = 'works-sub.css';
?>
<!DOCTYPE html>
<html lang="ja">
<?php include __DIR__ . '/../parts/head.php'; ?>
<body>
    <canvas id="electron-bg"></canvas>
    <?php include __DIR__ . '/../parts/header.php'; ?>
    <main>
        <section>
            <div class="page-header">
                <div class="work-header">
                    <h1>よくある間違い〇&#10005;クイズ</h1>
                    <span class="work-period">2024.06 - Present</span>
                </div>
                <dl class="work-meta">
                    <div class="work-meta-item">
                        <dt>Role</dt>
                        <dd class="work-role" data-label="└ Role">Web Design, Development</dd>
                    </div>
                    <div class="work-meta-item">
                        <dt>Stack</dt>
                        <dd class="tech-stack" data-label="└ Tech Stack">HTML, CSS, JavaScript, PHP, MySQL</dd>
                    </div>
                </dl>
            </div>
            <div class="work-description">
                <p>高校〜大学数学でつまずきやすい誤答をテーマにした、選択式のクイズ Web アプリ。金沢工業大学 数理工教育研究センターの学生スタッフ業務として開発。</p>
                <p>フロントエンド、バックエンド、データベース設計を担当し、単元ごとの進捗表示、間違えた問題を後から解き直せる復習リスト、教員・管理者向けの管理画面（ユーザー管理、問題の追加・編集・削除）などを実装しました。</p>
                <p>2025年4月から実際の授業で利用されており、現在も学期ごとに新機能の開発を続けています。</p>
                <p>本来のアプリは学内ネットワークからのみ接続できるため、同じアプリを個人のサーバーにデモ版として公開しています。デモアカウントの情報は、10分ごとに自動でリセットされます。</p>
            </div>
            <ul class="work-related" aria-label="関連リンク">
                <li><a href="https://www.kanazawa-it.ac.jp/jigyo/dx/example/exa09.html" target="_blank" rel="noopener">オンライン・オンデマンド教材の活用 - 金沢工業大学 ↗</a></li>
                <li><a href="https://cir.nii.ac.jp/crid/1050307501844645120" target="_blank" rel="noopener">よくある間違いを題材としたウェブクイズシステムの開発 - KIT Progress ↗</a></li>
            </ul>
            <div class="work-link">
                <a href="https://oxquiz.kaleidoweb.net/ctrl/index.php" target="_blank" rel="noopener">View Live ↗</a>
                <a href="https://github.com/sian-ka-suiso/OXquiz" target="_blank" rel="noopener">Source Code ↗</a>
            </div>
        </section>
        <section>
            <h2 class="preview-heading">Preview</h2>
            <div class="work-images">
                <!-- １枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Chapter Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/OXquiz/preview1.webp" alt="チャプター画面" class="work-screenshot">
                </figure>
                <!-- ２枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Section Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/OXquiz/preview2.webp" alt="セクション画面" class="work-screenshot">
                </figure>
                <!-- ３枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Question Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/OXquiz/preview3.webp" alt="クエスチョン画面" class="work-screenshot">
                </figure>
                <!-- ４枚目 -->
                <figure class="work-window">
                    <figcaption class="upper-frame">
                        <span class="window-tab">Question Page</span>
                        <?php include __DIR__ . '/../parts/window-buttons.php'; ?>
                    </figcaption>
                    <img src="<?= $base ?>images/works/OXquiz/preview4.webp" alt="クエスチョン画面" class="work-screenshot">
                </figure>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../parts/footer.php'; ?>
    <script src="<?= $base ?>js/background.js"></script>
</body>
</html>