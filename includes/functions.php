<?php 

function getTopNav() {
    return "
    <nav>
    <ul>
        <li><a href='index.php'>Home</a></li>
        <li><a href='view.php'>View Guestbook</a></li>
        <li><a href='signup.php'>Sign Guestbook</a></li>
    </ul>
    </nav>";
}

function getFooter() {
    return "<footer> Richard Angapin </footer>";
}

function showGuestBook($handle, $table)
{
    ?>

    <table class="guestbook_table" cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
            <?php
            if (isset($_SESSION['user'])){
            ?>
            <th>Actions</th>
            <?php } ?>
        </tr>
        </thead>
        <tbody>
        <?php
        $result = getAllRecords($handle, $table);
        $counter = 1;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?= $counter++; ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['comment'] ?></td>
                <?php
                if (isset($_SESSION['user'])){?>
                <td>
                    <ul>
                        <li><a href="edit.php?id=<?= $row['id'] ?>">Edit</a></li>
                        <li><a href="delete.php?id=<?= $row['id'] ?>">Delete</a></li>
                    </ul>
                </td>
                <?php } ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <?php
}