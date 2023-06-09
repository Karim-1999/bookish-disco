<?php

include('includes/header.php');
include('includes/database.php');
include('includes/functions.php');
secure();



if (isset($_GET['delete'])) {
    if ($stm = $connect->prepare('DELETE FROM users where id = ?')) {
        $stm->bind_param('i',  $_GET['delete']);
        $stm->execute();


        set_message("A user " . $_GET['delete'] . " has beed deleted");
        header('Location: users.php');
        $stm->close();
        die();
    } else {
        echo 'Could not prepare statement!';
    }
}

if ($stm = $connect->prepare('SELECT * FROM users')) {
    $stm->execute();

    $result = $stm->get_result();




    if ($result->num_rows > 0) {



?>

<style>

html, body {
  height: 90%;
}

.wrapper {
  min-height: 90%;
  display: flex;
  flex-direction: column;
}

.footer {
  margin-top: auto;
}



</style>
<div class="wrapper">
    <!-- Contenuto della pagina -->


        <h1 style="padding-top: 120px;" class="mt-5 mar">Users management</h1>
        <div class="cont1">

            <table>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Edit | Delete</th>

                </tr>

                <?php while ($record = mysqli_fetch_assoc($result)) {  ?>
                    <tr>

                        <td><?php echo $record['id']; ?> </td>
                        <td><?php echo $record['username']; ?> </td>
                        <td><?php echo $record['email']; ?> </td>
                        <td><?php echo $record['active']; ?> </td>
                        <td><a href="users_edit.php?id=<?php echo $record['id']; ?>">Edit</a> |
                            <a href="users.php?delete=<?php echo $record['id']; ?>">Delete</a>
                        </td>
                    </tr>


                <?php } ?>


            </table>
        </div>
        <a href="users_add.php"> Add new user</a>


  </div>





<?php
    } else {
        echo 'No users found';
    }


    $stm->close();
} else {
    echo 'Could not prepare statement!';
}
include('includes/footer.php');
?>