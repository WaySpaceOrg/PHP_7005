<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#202b4b">
<title>Lesson 5 | Task 5</title>
<link rel="stylesheet" href="lesson5.css">
</head>
<body>
<div class="shell">
<header class="topbar">
    <div class="brand"><div class="mark" aria-hidden="true">&lt;/&gt;</div><div><h1>PHP_7005</h1><p>Web Development Practice Project</p></div></div>
    <a class="back" href="../index.html">← กลับหน้าหลัก</a>
</header>
<nav class="lesson-nav" aria-label="เมนู Lesson 5">
    <a href="../index.html">⌂ หน้าแรก</a>
    <a href="Task2php.php">Task 2</a>
    <a href="Task3php.php">Task 3</a>
    <a href="Task4php.php">Task 4</a>
    <a href="Task5php.php" aria-current="page">Task 5</a>
    <a href="Task6php.php">Task 6</a>
</nav>
<main>
<section class="hero"><p class="eyebrow">LESSON 05 · TASK 05</p><h2>คำนวณราคาและเพิ่มทิป ✨</h2><p>PHP คำนวณบนเซิร์ฟเวอร์ · JavaScript เพิ่มทิปในเบราว์เซอร์</p></section>
<section class="panel">
    <h1>ร้านกาแฟแมวเหมียว</h1>
    <?php
    $item  = "ลาเต้";
    $price = 45;
    $qty   = 3;
    $total = $price * $qty;          // PHP คิดบน server
    ?>
    <p><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?> x <?= $qty ?></p>
    <p>รวม <?= $total ?> บาท</p>
    <button id="tip" type="button">เพิ่มทิป 10%</button>
    <p id="grand" aria-live="polite"></p>

    <script>
        // PHP เขียนตัวเลขลงมาให้ตอนสร้างหน้า — browser เห็นเป็น const total = 135;
        const total = <?= $total ?>;

        document.getElementById("tip").addEventListener("click", function () {
            document.getElementById("grand").textContent = "รวมทิป " + (total * 1.1).toFixed(2) + " บาท";
        });
    </script>
</section>
<div class="bottom"><a href="../index.html">← กลับไปยังหน้าแรก</a></div>
</main>
</div>
<footer>© PHP_7005 · Web Development Practice · <a href="https://github.com/WaySpaceOrg/PHP_7005" target="_blank" rel="noopener noreferrer">GitHub Repository ↗</a></footer>
</body>
</html>
