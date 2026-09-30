<?php

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$studyProgram = trim($_POST['study_program'] ?? '');
$course = $_POST['course'] ?? '';
$participantType = $_POST['participant_type'] ?? '';
$interests = $_POST['interests'] ?? [];
$note = trim($_POST['note'] ?? '');
$source = $_POST['source'] ?? '';

$interestText = implode(', ', $interests);

function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Pendaftaran - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">KursusKu</a>

        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="index.php#katalog">Katalog</a>
            <a href="registration.php">Daftar</a>
        </nav>
    </div>
</header>

<main class="container">

    <section class="page-intro">
        <p class="eyebrow">Pendaftaran Berhasil</p>
        <h1>Data Pendaftaran Anda</h1>
        <p>Berikut data yang berhasil dikirim melalui form.</p>
    </section>

    <section class="summary-card">

        <div class="alert-success">
            Pendaftaran berhasil dikirim.
        </div>

        <ul class="summary-list">
            <li>
                <strong>Nama Lengkap:</strong>
                <?= e($name) ?>
            </li>

            <li>
                <strong>Email:</strong>
                <?= e($email) ?>
            </li>

            <li>
                <strong>Nomor HP:</strong>
                <?= e($phone) ?>
            </li>

            <li>
                <strong>Program Studi:</strong>
                <?= e($studyProgram) ?>
            </li>

            <li>
                <strong>Kursus:</strong>
                <?= e($course) ?>
            </li>

            <li>
                <strong>Jenis Peserta:</strong>
                <?= e($participantType) ?>
            </li>

            <li>
                <strong>Minat Belajar:</strong>
                <?= e($interestText) ?>
            </li>

            <li>
                <strong>Catatan:</strong>
                <?= e($note) ?>
            </li>

            <li>
                <strong>Sumber:</strong>
                <?= e($source) ?>
            </li>
        </ul>

        <p>
            <a href="registration.php" class="btn-primary">
                Kembali ke Form
            </a>
        </p>

    </section>

</main>

</body>
</html>