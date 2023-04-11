<?php include "includes/header.php"; ?>
<?php

include('includes/database.php');
include('includes/functions.php');

?>

<!-- hero section -->
<style>
  .carousel-item img {
    width: 100%;
    height: 600px;
    object-fit: cover;
  }


  .carousel-item {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: transform 1s ease-in-out;
  }

  .carousel-item-next,
  .carousel-item-prev,
  .carousel-item.active {
    transform: translateX(0);
  }

  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right,
  .carousel-item.active.carousel-item-left {
    transform: translateX(-100%);
  }

  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right,
  .carousel-item.active.carousel-item-right {
    transform: translateX(100%);
  }

  .carousel-item-next,
  .carousel-item-prev {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    transition: transform 1s ease-in-out;
  }

  .carousel-item-next {
    transform: translateX(100%);
  }

  .carousel-item-prev {
    transform: translateX(-100%);
  }

  .carousel-item::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
  }

  .carousel-caption {
    z-index: 1;
  }

  /* testi hero */

  .carousel-caption {
    left: 0;
    text-align: left;
    padding-left: 15%;
    padding-right: 15%;
  }

  .carousel-caption h5 {
    margin-bottom: 0.5rem;
    font-size: 5.25rem;
    font-weight: 900;
    color: white;
    width: 50%;
  }

  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1rem;
    width: 50%;
  }

  .textstatic {
    max-width: 400px;
  }

  .text-cont {
    width: 100%;
    display: flex;
    justify-content: center;
  }

  /* card */

  .card-img-top {
    width: 100%;
   height: 300px;
    object-fit: cover;
  }

  .card-body a {
   color: black;
  }

  .card-body a h5{
    color: red;
  }
  .card-body a:hover {
    color: blue;
  }

  ::selection {
  background-color: red;
}
</style>

<div class="hero-section">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://siviaggia.it/wp-content/uploads/sites/2/2020/12/laghi-di-plitvice-croazia.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Web &
            comunicazione</h5>
          <p>Soluzioni di qualita dallapprocio creativo concreto.
            Nello scenario attuale diventa sempre piit indispensabile
            avere una versione del proprio sito web compatibile con
            tutti i device oggi piu diffusi.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.ehabitat.it/wp-content/uploads/2016/10/The-Wave-Arizona-2.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Titolo 2</h5>
          <p>Testo descrittivo 2</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://img.fotocommunity.com/herbstbaum-98afdef5-30d2-42cb-958d-a26be878075d.jpg?height=400" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Titolo 3</h5>
          <p>Testo descrittivo 3</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Precedente</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Successiva</span>
    </a>
  </div>
</div>

<!-- end hero section -->

<!--  static section -->

<section class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12 ">
      <div class="text-cont">
        <div class="text-center textstatic">
          <h2 class="text-center headline">Fotogallery</h2>
          <p class="text-center ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
        </div>
      </div>
      <img src="images/imag1.PNG" class="img-fluid">

    </div>

  </div>


</section>


<!-- blog dynamic section -->


<?php if ($stm = $connect->prepare('SELECT * FROM posts')) {
  $stm->execute();

  $result = $stm->get_result();




  if ($result->num_rows > 0) {

?>
    <?php while ($record = mysqli_fetch_assoc($result)) { ?>
      <div class="container mt-5">
        <div class="row">
          <?php while ($record = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-6 mb-4">
              <div id="card" class="card h-100">
                <div class="card-body"><a  href="single.php?id=<?php echo $record['id']; ?>" >
                  <img src="<?php echo $record['Url-image']; ?>" class="img-fluid mb-4 card-img-top rounded">
                  <h5 class="card-title"><?php echo $record['title']; ?></h5>
                  <p class="card-text"><?php echo substr(strip_tags($record['content']), 0, 230) . '...'; ?></p>
                  <p class="card-text"><?php /* echo $record['date']; */ ?></p>

                 </a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
<?php }
  }
} ?>

<!-- end blog section -->

<!-- contact form  -->


<?php  include("form.php")  ?> 





<?php  include "includes/footer.php";  ?>