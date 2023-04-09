<?php

include('includes/config.php');
include('includes/database.php');
include('includes/functions.php');
secure();  

include('includes/header.php');


?>
<div class=" mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
        <h1 class="display-1">Dashboard </h1>

        <div class="mt-5 center"> 
            <a class="btn btn-primary" href="users.php">Users management &#129333;</a> | 
            <a class="btn btn-primary" href="posts.php">Posts management &#128221;</a> |
            <a class="btn btn-primary" href="posts_add.php">Posts add &#9997;</a>
        </div>

    </div>
</div>

<?php include "mails_received.php"; ?>
