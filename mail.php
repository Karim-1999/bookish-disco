<!-- include config -->
<?php 
include('includes/functions.php'); 


?>


<?php
$connect = mysqli_connect('localhost', 'karim', 'secret', 'karim');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
} ?>
<!-- include database --> <?php include('includes/database.php'); ?>
<?php $nome = $_POST['firstname'];
$cognome = $_POST['lastname'];
$telefono = $_POST['phone'];
$email = $_POST['email'];
$messaggio = $_POST['message'];
$sql = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('" . $nome . "','" . $cognome . "','" . $telefono . "','" . $email . "','" . $messaggio . "')";
$result = $connect->query($sql);
if (!$result) {
    die("Couldn't enter data: " . $connect->error);
}
echo "Thank You For Contacting Us  -->  <a href=\"index.php\" > To go back </a>  "

; $connect->close();
 ?>
<?php if ($result) {

} 
 ?>

<?php 

/* ho provato per mandare mail automatica tramite phpmailer ma non ci sono riuscito probabilmente sarà un mio problema su gmail 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;  
    require 'phpmailer/src/Exception.php'; 
   require 'phpmailer/src/PHPMailer.php';
   require 'phpmailer/src/SMTP.php';
   
   if(isset($_POST['send'])){
       $name = htmlentities($_POST['firstname']);
       $email = htmlentities($_POST['email']);
       $subject = htmlentities($_POST['phone']);
       $message = htmlentities($_POST['message']);
   
       $mail = new PHPMailer(true);
       $mail->isSMTP();
       $mail->Host = 'smtp.gmail.com';
       $mail->SMTPAuth = true;
       $mail->Username = 'imparoprogrammazione2022@gmail.com';
       $mail->Password = 'tauvjamgcvkeirty';
       $mail->Port = 465;
       $mail->SMTPSecure = 'tls';
       $mail->isHTML(true);
       $mail->setFrom($email, $name);
       $mail->addAddress('imparoprogrammazione2022@gmail.com');
       $mail->Subject = ("$email ($subject)");
       $mail->Body = $message;
       $mail->send();

    echo "<script>
       alert('Sent Successfully');
       document.location.href = 'index.php';l
       </script>";  
 } */
 ?> 
