<?php

// ##########################################
//               COLLECTING DATA
// ##########################################

$name = $_POST['contactname'];
$email = $_POST['contactemail'];
$message = $_POST['contactmessage'];
$myDate = date('l jS \of F Y h:i:s A');

// ##########################################
//               SENDING DATA
// ##########################################

$message2=$name."\n\n".$email."\n\n".$message."\n\n";

mail("contact.leaftube@gmail.com","LeafTube - Contact",$message2);

// ##########################################
//                SAVING DATA
// ##########################################

$myfile = fopen("all_contacts.txt", "a+");
fwrite($myfile, "The message below was receive on ".$myDate." from ".$name." (".$email.")\n\n".$message."\n\n");
fclose($myfile);

?>
