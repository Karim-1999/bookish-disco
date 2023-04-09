<!-- include config --> 
<?php include('includes/config.php');include('includes/functions.php'); ?> 
<?php 
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // l'indirizzo email non è valido
  echo "L'indirizzo email non è valido!";
} else {
  // l'indirizzo email è valido, puoi procedere con l'elaborazione del form
  // ad esempio, inserire i dati nel database o inviare una mail




           } $connect = mysqli_connect('localhost', 'karim', 'secret','karim');

if (mysqli_connect_errno()){
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}?> 
<!-- include database --> <?php include('includes/database.php'); ?>
 <?php $nome = $_POST['firstname']; $cognome = $_POST['lastname']; $telefono = $_POST['phone']; $email = $_POST['email']; $messaggio = $_POST['message'];
  $sql = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('".$nome."','".$cognome."','".$telefono."','".$email."','".$messaggio."')";
   $result = $connect->query($sql);
    if(!$result){ die("Couldn't enter data: ".$connect->error); 
    } echo "Thank You For Contacting Us "; $connect->close(); ?>
     <?php if ($result) { 
        // Invio dell'e-mail di risposta automatica al mittente 
        
        $to = $email; $subject = "Grazie per averci contattato"; 
        $message = "Gentile $nome,\n\nGrazie per averci contattato. Riceverai presto una risposta dal nostro team.\n\nCordiali saluti,\nIl team di esempio";
         $headers = "From: imparoprogrammazione2022@gmail.com "; mail($to, $subject, $message, $headers);
          // Reindirizzamento alla pagina di conferma
           header("Location: index.php"); } else { 
            echo "Errore nell'inserimento dei dati nel database: " . $connect->error; } mysqli_close($connect); ?>