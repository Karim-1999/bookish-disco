<?php


include('includes/database.php');
include('includes/functions.php');


include('includes/header.php');




if (isset($_GET['id'])) {

    if ($stm = $connect->prepare('SELECT * from posts WHERE id = ?')) {
        $stm->bind_param('i', $_GET['id']);
        $stm->execute();

        $result = $stm->get_result();
        $post = $result->fetch_assoc();

        if ($post) {


?>
            <div style="padding-top: 120px;" class="container mt-5 mb-10">
                <div class="row justify-content-center">
                    <div class="col-md-8">


                        <article >
                            <!-- Title input -->
                            <div class="form-outline mb-4"> <h1><?php echo $post['title'] ?></h1>
                                

                            </div>
                            <div class="form-outline mb-4">
                                <img src="<?php echo $post['Url-image'] ?>" alt="" class="img-fluid  mb-4 rounded">
                            </div>
                            <div class="form-outline mb-4">
                                <?php echo $post['date'] ?>
                            </div>

                            <!-- Content input -->
                            <div class="form-outline mb-4">
                                <?php echo $post['content'] ?>
                            </div>

                            <!-- Date select -->




                        </article>



                    </div>

                </div>
            </div>





<?php
        }
        $stm->close();
    } else {
        echo 'Could not prepare statement!';
    }
} else {
    echo "No user selected";
    die();
}

include('includes/footer.php');
?>