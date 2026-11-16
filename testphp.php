<?php
$name = 'เดโช';
$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#202b4b">
<title>ตัวอย่าง PHP: echo และการต่อข้อความ</title>
<style>
:root{--ink:#202b4b;--muted:#66718b;--paper:#fffdf8;--blue:#8ecbff;--yellow:#ffe28a;--pink:#ffc4d5;--green:#b9edcf;--cyan:#6ee7ef}
*{box-sizing:border-box}
body{min-height:100vh;margin:0;color:var(--ink);background:radial-gradient(circle at 8% 12%,#ffe28a88 0 7rem,transparent 7.1rem),radial-gradient(circle at 94% 30%,#8ecbff77 0 9rem,transparent 9.1rem),#f1f6ff;font-family:"Trebuchet MS",Tahoma,"Noto Sans Thai",sans-serif;line-height:1.65;display:flex;flex-direction:column}
a{color:#168bb7}
.shell{width:min(1050px,calc(100% - 32px));margin:24px auto;flex:1}
.topbar{display:flex;align-items:center;justify-content:space-between;gap:18px;padding:17px 24px;color:white;background:var(--ink);border:3px solid #111a32;border-radius:22px;box-shadow:5px 6px 0 #202b4b24}
.brand{display:flex;align-items:center;gap:13px}
.mark{display:grid;place-items:center;width:54px;height:54px;flex:none;color:var(--ink);background:var(--cyan);border:3px solid white;border-radius:17px;font-size:25px;font-weight:900}
.brand h1{margin:0;font-size:1.6rem;line-height:1.1}.brand p{margin:4px 0 0;color:#d8e8ff;font-size:.9rem}
.back{padding:9px 15px;color:var(--ink);background:var(--yellow);border:2px solid white;border-radius:999px;text-decoration:none;font-weight:900;white-space:nowrap}
.hero{margin:22px 0;padding:clamp(24px,5vw,42px);background:linear-gradient(115deg,#dff4ff,#fff4d7 72%,#ffe4ec);border:3px solid var(--ink);border-radius:26px;box-shadow:5px 6px 0 #202b4b24;text-align:center}
.eyebrow{margin:0 0 5px;color:#51617f;font-weight:800;letter-spacing:1.5px}.hero h2{margin:0;font-size:clamp(1.8rem,5vw,3rem);line-height:1.2}.hero p:last-child{margin:12px 0 0;color:var(--muted)}
.lesson-nav{display:flex;flex-wrap:wrap;gap:8px;margin:16px 0;padding:12px;background:var(--paper);border:2px solid var(--ink);border-radius:18px}
.lesson-nav a{padding:6px 11px;color:var(--ink);background:#e7f4ff;border-radius:999px;text-decoration:none;font-size:.9rem;font-weight:800}.lesson-nav a:hover,.lesson-nav a:focus-visible{background:var(--yellow);outline:2px solid var(--ink);outline-offset:1px}
.samples{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}
.sample{padding:22px;background:var(--paper);border:3px solid var(--ink);border-radius:20px;box-shadow:4px 5px 0 #202b4b20}
.sample h3{margin:0 0 8px;font-size:1.15rem}.sample p{margin:8px 0 0}
.number{display:inline-block;margin-bottom:12px;padding:4px 10px;background:var(--yellow);border:1.5px solid var(--ink);border-radius:999px;font-size:.82rem;font-weight:900}
.output{display:block;margin-top:12px;padding:15px 17px;color:#202b4b;background:#e8f7ff;border-left:5px solid #168bb7;border-radius:10px;font-size:1.2rem;font-weight:800;overflow-wrap:anywhere}
.welcome{margin:12px 0 0;padding:14px;color:#202b4b;background:#fff0b9;border:2px dashed #b68b2c;border-radius:12px;font-size:1.4rem}
.wide{grid-column:1/-1}
.bottom{display:flex;justify-content:center;margin:22px 0}.bottom a{padding:11px 19px;color:white;background:#273d69;border:2px solid var(--ink);border-radius:999px;text-decoration:none;font-weight:900}.bottom a:hover{color:var(--ink);background:var(--yellow)}
footer{margin:0 16px 18px;padding:15px 20px;color:white;background:var(--ink);border:3px solid #111a32;border-radius:18px;text-align:center}
@media(max-width:680px){.shell{width:calc(100% - 18px);margin:10px auto}.topbar{align-items:flex-start;flex-direction:column}.back{align-self:flex-start}.samples{grid-template-columns:1fr}.wide{grid-column:auto}.sample{padding:18px}}
</style>
</head>
<body>
<div class="shell">
<header class="topbar">
<div class="brand"><div class="mark" aria-hidden="true">&lt;/&gt;</div><div><h1>PHP_7005</h1><p>Web Development Practice Project</p></div></div>
<a class="back" href="index.html">← กลับหน้าหลัก</a>
</header>
<main>
<section class="hero"><p class="eyebrow">PHP BASICS · OUTPUT</p><h2>การแสดงผลด้วย echo ✨</h2><p>ทดลองแสดงข้อความ ต่อข้อความ และใช้ short echo tag</p></section>
<nav class="lesson-nav" aria-label="ลิงก์บทเรียน PHP"><a href="index.html">หน้าแรก</a><a href="Lesson5/Task2php.php">Task 2</a><a href="Lesson5/Task3php.php">Task 3</a><a href="Lesson5/Task4php.php">Task 4</a><a href="Lesson5/Task5php.php">Task 5</a><a href="Lesson5/Task6php.php">Task 6</a></nav>
<section class="samples" aria-label="ตัวอย่างการแสดงผล PHP">
<article class="sample">
<span class="number">ตัวอย่าง 1</span>
<h3>แสดงข้อความด้วย echo</h3>
<p>คำสั่ง <code>echo</code> ส่งข้อความออกมาในหน้าเว็บ</p>
<div class="output"><?php echo "สวัสดีโลก!"; ?></div>
</article>
<article class="sample">
<span class="number">ตัวอย่าง 2</span>
<h3>แสดง HTML ผ่าน echo</h3>
<?php echo "<h2 class=\"welcome\">ยินดีต้อนรับ</h2>"; ?>
<p>PHP สามารถส่ง HTML เพื่อสร้างองค์ประกอบบนหน้าเว็บได้</p>
</article>
<article class="sample">
<span class="number">ตัวอย่าง 3</span>
<h3>เชื่อมข้อความด้วยจุด (.)</h3>
<p class="output"><?php echo "สวัสดี " . $safeName . "!"; ?></p>
<p>ตัวดำเนินการ <code>.</code> ใช้ต่อข้อความเข้าด้วยกัน</p>
</article>
<article class="sample">
<span class="number">ตัวอย่าง 4</span>
<h3>ใช้ Short echo tag</h3>
<p class="output">ชื่อของฉันคือ <?= $safeName ?></p>
<p>รูปแบบ <code>&lt;?= $variable ?&gt;</code> ใช้แสดงค่าตัวแปรอย่างย่อ</p>
</article>
<article class="sample wide">
<h3>สรุป</h3>
<p>ใช้ <code>echo</code> เพื่อแสดงผล, ใช้จุดเพื่อเชื่อมข้อความ และใช้ <code>&lt;?= ?&gt;</code> เมื่ออยากแสดงค่าตัวแปรใน HTML โดยตรง</p>
</article>
</section>
<div class="bottom"><a href="index.html">← กลับไปยังหน้าแรก</a></div>
</main>
</div>
<footer>© PHP_7005 · Web Development Practice · Happy Coding! 💙</footer>
</body>
</html>
