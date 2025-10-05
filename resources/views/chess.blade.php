<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Web Chess — Timer, Poin, Mode 1–4, Skak & Skakmat</title>
<style>
  :root{
    --bg:#071426; --panel:#062036; --accent:#60a5fa; --danger:#ff6b6b; --safe:#34d399; --warn:#fbbf24;
    --light:#e6eef8; --darkcell:#b58863; --lightcell:#f0d9b5;
  }
  *{box-sizing:border-box}
  body{margin:0;font-family:Inter,system-ui,Arial;background:linear-gradient(180deg,#021018,#081228);color:var(--light);min-height:100vh;display:flex;align-items:flex-start;justify-content:center;padding:18px}
  .app{width:100%;max-width:1100px}
  .top{display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:12px}
  .status{background:var(--panel);padding:10px;border-radius:10px;display:flex;gap:12px;align-items:center;flex-wrap:wrap}
  .board-wrap{display:flex;gap:18px}
  .board{width:560px;height:560px;display:grid;grid-template-columns:repeat(8,1fr);grid-template-rows:repeat(8,1fr);border-radius:8px;overflow:hidden;box-shadow:0 8px 24px rgba(2,6,23,0.6)}
  .cell{display:flex;align-items:center;justify-content:center;font-size:36px;cursor:pointer;user-select:none;position:relative;transition:background .08s,box-shadow .08s}
  .cell.dark{background:var(--darkcell)}
  .cell.light{background:var(--lightcell);color:#111}
  /* highlight move / capture */
  .cell.move{box-shadow:inset 0 0 0 4px rgba(96,165,250,0.9);z-index:2}
  .cell.capture{box-shadow:inset 0 0 0 4px rgba(255,99,99,0.95);z-index:2}
  /* selected piece */
  .cell.selected{outline:4px solid rgba(96,165,250,0.6)}
  /* indicate king in check */
  .cell.check{outline:4px dashed var(--warn)}
  .panel{background:var(--panel);padding:12px;border-radius:10px;min-width:320px}
  button,select{padding:8px 10px;border-radius:8px;border:none;background:var(--accent);color:#022;cursor:pointer;font-weight:700}
  .muted{color:#9aa4b2;font-size:13px}
  .moves{max-height:320px;overflow:auto;background:rgba(0,0,0,0.12);padding:8px;border-radius:8px;margin-top:8px}
  .controls{display:flex;gap:8px;margin-top:12px;flex-wrap:wrap}
  .score{font-weight:800}
  .small{font-size:13px;color:#9aa4b2}
  @media (max-width:1060px){ .board-wrap{flex-direction:column;align-items:center}.panel{min-width:unset;width:100%} }
</style>
</head>
<body>
  <div class="app">
    <div class="top">
      <div class="status">
        <div>⏳ <strong id="timeTxt">08:00</strong></div>
        <div class="muted">|</div>
        <div>Poin Putih: <span id="ptsW" class="score">5000</span></div>
        <div class="muted">|</div>
        <div>Poin Hitam: <span id="ptsB" class="score">5000</span></div>
        <div class="muted">|</div>
        <div>Giliran: <strong id="turnTxt">Putih</strong></div>
      </div>

      <div style="display:flex;gap:10px;align-items:center">
        <label class="small">Mode:</label>
        <select id="modeSel">
          <option value="1">Mode 1 - Normal</option>
          <option value="2">Mode 2 - Queen(+) Knight, King(+) Knight</option>
          <option value="3">Mode 3 - Pawn belok; Knight = Knight+Pawn+King</option>
          <option value="4">Mode 4 - Superpower pieces</option>
          <option value="5">Mode 5 - Bishop Rebith</option>

        </select>
        <button id="startBtn">Start / Reset</button>
      </div>
    </div>

    <div class="board-wrap">
      <div>
        <div id="board" class="board" role="grid" aria-label="papan catur"></div>
        <div class="controls">
          <button id="flipBtn">Balikkan Papan</button>
          <button id="undoBtn">Undo</button>
        </div>
      </div>

      <div class="panel">
        <div style="font-weight:800">Info & Aturan</div>
        <div class="muted" style="margin-top:8px">
          <ul>
            <li>Waktu total 8 menit. Jika waktu habis, pemenang: poin lebih tinggi.</li>
            <li>Poin awal 5000 per pemain; <strong>berkurang 25 per detik</strong> untuk pemain yang sedang giliran.</li>
            <li>Ada fitur SKAK & SKAKMAT; permainan berhenti saat SKAKMAT atau jika Raja ditangkap.</li>
            <li>Jika poin pemain = 0: game langsung berakhir dan lawan menang.</li>
          </ul>
        </div>

        <div style="margin-top:10px;font-weight:700">Status</div>
        <div id="statusTxt" class="small" style="margin-top:6px">Menunggu start</div>

        <div style="margin-top:12px;font-weight:700">Riwayat Langkah</div>
        <div id="moves" class="moves"></div>

        <div style="margin-top:10px" class="small">Promosi pawn: saat mencapai baris akhir akan diminta pilih Q/R/B/N (default Q).</div>
      </div>
    </div>
  </div>

<script>
/* Full implementation:
 - 8 minutes total
 - 25 points per second deduction for active player
 - fair turn: only active player's points decrement
 - Mode 1..4 as requested
 - check and checkmate detection enabled
 - game ends on king capture or checkmate or points/time conditions
 - clear visual highlight for legal moves (move/capture), selected, and king-in-check
 - basic undo, flip, move history
 - limitations: no en-passant, castling implemented (basic), no threefold repetition/draw rules beyond time/points
*/

const boardEl = document.getElementById('board');
const turnTxt = document.getElementById('turnTxt');
const timeTxt = document.getElementById('timeTxt');
const ptsWEl = document.getElementById('ptsW');
const ptsBEl = document.getElementById('ptsB');
const movesEl = document.getElementById('moves');
const statusTxt = document.getElementById('statusTxt');
const modeSel = document.getElementById('modeSel');

const UNICODE = {
  'K_w':'♛','Q_w':'♚','R_w':'♜','B_w':'♝','N_w':'♞','P_w':'♟︎',
  'K_b':'♕','Q_b':'♔','R_b':'♖','B_b':'♗','N_b':'♘','P_b':'♙'
};

let state = null; // { board:[64], turn:'w'|'b', history:[] }
let flipped = false;
let selected = null;
let highlights = [];
let mode = 1;
let totalTime = 480; // seconds
let timerInt = null;
let pts = { w:5000, b:5000 };
let deductInterval = null; // for per-second deduction

// ---------- INITIAL BOARD ----------
function freshState(){
  const start = [
    'r','n','b','q','k','b','n','r',
    'p','p','p','p','p','p','p','p',
    '','','','','','','','',
    '','','','','','','','',
    '','','','','','','','',
    '','','','','','','','',
    'P','P','P','P','P','P','P','P',
    'R','N','B','Q','K','B','N','R'
  ];
  const board = start.map(ch=>{
    if(!ch) return null;
    const color = (ch === ch.toUpperCase()) ? 'w' : 'b';
    return { type: ch.toUpperCase(), color, hasMoved: false };
  });
  return { board, turn:'w', history: [] };
}

function idxToCoord(i){ const file='abcdefgh'[i%8]; const rank = 8 - Math.floor(i/8); return file+rank; }
function coordToIdx(coord){ const file = 'abcdefgh'.indexOf(coord[0]); const rank = 8 - Number(coord[1]); return rank*8 + file; }

function render(){
  boardEl.innerHTML = '';
  const order = flipped ? [...Array(64).keys()].reverse() : [...Array(64).keys()];
  order.forEach(i=>{
    const cell = document.createElement('div');
    const r = Math.floor(i/8), c = i%8;
    cell.className = 'cell ' + (((r+c)%2) ? 'dark' : 'light');
    cell.dataset.idx = i;
    const p = state.board[i];
    if(p) cell.textContent = UNICODE[p.type + '_' + p.color] || p.type;
    if(selected === i) cell.classList.add('selected');
    if(highlights.includes(i)){
      cell.classList.add(state.board[i] ? 'capture' : 'move');
    }
    // mark king in check
    const kingPosW = findKing('w'), kingPosB = findKing('b');
    if(kingPosW !== -1 && state.board[kingPosW] && isSquareAttacked(kingPosW, 'b')) {
      if(kingPosW === i) cell.classList.add('check');
    }
    if(kingPosB !== -1 && state.board[kingPosB] && isSquareAttacked(kingPosB, 'w')){
      if(kingPosB === i) cell.classList.add('check');
    }

    cell.addEventListener('click', onCellClick);
    boardEl.appendChild(cell);
  });
  turnTxt.textContent = state.turn === 'w' ? 'Putih' : 'Hitam';
  ptsWEl.textContent = pts.w;
  ptsBEl.textContent = pts.b;
  const min = Math.floor(totalTime/60), sec = totalTime%60;
  timeTxt.textContent = String(min).padStart(2,'0') + ':' + String(sec).padStart(2,'0');
}

// ---------- HELPERS ----------
function inBounds(r,c){ return r>=0 && r<8 && c>=0 && c<8; }
function cloneBoard(b){ return b.map(p => p ? ({...p}) : null); }
function findKing(color){
  for(let i=0;i<64;i++){ const p = state.board[i]; if(p && p.type==='K' && p.color === color) return i; }
  return -1;
}

// ---------- ATTACK & CHECK UTILITIES ----------
function isSquareAttacked(idx, byColor){
  // check if any piece of byColor attacks idx on current state.board
  for(let i=0;i<64;i++){
    const p = state.board[i]; if(!p || p.color !== byColor) continue;
    const r = Math.floor(i/8), c = i%8;
    const rr = Math.floor(idx/8), cc = idx%8;
    if(attacksFrom(i, rr, cc, byColor, p.type)) return true;
  }
  return false;
}

function attacksFrom(fromIdx, tr, tc, color, type){
  // returns true if piece at fromIdx (type,color) can attack square tr,tc ignoring pin/check (used for attack detection)
  const r = Math.floor(fromIdx/8), c = fromIdx%8;
  const enemy = color === 'w' ? 'b' : 'w';
  // pawn attacks
  if(type === 'P'){
    const dir = color === 'w' ? -1 : 1;
    if(tr === r+dir && Math.abs(tc - c) === 1) return true;
    // Note: en-passant not considered
    return false;
  }
  // knight
  if(type === 'N'){
    const deltas = [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1]];
    for(const d of deltas) if(r + d[0] === tr && c + d[1] === tc) return true;
    return false;
  }
  // king (one step)
  if(type === 'K'){
    if(Math.max(Math.abs(r-tr), Math.abs(c-tc)) === 1) return true;
    return false;
  }
  // rook/queen orthogonal
  if(type === 'R' || type === 'Q'){
    const dirs = [[-1,0],[1,0],[0,-1],[0,1]];
    for(const d of dirs){
      let rr = r+d[0], cc = c+d[1];
      while(inBounds(rr,cc)){
        if(rr === tr && cc === tc) return true;
        if(state.board[rr*8+cc]) break;
        rr += d[0]; cc += d[1];
      }
    }
  }
  // bishop/queen diagonal
  if(type === 'B' || type === 'Q'){
    const dirs = [[-1,-1],[-1,1],[1,-1],[1,1]];
    for(const d of dirs){
      let rr = r+d[0], cc = c+d[1];
      while(inBounds(rr,cc)){
        if(rr === tr && cc === tc) return true;
        if(state.board[rr*8+cc]) break;
        rr += d[0]; cc += d[1];
      }
    }
  }
  return false;
}

// ---------- LEGAL MOVES (includes mode logic & filters moves that leave own king in check) ----------
function legalMoves(idx){
  const p = state.board[idx]; if(!p) return [];
  const r = Math.floor(idx/8), c = idx%8;
  const color = p.color, enemy = color === 'w' ? 'b' : 'w';
  let moves = [];
  const push = (rr,cc)=>{
    if(!inBounds(rr,cc)) return;
    const j = rr*8 + cc; const t = state.board[j];
    if(!t || t.color !== color) moves.push(j);
  };

  // --- basic piece moves ---
  // Pawn
  if(p.type === 'P'){
    const dir = p.color === 'w' ? -1 : 1;
    // forward
    if(inBounds(r+dir,c) && !state.board[(r+dir)*8 + c]) moves.push((r+dir)*8 + c);
    // two squares
    const startRow = p.color === 'w' ? 6 : 1;
    if(r === startRow && !state.board[(r+dir)*8 + c] && !state.board[(r+2*dir)*8 + c]) moves.push((r+2*dir)*8 + c);
    // captures
    for(const dc of [-1,1]){
      const rr = r+dir, cc = c+dc;
      if(inBounds(rr,cc)){ const t = state.board[rr*8 + cc]; if(t && t.color === enemy) moves.push(rr*8 + cc); }
    }
    if(mode === 3){
      // pawn can move sideways without capture (right/left)
      for(const dc of [-1,1]){ const rr = r, cc = c+dc; if(inBounds(rr,cc) && !state.board[rr*8 + cc]) moves.push(rr*8 + cc); }
    }
  }

  // Knight
  if(p.type === 'N'){
    const deltas = [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1]];
    deltas.forEach(d=> push(r+d[0], c+d[1]));
  }

  // Bishop
  if(p.type === 'B' || p.type === 'Q' || p.type === 'R'){
    // bishop part for B & Q
    if(p.type === 'B' || p.type === 'Q'){
      [[-1,-1],[-1,1],[1,-1],[1,1]].forEach(d=>{
        let rr=r+d[0], cc=c+d[1];
        while(inBounds(rr,cc)){
          const j = rr*8+cc; const t = state.board[j];
          if(!t) moves.push(j);
          else { if(t.color !== color) moves.push(j); break; }
          rr+=d[0]; cc+=d[1];
        }
      });
    }
  }
  // Rook / queen rook part
  if(p.type === 'R' || p.type === 'Q'){
    [[-1,0],[1,0],[0,-1],[0,1]].forEach(d=>{
      let rr=r+d[0], cc=c+d[1];
      while(inBounds(rr,cc)){
        const j = rr*8+cc; const t = state.board[j];
        if(!t) moves.push(j);
        else { if(t.color !== color) moves.push(j); break; }
        rr+=d[0]; cc+=d[1];
      }
    });
  }

  // King basic
  if(p.type === 'K'){
    for(let dr=-1;dr<=1;dr++) for(let dc=-1;dc<=1;dc++){
      if(dr===0 && dc===0) continue; push(r+dr,c+dc);
    }
    // Basic castling (ensure squares empty & rook/king unmoved & not in checks) - permit but filter later by check rules
    const row = r;
    if(!p.hasMoved){
      // king-side rook at col 7
      if(state.board[row*8+7] && state.board[row*8+7].type === 'R' && !state.board[row*8+7].hasMoved){
        if(!state.board[row*8+5] && !state.board[row*8+6]) moves.push(row*8+6);
      }
      // queen-side rook at col 0
      if(state.board[row*8+0] && state.board[row*8+0].type === 'R' && !state.board[row*8+0].hasMoved){
        if(!state.board[row*8+1] && !state.board[row*8+2] && !state.board[row*8+3]) moves.push(row*8+2);
      }
    }
  }

  // --- MODE augmentations ---
  if(mode === 2){
    // Queen & King also have knight moves
    if( p.type === 'K'){
      const deltas = [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1]];
      deltas.forEach(d=> push(r+d[0], c+d[1]));
    }
   if(p.type === 'Q'){
      const deltas = [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1]];
      deltas.forEach(d=> push(r+d[0], c+d[1]));
    }
  }


  if(mode === 3){
    // Knight: knight + pawn + king
    if(p.type === 'N'){
      // pawn-like forward
      const dir = p.color === 'w' ? -1 : 1;
      if(inBounds(r+dir,c) && !state.board[(r+dir)*8 + c]) moves.push((r+dir)*8 + c);
      // pawn captures
      for(const dc of [-1,1]){ const rr = r+dir, cc=c+dc; if(inBounds(rr,cc)){ const t = state.board[rr*8+cc]; if(t && t.color === enemy) moves.push(rr*8+cc); } }
      // king-like one step
      for(let dr=-1;dr<=1;dr++) for(let dc=-1;dc<=1;dc++) if(!(dr===0&&dc===0)) push(r+dr,c+dc);
      // knight already added earlier
    }
  }

  if(mode === 4){
    // Mode 4 superpower mapping per your spec:
    // Pawn = Pawn + King + Knight
    if(p.type === 'P'){
      // king-like
      for(let dr=-1;dr<=1;dr++) for(let dc=-1;dc<=1;dc++) if(!(dr===0&&dc===0)) push(r+dr,c+dc);
      // knight-like
      [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1]].forEach(d=> push(r+d[0], c+d[1]));
    }
    // Knight = Knight + Rook + King
    if(p.type === 'N'){
      // rook-like
      [[-1,0],[1,0],[0,-1],[0,1]].forEach(d=>{
        let rr=r+d[0], cc=c+d[1];
        while(inBounds(rr,cc)){
          const j = rr*8+cc; const t = state.board[j]; if(!t) moves.push(j); else { if(t.color !== color) moves.push(j); break; } rr+=d[0]; cc+=d[1];
        }
      });
      // king-like
      for(let dr=-1;dr<=1;dr++) for(let dc=-1;dc<=1;dc++) if(!(dr===0&&dc===0)) push(r+dr,c+dc);
      // knight part already added earlier
    }
    // King = King + Bishop + Knight
    if(p.type === 'K'){
      // bishop-like slides
      [[-1,-1],[-1,1],[1,-1],[1,1]].forEach(d=>{
        let rr=r+d[0], cc=c+d[1];
        while(inBounds(rr,cc)){
          const j = rr*8+cc; const t = state.board[j]; if(!t) moves.push(j); else { if(t.color !== color) moves.push(j); break; } rr+=d[0]; cc+=d[1];
        }
      });
      // knight-like
      [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1]].forEach(d=> push(r+d[0], c+d[1]));
      // king's one-step already added earlier
    }
    // Bishop = Bishop + Pawn-like
    if(p.type === 'B'){
      const dir = p.color === 'w' ? -1 : 1;
      if(inBounds(r+dir,c) && !state.board[(r+dir)*8 + c]) moves.push((r+dir)*8 + c);
      for(const dc of [-1,1]){ const rr = r+dir, cc=c+dc; if(inBounds(rr,cc)){ const t=state.board[rr*8+cc]; if(t && t.color === enemy) moves.push(rr*8+cc); } }
    }
    // Rook = Rook + King
    if(p.type === 'R'){
      for(let dr=-1;dr<=1;dr++) for(let dc=-1;dc<=1;dc++) if(!(dr===0&&dc===0)) push(r+dr,c+dc);
    }
    // Queen = Queen + Knight
    if(p.type === 'Q'){
      [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1]].forEach(d=> push(r+d[0], c+d[1]));
    }
  }
if(mode === 5){
    if( p.type === 'B'){
      const deltas = [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1]];
      deltas.forEach(d=> push(r+d[0], c+d[1]));
    }
  }
  // remove duplicates
  moves = [...new Set(moves)];

  // Filter moves that leave own king in check (legal move rule)
  const legal = moves.filter(target=>{
    const copy = cloneBoard(state.board);
    const moving = copy[idx];
    // perform move on copy
    // handle castling special rook move
    copy[target] = { ...moving, hasMoved: true };
    copy[idx] = null;
    // if moving king and castling (difference 2 cols)
    if(moving.type === 'K' && Math.abs(target - idx) === 2){
      const row = Math.floor(idx/8);
      if(target > idx){ // king-side
        copy[row*8+5] = copy[row*8+7]; copy[row*8+7] = null;
      } else { // queen-side
        copy[row*8+3] = copy[row*8+0]; copy[row*8+0] = null;
      }
    }
    // find king position for color
    let kingPos = -1;
    for(let j=0;j<64;j++){ const q = copy[j]; if(q && q.type === 'K' && q.color === color){ kingPos = j; break; } }
    // if king was captured by this move (possible in some modes) then it's illegal if we require king to exist — but capture of opponent king ends game, so allow moves that capture opponent king
    // here we check whether after move own king is attacked
    if(kingPos === -1){
      // own king missing (captured somehow) — treat as legal (we allow king to be captured in this ruleset?), but for check rules we disallow moving into leaving no king.
      // To maintain correct check/checkmate behavior, treat missing king as being checked.
      return false;
    }
    // temporarily set state.board to copy to reuse isSquareAttacked
    const oldBoard = state.board;
    state.board = copy;
    const attacked = isSquareAttacked(kingPos, color === 'w' ? 'b' : 'w');
    state.board = oldBoard;
    return !attacked;
  });
  return legal;
}

// ---------- UI interactions ----------
// ---------- ON CELL CLICK ----------
function onCellClick(e){
  const idx = Number(e.currentTarget.dataset.idx);
  const p = state.board[idx];

  if(selected === null){
    if(p && p.color === state.turn){
      selected = idx; 
      highlights = legalMoves(idx);
    }
    // klik kosong atau lawan tanpa seleksi: tidak melakukan apa-apa
  } else {
    if(idx === selected){
      // klik ulang bidak yang sama → batal
      selected = null; 
      highlights = [];
    } else if(highlights.includes(idx)){
      // klik target legal → lakukan langkah
      makeMove(selected, idx);
      return; // biar makeMove yang handle render
    } else {
      // coba pilih bidak lain
      if(p && p.color === state.turn){
        selected = idx; 
        highlights = legalMoves(idx);
      } else {
        selected = null; 
        highlights = [];
      }
    }
  }
  render();
}


// ---------- MAKE MOVE (with promotion, castling, king capture handling) ----------
function makeMove(from, to){
  const piece = state.board[from];
  if(!piece) return;

  // record history for undo (deep copy)
  state.history.push({ 
    board: cloneBoard(state.board), 
    turn: state.turn, 
    pts: {...pts}, 
    totalTime, 
    movesHtml: movesEl.innerHTML 
  });

  // check castling
  const isCastling = (piece.type === 'K' && Math.abs(to - from) === 2);

  // perform move & captures
  const captured = state.board[to];
  state.board[to] = { ...piece, hasMoved: true };
  state.board[from] = null;

  if(isCastling){
    const row = Math.floor(from/8);
    if(to > from){ // king-side
      state.board[row*8+5] = state.board[row*8+7];
      state.board[row*8+7] = null;
      if(state.board[row*8+5]) state.board[row*8+5].hasMoved = true;
    } else { // queen-side
      state.board[row*8+3] = state.board[row*8+0];
      state.board[row*8+0] = null;
      if(state.board[row*8+3]) state.board[row*8+3].hasMoved = true;
    }
  }

  // pawn promotion
  if(state.board[to].type === 'P'){
    const r = Math.floor(to/8);
    if((state.board[to].color === 'w' && r === 0) || (state.board[to].color === 'b' && r === 7)){
      const choice = prompt('Promosi pawn! Pilih Q/R/B/N — default Q').toUpperCase();
      const map = { 'Q':'Q','R':'R','B':'B','N':'N' };
      state.board[to].type = map[choice] || 'Q';
    }
  }

  // append move to history UI (indicate capture)
  const moveText = `${idxToCoord(from)} → ${idxToCoord(to)} (${piece.type}${piece.color})${captured ? ' ×'+captured.type+captured.color : ''}`;
  const d = document.createElement('div'); 
  d.textContent = moveText; 
  movesEl.prepend(d);

  // check if captured was a king -> game end
  if(captured && captured.type === 'K'){
    clearAllIntervals();
    statusTxt.textContent = `Raja ${captured.color === 'w' ? 'Putih' : 'Hitam'} tertangkap — ${piece.color === 'w' ? 'Putih' : 'Hitam'} menang`;
    render();
    return;
  }

  // switch turn
  state.turn = (state.turn === 'w' ? 'b' : 'w');

  // After switching, check for checkmate
  const next = state.turn;
  const kingPos = findKing(next);
  const inCheck = kingPos !== -1 && isSquareAttacked(kingPos, next === 'w' ? 'b' : 'w');
  const hasAnyLegal = (()=>{ 
    for(let i=0;i<64;i++){ 
      const u = state.board[i]; 
      if(u && u.color === next && legalMoves(i).length>0) return true; 
    } 
    return false; 
  })();

  if(!hasAnyLegal && inCheck){
    clearAllIntervals();
    statusTxt.textContent = `SKAKMAT — ${next === 'w' ? 'Putih' : 'Hitam'} kalah. ${next === 'w' ? 'Hitam' : 'Putih'} menang.`;
    render(); 
    return;
  }

  if(!hasAnyLegal && !inCheck){
    clearAllIntervals();
    statusTxt.textContent = 'Remis (stalemate)';
    render(); 
    return;
  }

  // reset klik & highlight untuk giliran berikut
  selected = null;
  highlights = [];

  render();
}

// ---------- UNDO ----------
function undo(){
  if(state.history.length === 0) return;
  const last = state.history.pop();
  state.board = cloneBoard(last.board);
  state.turn = last.turn;
  pts = { ...last.pts };
  totalTime = last.totalTime !== undefined ? last.totalTime : totalTime;
  movesEl.innerHTML = last.movesHtml || '';
  render();
}

// ---------- TIMER & POINT DEDUCTION ----------
function startTimer(){
  if(timerInt) clearInterval(timerInt);
  timerInt = setInterval(()=>{
    if(totalTime <= 0){
      endByTime(); return;
    }
    totalTime -= 1;
    // deduct 25 points for active player each second
    pts[state.turn] -= 25;
    if(pts[state.turn] < 0) pts[state.turn] = 0;
    // if any player's points hit 0 -> end immediately
    if(pts.w === 0 || pts.b === 0){
      clearAllIntervals();
      const winner = pts.w > pts.b ? 'Putih' : pts.b > pts.w ? 'Hitam' : 'Seri';
      statusTxt.textContent = `Poin habis — ${winner} menang.`;
      render(); return;
    }
    render();
  }, 1000);
}

function clearAllIntervals(){
  if(timerInt) clearInterval(timerInt);
  timerInt = null;
}

// ---------- END BY TIME ----------
function endByTime(){
  clearAllIntervals();
  const winner = pts.w > pts.b ? 'Putih' : pts.b > pts.w ? 'Hitam' : 'Seri';
  statusTxt.textContent = `Waktu habis — ${winner}`;
  render();
}

// ---------- ATTACK CHECKS HELPER (uses current state) ----------
/* (implemented above as isSquareAttacked + attacksFrom) */

// ---------- CONTROLS ----------
document.getElementById('startBtn').addEventListener('click', ()=>{
  if(!confirm('Mulai ulang permainan? (Ya akan reset papan, waktu, poin)')) return;
  mode = Number(modeSel.value);
  state = freshState();
  pts = { w:5000, b:5000 };
  totalTime = 480;
  selected = null; highlights = [];
  movesEl.innerHTML = '';
  statusTxt.textContent = 'Game berjalan — mode ' + mode;
  if(timerInt) clearAllIntervals();
  startTimer();
  render();
});

document.getElementById('flipBtn').addEventListener('click', ()=>{ flipped = !flipped; render(); });
document.getElementById('undoBtn').addEventListener('click', ()=>{ undo(); });

// ---------- INIT ----------
state = freshState();
render();
statusTxt.textContent = 'Siap — pilih mode lalu klik Start / Reset';

</script>
</body>
</html>
