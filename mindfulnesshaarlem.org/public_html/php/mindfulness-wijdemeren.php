<?php
if(isset($_POST['email'])) {
    $email_to = "info@centrumwijdemeren.nl";
    $email_subject = "Email subject";
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $address = $_POST['address']; // required
    $location = $_POST['location']; // required
		
    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Bericht Wijdemeren!\n\n";
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "Location: ".clean_string($location)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
header('Location: https://mindfulnesshaarlem.org/gelukt.html');
exit();
?>

  <?php
}
?>