<?php



    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    use PHPMailer\PHPMailer\PHPMailer;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    require 'vendor/autoload.php';


    try { 
        $mail =  new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = false;
        $mail->Port = 25;
        $mail->isHTML(true);
        $mail->setfrom("noreply@realartistry.uk");
        $mail->addAddress('lebylkakabyle@gmail.com');
        $mail->Subject = 'Coucou nathan';
        $mail->Body = '<h1><a href="https://preview.redd.it/megamind-no-bitches-meme-3264x3264-v0-gb5bw6safuu81.png?width=1080&crop=smart&auto=webp&s=d1b5b7f7dccdc206c7361a25f5af84fdd30d54b8">Click here for have many cookies</a></h1>';
        $mail->send();
    } catch (Exception $e) {
        echo "mail not sent mail error: " . $e->getMessage();
    }


    if ($mail->send()) {
        echo 'please check your mail box';
    }


?>