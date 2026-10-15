(function () {
  const root = document.documentElement;
  if (!root.classList.contains('is-intro')) return;

  const title = document.querySelector('.hero-title');
  if (!title) {
    root.classList.remove('is-intro');
    return;
  }

  // ---- 調整用パラメータ ----
  const CONFIG = {
    scrambleStart: 200,     // タイトルの解読を始めるまでの時間(ms)。CSS の intro-flicker の開始と合わせる
    scrambleDuration: 900,  // 全文字が確定するまでの時間(ms)
    scrambleInterval: 45,   // ランダム文字を切り替える間隔(ms)
    totalDuration: 2500,    // イントロ全体の長さ(ms)。経過後に is-intro を外す
    chars: 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
  };

  const original = title.textContent;
  const randomChar = () => CONFIG.chars[Math.floor(Math.random() * CONFIG.chars.length)];
  const timers = [];
  let scrambleTimer = null;
  let finished = false;

  function scramble() {
    if (finished) return;

    title.setAttribute('aria-label', original);   // 解読中のランダム文字を読み上げさせない

    // 本物の文字はレイアウトを保ったまま見えなくし、その各文字の位置にランダムな文字を重ねる。
    // 本物の文字は一度も動かないので、イントロ後に元へ戻しても位置がずれない
    const real = document.createElement('span');
    real.textContent = original;
    real.style.visibility = 'hidden';
    title.replaceChildren(real);
    title.style.position = 'relative';

    const titleRect = title.getBoundingClientRect();
    const textNode = real.firstChild;
    const range = document.createRange();

    const spans = [...original].map((ch, i) => {
      if (ch === ' ') return null;
      range.setStart(textNode, i);
      range.setEnd(textNode, i + 1);
      const rect = range.getBoundingClientRect();

      const span = document.createElement('span');
      span.textContent = ch;
      span.setAttribute('aria-hidden', 'true');
      span.style.position = 'absolute';
      span.style.left = rect.left - titleRect.left + 'px';
      span.style.top = '0';   // 行の高さはタイトルから引き継ぐので、本物の文字と同じ高さ(ベースライン)に並ぶ
      span.style.whiteSpace = 'pre';
      title.appendChild(span);
      return span;
    });

    const startedAt = performance.now();
    const step = CONFIG.scrambleDuration / spans.length;

    const tick = () => {
      const elapsed = performance.now() - startedAt;
      spans.forEach((span, i) => {
        if (!span) return;
        span.textContent = elapsed >= step * (i + 1) ? original[i] : randomChar();
      });
      if (elapsed >= CONFIG.scrambleDuration) {
        clearInterval(scrambleTimer);
        scrambleTimer = null;
      }
    };
    tick();
    scrambleTimer = setInterval(tick, CONFIG.scrambleInterval);
  }

  function finish() {
    if (finished) return;
    finished = true;
    timers.forEach(clearTimeout);
    if (scrambleTimer) clearInterval(scrambleTimer);
    title.textContent = original;
    title.style.position = '';
    title.removeAttribute('aria-label');
    root.classList.remove('is-intro');
    ['click', 'keydown', 'wheel', 'touchstart'].forEach((type) => {
      window.removeEventListener(type, finish);
    });
  }

  // 文字幅を正しく測るため、フォント(Anders)の読み込みを待ってから解読を始める
  timers.push(setTimeout(() => {
    document.fonts.ready.then(scramble);
  }, CONFIG.scrambleStart));
  timers.push(setTimeout(finish, CONFIG.totalDuration));

  // クリックやキー操作でスキップ
  ['click', 'keydown', 'wheel', 'touchstart'].forEach((type) => {
    window.addEventListener(type, finish, { passive: true });
  });
})();
