<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/helpers.php';
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Loop Lab - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<main class="container">

    <section class="page-intro">
        <p class="eyebrow">Praktikum PHP</p>
        <h1>Loop Lab</h1>
        <p>Contoh penggunaan perulangan dalam PHP.</p>
    </section>

    <section class="form-card">

        <h2>1. Loop For</h2>

        <ul>
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <li>Paket ke-<?= $i ?></li>
            <?php endfor; ?>
        </ul>


        <h2>2. Loop While</h2>

        <ul>
            <?php $i = 1; ?>

            <?php while ($i <= 3): ?>

                <li>Data ke-<?= $i ?></li>

                <?php $i++; ?>

            <?php endwhile; ?>
        </ul>


        <h2>3. Loop Do-While</h2>

        <ul>
            <?php $i = 1; ?>

            <?php do { ?>

                <li>Data ke-<?= $i ?></li>

                <?php $i++; ?>

            <?php } while ($i <= 3); ?>

        </ul>


        <h2>4. Daftar Fasilitas</h2>

        <ul>
            <?php foreach ($facilities as $facility): ?>

                <li><?= e($facility) ?></li>

            <?php endforeach; ?>
        </ul>

    </section>

</main>

</body>

</html>