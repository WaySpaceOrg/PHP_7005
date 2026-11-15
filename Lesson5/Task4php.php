<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#202b4b">
<title>Lesson 5 | Task 4</title>
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
    <a href="Task4php.php" aria-current="page">Task 4</a>
    <a href="Task5php.php">Task 5</a>
    <a href="Task6php.php">Task 6</a>
</nav>
<main>
<section class="hero"><p class="eyebrow">LESSON 05 · TASK 04</p><h2>ตัวดำเนินการและฟังก์ชันข้อความ ✨</h2><p>ตัวอย่าง PHP · PHP_7005</p></section>
<section class="panel">
    <h1>ผลลัพธ์</h1>
    <pre class="output"><?php
$a = 10; $b = 3;
echo ($a + $b) . "\n";    // 13
echo ($a % $b) . "\n";    // 1 (เศษ)
echo ($a ** $b) . "\n";   // 1000 (ยกกำลัง)

// String functions
$email = "  Hello@Email.COM  ";
$email = trim(strtolower($email));  // hello@email.com

$text = "Hello World";
echo strlen($text) . "\n";                    // 11
echo substr($text, 0, 5) . "\n";             // Hello
echo str_replace("World","PHP",$text) . "\n"; // Hello PHP
echo strpos($text, "World") . "\n";          // 6

// จัดรูปแบบตัวเลขสำหรับแสดงผล
$price = 1234567.891;
echo number_format($price) . "\n";       // 1,234,568   (ปัดเป็นจำนวนเต็ม)
echo number_format($price, 2) . "\n";    // 1,234,567.89

$area = 23.1;
echo $area . "\n";                       // 23.1   ← ทศนิยมไม่ครบ
echo number_format($area, 2) . "\n";     // 23.10  ← ครบ 2 ตำแหน่งเสมอ
?></pre>
</section>
<div class="bottom"><a href="../index.html">← กลับไปยังหน้าแรก</a></div>
</main>
</div>
<footer>© PHP_7005 · Web Development Practice · <a href="https://github.com/WaySpaceOrg/PHP_7005" target="_blank" rel="noopener noreferrer">GitHub Repository ↗</a></footer>
</body>
</html>
