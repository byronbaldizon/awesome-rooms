<?php 
    $email_to=$_POST['toEmail'];
    $fromEmail=$_POST['fromEmail'];
    $subject=$_POST['subject'];
    $body=$_POST['message'];
    

    //Location of template file
    $message=file_get_contents("./templateFile.php");
    

    //create email headers

    $headers= "From: byronbaldizon demo <demo@mymail.me\r\n";
    $headers.="MIME-Version: 1.0\r\n";
    $headers.="Content-Type: text/html; charset:=ISO-8859-1\r\n";

    
    $swap_var=array(
        "{TITLE}"=>"Your Reservation is Confirmed",
        "{SUBTITLE}"=>"You're going to San Francisco",
        "{FOOTER}"=>"LuxuryBrand Studio. Easy Parking"
    );

    foreach(array_keys($swap_var) as $key){
        $message=str_replace($key,$swap_var[$key],$message);
    }
    echo $message;

    if(mail($email_to,$subject,$message,$headers)){
        echo "Email sent succesfully to $email_to";
    }else{
        echo "Sorry, failed while sending mail!";
    }
?>
