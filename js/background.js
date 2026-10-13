(function () {
  const canvas = document.getElementById('electron-bg');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');

  let width, height, dpr;
  let nodes = [];
  let electrons = [];
  let edges = [];
  let frame = 0;
  let rafId = null;

  // ---- 調整用パラメータ ----
  const CONFIG = {
    nodeCount: 32,          // ノード(結節点)の数。画面サイズに応じて自動調整
    connectDistance: 180,   // ノード同士を線で結ぶ最大距離
    electronCount: 15,      // 流れる電子(粒子)の数
    electronSpeed: 0.004,   // 電子の移動速度(エッジ長に対する割合/フレーム)
    lineColor: 'rgba(255,255,255,0.08)',   // 幾何学ラインの色(控えめ)
    nodeColor: 'rgba(255,255,255,0.25)',   // ノード自体の色
    electronColor: 'rgba(255,255,255,0.9)',// 電子の色(明るい白)
    electronGlow: 'rgba(255,255,255,0.5)', // 電子の発光色
    electronRadius: 1.2,
  };

  function resize() {
    dpr = Math.min(window.devicePixelRatio || 1, 2);
    width = window.innerWidth;
    height = window.innerHeight;
    canvas.width = width * dpr;
    canvas.height = height * dpr;
    canvas.style.width = width + 'px';
    canvas.style.height = height + 'px';
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    init();
  }

  function init() {
    // 画面面積に応じてノード数をスケーリング(小さい画面で密度が上がりすぎないように)
    const area = width * height;
    const density = Math.max(0.6, Math.min(1.4, area / (1440 * 900)));
    const count = Math.round(CONFIG.nodeCount * density);

    nodes = [];
    for (let i = 0; i < count; i++) {
      nodes.push({
        x: Math.random() * width,
        y: Math.random() * height,
        vx: (Math.random() - 0.5) * 0.15,
        vy: (Math.random() - 0.5) * 0.15,
      });
    }

    buildEdges();
    initElectrons();
  }

  function buildEdges() {
    edges = [];
    for (let i = 0; i < nodes.length; i++) {
      for (let j = i + 1; j < nodes.length; j++) {
        const dx = nodes[i].x - nodes[j].x;
        const dy = nodes[i].y - nodes[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < CONFIG.connectDistance) {
          edges.push({ a: i, b: j, dist });
        }
      }
    }
  }

  function initElectrons() {
    electrons = [];
    if (edges.length === 0) return;
    for (let i = 0; i < CONFIG.electronCount; i++) {
      spawnElectron();
    }
  }

  function spawnElectron() {
    if (edges.length === 0) return;
    const edge = edges[Math.floor(Math.random() * edges.length)];
    electrons.push({
      edge,
      t: Math.random(),
      dir: Math.random() < 0.5 ? 1 : -1,
      speed: CONFIG.electronSpeed * (0.6 + Math.random() * 0.8),
    });
  }

  function update() {
    // ノードをゆっくり漂わせる(電子回路が生きているような揺らぎ)
    for (const n of nodes) {
      n.x += n.vx;
      n.y += n.vy;
      if (n.x < 0 || n.x > width) n.vx *= -1;
      if (n.y < 0 || n.y > height) n.vy *= -1;
    }

    // エッジは毎フレーム再計算せず、一定間隔で更新(負荷軽減)
    if (frame % 30 === 0) buildEdges();

    // 電子を経路上で移動
    for (let i = electrons.length - 1; i >= 0; i--) {
      const e = electrons[i];
      e.t += e.speed * e.dir;
      // ノードが離れて線が描かれなくなった経路の電子も作り直す
      const a = nodes[e.edge.a];
      const b = nodes[e.edge.b];
      const tooFar = !a || !b || Math.hypot(a.x - b.x, a.y - b.y) >= CONFIG.connectDistance;
      if (e.t > 1 || e.t < 0 || tooFar) {
        electrons.splice(i, 1);
        spawnElectron();
      }
    }
    while (electrons.length < CONFIG.electronCount) spawnElectron();
  }

  function draw() {
    ctx.clearRect(0, 0, width, height);

    // ライン(幾何学的な結線)
    ctx.strokeStyle = CONFIG.lineColor;
    ctx.lineWidth = 1;
    for (const edge of edges) {
      const a = nodes[edge.a];
      const b = nodes[edge.b];
      ctx.beginPath();
      ctx.moveTo(a.x, a.y);
      ctx.lineTo(b.x, b.y);
      ctx.stroke();
    }

    // ノード
    ctx.fillStyle = CONFIG.nodeColor;
    for (const n of nodes) {
      ctx.beginPath();
      ctx.arc(n.x, n.y, 1.4, 0, Math.PI * 2);
      ctx.fill();
    }

    // 電子(光る粒子)
    for (const e of electrons) {
      const a = nodes[e.edge.a];
      const b = nodes[e.edge.b];
      if (!a || !b) continue;
      const x = a.x + (b.x - a.x) * e.t;
      const y = a.y + (b.y - a.y) * e.t;

      // 発光(ぼかしグラデーション)
      const glow = ctx.createRadialGradient(x, y, 0, x, y, 4);
      glow.addColorStop(0, CONFIG.electronGlow);
      glow.addColorStop(1, 'rgba(255,255,255,0)');
      ctx.fillStyle = glow;
      ctx.beginPath();
      ctx.arc(x, y, 4, 0, Math.PI * 2);
      ctx.fill();

      // 中心の光点
      ctx.fillStyle = CONFIG.electronColor;
      ctx.beginPath();
      ctx.arc(x, y, CONFIG.electronRadius, 0, Math.PI * 2);
      ctx.fill();
    }
  }

  function loop() {
    frame++;
    update();
    draw();
    rafId = requestAnimationFrame(loop);
  }

  function start() {
    if (rafId === null) rafId = requestAnimationFrame(loop);
  }

  function stop() {
    if (rafId !== null) cancelAnimationFrame(rafId);
    rafId = null;
  }

  // タブが非表示の間は停止して負荷を抑える(予約をキャンセルしてループの二重起動を防ぐ)
  document.addEventListener('visibilitychange', () => {
    document.hidden ? stop() : start();
  });

  // リサイズ中は待ち、止まってから作り直す(スマホのアドレスバー開閉で背景が切り替わるのを防ぐ)
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(resize, 200);
  });

  resize();
  start();
})();