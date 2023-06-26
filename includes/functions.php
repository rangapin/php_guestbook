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

function showGuestBook($handle, $table) {
    ?>
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
    <?php
}