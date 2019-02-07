<?php
$name = $_POST['contactname'];
$email = $_POST['contactemail'];
$message = $_POST['contactmessage'];

$message2=$name."\n\n".$email."\n\n".$message."\n\n";

mail("contact.leaftube@gmail.com","LeafTube - Contact",$message2);

?>
