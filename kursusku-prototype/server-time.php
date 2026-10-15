<?php
date_default_timezone_set('Asia/Jakarta');

$serverTime = date('H:i:s');
$serverDate = date('d F Y');
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Server Time - KursusKu</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ecfdf5, #d1fae5);
            color: #173b35;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 650px;
            background: white;
            border-radius: 24px;
            padding: 45px 30px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.10);
        }

        .brand {
            font-size: 18px;
            font-weight: bold;
            color: #0f766e;
            margin-bottom: 35px;
        }

        .label {
            display: inline-block;
            background: #ccfbf1;
            color: #0f766e;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: bold;
        }

        h1 {
            margin: 22px 0 8px;
            font-size: 48px;
            letter-spacing: 2px;
            color: #134e4a;
        }

        .date {
            font-size: 18px;
            color: #64748b;
            margin-bottom: 30px;
        }

        .info {
            background: #f0fdfa;
            border-radius: 16px;
            padding: 18px;
            margin-bottom: 25px;
            color: #475569;
        }

        .back {
            display: inline-block;
            text-decoration: none;
            background: #0f766e;
            color: white;
            padding: 12px 22px;
            border-radius: 12px;
            font-weight: bold;
        }

        .back:hover {
            background: #115e59;
        }

        .footer {
            margin-top: 25px;
            font-size: 13px;
            color: #94a3b8;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 36px;
            }

            .card {
                padding: 35px 20px;
            }
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="brand">
            KursusKu UIN
        </div>

        <span class="label">
            SERVER TIME
        </span>

        <h1>
            <?= $serverTime ?>
        </h1>

        <div class="date">
            <?= $serverDate ?>
        </div>

        <div class="info">
            Waktu di atas diambil langsung dari
            <strong>server PHP KursusKu</strong>.
        </div>

        <a class="back" href="index.php">
            ← Kembali ke Beranda
        </a>

        <div class="footer">
            Sistem KursusKu • PHP Server
        </div>

    </div>

</body>

</html>