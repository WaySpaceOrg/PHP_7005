<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#202b4b">
<title>Lesson 5 | Task 3</title>
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
    <a href="Task3php.php" aria-current="page">Task 3</a>
    <a href="Task4php.php">Task 4</a>
    <a href="Task5php.php">Task 5</a>
    <a href="Task6php.php">Task 6</a>
</nav>
<main>
<section class="hero"><p class="eyebrow">LESSON 05 · TASK 03</p><h2>ตัวแปรและชนิดข้อมูล ✨</h2><p>ตัวอย่าง PHP · PHP_7005</p></section>
<section class="panel">
    <h1>ผลลัพธ์</h1>
    <pre class="output"><?php
$name   = "เดโช";         // String
$age    = 39;              // Integer
$gpa    = 3.75;            // Float
$active = true;            // Boolean
$note   = null;            // NULL

echo gettype($name), "\n"; // string
var_dump($age);            // int(39)
echo "\n";

// String interpolation (ใส่ตัวแปรใน "")
echo "ชื่อ: $name อายุ: $age ปี\n";

// Constants
define("PI", 3.14159);
echo PI, "\n";
?></pre>
</section>
<div class="bottom"><a href="../index.html">← กลับไปยังหน้าแรก</a></div>
</main>
</div>
<footer>© PHP_7005 · Web Development Practice · <a href="https://github.com/WaySpaceOrg/PHP_7005" target="_blank" rel="noopener noreferrer">GitHub Repository ↗</a></footer>
</body>
</html>
