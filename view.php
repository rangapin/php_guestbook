<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <div class="main-container">
    <header>
        <?= getTopNav() ?>
    </header>
    <main>
        <h1>Please sign</h1>
        <?php showGuestBook($conn, TABLE_GUEST) ?>
    </main>
    <footer>
    <?= getFooter() ?>
    </footer>
    </div>
</body>
</html>