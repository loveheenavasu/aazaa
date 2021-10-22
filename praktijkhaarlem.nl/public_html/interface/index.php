<?php
    $name = $_POST['name'];
    $message = $_POST['message'];
    $from = 'From: Centrumpraktijk'; 
    $to = 'info@centrumpraktijk.nl'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '6') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Je boodschap is verstuurd!</p>';
	} else { 
	    echo '<p>Er is iets fout gegaan. Ga terug en probeer het opnieuw!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '6') {
	echo '<p>Je hebt de controlevraag verkeerd beantwoord!</p>';
    }
?>