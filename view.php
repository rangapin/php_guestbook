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
        <table>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
<th>
    <ul>
        <li><a href="edit.php?id=">Edit</a></li>
        <li><a href="delete.php?id=">Delete</a></li>
    </ul>
</th>
                </tr>
            </thead>
        </table>
    </main>
    <footer>
    <?= getFooter() ?>
    </footer>
    </div>
</body>
</html>