<?
if (isset($_POST["email"]) && isset($_POST["code"])){
   $to=$_POST["email"];
    $subject="Verify Code";
    $message ="Your verification code is: " . $_POST["code"];
    mail($to,$subject,$message);
    echo "Send successfully";
}

?> 