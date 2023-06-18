<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    
    function sendEmail($user, $pass, $from, $fromName, $to, $toName, $subject, $body){
        $data[] = array('from'=>$from,'fromName'=>$fromName,'to'=>$to,'toName'=>$toName,'subject'=>$subject,'body'=>$body);
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = $user;
            $mail->Password = $pass;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
        
            $mail->setFrom($from, $fromName);
            $mail->addAddress($to, $toName);
            
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
        
            $mail->isHTML(true);
            $mail->AltBody = 'Contenido sin formato'; //De esta forma se indica multipart/mixed
            $mail->Subject = $subject;
            $mail->Body = $body;
        
            $mail->send();
            $data[0]['status'] = 200;
            return $data;
        } catch (Exception $e) {
            $data[0]['status'] = 500;
            $data[0]['error'] = $mail->ErrorInfo;
            return $data;
        }
    }
?>