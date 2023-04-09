<style>
.cont-fut{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  width: 100%;
  height: 100%;
  padding: 30px 150px 30px 150px;
 
}

.cont-log{
  display: flex;
  flex-wrap: wrap;
 
}

li {
  list-style: none;
  margin: 10px;
}

li a, p a {
  text-decoration: none;
  color: white;
}

ul{

  position: relative;
}

#navbarNav ul li:not(:first-child)::after{
  content: "";
    height: 30%;
    width: 1px;
    background-color: red;
    position: absolute;
    top: 22px;
    translate: -10px;

}

.format {
  font-size: 12px;
  text-transform: uppercase;
  margin-top: 10px;
 
}

.copyright{
  text-align: center;
  padding: 10px;
  bottom: 0;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.5);

}

/* media query mobile */

@media screen and (max-width: 600px) {
  .cont-fut {
    padding: 30px 30px 30px 30px;
  }
  .cont-log {
    width: 100%;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    flex-direction: column;
  }
  .inline {
    width: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
  }
  .logo {
    width: 100px;
    height: 100px;
  }
  .format {
    font-size: 10px;
  }
}

</style>


<footer class="red">

<div class="cont-fut">


<div class="cont-log" > 

<img src="https://www.emotiondesign.it/wp-content/themes/emotiondesign/images/logo.png" alt="logo" class="logo" >

<div class="inline"> <h3>Med srl </h3>
<p>Via Fontevivo. 21 L - 19124 La Spezia (SP) </p>
<p> P. IVA / CF. 01346970112</p>
<p>Iscritta al Registro delle Imprese di La Spezia </p>
<p>Numero Iscrizione SP-121233 </p>
<p class="format"><a href="#">Policy</a> |<a href="#"> Cookie</a>  </p>



</div>
</div>

<div> 

<ul>
  <li> <a href="#">Chi siamo</a> </li>
  <li> <a href="#">Portfolio</a> </li>
  <li> <a href="#">Contatti</a> </li>
  <li> <a href="#">Novità dal Blog</a> </li>
  <li> <a href="#">Lavora con noi</a> </li>
</ul>
</div>




 
</div>

<div class="copyright"> copyright © 2002 - <?php echo date("Y") ?> Emotion Design</div>

</footer>


<div id="toast"></div>




<script src="js/mdb.min.js"></script>
<script>
      function showToast(message, position, type) {
        const toast = document.getElementById("toast");
        toast.className = toast.className + " show";

        if (message) toast.innerText = message;

        if (position !== "") toast.className = toast.className + ` ${position}`;
        if (type !== "") toast.className = toast.className + ` ${type}`;

        setTimeout(function () {
          toast.className = toast.className.replace(" show", "");
        }, 3000);
      }

      
    </script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <?php  get_message();  ?>
</body>
</html>