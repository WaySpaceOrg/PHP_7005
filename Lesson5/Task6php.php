<?php
if (PHP_SAPI === 'cli') {
    // อ่านค่าจากผู้ใช้ทีละบรรทัด
    $price    = (float)trim(fgets(STDIN));
    $qty      = (int)trim(fgets(STDIN));
    $discount = (float)trim(fgets(STDIN));

    $vatRate = 0.07;

    // คำนวณตามลำดับในโจทย์
    $beforeDiscount = $price * $qty;
    $afterDiscount = $beforeDiscount - $discount;
    $vat = $afterDiscount * $vatRate;
    $netTotal = $afterDiscount + $vat;

    // แสดงผล 4 บรรทัด
    echo "ยอดก่อนลด = " . number_format($beforeDiscount, 2) . "\n";
    echo "ยอดหลังลด = " . number_format($afterDiscount, 2) . "\n";
    echo "VAT 7% = " . number_format($vat, 2) . "\n";
    echo "ยอดสุทธิ = " . number_format($netTotal, 2) . "\n";
    exit;
}

$values = [
    'price' => is_string($_POST['price'] ?? null) ? trim($_POST['price']) : '',
    'qty' => is_string($_POST['qty'] ?? null) ? trim($_POST['qty']) : '',
    'discount' => is_string($_POST['discount'] ?? null) ? trim($_POST['discount']) : '',
];
$error = null;
$results = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !is_numeric($values['price'])
        || filter_var($values['qty'], FILTER_VALIDATE_INT) === false
        || !is_numeric($values['discount'])
    ) {
        $error = 'กรุณากรอกราคา จำนวนสินค้า และส่วนลดเป็นตัวเลขให้ถูกต้อง';
    } else {
        $price = (float)$values['price'];
        $qty = (int)$values['qty'];
        $discount = (float)$values['discount'];

        if ($price < 0 || $qty < 0 || $discount < 0) {
            $error = 'กรุณากรอกตัวเลขที่ไม่ติดลบ';
        } else {
            $beforeDiscount = $price * $qty;
            $afterDiscount = $beforeDiscount - $discount;
            $vat = $afterDiscount * 0.07;
            $netTotal = $afterDiscount + $vat;

            $results = [
                'ยอดก่อนลด' => number_format($beforeDiscount, 2),
                'ยอดหลังลด' => number_format($afterDiscount, 2),
                'VAT 7%' => number_format($vat, 2),
                'ยอดสุทธิ' => number_format($netTotal, 2),
            ];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#202b4b">
<title>Lesson 5 | Task 6</title>
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
    <a href="Task5php.php">Task 5</a>
    <a href="Task6php.php" aria-current="page">Task 6</a>
</nav>
<main>
<section class="hero"><p class="eyebrow">LESSON 05 · TASK 06</p><h2>คำนวณส่วนลดและ VAT ✨</h2><p>กรอกข้อมูลเพื่อคำนวณยอดสุทธิ · PHP_7005</p></section>
<section class="panel">
    <h1>รายละเอียดสินค้า</h1>
    <form method="post">
        <label for="price">ราคาต่อชิ้น</label>
        <input id="price" name="price" type="number" min="0" step="any" value="<?= htmlspecialchars($values['price'], ENT_QUOTES, 'UTF-8') ?>" required>

        <label for="qty">จำนวนสินค้า</label>
        <input id="qty" name="qty" type="number" min="0" step="1" value="<?= htmlspecialchars($values['qty'], ENT_QUOTES, 'UTF-8') ?>" required>

        <label for="discount">ส่วนลด</label>
        <input id="discount" name="discount" type="number" min="0" step="any" value="<?= htmlspecialchars($values['discount'], ENT_QUOTES, 'UTF-8') ?>" required>

        <button type="submit">คำนวณ</button>
    </form>
    <?php if ($error !== null): ?>
    <p class="error" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php elseif ($results !== null): ?>
    <section class="results" aria-live="polite">
        <?php foreach ($results as $label => $amount): ?>
        <p><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?> = <?= $amount ?> บาท</p>
        <?php endforeach; ?>
    </section>
    <?php endif; ?>
</section>
<div class="bottom"><a href="../index.html">← กลับไปยังหน้าแรก</a></div>
</main>
</div>
<footer>© PHP_7005 · Web Development Practice · <a href="https://github.com/WaySpaceOrg/PHP_7005" target="_blank" rel="noopener noreferrer">GitHub Repository ↗</a></footer>
</body>
</html>
