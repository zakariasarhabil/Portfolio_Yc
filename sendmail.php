<?php

    
if (isset($_POST['submit'])) {
    $usermail = $_POST['useremail'];
    $mymail = "zakariasarhabil@gmail.com";
    $object = $_POST['object'];
    $message = $_POST['Message'];
  
    mail($mymail,$object,$message,'From: '.$usermail);
    header("location:index.php?emailsend");
  }
  

   

    // var_dump( mail('alaeessaki3@gmail.com','testing','this is just a test','From: alaeessaki3@gmail.com'));

?>