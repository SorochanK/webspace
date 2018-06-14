<?php
include_once 'ini.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


try {
    $dbh = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASS);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$statement = $dbh->prepare("INSERT INTO messages(name, email, phone,site_type,comment,form_name)
    VALUES(:name, :email, :phone,:site,:comment,:form_name)");


$data = $_POST['data'];

$statement->execute([
    'name' => $data['name'],
    'email' => $data['email'],
    'phone' => $data['phone'],
    'site' => $data['site_type'],
    'comment' => $data['comment'],
    'form_name' => $data['form_name'],
    /*'sale'=>$data['sale']*/
]);
$rowsAffected = $statement->rowCount();

echo $statement->rowCount();

/*if ($rowsAffected) {
    $data = $_POST['data'];

    $comment = isset($data['comment']) ? $data['comment'] : 'нет комментария';
    $email = isset($data['email']) ? $data['email'] : 'нет Emaila';
    $site = isset($data['site_type']) ? $data['site_type'] : 'не выбран тип сайта';
    $name = $data['name'];
    $phone = $data['phone'];

    $message = "<p>Новый  пользователь: $name</p>
<p>Телефон: $phone</p>
<p>Комментарий: $comment</p>
<p>Email: $email</p>
<p>Тип сайта: $site</p>
";
    $subject = 'новый пользователь';


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        //$mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'kistik23@example.com';                 // SMTP username
        $mail->Password = '@k69l71k98n09';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('kistik23@gmail.com', 'kostya');
        $mail->addAddress('sorochank7@gmail.com', 'Joe User');     // Add a recipient
        $mail->addAddress('sibibert2025@gmail.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
      //  echo 'Message has been sent';
    } catch (Exception $e) {
  //      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }


}*/








