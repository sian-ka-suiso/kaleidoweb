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

  // 本物の文字を1文字ずつ inline の span に分け、まだ確定していない文字は visibility: hidden で隠す。
  // inline のままなので文字の並びや詰めは変わらず、hidden なので輪郭のぼかしも含めて何も描かれない。
  // 確定した文字は本物の文字そのものなので、イントロ後も入れ替えが起きず位置がずれない。
  // ちらつきの演出が始まる前に本物の文字が見えないよう、フォントの読み込みを待たずにすぐ隠す
  const letters = [...original].map((ch) => {
    const span = document.createElement('span');
    span.textContent = ch;
    if (ch !== ' ') span.style.visibility = 'hidden';
    return span;
  });
  title.replaceChildren(...letters);
  title.setAttribute('aria-label', original);   // hidden の文字は読み上げられないため、イントロ中だけ名前を付ける

  let overlays = [];

  function scramble() {
    if (finished) return;

    title.style.position = 'relative';   // ランダムな文字を重ねる基準
    const titleRect = title.getBoundingClientRect();

    // 隠した本物の各文字の位置に、ランダムな文字を重ねる
    overlays = letters.map((letter, i) => {
      if (original[i] === ' ') return null;
      const span = document.createElement('span');
      span.textContent = randomChar();
      span.setAttribute('aria-hidden', 'true');
      span.style.position = 'absolute';
      span.style.left = letter.getBoundingClientRect().left - titleRect.left + 'px';
      span.style.top = '0';   // 行の高さはタイトルから引き継ぐので、本物の文字と同じ高さ(ベースライン)に並ぶ
      span.style.whiteSpace = 'pre';
      title.appendChild(span);
      return span;
    });

    const startedAt = performance.now();
    const step = CONFIG.scrambleDuration / overlays.length;

    const tick = () => {
      const elapsed = performance.now() - startedAt;
      overlays.forEach((span, i) => {
        if (!span || !span.isConnected) return;
        if (elapsed < step * (i + 1)) {
          span.textContent = randomChar();
        } else {
          reveal(i);
        }
      });
      if (elapsed >= CONFIG.scrambleDuration) {
        clearInterval(scrambleTimer);
        scrambleTimer = null;
      }
    };
    tick();
    scrambleTimer = setInterval(tick, CONFIG.scrambleInterval);
  }

  // 確定：重ねた文字を外し、本物の文字を見せる
  function reveal(i) {
    if (overlays[i]) overlays[i].remove();
    letters[i].style.visibility = '';
  }

  function finish() {
    if (finished) return;
    finished = true;
    timers.forEach(clearTimeout);
    if (scrambleTimer) clearInterval(scrambleTimer);
    letters.forEach((_, i) => reveal(i));
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
