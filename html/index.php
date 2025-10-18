<?php
session_start();

$host = "db";
$db   = "mydatabase";
$user = "user";
$pass = "password";

try {
    $dsn  = "mysql:host={$host};dbname={$db};charset=utf8mb4";
    $conn = new PDO(
        $dsn, $user, $pass,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    http_response_code(500);
    die("Connection failed: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8'));
}

$search = '';
if (isset($_POST['search'])) {
    $search = isset($_POST['query']) ? trim($_POST['query']) : '';
    $sql = "SELECT * FROM `menu` WHERE `naam` LIKE :search OR `omschrijving` LIKE :search";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
    $stmt->execute();
    $menu = $stmt->fetchAll();
} else {
    $sql = "SELECT * FROM `menu`";
    $stmt = $conn->query($sql);
    $menu = $stmt->fetchAll();
}

function h($v){ return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darko's</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="container-header">
        <img src="images/logo.png" alt="Logo Darko's">
        <a href="login.php">Login</a>
        <a href="index.php" aria-current="page">Home</a>
    </div>
</header>

<main>

    <form class="search-form" action="" method="post">
        <input type="text" name="query" placeholder="Zoek..." value="<?= h($search) ?>">
        <button type="submit" name="search">Zoeken</button>
    </form>

    <div class="menu-content" id="menu-lijst">
        <?php if (!empty($menu)): ?>
            <ul>
                <?php foreach ($menu as $item): ?>
                    <li>
                        <strong><?= h($item['naam']) ?> - </strong>
                        <strong><?= h($item['omschrijving']) ?></strong>
                        - €<?= number_format((float)$item['prijs'], 2, ',', '.') ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Geen resultaten gevonden.</p>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
