<?php
// Daftar file latihan
$latihan = [
   "latihan1.php" => "Latihan 1: PersegiPanjang",
   "latihan2.php" => "Latihan 2: Produk",
   "latihan3.php" => "Latihan 3: Mini Project",
   "tugasmandiri.php" => "Tugas Mandiri: Manajemen Perpustakaan",
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8" />
   <title>Menu Latihan PHP</title>
   <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.2);
            width: 320px;
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin: 15px 0;
        }
        a {
            display: block;
            background: #6c63ff;
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 14px 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(108, 99, 255, 0.5);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        a:hover {
            background: #574bff;
            transform: translateY(-4px);
        }
        a:active {
            transform: translateY(0px);
        }
   </style>
</head>
<body>
    <div class="container">
        <h1>Latihan PHP</h1>
        <h2> Bersama Tesa Firna Ananta</h2>
        <ul>
            <?php foreach ($latihan as $file => $judul): ?>
                <li><a href="<?= htmlspecialchars($file) ?>"><?= htmlspecialchars($judul) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
