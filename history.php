<?php

$history = [
    [
        'name' => 'Alya',
        'course' => 'Web Dasar',
        'total' => 240000,
    ],
    [
        'name' => 'Bima',
        'course' => 'PHP Dasar',
        'total' => 340000,
    ],
    [
        'name' => 'Citra',
        'course' => 'Laravel Dasar',
        'total' => 500000,
    ],
];

require_once __DIR__ . '/helpers.php';

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>History Pendaftaran - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css?v=4">
</head>

<body>

<main class="container">

    <section class="page-intro">
        <p class="eyebrow">Data Latihan</p>

        <h1>History Pendaftaran</h1>

        <p>
            Berikut adalah contoh data riwayat pendaftaran kursus.
        </p>
    </section>

    <section class="form-card">

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kursus</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($history as $item): ?>

                    <tr>
                        <td><?= e($item['name']) ?></td>

                        <td><?= e($item['course']) ?></td>

                        <td><?= formatRupiah($item['total']) ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>

    </section>

</main>

</body>
</html>