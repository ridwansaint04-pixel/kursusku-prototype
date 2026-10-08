<?php

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$courseCode = trim($_POST['course'] ?? '');
$participantType = trim($_POST['participant_type'] ?? '');
$learningMode = trim($_POST['learning_mode'] ?? '');
$packageCount = (int) ($_POST['package_count'] ?? 0);
$interests = $_POST['interests'] ?? [];

if (!is_array($interests)) {
    $interests = [];
}

$errors = [];

/* Validasi */
if ($name === '') {
    $errors[] = 'Nama wajib diisi.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format email tidak valid.';
}

$course = findCourse($courses, $courseCode);

if ($course === null) {
    $errors[] = 'Kursus tidak valid.';
}

if (!in_array($participantType, ['mahasiswa', 'guru', 'umum'], true)) {
    $errors[] = 'Jenis peserta tidak valid.';
}

if (!in_array($learningMode, ['offline', 'online', 'hybrid'], true)) {
    $errors[] = 'Mode belajar tidak valid.';
}

if ($packageCount < 1 || $packageCount > 3) {
    $errors[] = 'Jumlah paket harus antara 1 sampai 3.';
}

/* Validasi minat */
$validInterests = array_keys($interestOptions);
$interests = array_values(
    array_intersect($interests, $validInterests)
);

if ($errors !== []) {
    echo '<h2>Terjadi Kesalahan</h2>';
    echo '<ul>';

    foreach ($errors as $error) {
        echo '<li>' . e($error) . '</li>';
    }

    echo '</ul>';
    echo '<a href="register.php">Kembali ke Form</a>';
    exit;
}

/* Perhitungan biaya */
$discountPercent = getDiscountPercent($participantType);

$grossTotal = $course['fee'] * $packageCount;

$discountAmount = intdiv(
    $grossTotal * $discountPercent,
    100
);

$finalTotal = $grossTotal - $discountAmount;

$learningModeLabel = getLearningModeLabel($learningMode);

?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hasil Pendaftaran - KursusKu UIN</title>

    <link rel="stylesheet" href="assets/css/style.css?v=3">
</head>

<body class="result-page">

<main class="result-container">

    <section class="result-intro">

        <span class="result-badge">
            ✓ PENDAFTARAN BERHASIL
        </span>

        <h1>Ringkasan Pendaftaran</h1>

        <p>
            Terima kasih telah melakukan pendaftaran.
            Berikut detail pendaftaran Anda.
        </p>

    </section>


    <section class="result-card">

        <div class="result-card-header">

            <div class="result-card-icon">
                ✓
            </div>

            <div>
                <h2>Detail Pendaftaran</h2>
                <p>Informasi peserta dan kursus</p>
            </div>

        </div>


        <div class="result-section">

            <h3>Data Peserta</h3>

            <div class="detail-grid">

                <div class="detail-item">
                    <span class="detail-label">Nama</span>
                    <strong><?= e($name) ?></strong>
                </div>

                <div class="detail-item">
                    <span class="detail-label">Email</span>
                    <strong><?= e($email) ?></strong>
                </div>

                <div class="detail-item">
                    <span class="detail-label">Jenis Peserta</span>
                    <strong><?= e(ucfirst($participantType)) ?></strong>
                </div>

                <div class="detail-item">
                    <span class="detail-label">Mode Belajar</span>
                    <strong><?= e($learningModeLabel) ?></strong>
                </div>

            </div>

        </div>


        <div class="result-section">

            <h3>Kursus yang Dipilih</h3>

            <div class="course-selected">

                <div class="course-icon">
                    💻
                </div>

                <div>
                    <span>KURSUS</span>

                    <strong>
                        <?= e($course['name']) ?>
                    </strong>
                </div>

                <div class="package-info">

                    <span>Paket</span>

                    <strong>
                        <?= $packageCount ?>
                    </strong>

                </div>

            </div>

        </div>


        <div class="result-section">

            <h3>Rincian Pembayaran</h3>

            <div class="payment-list">

                <div class="payment-row">

                    <span>Subtotal</span>

                    <strong>
                        <?= formatRupiah($grossTotal) ?>
                    </strong>

                </div>


                <div class="payment-row discount-row">

                    <span>Diskon</span>

                    <strong>
                        <?= $discountPercent ?>%
                        (-<?= formatRupiah($discountAmount) ?>)
                    </strong>

                </div>


                <div class="payment-total">

                    <div>
                        <span>Total Pembayaran</span>

                        <small>
                            Harga setelah diskon
                        </small>
                    </div>

                    <strong>
                        <?= formatRupiah($finalTotal) ?>
                    </strong>

                </div>

            </div>

        </div>


        <div class="result-section">

            <h3>Minat Belajar</h3>

            <?php if ($interests === []): ?>

                <p class="no-interest">
                    Belum memilih minat belajar.
                </p>

            <?php else: ?>

                <div class="interest-list">

                    <?php foreach ($interests as $interest): ?>

                        <span class="interest-badge">
                            ✓ <?= e($interestOptions[$interest]) ?>
                        </span>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>


        <div class="result-actions">

            <a href="register.php" class="result-back">
                ← Kembali ke Form
            </a>

            <a href="index.php" class="result-home">
                Kembali ke Beranda →
            </a>

        </div>

    </section>

</main>


<footer class="result-footer">

    <strong>🎓 KursusKu UIN</strong>

    <small>
        © <?= date('Y') ?> KursusKu UIN.
        Belajar, daftar, dan kelola kursus dalam satu tempat.
    </small>

</footer>

</body>
</html>