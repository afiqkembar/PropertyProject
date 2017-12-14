 <?php
     $mailMsg ='Name:' .$_POST['Name'] ."\n"
         .'Email:' .$_POST['Email'] ."\n"
         .'Phone Number:' .$_POST['phone'] ."\n";
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "noreply0196@gmail.com";
    $mail ->Password = "admin1234@";
    $mail ->SetFrom("noreply0196@gmail.com");
    $mail ->Subject = "Register Us Now";
    $mail ->Body = $mailMsg;
    $mail ->AddAddress("jacpng86@gmail.com");

    if(!$mail->Send())
    {
        echo "Mail Not Sent"; ?>
        <p>click  <a href="index.html">here </a> to REGISTER again.</p>
        <?php
    }
    else
    {
      header('location:index.html');
    }
