<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/helpers.php';
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Kursus - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <main class="container">

        <section class="page-intro">

            <p class="eyebrow">
                Pendaftaran Kursus
            </p>

            <h1>
                Mulai belajar bersama KursusKu
            </h1>

            <p>
                Gunakan data latihan. Field bertanda wajib harus diisi.
            </p>

        </section>
<section class="form-card">
        <form action="process.php" method="POST" class="registration-form">

    <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input
            type="text"
            id="name"
            name="name"
            required
            minlength="3"
            maxlength="100"
            autocomplete="name"
        >
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            required
            autocomplete="email"
        >
    </div>
<div class="form-group">
        <label for="phone">Nomor HP</label>
        <input
            type="tel"
            id="phone"
            name="phone"
            required
            minlength="10"
            maxlength="15"
            autocomplete="tel"
        >
    </div>
    <div class="form-group">
        <label for="study_program">Program Studi</label>
        <input
            type="text"
            id="study_program"
            name="study_program"
            required
            minlength="2"
            maxlength="100"
            autocomplete="organization-title"
        >
    </div>
    <div class="form-group">
    <label for="course">Pilih Kursus</label>

    <select id="course" name="course" required>
        <option value="">-- Pilih Kursus --</option>

        <?php foreach ($courses as $course): ?>
            <option value="<?= e($course['code']) ?>">
                <?= e($course['name']) ?> - <?= formatRupiah($course['fee']) ?>
            </option>
        <?php endforeach; ?>

    </select>
</div>
    <fieldset class="form-group">
    <legend>Jenis Peserta</legend>

    <label class="choice">
        <input
            type="radio"
            name="participant_type"
            value="mahasiswa"
            required
        >
        Mahasiswa
    </label>

    <label class="choice">
        <input
            type="radio"
            name="participant_type"
            value="guru"
        >
        Guru
    </label>

    <label class="choice">
        <input
            type="radio"
            name="participant_type"
            value="umum"
        >
        Umum
    </label>
</fieldset>
    <fieldset class="form-group">
    <legend>Minat Belajar</legend>

    <?php foreach ($interestOptions as $key => $label): ?>
        <label class="choice">
            <input
                type="checkbox"
                name="interests[]"
                value="<?= e($key) ?>"
            >
            <?= e($label) ?>
        </label>
    <?php endforeach; ?>

</fieldset>
<div class="form-group">
    <label for="learning_mode">Mode Belajar</label>

    <select id="learning_mode" name="learning_mode" required>
        <option value="">-- Pilih Mode --</option>
        <option value="offline">Tatap Muka</option>
        <option value="online">Online</option>
        <option value="hybrid">Hybrid</option>
    </select>
</div>
<div class="form-group">
    <label for="package_count">Jumlah Paket</label>

    <select id="package_count" name="package_count" required>
        <option value="">-- Pilih Jumlah Paket --</option>

        <?php for ($i = 1; $i <= 3; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?> Paket</option>
        <?php endfor; ?>

    </select>
</div>
    <div class="form-group">
        <label for="note">Catatan</label>

        <textarea
            id="note"
            name="note"
            rows="5"
            maxlength="500"
            placeholder="Tulis catatan jika ada..."
        ></textarea>
    </div>
    <input type="hidden" name="source" value="week-05">
    <button type="submit" class="btn-primary">
    Daftar Kursus
</button>


</form>
        </section>

    </main>

</body>

</html>