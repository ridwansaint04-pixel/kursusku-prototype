<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Kursus - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header class="site-header">
        <div class="container nav-wrap">

            <a class="brand" href="index.php">
                KursusKu
            </a>

            <nav aria-label="Navigasi utama">
                <a href="index.php">Beranda</a>
                <a href="index.php#katalog">Katalog</a>
                <a href="registration.php">Daftar</a>
            </nav>

        </div>
    </header>

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
        <form action="process-registration.php" method="POST" class="registration-form">

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
            <option value="WEB-01">Web Dasar</option>
            <option value="PHP-01">PHP Dasar</option>
            <option value="PHP-02">PHP Lanjutan</option>
            <option value="LAR-01">Laravel Fundamental</option>
            <option value="DB-01">MySQL Dasar</option>
            <option value="UI-01">UI Web Dasar</option>
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
                value="umum"
            >
            Umum
        </label>
    </fieldset>
    <fieldset class="form-group">
        <legend>Minat Belajar</legend>

        <label class="choice">
            <input
                type="checkbox"
                name="interests[]"
                value="frontend"
            >
            Frontend
        </label>

        <label class="choice">
            <input
                type="checkbox"
                name="interests[]"
                value="backend"
            >
            Backend
        </label>

        <label class="choice">
            <input
                type="checkbox"
                name="interests[]"
                value="database"
            >
            Database
        </label>
    </fieldset>
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